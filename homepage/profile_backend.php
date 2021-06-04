<?php

$email = $_GET['email'];
include 'C:\xampp\htdocs\reviewnow\db_connect.php';

error_reporting(0);


$status = 'OK';
$content = [];

if (mysqli_connect_errno()) {
	$status = 'ERROR';
	$content = mysqli_connect_error();
}

$query = "SELECT * FROM users where email_id = '$email'";


if ($result = mysqli_query($con, $query)) {
    /* fetch associative array */
    while ($row = mysqli_fetch_assoc($result)) {
        $content[] = $row;	// push value to array
    }
}

$data = ["status" => $status, "content" => $content];

header('Content-type: application/json');
echo json_encode($data); // get all products in json format.    
?>
