<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'tbl_category';
    public $timestamps = true;
    protected $fillable = ['category_name', 'category_desc'];
}
