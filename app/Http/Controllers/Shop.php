<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\products;
use App\Models\banner;
use App\Models\Categories;
use App\Models\Tags;

class Shop extends Controller
{
   public function index($catid = null){
    $results = products::paginate(12);
     

    $banner = banner::find(1);
    $cat = Categories::all();
    $tags = Tags::all();
   
    return view('public.shop-page')->with('results',$results)->with('banner',$banner)->with('cat',$cat)->with('tags',$tags);
   }


   public function categorysort(Request $request){
      if($request->id == 0){
         $results = $results = products::paginate(12);
      }else{
      $data = DB::select('select id from Categories where parent_category = ?', [$request->id]);
         // print_r($data);
         if(!empty($data)){
            // foreach($data as $d){
            $id = $data[0]->id;
            // }
            // print_r($parent_id);
         }else{
            $id = 0;
         }
      // echo $parent_id;
   
   $results = DB::table('products')->where('categories',$request->id)->orWhere('categories','like', $request->id.'%')->orWhere('categories','like','%'.$request->id.'%')->orwhere('categories','like','%'.$request->id)->orwhere('categories','%'.$id)->orWhere('categories','like', $id.'%')->orWhere('categories','like','%'.$id.'%')->orwhere('categories','like','%'.$id)->orwhere('categories',$id)->paginate(12);
      }
   return response()->json($results); 
   }

   public function Tagsort(Request $request){
      if($request->id == 0){
         $results = products::paginate(12);
      }else{
         $results = DB::table('products')->where('Tags',$request->id)->paginate(12);
   }
   return response()->json($results);
}


   public function products($id){
    $product = products::find($id);
    // print_r($product['price']);
    return view('public/product-detail')->with('product',$product);
     
   }
 
  
   public function deleteproducts($id){
      $blog = products::find($id);
      $blog->delete();
      return redirect('Productsview')->with('success','successfully deleted record');
   }
   
   
}