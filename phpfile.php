//begining of form validation\\
<?php
$emailErr = $passwordErr ="";
$email = $password ="";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
if (empty($_POST["email"])) {
        $emailErr = "Email Missing";
}
else{
    $email = $_POST["email"];
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
if (empty($_POST["password"])) {
    $passwordErr = "Password Missing";
}
else{
    $password = $_POST["password"]
}

$email = test_input($_POST["email"]);
$password = test_input($_POST["password"]);
         
         echo $email;
         echo "<br>";
         echo $password;
?>