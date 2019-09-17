
<!-- beginning of append login_data to json php script -->
<?php
$message = "";
$error = "";

if(isset($_POST['submit'])) {

   if (empty($_POST['email']))
   {

        $error = "<p class='red'>Please email is required</p>";

   }
   else if(empty($_POST['password'])) 
   {

        $error = "<p class='red'>Please password is required</p>";

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
              
              $message = "<p class='success'>Data Submitted Successfully</p>";
            }

      }
      else 
      {

        $error = "JSON File not found";
      }

   }
}

?>

<!-- End of append login_data to json php script -->


<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Login Page</title>
      <link rel="stylesheet" href="https://d1azc1qln24ryf.cloudfront.net/114779/Socicon/style-cf.css?u8vidh">
      <link rel="stylesheet" href="css/style.css">
      <link rel="shortcut icon" type="image/png" href="https://res.cloudinary.com/aidee/image/upload/v1568650275/Merakians/Grp_logo_qkrk0u.png">
  </head>
  <body>
    <div class="page-container">
      <div class="form-container">
          <img class="logo" src="https://res.cloudinary.com/aidee/image/upload/v1568650275/Merakians/Grp_logo_qkrk0u.png" alt="team logo">

      <form action="#" method="post">
        
          <h1>Sign in to Merakians</h1>
          <div class="social-icons">
              <a href="#" class="social"><i class="socicon-facebook"></i></a>
              <a href="#" class="social"><i class="socicon-google"></i></a>
            </div>
            <p>Or login with your email</p>
            <input type="email" name="email" placeholder="Enter Email">
            <input type="password" name="password" placeholder="Enter Password">
            <a class="help" href="#">Forgot password?</a>
            <input type="submit" name="submit" value="Login">
            <p> Don't have an account? <a class="link" href="#">Signup</a></p>
            <?php
            if (isset($error))
            {
              echo $error;
            }
          ?>
            <?php
            if(isset($message))
            {

              echo $message;
            }
            ?>
      </form>
      </div>
      
        <div class ="img-container">
            <img src="https://res.cloudinary.com/dv7ogqceo/image/upload/v1568661274/Merakians/img_20190916_081757_608.jpg" alt="Merakians Image Login" >
        </div>
      </div>
      <script src="js/script.js"></script>
  </body>
</html>