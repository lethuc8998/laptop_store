<?php

namespace App\Http\Controllers;
use App\Order;
use App\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;
\session_start();

class OrderController extends Controller
{
    // show all order
    public function show_order(){
        $order = Order::all();
        return view('admin.order.show_order')->with('order',$order); 
    }
    public function show_order_waiting(){
        $order = Order::where('order_status','This order is waiting to check')->get();
        return view('admin.order.show_order')->with('order',$order);
    }
    public function show_order_accepted(){
        $order = Order::where('order_status','Order is accepted')->get();
        return view('admin.order.show_order')->with('order',$order);
    }
    public function show_order_refused(){
        $order = Order::where('order_status','Order is refused')->get();
        return view('admin.order.show_order')->with('order',$order);
    }
    public function view_order($id){
        $order_detail=Order::find($id);
        return view('admin.order.order_detail')->with('order_detail',$order_detail);
       
    }
    public function accept_order($id){
        $order=Order::find($id);
        $customer_name = $order->users->name;
        Order::find($id)->update(['admin_id'=>Session::get('admin_id'),'order_status'=>'Order is accepted']);  
        Session::put('message_2','You have just accepted order name '.$customer_name);
        return \redirect('show-order');
    }
    public function refuse_order($id){
        $order=Order::find($id);
        $customer_name = $order->users->name;
        Order::find($id)->update(['admin_id'=>Session::get('admin_id'),'order_status'=>'Order is refused']);   
        Session::put('message_2','You have just refused order name '.$customer_name);
        return \redirect('show-order');
    }
    
}
