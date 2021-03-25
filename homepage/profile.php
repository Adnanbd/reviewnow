<?php
session_start();
include 'C:\xampp\htdocs\reviewtest\db_connect.php';
include 'C:\xampp\htdocs\reviewtest\path.php';


$result = mysqli_query($con, "SELECT * FROM review where email_id = '".$_SESSION["email"]."' ORDER BY review_id DESC");
 
$user_email = mysqli_query($con, "SELECT * FROM users where email_id = '".$_SESSION["email"]."' ");
 
$row_one = mysqli_fetch_array($user_email);
 

?>