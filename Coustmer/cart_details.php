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

    <title>Cart Details</title>
</head>
<body>
<div class="container-fluid">
    <div class="col-md-6 offset-md-3">
    <div class="shadow-sm border bg-info" style="margin-top: 20px; width:100%; height:70px; border-radius: 20px;">
            <div class="text-center" style="font-size: 25px; padding-top: 12px; font-family: math;"><b> My Cart
                    </b></div>
        </div>
        <div class=" bg-white" style="width:100%; margin-top:56px; border-radius: 15px;">
            <?php

include '../Connection/connection.php';
include 'ip.php';

session_start();
if (isset($_SESSION['loggedin'])) {
$user_id=$_SESSION['user_id'];
$total_price =0;
$total_time=0;
$shop_id=0;
$item_id=0;
$ip=getUserIp();

$result=mysqli_query($conn,"select * from `cart` where `user_ip`='$ip' and `user_id`='$user_id'");
$nums=mysqli_num_rows($result);
if($nums >0){


while($row=mysqli_fetch_assoc($result)){
    $total_price +=$row['item_price'];
    $total_time +=$row['time_taken'];
$shop_id=$row['shop_id'];
$item_id=$row['item_id'];



?>

            <div class="d-flex justify-content-between m-3">
                <div class=" my-2" style="font-size: 15px; font-family: cursive;"><?php echo $row['item_name'] ?></div>
                <div class=" my-2" style="font-size: 15px; font-family: cursive;"><?php echo $row['time_taken'] ?> <i class="fa fa-clock-o"
                        aria-hidden="true"></i>
                </div>

                <div class=" my-2" style="font-size: 15px; font-family: cursive;"><i class="fa fa-inr"
                        aria-hidden="true"></i>
                        <?php echo $row['item_price'] ?></div>

                <a href="delete_item1.php?item_id=<?php echo $item_id ?>&shop_id=<?php echo $shop_id ?>" type="submit" class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i>
                </a>


            </div>

            
            <hr>

            <?php } }
            else{

include 'no_item_in_cart.php';
            }
            
            ?>





            <?php } else {
                

                $ip1=getUserIp();
$total_price=0;
$total_time=0;
$shop_id=0;
$item_id=0;
                $result=mysqli_query($conn,"select * from `cart` where `user_ip`='$ip1'");
                $nums=mysqli_num_rows($result);
                if($nums>0){
                while($row=mysqli_fetch_assoc($result)){
                    $total_price +=$row['item_price'];
                    $total_time +=$row['time_taken'];
                    $shop_id=$row['shop_id'];
                    $item_id=$row['item_id'];                
                
                
                ?>
                
                            <div class="d-flex justify-content-between m-3">
                                <div class=" my-2" style="font-size: 15px; font-family: cursive;"><?php echo $row['item_name'] ?></div>
                                <div class=" my-2" style="font-size: 15px; font-family: cursive;"><?php echo $row['time_taken'] ?> <i class="fa fa-clock-o"
                                        aria-hidden="true"></i>
                                </div>
                
                                <div class=" my-2" style="font-size: 15px; font-family: cursive;"><i class="fa fa-inr"
                                        aria-hidden="true"></i>
                                        <?php echo $row['item_price'] ?></div>
                
                                <a href="delete_item1.php?item_id=<?php echo $item_id ?>&shop_id=<?php echo $shop_id ?>" type="submit" class="btn btn-outline-danger"><i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                
                
                            </div>
                            <hr>
                

            <?php
}}else{
    include 'no_item_in_cart.php';

}}
?>
        </div>

 <?php if($nums>0){ ?>

<div class="card bg-white" style="border-radius: 15px;">
<div class="card-header" style="background-color: #E0E0E0;"><b>Details</b> </div>
    <div class="d-flex justify-content-between my-3">
    <div class="mx-3" style="font-size: 15px; font-family: cursive;">Total Item </div>
    <div class="mx-3" style="font-size: 15px; font-family: cursive;"><i class="fa fa-cart-plus"
                                        aria-hidden="true"></i>&nbsp;<?php echo $nums  ?></div>
  
   
    </div>
    <div class="d-flex justify-content-between my-3">
    <div class="mx-3" style="font-size: 15px; font-family: cursive;">Total Time </div>
    <div class="mx-3" style="font-size: 15px; font-family: cursive;"><i class="fa fa-clock-o"
                                        aria-hidden="true"></i>&nbsp;<?php echo $total_time  ?></div>
    </div>

    <div class="d-flex justify-content-between my-3">
 <div class="mx-3"style="font-size: 15px; font-family: cursive;">Total Price </div>
    <div class="mx-3" style="font-size: 25px; font-family: cursive;"><b><i class="fa fa-inr"
                                        aria-hidden="true"></i>&nbsp;<?php echo $total_price  ?></b></div>
    </div>
    </div>
    </div>
<?php  

if (isset($_SESSION['loggedin'])) {

?>
<div class="border fixed-bottom">
<div class="d-flex justify-content-between ">

<button type="submit" style="width: 13rem; font-size:26px; font-family: math;" class="btn btn-default my-3 mx-2"><b><i class="fa fa-inr"
                                        aria-hidden="true"></i><?php echo $total_price  ?></b></button>

<a href="check_out.php"  style="width: 13rem;" class="btn btn-outline-secondary py-3 mx-2 my-3">Checkout</a>
</div>
</div>
<?php } 


else { ?>
<div class=" border fixed-bottom">
<div class="d-flex justify-content-between">



<button type="submit" style="width: 13rem; font-family: math;  font-size:26px;" class="btn btn-default my-3 mx-2"><b><i class="fa fa-inr"
                                        aria-hidden="true"></i><?php echo $total_price  ?></b></button>

<a href="../Login/login_user.php"  style="width: 13rem;" class="btn btn-outline-secondary py-3 mx-2 my-3">Login and Checkout</a>

</div>
</div>
<?php 


}

 }

 else{

 }
?>

    
</div>
<!-- Edit Profile Section -->

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