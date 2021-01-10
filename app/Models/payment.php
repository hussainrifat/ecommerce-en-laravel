<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    protected $fillable = ['order_no','customer_id','transaction_id','payment_confirmation'];

    function getPaymentInfo(){
        return $this->hasMany(payment::class,'order_no','order_no');
    }

}
