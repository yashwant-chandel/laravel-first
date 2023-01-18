<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\admin;
use App\Models\products;
use App\Models\Contact;
use App\Models\banner;
use Session;
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
    public function Contactus(){
        $admindata = DB::table('admin')->where('categories','0')->get();
        $response = Session::get('success');
        // print_r($response);
        // print_r($admindata);
        return view('public.contact-us')->with('admindata',$admindata)->with('response',$response);
    }
    public function contactmessage(Request $req){
        $req->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'subject' => 'required|max:100',
            'message' => 'required'   
        ]);
        print_r($req->all());
        $contact = new Contact();
        $contact->name = $req->name;
        $contact->email = $req->email;
        $contact->phone = $req->phone;
        $contact->Subject = $req->subject;
        $contact->message = $req->message;
        $contact->save();
        if($contact->save()){
            return redirect('contact-page')->with('success','sent message successfully');
        }

    }
    public function favouriteitems(Request $request){
    //    print_r($request->id);
        $data = products::find($request->id);
        $whislist = session()->get('whislist', []);
        if(isset($whislist[$request->id])) {
            

                }  else{ $whislist[$request->id] = [
                    "id" => $request->id,
                    "productname" => $data->productname,
                    "image" => $data->img,
                    "slug" => $data->Slug,
                    "sku" => $data->sku,
                    "price" => $data->price,
                    "sale_price" => $data->sale_price,
                    "total_quantity" => $data->stock
                    
                ];
              
            }
            Session::put('whislist',$whislist);
           
        return response()->json($whislist);

    }
    public function Whislist(){
    $results = Session::get('whislist');
    // print_r($results);
    return view('public.Whislist')->with('results',$results);
    }
    public function deleteitem(Request $req){
       $whislist = Session::get('whislist');
        unset($whislist[$req->id]);
        Session::put('whislist',$whislist);
        // Session::pull('whislist',$req->id);
        // print_r($req->id);
        return response()->json($whislist);


    }

}
