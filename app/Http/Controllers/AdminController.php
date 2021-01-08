<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\product;
use Illuminate\Support\Facades\Auth;
use App\Models\cart;
use Session;
use App\Models\billing_address;
use App\Models\shipping_address;
use App\Models\order;
use App\Models\order_detail;
use App\Models\payment;
use App\Models\delivery;


class AdminController extends Controller
{

    function order()
    {

        $orders= order::get();
        $order_details=order::with('getUserInfo','getShippingInfo','getBillingInfo')->get();
     

        return view('admin.order')->with(compact('order_details'));

        // $product=cart::where('user_id', $user_id)->where('active_status', '0')->orderBy('id', 'desc')->with('getProduct')->get();

    }

    function orderView($id)
    {
        $order_details=order::where('id',$id)->with('getUserInfo','getShippingInfo','getBillingInfo')->first();
        $order_no= $order_details->order_no;

        $product_details=order_detail::where('order_no',$order_no)->with('getOrderProductInfo')->get();


        return view('admin.order_view')->with(compact('order_details','product_details'));

        // return $product_details;
    }
    
}
