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
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script src="js/jq.js"></script>
</head>

<body>
	<div class="main-container">

	<div class="form-container-mobile">
	<img class="logo" src="https://res.cloudinary.com/aidee/image/upload/v1568650275/Merakians/Grp_logo_qkrk0u.png" alt="team logo">
	<form action="#" method="post">
	<h1>Hello Friend!</h1>
		<p>Create Your Account.</p>
		<?php
			if (isset($err))
				{
					echo $err;
				}
			?>
			<div class="social-icons">
				<a href="#" class="social"><i class="socicon-facebook"></i></a>
				<a href="#" class="social"><i class="socicon-twitter"></i></a>
				<a href="#" class="social"><i class="socicon-google"></i></a>
			</div>
			<p>Or register with your email</p>
			<input type="text" name="name" placeholder="Name" />
			<input type="text" name="username" placeholder="UserName" />
			<input type="email" name="email" placeholder="Email" />
			<input type="password" name="password" placeholder="Password" />		
			<p>Signup to start a journey with us</p>
			<?php
				if (isset($error))
				{
					echo $error;
				}
				?>
			<button type="submit" name="Signup">SIGNUP</button>
			<p id="indexlink"> Have an account already? <a class="link" href="index.php">Login</a></p>
			
	</form>
</div>
			
	</form>
</div>
</div>

</body>

</html>