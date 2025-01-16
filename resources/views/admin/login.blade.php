<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alonso y Chanel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link  rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
   
	<link rel="stylesheet" type="text/css" href="/assetslogin/css/main.css">
</head>
<body>
	
	<div class="limiter"> 
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="{{ route('login') }}" method="post"> 
                    @csrf
					<span class="login100-form-title p-b-26">
						Login
					</span>
					<span class="login100-form-title p-b-26"> 
						<img src="/content/vector00.png" alt="vector0" class="w-[300px]">
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Usuario no valido">
						<input class="input100" type="text" name="user" autocomplete="new-password">
						<span class="focus-input100" data-placeholder="Usuario"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password" autocomplete="new-password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Login
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
				
					</div>
					@error('login')
						{{$errors->login}}
					@enderror
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
</body>
</html>