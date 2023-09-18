<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V3</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="loginn/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginn/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginn/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginn/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginn/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginn/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginn/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginn/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginn/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="loginn/css/util.css">
	<link rel="stylesheet" type="text/css" href="loginn/css/main.css">
<!--===============================================================================================-->
</head>
<body  background="loginn/images/back.jpg">

	<div class="limiter">
		<div class="container-login100" >
			<div class="wrap-login100">

        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif
				<form class="login100-form validate-form"method="POST" action="{{ route('login') }}">
                    @csrf
                    <x-jet-validation-errors class="mb-4" />
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
 
					<div class="wrap-input100 validate-input" data-validate = "Enter Email ">
						<input class="input100" type="email" name="email" placeholder="email" id="email" required>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password" id="password" required>
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-jet-button class="ml-4">
                            {{ __('Log in') }}
                        </x-jet-button>
						<x-jet-button class="ml-5">
                            {{ __('Forgot Password') }}
                        </x-jet-button>
                    </div>
					
				</form>
				<a href="{{url('/register')}}" style="color: antiquewhite;margin-left: 150px;">Make Account from here</a>

			</div>

		</div>

	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="loginn/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="loginn/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="loginn/vendor/bootstrap/js/popper.js"></script>
	<script src="loginn/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="loginn/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="loginn/vendor/daterangepicker/moment.min.js"></script>
	<script src="loginn/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="loginn/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="loginn/js/main.js"></script>

</body>
</html>
































