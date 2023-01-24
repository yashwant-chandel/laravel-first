<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendEmail;
use Session;
use DB;
class Sentemail extends Controller
{
   public function forgetpasword(){
      return view('public.forgot');


   }
   public function requestotp(Request $request){
   //   echo $request->email;
      $otp = rand(1000,9999);
      $user = admin::where('Username','=',$request->email)->update(['otp' => $otp]);
    //   print_r($otp);
    //   print_r($user);
      if($user){
         $mailData = [
            'subject' => 'Testing Application OTP',
            'body' => 'Your OTP is : '. $otp
        ];
        \Mail::to($request->email)->send(new sendEmail($mailData));
         return redirect('forgotpass/otpverification')->with('success','otp sent successfully')->with('email',$request->email);
      }else{
        return redirect('forgotpass')->with('success','email is not found in our system');
      }
     

   }
   public function otp(){
   
     return view('public.otp');

   }
   public function verifyotp(Request $request){
    if($request->otp){
     $user = DB::table('admin')->where('Username',$request->email)->get();
    //  echo($user[0]->otp);
     if($request->otp == $user[0]->otp){
        return redirect('forgotpassword/newpassword')->with('success','otp successfully matched enter your new password')->with('email',$request->email)->with('otp',$request->otp);
     }
     else{
        redirect('forgotpass/otpverification')->with('success','sorry wrong otp');
     }
    }
    elseif($request->newpassword){
        
        $request->validate([
            'newpassword' => 'required|min:6',
            'password_confirmation' => 'required_with:newpassword|same:newpassword|min:6'
        ]);
        // print_r($request->all());
        $user = admin::where('Username','=',$request->email)->update(['otp' => null,'password'=> md5($request->newpassword)]);
        if($user){
        return redirect('loginuser')->with('success','successfully change password');
    }else{
        return redirect('forgotpass')->with('success','something went wrong');
    }
    }
    else{
        return redirect('forgotpass')->with('success','something went wrong');
    }
}
    public function regenratepass(){
       
        return view('public.regenratepassword');
    
    }

      
        
    
   }

