<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Udema a modern educational site template">
    <meta name="author" content="Ansonika">
	<title>ELearn</title>
	
	<!-- BASE CSS -->
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
	<link href="{{asset('css/vendors.css')}}" rel="stylesheet">
	<link href="{{asset('css/icon_fonts/css/all_icons.min.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">

</head>

<body id="register_bg">
	
	<nav id="menu" class="fake_menu"></nav>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->
	
	<div id="login">
		<aside>
			<figure>
				<a href="index.html"><img src="img/logo.png" width="149" height="42" data-retina="true" alt=""></a>
			</figure>
			<form autocomplete="off">
				<div class="form-group">

					<span class="input">
					<input class="input_field" type="text">
						<label class="input_label">
						<span class="input__label-content">Your Name</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="text">
						<label class="input_label">
						<span class="input__label-content">Your Last Name</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="email">
						<label class="input_label">
						<span class="input__label-content">Your Email</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="password" id="password1">
						<label class="input_label">
						<span class="input__label-content">Your password</span>
					</label>
					</span>

					<span class="input">
					<input class="input_field" type="password" id="password2">
						<label class="input_label">
						<span class="input__label-content">Confirm password</span>
					</label>
					</span>
					
					<div id="pass-info" class="clearfix"></div>
				</div>
				<a href="#0" class="btn_1 rounded full-width add_top_30">Register to Udema</a>
				<div class="text-center add_top_10">Already have an acccount? <strong><a href="login.html">Sign In</a></strong></div>
			</form>
			<div class="copy">© 2017 Udema</div>
		</aside>
	</div>
	<!-- /login -->
	
	<!-- COMMON SCRIPTS -->
    <script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('js/common_scripts.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('assets/validate.js')}}"></script>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="js/pw_strenght.js"></script>
  
</body>
</html>