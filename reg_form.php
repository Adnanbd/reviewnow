<?php

include 'db_connect.php';
include 'path.php';

//================
ob_start();
					
					if(isset($_POST['submit']))
					{
						$fname = $_POST['fname'];
						$lname = $_POST['lname'];
						$email = $_POST['email'];
						$password = $_POST['password'];
						$cpassword = $_POST['cpassword'];
						$date = $_POST['date'];
						$address = $_POST['address'];
						$phone_no = $_POST['phone_no'];
						
					if($fname && $lname && $email && $password &&$cpassword &&$date &&$address && $phone_no)
					{	
						if($password == $cpassword )
						{
							
							$query = "select*from users where email_id = '$email'";
							$query_check = mysqli_query($con,$query);
							
							if($query_check)
							{
							   if(mysqli_num_rows($query_check) > 0)
							   {
								   echo("
								   
								   <script>
								   alert ('Email ALready Used!');
								   
								 
								   window.location.href= '$login_path';
								   
								   </script>
								   
								   ");
							   }else
							   {
								  $insertion = "insert into users values('$email','$password','$fname','$lname','$phone_no','$date','$address')";
								  
								  $run = mysqli_query($con,$insertion);
								  
								  if($run)
								  {
									  echo"
								   
								   <script>
								   alert ('You are successfully registered!!');
								   window.location.href= '$login_path';
								   
								   </script>
								   ";
									  
									  
								  }
								  else
								  {
								   echo"
								   
								   <script>
								   alert ('Database Error!');
								   window.location.href='$reg_path';
								   </script>
								   window.location.href='$reg_path';
								   ";
									  
								  }
								  
								  
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
								   alert ('Password unmatched!');
								   </script>
								   
								
								   ";
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="fname" id="fname" placeholder="First Name"/>
                            
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="lname" id="lname" placeholder="Last Name"/>
                            
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password"/>
                            
                        </div>
						<div class="form-group">
                            <input type="password" class="form-input" name="cpassword" id="cpassword" placeholder="Confirm Password"/>
                            
                        </div>
                      
                         <div class="form-group">
                            <input type="date" class="form-input" name="date" id="date" placeholder="Date of Birth"/>
                        </div>
                         <div class="form-group">
                            <input type="text" class="form-input" name="address" id="address" placeholder="Address"/>
                        </div>
                         <div class="form-group">
                            <input type="number" class="form-input" name="phone_no" id="phone_no" placeholder="Phone No"/>
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="<?php echo $login_path; ?>" class="loginhere-link">Login here</a>
                    </p>
							
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>