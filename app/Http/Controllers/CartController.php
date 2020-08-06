<?php

namespace App\Http\Controllers;
use App\Http\Requests\ShippingRequest;
use Illuminate\Http\Request;
use DB;
use App\Users;
use Carbon\Carbon;
use Session;
use Cart;
use App\Product;

\session_start();

class CartController extends Controller
{
    //show cart
    public function show_cart(){
        $customer = Users::find(Session::get('customer_id'));
         return view('customer.show_cart',compact(['customer']));
        
    }
    
    public function add_to_cart($id){
        $product=DB::table('tbl_product')->where('id',$id)->first();
        $product_2=[];
        $product_2['id']=$product->id;
        $product_2['name']=$product->product_name;
        $product_2['qty']=1;
        $product_2['price']=$product->product_price;
        $product_2['weight']=0;
        $product_2['options']['image']=$product->product_image;
        Cart::add($product_2);
        return \redirect('home');
        // echo "<pre>";
        // print_r(Cart::content());
        // echo "</pre>";
    }
    public function add_to_cart_with_more(Request $request){
        $id = $request->product_id;
        $qty = $request->product_qty;
        $product=DB::table('tbl_product')->where('id',$id)->first();
        $product_2=[];
        $product_2['id']=$product->id;
        $product_2['name']=$product->product_name;
        $product_2['qty']= $qty;
        $product_2['price']=$product->product_price;
        $product_2['weight']=0;
        $product_2['options']['image']=$product->product_image;
        Cart::add($product_2);
        return \redirect('home');
    }
// delete one row
    public function delete_one_row($id){
        Cart::remove($id);
        return \redirect('show-cart');
    }
    public function delete_one_row_home($id){
        Cart::remove($id);
        return \redirect('home');
    }
    public function update_product_qty(Request $request){
        $qty=$request->qty;
        $rowId = $request->rowId;
        Cart::update($rowId,$qty);
        return \redirect('show-cart');
    }
    //create order
    public function post_create_order(Request $request){

        // update user
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $address = $request->address;
        $rs=Users::find(Session::get('customer_id'))->update(['name'=>$name,'email'=>$email,'phone'=>$phone,'address'=>$address]);
        //insert into shipping table
        $shipping=[];
        // $shipping['name']=$request->name;
        // $shipping['phone']=$request->phone;
        // $shipping['email']=$request->email;
       // $shipping['address']=$request->address;
        $shipping['notes']=$request->notes;
        $shipping['emotion']=$request->emotion;
        $shipping['created_at']=Carbon::now('Asia/Ho_Chi_Minh');
        $shipping_id=DB::table('tbl_shipping')->insertGetId($shipping);
       // insert into order table
        $order=[];
        $order['customer_id']=Session::get('customer_id');
        $order['shipping_id']=$shipping_id;
        $order['order_total']=Cart::subtotal();
        $order['order_status']='This order is waiting to check';
        $order['created_at']=Carbon::now('Asia/Ho_Chi_Minh');
        $order_id=DB::table('tbl_order')->insertGetId($order);
        //insert into order_detail table  
        foreach (Cart::content() as $item) {
            $order_detail=[];
            $order_detail['order_id']=$order_id;
            $order_detail['product_id']=$item->id;
            $order_detail['product_name']=$item->name;
            $order_detail['product_price']=$item->price;
            $order_detail['product_qty']=$item->qty;

            $sold=Product::find($item->id)->sold;
            $sold=$sold+$item->qty;
            
            Product::find($item->id)->update(['sold'=>$sold]);
           
            $order_detail['created_at']=Carbon::now('Asia/Ho_Chi_Minh');
            $result=DB::table('tbl_order_detail')->insert($order_detail);
        }
        Cart::destroy();
       Session::put('message','You have sent order success! Thanks for using our services');
       return \redirect('show-cart');
    }
}
