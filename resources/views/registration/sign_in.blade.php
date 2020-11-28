<!DOCTYPE html>
<html lang="en">

	
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
	

		{{-- csrf token --}}
<meta name="csrf-token" content="{{ csrf_token() }}">

		<title>Sign In </title>
		
	
     <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
     <link href='{{asset('resources')}}/frontend/vendor/unicons-2.0.1/css/unicons.css?{{time()}}' rel='stylesheet'>
     <link href="{{asset('resources')}}/frontend/css/style.css?{{time()}}" rel="stylesheet">
     <link href="{{asset('resources')}}/frontend/css/responsive.css?{{time()}}" rel="stylesheet">
     
     <!-- Vendor Stylesheets -->
     <link href="{{asset('resources')}}/frontend/vendor/fontawesome-free/css/all.min.css?{{time()}}" rel="stylesheet">
     <link href="{{asset('resources')}}/frontend/vendor/bootstrap/css/bootstrap.min.css?{{time()}}" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="{{asset('resources')}}/frontend/vendor/semantic/semantic.min.css?{{time()}}">	

	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


		
	</head>

<body>
	@csrf
	<div class="sign-inup">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-5">
					<div class="sign-form">
						<div class="sign-inner">
							<div class="sign-logo" id="logo">
								<a href="{{url('/')}}"><img src="resources/frontend/images/logo.png" alt=""></a>
								<a href="{{url('/')}}"><img class="logo-inverse" src="resources/frontend/images/dark-logo.png" alt=""></a>
							</div>
							<form action="login" method="POST"> 
								@csrf
							<div class="form-dt">
								<div class="form-inpts checout-address-step">
									
							
										<div class="form-title"><h6>Sign In</h6></div>
										<div class="form-group pos_rel">
											<input id="number" name="number" type="text" placeholder="Enter Phone Number" class="form-control lgn_input" required="">
											<i class="uil uil-mobile-android-alt lgn_icon"></i>
										</div>
										<div class="form-group pos_rel">
											<input id="password" name="password" type="password" placeholder="Enter Password" class="form-control lgn_input" required="">
											<i class="uil uil-padlock lgn_icon"></i>
										</div>
										<button type="submit"  class="login-btn hover-btn">Log In</button>

								</div>
								<div class="password-forgor">
									<a href="{{url('forgot_password')}}">Forgot Password?</a>
								</div>
								<div class="signup-link">
									<p>Don't have an account? - <a href="{{url('sign_up')}}">Sign Up Now</a></p>
								</div>
							</div>
						</form>
						</div>
					</div>
					<div class="copyright-text text-center mt-3">
						<i class="uil uil-copyright"></i>Copyright 2020 <b>Designed By Hussain Rifat</b> . All rights reserved
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Javascripts -->
	<script src="{{asset('resources')}}/js/registration.js?{{time()}}"></script>
	<script src="{{asset('resources')}}/frontend/js/jquery-3.3.1.min.js?{{time()}}"></script>
	<script src="{{asset('resources')}}/frontend/js/jquery.countdown.min.js?{{time()}}"></script>
	
</body>

</html>

