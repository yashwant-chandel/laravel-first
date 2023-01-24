<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Adminlogin;
use App\Http\Controllers\Adminpanel;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Shop;
use App\Http\Controllers\Blog;
use App\Http\Controllers\Home;
use App\Http\Controllers\Authh;
use App\Http\Controllers\Controller;
use App\Http\Controllers\testing;
use App\Http\Controllers\Sentemail;
use App\Http\Controllers\checkout;

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
Route::get('/contact-page',[Home::class,'Contactus']);
Route::post('/contactform',[Home::class,'contactmessage']);
Route::get('/privacypolicy', function () {
    return view('privacy-policy-page');
});
Route::get('landing-page',function(){
    return view('Landing-page');
});
Route::get('public/headerfooter',[Home::class,'header']);
Route::get('admin/message/notification',[Adminpanel::class,'messagenotification']);
Route::get('admin/message',[Adminpanel::class,'message']);
Route::get('/loginuser',[Adminlogin::class,'index']);
Route::post('/login',[Adminlogin::class,'login']);
Route::post('favourite',[Home::class,'favouriteitems']);
Route::get('Whislist',[Home::class,'Whislist']);
Route::post('whislist/delete',[Home::class,'deleteitem']);

Route::get('/AddProducts/{id?}',[Adminpanel::class,'Products']);
Route::get('/AddBlogs/{id?}',[Adminpanel::class,'Blogs']);
Route::get('/about',[Home::class,'Aboutauthor']);
Route::post('/products',[Adminpanel::class,'Addproducts']);
Route::post('/blogs',[Adminpanel::class,'Addblogs']);
Route::post('blog/search',[Blog::class,'search']);
Route::post('/adminedit',[Adminpanel::class,'Adminedit']);
Route::get('/logout',[Adminpanel::class,'logout']);
Route::get('/shop/{id?}',[Shop::class,'index']);
Route::get('/blogs-page',[Blog::class,'index']);
Route::get('/',[Home::class,'index']);
Route::get('/products/{id}',[Shop::class,'products']);
Route::get('/blogs-page/{slug}',[Blog::class,'blogsview']);
Route::get('/adminview',[Adminpanel::class,'Adminview']);
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
Route::post('categorysort',[Shop::class,'categorysort']);
Route::post('Tagsort',[Shop::class,'Tagsort']);
Route::post('Products/search',[Shop::class,'Searchproducts']);
Route::get('user/changepassword',[Adminlogin::class,'passwordchange']);
Route::post('user/passwordchange',[Adminlogin::class,'Changepassword']);


// forgot password route
Route::get('forgotpass',[Sentemail::class,'forgetpasword']);
Route::any('requestotp',[Sentemail::class,'requestotp']);
Route::get('forgotpass/otpverification',[Sentemail::class,'otp']);
Route::post('forgotpass/verifyotp',[Sentemail::class,'verifyotp']);
Route::get('forgotpassword/newpassword',[Sentemail::class,'regenratepass']);

//checkout
// Route::get('Cart/Checkout',[checkout::class,'Checkout']);
Route::post('Cart/Checkout/orders',[checkout::class,'addorders']);