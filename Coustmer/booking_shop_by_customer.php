<?php 
include '../Connection/connection.php';
session_start();
if(isset($_SESSION['loggedin'])){

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Booking History</title>
</head>

<body style="background-color: #ffffff;">

    <div class="container">
        <div class="shadow-sm border bg-info" style="width:100%; height:65px; margin-top:67px; border-radius:20px;">

            <div class="text-center" style="padding-top:3px; font-family: math; font-size:35px;">Booking History</div>

        </div>




        <?php 

  
$user_id=$_SESSION['user_id'];

$total_time = 0;
$total_item = 0;
$sql = "select * from `booking_renter` where `user_id`='$user_id' order by `date_of_b` desc";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){


$booking_id=$row['booking_id'];
$shop_id=$row['shop_id'];
$booking_status=$row['booking_status'];




?>
        <div class="container">



            <div class="shadow-sm border my-4" style="width: 100%; border-radius: 10px;">
                <div class="text-center">
                    Order Id : <span style="font-size: 20px;"><b>#<?php echo $row['booking_id']  ?></b></span>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="ml-3 mt-2">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <span style="font-size: 20px;"><?php echo $row['booking_date']  ?> </span>
                    </div>
                    <div class="mr-3 mt-2">
                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                        <span style="font-size: 20px;"><?php echo $row['booking_time']  ?></span>

                    </div>
                </div>
                <div class="d-flex justify-content-between mb-2 mt-2">
                    <?php 
    $sql1="select * from `bookings` where `user_id`='$user_id' and `booking_id`='$booking_id'";
    $result1 = mysqli_query($conn, $sql1);
    $nums = mysqli_num_rows($result1);
    ?>
                    <div class="ml-3" style="font-size: 18px;">
                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                        <?php echo $nums  ?>
                    </div>
                    <?php
                        if($booking_status=='Cancelled'){
                            ?>
                    <div style="font-size: 18px; color:red; font-family: math;">Cancelled</div>
                    <?php

                        }
                        else if ($booking_status=='Completed'){
?>
                    <div style="font-size: 18px; color:yellowgreen; font-family: math;">Completed</div>
                    <?php
                        }
                        else if($booking_status=='Confirmed'){


                            ?>
                    <div style="font-size: 18px; color:orange; font-family: math;">Confirmed</div>

                    <?php
                        }
                        ?>

                    <div class="mr-3">

                        <a href="view_bookings_of_customer.php?bookings_id=<?php echo $row['booking_id'] ?>&shop_id=<?php echo $row['shop_id'] ?>&booking_status=<?php echo $booking_status ?>"
                            class="btn btn-default form-control  mb-2"
                            style="border-radius: 10px;     background: cadetblue; width: 8rem; border-color: greenyellow;"
                            type="submit">View More</a>
                    </div>
                </div>

            </div>

        </div>

        <?php  } ?>


        <script src="http://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>




        <script>
        $(function() {


            console.log("Ajax")
            $('#conta').click(function() {
                $('.toggle').slideToggle("slow")
            });
        });
        </script>

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

<?php } ?>