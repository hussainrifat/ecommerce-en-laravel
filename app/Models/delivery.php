<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class delivery extends Model
{
    use HasFactory;
    protected $fillable = ['order_no','active_status'];

    
    function getDeliveryInfo(){
        return $this->hasMany(delivery::class,'order_no','order_no');
    }

}
