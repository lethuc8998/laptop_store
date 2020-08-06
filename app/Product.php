<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'tbl_product';
    public $timestamps = true;
    protected $fillable = ['product_name','product_desc','product_image','product_quanlity','product_price','view_count','sold','created_at','updated_at'];
}
