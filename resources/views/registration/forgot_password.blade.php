<!DOCTYPE html>
<html lang="en">

	
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		<meta name="csrf-token" content="{{ csrf_token() }}" />

		<title>Reset Password</title>
		
	
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
							<div class="form-dt">

								<div class="form-inpts checout-address-step">
									@csrf
										<div class="form-title"><h6>Request a Password Reset</h6></div>
										<div class="form-group pos_rel">
											<input id="email"  type="email" placeholder="Your Email Address" class="form-control lgn_input" required="">
											<i class="uil uil-envelope lgn_icon"></i>
										</div>
										<div class="form-group pos_rel">
											<input id="old_password"  type="password" placeholder="Enter Old Password" class="form-control lgn_input" required="">
											<i class="uil uil-padlock lgn_icon"></i>
										</div>
										<div class="form-group pos_rel">
											<input id="new_password"  type="password" placeholder="Enter New Password" class="form-control lgn_input" required="">
											<i class="uil uil-padlock lgn_icon"></i>
										</div>
										<button class="login-btn hover-btn" id="forget_password" type="button">Reset Password</button>
								</div>
								<div class="signup-link">
									<p>Go Back - <a href="{{url('sign_in')}}">Sign In Now</a></p>
								</div>
							</div>
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