
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