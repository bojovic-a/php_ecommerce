<?php

namespace App\Http\Controllers;
use App\Models\CategoryHasProducts;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class productController extends Controller
{
    //
    public function get_products_by_category(Request $request){
        $chp = CategoryHasProducts::where('category_id', '=', $request->id)->get();
                
        $products = [];

        foreach($chp as $c){
            $product = $c->products();
            $products[] = $product;
        }               
        $categories = ProductCategory::top_level_categories();
        return view('website/product/products', ['products' => $products, 'categories'=>$categories]);
    }
    public function get_product(Request $request){
        $product = Product::find($request->id);
        $topLevelCategories = ProductCategory::top_level_categories();
        return view('website/product/product', ['product'=>$product, 'categories'=>$topLevelCategories]);
    }
    public function add_to_cart(Request $request){
        
        if (!$request->session()->get('user_id')){
            return redirect(route('login_form', ['message'=>'You have to be logged in']));
        }
        $user_id = $request->session()->get('user_id');

        if (Order::get_current_user_order($user_id) != null){
            $cart = Order::get_current_user_order($user_id);             
        }
        else{
            $cart = Order::new_cart($user_id);            
        }        
        
        $orderItem = OrderItem::new_order_item($cart->id, $request->id);
        
        return redirect()->back()->with('message',"This product has been added to your cart.");

    }

    public function cart(Request $request){
        $order = Order::get_current_user_order($request->session()->get('user_id'));
        $categories = ProductCategory::top_level_categories();
        if(!$order){
            return view('website/product/cart', ['categories'=>$categories, 'message'=>'Your cart is empty']);
        }
        $orderItems = $order->order_items()->get();        
        
        return view('website/product/cart', ['order'=>$order, 'orderItems'=>$orderItems, 'categories'=>$categories]);
    }

    public function buy(Request $request){
        $order = Order::get_current_user_order($request->session()->get('user_id'));
        
        $order->status = 'order';
        $order->save();

        return redirect(url('profile'));
    }

    public function change_product(Request $request){
        $product = Product::find($request->id);
        $categories = ProductCategory::top_level_categories();
        return view('admin/update_product', ['product' => $product, 'context'=>'update', 'categories'=>$categories]);
    }
    public function update_product(Request $request){
        $product_id = $request->input('id');
        $product = Product::find($product_id);
        $product->title = $request->input('product_name');
        $product->description = $request->input('product_description');
        $product->price = $request->input('product_price');
        
        if (!$request->file('product_image') == null){
            $product->image_url = $request->input('product_image');
        }
        
        $categories = $request->input('product_categories');        
        CategoryHasProducts::where('product_id', '=', $product_id)->delete();
        
        foreach($categories as $category){

            $phc = new CategoryHasProducts();            
            $phc->product_id = $product->id;
            $phc->category_id = $category;

            $phc->save();
            
        }
        
        $product->update();

        return redirect(url('/product_categories'));
    }
    public function new_product(){        

        $categories = ProductCategory::all();
    
        return view('admin/add_product', ['categories' => $categories, 'context'=>'creeate']);        

    }
    public function add_product(Request $request){                
        $product = new Product();
        $product->title = $request->input('product_name');
        $product->description = $request->input('product_description');
        $product->price = $request->input('product_price');        

        $request->validate([
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->product_image->extension();  

        $request->file('product_image')->move(public_path('images/products'), $imageName);
        
        $product->image_url = $imageName;        

        $product->save();        

        $categories = $request->product_categories;

        foreach($categories as $category){
            
            $phc = new CategoryHasProducts();            
            $phc->product_id = $product->id;
            $phc->category_id = $category;

            $phc->save();
        }

        return redirect(url('admin/new_product'));
    }
    
    public function product_categories(){
        $categories = ProductCategory::top_level_categories();

        return view('website/product/categories', ['categories' => $categories]);
    }
    public function product_subcategories(Request $request){
        $thisCategory = ProductCategory::find($request->id);
        $subcategories = $thisCategory->product_subcategories();

        return view('website/product/categories', ['categories' => $subcategories]);
    }

    public function list_products(Request $request) {
        $products = Product::all();

        return view('admin/list_products', ['products'=>$products]);
    }

}
