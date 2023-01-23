<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\admin;
// use Illuminate\Support\Facades\Mail;
// use App\Mail\sendEmail;

// class Sentemail extends Controller
// {
//    public function forgetpasword(){
//       return view('public.forgot');

//    }
//    public function requestotp(Request $request){
//    //   echo $request->email;
//       $otp = rand(1000,9999);
//       $user = admin::where('Username','=',$request->email)->update(['otp' => $otp]);
//       if($user){
//          $mail_details = [
//             'subject' => 'Testing Application OTP',
//             'body' => 'Your OTP is : '. $otp
//         ];
//         \Mail::to($request->email)->send(new sendEmail($mail_details));
//       print_r($user);
//       print_r($mail_details);
//       }
     

//    }
//    public function otp(){

//      return view('public.otp');
//    }
//    public function verifyotp(Request $request){
//       $otp = $request->otp;

    
//    }
}
