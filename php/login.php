<!DOCTYPE php>
<php lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login | Hot 'N' Spicy</title>
		<link rel="stylesheet" href="/assests/css/login.css">
		<link rel="icon" type="image/png" href="/assests/images/front.png" />
	</head>

	<body>
		<!------------------ header---------------->


		<h2>HOT 'N' SPICY</h2>
		<div class="container" id="container">
			<div class="form-container sign-up-container">
				<form action="loginphp.php" method="POST">
					<h1>Create Account</h1>
					<div class="social-container">
						<a href="#" class="social"><img src="/assests/images/fbbrown.png"></a>
						<a href="#" class="social"><img src="/assests/images/igbrown.png"></a>
						<a href="#" class="social"><img src="/assests/images/twibrown.png"></a>
					</div>
					<span>or use your email for registration</span>
					<input type="text" id="name" name="name" placeholder="Name" />
					<input type="email" name="email" id="email" placeholder="Email" />
					<input type="password" placeholder="Password" id="pwd"/>
					<input type="password" placeholder="Confirm Password" id="pwd-repeat"/>

					<button type="submit">Sign Up</button>
				</form>
			</div>
			<div class="form-container sign-in-container">
				<form action="siginphp.php" method="POST">
					<h1>Sign in</h1>
					<div class="social-container">
						<a href="#" class="social"><img src="/assests/images/fbbrown.png"></a>
						<a href="#" class="social"><img src="/assests/images/igbrown.png"></a>
						<a href="#" class="social"><img src="/assests/images/twibrown.png"></a>
					</div>
					<span>or use your account</span>
					<input type="email" placeholder="Email" id="email" name="email" />
					<input type="password" name="password" placeholder="Password" />
					<a href="">Forgot your password?</a>

					<button type="submit">Sign In</button>
				</form>
			</div>
			<div class="overlay-container">
				<div class="overlay">
					<div class="overlay-panel overlay-left">
						<h1>Welcome Back!</h1>
						<p>To keep connected with us please login with your credentials</p>

						<button class="ghost" id="signIn">Sign In</button>
					</div>
					<div class="overlay-panel overlay-right">
						<h1>Hello, Friend!</h1>
						<p>Enter your credentials and start your journey with us</p>

						<button class="ghost" id="signUp">Sign Up</button>
					</div>
				</div>
			</div>
		</div>


		<script src="/assests/js/login.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
		<script>
			const options = {
				bottom: '32px', // default: '32px'
				right: 'unset', // default: '32px'
				left: '32px', // default: 'unset'
				time: '0.5s', // default: '0.3s'
				mixColor: '#fff', // default: '#fff'
				backgroundColor: '#fff', // default: '#fff'
				buttonColorDark: '#100f2c', // default: '#100f2c'
				buttonColorLight: '#fff', // default: '#fff'
				saveInCookies: true, // default: true,
				label: '🌓', // default: ''
				autoMatchOsTheme: true // default: true
			}

			const darkmode = new Darkmode(options);
			darkmode.showWidget();
		</script>

		<script>
		var password = document.getElementById("pwd")
		  , confirm_password = document.getElementById("pwd-repeat");
		function validatePassword(){
		  if(password.value != confirm_password.value) {
			confirm_password.setCustomValidity("Passwords Don't Match");
		  } else {
			confirm_password.setCustomValidity('');
		  }
		}
		password.onchange = validatePassword;
		confirm_password.onkeyup = validatePassword;
		
</script>

	</body>
</php>