<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Groomi Partners</title>
</head>

<body>
    <div class="container">
        <div class="shadow-sm border bg-info" style="margin-top: 20px; width:100%;  border-radius: 20px;">
            <div class="text-center" style="font-size: 25px; padding-top: 12px; font-family: math;"><b> Bookings
                    Details</b></div>
            <div class="text-center mb-2" style="font-size: 20px; font-family: math;"><b>Booking Id : <span style="color:#ffffff;"># <?php echo  $_GET['bookings_id'] ?></span></b></div>
        </div>
        <?php
        if ($_GET['booking_status'] == 'Cancelled') {
        ?>

            <div class="col-md-6 offset-md-3">
                <div class="" style="width: 100%; margin-top: 45px;">
                    <div class="d-flex justify-content-between mt-2">
                        <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;">Time Of Booking </div>
                        <?php
                        include '../Connection/connection.php';
                        $shop_id = $_GET['shop_id'];
                        $booking_id = $_GET['bookings_id'];
                        $booking_status = $_GET['booking_status'];
                        $total_amount = 0;
                        $total_time = 0;
                        $sql1 = "select * from `bookings` where `booking_id`='$booking_id' and `shop_id`='$shop_id' and `booking_status`='$booking_status'";
                        $result1 = mysqli_query($conn, $sql1);
                        $nums = mysqli_num_rows($result1);
                        $row1 = mysqli_fetch_assoc($result1);
                        ?>
                        <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;">
                            <?php echo $row1['date_of_booking'] ?></div>

                    </div>
                    <hr>
                    <?php

                    $shop_id = $_GET['shop_id'];
                    $booking_id = $_GET['bookings_id'];
                    $booking_status = $_GET['booking_status'];
                    $total_amount = 0;
                    $total_time = 0;
                    $offers_price = 0;
                    $total_amount_after_offers = 0;
                    $sql = "select * from `bookings` where `booking_id`='$booking_id' and `shop_id`='$shop_id' and `booking_status`='$booking_status'";
                    $result = mysqli_query($conn, $sql);
                    $nums = mysqli_num_rows($result);
                    while ($row = mysqli_fetch_assoc($result)) {
                        $total_amount += $row['item_amount'];
                        $total_time += $row['item_time'];
                        $username = $row['user_name'];
                        $booking_time = $row['booking_time'];
                        $booking_date = $row['booking_date'];
                        $payment_method = $row['payment_method'];


                    ?>
                        <div class="d-flex justify-content-between mt-2">
                            <div class="ml-3 mb-2" style="font-size: 10px; font-family: math;"><?php echo  $row['items'] ?>
                            </div>
                            <div class="ml-3 mb-2" style="font-size: 10px; font-family: math;"><i class="fa fa-clock-o" aria-hidden="true"></i>

                                <?php echo  $row['item_time'] ?> min</div>
                            <div class="mr-2 ml-1 mb-2" style="font-size: 10px; font-family: math;"><i class="fa fa-inr" aria-hidden="true"></i>

                                <?php echo  $row['item_amount'] ?> </div>
                        </div>
                        <hr>
                    <?php
                        $total_amount_after_offers = $row['total_price'];
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
                <?php
                if ($total_amount_after_offers === "") {



                ?>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="ml-3 mb-2" style="font-size: 20px; font-family: math;"><b>Grand Amount</b></div>
                        <div class="ml-3 mb-2" style="font-size: 20px; font-family: math;">
                            <b><i class="fa fa-inr" aria-hidden="true"></i><?php echo $total_amount ?></b>
                        </div>

                    </div>

                <?php  } else {
                    $offers_price = $total_amount - $total_amount_after_offers;
                ?>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;"><b>Total Amount</b></div>
                        <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;">
                            <b><i class="fa fa-inr" aria-hidden="true"></i><?php echo $total_amount ?></b>
                        </div>

                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;"><b>Offers Discount</b></div>
                        <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;">
                            <b><i class="fa fa-inr" aria-hidden="true"></i><?php echo $offers_price ?></b>
                        </div>

                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="ml-3 mb-2" style="font-size: 20px; font-family: math;"><b>Grand Total</b></div>
                        <div class="ml-3 mb-2" style="font-size: 20px; font-family: math;">
                            <b><i class="fa fa-inr" aria-hidden="true"></i><?php echo $total_amount_after_offers ?></b>
                        </div>

                    </div>




                <?php

                }


                ?>
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

            <?php
            $result=mysqli_query($conn,"select `cancel_reason` from `booking_renter` where `booking_id`='$booking_id' and `booking_status`='$booking_status'");
$row=mysqli_fetch_assoc($result);


$reason=$row['cancel_reason'];

?>


<div class="text-center" style="color:red; font-size:22px; font-family:math;">Reason of Cancel :<?php echo $reason ?> <span style="font-family: cursive ;font-size: 20px;;"></span></div>
        </div>

        <hr>

        <button type="submit" class="btn btn-default form-control my-2 ml-1 mr-1" style=" background-color:red; font-family: cursive;" disabled>
            THIS ORDER IS CANCELLED
        </button>
    </div>

<?php
        } else if ($_GET['booking_status'] == 'Confirmed') {
?>
    <div class="col-md-6 offset-md-3">
        <div class="" style="width: 100%; margin-top: 45px;">
            <div class="d-flex justify-content-between mt-2">
                <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;">Time Of Booking </div>
                <?php
                include '../Connection/connection.php';
                $shop_id = $_GET['shop_id'];
                $booking_id = $_GET['bookings_id'];
                $booking_status = $_GET['booking_status'];
                $total_amount = 0;
                $total_time = 0;
                $sql1 = "select * from `bookings` where `booking_id`='$booking_id' and `shop_id`='$shop_id' and `booking_status`='$booking_status'";
                $result1 = mysqli_query($conn, $sql1);
                $nums = mysqli_num_rows($result1);
                $row1 = mysqli_fetch_assoc($result1);
                ?>
                <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;">
                    <?php echo $row1['date_of_booking'] ?></div>

            </div>
            <hr>
            <?php

            $shop_id = $_GET['shop_id'];
            $booking_id = $_GET['bookings_id'];
            $booking_status = $_GET['booking_status'];;
            $total_amount = 0;
            $total_time = 0;
            $offers_price = 0;
            $total_amount_after_offers = 0;
            $sql = "select * from `bookings` where `booking_id`='$booking_id' and `shop_id`='$shop_id' and `booking_status`='$booking_status'";
            $result = mysqli_query($conn, $sql);
            $nums = mysqli_num_rows($result);
            while ($row = mysqli_fetch_assoc($result)) {
                $total_amount += $row['item_amount'];
                $total_time += $row['item_time'];
                $username = $row['user_name'];
                $booking_time = $row['booking_time'];
                $booking_date = $row['booking_date'];
                $payment_method = $row['payment_method'];
                $total_amount_after_offers = $row['total_price'];

            ?>
                <div class="d-flex justify-content-between mt-2">
                    <div class="ml-3 mb-2" style="font-size: 10px; font-family: math;"><?php echo  $row['items'] ?></div>
                    <div class="ml-3 mb-2" style="font-size: 10px; font-family: math;"><i class="fa fa-clock-o" aria-hidden="true"></i>
                        <?php echo  $row['item_time'] ?> min</div>
                    <div class="mr-2 ml-1 mb-2" style="font-size: 10px; font-family: math;"><i class="fa fa-inr" aria-hidden="true"></i>
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
                <?php
                if ($total_amount_after_offers === "") {



                ?>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="ml-3 mb-2" style="font-size: 20px; font-family: math;"><b>Grand Amount</b></div>
                        <div class="ml-3 mb-2" style="font-size: 20px; font-family: math;">
                            <b><i class="fa fa-inr" aria-hidden="true"></i><?php echo $total_amount ?></b>
                        </div>

                    </div>

                <?php  } else {
                    $offers_price = $total_amount - $total_amount_after_offers;
                ?>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;"><b>Total Amount</b></div>
                        <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;">
                            <b><i class="fa fa-inr" aria-hidden="true"></i><?php echo $total_amount ?></b>
                        </div>

                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;"><b>Offers Discount</b></div>
                        <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;">
                            <b><i class="fa fa-inr" aria-hidden="true"></i><?php echo $offers_price ?></b>
                        </div>

                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="ml-3 mb-2" style="font-size: 20px; font-family: math;"><b>Grand Total</b></div>
                        <div class="ml-3 mb-2" style="font-size: 20px; font-family: math;">
                            <b><i class="fa fa-inr" aria-hidden="true"></i><?php echo $total_amount_after_offers ?></b>
                        </div>

                    </div>

                <?php

                }



                ?>
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
        <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">


            <div class="form-group">
                <input type="number" name="otp_user" class="form-control" placeholder="Enter OTP Given By Coustmer" maxlength="4" id="" required>
            </div>

            <button type="submit" name="otp_button" class="btn btn-default form-control ml-1 mr-1 mb-2" style=" background-color: #40b60a; font-family: cursive;">
                Complete
            </button>

        </form>
        <?php

            if (isset($_POST['otp_button'])) {
                $status="Pending";
                $updated_status = "Completed";

                $otp_user = "select `otp` from `booking_renter` where `booking_id`='$booking_id' and `shop_id`='$shop_id' and `booking_status`='$booking_status'";
                $result_user = mysqli_query($conn, $otp_user);
                $row_user = mysqli_fetch_assoc($result_user);
                if ($row_user['otp'] == $_POST['otp_user']) {

                    $update_booking = mysqli_query($conn, "update `bookings` set `booking_status`='$updated_status' where `booking_id`='$booking_id' and `shop_id`='$shop_id'");
                   
                    $update_booking_renter = mysqli_query($conn, "update `booking_renter` set `booking_status`='$updated_status' where `booking_id`='$booking_id' and `shop_id`='$shop_id'");
                    if ($total_amount_after_offers === "") {

                        $commision=$total_amount-($total_amount*10/100);
                        $commision_real=$total_amount*10/100;
                    $result_shop=mysqli_query($conn,"insert into `shopkeper_info` (`shop_id`,`booking_id`,`total_amount`,`earn`,`comission`,`date_of_booking`,`time_of_booking`,`status`) values ('$shop_id','$booking_id','$total_amount','$commision','$commision_real','$booking_date','$booking_time','$status')");
                    }
                    else{
                        $commision_real=$total_amount*10/100;

                        $commision=$total_amount-($total_amount*10/100);
                        $to_coustmer=$commision-$total_amount_after_offers;
                        $result_shop=mysqli_query($conn,"insert into `shopkeper_info` (`shop_id`,`booking_id`,`total_amount`,`earn`,`comission`,`date_of_booking`,`time_of_booking`,`status`,`offers_applied`,`to_coustmer`) values ('$shop_id','$booking_id','$total_amount','$commision','$commision_real','$booking_date','$booking_time','$status','$total_amount_after_offers','$to_coustmer')");

                    }
        ?>
               
        <?php
        echo "Completed";

                } else {
                    echo "Incorrect OTP";
                }
            }

        ?>
        <a href="cancel_order_of_user.php?booking_id=<?php echo $booking_id   ?>&shop_id=<?php echo $shop_id  ?>" type="submit" class="btn btn-default form-control mr-1 ml-1" style="color:red; border-color: red; font-family: cursive;">
            Cancel
        </a>


    </div>
<?php } else if ($_GET['booking_status'] == 'Completed') {
?>

    <div class="col-md-6 offset-md-3">
        <div class="" style="width: 100%; margin-top: 45px;">
            <div class="d-flex justify-content-between mt-2">
                <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;">Time Of Booking </div>
                <?php
                include '../Connection/connection.php';
                $shop_id = $_GET['shop_id'];
                $booking_id = $_GET['bookings_id'];
                $booking_status = $_GET['booking_status'];
                $total_amount = 0;
                $total_time = 0;
                $sql1 = "select * from `bookings` where `booking_id`='$booking_id' and `shop_id`='$shop_id' and `booking_status`='$booking_status'";
                $result1 = mysqli_query($conn, $sql1);
                $nums = mysqli_num_rows($result1);
                $row1 = mysqli_fetch_assoc($result1);
                ?>
                <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;">
                    <?php echo $row1['date_of_booking'] ?></div>

            </div>
            <hr>
            <?php

            $shop_id = $_GET['shop_id'];
            $booking_id = $_GET['bookings_id'];
            $booking_status = $_GET['booking_status'];
            $total_amount = 0;
            $total_time = 0;
            $offers_price = 0;
            $total_amount_after_offers = 0;
            $earning_amount=0;
            $sql = "select * from `bookings` where `booking_id`='$booking_id' and `shop_id`='$shop_id' and `booking_status`='$booking_status'";
            $result = mysqli_query($conn, $sql);
            $nums = mysqli_num_rows($result);
            while ($row = mysqli_fetch_assoc($result)) {
                $total_amount += $row['item_amount'];
                $total_time += $row['item_time'];
                $username = $row['user_name'];
                $booking_time = $row['booking_time'];
                $booking_date = $row['booking_date'];
                $payment_method = $row['payment_method'];
                $total_amount_after_offers = $row['total_price'];

            ?>
                <div class="d-flex justify-content-between mt-2">
                    <div class="ml-3 mb-2" style="font-size: 10px; font-family: math;"><?php echo  $row['items'] ?>
                    </div>
                    <div class="ml-3 mb-2" style="font-size: 10px; font-family: math;"><i class="fa fa-clock-o" aria-hidden="true"></i>
                        <?php echo  $row['item_time'] ?> min</div>
                    <div class="mr-2 ml-1 mb-2" style="font-size: 10px; font-family: math;"><i class="fa fa-inr" aria-hidden="true"></i>
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
                <?php
                if ($total_amount_after_offers === "") {

$earning_amount=$total_amount-($total_amount*10)/100;

                ?>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="ml-3 mb-2" style="font-size: 20px; font-family: math;"><b>Grand Amount</b></div>
                        <div class="ml-3 mb-2" style="font-size: 20px; font-family: math;">
                            <b><i class="fa fa-inr" aria-hidden="true"></i><?php echo $total_amount ?></b>
                        </div>

                    </div>

                    <hr>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;"><b>GG Comission</b></div>
                        <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;">
                            <b><i class="fa fa-inr" aria-hidden="true"></i>10%</b>
                        </div>

                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;"><b>Total Earning</b></div>
                        <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;">
                            <b><i class="fa fa-inr" aria-hidden="true"></i><?php echo $earning_amount ?></b>
                        </div>

                    </div>
                    <div class="d-flex justify-content-center mt-2">
            
            <a type="submit" href="pay_to_gg.php" class="btn btn-outline-info form-control" style="width : 18rem" >View Your Earning</a>

                    </div>

                <?php  } else {
                    $offers_price = $total_amount - $total_amount_after_offers;
                    $earning_amount=$total_amount-($total_amount*10)/100;

                ?>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;"><b>Total Amount</b></div>
                        <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;">
                            <b><i class="fa fa-inr" aria-hidden="true"></i><?php echo $total_amount ?></b>
                        </div>

                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;"><b>Offers Discount</b></div>
                        <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;">
                            <b><i class="fa fa-inr" aria-hidden="true"></i><?php echo $offers_price ?></b>
                        </div>

                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="ml-3 mb-2" style="font-size: 20px; font-family: math;"><b>Grand Total</b></div>
                        <div class="ml-3 mb-2" style="font-size: 20px; font-family: math;">
                            <b><i class="fa fa-inr" aria-hidden="true"></i><?php echo $total_amount_after_offers ?></b>
                        </div>

                    </div>
                    <hr>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;"><b>GG Comission</b></div>
                        <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;">
                            <b><i class="fa fa-inr" aria-hidden="true"></i>10%</b>
                        </div>

                    </div>
                    <div class="d-flex justify-content-between mt-2">
                        <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;"><b>Total Earning</b></div>
                        <div class="ml-3 mb-2" style="font-size: 15px; font-family: math;">
                            <b><i class="fa fa-inr" aria-hidden="true"></i><?php echo $earning_amount ?></b>
                        </div>

                    </div>
                    <div class="d-flex justify-content-center mt-2">
            
            <a type="submit" href="get_from_gg.php" class="btn btn-outline-info form-control" style="width : 18rem" >Amount From GG</a>

                    </div>

                <?php

                }

                ?>
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

        <button type="submit" class="btn btn-info form-control my-2 ml-1 mr-1" style=" background-color:blue; font-family: cursive;" disabled>
            COMPLETED
        </button>
    </div>

<?php
        } ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>

<!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>