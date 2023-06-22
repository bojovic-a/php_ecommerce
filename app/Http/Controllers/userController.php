<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class userController extends Controller
{
    //
    public function register_form(){
        $categories = ProductCategory::top_level_categories();
        return view('website/user/register', ['categories'=>$categories]);
    }

    public function register(Request $request){
        $user = new User();
        $user->username = $request->username;

        
        $user->password = Hash::make($request->password, ['rounds'=>12]);
        $user->email = $request->email;        

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->image->extension();  

        $request->file('image')->move(public_path('images/users'), $imageName);
        
        $user->image_url = $imageName;        

        var_dump($user);
        $user->save();        


        $user->save();
        return view('website/user/profile', ['user'=>$user, 'context' => 'register']);
    }
    public function login_form(){
        $categories = ProductCategory::top_level_categories();
        return view('website/user/login', ['categories'=>$categories]);
    }
    public function login(Request $request){                      
        
        $user = User::get_by_email($request->email);        

        if ($user && Hash::check($request->password, $user->password)){
            $request->session()->put(['user_id'=>$user->id]);
            return redirect(route('homePage'));
        }
        else{
            return redirect(route('website.login_form', ['message'=>'Invalid credentials.']));
        }        
    }
    public function profile(Request $request){
        if ($request->session()->has('user_id')){
            $user_id = $request->session()->get('user_id');

            $user = User::find($user_id);            
            $categories = ProductCategory::top_level_categories();
            return view('website/user/profile', ['user'=>$user, 'categories'=>$categories]);
        }
        else {
            return redirect(route('login'));
        }
    }
    public function logout(Request $request){
        $request->session()->flush();
        return redirect(route('homePage'));
    }
    public function update_profile(Request $request){
        $user = User::find($request->session()->get('user_id'));
        $categories = ProductCategory::top_level_categories();
        return view('website/user/register', ['user'=>$user, 'categories'=>$categories, 'context'=>'update']);
    }
    public function update_profile_post(Request $request){
        $user = User::find($request->session()->get('user_id'));
        
        $user->username = $request->username;
        $user->email = $request->email;

        if($request->file('image')){
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $imageName = time().'.'.$request->product_image->extension();  

            $request->file('image')->move(public_path('images/users'), $imageName);
            
            $user->image_url = $imageName;        
        }

        $user->save();

        return redirect(url('/profile'));
               
    }
}
