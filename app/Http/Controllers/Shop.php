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
         $results = products::paginate(12);
         
      }else{
      $data = DB::select('select id from Categories where parent_category = ?', [$request->id]);
         
      if(!empty($data)){
         $childdata = [];
         
         foreach($data as $d){
          $query =  DB::table('products')->orwhere('categories',$d->id)->paginate(12);
          foreach($query as $q){
            $queryy = (array) $q;
           
            array_push($childdata,$queryy);
          }
          
         }
      }else{
         $childdata = [];
      }
      // echo $parent_id;
   
   $results = DB::table('products')->where('categories',$request->id)->orWhere('categories','like', $request->id.'%')->orWhere('categories','like','%'.$request->id.'%')->orwhere('categories','like','%'.$request->id)->paginate(12);
foreach($results as $r){
   array_push($childdata,$r);
}      
}
   return response()->json($childdata); 
   }

   public function Tagsort(Request $request){
      if($request->id == 0){
         $results = products::paginate(12);
      }else{
         $results = DB::table('products')->where('Tags',$request->id)->paginate(12);
   }
   return response()->json($results);
}


   public function products($slug){
    $products = DB::table('products')->where('Slug',$slug)->get();
    foreach($products as $p){
      $product = $p;
    }
    // print_r($product['price']);
    return view('public/product-detail')->with('product',$product);
     
   }
   public function Searchproducts(Request $request){
      $data = DB::table('products')->where('productname','like',$request->val.'%')->get(); 
      return response()->json($data);
   }
   
 
  
   public function deleteproducts($id){
      $blog = products::find($id);
      $blog->delete();
      return redirect('Productsview')->with('success','successfully deleted record');
   }
  

   
   
}