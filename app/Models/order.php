<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable = ['order_no','customer_id','billing_id','shipping_id','active_status'];

    function getUserInfo()
    {
        return $this->belongsTo(user::class,'customer_id','id');
    }

    function getShippingInfo(){
        return $this->belongsTo(shipping_address::class,'shipping_id','id');
    }

    function getBillingInfo(){
        return $this->belongsTo(billing_address::class,'billing_id','id');
    }

    function getOrderInfo(){
        return $this->belongsTo(order_detail::class,'order_no','order_no');
    }


  
}
