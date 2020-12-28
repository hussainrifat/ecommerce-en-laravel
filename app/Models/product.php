<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\cart;

class product extends Model
{
    use HasFactory;
    protected $guarded=[];

    function getProduct()
    {
        return $this->hasMany(cart::class,'product_id','id');
    }
}
