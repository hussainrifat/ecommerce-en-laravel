<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from gambolthemes.net/html-items/gambo_admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Nov 2020 15:30:52 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description-gambolthemes" content="">
	<meta name="author-gambolthemes" content="">
	<title>Esxence</title>

    <link href="{{asset('resources')}}/admin/css/admin-style1.css?{{time()}}" rel="stylesheet">
    <link href="{{asset('resources')}}/admin/css/admin-style2.css?{{time()}}" rel="stylesheet">


	<!-- Vendor Stylesheets -->
	<link href="{{asset('resources')}}/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{asset('resources')}}/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	
</head>

    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-light bg-clr">
            <a class="navbar-brand logo-brand" href="{{url('/')}}">Esxence</a>
			<button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <a href="http://gambolthemes.net/html-items/gambo_supermarket_demo/index.html" class="frnt-link"><i class="fas fa-external-link-alt"></i>Home</a>
            <ul class="navbar-nav ml-auto mr-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item admin-dropdown-item" href="edit_profile.html">Edit Profile</a>
						<a class="dropdown-item admin-dropdown-item" href="change_password.html">Change Password</a>
                        <a class="dropdown-item admin-dropdown-item" href="login.html">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link active" href="{{url('admin_dashboard')}}">
								<div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
							</a>

							<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProducts" aria-expanded="false" aria-controls="collapseProducts">
								<div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                                Products
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
							</a>
                            <div class="collapse" id="collapseProducts" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
									<a class="nav-link sub_nav_link" href="{{url('admin_product')}}">All Products</a>
									<a class="nav-link sub_nav_link" href="{{url('add_product')}}">Add Product</a>
								</nav>
							</div>
							
							<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCategories" aria-expanded="false" aria-controls="collapseCategories">
								<div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                                Categories
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
							</a>
                            <div class="collapse" id="collapseCategories" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
									<a class="nav-link sub_nav_link" href="{{url('all_category')}}">All Categories</a>
									<a class="nav-link sub_nav_link" href="{{url('add_category')}}">Add Category</a>
								</nav>
                            </div>




                             <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
								<div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                                Posts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
							</a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
									<a class="nav-link sub_nav_link" href="posts.html">All Posts</a>
									<a class="nav-link sub_nav_link" href="add_post.html">Add New</a>
									<a class="nav-link sub_nav_link" href="post_categories.html">Categories</a>
									<a class="nav-link sub_nav_link" href="post_tags.html">Tags</a>
								</nav>
                            </div>		
							<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLocations" aria-expanded="false" aria-controls="collapseLocations">
								<div class="sb-nav-link-icon"><i class="fas fa-map-marker-alt"></i></div>
                                Locations
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
							</a>
                            <div class="collapse" id="collapseLocations" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
									<a class="nav-link sub_nav_link" href="locations.html">All Locations</a>
									<a class="nav-link sub_nav_link" href="add_location.html">Add Location</a>
								</nav>
                            </div>		
							<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAreas" aria-expanded="false" aria-controls="collapseAreas">
								<div class="sb-nav-link-icon"><i class="fas fa-map-marked-alt"></i></div>
                                Areas
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
							</a>
                            <div class="collapse" id="collapseAreas" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
									<a class="nav-link sub_nav_link" href="areas.html">All Areas</a>
									<a class="nav-link sub_nav_link" href="add_area.html">Add Area</a>
								</nav>
                            </div>
						
							<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseShops" aria-expanded="false" aria-controls="collapseShops">
								<div class="sb-nav-link-icon"><i class="fas fa-store"></i></div>
                                Shops
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
							</a>
                          
					
							<a class="nav-link" href="{{url('admin_order')}}">
								<div class="sb-nav-link-icon"><i class="fas fa-cart-arrow-down"></i></div>
                                Orders
							</a>
							<a class="nav-link" href="customers.html">
								<div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Customers
							</a>
							<a class="nav-link" href="offers.html">
								<div class="sb-nav-link-icon"><i class="fas fa-gift"></i></div>
                                Offers
							</a>
							<a class="nav-link" href="pages.html">
								<div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
							</a>
                            <a class="nav-link" href="menu.html">
								<div class="sb-nav-link-icon"><i class="fas fa-layer-group"></i></div>
                                Menu
							</a>
							<a class="nav-link" href="updater.html">
								<div class="sb-nav-link-icon"><i class="fas fa-cloud-upload-alt"></i></div>
                                Updater
							</a>
							<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSettings" aria-expanded="false" aria-controls="collapseSettings">
								<div class="sb-nav-link-icon"><i class="fas fa-cog"></i></div>
                                Setting
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
							</a>
                            <div class="collapse" id="collapseSettings" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
									<a class="nav-link sub_nav_link" href="general_setting.html">General Settings</a>
									<a class="nav-link sub_nav_link" href="payment_setting.html">Payment Settings</a>
									<a class="nav-link sub_nav_link" href="email_setting.html">Email Settings</a>
								</nav>
                            </div>
							<a class="nav-link" href="reports.html">
								<div class="sb-nav-link-icon"><i class="fas fa-chart-bar"></i></div>
                                Reports
							</a>
                        </div>
                    </div>
                </nav>
            </div>

			@yield('content')

			
			
			
            
        </div>
        <script src="{{asset('resources')}}/admin/js/jquery-3.4.1.min.js?{{time()}}"></script>
        <script src="{{asset('resources')}}/admin/vendor/bootstrap/js/bootstrap.bundle.min.js?{{time()}}"></script>
		{{-- <script src="{{asset('resources')}}/admin\vendor\chart\highcharts.js?{{time()}}"></script> --}}
		{{-- <script src="{{asset('resources')}}/admin/vendor/chart/exporting.js?{{time()}}"></script> --}}
		{{-- <script src="{{asset('resources')}}/admin/vendor/chart/export-data.js?{{time()}}"></script> --}}
		{{-- <script src="{{asset('resources')}}/admin/vendor/chart/accessibility.js?{{time()}}"></script> --}}
        <script src="{{asset('resources')}}/admin/js/scripts.js?{{time()}}"></script>
		{{-- <script src="{{asset('resources')}}/admin/js/chart.js?{{time()}}"></script> --}}
		
		<script src="{{asset('resources')}}/js/product.js?{{time()}}"></script>

    </body>

<!-- Mirrored from gambolthemes.net/html-items/gambo_admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 27 Nov 2020 15:31:24 GMT -->
</html>
