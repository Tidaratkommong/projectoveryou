<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paypal extends Model
{
    public function items()
    {
        return $this->belongsToMany(Product::class,'order_items','order_id','product_id')->withPivot('quantity','price');
    }

  
    
}
