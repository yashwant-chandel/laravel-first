<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\blogs;

class Blog extends Controller
{
    public function index(){
        // echo 'hlo';
        
        
        $results = Blogs::orderBy('created_at', 'desc')->paginate(6);
        $data = DB::select('select * from Blogs ORDER BY created_at DESC limit 3;');
        // print_r($results);
        return view('public.blogs-page')->with('results',$results)->with('data',$data);

    }
    public function blogsview($slug){
        
        $blog = Blogs::where('Slug',$slug)->get();
        
       
        return view('public.blogs-detail-page')->with('blog',$blog);
    }
    public function deleteblogs($id){

       $blog = Blogs::find($id);
       $blog->delete();
       return redirect('Editblogs')->with('success','successfully deleted record');
    }
    public function search(Request $req){
        $data = DB::table('Blogs')->where('heading','like',$req->val.'%')->get();  
        return response()->json($data);
    }
    
}
