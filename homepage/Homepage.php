<?php
session_start(); 
include 'C:\xampp\htdocs\reviewtest\db_connect.php';
include 'C:\xampp\htdocs\reviewtest\path.php';

 $result = mysqli_query($con, "SELECT * FROM review ORDER BY review_id DESC");
 
 $user_email = mysqli_query($con, "SELECT * FROM users where email_id = '".$_SESSION["email"]."' ");
 
 $row_one = mysqli_fetch_array($user_email);
 

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
	<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Review IT</title>
    
    <style>
	
   

  
 
    </style>
    
  </head>
  
  
  <body>
  
  <!-- navbar starts -->
   
   
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

   <!-- navbar ends -->
   
   
   
  
<!-- youtube -->
	<div id="content">
	
									$foodsql = mysqli_query($con, "SELECT * FROM food where review_id ='".$row['review_id']."'");
		 
		    if(mysqli_num_rows($foodsql) < 1)
									{
										$moviesql = mysqli_query($con, "SELECT * FROM movie where review_id = '".$row['review_id']."' ");
										
										 if(mysqli_num_rows($moviesql) < 1)
											{
												$booksql = mysqli_query($con, "SELECT * FROM book where review_id = '".$row['review_id']."' ");
												
												if(mysqli_num_rows($booksql) < 1)
														{
															
														}
														else
														{
															$res = mysqli_fetch_array($booksql);
															echo "<h2><b>".$res['book_name']."</b></h2>";
															
															echo "<p>"."<b>Rating: </b>".$row['rating']." out of 5"."</p>";
															echo "<p>"."<b>Price: </b>".$row['price']."<b> Taka</b>"."</p>";
															echo "<p>"."<b>Location: </b>".$row['detail_location']."</p>";
															echo "<p>"."<b>Description: </b>".$row['description']."</p>";
														  echo "</div>";
															
														}
												
												
												
											}
									else
											{
												$res = mysqli_fetch_array($moviesql);
												echo "<h2><b>".$res['movie_name']."</b></h2>";
												echo "<p>"."<b>Rating: </b>".$row['rating']." out of 5"."</p>";
															
															
															echo "<p>"."<b>Description: </b>".$row['description']."</p>";
														  echo "</div>";
												
											}
									}
									else
									{
										$res = mysqli_fetch_array($foodsql);
										echo "<h2><b>".$res['food_name']."</b></h2>";
										
										echo "<p>"."<b>Rating: </b>".$row['rating']." out of 5"."</p>";
										echo "<p>"."<b>Price: </b>".$row['price']."<b> Taka</b>"."</p>";
										echo "<p>"."<b>Location: </b>".$row['detail_location']."</p>";
										echo "<p>"."<b>Description: </b>".$row['description']."</p>";
										
										
										
			
										
									  echo "</div>";
									  
									  
									   
									  
									}
  
  	</div>
		



      
    

    
    

   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="scripts.js"></script>
  </body>
</html>