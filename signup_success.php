
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
			<?php
			session_start();
					 $name = $_SESSION["name"];
					$username = $_SESSION["name"];
					$password = $_SESSION["name"];
					echo "<p id='success'>Sign up is successful</p>";
					echo "<p>";
					echo "return to <a href='index.php'>Login</a>";
					echo "</p>";
			?>
		</div>
      <script src="js/script.js"></script>
  </body>
</html>