<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Admin Register</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="{{asset('assets/login/css/opensans-font.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/login/fonts/line-awesome/css/line-awesome.min.css')}}">
	<!-- Jquery -->
	<link rel="stylesheet" href="{{asset('assets/https://jqueryvalidation.org/files/demo/site-demos.css')}}">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="{{asset('assets/login/css/style.css')}}"/>
</head>

<body class="form-v5">
	<div class="page-content">
		<div class="form-v5-content">

			<form class="form-detail" action="{{route('register')}}" method="post">
                @csrf  
				<h2>Register Account Form</h2>
				<div class="form-row">
					<label for="full-name">Full Name</label>
					<input type="text" name="name" id="name" class="input-text @error('name') is-invalid @enderror">
					<i class="fas fa-user"></i>
					@error('name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
				    @enderror	
				</div>
				<div class="form-row">
					<label for="your-email">Your Email</label>
					<input type="text" name="email" id="email" class="input-text @error('email') is-invalid @enderror">
					<i class="fas fa-envelope"></i>	
					@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
				    @enderror
				</div>
				<div class="form-row">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="input-text @error('password') is-invalid @enderror">
					<i class="fas fa-lock"></i>
					@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
			        @enderror
				</div>
				<div class="form-row">
					<label for="password">Confirm Password</label>
					<input type="password" name="password_confirmation" id="password" class="form-control">
					<i class="fas fa-lock"></i>
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
				</div>
			</form>
		</div>
	</div>
	<script src="{{asset('assets/https://code.jquery.com/jquery-1.11.1.min.js')}}"></script>
	<script src="{{asset('assets/https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js')}}"></script>
	<script src="{{asset('assets/https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js')}}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>