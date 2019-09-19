<?php include 'login.php'?>
<?php include 'signup.php'?>
<!DOCTYPE html>
<html lang="en">
	
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login Page</title>
	<link rel="stylesheet" href="https://d1azc1qln24ryf.cloudfront.net/114779/Socicon/style-cf.css?u8vidh">
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" type="image/png" href="favicon.png">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script src="js/jq.js"></script>
</head>

<body>
	<div class="main-container">
		
		<div class="form-container">
		
			<div class="signin-form signin-form-enter">
				
				<form action="#" method="post">
				<?php
				if (isset($error))
				{
					echo $error;
				}
				?>
					<h1>Welcome Back!</h1>
					<p>Sign in to stay connected.</p>
					<div class="social-container">
						<a href="#" class="social"><i class="socicon-facebook"></i></a>
						<a href="#" class="social"><i class="socicon-twitter"></i></a>
						<a href="#" class="social"><i class="socicon-google"></i></a>
					</div>
					<span>Or use your account</span>
					<input type="email" name="email" placeholder="Email" />
					<input type="password" name="password" placeholder="Password" />
					<div class="check">
						<div class="left">
							<input type="checkbox" />
							<span>Keep me logged in</span>
						</div>
						<div class="right"><a class="link" href="#">Forgot your password?</a></div>
						
					</div>
					
					<button type="submit" id="loginbtn" name="login">LOGIN</button>
				
				</form>
			</div>

			<div class="signup-form">
				<form action="#" method="POST">
					<h1>Hello Friend!</h1>
					<p>Create Your Account.</p>
					<?php
				if (isset($err))
				{
					echo $err;
				}
				?>
					<div class="social-container">
						<a href="#" class="social"><i class="socicon-facebook"></i></a>
						<a href="#" class="social"><i class="socicon-twitter"></i></a>
						<a href="#" class="social"><i class="socicon-google"></i></a>
					</div>
					<span>Or register with your email</span>
					<input type="text" name="name" placeholder="Name" />
					<input type="text" name="username" placeholder="UserName" />
					<input type="email" name="email" placeholder="Email" />
					<input type="password" name="password" placeholder="Password" />
					<button type="submit" name="Signup">SIGNUP</button>
				</form>
			</div>

			<div class="slider">
				<img src="https://res.cloudinary.com/aidee/image/upload/v1568650275/Merakians/Grp_logo_qkrk0u.png"
					alt="team logo">

				<div class="slider-panel">
					<div class="sign-up-message panel-item">
						<h1>Hello Friend!</h1>
						<p>Signup to start a journey with us</p>
						<button type="button" id="slide-to-signup">
							SIGN UP
						</button>
					</div>
					<div class="sign-in-message panel-item">
						<h1>Welcome Back!</h1>
						<p>Sign in to get connected.</p>
						<button type="button" id="slide-to-signin">
							SIGN IN
						</button>
					</div>
				</div>

			</div>

		</div>

	</div>

</body>

</html>