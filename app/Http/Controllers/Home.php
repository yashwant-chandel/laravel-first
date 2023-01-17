<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\admin;
use App\Models\banner;
class Home extends Controller
{
    public function index(){
        $results = DB::select('select * from products ORDER BY created_at DESC;');
        $data = DB::select('select * from Blogs ORDER BY created_at DESC limit 6;');
        $userdata = admin::find('3');

        // print_r($results);
        return view('public.index')->with('result',$results)->with('data',$data)->with('userdata',$userdata);
    }
    public function Aboutauthor(){
       
        $userdata = admin::find('3');
        $bannerdata = banner::find(1);
        // print_r($bannerdata);
        return view('public.about-page')->with('userdata',$userdata)->with('bannerdata',$bannerdata);
    }
}
