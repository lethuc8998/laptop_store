<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Session;
use App\Product;

\session_start();

class ProductController extends Controller
{
    //before action
    public function before_action()
    {
        if (!Session('admin_id')) {
            return \redirect('sign-in')->send();
        }
    }
    //add product
    public function add_product()
    {
        $this->before_action();
        $list_category = DB::table('tbl_category')->get();
        return view('admin.product.add_product')->with('list_category', $list_category);
    }
    public function post_add_product(ProductRequest $request)
    {
        $product = [];
        $product['product_name'] = $request->txtProductName;
        $product['product_desc'] = $request->txtProductDesc;
        $product['category_id'] = $request->slCategory;
        $product['product_quanlity'] = $request->txtQuanlity;
        $product['product_price'] = $request->txtPrice;
        $product['created_at'] = Carbon::now('Asia/Ho_Chi_Minh');
        if ($request->hasFile('image')) {
            $file = $request->image;
            $product['product_image'] = $file->getClientOriginalName();
            $file->move('public/upload', $file->getClientOriginalName());
        }
        $result = DB::table('tbl_product')->insert($product);
        if ($result) {
            Session::put('message', "Add Product ".$request->txtProductName." Success!!");
        } else {
            Session::put('message', "Add fail!!");
        }
        return \redirect('show-product');

    }
    //show product
    public function show_product()
    {
        $this->before_action();
        $list_product = Product::paginate(5);
        return view('admin.product.show_product')->with('list_product', $list_product);
    }
    //edit product
    public function edit_product($id)
    {
        $this->before_action();
        $list_product = DB::table('tbl_product')
            ->join('tbl_category', 'tbl_product.category_id', '=', 'tbl_category.id')
            ->select('tbl_product.*', 'tbl_category.category_name AS category_name')->where('tbl_product.id', $id)
            ->get();
        $list_category = DB::table('tbl_category')->get();

        $product = $list_product[0];
        return view('admin.product.edit_product')->with('product', $product)->with('list_category', $list_category);

    }
    public function post_edit_product(Request $request, $id)
    {
        $product_name = $request->txtProductName;
        $product_desc = $request->txtProductDesc;
        $category_id = $request->slCategory;
        $product_price = $request->txtPrice;
        $product_quanlity = $request->txtQuanlity;
        $updated_at = Carbon::now('Asia/Ho_Chi_Minh');
        $result = DB::table('tbl_product')->where('id', $id)->update(['product_name' => $product_name, 'product_desc' => $product_desc, 'category_id' => $category_id, 'product_price' => $product_price, 'product_quanlity' => $product_quanlity, 'updated_at' => $updated_at]);
        if ($result) {
            Session::put('message', "Update Product ".$request->txtProductName." Success!!");
        } else {
            Session::put('message', "Update fail!!");
        }
        return \redirect('show-product');
    }
    public function delete_product($id)
    {
        $product_name = Product::find($id)->product_name;
        $result = DB::table('tbl_product')->where('id', $id)->delete();
        if ($result) {
            Session::put('message',  "Delete Product ".$product_name." Success!!");
        } else {
            Session::put('message', "Delete fail!!");
        }
        return \redirect('show-product');
    }
    public function search_by_product(Request $request){
        $input_value=$request->input_value;
        $list_product=Product::where('product_name','like','%'.$input_value.'%')->paginate(5);
        return view('admin.product.show_product')->with('list_product', $list_product);
    }
}
