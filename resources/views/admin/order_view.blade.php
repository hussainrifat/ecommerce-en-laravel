@extends('admin_layout')
@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h2 class="mt-30 page-title">Orders</h2>
            <ol class="breadcrumb mb-30">
                <li class="breadcrumb-item"><a href="{{url('admin_dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{url('admin_order')}}">Orders</a></li>
                <li class="breadcrumb-item active">Order View</li>
            </ol>
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <div class="card card-static-2 mb-30">
                        <div class="card-title-2">
                            <h2 class="title1458">Invoice</h2>
                            <span class="order-id">Order ID : {{$order_details->order_no}}</span> 
                        </div>
                        <div class="invoice-content">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="ordr-date">
                                        <b>Order Date :</b> {{$order_details->created_at}}
                                    </div>

                                    <div class="ordr-date">
                                    
                                        <b>Customer Name :</b> {{$order_details->getUserInfo->name}}<br>
                                        <b>Email :</b> {{$order_details->getUserInfo->email}}<br>
                                        <b>Contact Number :</b> {{$order_details->getUserInfo->number}}<br>
                                    </div>

                                    <div class="ordr-date">
                                    
                                        <b>Billing Address:</b> <br>
                                        <b>Billing Name</b> {{$order_details->getBillingInfo->billing_name}}<br>
                                        <b>Contact Number :</b> {{$order_details->getBillingInfo->billing_contact_number}}<br>
                                        <b>House :</b> {{$order_details->getBillingInfo->b_house}}<br>
                                        <b>Street :</b> {{$order_details->getBillingInfo->b_street}}<br>
                                        <b>Postal Code :</b> {{$order_details->getBillingInfo->b_postal}}<br>
                                        <b>City :</b> {{$order_details->getBillingInfo->b_city}}<br>

                                   
                                    </div>


                                    <div class="ordr-date">
                                    
                                        <b>Payment Information:</b> <br>
                                        <b>Bkash TrxID :</b> {{$order_details->getPaymentInfo->transaction_id}}<br>
                                        <b>Payment Status :</b> {{$order_details->getPaymentInfo->payment_confirmation}}<br>

                        
                                    </div>

                                  
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="ordr-date right-text">
                                      
                                        <b>Shipping Address:</b> <br>
                                        <b>Shipping Name</b> {{$order_details->getShippingInfo->shipping_name}}<br>
                                        <b>Contact Number :</b> {{$order_details->getShippingInfo->shipping_contact_number}}<br>
                                        <b>House :</b> {{$order_details->getShippingInfo->s_house}}<br>
                                        <b>Street :</b> {{$order_details->getShippingInfo->s_street}}<br>
                                        <b>Postal Code :</b> {{$order_details->getShippingInfo->s_postal}}<br>
                                        <b>City :</b> {{$order_details->getShippingInfo->s_city}}<br>
                                    </div>

                                    <div class="ordr-date right-text">
                                      
                                        <b>Delivery Information:</b> <br>
                                        <b>Delivery Status : </b> {{$order_details->getDeliveryInfo->active_status}}<br>
                                       
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card card-static-2 mb-30 mt-30">
                                        <div class="card-title-2">
                                            <h4>Recent Orders By {{$order_details->getUserInfo->name}} </h4>
                                        </div>
                                        <div class="card-body-table">
                                            <div class="table-responsive">
                                                <table class="table ucp-table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th style="width:130px">SL</th>
                                                            <th>Item Name</th>

                                                         
                                                            <th class="text-center">Selling Price</th>
                                                            <th  class="text-center">Discount Price</th>
                                                            <th  class="text-center">Qty</th>
                                                            <th class="text-center">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <?php
                                                            $total_price=0;
                                                            ?>
                                                        @foreach ($product_details as $product)
                                                            
                                                       
                                                        <tr>
                                                            <td>1</td>

                                                            <td>
                                                                <a href="#" target="_blank">{{$product->getOrderProductInfo->product_name}}</a>
                                                            </td>

                                                    
                                                            <td class="text-center">{{$product->getOrderProductInfo->product_selling_price}}</td>

                                                            <td class="text-center">{{$product->getOrderProductInfo->product_discount_price}}</td>
                                                            <td class="text-center">{{$product->product_quantity}}</td>

                                                            <?php 
                                                            $quantity_price= $product->product_quantity*$product->getOrderProductInfo->product_selling_price;
                                                            

                                                            $total_price=$total_price+$quantity_price;
                                                            
                                                            ?>
                                                            <td class="text-center">{{$quantity_price}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7"></div>
                                <div class="col-lg-5">
                                    <div class="order-total-dt">
                                        <div class="order-total-left-text">
                                            Sub Total
                                        </div>
                                        <div class="order-total-right-text">
                                            ৳  {{$total_price}}
                                        </div>
                                    </div>
                                    <div class="order-total-dt">
                                        <div class="order-total-left-text">
                                            Delivery Fees
                                        </div>
                                        <div class="order-total-right-text">
                                            ৳ 60
                                        </div>
                                    </div>
                                    <div class="order-total-dt">
                                        <div class="order-total-left-text fsz-18">
                                            Total Amount
                                        </div>
                                        <div class="order-total-right-text fsz-18">
                                            ৳ {{$total_price+60}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7"></div>
                                <div class="col-lg-5">
                                    <div class="select-status">
                                        <label for="status">Status*</label>


                                        <form action="{{url('order_status')}}" method="POST">
                                            @csrf
                                    <input type="hidden" name="order_id" value="{{$order_details->order_no}}">

                                        <div class="input-group">
                                            <select  name="order_status" class="custom-select">
                                                <option value="Pending">Pending</option>
                                                <option value="Cancel">Cancel</option>
                                                <option value="Progress">Progress</option>
                                                <option value="Completed">Completed</option>
                                            </select>
                                            <div class="input-group-append">
                                                <button class="status-btn hover-btn" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>

                            

           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
 
</div>
@endsection