<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Groomi Partners</title>
</head>

<body>
    <?php include 'nav_login_signup.php'; ?>
    <div class="container" style="margin-top: 100px;;">
        <div class="d-flex justify-content-between">
            <?php 
            $result=mysqli_query($conn,"select `shop_status` from `shops` where `shop_id`='$shop_id'");
            $row=mysqli_fetch_assoc($result);
            if($row['shop_status']=="on"){

            ?>
            <button class="btn btn-success border" type="button">
                Shop Is Online</button>


            <?php }
           else{
            ?>
            <button class="btn btn-danger border " type="button">
                Shop Is Offline</button>



            <?php } ?>
            <?php 
$row=mysqli_fetch_assoc(mysqli_query($conn,"select * from `shops` where `shop_id`='$shop_id'"));

?>
            <button class="btn btn-danger border" type="button">
                <?php echo $row['rating']  ?>&nbsp;<i class="fa fa-star-o" aria-hidden="true"></i></button>
            <a href="myaccount" class="btn btn-default border" type="button"><i class="fa fa-user"
                    aria-hidden="true"></i>
                My Account</a>
        </div>

        <div class="d-flex justify-content-center">
            <div class="row">
                <?php 
            
                $sql = "select * from `bookings` where `shop_id`='$shop_id'";
                $result = mysqli_query($conn, $sql);
                $nums=mysqli_num_rows($result);
               
                
                ?>
                <div class="shadow-sm border ml-2 my-2" style="width:47%; border-radius:15px; height:100px;">
                    <div class="text-center pt-2" style="opacity: 0.5; font-size:18px;;">ORDERS</div>
                    <div class="text-center pt-1 " style="font-size:30px;;"><?php echo $nums ?></div>
                </div>
                <?php 
                $booking_status = "Completed";
                $total_time = 0;
                $total_item = 0;
                $total_amount=0;
                $sql = "select * from `bookings` where `shop_id`='$shop_id' and `booking_status`='$booking_status'";
                $result = mysqli_query($conn, $sql);
                $nums=mysqli_num_rows($result);
                while($row=mysqli_fetch_assoc($result)){
                    $total_amount +=$row['item_amount'];
                }
                
                ?>
                <div class="shadow-sm border ml-2 my-2" style="width:47%; border-radius:15px; height:100px;">
                    <div class="text-center pt-2" style="opacity: 0.5; font-size:18px;;">REVENUE</div>
                    <div class="text-center pt-1 " style="font-size:30px;;"><?php echo $total_amount ?>/-</div>
                </div>
                <?php 
           
                $sql = "select * from `items` where `shop_id`='$shop_id'";
                $result = mysqli_query($conn, $sql);
                $nums1=mysqli_num_rows($result);
            
                
                ?>

                <div class="shadow-sm border ml-2 my-2" style="width:47%; border-radius:15px; height:100px;">
                    <div class="text-center pt-2" style="opacity: 0.5; font-size:18px;;">ITEMS</div>
                    <div class="text-center pt-1 " style="font-size:30px;;"><?php echo $nums1 ?></div>
                </div>
                <?php 
                $booking_status="Confirmed";
            $date1=date("m/d/Y");
            $sql = "select * from `booking_renter` where `shop_id`='$shop_id' and `booking_date`='$date1' and `booking_status`='$booking_status'";
            $result = mysqli_query($conn, $sql);
            $nums2=mysqli_num_rows($result);
           
            
            ?>
                <div class="shadow-sm border ml-2 my-2" style="width:47%; border-radius:15px; height:100px;">
                    <div class="text-center pt-2" style="opacity: 0.5; font-size:18px;;">TODAY</div>
                    <div class="text-center pt-1 " style="font-size:30px;;"><?php echo $nums2 ?></div>
                </div>
            </div>
        </div>
    </div>



    <div class="container my-4">
        <div class="text-center mb-4" style="font-size: 25px; font-family: math;"><b>Bookings Details</b></div>
        <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">
            <div class="d-flex justify-content-between">
                <button class="btn btn-default form-control mx-1" name="all" id="all"
                    style="border-radius: 10px; border-color: greenyellow;" type="submit" onclick="ColorChangeAll()">All</button>

                <button class="btn btn-default form-control mx-1" name="today" id="today" onclick="ColorChange()"
                    style="border-radius: 10px; border-color: greenyellow;" type="submit">Today</button>
                <button class="btn btn-default form-control mx-1" name="complete" id="complete" onclick="ColorChangeComp()"
                    style="border-radius: 10px; border-color: greenyellow;" type="submit">Completed</button>
                <button class="btn btn-default form-control mx-1" name="cancelled" id="cancelled" onclick="ColorChangeCan()"
                    style="border-radius: 10px; border-color: greenyellow;" type="submit">Cancelled</button>

            </div>
        </form>
    </div>


    <?php
