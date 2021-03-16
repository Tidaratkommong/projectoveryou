<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    protected $fillable = [
        'image', 'name','address','telephone','email','detail'
       ];
}
