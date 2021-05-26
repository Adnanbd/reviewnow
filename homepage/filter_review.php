<?php

session_start(); 
include 'C:\xampp\htdocs\reviewtest\db_connect.php';
include 'C:\xampp\htdocs\reviewtest\path.php';
$user_email = mysqli_query($con, "SELECT * FROM users where email_id = '".$_SESSION["email"]."' ");
 
 $row_one = mysqli_fetch_array($user_email);

 
 



		

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Review IT</title>
    
    <style>
		body{
		background: #466368;
  background: -webkit-linear-gradient(#648880, #293f50);
  background:    -moz-linear-gradient(#648880, #293f50);
  background:         linear-gradient(#648880, #293f50);

		
	}
        
    .conbac {
            background-color: #fff;
            border-radius: 10px;
            margin: 80px auto;
        }
        .conbac1 {
            background-color: #fff;
            height: 50px;
            border-radius: 10px;
        }
        .formStyle {
            background-color: #FFFFFF;
            border: 3px solid #FFD04B;
            border-radius: 5px;
        }
        .heading {
            padding-top: 20px;
            padding-bottom: 30px;
            border: 5px solid #FFD04B;
            border-radius: 5px;
        }
        .tabStyle,
        .tabStyle:focus,
        .tabStyle:active,
        .tabStyle:visited {
            border: 3px solid;
            margin: 5px;
            padding: 30px;
            background-color: linear-gradient(135deg, rgb(195, 39, 2) 0%, rgb(224, 164, 60) 100%);
            margin-left: 185px;
            border-radius: 15px;
            border-color: #fff;
            text-decoration: none;
        }
        .tabStyle:hover,
        .tabStyle a:hover {
            background-color: #AE331F;
            text-decoration: none;
            color: #FFFFFF;
        }
        .tabStyle a {
            color: #000000;
            text-decoration: none;
        }
        .tabStyle a:hover {
            color: #FFFFFF;
            text-decoration: none;
        }
        .welcome {
            color: #fff;
            margin-top: 10px;
            margin-left: 60px;
        }
		
		#content{
		  
   	width: 70%;
   	margin: 100px auto;
   	border: 1px solid #cbcbcb;
	background-color:#fff;
	border-radius:10px;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: auto;
   	padding: 5px;
   	margin: 20px 20px 20px 20px;
   	border: 1px solid #cbcbcb;
	border-radius:10px;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 40%;
   	height: auto;
	padding: 30px;
   }
   
   #reviewContent{
	   float: right;
   	margin: 5px;
   	width: 50%;
   	height: auto;
	padding: 30px;
	   
   };
   }
   
  
   

  
 
    </style>
    
  </head>
  
  
  <body>
   <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light navbar-dark bg-dark ">
		   
		   
              
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
			  
	
                          
                       
             
			  
				

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
			  
			  
               
                <ul class="navbar-nav mx-auto">
				
				
                 
                  <li class="nav-item active">
                    <a class="nav-link" href="<?php echo $home_path; ?>">HOME</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $create_post_path; ?>">Post a Review</a>
                  </li>
				   <li class="nav-item">
                    <a class="nav-link" href="<?php echo $filter_path; ?>">Browse Reviews</a>
                  </li>
                  
				  
				  
				 
                </ul>
				 <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                    <a class="nav-link" href="<?php echo $profile_path; ?>"><?php echo "<strong>Welcome, ".$row_one["first_name"]." ".$row_one["last_name"]."</strong>"; ?></a>
                  </li>
                  
   
				  
				  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $logout_path; ?>">Log Out</a>
                  </li>
        </ul>
				
				
	
              </div>
            </nav>
