<?php
include '../Connection/connection.php';
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['user'] == 'admin') {


?>

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


    <title>Admin</title>
</head>

<body>
    <div class="container">
        <div class="shadow-sm border bg-info" style="margin-top: 20px; width:100%;  border-radius: 20px;">
            <div class="text-center" style="font-size: 25px; padding-top: 12px; font-family: math;"><b> Bookings
                    Details</b></div>
            <div class="text-center mb-2" style="font-size: 20px; font-family: math;"><b>Booking Id : <span
                        style="color:#ffffff;"># <?php echo  $_GET['bookings_id'] ?></span></b></div>
        </div>
    </div>
    <div class="col-md-6 offset-md-3">
        <div class="" style="width: 100%; margin-top: 45px;">
            <div class="d-flex justify-content-between mt-2">
                <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;">Time Of Booking </div>
                <?php
                      include '../Connection/connection.php';
                $booking_id = $_GET['bookings_id'];
                $total_amount = 0;
                $total_time = 0;
                $sql1 = "select * from `bookings` where `booking_id`='$booking_id'";
                $result1 = mysqli_query($conn, $sql1);
                $nums = mysqli_num_rows($result1);
                $row1=mysqli_fetch_assoc($result1);
                ?>
                <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;">
                    <?php echo $row1['date_of_booking'] ?></div>

            </div>
            <hr>
            <?php
              

                $booking_id = $_GET['bookings_id'];

                $total_amount = 0;
                $total_time = 0;
                $sql = "select * from `bookings` where `booking_id`='$booking_id'";
                $result = mysqli_query($conn, $sql);
                $nums = mysqli_num_rows($result);
                while ($row = mysqli_fetch_assoc($result)) {
                    $total_amount += $row['item_amount'];
                    $total_time += $row['item_time'];
                    $username = $row['user_name'];
                    $booking_time = $row['booking_time'];
                    $booking_date = $row['booking_date'];
                    $payment_method = $row['payment_method'];

$booking_status=$row['booking_status'];
                ?>
            <div class="d-flex justify-content-between mt-2">
                <div class="ml-3 mb-2" style="font-size: 10px; font-family: math;"><?php echo  $row['items'] ?>
                </div>
                <div class="ml-3 mb-2" style="font-size: 10px; font-family: math;"><i class="fa fa-clock-o"
                        aria-hidden="true"></i>

                    <?php echo  $row['item_time'] ?> min</div>
                <div class="mr-2 ml-1 mb-2" style="font-size: 10px; font-family: math;"><i class="fa fa-inr"
                        aria-hidden="true"></i>

                    <?php echo  $row['item_amount'] ?> </div>
            </div>
            <hr>
            <?php
                }




                ?>

        </div>
    </div>

    </div>
    <hr>
    <div class="container">
        <div class="col-md-6 offset-md-3">
            <div class="" style="width: 100%; margin-top: 15px;">

                <div class="d-flex justify-content-between mt-2">
                    <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;">Total Item</div>
                    <div class="mr-3 mb-2" style="font-size: 15px; font-family: math;"><?php echo $nums ?></div>

                </div>
                <div class="d-flex justify-content-between mt-2">
                    <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;">Total Time</div>
                    <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;"><?php echo $total_time ?> min
                    </div>

                </div>
                <div class="d-flex justify-content-between mt-2">
                    <div class="ml-3 mb-2" style="font-size: 20px; font-family: math;"><b>Grand Amount</b></div>
                    <div class="ml-3 mb-2" style="font-size: 20px; font-family: math;">
                        <b></i><i class="fa fa-inr" aria-hidden="true"></i>
                            <?php echo $total_amount ?></b>
                    </div>

                </div>
            </div>
            <hr>
            <div class="" style="width: 100%; margin-top: 15px;">

                <div class="d-flex justify-content-between mt-2">
                    <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;"><b>Name : </b></div>
                    <div class="mr-3 mb-2" style="font-size: 15px; font-family: math;"><?php echo $username ?></div>

                </div>
                <div class="d-flex justify-content-between mt-2">
                    <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;"><b>Mobile : </b></div>
                    <div class="mr-3 mb-2" style="font-size: 15px; font-family: math;">6296002855</div>

                </div>
                <div class="d-flex justify-content-between mt-2">
                    <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;"><b>Booking Date</b></div>
                    <div class="mr-3 mb-2" style="font-size: 15px; font-family: math;"><?php echo $booking_date ?></div>

                </div>
                <div class="d-flex justify-content-between mt-2">
                    <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;"><b>Booking Time</b></div>
                    <div class="mr-3 mb-2" style="font-size: 15px; font-family: math;"><?php echo $booking_time ?></div>

                </div>

                <div class="d-flex justify-content-between mt-2">
                    <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;"><b>Payment</b></div>
                    <div class="mr-3 mb-2" style="font-size: 15px; font-family: math;"><?php echo $payment_method ?>
                    </div>

                </div>

            </div>


        </div>
        <hr>
        <?php  if($booking_status =="Completed"){
echo '<button type="submit" class="btn btn-default form-control my-2 ml-1 mr-1"
style=" background-color:yellowgreen; font-family: cursive;" disabled>
BOOKING COMPLETED
</button>';
} 
if($booking_status =="Cancelled"){
    echo '<button type="submit" class="btn btn-default form-control my-2 ml-1 mr-1"
    style=" background-color:red; font-family: cursive;" disabled>
    BOOKING CANCELLED
    </button>';
    }
    if($booking_status =="Confirmed"){
        echo '<button type="submit" class="btn btn-default form-control my-2 ml-1 mr-1"
        style=" background-color:orange; font-family: cursive;" disabled>
        BOOKING PENDING
        </button>';
        }  ?>

    </div>

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





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

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
<?php  } ?>