<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Session;
use App\Http\Requests\CategoryRequest;
\session_start();



class CategoryController extends Controller
{
     //before action
     public function before_action(){
        if(!Session('admin_id')){
            return \redirect('sign-in')->send();
        }
    }
    //add category
    public function add_category(){
        $this->before_action();
        return view('admin.category.add_category');
    }
    public function post_add_category(CategoryRequest $request){
        $category=[];
        $category['category_name']=$request->txtNameCategory;
        $category['category_desc']=$request->txtDesCategory;
        $category['created_at']=Carbon::now('Asia/Ho_Chi_Minh');
        $result=DB::table('tbl_category')->insert($category);  
        if($result){
            Session::put('message',"Add Category Success!!");
        }
        else{
            Session::put('message',"Add Category fail!!");
        }
        return \redirect('show-category');

    }
    //show category
    public function show_category(){
        $this->before_action();
        $list_category=DB::table('tbl_category')->get();
        return view('admin.category.show_category')->with('list_category',$list_category);
        
    }
    //edit category
    public function edit_category($id){
        $this->before_action();
        $list_category=DB::table('tbl_category')->where('id',$id)->get();
        $category=$list_category[0];
        return view('admin.category.edit_category')->with('category',$category);
    }
    public function post_edit_category(Request $request, $id){
        $category_name=$request->txtNameCategory;
        $category_desc=$request->txtDesCategory;
        $updated_at=Carbon::now('Asia/Ho_Chi_Minh');
        $result=DB::table('tbl_category')->where('id',$id)->update(['category_name'=> $category_name,'category_desc'=> $category_desc,'updated_at'=>$updated_at]);
        if($result){
            Session::put('message',"Update Category Success!!");
        }
        else{
            Session::put('message',"Update Category fail!!");
        }
        return \redirect('show-category');
    }
    public function delete_category($id){
        $result=DB::table('tbl_category')->where('id',$id)->delete();
        if($result){
            Session::put('message',"Delete Category Success!!");
        }
        else{
            Session::put('message',"Delete Category fail!!");
        }
        return \redirect('show-category');
    }
}
