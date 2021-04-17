<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table ='order_items';

    protected $fillable = [
        'id', 'order_id','product_id','price','quantity','product_name','product_price'
       ];
}
