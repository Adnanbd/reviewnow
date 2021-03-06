<?php
session_start(); 
include 'C:\xampp\htdocs\reviewnow\db_connect.php';
include 'C:\xampp\htdocs\reviewnow\path.php';

 $result = mysqli_query($con, "SELECT * FROM review ORDER BY review_id DESC");
 
 $user_email = mysqli_query($con, "SELECT * FROM users where email_id = '".$_SESSION["email"]."' ");
 
 $row_one = mysqli_fetch_array($user_email);
 
 $email = $row_one["email_id"];
 

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Review IT</title>
    
    <style>
	
	
	body{
		background: #466368;
  background: -webkit-linear-gradient(#648880, #293f50);
  background:    -moz-linear-gradient(#648880, #293f50);
  background:         linear-gradient(#648880, #293f50);

		
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
   
   
  
   
  
   .welcome{
	   color: #fff;
	   margin-top : 10px;
	   margin-left:60px;
	   
   }
   

  
 
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
			  <form method="post" class="form-inline my-2 my-lg-0"  >
                  <input class="form-control mr-sm-2" type="text" id="input" placeholder="Search" name="key" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="feedSearch">Search</button>
                </form>
            </nav>

   <!-- navbar ends -->
   
   
   
  
<!-- youtube -->
	<div id="content">
	 <?php
  
   
     if(!(isset($_POST['feedSearch']))){
	  
	   while ($row = mysqli_fetch_array($result)) {
		  // like_dislike Work Start =================
		   $TID = $row['review_id'];
		   $btnColor = "btn-default";
		   $btnColor1 = "btn-default";
				
			   $temp= "select clike from like_dislike where user_email = '$email' and post_id = $TID";
				
               $tempLike = mysqli_query($con,$temp);
			   
			  
				if ($tempLike && mysqli_num_rows($tempLike)) {
				
				
					
                           
				$tempLikeX = mysqli_fetch_assoc($tempLike);
				if($tempLikeX['clike'] == 1){
					$btnColor = "btn-success";
				}
				else{
					$btnColor = "btn-default";
				}
				
				}
				else
				{
					//echo "<p>No like Data found</p>";
				}
				$temp2="select cdislike from like_dislike where user_email = '$email' and post_id = $TID";
                $temp2Like = mysqli_query($con,$temp2);
				if ($temp2Like && mysqli_num_rows($temp2Like)) {
				$temp2LikeX = mysqli_fetch_assoc($temp2Like);
				if($temp2LikeX['cdislike'] == 1){
					$btnColor1 = "btn-danger";
				}
				else{
					$btnColor1 = "btn-default";
				}
				}
		   // like_dislike Work End =================				
		   
	  
	  echo "<div id='img_div'>";
      	echo "<img src='review_img/".$row['images']."' >";
		echo "<div id='reviewContent'>";
	
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
		?>
		<div class="col-sm-2 mr25">
					<a href="javascript:void(0)" class="btn <?php echo $btnColor?> btn-lg" id = "likeBtn_<?php echo $row['review_id']?>">
						<span class="glyphicon glyphicon-thumbs-up" onclick="like_update('<?php echo $row['review_id']?>',0)"> Like (<span id="like_loop_<?php echo $row['review_id']?>"><?php echo $row['like_count']?></span>)</span>
					</a>
				</div>
				<div class="col-sm-2">
					<a href="javascript:void(0)" class="btn <?php echo $btnColor1?> btn-lg" id = "dislikeBtn_<?php echo $row['review_id']?>">
					<span class="glyphicon glyphicon-thumbs-down" onclick="dislike_update('<?php echo $row['review_id']?>',0)"> Dislike (<span id="dislike_loop_<?php echo $row['review_id']?>"><?php echo $row['dislike_count']?></span>)</span>
					</a>
				</div>
		<?php
	echo "</div>";
		
    }
	 }
  

if( isset($_POST['feedSearch'])){
		
		$key = $_POST['key'];
		
		$result = mysqli_query($con, "SELECT * FROM review r JOIN food f ON (r.review_id = f.review_id) WHERE f.food_name like '%$key%' ORDER BY r.review_id DESC");
		
		
		if($result){
		
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
$result1 = mysqli_query($con, "SELECT * FROM review r JOIN book f ON (r.review_id = f.review_id) WHERE f.book_name like '%$key%' ORDER BY r.review_id DESC");
		
		if($result1){
		
		while ($rows = mysqli_fetch_array($result1)) {
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
		$result2 = mysqli_query($con, "SELECT * FROM review r JOIN movie f ON (r.review_id = f.review_id) WHERE f.movie_name like '%$key%' ORDER BY r.review_id DESC");
		
		if($result2){
		
		while ($rows = mysqli_fetch_array($result2)) {
        echo "<div id='img_div'>";
      	echo "<img src='review_img/".$rows['images']."' >";
      	echo "<h2><b>".$rows['movie_name']."</b></h2>";
		echo "<p>"."<b>Rating: </b>".$rows['rating']." out of 5"."</p>";
		echo "<p>"."<b>Price: </b>".$rows['price']."<b> Taka</b>"."</p>";
		echo "<p>"."<b>Location: </b>".$rows['detail_location']."</p>";
		echo "<p>"."<b>Description: </b>".$rows['description']."</p>";
      echo "</div>";
		}
		}
	  
	
  
	}

 
  
	
	
	
	
	
	
		
  ?>
  
  	</div>
		

	<script>
		function like_update(id,check){
			
			
			var className = $('#likeBtn_'+id).attr('class');
			if(check == 1){
				if(className == "btn btn-success btn-lg"){
				$('#likeBtn_'+id).attr('class', "btn btn-default btn-lg" );}
				
			}
			else if(className == "btn btn-success btn-lg"){
				$('#likeBtn_'+id).attr('class', "btn btn-default btn-lg" );
				
			}
			else{
				$('#likeBtn_'+id).attr('class', "btn btn-success btn-lg" );
				dislike_update(id,1);
			}
			
			if(check == 1){
				if(className == "btn btn-success btn-lg"){
				jQuery.ajax({
				url:'update_count.php',
				type:'post',
				data:'type=like&id='+id,
				success:function(result){
					var cur_count=jQuery('#like_loop_'+id).html();
					
				
				cur_count--;
					jQuery('#like_loop_'+id).html(cur_count);
			}
			
				}
				);}
			}
			else{
			jQuery.ajax({
				url:'update_count.php',
				type:'post',
				data:'type=like&id='+id,
				success:function(result){
					var cur_count=jQuery('#like_loop_'+id).html();
					var className = $('#likeBtn_'+id).attr('class');
					if(className == "btn btn-success btn-lg"){
				
				cur_count++;
					jQuery('#like_loop_'+id).html(cur_count);
			}
			else{
				
				cur_count--;
					jQuery('#like_loop_'+id).html(cur_count);
			}
					
			
				}
			});}
		}	


		function dislike_update(id,check){
			
			var className = $('#dislikeBtn_'+id).attr('class');
	
			
			if(check == 1){
				if(className == "btn btn-danger btn-lg"){
				$('#dislikeBtn_'+id).attr('class', "btn btn-default btn-lg" );}
				
			}
			else if(className == "btn btn-danger btn-lg"){
				$('#dislikeBtn_'+id).attr('class', "btn btn-default btn-lg" );
			}
			else{
				$('#dislikeBtn_'+id).attr('class', "btn btn-danger btn-lg" );
				like_update(id,1);
			}
			
			if(check == 1){
				if(className == "btn btn-danger btn-lg"){
				jQuery.ajax({
				url:'update_count.php',
				type:'post',
				data:'type=dislike&id='+id,
				success:function(result){
					var cur_count=jQuery('#dislike_loop_'+id).html();
					
				
				cur_count--;
					jQuery('#dislike_loop_'+id).html(cur_count);
			}
			
				}
				);}
			}
			else{
				jQuery.ajax({
				url:'update_count.php',
				type:'post',
				data:'type=dislike&id='+id,
				success:function(result){
					var cur_count=jQuery('#dislike_loop_'+id).html();
					var className = $('#dislikeBtn_'+id).attr('class');
					if(className == "btn btn-danger btn-lg"){
				
				cur_count++;
					jQuery('#dislike_loop_'+id).html(cur_count);
			}
			else{
				
				cur_count--;
					jQuery('#dislike_loop_'+id).html(cur_count);
			}
			
				}
			});
			}
			
		}	
		</script>

      
    

    
    

   
  
  </body>
</html>