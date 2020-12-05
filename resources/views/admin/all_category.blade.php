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
                    <a href="add_category.html" class="add-btn hover-btn">Add New</a>
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
                                            <th style="width:60px">ID</th>
                                            <th style="width:130px">Image</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($categories as $category)
                                            
                                
                                        <tr>
                                            <td><input type="checkbox" class="check-item" name="ids[]" value="11"></td>
                                            <td>{{$category->id}}</td>
                                            <td>
                                                <div class="cate-img">
                                                    <img src="{{$category->category_image}}" alt="">
                                                </div>
                                            </td>
                                            <td>{{$category->category_name}}</td>
                                            <td>{{$category->category_description}}</td>
                                            <td><span class="badge-item badge-status">{{$category->active_status}}</span></td>
                                            <td class="action-btns">
                                                <a href="#" class="edit-btn"><i class="fas fa-edit"></i> Edit</a>
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