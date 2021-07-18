<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Your Order</title>
</head>

<body>

<?php 
include '../Connection/connection.php';
$date=$_GET['date'];
$time=$_GET['time'];
$date1=date("Y-m-d");
$payment_method=$_POST['payment'];
$payment_status="Pending";
$total_amount=0;
$total_time=0;
$total_amount_after_offers=0;
$status='booked';
$user_id=$_GET['user_id'];
$booking_id=mt_rand(10000,99999);
$otp=mt_rand(1000,9999);
$booking_status="Confirmed";
$sql="select * from `cart` where `user_id`='$user_id'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){

    $shop_id=$row['shop_id'];
    $item_name=$row['item_name'];
    $time_taken=$row['time_taken'];
    $item_price=$row['item_price'];
    
    $sql1="select * from `shops` where `shop_id`='$shop_id'";
    $result1=mysqli_query($conn,$sql1);
    $row1=mysqli_fetch_assoc($result1);

    $shop_name=$row1['shop_name'];
    
    $sql2="select * from `register_user` where `user_id`='$user_id'";
    $result2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_assoc($result2);

    $username=$row2['username'];
    $total_amount +=$row['item_price'];
$total_time +=$row['time_taken'];
$total_amount_after_offers=$row['total_amount'];
if($total_amount_after_offers == ""){
$sql4="insert into `bookings` (`booking_id`,`shop_id`,`shop_name`,`items`,`item_time`,`item_amount`,`booking_status`,`user_id`,`user_name`,`booking_date`,`booking_time`,`payment_method`,`payment_status`,`otp`,`date`,`total_price`) values ('$booking_id','$shop_id','$shop_name','$item_name','$time_taken','$item_price','$booking_status','$user_id','$username','$date','$time','$payment_method','$payment_status','$otp','$date1','')";
$result4=mysqli_query($conn,$sql4);
}
else{
    $sql4="insert into `bookings` (`booking_id`,`shop_id`,`shop_name`,`items`,`item_time`,`item_amount`,`booking_status`,`user_id`,`user_name`,`booking_date`,`booking_time`,`payment_method`,`payment_status`,`otp`,`date`,`total_price`) values ('$booking_id','$shop_id','$shop_name','$item_name','$time_taken','$item_price','$booking_status','$user_id','$username','$date','$time','$payment_method','$payment_status','$otp','$date1','$total_amount_after_offers')";
    $result4=mysqli_query($conn,$sql4);  
}
}
$sql5="insert into `booking_renter` (`booking_id`,`shop_id`,`booking_status`,`booking_date`,`booking_time`,`otp`,`user_id`,`date`) values ('$booking_id','$shop_id','$booking_status','$date','$time','$otp','$user_id','$date1')";
$result5=mysqli_query($conn,$sql5);



if($result4){
    $updated_chairs=0;



$shop_owner_mobile_no=mysqli_fetch_assoc(mysqli_query($conn,"select * from `shops` where `shop_id`='$shop_id'"));
$shop_phone=$shop_owner_mobile_no['phone'];
$apiKey = urlencode('PjpPF3sS0U8-zV0Us9s2oQMZ2ZnRWUBPT2gLyXmb0s');
                      $otp=mt_rand(1000,9999);
                      // Message details
                      $numbers = urlencode($shop_phone);
                      $sender = urlencode('GGBCSM');
                      $message = rawurlencode("Your received a Booking.\nBooking ID : $booking_id\nDate : $date\nTime : $time");
                   
                      // Prepare data for POST request
                      $data = 'apikey=' . $apiKey . '&numbers=' . $numbers . "&sender=" . $sender . "&message=" . $message;
                   
                      // Send the GET request with cURL
                      $ch = curl_init('https://api.textlocal.in/send/?' . $data);
                      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                      $response = curl_exec($ch);
                      curl_close($ch);
    $booking_conformation=mysqli_fetch_assoc(mysqli_query($conn,"select * from `register_user` where `user_id`='$user_id'"));
    $phone=$booking_conformation['userphone'];
    $apiKey = urlencode('PjpPF3sS0U8-zV0Us9s2oQMZ2ZnRWUBPT2gLyXmb0s');
                      $otp=mt_rand(1000,9999);
                      // Message details
                      $numbers = urlencode($phone);
                      $sender = urlencode('GGBCSM');
                      $message = rawurlencode("Your Booking has been confirmed.\nBooking ID : $booking_id\nDate : $date\nTime : $time\nOTP : $otp");
                   
                      // Prepare data for POST request
                      $data = 'apikey=' . $apiKey . '&numbers=' . $numbers . "&sender=" . $sender . "&message=" . $message;
                   
                      // Send the GET request with cURL
                      $ch = curl_init('https://api.textlocal.in/send/?' . $data);
                      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                      $response = curl_exec($ch);
                      curl_close($ch);
                      
                      // Process your response here
                  

    $payment_method=$_POST['payment'];
    $to="rahuljha3246@gmail.com";
    
    $subject="Order Conformation";
    $message="Your Booking Has Been Confirmed ,$phone ,$message $response Your Booking Id is (#'$booking_id') and You have a Booking at '$date' and '$time' in '$shop_name' and OTP is '$otp'";
    $headers=[
    "MIME-Version: 1.0",
    "Content-type: text/plain; charset=utf-8",
    "From: bishwasoraon716@gmail.com"
    ];
    echo 
    $headers=implode("\r\n",$headers);
    
    if(mail($to,$subject,$message,$headers)){
    
        echo '<script>
        
        
        swal("Congratulations", "You Booking Has Been Conformed!", "success") </script>';
      
    }
    $row8=mysqli_fetch_assoc(mysqli_query($conn,"select * from `time_managem` where `shop_id`='$shop_id' and `time`='$time'"));
    $updated_chairs= $row8['no_of_chairs'] - 1 ;

    $sql7=mysqli_query($conn,"update `time_managem` set  `no_of_chairs`='$updated_chairs'  where `time`='$time' and `shop_id`='$shop_id'");
$sql6=mysqli_query($conn,"delete from `cart` where `user_id`='$user_id' and `shop_id`='$shop_id'");
header("location:view_bookings_of_customer?bookings_id=$booking_id&shop_id=$shop_id&booking_status=$booking_status");
    
    }
    
    else{
        echo '<script> swal("Ohh no", "You Order Has Been Failed!", "error") </script>';
    }
?>

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