@extends('admin_layout')
@section('content')


    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h2 class="mt-30 page-title">Products</h2>
                <ol class="breadcrumb mb-30">
                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="products.html">Products</a></li>
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
                                        <input type="text" id="product_name" class="form-control" placeholder="Category Name">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Category*</label>
                                            
                                        <select id="product_category" name="categtory" class="form-control">
                                            <option selected>--Select Category--</option>

                                            @foreach ($category as $category)
                                            <option value={{$category->id}}>{{$category->category_name}}</option>
                                    
                                            @endforeach

                                        </select>
                                 </div>
                                    <div class="form-group">
                                        <label class="form-label">MRP*</label>
                                        <input type="text" class="form-control" placeholder="$0">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Discount MRP*</label>
                                        <input type="text" class="form-control" placeholder="$0">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Status*</label>
                                        <select id="status" name="status" class="form-control">
                                            <option selected>Active</option>
                                            <option value="1">Inactive</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Description*</label>
                                        <div class="card card-editor">
                                            <div class="content-editor">
                                                 <div id='edit'></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Category Image*</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                                                <label class="custom-file-label" for="inputGroupFile04">Choose Image</label>
                                            </div>
                                        </div>
                                        <div class="add-cate-img-1">
                                            <img src="images/product/img-11.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">More Image*</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile05" aria-describedby="inputGroupFileAddon05">
                                                <label class="custom-file-label" for="inputGroupFile05">Choose Image</label>
                                            </div>
                                        </div>
                                        <ul class="add-produc-imgs">
                                            <li>
                                                <div class="add-cate-img-1">
                                                    <img src="images/product/big-1.jpg" alt="">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="add-cate-img-1">
                                                    <img src="images/product/big-2.jpg" alt="">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="add-cate-img-1">
                                                    <img src="images/product/big-3.jpg" alt="">
                                                </div>
                                            </li>
                                            <li>
                                                <div class="add-cate-img-1">
                                                    <img src="images/product/big-4.jpg" alt="">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <button class="save-btn hover-btn" id="add_product" type="button">Add New Product</button>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-4 bg-footer mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted-1">© 2020 <b>Gambo Supermarket</b>. by <a href="https://themeforest.net/user/gambolthemes">Gambolthemes</a></div>
                    <div class="footer-links">
                        <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/privacy_policy.html">Privacy Policy</a>
                        <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/term_and_conditions.html">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>




  



@endsection