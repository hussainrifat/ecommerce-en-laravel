<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shipping_address extends Model
{
    protected $guarded = [];

    use HasFactory;

    function getShippingInfo(){
        return $this->hasMany(shipping_address::class,'shipping_id','id');
    }

  
    
}
