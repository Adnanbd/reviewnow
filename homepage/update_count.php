<?php
session_start(); 
include 'C:\xampp\htdocs\reviewtest\db_connect.php';
$type=$_POST['type'];
$id=$_POST['id'];
$email = $_SESSION["email"];
$xyz = "select * from like_dislike where user_email = '$email' and post_id = $id";
$xyz_res=mysqli_query($con,$xyz);
if($xyz_res && mysqli_num_rows($xyz_res)){
	
}
else{
	$create_field = "INSERT INTO like_dislike (user_email, post_id, clike, cdislike) VALUES ('$email', $id, 0, 0)";
	$create_field_run=mysqli_query($con,$create_field);
}

if($type=='like'){
	$temp="select clike from like_dislike where user_email = '$email' and post_id = $id";
                $tempLike = mysqli_query($con,$temp);
				$tempLikeX = mysqli_fetch_assoc($tempLike);
				if($tempLikeX['clike'] == 1){
					$sql="update review set like_count=like_count-1 where review_id=$id";
					$sql2="update like_dislike set clike=0 where user_email = '$email' and post_id = $id";
				}
				else{
					$sql="update review set like_count=like_count+1 where review_id=$id";
					$sql2="update like_dislike set clike=1 where user_email = '$email' and post_id = $id";
				}
	


?>