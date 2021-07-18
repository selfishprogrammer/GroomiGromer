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


        <div class="card " style="margin-top: 60px;;">

            <div class="card-header bg-info">
                <div class="text-center" style="color:white; font-size: 20px; font-family: math;">REQUEST EASY
                    CANCELATION</div>
            </div>
            <div class="card-body">
                <form action="<?php echo $_SERVER['REQUEST_URI']  ?>" class="m-3" method="post">

                    <div class="form-group">
                        <select name="cancel_request" class="form-control" style="font-family: cursive;" id="">
                            <option value="" selected required>Select Region</option>
                            <option value="Order By Mistake">Order By Mistake</option>
                            <option value="Not Avalaible At That Time">Not Avalaible At That Time</option>

                            <option value="Shop Is Not Suitable">Shop Is Not Suitable</option>

                            <option value="Other">Others</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <textarea name="others_reason" class="form-control" id="" placeholder="Write Your Reason...."
                            style="width: 100%; height:110px" ;></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-info">REQUEST CANCELLATION</button>
                    </div>
                </form>
            </div>

        </div>
        <?php 
                include '../Connection/connection.php';
                if($_SERVER['REQUEST_METHOD']=='POST'){

                    $shop_id=$_GET['shop_id'];
                    $booking_id=$_GET['booking_id'];
                    $cancel_request=$_POST['cancel_request'];
                    $other_reason=$_POST['others_reason'];
                    $booking_status="Confirmed";
                    $payment_method="Cash On Delivery";
                    $payment_amount=0;

                    $sql="insert into `cancel_by_user` (`shop_id`,`booking_id`,`cancel_request`,`other_reason`,`booking_status`,`payment_method`,`refund_amount`) values ('$shop_id','$booking_id','$cancel_request','$other_reason','$booking_status','$payment_method','$payment_amount')";
                    $result=mysqli_query($conn,$sql);


                    ?>
        <div class="card " style="margin-top: 60px;;">

            <div class="card-header bg-info">
                <div class="text-center" style="color:white; font-size: 20px; font-family: math;">AMOUNT REFUNDABLE
                </div>
            </div>
            <?php
                
                if($result){


                    ?>
            <div class="card-body">
                <?php
$total_amount=0;
$sql1="select * from `bookings` where `shop_id`='$shop_id' and `booking_id`='$booking_id' and `booking_status`='$booking_status'";
$result1=mysqli_query($conn,$sql1);
while($row=mysqli_fetch_assoc($result1)){
    $total_amount +=$row['item_amount'];
}

?>
                <div class="text-center" style="padding-top: 10px;">Your Total Amount is <?php echo $total_amount ?>
                    which is Having Cash On Delivery.</div>
                <form action="<?php $_SERVER['REQUEST_METHOD']  ?>" method="post">
                    <input type="hidden" name="status" value="Cancelled">

                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-warning form-control my-4">REQUEST CANCELATION</button>
                    </div>
                </form>

                <?php  
                
                if(isset($_POST['submit'])){
                    $booking_status1=$_POST['status'];

                    $sql3="update `bookings` set `booking_status`='$booking_status1' where `shop_id`='$shop_id' and `booking_id`='$booking_id'";
                    $result3=mysqli_query($conn,$sql3);
                    $sql4="update `cancel_by_user` set `booking_status`='$booking_status1' where `shop_id`='$shop_id' and `booking_id`='$booking_id'";
                    $result4=mysqli_query($conn,$sql4);
                    $result6=mysqli_query($conn,"select * from `cancel_by_user` where `shop_id`='$shop_id' and `booking_id`='$booking_id'");
                    $row6=mysqli_fetch_assoc($result6);
                    $cancel_request=$row6['cancel_request'];
                    $sql5="update `booking_renter` set `booking_status`='$booking_status1', `cancel_reason`='$cancel_request' where `shop_id`='$shop_id' and `booking_id`='$booking_id'";
                    $result5=mysqli_query($conn,$sql5);
                    $booking_conformation=mysqli_fetch_assoc(mysqli_query($conn,"select * from `booking_renter` where `booking_id`='$booking_id'"));
                    $user_id=$booking_conformation['user_id'];

                    $booking_conformation1=mysqli_fetch_assoc(mysqli_query($conn,"select * from `register_user` where `user_id`='$user_id'"));
                    $phone=$booking_conformation1['userphone'];
                    $apiKey = urlencode('PjpPF3sS0U8-zV0Us9s2oQMZ2ZnRWUBPT2gLyXmb0s');
                    $otp=mt_rand(1000,9999);
                    // Message details
                    $numbers = urlencode($phone);
                    $sender = urlencode('GGBCSM');
                    $message = rawurlencode("Your Booking has been Cancelled.\nBooking ID : $booking_id");
                 
                    // Prepare data for POST request
                    $data = 'apikey=' . $apiKey . '&numbers=' . $numbers . "&sender=" . $sender . "&message=" . $message;
                 
                    // Send the GET request with cURL
                    $ch = curl_init('https://api.textlocal.in/send/?' . $data);
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $response = curl_exec($ch);
                    curl_close($ch);
                    
                    // Process your response here
                   

 header("location:booking_shop_by_customer.php");
                }
                
                ?>
            </div>
            <?php  

                }

            }


            
            
            ?>

        </div>


    </div>








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