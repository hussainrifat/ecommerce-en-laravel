<!DOCTYPE html>
<html lang="en">

	
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, shrink-to-fit=9">
		
		<title>Sign Up</title>
		
	
     <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
     <link href='{{asset('resources')}}/frontend/vendor/unicons-2.0.1/css/unicons.css?{{time()}}' rel='stylesheet'>
     <link href="{{asset('resources')}}/frontend/css/style.css?{{time()}}" rel="stylesheet">
     <link href="{{asset('resources')}}/frontend/css/responsive.css?{{time()}}" rel="stylesheet">
     
     <!-- Vendor Stylesheets -->
     <link href="{{asset('resources')}}/frontend/vendor/fontawesome-free/css/all.min.css?{{time()}}" rel="stylesheet">
     <link href="{{asset('resources')}}/frontend/vendor/bootstrap/css/bootstrap.min.css?{{time()}}" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="{{asset('resources')}}/frontend/vendor/semantic/semantic.min.css?{{time()}}">	



		
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
									<form>
										<div class="form-title"><h6>Sign Up</h6></div>
										<div class="form-group pos_rel">
											<input id="name" type="text" placeholder="Full name" class="form-control lgn_input" required="">
											<i class="uil uil-user-circle lgn_icon"></i>
										</div>
										<div class="form-group pos_rel">
											<input id="email"  type="email" placeholder="Email Address" class="form-control lgn_input" required="">
											<i class="uil uil-envelope lgn_icon"></i>
										</div>
										<div class="form-group pos_rel">
											<input id="number" type="text" placeholder="Phone Number" class="form-control lgn_input" required="">
											<i class="uil uil-mobile-android-alt lgn_icon"></i>
										</div>

										<div class="form-group pos_rel">
											<input id="address" type="text" placeholder="Address" class="form-control lgn_input" required="">
											<i class="uil uil-location-point lgn_icon"></i>
										</div>

										<div class="form-group pos_rel">
											<input id="district" type="text" placeholder="District" class="form-control lgn_input" required="">
											<i class="uil uil-location-pin-alt lgn_icon"></i>
										</div>

										<div class="form-group pos_rel">
											<input id="postal_code" type="text" placeholder="Postal Code" class="form-control lgn_input" required="">
											<i class="uil uil-postcard lgn_icon"></i>
										</div>
									
										<div class="form-group pos_rel">
											<input id="password" type="password" placeholder="Password" class="form-control lgn_input" required="">
											<i class="uil uil-padlock lgn_icon"></i>
                                        </div>
                                        
                                        <div class="form-group pos_rel">
											<input id="retype_password"  type="password" placeholder="Retype Password" class="form-control lgn_input" required="">
											<i class="uil uil-padlock lgn_icon"></i>
										</div>
										<button class="login-btn hover-btn" type="submit">Sign Up Now</button>
									</form>
								</div>
								<div class="signup-link">
									<p>I have an account? - <a href="{{url('sign_in')}}">Sign In Now</a></p>
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