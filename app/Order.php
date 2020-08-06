<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'tbl_order';
    public $timestamps = true;
    protected $fillable = ['admin_id','order_total','order_status'];
    public function Shipping(){
        return $this->hasOne('App\Shipping','id','shipping_id');
    }
    public function Users(){
        return $this->belongsto('App\Users','customer_id','id');
    }
    public function OrderDetail(){
        return $this->hasMany('App\OrderDetail','order_id');
    }
}
