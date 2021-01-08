@extends('admin_layout')
@section('content')


<div id="layoutSidenav_content">
   
        <div class="container-fluid">
            <h2 class="mt-30 page-title">Categories</h2>
            <ol class="breadcrumb mb-30">
                <li class="breadcrumb-item"><a href="{{url('admin_dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Categories</li>
            </ol>
            <div class="row justify-content-between">
                <div class="col-lg-12">
                    <a href="add_category" class="add-btn hover-btn">Add New</a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="bulk-section mt-30">
                        <div class="input-group">
                            <select id="action" name="action" class="form-control">
                                <option selected>Bulk Actions</option>
                                <option value="1">Active</option>
                                <option value="2">Inactive</option>
                                <option value="3">Delete</option>
                            </select>
                            <div class="input-group-append">
                                <button class="status-btn hover-btn" type="submit">Apply</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="bulk-section mt-30">
                        <div class="search-by-name-input">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <div class="input-group">
                            <select id="categeory" name="categeory" class="form-control">
                                <option selected>Active</option>
                                <option value="1">Inactive</option>
                            </select>
                            <div class="input-group-append">
                                <button class="status-btn hover-btn" type="submit">Search Category</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="card card-static-2 mt-30 mb-30">
                        <div class="card-title-2">
                            <h4>All Categories</h4>
                        </div>
                        <div class="card-body-table">
                            <div class="table-responsive">
                                <table class="table ucp-table table-hover">
                                    <thead>
                                        <tr>
                                            <th style="width:60px"><input type="checkbox" class="check-all"></th>
                                            <th >Order ID</th>
                                            <th>Customer Name</th>
                                            <th>Shipping Address</th>
                                            <th>Billing Address</th>
                                            <th>Order Date</th>
                                            <th>Payment Status</th>
                                            <th>Details</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                      
                                            
                                @foreach ($order_details as $order)

                                    
                             
                                        <tr>
                                            
                                            <td><input type="checkbox" class="check-item" name="" value="11"></td>
                                            <td>{{$order->order_no}}</td>
                                           
                                            <td>{{$order->getUserInfo->name}}</td>
                                            <td>{{$order->getShippingInfo->s_house}},{{$order->getShippingInfo->s_street}},{{$order->getShippingInfo->s_postal}},{{$order->getShippingInfo->s_city}}</td>

                                      
                                            <td>{{$order->getBillingInfo->b_house}},{{$order->getBillingInfo->b_street}},{{$order->getBillingInfo->b_postal}},{{$order->getBillingInfo->b_city}}</td>

                                            <td>{{$order->created_at}}</td>
                                            <td><span class="badge-item badge-status">{{$order->active_status}}</span></td>

                                            <td class="action-btns">
                                                <a href="{{url('order_view',$order->id)}}" class="edit-btn"><i class="fas fa-edit"></i>View</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                  
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



        
@endsection