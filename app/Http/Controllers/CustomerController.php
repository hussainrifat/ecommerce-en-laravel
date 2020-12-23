<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\product;
use Illuminate\Support\Facades\Auth;
use App\Models\cart;
use Session;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function viewCustomerHome(Request $request)
    {
        $category=category::get();
        $product=product::get();

        // file_put_contents('temp.txt',$cart_no);


        return view('Customer.customer_home')->with (compact('product','category'));
    }


    public function showProductView(Request $request,$id){

        // $category= category::get();
        $product_details= product::find($id);
        
          return view('customer.single_product_view',['product_details'=>$product_details]);

    }

}
