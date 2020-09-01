<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_id', 'product_name', 'product_delail','product_price','protype_id','product_img','product_num'
       ];
}
