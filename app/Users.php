<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //
    protected $table = 'tbl_user';
    public $timestamps = true;
    protected $fillable = ['username','password','image', 'name','email','phone','address','type'];
}
