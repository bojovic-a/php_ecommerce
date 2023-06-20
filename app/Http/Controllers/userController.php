<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    //
    public function register_form(){
        return view('website/user/register');
    }

    public function register(Request $request){
        $user = new User();
        $user->username = $request->username;

        $hashed_pass = password_hash($request->password, PASSWORD_BCRYPT);
        $user->password = $hashed_pass;
        $user->email = $request->email;
        $user->image_url = $request->image_url;

        $user->save();
        return view('website/user/profile', ['user'=>$user]);
    }
    public function login_form(){
        return view('website/user/login');
    }
    public function login(Request $request){
        $request->session->put('user_id', $request->user_id);
        return redirect('profile');
    }
    public function profile(Request $request){
        if ($request->session->has('user_id')){
            $user_id = $request->session->get('user_id');

            $user = User::find($user_id);            
            return view('website/user/profile');
        }
        else {
            return redirect(route('login'));
        }
    }
}
