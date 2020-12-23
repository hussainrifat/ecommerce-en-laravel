@extends('admin_layout')
@section('content')

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="{{asset('resources')}}/admin\css\images.css?{{time()}}" rel="stylesheet">
</head>

    <div id="layoutSidenav_content">
        <main>
            @csrf
            <div class="container-fluid">
                <h2 class="mt-30 page-title">Products</h2>
                <ol class="breadcrumb mb-30">
                    <li class="breadcrumb-item"><a href="{{url('admin_dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{url('admin_product')}}">Products</a></li>
                    <li class="breadcrumb-item active">Edit Product</li>
                </ol>
                <div class="row">

                 
                    <div class="col-lg-8 col-md-8">
                        <form action="{{url('update_product',$product->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="card card-static-2 mb-30">
                            <div class="card-title-2">
                                <h4>Update Product Information</h4> 
                            </div>
                            <div class="card-body-table">
                                <div class="news-content-right pd-20">
                                    <div class="form-group">
                                        <label class="form-label">Name*</label>
                                        <input type="text" name="product_name" class="form-control" value="{{$product->product_name}}" placeholder="{{$product->product_name}}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Category*</label>
                                            
                                        <select name="product_category" name="categtory" class="form-control">
                                            <option selected>{{$product->category_name}}</option>

                                            @foreach ($category as $category)
                                            <option value={{$category->category_name}}>{{$category->category_name}}</option>
                                    
                                            @endforeach

                                        </select>
                                 </div>
                                    <div class="form-group">
                                        <label class="form-label">MRP*</label>
                                        <input type="text"  name="product_selling_price" class="form-control"  value="{{$product->product_selling_price}}" placeholder="{{$product->product_selling_price}}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Discount MRP*</label>
                                        <input type="text" name="product_discount_price" class="form-control" value="{{$product->product_discount_price}}" placeholder="{{$product->product_discount_price}}">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Active Status</label>
                                        <select name="product_status" name="status" class="form-control">

                                            <option value="0">Active</option>
                                            <option value="1">Inactive</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Long Description*</label>
                                        <div class="card card-editor">
                                            <div class="content-editor">
                                               

                                                <input type="text" name="product_long_description" class="form-control" value="{{$product->product_long_description}}" placeholder="{{$product->product_long_description}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Short Description*</label>
                                        <div class="card card-editor">
                                            <div class="content-editor">
                                               

                                                <input type="text" name="product_short_description" class="form-control" value="{{$product->product_short_description}}" placeholder="{{$product->product_short_description}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Product Slug*</label>
                                        <div class="card card-editor">
                                            <div class="content-editor">
                                                <input type="text" name="product_slug" class="form-control" value="{{$product->product_slug}}" placeholder="{{$product->product_slug}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Product Quantity*</label>
                                        <div class="card card-editor">
                                            <div class="content-editor">
                                                <input type="text" name="product_quantity" class="form-control" value="{{$product->product_quantity}}" placeholder="{{$product->product_quantity}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Upload Product Image*</label>
    
                                    
                                        <div class="file-upload-wrapper">
    
                                            <input type="file" name="product_image"  class="file-upload" value="{{$product->product_image}}"  />
                                          </div>

                                          <div class="file-upload-wrapper">
                                          <img src="{{URL::to($product->product_image)}}" style="width: 200px; height:200px">
                                          </div>

                                      </div>

                                   


                                      
                                 
                            
                                    <button class="save-btn hover-btn" id="add_product" type="submit">Update Product Information</button>

                                </div> 
                            </div>
                        </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </main>
     
    </div>


    <script src="{{asset('resources')}}/js/images.js?{{time()}}"></script>



@endsection