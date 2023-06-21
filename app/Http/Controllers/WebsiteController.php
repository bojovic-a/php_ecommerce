<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //
    public function homePage(Request $request){
        $topLevelCategories = ProductCategory::top_level_categories();

        return view('website/homepage', ['categories'=>$topLevelCategories, 'user_id'=>$request->session()->get('user_id')]);
    }
    public function aboutUs(){
        return view('website/about_us');
    }

    public function contact(){
        return view('website/contact');
    }
}
