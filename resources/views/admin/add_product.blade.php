@extends('admin_layout')
@section('content')

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

</head>

    <div id="layoutSidenav_content">
        <main>
            @csrf
            <div class="container-fluid">
                <h2 class="mt-30 page-title">Products</h2>
                <ol class="breadcrumb mb-30">
                    <li class="breadcrumb-item"><a href="admin_dashboard">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="admin_product">Products</a></li>
                    <li class="breadcrumb-item active">Add Product</li>
                </ol>
                <div class="row">
                 
                    <div class="col-lg-8 col-md-8">
                        <div class="card card-static-2 mb-30">
                            <div class="card-title-2">
                                <h4>Add New Product</h4>
                            </div>
                            <div class="card-body-table">
                                <div class="news-content-right pd-20">
                                    <div class="form-group">
                                        <label class="form-label">Name*</label>
                                        <input type="text" id="product_name" class="form-control" placeholder="Product Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Category*</label>
                                            
                                        <select id="product_category" name="categtory" class="form-control">
                                            <option selected>--Select Category--</option>

                                            @foreach ($category as $category)
                                            <option value={{$category->category_name}}>{{$category->category_name}}</option>
                                    
                                            @endforeach

                                        </select>
                                 </div>
                                    <div class="form-group">
                                        <label class="form-label">MRP*</label>
                                        <input type="number"  id="product_selling_price" class="form-control" placeholder="৳0" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Discount MRP*</label>
                                        <input type="number" id="product_discount_price" class="form-control" placeholder="৳0" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Status*</label>
                                        <select id="product_status" name="status" class="form-control">
                                            <option value="0">Active</option>
                                            <option value="1">Inactive</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Long Description*</label>
                                        <div class="card card-editor">
                                            <div class="content-editor">
                                                <textarea class="text-control" id="product_long_description" placeholder="Enter Description" required></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Short Description*</label>
                                        <div class="card card-editor">
                                            <div class="content-editor">
                                                <textarea class="text-control" id="product_short_description" placeholder="Enter Description" required></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Product Quantity*</label>
                                        <input type="number" id="product_quantity" class="form-control" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Upload Product Image*</label>
    
                                    
                                        <div class="file-upload-wrapper">
    
                                            <input type="file" id="product_image" id="input-file-now" class="file-upload"  required />
                                          </div>
                                      </div>
                                 
                            
                                    <button class="save-btn hover-btn" id="add_product" type="button">Add New Product</button>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
     
    </div>




  



@endsection