<?php

session_start(); 
include 'C:\xampp\htdocs\reviewtest\db_connect.php';
include 'C:\xampp\htdocs\reviewtest\path.php';
$user_email = mysqli_query($con, "SELECT * FROM users where email_id = '".$_SESSION["email"]."' ");
 
 $row_one = mysqli_fetch_array($user_email);

 
 



		

?>