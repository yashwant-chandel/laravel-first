<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\admin;
use Illuminate\Support\Facades\DB;
use Session;

class Adminlogin extends Controller
{
    public function index(){
       
        
        return view('public.Adminlogin');
    }
    public function login(Request $request){
        $email = $_POST['username'];
        $password = md5($_POST['password']);
       
        $results = DB::select('select * from admin where username =? && password =?', [$email , $password]);

if(!empty($results)){
    // echo 'hlo';
if($results[0]->categories == 0){
    // echo 'good';
    Session::put('user', $results);
    return redirect('/adminview')->with('success','successfully loggedin to the adminpanel');
}
else{
    Session::put('user', $results);
    return redirect('/')->with('success','loggedin successfully');
}
}else{
    return redirect('/loginuser')->with('success','failed to logged in');
}
    }

    public function registeruser(){
        $session = Session::get('success');
        print_r($session);

       return view('public.Register');
    }

    public function registerdata(Request $request){

        
        // print_r($_POST);
        // print_r($request->all());
        $data = $request->validate([
            'name' => 'required',
            'Username' => 'required',
            'password' => 'required'
        ],
        [
            'name.required' => 'Name field is required.',
            'Username.required' => 'Email field is required.',
            'password.required' => 'Password field is required.']);
        if($data == true){
            
            $admin = new admin();
        $admin->name = $request->name;
        $admin->Username = $request->Username;
        $admin->password = md5($request->password);
        $admin->categories = 1;
        $admin->save();
        if($admin->save()){
        return redirect('register')->with('success','succesfully registered ');
        }else{
            return redirect('register')->with('success','failed to registered');
        }
        }
        else{
            return redirect('register')->with('success','these field cannot be empty');
        }
        
    }
    public function passwordchange(){

        return view('public.changepassword');
    }

    public function Changepassword(Request $request){
        $session = Session::get('user');
        // print_r($session[0]->password);
        if(!empty($session)){
            $request->validate([
                'password' => 'required',
                'newpassword' => 'required|min:6',
                'password_confirmation' => 'required_with:newpassword|same:newpassword|min:6'
            ]);
            if($session[0]->password == md5($request->password)){
              $data = admin::find($session[0]->id);
              $data->password = md5($request->newpassword);
              $data->update();
              if($data->update()){
               return redirect('user/changepassword')->with('success','successfully change password');
              }


            } else{
               return redirect('user/changepassword')->with('success',"Older password doesn't match");
            }

        }else{
           return redirect('/loginuser')->wiht('success','sorry loggedin first');
        }
    }

}


