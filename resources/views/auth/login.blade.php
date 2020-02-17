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

<body id="login_bg">

	<nav id="menu" class="fake_menu"></nav>

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->

	<div id="login">
		<aside>
			<form method="POST" action="{{ route('login') }}">
				@csrf
				<div class="form-group">
					<span class="input">
						<input id="email" type="email"
							class="input_field form-control @error('email') is-invalid @enderror" name="email"
							value="{{ old('email') }}" required autocomplete="email" autofocus>
						<label class="input_label">
							<span class="input__label-content">Your email</span>
						</label>
					</span>

					<span class="input">
						<input id="password" type="password"
							class="input_field form-control @error('password') is-invalid @enderror" name="password"
							required autocomplete="current-password">
						<label class="input_label">
							<span class="input__label-content">Your password</span>
						</label>
					</span>
				</div>
				<button type="submit" class="btn btn-primary">
					{{ __('Login') }}
				</button>
				<div class="text-center add_top_10">New to ELearn? <strong><a href="register.html">Sign up!</a></strong>
				</div>
			</form>
			<div class="copy">© 2020 ELearn</div>
		</aside>
	</div>
	<!-- /login -->

	<!-- COMMON SCRIPTS -->
	<script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
	<script src="{{asset('js/common_scripts.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
	<script src="{{asset('assets/validate.js')}}"></script>

</body>

</html>