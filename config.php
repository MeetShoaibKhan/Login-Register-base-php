<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "login-register-from";

$conn = mysqli_connect( $server, $user, $pass, $database);

if(!$conn){
  echo "<script>die('Connection Failed.')</script>";
}

?>
