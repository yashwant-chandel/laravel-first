<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
class AdminOrderController extends Controller
{
    public function index(){

        $orders = order::with('order_meta','users')->get();
        
        return view('Admin.orders',compact('orders'));
    }
    public function refund($id){
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        try {
           $orders = order::find($id);
        $stripe->refunds->create([
            'payment_intent' => $orders['payment_intend_id'],
          ]);
        $orders->refund_status = 1;
        $orders->update();
        return redirect()->back()->with('success','successfully refunded money');
        } catch (\Throwable $th) {
            $error = $th->getMessage();
        return redirect()->back()->with('error',$error);
        }
        
    }
}
