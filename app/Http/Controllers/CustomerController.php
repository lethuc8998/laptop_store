<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use Session;
use Cart;
use App\Http\Requests\CustomerRequest;
use App\Http\Requests\ChangePasswordRequest;
use Illuminate\Http\Request;
use App\Order;
use App\Shipping;
use App\Users;
\session_start();

class CustomerController extends Controller
{
    //sign up customer
    public function sign_up(){
        return \view('customer.sign_up');
    }
    public function post_sign_up(CustomerRequest $request){
        $user=[];
        $user['username']=$request->username;
        $user['password']=$request->password;
       // $user['password']=md5($request->password);
        $user['created_at']=Carbon::now('Asia/Ho_Chi_Minh');
        $result=DB::table('tbl_user')->insert($user);  
        if($result){
            Session::put('message',"You signed up success, you can login with your accout");
        }
        else{
            Session::put('message',"Sign up fail!!");
        }
        return \redirect('home');
       
    }
    public function sign_in(){
        return \view('customer.sign_in');
    }
    public function post_sign_in(Request $request){
        $username=$request->username;
        $password=$request->password;
       // $password=md5($request->password);
        $result = DB::table('tbl_user')->where('username',$username)->where('password',$password)->first();
        if($result){
            if($result->type==3){
                Session::put('customer_id',$result->id);
                Session::put('customer_name',$result->username);
                return \redirect('home');
            }
            else{
                Session::put('admin_id',$result->id);
                Session::put('admin_name',$result->username);
                Session::put('admin_type',$result->type);
                Session::put('admin_image',$result->image);
                return \redirect('admin-dashboard');
            }
           
        }
        else{
            Session::put('message','Username or Password is not correct');
            return \redirect('sign-in');
        }
    }
    public function show_history(){
      
        $order=Order::where('customer_id',Session::get('customer_id'))->get();
        return view('customer.history')->with('order',$order);       
    }

    public function profile(){
        $customer_info = Users::find(Session::get('customer_id'));
        return view('customer.profile',compact(['customer_info']));
    }
    public function update_profile(Request $request){
        $name = $request->name;
        $email=$request->email;
        $phone=$request->phone;
        $address=$request->address; 
        $customer_info = Users::find(Session::get('customer_id'))->update(['name'=>$name,'email'=>$email,'phone'=>$phone,'address'=>$address]);
        Session::put('message','You have just updated your profile success');
        return \redirect('profile');
    }
    public function change_password(){
        $customer = Users::find(Session::get('customer_id'));
        return view('customer.change_password',compact(['customer']));
    }
    public function post_change_password(ChangePasswordRequest $request){
        $customer = Users::find(Session::get('customer_id'));
        $customer->password = $request->password;
        $customer->updated_at=Carbon::now('Asia/Ho_Chi_Minh');
        $customer->save();   
        Session::put('message','Change Password Success'); 
        return \redirect('change-password-customer');
    }



    public function view_order_detail_history($id){
        $order_detail=Order::find($id);
        return view('customer.view_order_detail') ->with('order_detail',$order_detail);         
    }

    public function cancel_order($id){
        $result= Order::find($id)->update(['order_status'=>'Cancel']);
        if($result){
            Session::put("cancel_message","You have just canceld Order");
        }
        return redirect("show-history");
    }
    
    public function log_out_customer(){
        Session::put('customer_id',null);
        return \redirect('sign-in');
    }
   
}
