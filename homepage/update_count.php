<?php
session_start(); 
include 'C:\xampp\htdocs\reviewtest\db_connect.php';
$type=$_POST['type'];
$id=$_POST['id'];
$email = $_SESSION["email"];
$xyz = "select * from like_dislike where user_email = '$email' and post_id = $id";
$xyz_res=mysqli_query($con,$xyz);

?>