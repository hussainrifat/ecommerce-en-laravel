<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\product;

class cart extends Model
{
    use HasFactory;
    protected $guarded=[];

    function getProduct()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }

}
