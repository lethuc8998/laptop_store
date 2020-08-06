<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    //
    protected $table = 'tbl_order_detail';
    public $timestamps = true;
    protected $fillable = ['product_name','product_price','product_qty'];
}
