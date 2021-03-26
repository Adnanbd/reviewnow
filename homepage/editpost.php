<?php




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
            

            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>