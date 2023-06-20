<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class postController extends Controller
{
    //
    public function get_posts(){
        $posts = BlogPost::all();
        return view('blog', ['posts' => $posts]);
    }
    public function get_post(Request $request){
        $post = BlogPost::find($request->id);
        return view('blog_post', ['post' => $post]);
    }
    public function blog_category(Request $request){
        $category = BlogCategory::find($request->id);
        return view('blog_category', ['category' => $category]);
    }
    public function blog_categpries(){
        $categories = BlogCategory::all();
        return view('blog_categories', ['categories' => $categories]);
    }
    public function add_post_form(){
        return view('admin/add_post');
    }
    public function add_post(Request $request){
        $post = new BlogPost();        
        $post->title = $request->title;
        $post->content = $request->content;
        $post->author_id = $request->author_id;
        $post->category_id = $request->category_id;

        $post->save();

        return redirect(route('posts'));
    }
    public function update_post_form(Request $request){

        $post = BlogPost::find($request->id);

        return view('admin/update_post', ['post' => $post]);
    }
    public function update_post(Request $request){
        $post = BlogPost::find($request->id);        
        $post->title = $request->title;
        $post->content = $request->content;
        $post->author_id = $request->author_id;
        $post->category_id = $request->category_id;

        $post->save();

        return redirect(route('posts'));
    }
    public function delete_post(Request $request){
        BlogPost::find($request->id)->delete();
        return redirect('posts');
    }
}
