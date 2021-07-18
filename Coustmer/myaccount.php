<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>My Account</title>
</head>

<body>
    <div class="container">

    <div class="shadow-sm border bg-info" style="width:100%; height:65px; margin-top:67px; border-radius:20px;">

        <div class="text-center" style="padding-top:3px; font-family: math; font-size:35px;">Account</div>

    </div>
    </div>
    <div class="col-md-6 offset-md-3 mt-5">


        <div class=" pt-2 bg-white" style="width:100%; border-radius: 20px;">

           
            <a href="profile" class="nav-link" style="color:black;">
                <div class="d-flex justify-content-between">
                    <div class="ml-2 mb-2 mt-2" style="font-size: 15px;;">&nbsp;<i class="fa fa-user"
                            aria-hidden="true"></i>&nbsp; &nbsp; <b>Profile</b></div>
                    <div class="mr-2 mb-2 mt-2" style="font-size: 15px; opacity: 0.5;"><i class="fa fa-arrow-right"
                            aria-hidden="true"></i></div>

                </div>
            </a>
            <hr>
            <a href="booking_shop_by_customer" class="nav-link" style="color:black;">
                <div class="d-flex justify-content-between">
                    <div class="ml-2 mb-2 mt-2" style="font-size: 15px;;">&nbsp;<i class="fa fa-shopping-basket"
                            aria-hidden="true"></i>&nbsp; &nbsp; <b>Bookings</b></div>
                    <div class="mr-2 mb-2 mt-2" style="font-size: 15px; opacity: 0.5;"><i class="fa fa-arrow-right"
                            aria-hidden="true"></i></div>

                </div>
            </a>
            <hr>
            





            <a href="" data-target="#termscondition" data-toggle="modal" class="nav-link" style="color:black;">
                <div class="d-flex justify-content-between">
                    <div class="ml-2 mb-2 mt-2" style="font-size: 15px;;">&nbsp;<i class="fa fa-user-secret"
                            aria-hidden="true"></i>&nbsp; &nbsp; <b>Terms & Conditions</b></div>
                    <div class="mr-2 mb-2 mt-2" style="font-size: 15px; opacity: 0.5;"><i class="fa fa-arrow-right"
                            aria-hidden="true"></i></div>

                </div>
            </a>
            <hr>
            <a href="feedback" class="nav-link" style="color:black;">
                <div class="d-flex justify-content-between">
                    <div class="ml-2 mb-2 mt-2" style="font-size: 15px;;">&nbsp;<i class="fa fa-comment-o"
                            aria-hidden="true"></i>&nbsp; &nbsp; <b>Feedback</b></div>
                    <div class="mr-2 mb-2 mt-2" style="font-size: 15px; opacity: 0.5;"><i class="fa fa-arrow-right"
                            aria-hidden="true"></i></div>

                </div>
            </a>
            <hr>


            <a href="support" class="nav-link" style="color:black;">
                <div class="d-flex justify-content-between">
                    <div class="ml-2 mb-2 mt-2" style="font-size: 15px;;">&nbsp;<i class="fa fa-question"
                            aria-hidden="true"></i>&nbsp; &nbsp; <b>Support</b></div>
                    <div class="mr-2 mb-2 mt-2" style="font-size: 15px; opacity: 0.5;"><i class="fa fa-arrow-right"
                            aria-hidden="true"></i></div>

                </div>
            </a>
            <hr>


            <!-- <a href="your_wallet_after_register" class="nav-link" style="color:black;">
                <div class="d-flex justify-content-between">
                    <div class="ml-2 mb-2 mt-2" style="font-size: 15px;;">&nbsp;<i class="fa fa-envelope-o"
                            aria-hidden="true"></i>
                        &nbsp; &nbsp; <b>Wallet</b></div>
                    <div class="mr-2 mb-2 mt-2" style="font-size: 15px; opacity: 0.5;"><i class="fa fa-arrow-right"
                            aria-hidden="true"></i></div>

                </div>
            </a> -->
            <hr>
        </div>
        <div class="d-flex justify-content-center mb-4">

            <a href="../Login/logout_user" type="submit" class="btn btn form-control"
                style="width:18rem; background-color: #ff7575; font-family: cursive; border-radius: 10px;;"><i
                    class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Logout</a>

        </div>
    </div>


    </div>

<?php include '../Users Folder/terms&Condition.php';  ?>
    <style>
    #myMenu {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }


    /* Style the navigation links */

    #myMenu li a {
        padding: 12px;
        text-decoration: none;
        color: black;
        display: block
    }

    #myMenu li a:hover {
        background-color: #eee;
        border-radius: 20px;
    }
    </style>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>