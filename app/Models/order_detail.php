<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_detail extends Model
{
    use HasFactory;
    protected $fillable = ['order_no','customer_id','product_id','product_quantity','active_status'];

    function getOrderInfo(){
        return $this->hasMany(order_detail::class,'order_no','order_no');
    }

    function getOrderProductInfo(){
        return $this->belongsTo(product::class,'product_id','id');
    }
}
