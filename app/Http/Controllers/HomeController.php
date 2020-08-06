<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Session;
use App\Product;
\session_start();

class HomeController extends Controller
{
    //home
    public function index(){
        $list_category=DB::table('tbl_product')
         ->join('tbl_category', 'tbl_product.category_id', '=', 'tbl_category.id')
         ->select('tbl_product.category_id','tbl_category.category_name', DB::raw("count(tbl_product.category_id) as count"))
         ->groupBy('tbl_product.category_id','tbl_category.category_name')
         ->get();
        $list_product=DB::table('tbl_product')->paginate(9);
        $list_product_hot=Product::where('view_count','>',0)->limit(3)->get();

       // $time_now=Carbon::now('Asia/Ho_Chi_Minh');
       // $three_day_before = $time_now->subDay(16);  
       // Chả hiểu sao truyền biến vào thì không chạy ra theo như mong muốn nên phải truyền trực tiếp mấy cái Carbon vào nên nhìn hơi cục xúc tí
        $list_product_new=Product::whereBetween('created_at',[Carbon::now('Asia/Ho_Chi_Minh')->subDay(3),Carbon::now('Asia/Ho_Chi_Minh')])->limit(3)->get();
        $list_product_selling=Product::orderBy('sold','DESC')->limit(3)->get();
      
        return view('customer.home',compact(['list_category','list_product','list_product_hot','list_product_new','list_product_selling']));
    }
    // show product by category
    public function show_by_category($id){
        $list_category=DB::table('tbl_product')
        ->join('tbl_category', 'tbl_product.category_id', '=', 'tbl_category.id')
        ->select('tbl_product.category_id','tbl_category.category_name', DB::raw("count(tbl_product.category_id) as count"))
        ->groupBy('tbl_product.category_id','tbl_category.category_name')
        ->get();
        $list_product=DB::table('tbl_product')->where('category_id',$id)->paginate(9);
        // $list_product_hot=Product::where('view_count','>',0)->where('category_id',$id)->limit(3)->get();
        // $list_product_new=Product::whereBetween('created_at',[Carbon::now('Asia/Ho_Chi_Minh')->subDay(3),Carbon::now('Asia/Ho_Chi_Minh')])->where('category_id',$id)->limit(3)->get();
        // $list_product_selling=Product::orderBy('sold','DESC')->limit(3)->get();
        //return view('customer.home',compact(['list_category','list_product','list_product_hot','list_product_new','list_product_selling']));
        return view('customer.home',compact(['list_category','list_product']));
    }
    //show product detail
    public function product_detail($id){
        $product_key = 'product'.$id;
        if(!Session::has($product_key)){
            Product::where('id',$id)->increment('view_count');
            Session::put($product_key,1);
        }


        $list_category=DB::table('tbl_product')
         ->join('tbl_category', 'tbl_product.category_id', '=', 'tbl_category.id')
         ->select('tbl_product.category_id','tbl_category.category_name', DB::raw("count(tbl_product.category_id) as count"))
         ->groupBy('tbl_product.category_id','tbl_category.category_name')
         ->get();
        $product=DB::table('tbl_product')->where('id',$id)->first();
        $category_id=$product->category_id;
        $related_product=DB::table('tbl_product')->where('category_id',$category_id)->whereNotIn('id',[$id])->paginate(3);
        return view('customer.product_detail')->with('list_category',$list_category)->with('product',$product)->with('related_product',$related_product);
    }
    public function search_form(Request $request){
        $list_category=DB::table('tbl_product')
        ->join('tbl_category', 'tbl_product.category_id', '=', 'tbl_category.id')
        ->select('tbl_product.category_id','tbl_category.category_name', DB::raw("count(tbl_product.category_id) as count"))
        ->groupBy('tbl_product.category_id','tbl_category.category_name')
        ->get();
        $input_value =$request->input_value;
        $list_product=Product::where('product_name','like','%'.$input_value.'%')->paginate(9);
        return view('customer.home')->with('list_category',$list_category)->with('list_product',$list_product);
    }

}
