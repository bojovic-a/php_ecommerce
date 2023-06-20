<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class productController extends Controller
{
    //
    public function get_products_by_category(Request $request){
        $products = Product::where('product_category_id', '=', $request->id)->get();
        $categories = ProductCategory::top_level_categories();
        return view('website/product/products', ['products'=>$products, 'categories'=>$categories]);
    }
    public function get_product(Request $request){
        $product = Product::find($request->id);
        return view('product', ['product'=>$product]);
    }
    public function add_to_cart(Request $request){
            
        if (Order::where('user_id', $request->user_id)->get){
            $order = Order::where(
                ['user_id', '=', $_SESSION['user_id']],
                ['status', '=', 'cart']
                )->get();
        }
        else{
            $cart = new OrderItem();
        }        
        $cart->product_id = $request->product->id;

        return view('cart', ['cart' => $cart]);

    }

    public function buy(Request $request){
        $order = Order::where(
            ['user_id', '=', $_SESSION['user_id']],
            ['status', '=', 'cart']
            )->get();

        $order->status == 'order';
        $order->save();

        return redirect(url('profile'));
    }

    public function change_product(Request $request){
        $product = Product::find($request->id);

        return view('change_product_form', ['product' => $product]);        
    }
    public function update_product(Request $request){
        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image_url = $request->image_url;

        $product->update();

        return redirect(route('products'));
    }
    public function new_product(){        

        return view('add_product_form');        

    }
    public function add_product(Request $request){
        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image_url = $request->image_url;

        $product->save();

        return redirect(route('products'));
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


}
