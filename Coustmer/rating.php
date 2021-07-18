<?php

include '../Connection/connection.php';


        if (isset($_POST['add']))
{
    $booking_id=$_GET['booking_id'];
    $shop_id=$_GET['shop_id'];
    
    $booking_status=$_GET['booking_status'];
    
    $rating = $_POST["rating"];

    $sql = "UPDATE `booking_renter` set `rating`='$rating' where `booking_id`='$booking_id' and `booking_status`='$booking_status'";
    if (mysqli_query($conn, $sql))
    {
      $result_rating=mysqli_query($conn,"select `rating` from `booking_renter` where `shop_id`='$shop_id' and `rating`!=''");
    $nums=mysqli_num_rows($result_rating);
    $rating_one=0;
    $avg_rating=0;
    while($row=mysqli_fetch_assoc($result_rating)){
    $rating_one +=$row['rating'];
    }
    $avg_rating=round($rating_one/$nums,1);
      $result =mysqli_query($conn, "UPDATE `shops` set `rating`='$avg_rating' where `shop_id`='$shop_id'");

      header("location:view_bookings_of_customer.php?bookings_id=$booking_id&shop_id=$shop_id&booking_status=$booking_status") ;}
    else
    {
        echo '<div class="alert alert-warning" role="alert">
        <span class="text-center" style="font-size:20px; font-family:math;">Failed Due To Technical Issue </span>
        
        </div>';
    }
}
?>