if(isset($_POST['today'])){


    $date=date("Y/m/d");

$booking_status = "Confirmed";
$total_time = 0;
$total_item = 0;
$sql = "select * from `booking_renter` where `shop_id`='$shop_id' and `booking_status`='$booking_status' and `booking_date`='$date' order by `date_of_b` desc";
$result = mysqli_query($conn, $sql);
$nums=mysqli_num_rows($result);
if($nums > 0){
while($row = mysqli_fetch_assoc($result)){


$booking_id=$row['booking_id'];




?>
  <script>
    const color=document.getElementById('today')
    const ColorChange=color.style.backgroundColor='#86e0f2';
    </script>
    <div class="container">

        <div class="col-md-6 offset-md-3 mb-5">

            <div class="shadow-sm border" style="width: 100%; border-radius: 10px;">
                <div class="text-center">
                    Order Id : <span style="font-size: 20px;"><b>#<?php echo $row['booking_id']  ?></b></span>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="ml-3 mt-2">
                        Date : <span style="font-size: 20px;"><?php echo $row['booking_date']  ?> </span>
                    </div>
                    <div class="mr-1 mt-2">
                        Time :<i class="fa fa-inr" aria-hidden="true"></i><span
                            style="font-size: 20px;"><?php echo $row['booking_time'] ?></span>

                    </div>
                </div>
                <div class="d-flex justify-content-between mb-2 mt-2">
                    <?php 
    $sql1="select * from `bookings` where `shop_id`='$shop_id' and `booking_id`='$booking_id' and `booking_status`='$booking_status'";
    $result1 = mysqli_query($conn, $sql1);
    $nums = mysqli_num_rows($result1);
    ?>
                    <div class="ml-3" style="font-size: 18px;">
                        Items: <?php echo $nums  ?>
                    </div>
                    <div class="mr-3">

                        <a href="view_bookings.php?bookings_id=<?php echo $row['booking_id'] ?>&shop_id=<?php echo $row['shop_id'] ?>&booking_status=<?php echo $booking_status ?>"
                            class="btn btn-default form-control  mb-2"
                            style="border-radius: 10px;     background: cadetblue; width: 10rem; border-color: greenyellow;"
                            type="submit">View More</a>
                    </div>
                </div>

            </div>

        </div>

    </div>
  
    <?php
    


}}

else{
    include 'no_bookings_found.php';
}}
else if(isset($_POST['cancelled'])){


  

$booking_status = "Cancelled";
$total_time = 0;
$total_item = 0;
$sql = "select * from `booking_renter` where `shop_id`='$shop_id' and `booking_status`='$booking_status' order by `date_of_b` desc";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){


$booking_id=$row['booking_id'];




?>
 <script>
    const color1=document.getElementById('cancelled')
    const ColorChangeCan=color1.style.backgroundColor='#86e0f2';
    </script>
    <div class="container">

        <div class="col-md-6 offset-md-3 mb-5">

            <div class="shadow-sm border" style="width: 100%; border-radius: 10px;">
                <div class="text-center">
                    Order Id : <span style="font-size: 20px;"><b>#<?php echo $row['booking_id']  ?></b></span>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="ml-3 mt-2">
                        Date : <span style="font-size: 20px;"><?php echo $row['booking_date']  ?> </span>
                    </div>
                    <div class="mr-1 mt-2">
                        Time :<i class="fa fa-inr" aria-hidden="true"></i><span
                            style="font-size: 20px;"><?php echo $row['booking_time']  ?></span>

                    </div>
                </div>
                <div class="d-flex justify-content-between mb-2 mt-2">
                    <?php 
    $sql1="select * from `bookings` where `shop_id`='$shop_id' and `booking_id`='$booking_id' and `booking_status`='$booking_status'";
    $result1 = mysqli_query($conn, $sql1);
    $nums = mysqli_num_rows($result1);
    ?>
                    <div class="ml-3" style="font-size: 18px;">
                        Items: <?php echo $nums  ?>
                    </div>
                    <div class="mr-3">

                        <a href="view_bookings.php?bookings_id=<?php echo $row['booking_id'] ?>&shop_id=<?php echo $row['shop_id'] ?>&booking_status=<?php echo $booking_status ?>"
                            class="btn btn-default form-control  mb-2"
                            style="border-radius: 10px;     background: cadetblue; width: 10rem; border-color: greenyellow;"
                            type="submit">View More</a>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <?php  } }

