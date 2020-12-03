<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{       
    protected $tables='products';

    public function post()
    {
        return $this->belongsTo('App\Post');
    }
    }