<?php
session_start();
include 'C:\xampp\htdocs\reviewtest\db_connect.php';
include 'C:\xampp\htdocs\reviewtest\path.php';
$tempid = $_GET["id"];
$user_email = mysqli_query($con, "SELECT * FROM users where email_id = '" . $_SESSION["email"] . "' ");

$row_one = mysqli_fetch_array($user_email);


if (isset($_POST['foodInsert'])) {
    //getting form input data
    $food_name = $_POST['foodName'];
    $food_category = $_POST['foodCategory'];
    $location = $_POST['foodLocation'];
    $detail_location = $_POST['foodDetailLocation'];
    $description = $_POST['foodDescription'];
    $price = $_POST['foodPrice'];
    $rating = $_POST['foodRating'];
    $msg = "";
    $image = $_FILES['image']['name'];
    $target = "review_img/" . basename($image);
    //UPDATE MyGuests SET lastname='Doe' WHERE id=2
    if ($_FILES['image']['size'] == 0) {

        $sql = "UPDATE `review` SET `rating` = '$rating', `price` = '$price', `description`='$description', `location` = '$location',`detail_location` = '$detail_location' WHERE review_id = $tempid";
    } else {
        $sql = "UPDATE `review` SET `rating` = '$rating', `price` = '$price', `description`='$description', `location` = '$location',`detail_location` = '$detail_location',`images`='$image' WHERE review_id = $tempid";
    }

    mysqli_query($con, $sql);
    $query2 = "UPDATE `food` SET `food_name` = '$food_name', `food_category` = '$food_category' WHERE review_id = $tempid ";
    $query2_run = mysqli_query($con, $query2);
    if ($_FILES['image']['size'] == 0) {
    } else {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        } else {
            $msg = "Failed to upload image";
        }
    }
    if ($query2_run) {
        echo ' <script type="text/javascript"> alert("Thanks For Posting a Review!") </script> ';
    } else {
        echo ' <script type="text/javascript"> alert("Review Not Posted!") </script> ';
    }
}
if (isset($_POST['bookInsert'])) {
    //getting form input data
    $book_name = $_POST['bookName'];
    $book_category = $_POST['bookCategory'];
    $booklocation = $_POST['bookLocation'];
    $bookdetail_location = $_POST['bookDetailLocation'];
    $bookdescription = $_POST['bookDescription'];
    $bookprice = $_POST['bookPrice'];
    $bookrating = $_POST['bookRating'];
    $msg = "";
    $bookimage = $_FILES['bookimage']['name'];
    $booktarget = "review_img/" . basename($bookimage);
    if ($_FILES['bookimage']['size'] == 0) {

        $sql = "UPDATE `review` SET `rating` = '$bookrating', `price` = '$bookprice', `description`='$bookdescription', `location` = '$booklocation',`detail_location` = '$bookdetail_location' WHERE review_id = $tempid";
    } else {
        $sql = "UPDATE `review` SET `rating` = '$bookrating', `price` = '$bookprice', `description`='$bookdescription', `location` = '$booklocation',`detail_location` = '$bookdetail_location',`images`='$bookimage' WHERE review_id = $tempid";
    }
    mysqli_query($con, $sql);

    $query2 = "UPDATE `book` SET `book_name` = '$book_name', `book_category` = '$book_category' WHERE review_id = $tempid ";
    $query2_run = mysqli_query($con, $query2);
    if ($_FILES['bookimage']['size'] == 0) {
    } else {
        if (move_uploaded_file($_FILES['bookimage']['tmp_name'], $booktarget)) {
            $msg = "Image uploaded successfully";
        } else {
            $msg = "Failed to upload image";
        }
    }
    if ($query2_run) {
        echo ' <script type="text/javascript"> alert("Thanks For Posting a Review!") </script> ';
    } else {
        echo ' <script type="text/javascript"> alert("Review Not Posted!") </script> ';
    }
}
if (isset($_POST['movieInsert'])) {
    //getting form input data
    $movie_name = $_POST['movieName'];
    $movie_category = $_POST['movieCategory'];
    $moviedescription = $_POST['movieDescription'];
    $movierating = $_POST['movieRating'];
    $movieimage = $_FILES['movieimage']['name'];
    $movietarget = "review_img/" . basename($movieimage);
    if ($_FILES['movieimage']['size'] == 0) {

        $sql = "UPDATE `review` SET `rating` = '$movierating',`description`='$moviedescription' WHERE review_id = $tempid";
    } else {
        $sql = "UPDATE `review` SET `rating` = '$movierating',`description`='$moviedescription',`images`='$movieimage' WHERE review_id = $tempid";
    }
    mysqli_query($con, $sql);



    $query2 = "UPDATE `movie` SET `movie_name` = '$movie_name', `movie_category` = '$movie_category' WHERE review_id = $tempid";
    $query2_run = mysqli_query($con, $query2);
    if ($_FILES['movieimage']['size'] == 0) {
    } else {
        if (move_uploaded_file($_FILES['movieimage']['tmp_name'], $movietarget)) {
        } else {
        }
    }
    if ($query2_run) {
        echo ' <script type="text/javascript"> alert("Thanks For Posting a Review!") </script> ';
    } else {
        echo ' <script type="text/javascript"> alert("Review Not Posted!") </script> ';
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <title>Write a Review</title>
    <style>
        body {
            background: linear-gradient(242deg, rgba(195, 195, 195, 0.02) 0%, rgba(195, 195, 195, 0.02) 16.667%, rgba(91, 91, 91, 0.02) 16.667%, rgba(91, 91, 91, 0.02) 33.334%, rgba(230, 230, 230, 0.02) 33.334%, rgba(230, 230, 230, 0.02) 50.001000000000005%, rgba(18, 18, 18, 0.02) 50.001%, rgba(18, 18, 18, 0.02) 66.668%, rgba(163, 163, 163, 0.02) 66.668%, rgba(163, 163, 163, 0.02) 83.33500000000001%, rgba(140, 140, 140, 0.02) 83.335%, rgba(140, 140, 140, 0.02) 100.002%), linear-gradient(152deg, rgba(151, 151, 151, 0.02) 0%, rgba(151, 151, 151, 0.02) 16.667%, rgba(11, 11, 11, 0.02) 16.667%, rgba(11, 11, 11, 0.02) 33.334%, rgba(162, 162, 162, 0.02) 33.334%, rgba(162, 162, 162, 0.02) 50.001000000000005%, rgba(171, 171, 171, 0.02) 50.001%, rgba(171, 171, 171, 0.02) 66.668%, rgba(119, 119, 119, 0.02) 66.668%, rgba(119, 119, 119, 0.02) 83.33500000000001%, rgba(106, 106, 106, 0.02) 83.335%, rgba(106, 106, 106, 0.02) 100.002%), linear-gradient(11deg, rgba(245, 245, 245, 0.01) 0%, rgba(245, 245, 245, 0.01) 16.667%, rgba(23, 23, 23, 0.01) 16.667%, rgba(23, 23, 23, 0.01) 33.334%, rgba(96, 96, 96, 0.01) 33.334%, rgba(96, 96, 96, 0.01) 50.001000000000005%, rgba(140, 140, 140, 0.01) 50.001%, rgba(140, 140, 140, 0.01) 66.668%, rgba(120, 120, 120, 0.01) 66.668%, rgba(120, 120, 120, 0.01) 83.33500000000001%, rgba(48, 48, 48, 0.01) 83.335%, rgba(48, 48, 48, 0.01) 100.002%), linear-gradient(27deg, rgba(106, 106, 106, 0.03) 0%, rgba(106, 106, 106, 0.03) 14.286%, rgba(203, 203, 203, 0.03) 14.286%, rgba(203, 203, 203, 0.03) 28.572%, rgba(54, 54, 54, 0.03) 28.572%, rgba(54, 54, 54, 0.03) 42.858%, rgba(75, 75, 75, 0.03) 42.858%, rgba(75, 75, 75, 0.03) 57.144%, rgba(216, 216, 216, 0.03) 57.144%, rgba(216, 216, 216, 0.03) 71.42999999999999%, rgba(39, 39, 39, 0.03) 71.43%, rgba(39, 39, 39, 0.03) 85.71600000000001%, rgba(246, 246, 246, 0.03) 85.716%, rgba(246, 246, 246, 0.03) 100.002%), linear-gradient(317deg, rgba(215, 215, 215, 0.01) 0%, rgba(215, 215, 215, 0.01) 16.667%, rgba(72, 72, 72, 0.01) 16.667%, rgba(72, 72, 72, 0.01) 33.334%, rgba(253, 253, 253, 0.01) 33.334%, rgba(253, 253, 253, 0.01) 50.001000000000005%, rgba(4, 4, 4, 0.01) 50.001%, rgba(4, 4, 4, 0.01) 66.668%, rgba(183, 183, 183, 0.01) 66.668%, rgba(183, 183, 183, 0.01) 83.33500000000001%, rgba(17, 17, 17, 0.01) 83.335%, rgba(17, 17, 17, 0.01) 100.002%), linear-gradient(128deg, rgba(119, 119, 119, 0.03) 0%, rgba(119, 119, 119, 0.03) 12.5%, rgba(91, 91, 91, 0.03) 12.5%, rgba(91, 91, 91, 0.03) 25%, rgba(45, 45, 45, 0.03) 25%, rgba(45, 45, 45, 0.03) 37.5%, rgba(182, 182, 182, 0.03) 37.5%, rgba(182, 182, 182, 0.03) 50%, rgba(243, 243, 243, 0.03) 50%, rgba(243, 243, 243, 0.03) 62.5%, rgba(162, 162, 162, 0.03) 62.5%, rgba(162, 162, 162, 0.03) 75%, rgba(190, 190, 190, 0.03) 75%, rgba(190, 190, 190, 0.03) 87.5%, rgba(148, 148, 148, 0.03) 87.5%, rgba(148, 148, 148, 0.03) 100%), linear-gradient(90deg, rgb(185, 139, 80), rgb(176, 26, 6));
            border-radius: 10px;
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
                    <a class="nav-link" href="<?php echo $profile_path; ?>"><?php echo "<strong>Welcome, " . $row_one["first_name"] . " " . $row_one["last_name"] . "</strong>"; ?></a>
                </li>



                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $profile_path; ?>">Log Out</a>
                </li>
            </ul>



        </div>
    </nav>

    <!-- navbar ends -->
    <div class="container conbac">
        <!--header row-->
        <div class="row conbac1">
            <div class="col-md-12 ">
            </div>
        </div>
        <div class="row">
            <!--main body-->
            <div class="col-md-12">
                <center>
                    <h2 class="heading">Edit Your Post</h2>
                </center>
              else {
                    $res = mysqli_fetch_array($foodsql);
                    $rsql = mysqli_query($con, "SELECT * FROM review where review_id =$tempid");
                    $res2 = mysqli_fetch_array($rsql);




                    $string =  '<div class="tab-pane active" id="tab1">' .
                        '                            <form action="" method="post" enctype="multipart/form-data">' .
                        '                                <fieldset class="form-control formStyle">' .
                        '                                    <div class="row">' .
                        '                                        <div class="col-md-3">' .
                        '                                            <label class="form-group" for="input"><strong>Food Name</strong></label>' .
                        '                                        </div>' .
                        '                                        <div class="col-md-9">' .
                        '                                            <input class="form-control" type="text" id="input" name="foodName" value="' . $res['food_name'] . '" placeholder="Name of Food item..." required>' .
                        '                                        </div>' .
                        '                                    </div>' .
                        '                                    <div class="row">' .
                        '                                        <div class="col-md-3">' .
                        '                                            <label class="form-group" for="select" ><strong>Food Category</strong></label>' .
                        '                                        </div>' .
                        '                                        <div class="col-md-9">' .
                        '                                            <select class="form-control" name="foodCategory" required>' .
                        '                                                <option class="form-control" value="' . $res['food_category'] . '">' . $res['food_category'] . '</option>' .
                        '                                                <option value="Biriyani">Biriyani</option>' .
                        '                                                <option value="Burger">Burger</option>' .
                        '                                                <option value="Buffet">Buffet</option>' .
                        '                                                <option value="Coffee">Coffee</option>' .
                        '                                                <option value="Chicken">Chicken</option>' .
                        '                                                <option value="Doi">Doi</option>' .
                        '                                                <option value="Fried Rice">Fried Rice</option>' .
                        '                                                <option value="French fries">French fries</option>' .
                        '                                                <option value="Fuchka/Velpuri">Fuchka/Velpuri</option>' .
                        '                                                <option value="Ice Cream">Ice Cream</option>' .
                        '                                                <option value="Juice">Juice</option>' .
                        '                                                <option value="Kala Vuna">Kala Vuna</option>' .
                        '                                                <option value="Kacchi">Kacchi</option>' .
                        '                                                <option value="Mishti">Mishti</option>' .
                        '                                                <option value="Noodles">Noodles</option>' .
                        '                                                <option value="Pizza">Pizza</option>' .
                        '                                                <option value="Pasta">Pasta</option>' .
                        '                                                <option value="Plater">Plater</option>' .
                        '                                                <option value="Rice">Rice</option>' .
                        '                                                <option value="Steak">Steak</option>' .
                        '                                                <option value="Tea">Tea</option>' .
                        '                                                <option value="Others">Others</option>' .
                        '                                            </select>' .
                        '                                        </div>' .
                        '                                    </div>' .
                        '                                    <div class="row">' .
                        '                                        <div class="col-md-3">' .
                        '                                            <label class="form-group" for="select"><strong>Location</strong></label>' .
                        '                                        </div>' .
                        '                                        <div class="col-md-3">' .
                        '                                            <select class="form-control" id="select" name="foodLocation" required>' .
                        '                                                <option class="form-control" value="' . $res2['location'] . '">' . $res2['location'] . '</option>' .
                        '                                                <optgroup label="Dhaka">' .
                        '                                                    <option value="Banani">Banani</option>' .
                        '                                                    <option value="Banglamotor">Banglamotor</option>' .
                        '                                                    <option value="Bangshal">Bangshal</option>' .
                        '                                                    <option value="Baridhara">Baridhara</option>' .
                        '                                                    <option value="Badda">Badda</option>' .
                        '                                                    <option value="Basabo">Basabo</option>' .
                        '                                                    <option value="Basundhara">Basundhara</option>' .
                        '                                                    <option value="Cantonment">Cantonment</option>' .
                        '                                                    <option value="Chaukbazar">Chaukbazar</option>' .
                        '                                                    <option value="Demra">Demra</option>' .
                        '                                                    <option value="Dhamrai">Dhamrai</option>' .
                        '                                                    <option value="Dhanmondi">Dhanmondi</option>' .
                        '                                                    <option value="Dohar">Dohar</option>' .
                        '                                                    <option value="Elephant Road">Elephant Road</option>' .
                        '                                                    <option value="Farmgate">Farmgate</option>' .
                        '                                                    <option value="Gulshan">Gulshan</option>' .
                        '                                                    <option value="Hazaribagh">Hazaribagh</option>' .
                        '                                                    <option value="Jatrabari">Jatrabari</option>' .
                        '                                                    <option value="Kafrul">Kafrul</option>' .
                        '                                                    <option value="Kamrangirchar">Kamrangirchar</option>' .
                        '                                                    <option value="Keraniganj">Keraniganj</option>' .
                        '                                                    <option value="Khilgaon">Khilgaon</option>' .
                        '                                                    <option value="Khilkhet">Khilkhet</option>' .
                        '                                                    <option value="Kotwali">Kotwali</option>' .
                        '                                                    <option value="Lalbag">Lalbag</option>' .
                        '                                                    <option value="Malibag">Malibag</option>' .
                        '                                                    <option value="Mirpur">Mirpur</option>' .
                        '                                                    <option value="Mogbazar">Mogbazar</option>' .
                        '                                                    <option value="Mohakhali">Mohakhali</option>' .
                        '                                                    <option value="Motijheel">Motijheel</option>' .
                        '                                                    <option value="Nawabganj">Nawabganj</option>' .
                        '                                                    <option value="New Market">New Market</option>' .
                        '                                                    <option value="Paltan">Paltan</option>' .
                        '                                                    <option value="Purbachal">Purbachal</option>' .
                        '                                                    <option value="Ramna">Ramna</option>' .
                        '                                                    <option value="Rampura">Rampura</option>' .
                        '                                                    <option value="Savar">Savar</option>' .
                        '                                                    <option value="Sutrapur">Sutrapur</option>' .
                        '                                                    <option value="Tejgaon">Tejgaon</option>' .
                        '                                                    <option value="Tongi">Tongi</option>' .
                        '                                                    <option value="Uttara">Uttara</option>' .
                        '                                                    <option value="Wari">Wari</option>' .
                        '                                                </optgroup>' .
                        '                                                <optgroup label="Chittagong">' .
                        '                                                    <option value="Chittagong">Chittagong</option>' .
                        '                                                </optgroup>' .
                        '                                                <optgroup label="Rangpur">' .
                        '                                                    <option value="Rangpur">Rangpur</option>' .
                        '                                                </optgroup>' .
                        '                                                <optgroup label="Sylhet">' .
                        '                                                    <option value="Sylhet">Sylhet</option>' .
                        '                                                </optgroup>' .
                        '                                                <optgroup label="Barishal">' .
                        '                                                    <option value="Barishal">Barishal</option>' .
                        '                                                </optgroup>' .
                        '                                                <optgroup label="Rajshahi">' .
                        '                                                    <option value="Rajshahi">Rajshahi</option>' .
                        '                                                </optgroup>' .
                        '                                            </select>' .
                        '                                        </div>' .
                        '                                        <div class="col-md-6">' .
                        '                                            <input class="form-control" value="' . $res2['detail_location'] . '" type="text" id="input" name="foodDetailLocation" placeholder="Shop Name, Road No, House No etc" required>' .
                        '                                        </div>' .
                        '                                    </div>' .
                        '                                    <div class="row">' .
                        '                                        <div class="col-md-3">' .
                        '                                            <label class="form-group" for="textarea"><strong>Review Description</strong></label>' .
                        '                                        </div>' .
                        '                                        <div class="col-md-9">' .
                        '                                            <textarea class="form-control" id="textarea" value=' . $res2['description'] . ' rows="4" name="foodDescription" required>' . $res2['description'] . '</textarea>' .
                        '                                        </div>' .
                        '                                    </div>' .
                        '                                    <div class="row">' .
                        '                                        <div class="col-md-3">' .
                        '                                            <div class="form-group">' .
                        '                                                <label for="imagechoose"><strong>Change Images</strong></label>' .
                        '                                            </div>' .
                        '                                        </div>' .
                        '                                        <div class="col-md-9">' .
                        '                                            <div class="form-group">' .
                        '                                                <input type="file" class="form-control" name="image">' .
                        '                                            </div>' .
                        '                                        </div>' .
                        '                                    </div>' .
                        '                                    <div class="row">' .
                        '                                        <div class="col-md-3">' .
                        '                                            <label class="form-group" for="input"><strong>Food Price</strong></label>' .
                        '                                        </div>' .
                        '                                        <div class="col-md-9">' .
                        '                                            <input class="form-control" type="number" value="' . $res2['price'] . '" id="input" name="foodPrice" placeholder="Price of Food item" required>' .
                        '                                        </div>' .
                        '                                    </div>' .
                        '                                    <div class="row">' .
                        '                                        <div class="col-md-3">' .
                        '                                            <label class="form-group" for="input"><strong>Rating</strong></label>' .
                        '                                        </div>' .
                        '                                        <div class="col-md-6">' .
                        '                                            <select class="form-control" id="select" name="foodRating" required>' .
                        '                                                <option value=' . $res2['rating'] . ' selected="selected" > ' . $res2['rating'] . '</option> 
                                                 <option value="1">1</option>' .
                        '                                                <option value="2">2</option>' .
                        '                                                <option value="3">3</option>' .
                        '                                                <option value="4">4</option>' .
                        '                                                <option value="5">5</option>' .
                        '                                            </select>' .
                        '                                        </div>' .
                        '                                    </div>' .
                        '                                    <hr>' .
                        '                                    <div class="row">' .
                        '                                        <div class="col-md-12">' .
                        '                                            <button class="btn btn-outline-success btn-block" name="foodInsert" type="submit"><strong>Submit</strong></button>' .
                        '                                        </div>' .
                        '                                    </div>' .
                        '                                </fieldset>' .
                        '                            </form>' .
                        '                        </div>';

                    echo $string;





                    echo "</div>";
                }
                ?>

            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>