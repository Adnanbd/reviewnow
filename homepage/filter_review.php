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
			
    <div class="container conbac">
        
        <!--header row-->
        
        <div class="row">
		
		     

			



            
            <div class="col-md-2"></div>
            
            <!--main body-->
            <div class="col-md-12">
                
                <center><h2 class="heading">FILTER REVIEW</h2></center>
				
				
				
				<div class="col-sm-12 product-tabs">
                    <ul class="nav nav-tabs">
                        <li class="active tabStyle"><a href="#tab1" data-toggle="tab">Food</a></li>
                        <li class="tabStyle"><a href="#tab2" data-toggle="tab">Book</a></li>
                        <li class="tabStyle"><a href="#tab3" data-toggle="tab">Movie</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                            <form action="" method="post" enctype="multipart/form-data">
                                <fieldset class="form-control formStyle">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label class="form-group" for="select"><strong>Food Category</strong></label>
                                        </div>
                                        <div class="col-md-9">
                                            <select class="form-control" name="foodCategory" required>
                                                <option class="form-control" value="">Choose Category</option>
                                                <option value="Biriyani">Biriyani</option>
                                                <option value="Burger">Burger</option>
                                                <option value="Buffet">Buffet</option>
                                                <option value="Coffee">Coffee</option>
                                                <option value="Chicken">Chicken</option>
                                                <option value="Doi">Doi</option>
                                                <option value="Fried Rice">Fried Rice</option>
                                                <option value="French fries">French fries</option>
                                                <option value="Fuchka/Velpuri">Fuchka/Velpuri</option>
                                                <option value="Ice Cream">Ice Cream</option>
                                                <option value="Juice">Juice</option>
                                                <option value="Kala Vuna">Kala Vuna</option>
                                                <option value="Kacchi">Kacchi</option>
                                                <option value="Mishti">Mishti</option>
                                                <option value="Noodles">Noodles</option>
                                                <option value="Pizza">Pizza</option>
                                                <option value="Pasta">Pasta</option>
                                                <option value="Plater">Plater</option>
                                                <option value="Rice">Rice</option>
                                                <option value="Steak">Steak</option>
                                                <option value="Tea">Tea</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                      
                    </div>
                    
                    
                    <div class="row">
                         <div class="col-md-3">
                             
                             <label class="form-group" for="select"><strong>Select Location</strong></label>
                             
                         </div>
                         
                         <div class="col-md-3">
                             
                             <select class="form-control" id="select" name="foodLocation" >
                                <option class="form-control" value="">Select Area</option>

                                <optgroup label="Dhaka">
                                  
                                
                                 
                                  
								  <option value="Banani">Banani</option>
                                                    <option value="Banglamotor">Banglamotor</option>
                                                    <option value="Bangshal">Bangshal</option>
                                                    <option value="Baridhara">Baridhara</option>
                                                    <option value="Badda">Badda</option>
                                                    <option value="Basabo">Basabo</option>
                                                    <option value="Basundhara">Basundhara</option>
                                                    <option value="Cantonment">Cantonment</option>
                                                    <option value="Chaukbazar">Chaukbazar</option>
                                                    <option value="Demra">Demra</option>
                                                    <option value="Dhamrai">Dhamrai</option>
                                                    <option value="Dhanmondi">Dhanmondi</option>
                                                    <option value="Dohar">Dohar</option>
                                                    <option value="Elephant Road">Elephant Road</option>
                                                    <option value="Farmgate">Farmgate</option>
                                                    <option value="Gulshan">Gulshan</option>
                                                    <option value="Hazaribagh">Hazaribagh</option>
                                                    <option value="Jatrabari">Jatrabari</option>
                                                    <option value="Kafrul">Kafrul</option>
                                                    <option value="Kamrangirchar">Kamrangirchar</option>
                                                    <option value="Keraniganj">Keraniganj</option>
                                                    <option value="Khilgaon">Khilgaon</option>
                                                    <option value="Khilkhet">Khilkhet</option>
                                                    <option value="Kotwali">Kotwali</option>
                                                    <option value="Lalbag">Lalbag</option>
                                                    <option value="Malibag">Malibag</option>
                                                    <option value="Mirpur">Mirpur</option>
                                                    <option value="Mogbazar">Mogbazar</option>
                                                    <option value="Mohakhali">Mohakhali</option>
                                                    <option value="Motijheel">Motijheel</option>
                                                    <option value="Nawabganj">Nawabganj</option>
                                                    <option value="New Market">New Market</option>
                                                    <option value="Paltan">Paltan</option>
                                                    <option value="Purbachal">Purbachal</option>
                                                    <option value="Ramna">Ramna</option>
                                                    <option value="Rampura">Rampura</option>
                                                    <option value="Savar">Savar</option>
                                                    <option value="Sutrapur">Sutrapur</option>
                                                    <option value="Tejgaon">Tejgaon</option>
                                                    <option value="Tongi">Tongi</option>
                                                    <option value="Uttara">Uttara</option>
                                                    <option value="Wari">Wari</option>
								  
                                </optgroup>

                                <optgroup label="Chittagong">
                                  <option value="Chittagong">Chittagong</option>
                                
                                </optgroup>

                                <optgroup label="Rangpur">
                                  <option value="Rangpur">Rangpur</option>
                                  
                                </optgroup>

                                  <optgroup label="Sylhet">
                                  <option value="Sylhet">Sylhet</option>
                                
                                </optgroup>

                                <optgroup label="Barishal">
                                  <option value="Barishal">Barishal</option>
                                  
                                </optgroup>

                                <optgroup label="Rajshahi">
                                  <option value="Rajshahi">Rajshahi</option>
                                 
                                </optgroup>

                              </select>
                             
                         </div>
						 
						
                       
                      
                    </div>
					
					 <div class="row">
                        
                         <div class="col-md-3">
                             
                             <label class="form-group" for="input"><strong>Rating</strong></label>
                             
                         </div>
                         
                         <div class="col-md-3">
                             
                             <select class="form-control" id="select" name="foodRating" required>
                                 
                                 <option value="0">Ascending</option>
                                  <option value="1">Descending</option>
                                 
                             
                             </select>
                             
                         </div>
						 
						  <div class="col-md-3">
						 
						 <form method="post" class="form-inline my-2 my-lg-0"  >
                  
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="feedSearch">Filter</button>
                        </form>
                           </div>
                      
                    </div>
					
					
                
                    
                    
                
                    
            
                    
                  
                    
                  
                    
                 

                </fieldset>
			</form>
                    </div>
                    <div class="tab-pane" id="tab2">
                        
						
						
						<form action="" method="post" enctype="multipart/form-data">
                
                <fieldset class="form-control formStyle" >

                    
                    
                     <div class="row">
                         <div class="col-md-3">
                             
                             <label class="form-group" for="select"><strong>Select Category</strong></label>
                             
                         </div>
                         
                         <div class="col-md-9">
                             
                             <select class="form-control" name="bookCategory" required>
                                <option class="form-control" value="">Choose Category</option>
					<option class="form-control" value="">Choose Category</option>
                                                <option value="Action and adventure">Action and adventure</option>
                                                <option value="Childrens">Children's</option>
                                                <option value="Comic">Comic</option>
                                                <option value="Crime">Crime</option>
                                                <option value="Drama">Drama</option>
                                                <option value="Fairytale">Fairytale</option>
                                                <option value="Fantasy">Fantasy</option>
                                                <option value="Historical">Historical</option>
                                                <option value="Horror">Horror</option>
                                                <option value="Islamic">Islamic</option>
                                                <option value="Mystery">Mystery</option>
                                                <option value="Paranormal">Paranormal </option>
                                                <option value="Poetry">Poetry</option>
                                                <option value="Romance">Romance</option>
                                                <option value="Science fiction">Science fiction</option>
                                                <option value="Short story">Short story</option>
                                                <option value="Suspense">Suspense</option>
                                                <option value="Thriller">Thriller</option>
                                                <option value="Travel">Travel</option>
                                                <option value="Others">Others</option>
                                 
								 
                                 
                                 
                                  
                                 
                                  
                                  
								
                                 
                                  
                              </select>
                             
                         </div>
                      
                    </div>
                    
                    
                    <div class="row">
                         <div class="col-md-3">
                             
                             <label class="form-group" for="select"><strong>Select Location</strong></label>
                             
                         </div>
                         
                         <div class="col-md-3">
                             
                             <select class="form-control" id="select" name="bookLocation" >
                                <option class="form-control" value="">Select Area</option>

                                <optgroup label="Dhaka">
                                  
                                
                                  <option value="Banani">Banani</option>
                                                    <option value="Banglamotor">Banglamotor</option>
                                                    <option value="Bangshal">Bangshal</option>
                                                    <option value="Baridhara">Baridhara</option>
                                                    <option value="Badda">Badda</option>
                                                    <option value="Basabo">Basabo</option>
                                                    <option value="Basundhara">Basundhara</option>
                                                    <option value="Cantonment">Cantonment</option>
                                                    <option value="Chaukbazar">Chaukbazar</option>
                                                    <option value="Demra">Demra</option>
                                                    <option value="Dhamrai">Dhamrai</option>
                                                    <option value="Dhanmondi">Dhanmondi</option>
                                                    <option value="Dohar">Dohar</option>
                                                    <option value="Elephant Road">Elephant Road</option>
                                                    <option value="Farmgate">Farmgate</option>
                                                    <option value="Gulshan">Gulshan</option>
                                                    <option value="Hazaribagh">Hazaribagh</option>
                                                    <option value="Jatrabari">Jatrabari</option>
                                                    <option value="Kafrul">Kafrul</option>
                                                    <option value="Kamrangirchar">Kamrangirchar</option>
                                                    <option value="Keraniganj">Keraniganj</option>
                                                    <option value="Khilgaon">Khilgaon</option>
                                                    <option value="Khilkhet">Khilkhet</option>
                                                    <option value="Kotwali">Kotwali</option>
                                                    <option value="Lalbag">Lalbag</option>
                                                    <option value="Malibag">Malibag</option>
                                                    <option value="Mirpur">Mirpur</option>
                                                    <option value="Mogbazar">Mogbazar</option>
                                                    <option value="Mohakhali">Mohakhali</option>
                                                    <option value="Motijheel">Motijheel</option>
                                                    <option value="Nawabganj">Nawabganj</option>
                                                    <option value="New Market">New Market</option>
                                                    <option value="Paltan">Paltan</option>
                                                    <option value="Purbachal">Purbachal</option>
                                                    <option value="Ramna">Ramna</option>
                                                    <option value="Rampura">Rampura</option>
                                                    <option value="Savar">Savar</option>
                                                    <option value="Sutrapur">Sutrapur</option>
                                                    <option value="Tejgaon">Tejgaon</option>
                                                    <option value="Tongi">Tongi</option>
                                                    <option value="Uttara">Uttara</option>
                                                    <option value="Wari">Wari</option>
								  
                                </optgroup>

                                <optgroup label="Chittagong">
                                  <option value="Chittagong">Chittagong</option>
                                
                                </optgroup>

                                <optgroup label="Rangpur">
                                  <option value="Rangpur">Rangpur</option>
                                  
                                </optgroup>

                                  <optgroup label="Sylhet">
                                  <option value="Sylhet">Sylhet</option>
                                
                                </optgroup>

                                <optgroup label="Barishal">
                                  <option value="Barishal">Barishal</option>
                                  
                                </optgroup>

                                <optgroup label="Rajshahi">
                                  <option value="Rajshahi">Rajshahi</option>
                                 
                                </optgroup>

                              </select>
                             
                         </div>
						 
						
                       
                      
                    </div>
					
					 <div class="row">
                        
                         <div class="col-md-3">
                             
                             <label class="form-group" for="input"><strong>Rating</strong></label>
                             
                         </div>
                         
                         <div class="col-md-3">
                             
                             <select class="form-control" id="select" name="bookRating" required>
                                 
                                 <option value="0">Ascending</option>
                                  <option value="1">Descending</option>
                                 
                             
                             </select>
                             
                         </div>
						 
						  <div class="col-md-3">
						 
						 <form method="post" class="form-inline my-2 my-lg-0"  >
                  
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="bookSearch">Filter</button>
                        </form>
                           </div>
                      
                    </div>
					
					
					
					
                
                    
                    
                
                    
            
                    
                  
                    
                  
                    
                 

                </fieldset>
				
		         </form>
						
						
						
						
                    </div>
                    <div class="tab-pane" id="tab3">
                        
						
						<form action="" method="post" enctype="multipart/form-data">
                
                <fieldset class="form-control formStyle" >

                    
                    
                     <div class="row">
                         <div class="col-md-3">
                             
                             <label class="form-group" for="select"><strong>Select Category</strong></label>
                             
                         </div>
                         
                         <div class="col-md-9">
                             
                             <select class="form-control" name="movieCategory" required>
                               
								 <option class="form-control" value="">Choose Category</option>
                                                <option value="Action">Action</option>
                                                <option value="Adventure">Adventure</option>
                                                <option value="Comedy">Comedy</option>
                                                <option value="Crime">Crime</option>
                                                <option value="Drama">Drama</option>
                                                <option value="Fantasy">Fantasy</option>
                                                <option value="Historical">Historical</option>
                                                <option value="Horror">Horror</option>
                                                <option value="Mystery">Mystery</option>
                                                <option value="Magical realism">Magical realism</option>
                                                <option value="Paranormal">Paranormal </option>
                                                <option value="Philosophical">Philosophical</option>
                                                <option value="Political">Political</option>
                                                <option value="Romance">Romance</option>
                                                <option value="Science fiction">Science fiction</option>
                                                <option value="Short story">Short story</option>
                                                <option value="Suspense">Suspense</option>
                                                <option value="Thriller">Thriller</option>
                                                <option value="Travel">Travel</option>
                                                <option value="Others">Others</option>
                                 
								 
                                 
                                 
             </select>
                             
                         </div>
                      
                    </div>
                    
                    
                    <div class="row">
					
					     <div class="col-md-3">
                             
                             <label class="form-group" for="input"><strong>Rating</strong></label>
                             
                         </div>
						     <div class="col-md-3">
                             
                             <select class="form-control" id="select" name="movieRating" required>
                                 
                                 <option value="0">Ascending</option>
                                  <option value="1">Descending</option>
                                 
                             
                             </select>
                             
                         </div>
		 <div class="col-md-2">
						 
						 <form method="post" class="form-inline my-2 my-lg-0"  >
                  
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="movieSearch">Filter</button>
                        </form>
                           </div>
                       
                      
                    </div>
					
					
                
                    
                    
                
                    
            
                    
                  
                    
                  
                    
                 

                </fieldset>
                
            </form>
						
						
						
						
                    </div>
                </div>
                <div class="tab-control">
                    <a class="previous-button" role="button"><i class="fa fa-angle-left fa-3x fa-fw"></i></a>
                    <a class="next-button" role="button"><i class="fa fa-angle-right fa-3x fa-fw"></i></a>
                </div>
            </div>
				
				
				
				
				
				
				
				
				
                
                
                
            
			
			
           



                
            
                
                
            </div>
            <div class="col-md-2"></div>
             
        </div>
        
        
        
    </div>	
                         
                                 
                                  
                                  
								
                                 
                                  
