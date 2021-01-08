<?php

namespace App\Http\Controllers;
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


    public function payment(Request $request)
    {

        $customer_id=auth()->user()->id;

        if(billing_address::where('customer_id',$customer_id)->first())
        {
            billing_address::where('customer_id',$customer_id)->update([
                'customer_id'=>$customer_id,
                'billing_name'=>$request->b_name,
                'billing_contact_number'=>$request->b_contact_number,
                'b_house'=>$request->b_house,
                'b_street'=>$request->b_street,
                'b_postal'=>$request->b_postal,
                'b_city'=>$request->b_city,
                ]);
        }
        else {
            billing_address::create([
                'customer_id'=>$customer_id,
                'billing_name'=>$request->b_name,
                'billing_contact_number'=>$request->b_contact_number,
                'b_house'=>$request->b_house,
                'b_street'=>$request->b_street,
                'b_postal'=>$request->b_postal,
                'b_city'=>$request->b_city,
                ]);
                
        }


        if (shipping_address::where('customer_id', $customer_id)->first()) {

            shipping_address::where('customer_id',$customer_id)->update([
                'customer_id'=>$customer_id,
                'shipping_name'=>$request->s_name,
                'shipping_contact_number'=>$request->s_contact_number,
                's_house'=>$request->s_house,
                's_street'=>$request->s_street,
                's_postal'=>$request->s_postal,
                's_city'=>$request->s_city,
                ]);

        }

        else{

            shipping_address::create([
                'customer_id'=>$customer_id,
                'shipping_name'=>$request->s_name,
                'shipping_contact_number'=>$request->s_contact_number,
                's_house'=>$request->s_house,
                's_street'=>$request->s_street,
                's_postal'=>$request->s_postal,
                's_city'=>$request->s_city,
                ]);
    

        }

            
   
            return view('customer.make_payment');
        

    }


    public function order(Request $request)
    {

        $customer_id=auth()->user()->id;
        $order_no= rand(1000,9999);
        $billing_id= billing_address::where('customer_id',$customer_id)->first()->id;
        $shipping_id= shipping_address::where('customer_id',$customer_id)->first()->id;

        
        payment::create([
            'customer_id'=>$customer_id,
            'order_no'=>$order_no,
            'transaction_id'=>$request->transaction_id,
            'payment_confirmation'=>"pending",
            ]);

            delivery::create([
                'order_no'=>$order_no,
                'active_status'=>"pending",
                ]);
    
        order::create([
            'customer_id'=>$customer_id,
            'order_no'=>$order_no,
            'billing_id'=>$billing_id,
            'shipping_id'=>$shipping_id,
            'active_status'=>"pending",
            ]);
            
            
            $order_no=order::where('customer_id',$customer_id)->where('active_status','pending')->first()->order_no;

            
            $item= cart::where('user_id',$customer_id)->where('active_status','0')->get();


            foreach($item as $item)

            {
                $order= new order_detail;
                $order->product_id=$item['product_id'];
                $order->customer_id=$customer_id;
                $order->order_no=$order_no;
                $order->product_quantity=$item['product_quantity'];
                $order->active_status='pending';
                $order->save();

            }

            cart::where('user_id',$customer_id)->update([
                'active_status'=>'1'
                ]);



            return $this->viewCustomerHome($request);



    }

}
