<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;
use App\Users;
use App\Http\Requests\AccountRequest;
use App\Http\Requests\ChangePasswordRequest;
use App\Order;
use App\Product;
\session_start();
class AdminController extends Controller
{
    public function logout_admin(){
        Session::put('admin_id',null);
        return \redirect('sign-in');
    }

    //show dashboard
    public function dashboard(){
       // $this->before_action();
       $product_total = Product::count();
       $order_count = Order::count();
       $sum_money = Order::sum('order_total');
       $customer_total = Users::where(['type'=>'3'])->count();
       $employee_total = Users::where(['type'=>'2'])->count();
       return view('admin.dashboard',\compact(['product_total','order_count','sum_money','customer_total','employee_total']));
    }
    //show aacount
    public function show_account(){
        $account=Users::where('type',1)->orWhere('type',2)->get();
        return view('admin.account.show_account')->with('account',$account);
    }
    public function add_account(){
        return view('admin.account.add_account');
    }
    public function post_add_account(AccountRequest $request){
        $account = new Users();
        $account->username =$request->username;
        $account->password = $request->password;
       // $account->password = md5($request->password);
        $account->name = $request->name;
        $account->phone = $request->phone;
        $account->email = $request->email;
        $account->address = $request->address;
        $account->type = $request->type;
        $account->created_at=Carbon::now('Asia/Ho_Chi_Minh');
        if ($request->hasFile('image')) {
            $file = $request->image;
            $account->image = $file->getClientOriginalName();
            $file->move('public/upload', $file->getClientOriginalName());
        }
        $account->save();     
        Session::put('message_3','Add account success'); 
        return \redirect('show-account');
    }
    public function edit_account($id,Request $request ){
        $account=Users::find($id);
        return view('admin.account.edit_account')->with('account',$account);
    }
    public function post_edit_account($id,Request $request ){
        $account=Users::find($id);
        // $account->password = md5($request->password);
        $account->name = $request->name;
        $account->phone = $request->phone;
        $account->email = $request->email;
        $account->address = $request->address;
        $account->type = $request->type;
        $account->updated_at=Carbon::now('Asia/Ho_Chi_Minh');
        $account->save();     
        Session::put('message_3','Edit account success'); 
        return \redirect('show-account');
    }

    public function change_password($id){
        $account=Users::find($id);
        return view('admin.account.change_password')->with('account',$account);
    }
    public function post_change_password($id,ChangePasswordRequest $request){
        $account=Users::find($id);
        $account->password = $request->password;
        $account->updated_at=Carbon::now('Asia/Ho_Chi_Minh');
        $account->save();   
        Session::put('message_3','Change Password Success'); 
        return \redirect('show-account');
    }


    public function delete_account($id){
        $account=Users::find($id)->delete();
        Session::put('message_3','Delete account success'); 
        return \redirect('show-account');
    }
}
