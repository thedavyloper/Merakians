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
$error = "";

if(isset($_POST['login'])) {

   if (empty($_POST['email']))
   {

        $error = "<p id='red'>Please email is required</p>";

   }
   else if(empty($_POST['password'])) 
   {

        $error = "<p id='red'>Please password is required</p>";

   }

   else
   {   
      if(file_exists("login_data.json"))
      {

				$current_data = file_get_contents("login_data.json");
				$array_data = json_decode ($current_data, true);
				$extra = array(
		
					"email" => $_POST['email'],
					"password" => $_POST['password']

				);
				$array_data[] = $extra;
				$final_data = json_encode($array_data);
				if(file_put_contents('login_data.json', $final_data)) 
				{
					
					header ("Location: login_success.php");
				}

      }
      else 
      {

        $error = "JSON File not found";
      }

   }
}

?>

</body>

</html>