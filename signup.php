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
$message = "";
$err = "";

if(isset($_POST['Signup'])) {

	if (empty($_POST['name']))
   {

      $err = "<p id='red'>Name field cannot be empty</p>";

	 }
	 
	 elseif (empty($_POST['username']))
   {

      $err = "<p id='red'>Please choose a username</p>";

   }

   elseif (empty($_POST['email']))
   {

      $err = "<p id='red'>Email cannot be empty</p>";

   }
   elseif(empty($_POST['password'])) 
   {

      $err = "<p id='red'>Password cannot be empty</p>";

   }

   else
   {   
      if(file_exists("signup_data.json"))
      {

				$current_data = file_get_contents("signup_data.json");
				$array_data = json_decode ($current_data, true);
				$extra = array(
					"name" => 		$_POST['name'],
					"username" => $_POST['username'],
					"email" => 		$_POST['email'],
					"passion" => 	$_POST['password']
				);
				$array_data[] = $extra;
				$final_data = json_encode($array_data);
				if(file_put_contents('signup_data.json', $final_data)) 
				{
					
					header ("Location: signup_success.php");
				}

      }
      else 
      {

        $err = "JSON File not found";
      }

   }
}

?>

</body>

</html>