<?php

namespace App\Http\Controllers;
use App\Models\blogs;
use App\Models\products;
use App\Models\Tags;
use App\Models\Categories;
use App\Models\admin;
use App\Models\banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Session;
use File;

class Adminpanel extends Controller
{
    public function Products($id = null){
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
        $tags = Tags::all();
        $message = Session::get('success');
        return view('Admin/AddProducts')->with('id',$id)->with('data',$data)->with('tags',$tags)->with('message',$message);
    }
    public function Addproducts(Request $request){
        // print_r($request->name);
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
            if ($request->documents){
                $data= array();
                foreach($request->documents as $file) {
                    $name = time().rand(1,100).'.'.$file->extension();
                    $file->move(public_path().'/products_images/', $name);
                array_push($data,$name);
                }
                $gallery = implode(",",$data);
                // print_r($gallery);
            }
                // print_r($request->Tags);
                $category = implode("," ,$request->category);
                // print_r($category);
                $tags = implode("," ,$request->Tags);
                // print_r($tags);
                // print_r($_POST);
                if(!empty($request->id)){
                    // echo 'hlo';
                    if($request->hasfile('image')){
                        // echo 'hlo';
                        $file = $request->file('image');
                        $name = time().rand(1,100).'.'.$file->extension();
                        $file->move(public_path().'/products_images/', $name);  
        
                $image_path=url('products_images');
                $request->validate([
                    'name' => 'required',
                    'description' => 'required',
                    'price' => 'required',
                    'slug' => 'required',
                    'category' => 'required',
                    'short_description' => 'required',
                    'price' => 'required',
                    'sale_price' => 'required',
                    
                ]);
                    $products = products::find($request->id);
                    // print_r($products);
                    $products->productname = $request->name;
                    $products->Slug = $request->slug;
                    $products->categories = $category;
                    $products->Tags = $tags;
                    $products->description = $request->description;
                    $products->Short_description = $request->short_description;
                    $products->price = $request->price;
                    $products->sale_price = $request->sale_price;
                    $products->stock = $request->Stocks;
                    $products->img = $name;
                    $products->Gallery = $gallery;
                    $products->image_path = $image_path;
                    $products->save();
                    if($products->save()){
                        return redirect('/AddProducts')->with('success','successfully saved product');
                    }
                    else{
                        return redirect('/AddProducts')->with('success','something went wrong');
                    }
            }
            else{
                return redirect('/AddProducts')->with('success','something went wrong');
            }
        }
        else{
        if($request->hasfile('image')){
            // echo 'hlo';
            $file = $request->file('image');
            $name = time().rand(1,100).'.'.$file->extension();
            $file->move(public_path().'/products_images/', $name);  
    
            $image_path=url('products_images');
            // print_r($name);
            $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'sku' => 'required|unique:products',
            'slug' => 'required',
            'category' => 'required',
            'short_description' => 'required',
            'price' => 'required',
            'sale_price' => 'required',
            
        ]);
        // $sku = $request->name.time().rand(1,100)
                $products = new products();
                $products->productname = $request->name;
                $products->Slug = $request->slug;
                $products->categories = $category;
                $products->Tags = $tags;
                $products->sku = $request->sku;
                $products->description = $request->description;
                $products->Short_description = $request->short_description;
                $products->price = $request->price;
                $products->sale_price = $request->sale_price;
                $products->stock = $request->Stocks;
                $products->img = $name;
                $products->Gallery = $gallery;
                $products->image_path = $image_path;
                $products->save();
                if($products->save()){
                    return redirect('/AddProducts')->with('success','successfully saved product');
                }
                else{
                    return redirect('/AddProducts')->with('success','something went wrong');
                }
        // }
        // echo 'hlo';
        }
        else{
            return redirect('/AddProducts')->with('success','something went wrong');
        }
    }
}

    
        

    
    public function Blogs($id = null){
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
        $message = Session::get('success');
            // print_r($message);
            // echo $id;

        
        $session = Session::get('user');
        // print_r($session);
        if(empty($session)){
            return redirect('/');
        }
        return view('Admin/AddBlogs')->with('message',$message)->with('id',$id);
    }
    public function Addblogs(Request $request){
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

        if(!empty($request->id)){
            if($request->hasfile('project_image')){
                $file = $request->file('project_image');
                $name = time().rand(1,100).'.'.$file->extension();
                $file->move(public_path().'/products_images/', $name); 
                $image_path=url('products_images');
                
                    $blog = blogs::find($request->id);
                    $blog->heading = $request->heading;
                    $blog->description = $request->description;
                    $blog->short_notice	= $request->short_notice;
                    $blog->posted_by = $request->posted_by;
                    $blog->img = $name;
                    $blog->image_path = $image_path;
                    $blog->save();
                    if($blog->save()){
                        return redirect('/AddBlogs')->with('success','successfully update blog');
                    }
                    else{
                       return redirect('/AddBlogs')->with('success','something went wrong');
                    }
                } 
                else{
                    return redirect('AddBlogs')->with('success','image is not compatible for this post');
                }
        }
        else{
            // echo 'not done';
            if($request->hasfile('project_image')){
                // echo 'hlo';
                $file = $request->file('project_image');
                // print_r($file);
                $name = time().rand(1,100).'.'.$file->extension();
                // print_r($name);
        
                $file->move(public_path().'/products_images/', $name);  
        
                $image_path=url('products_images');
                
                    $blog = new blogs();
                    $blog->heading = $request->heading;
                    $blog->description = $request->description;
                    $blog->short_notice	= $request->short_notice;
                    $blog->posted_by = $request->posted_by;
                    $blog->img = $name;
                    $blog->image_path = $image_path;
                    $blog->save();
                    if($blog->save()){
                        return redirect('/AddBlogs')->with('success','successfully post blog');
                    }
                    else{
                       return redirect('/AddBlogs')->with('success','something went wrong');
                    }
                } 
                else{
                    return redirect('AddBlogs')->with('success','image is not compatible for this post');
                }   
        }
        // print_r($request->all());
      
    }
