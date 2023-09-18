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

                <x-jet-validation-errors class="mb-4" />

                <form method="POST" action="{{ route('register') }}">
                    @csrf
        
                    <span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Register
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter your name ">
						<input class="input100" type="text" name="name" placeholder="Fullname" id="name" required>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter your email ">
						<input class="input100" type="email" name="email" placeholder="Email" id="email" required>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter your Phone number">
						<input class="input100" type="number" name="Phone_number" placeholder="Phone number" id="name" required>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter your National id">
						<input class="input100" type="number" name="National_id" placeholder="National id" id="name" required>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					

					<div class="wrap-input100 validate-input" data-validate = "Enter your Address ">
						<input class="input100" type="text" name="Address" placeholder="Address" id="name" required>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Enter your Date of birth">
						<input class="input100" type="text" name="Date_of_birth" placeholder="Date of birth" id="name" required>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password" id="password" required>
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate="Enter correct password">
						<input class="input100" type="password" name="password_confirmation" placeholder="confirm password" id="password_confirmation" required autocomplete="new-password" >
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
        
                    
                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-jet-label for="terms">
                                <div class="flex items-center">
                                    <x-jet-checkbox name="terms" id="terms"/>
        
                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-jet-label>
                        </div>
                    @endif
        
                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
        
                        <x-jet-button class="ml-4">
                            {{ __('Register') }}
                        </x-jet-button>
                    </div>
                </form>
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










































