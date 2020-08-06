<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    //
    protected $table = 'tbl_shipping';
    public $timestamps = true;
    protected $fillable = ['notes','emotion'];
}