<div id="content">
  <?php
  
  
  



 
  
	
	
	
	
	
	
	if( isset($_POST['feedSearch']) )
	{
		
		
		
		$food_category = $_POST['foodCategory'];
		$location = $_POST['foodLocation'];
		$myrating = $_POST['foodRating'];
		
		if($food_category && $location)
			
			{
				
					
				 
				 if($myrating == 0)
			{
			$result = mysqli_query($con, "SELECT * FROM review r JOIN food f ON (r.review_id = f.review_id) WHERE (r.location = '$location' AND f.food_category = '$food_category') ORDER BY r.rating ASC");
			}
		   else if($myrating == 1)
			{
			$result = mysqli_query($con, "SELECT * FROM review r JOIN food f ON (r.review_id = f.review_id) WHERE (r.location = '$location' AND f.food_category = '$food_category') ORDER BY r.rating DESC");		
			}
				
			}
		else if($food_category)
		{
			if($myrating == 0)
			{
			$result = mysqli_query($con, "SELECT * FROM review r JOIN food f ON (r.review_id = f.review_id) WHERE (f.food_category = '$food_category') ORDER BY r.rating ASC");
			}
		   else if($myrating == 1)
			{
			$result = mysqli_query($con, "SELECT * FROM review r JOIN food f ON (r.review_id = f.review_id) WHERE (f.food_category = '$food_category') ORDER BY r.rating DESC");		
			}
			
			
		}
		else if($location)
		{
			if($myrating == 0)
			{
			$result = mysqli_query($con, "SELECT * FROM review r JOIN food f ON (r.review_id = f.review_id) WHERE (r.location = '$location') ORDER BY r.rating ASC");
			}
		   else if($myrating == 1)
			{
			$result = mysqli_query($con, "SELECT * FROM review r JOIN food f ON (r.review_id = f.review_id) WHERE (r.location = '$location') ORDER BY r.rating DESC");		
			}
		}
				
		
		
		
		while ($rows = mysqli_fetch_array($result)) {
        echo "<div id='img_div'>";
      	echo "<img src='review_img/".$rows['images']."' >";
      	echo "<h2><b>".$rows['food_name']."</b></h2>";
		echo "<p>"."<b>Rating: </b>".$rows['rating']." out of 5"."</p>";
		echo "<p>"."<b>Price: </b>".$rows['price']."<b> Taka</b>"."</p>";
		echo "<p>"."<b>Location: </b>".$rows['detail_location']."</p>";
		echo "<p>"."<b>Description: </b>".$rows['description']."</p>";
      echo "</div>";
													}
	}
	if( isset($_POST['bookSearch']) )
	{
		
		
		
		$book_category = $_POST['bookCategory'];
		$location = $_POST['bookLocation'];
		$myrating = $_POST['bookRating'];
		
		if($book_category && $location)
			
			{
				$result = mysqli_query($con, "SELECT * FROM review r JOIN book f ON (r.review_id = f.review_id) WHERE (r.location = '$location' AND f.book_category = '$book_category') ORDER BY r.review_id DESC");
			
			
			
			if($myrating == 0)
			{

			$result = mysqli_query($con, "SELECT * FROM review r JOIN book f ON (r.review_id = f.review_id) WHERE (r.location = '$location' AND f.book_category = '$book_category') ORDER BY r.rating ASC");
			}
		   else if($myrating == 1)
			{
			$result = mysqli_query($con, "SELECT * FROM review r JOIN book f ON (r.review_id = f.review_id) WHERE (r.location = '$location' AND f.book_category = '$book_category') ORDER BY r.rating DESC");		
			}
			
			}
			else if($book_category)
		{
			
		    
			if($myrating == 0)
			{

			$result = mysqli_query($con, "SELECT * FROM review r JOIN book f ON (r.review_id = f.review_id) WHERE (f.book_category = '$book_category') ORDER BY r.rating ASC");
			}
		   else if($myrating == 1)
			{
			$result = mysqli_query($con, "SELECT * FROM review r JOIN book f ON (r.review_id = f.review_id) WHERE (f.book_category = '$book_category') ORDER BY r.rating DESC");		
			}
		
		}
		else if($location)
		{
		
		
			if($myrating == 0)
			{

			$result = mysqli_query($con, "SELECT * FROM review r JOIN book f ON (r.review_id = f.review_id) WHERE (r.location = '$location') ORDER BY r.rating ASC");
			}
		   else if($myrating == 1)
			{
			$result = mysqli_query($con, "SELECT * FROM review r JOIN book f ON (r.review_id = f.review_id) WHERE (r.location = '$location') ORDER BY r.rating DESC");		
			}
		}
				
		while ($rows = mysqli_fetch_array($result)) {
        echo "<div id='img_div'>";
      	echo "<img src='review_img/".$rows['images']."' >";
      	echo "<h2><b>".$rows['book_name']."</b></h2>";
		echo "<p>"."<b>Rating: </b>".$rows['rating']." out of 5"."</p>";
		echo "<p>"."<b>Price: </b>".$rows['price']."<b> Taka</b>"."</p>";
		echo "<p>"."<b>Location: </b>".$rows['detail_location']."</p>";
		echo "<p>"."<b>Description: </b>".$rows['description']."</p>";
      echo "</div>";
													}
	}
                