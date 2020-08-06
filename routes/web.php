<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// login admin
Route::get('admin-login','AdminController@login');
Route::post('admin-login','AdminController@post_login');
// logout admin
Route::get('logout-admin','AdminController@logout_admin');

// show dashboard
Route::get('admin-dashboard','AdminController@dashboard')->middleware('admin_middleware');

// show account
Route::get('show-account','AdminController@show_account');
// add acccount
Route::get('add-account','AdminController@add_account');
Route::post('add-account','AdminController@post_add_account');
// edit account
Route::get('edit-account/{id}','AdminController@edit_account');
Route::post('edit-account/{id}','AdminController@post_edit_account');

//change password
Route::get('change-password/{id}','AdminController@change_password');
Route::post('change-password/{id}','AdminController@post_change_password');

// delete account
Route::get('delete-account/{id}','AdminController@delete_account');
// manage category
//add category

Route::get('add-category','CategoryController@add_category');
Route::post('add-category','CategoryController@post_add_category');

//show category
Route::get('show-category','CategoryController@show_category');
//edit category
Route::get('edit-category/{id}','CategoryController@edit_category');
Route::post('edit-category/{id}','CategoryController@post_edit_category');
//delete category
Route::get('delete-category/{id}','CategoryController@delete_category');

// manage product
//add product

Route::get('add-product','ProductController@add_product');
Route::post('add-product','ProductController@post_add_product');

//show category
Route::get('show-product','ProductController@show_product');
// search by product
Route::post('search-by-product','ProductController@search_by_product');
//edit category
Route::get('edit-product/{id}','ProductController@edit_product');
Route::post('edit-product/{id}','ProductController@post_edit_product');
//delete category
Route::get('delete-product/{id}','ProductController@delete_product');






//// home
Route::get('home','HomeController@index');
//show by category
Route::get('show-by-category/{id}','HomeController@show_by_category');
// view product_detail
Route::get('product-detail/{id}','HomeController@product_detail');
// add to cart with one product
Route::get('add-to-cart/{id}','CartController@add_to_cart');
// add to cart with more
Route::post('add-to-cart-with-more','CartController@add_to_cart_with_more');
// show cart
Route::get('show-cart','CartController@show_cart');
// delete one card row
Route::get('delete-one-row/{id}','CartController@delete_one_row');
Route::get('delete-one-row-home/{id}','CartController@delete_one_row_home');
// update quanlity product in cart
Route::post('update-product-qty','CartController@update_product_qty');

// create order
//Route::get('create-order','CartController@create_order');
Route::post('create-order','CartController@post_create_order');

///sign up customer
Route::get('sign-up','CustomerController@sign_up');
Route::post('sign-up','CustomerController@post_sign_up');
//sign in customer
Route::get('sign-in','CustomerController@sign_in');
Route::post('sign-in','CustomerController@post_sign_in');
//log out
Route::get('log-out-customer','CustomerController@log_out_customer');
// show history
Route::get('show-history','CustomerController@show_history');
// show profile

Route::get('profile','CustomerController@profile');

// update profile
Route::post('update-profile','CustomerController@update_profile');
// change password customer
Route::get('change-password-customer','CustomerController@change_password');
Route::post('change-password-customer','CustomerController@post_change_password');


// cancel order
Route::get('cancel-order/{id}','CustomerController@cancel_order');
// view order detail
Route::get('view-order-detail-history/{id}','CustomerController@view_order_detail_history');
// search product
Route::post('search-form','HomeController@search_form');

/////// manage order (admin)
// show order
Route::get('show-order','OrderController@show_order');
//show accepted order
Route::get('show-order-waiting','OrderController@show_order_waiting');
//show accepted order
Route::get('show-order-accepted','OrderController@show_order_accepted');
//show refused order
Route::get('show-order-refused','OrderController@show_order_refused');

// view order 

Route::get('view-order/{id}','OrderController@view_order');
// accept order
Route::get('accept-order/{id}','OrderController@accept_order');
// refuse order
Route::get('refuse-order/{id}','OrderController@refuse_order');



