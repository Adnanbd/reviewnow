<?php

session_start();

include 'C:\xampp\htdocs\reviewnow\db_connect.php';
include 'C:\xampp\htdocs\reviewnow\path.php';

ob_start();
					
					if(isset($_POST['login']))
					{
						
						$email = $_POST['email'];
						$password = $_POST['pass'];
						
						
					if($email && $password)
					{	
						
							
							$query = "select*from users where email_id = '$email'";
							$query_check = mysqli_query($con,$query);
							
							if($query_check)
							{
							   if(mysqli_num_rows($query_check) > 0)
							   {
								   $query1 = "select*from users where email_id = '$email' and password = '$password' ";
							       $query_check1 = mysqli_query($con,$query1);
								   
								   if(mysqli_num_rows($query_check1) > 0)
									{
										 $_SESSION["email"] = $email;
										 
										 echo"
								   
								   <script>
								   alert ('Successfully Login');
								  
								   window.location.href='$home_path';
								   </script>
								   
								   ";
									}
									else
									{
										 echo"
								   
								   <script>
								   alert ('Wrong Password!');
								  
								   window.location.href='$login_path';
								   </script>
								   
								   ";
								   
									}
								   
				   }
							   else
							   {
								 echo"
								   
								   <script>
								   alert ('Invalid Mail. Create an account.');
								  
								   window.location.href='$reg_path';
								   </script>
								   
								   ";
								  
								  
							   }
							}
							
							else
							{
								  
								
							}

					}
					else
					{
						echo"
								   
								   <script>
								   alert ('Empty Field!');
								   </script>
								   
								
								   ";
					}
					
	
					}
				    ob_end_flush();


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form method="POST" class="login100-form validate-form">
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login">
							Login
						</button>
					</div>

					

					<div class="text-center p-t-136">
						<a class="txt2" href="<?php echo $reg_path; ?>">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
								
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>