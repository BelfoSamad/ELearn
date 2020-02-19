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

<body id="register_bg">

	<nav id="menu" class="fake_menu"></nav>

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->

	<div id="login">
		<aside>
			<form method="POST" action="{{ route('register') }}">
				@csrf
				<div class="form-group">

					<span class="input">
						<input id="name" type="text"
							class="input_field form-control @error('name') is-invalid @enderror" name="name"
							value="{{ old('name') }}" required autocomplete="name" autofocus>
						<label class="input_label">
							<span class="input__label-content">Your Name</span>
						</label>
					</span>

					<span class="input">
						<input id="birthdate" type="date"
							class="input_field form-control @error('birthdate') is-invalid @enderror" name="birthdate"
							value="{{ old('birthdate') }}" required autocomplete="birthdate">
						<label class="input_label">
							<span class="input__label-content">Your Birthdate</span>
						</label>
					</span>

					<span class="input">
						<input id="email" type="email"
							class="input_field form-control @error('email') is-invalid @enderror" name="email"
							value="{{ old('email') }}" required autocomplete="email">
						<label class="input_label">
							<span class="input__label-content">Your Email</span>
						</label>
					</span>

					<span class="input">
						<select class="input_field form-control @error('gender') is-invalid @enderror" name="gender"
							name="education_apply" id="education_apply" required>
							<option value="Male" selected="">Male</option>
							<option value="Female">Female</option>
						</select>
						<label class="input_label">
							<span class="input__label-content">Gender</span>
						</label>
					</span>

					<span class="input">
						<select class="input_field form-control @error('type') is-invalid @enderror" name="type"
							name="education_apply" id="education_apply" required>
							<option value="Student" selected="">Student</option>
							<option value="Teacher">Teacher</option>
						</select>
						<label class="input_label">
							<span class="input__label-content">Account Type</span>
						</label>
					</span>

					<span class="input">
						<input id="password" type="password"
							class="input_field form-control @error('password') is-invalid @enderror" name="password"
							required autocomplete="new-password">
						<label class="input_label">
							<span class="input__label-content">Your password</span>
						</label>
					</span>

					<span class="input">
						<input id="password-confirm" type="password" class="input_field form-control"
							name="password_confirmation" required autocomplete="new-password">
						<label class="input_label">
							<span class="input__label-content">Confirm password</span>
						</label>
					</span>

					<div id="pass-info" class="clearfix"></div>
				</div>
				<button type="submit" class="btn_1 rounded full-width add_top_30">
					{{ __('Register') }}
				</button>
				<div class="text-center add_top_10">Already have an acccount? <strong><a href="/login">Sign
							In</a></strong></div>
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

	<!-- SPECIFIC SCRIPTS -->
	<script src="js/pw_strenght.js"></script>

</body>

</html>