<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\Cart;
use App\Models\order_meta;
use Session;

class checkout extends Controller
{
    public function Checkout(){
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $stripe_intent = $stripe->setupIntents->create();
        $client_secret = $stripe_intent->client_secret;
        // dd($stripe);
        return view('checkout/Checkout',compact('client_secret'));
    }
    public function chekoutproc(Request $request){
        print_r($request->all());
        $session = Session::get('user');
        $order = order::where([['userid',$session[0]->id],['payment_status',0]])->first();
        $cart = Cart::where('buyer_id',$session[0]->id)->get();
        
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
         try{
            $customer = $stripe->customers->create([
                'name' => $request->fullname,
                'email' => $request->email,
                'payment_method' => $request->token,
                'invoice_settings' => [
                'default_payment_method' => $request->token,
                ],
                'address' => [
                'line1' => '510 Townsend St',
                'postal_code' => '98140',
                'city' => 'San Francisco',
                'state' => 'CA',
                'country' => 'US',
                ],
            ]);

            $paymentMethodAttachStatus = $stripe->paymentMethods->attach(
                $request->token,
                ['customer' => $customer->id]
            );

            $stripe_payment_intent =  $stripe->paymentIntents->create([
                'customer' => $customer->id,
                'amount' => (int)$order->total_price * 100,
                'currency' => 'USD',
                'payment_method' => $request->token,
                'off_session' => true,
                'confirm' => true,
                'description' => 'first_payments'
            ]);
            if($stripe_payment_intent->status == 'succeeded'){
            foreach($cart as $c){
              $order_meta = new order_meta();
              $order_meta->name = $c->name;  
              $order_meta->Sku = $c->Sku;  
              $order_meta->quantity = $c->quantity;  
              $order_meta->price = $c->total_price;  
              $order_meta->img = $c->img;  
              $order_meta->image_path = $c->image_path;  
              $order_meta->product_id = $c->product_id;  
              $order_meta->user_id = $session[0]->id;
              $order_meta->order_id = $order->id;
              $order_meta->save();  

              $delete_cart = cart::find($c->id)->delete();
            }
            $order_status = order::find($order->id);
            $order_status->payment_status = 1;
            $order_status->payment_intend_id = $stripe_payment_intent->id;
            $order_status->save();
            return redirect('orders')->with('success','successfully confirm order ');
        }else{
            return redirect()->back()->with('error','payment is cancel ');
        }
        }catch(\Exception $e){
            $error = $e->getMessage();
            // print_r($error);
            return redirect()->back()->with('error',$error);
        }
    }
    public function addorders(Request $request){
        // print_r($request->all());
        $request->validate([
            'first_name' =>'required',
            'last_name' => 'required',
            'Username' =>'required',
            'address' => 'required',
            'country' => 'required',
            'state' => 'required',
            'zip_code' => 'required'
        ]);
        $session = Session::get('user');
        $cart_data = Cart::where('buyer_id',$session[0]->id)->get();
        foreach($cart_data as $cd){
            $price[] = $cd->total_price;
        }
        $order = new order();
        $order->userid = $session[0]->id;
        $order->payment_status = 0;
        $order->total_price = array_sum($price);
        $order->address	= $request->address.','.$request->country.','.$request->state.','.$request->zip_code;
        $order->refund_status = 0;
        $order->save();
        return redirect('/Cart/Checkout')->with('order_data',$order);
    }

}
