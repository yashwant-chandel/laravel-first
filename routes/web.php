<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Adminlogin;
use App\Http\Controllers\Adminpanel;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Shop;
use App\Http\Controllers\Blog;
use App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('deletecart',[Admin::class,'deletecart']);
Route::post('cart',[Admin::class,'cart']);
Route::get('/cartview',[Admin::class,'cartview']);
Route::get('/contact-page',[Admin::class,'contactus']);

Route::get('/privacypolicy', function () {
    return view('privacy-policy-page');
});

Route::get('/loginuser',[Adminlogin::class,'index']);
Route::post('/login',[Adminlogin::class,'login']);


Route::get('/AddProducts/{id?}',[Adminpanel::class,'Products']);
Route::get('/AddBlogs/{id?}',[Adminpanel::class,'Blogs']);
Route::get('/about',[Home::class,'Aboutauthor']);
Route::post('/products',[Adminpanel::class,'Addproducts']);
Route::post('/blogs',[Adminpanel::class,'Addblogs']);
Route::post('/adminedit',[Adminpanel::class,'Adminedit']);
Route::get('/logout',[Adminpanel::class,'logout']);
Route::get('/shop/{id?}',[Shop::class,'index']);
Route::get('/blogs-page',[Blog::class,'index']);
Route::get('/',[Home::class,'index']);
Route::get('/products/{id}',[Shop::class,'products']);
Route::get('/blogs-page/{id}',[Blog::class,'blogsview']);
Route::get('/adminview',[Adminpanel::class,'adminview']);
Route::post('/banner',[Adminpanel::class,'banner']);
Route::get('/Productsview',[Adminpanel::class,'edit']);
Route::get('/Editblogs',[Adminpanel::class,'Editblogs']);
Route::get('/delete/{id}',[Blog::class,'deleteblogs']);
Route::get('/deleteproduct/{id}',[Shop::class,'deleteproducts']);
Route::get('register',[Adminlogin::class,'registeruser']);
Route::post('registeruser',[Adminlogin::class,'registerdata']);
Route::get('Addcategories/{id?}',[Admin::class,'Categories']);
Route::get('Addtags/{id?}',[Admin::class,'Tags']);
Route::post('addcategories',[Admin::class,'AddCategories']);
Route::post('addtags',[Admin::class,'AddTags']);
Route::get('Addbanner',[Admin::class,'Addbanner']);
Route::get('profile',[Admin::class,'Profile']);
Route::get('Edittags',[Admin::class,'EditTags']);
Route::get('Editcategories',[Admin::class,'EditCategory']);
Route::post('updatecart',[Admin::class,'updatecart']);
Route::get('deletecat/{id}',[Admin::class,'deletecategory']);
Route::get('deletetag/{id}',[Admin::class,'deletetags']);
Route::get('testing/',[Shop::class,'testing']);
Route::post('testing2',[Shop::class,'testing2']);
Route::post('categorysort',[Shop::class,'categorysort']);
Route::post('Tagsort',[Shop::class,'Tagsort']);





