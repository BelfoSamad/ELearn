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


</head>

<body id="login_bg">
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
							<span class="">Your email</span>
						</label>
					</span>

					<span class="input">
						<input id="password" type="password"
							class="input_field form-control @error('password') is-invalid @enderror" name="password"
							required autocomplete="current-password">
						<label class="input_label">
							<span class="">Your password</span>
						</label>
					</span>
				</div>
				<button type="submit" class="btn btn-primary">
					{{ __('Login') }}
				</button>
				<div class="text-center add_top_10">New to ELearn? <strong><a href="/register">Sign up!</a></strong>
				</div>
			</form>
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