else if(isset($_POST['complete'])){


  

$booking_status = "Completed";
$total_time = 0;
$total_item = 0;
$sql = "select * from `booking_renter` where `shop_id`='$shop_id' and `booking_status`='$booking_status' order by `date_of_b` desc";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){


$booking_id=$row['booking_id'];




?>
 <script>
    const color2=document.getElementById('complete')
    const ColorChangeComp=color2.style.backgroundColor='#86e0f2';
    </script>
    <div class="container">

        <div class="col-md-6 offset-md-3 mb-5">

            <div class="shadow-sm border" style="width: 100%; border-radius: 10px;">
                <div class="text-center">
                    Order Id : <span style="font-size: 20px;"><b>#<?php echo $row['booking_id']  ?></b></span>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="ml-3 mt-2">
                        Date : <span style="font-size: 20px;"><?php echo $row['booking_date']  ?> </span>
                    </div>
                    <div class="mr-1 mt-2">
                        Time :<i class="fa fa-inr" aria-hidden="true"></i><span
                            style="font-size: 20px;"><?php echo $row['booking_time']  ?></span>

                    </div>
                </div>
                <div class="d-flex justify-content-between mb-2 mt-2">
                    <?php 
    $sql1="select * from `bookings` where `shop_id`='$shop_id' and `booking_id`='$booking_id' and `booking_status`='$booking_status'";
    $result1 = mysqli_query($conn, $sql1);
    $nums = mysqli_num_rows($result1);
    ?>
                    <div class="ml-3" style="font-size: 18px;">
                        Items: <?php echo $nums  ?>
                    </div>
                    <div class="mr-3">

                        <a href="view_bookings.php?bookings_id=<?php echo $row['booking_id'] ?>&shop_id=<?php echo $row['shop_id'] ?>&booking_status=<?php echo $booking_status ?>"
                            class="btn btn-default form-control  mb-2"
                            style="border-radius: 10px;     background: cadetblue; width: 10rem; border-color: greenyellow;"
                            type="submit">View More</a>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <?php  }} 
else if(isset($_POST['all'])){
  


$total_time = 0;
$total_item = 0;
$sql = "select * from `booking_renter` where `shop_id`='$shop_id' order by `date_of_b` desc";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){


$booking_id=$row['booking_id'];

$booking_status=$row['booking_status'];


?>
 <script>
    const color4=document.getElementById('all')
    const ColorChangeAll=color4.style.backgroundColor='#86e0f2';
    </script>
    <div class="container">

        <div class="col-md-6 offset-md-3 mb-5">

            <div class="shadow-sm border" style="width: 100%; border-radius: 10px;">
                <div class="text-center">
                    Order Id : <span style="font-size: 20px;"><b>#<?php echo $row['booking_id']  ?></b></span>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="ml-3 mt-2">
                        Date : <span style="font-size: 20px;"><?php echo $row['booking_date']  ?> </span>
                    </div>
                    <div class="mr-1 mt-2">
                        Time :<i class="fa fa-inr" aria-hidden="true"></i><span
                            style="font-size: 20px;"><?php echo $row['booking_time']  ?></span>

                    </div>
                </div>
                <div class="d-flex justify-content-between mb-2 mt-2">
                    <?php 
    $sql1="select * from `bookings` where `shop_id`='$shop_id' and `booking_id`='$booking_id'";
    $result1 = mysqli_query($conn, $sql1);
    $nums = mysqli_num_rows($result1);
    ?>
                    <div class="ml-3" style="font-size: 18px;">
                        Items: <?php echo $nums  ?>
                    </div>
                    <div>

                        <?php 
                        
                        if($booking_status=="Cancelled"){
                            ?>
                        <h6 style="color:red">Cancelled</h6>
                        <?php 

                        }
                        if($booking_status=="Confirmed"){
                            ?>
                        <h6 style="color:yellowgreen">Confirmed</h6>
                        <?php 

                        }
                        if($booking_status=="Completed"){
                            ?>
                        <h6 style="color:orange">Completed</h6>
                        <?php 

                        }
                        
                        ?>
                    </div>
                    <div class="mr-3">

                        <a href="view_bookings.php?bookings_id=<?php echo $row['booking_id'] ?>&shop_id=<?php echo $row['shop_id'] ?>&booking_status=<?php echo $booking_status ?>"
                            class="btn btn-default form-control  mb-2"
                            style="border-radius: 10px;     background: cadetblue; width: 10rem; border-color: greenyellow;"
                            type="submit">View More</a>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <?php  }} ?>


    <script src="http://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>




    <script>
    $(function() {


        console.log("Ajax")
        $('#conta').click(function() {
            $('.toggle').slideToggle("slow")
        });


        $('#all').click(()=>{
        console.log("Yes You Clicked me")
        })
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

<!--  -->