<?php

use App\Http\Controllers\productController;
use App\Http\Controllers\userController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//webpage
Route::get('/', [WebsiteController::class, 'homePage'])->name('homePage');
Route::get('/about_us', [WebsiteController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');

//products
Route::get('/add_to_cart/{id}', [productController::class, 'add_to_cart'])->name('add_to_cart');
Route::get('/product_categories', [productController::class, 'product_categories'])->name('product_categories');
Route::get('/product_subcategories/{id}', [productController::class, 'product_subcategories'])->name('product_subcategories');
Route::get('/category/{id}', [productController::class, 'get_products_by_category'])->name('category');
Route::get('/product/{id}', [productController::class, 'get_product'])->name('get_product');

//user
Route::get('/register_form', [userController::class, 'register_form'])->name('register_form');
Route::post('/register', [userController::class, 'register'])->name('register');
Route::get('/login_form', [userController::class, 'login_form'])->name('login_form');
Route::post('/login', [userController::class, 'login'])->name('login');
Route::post('/logout', [userController::class, 'logout'])->name('logout');
Route::get('/profile', [userController::class, 'profile'])->name('profile');

//blog
Route::get('/posts', [blogController::class, 'get_posts'])->name('posts');
Route::get('/post/{id}', [blogController::class, 'get_post'])->name('post');
Route::get('/blog/category/{id}', [blogController::class, 'blog_categoty'])->name('blog_category');
Route::get('/categories', [blogController::class, 'blog_categories'])->name('blog_categories');
Route::get('/add_post_form', [blogController::class, 'add_post_form'])->name('add_post_form');
Route::post('/add_post', [blogController::class, 'add_post'])->name('add_post');
Route::get('/update_post_form/{id}', [blogController::class, 'update_post_form'])->name('update_post_form');
Route::post('/update_post', [blogController::class, 'update_post'])->name('update_post');
Route::get('/delete_post/{id}', [blogController::class, 'delete_post'])->name('delete_post');

//admin
Route::get('/admin/new_product', [productController::class, 'new_product'])->name('new_product');
Route::post('/admin/add_product', [productController::class, 'add_product'])->name('add_product');
Route::get('/admin/change_product/{id}', [productController::class, 'change_product'])->name('change_product');
Route::post('/admin/update_product', [productController::class, 'update_product'])->name('update_product');
Route::get('/admin/add_post_form', [blogController::class, 'add_post_form'])->name('add_post_form');
Route::post('/admin/add_post', [blogController::class, 'add_post'])->name('add_post');
Route::get('/admin/update_post_form/{id}', [blogController::class, 'update_post_form'])->name('update_post_form');
Route::post('/admin/update_post', [blogController::class, 'update_post'])->name('update_post');
Route::get('/admin/delete_post/{id}', [blogController::class, 'delete_post'])->name('delete_post');
