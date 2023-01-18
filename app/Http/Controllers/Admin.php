<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Categories;
use App\Models\Tags;
use App\Models\products;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;


class Admin extends Controller
{
    public function Categories($id = null){
        $session = Session::get('user');
        // print_r($session[0]->categories);
        if(!empty($session)){
            if($session[0]->categories != 0){
            return redirect('/');
            }
    } 
    else{
        return redirect('/loginuser');
    }
        $response = Session::get('success');
        // print_r($response);
        $data = Categories::all();
        // print_r($data[0]);

        
        return view('Admin.Add_Categories')->with('message',$response)->with('data',$data)->with('id',$id);

    }
    public function AddCategories(Request $request){
        $session = Session::get('user');
        // print_r($session[0]->categories);
        if(!empty($session)){
            if($session[0]->categories != 0){
            return redirect('/');
            }
    } 
    else{
        return redirect('/loginuser');
    }
// print_r($_POST);
if(!empty($request->id)){
        $data = Categories::find($request->id);
        $data->name = $request->category_name;
        $data->slug = $request->slug;
        $data->parent_category = $request->parent_category;
        $data->save();
        if($data->save()){
            return redirect('Addcategories')->with('success','successfully update category');
        }else{
            return redirect('Addcategories')->with('success','failed to update category');
        }  
}else{
        $data = new Categories;
        $data->name = $request->category_name;
        $data->slug = $request->slug;
        $data->parent_category = $request->parent_category;
        $data->save();
        if($data->save()){
            return redirect('Addcategories')->with('success','successfully add categories');
        }else{
            return redirect('Addcategories')->with('success','failed to add categories');
        }        
}
    }
    public function Tags($id = null){
        $session = Session::get('user');
        // print_r($session[0]->categories);
        if(!empty($session)){
            if($session[0]->categories != 0){
            return redirect('/');
            }
    } 
    else{
        return redirect('/loginuser');
    }
        $session = Session::get('user');
        // print_r($session[0]->categories);
        if(!empty($session)){
        if($session[0]->categories != 0){
            return  redirect('loginuser');
        }
    } 
        $response = Session::get('success');
        print_r($response);
        return view('Admin.Add_tags')->with('message',$response)->with('id',$id);
    }
    public function AddTags(Request $request){
        $session = Session::get('user');
        // print_r($session[0]->categories);
        if(!empty($session)){
            if($session[0]->categories != 0){
            return redirect('/');
            }
    } 
    else{
        return redirect('/loginuser');
    }
        // print_r($_POST);
        if(!empty($request->id)){
        $data = Tags::find($request->id);
        $data->name = $request->Tags_name;
        $data->slug = $request->slug;
        $data->save();
        if($data->save()){
            return redirect('Addtags')->with('success','successfully updated tag');
        }
        else{
            return redirect('Addtags')->with('success','failed to update tags');
        }
    }
    else{
        $data = new Tags;
        $data->name = $request->Tags_name;
        $data->slug = $request->slug;
        $data->save();
        if($data->save()){
            return redirect('Addtags')->with('success','successfully added tag');
        }
        else{
            return redirect('Addtags')->with('success','failed to add tags');
        }
    }
    }
    public function EditTags(){
        $session = Session::get('user');
        // print_r($session[0]->categories);
        if(!empty($session)){
            if($session[0]->categories != 0){
            return redirect('/');
            }
    } 
    else{
        return redirect('/loginuser');
    }
        
        $data = Tags::all();
        // print_r($data);
        return view('Admin.Edittag')->with('data',$data);
        
    }
    public function EditCategory(){
        $session = Session::get('user');
        // print_r($session[0]->categories);
        if(!empty($session)){
            if($session[0]->categories != 0){
            return redirect('/');
            }
    } 
    else{
        return redirect('/loginuser');
    }
        $data = Categories::all();
        // print_r($data);
        return view('Admin.Editcategory')->with('data',$data);
    }
    public function Addbanner(){
        $session = Session::get('user');
        // print_r($session[0]->categories);
        if(!empty($session)){
            if($session[0]->categories != 0){
            return redirect('/');
            }
    } 
    else{
        return redirect('/loginuser');
    }
        $response = Session::get('success');
        return view('Admin.Banner')->with('success',$response);
    }
    public function Profile(){
    
        $session = Session::get('user');
        // print_r($session[0]->categories);
        if(!empty($session)){
            if($session[0]->categories != 0){
            return redirect('/');
            }
    } 
    else{
        return redirect('/loginuser');
    }

        $success = Session::get('success');
        return view('Admin.Profile')->with('message',$success);
    }
    public function updatecart(Request $request){
         if($request->qty == 0){
            $cart = Cart::find($request->id);
            $cart->delete();
            print_r($request->id);
         }else{
            $cart = Cart::find($request->id);
            $cart->quantity = $request->qty;
            $cart->total_price = $cart->price*$request->qty;
            $cart->save();
            print_r($request->id);
         }
        

    }
    public function cart(Request $request){
        $session = Session::get('user');
    //    print_r($request->qty);
            if($request->id){

                $data = products::find($request->id);
                // print_r($request->qty);
            //     $cart = session()->get('cart', []);
            //     if(isset($cart[$request->id])) {
            //         $cart[$request->id]['quantity']++;
            //     }  else{ $cart[$request->id] = [
            //         "productname" => $product->productname,
            //         "image" => $product->img,
            //         "slug" => $product->Slug,
            //         "sku" => $product->sku,
            //         "price" => $product->price,
            //         "total_quantity" => $product->stock,
            //         "quantity" => $request->qty
            //     ];
            // }
            // Session::put('cart', $cart);

            //     return response()->json($cart);
                

                $pid = DB::table('Cart')->where('product_id', $data['id'])->where('buyer_id',$session[0]->id)->value('id');
                if(!empty($pid)){
                    // print_r($request->id);
                    $cart = Cart::find($pid);
                    $cart->quantity = $request->qty;
                    $cart->total_price = $data['sale_price']*$request->qty;
                    $cart->save();
                    return response()->json('succesfully updated cart');
                } 
                else{
                $cart = new Cart;
                $cart->name = $data['productname'];
                $cart->Sku = $data['sku'];
                $cart->quantity = $request->qty;
                $cart->price = $data['sale_price'];
                $cart->total_price = $data['sale_price']*$request->qty;
                $cart->img = $data['img'];
                $cart->image_path = $data['image_path'];
                $cart->product_id = $request->id;
                $cart->buyer_id = $session[0]->id;
                $cart->img = $data['img'];
                $cart->save();
                if($cart->save()){
                    return response()->json('successfully added to cart item');
                }
                
            }
       }

    }
    public function cartview(){
        $session = Session::get('user');
        $cart = Session::get('cart');
        print_r($cart);
        if(!empty($session)){
        // print_r($session);
        $cartdata = DB::select('select * from Cart where buyer_id = ?',[$session[0]->id]);
        }else{
            $cartdata= array();
        }
        // print_r($cartdata);
        return view('public.cart')->with('cartdata',$cartdata);
    }
    public function deletecart(Request $request){
        if($request->id){
            $blog = Cart::find($request->id);
            $blog->delete();
            print_r($request->id);
        }
    }
    
    public function deletecategory($id){
        $cat = Categories::find($id);
        $cat->delete();
        return redirect('Editcategories')->with('success','successfully deleted record');
    }
    public function deletetags($id){
        $tag = Tags::find($id);
        $tag->delete();
        return redirect('Editcategories')->with('success','successfully deleted record');
    }
    
}
