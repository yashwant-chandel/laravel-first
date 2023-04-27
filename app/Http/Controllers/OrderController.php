<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\Cart;
use App\Models\order_meta;
use Session;

class OrderController extends Controller
{
    public function index(){
        $session = Session::get('user');
        $orders = order::where([['userid',$session[0]->id],['payment_status',1]])->with('order_meta')->get();

        return view('public.Myorders',compact('orders'));
    }
}