public function adminview(){
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
    
   
    $data = (array) $session[0];
    $userdata = admin::find($data['id']);
    $results = DB::select('select * from admin where categories = 1');
    $users = count($results);
    // print_r($userdata['categories']);
    $resultsBlogs = blogs::all(); 
    $blogs = count($resultsBlogs);
    $product = Products::all(); 
    $products = count($product); 
    
    
    $message = Session::get('message');
    return view('Admin.AdminPanel')->with('message',$message)->with('products',$products)->with('userdata',$userdata)->with('users',$users)->with('blogs',$blogs);
       
}
public function Adminedit(Request $request){
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
$data = (array) $session[0];
if($request->hasfile('testing')){
    $file = $request->file('testing');
        $name = time().rand(1,100).'.'.$file->extension();
        print_r($name);
        $file->move(public_path().'/products_images/', $name);  
        $image_path=url('products_images');
        $admin = admin::find($data['id']);
        $admin->name = $request->name;
        $admin->about_life = $request->about_life;
        $admin->heading = $request->heading;
        $admin->about_profession = $request->about_profession;
        $admin->img = $name;
        $admin->img_url = $image_path;
        $admin->save();
        return redirect('profile')->with('success','successfully updated data');
   
}
else{
    return redirect('profile')->with('success','error in uploading image');
}           
}
public function banner(Request $request){
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
$data = (array) $session[0];
// print_r($_POST);
if($request->hasfile('product_banner')){ 
    // echo 'hlo';
    $file = $request->file('product_banner');
    $name = time().rand(1,100).'.'.$file->extension();
    $file->move(public_path().'/products_images/', $name);  
    $image_path=url('products_images');
    $banner = banner::find(1);
    $banner->banner_description = $request->about_banner;
    $banner->banner_img = $name;
    $banner->url = $request->url;
    $banner->admin_id = $data['id'];
    $banner->save();
    return redirect('Addbanner')->with('success','succesfully uploading banner');
}
else{
    return redirect('Addbanner')->with('success','error in uploading image');
}

}
public function Edit(){
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
    // print_r($results);
    $products = DB::select('select * from products');

    // print_r($products);
    return view('Admin.Products')->with('products',$products);
    
   
}
public function Editblogs(){
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
    // echo 'hlo';
    $results = DB::select('select * from Blogs ORDER BY created_at DESC;');
    return view('Admin.editblogs')->with('blogs',$results);
    
}
public function message(){
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
    $data = DB::table('Contact')->orderBy('created_at', 'desc')->get();
    // print_r($data);

    return view('Admin.Adminmessage')->with('data',$data);

}

    public function logout(){
        Session::flush();
        return redirect('/');
    }
}
