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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Admin</title>
  </head>

  <body>
    <?php include 'header_admin.php';  ?>

    <div class="container-fluid " style="margin-top: 60px;">
      <div class="row">

        <div class="col-md-9 my-3">

          <div class="row">
            <?php  
            
            $sql = "select * from `shops`";
            $result = mysqli_query($conn, $sql);
            $nums=mysqli_num_rows($result);
            ?>
            <div class="shadow-sm border my-2 mx-1" style="border-radius: 20px; width: 30%; ">
              <div class="text-center mb-2 mx-2" style="padding-top: 10px; font-family:math;opacity: 0.5; ">
                <b>TOTAL SHOPS</b></div>
              <div class="text-center mb-2 mx-4" style="padding-top: 5px; font-size: 30px; font-family:math;">
                <b><?php echo $nums ?> &nbsp; <span style="font-size: 15px; color:greenyellow"> <a href="view_register_shop.php"><i style="color:greenyellow" class="fa fa-arrow-up" aria-hidden="true"></i></a></span>
                </b></div>
            </div>

            <?php  
            
            $sql = "select * from `register_user`";
            $result = mysqli_query($conn, $sql);
            $nums=mysqli_num_rows($result);
            ?>


            <div class="shadow-sm border my-2 mx-1" style="border-radius: 20px; width: 30%; ">
              <div class="text-center mb-2 mx-2" style="padding-top: 10px; font-family:math;opacity: 0.5; ">
                <b>TOTAL USERS</b></div>
              <div class="text-center mb-2 mx-4" style="padding-top: 5px; font-size: 30px; font-family:math;">
                <b><?php echo $nums ?> &nbsp; <span style="font-size: 15px; color:greenyellow"> <a href="view_user.php"><i style="color:greenyellow" class="fa fa-arrow-up" aria-hidden="true"></i></a></span>
                </b></div>
            </div>
            <?php  
            
            $sql = "select * from `booking_renter`";
            $result = mysqli_query($conn, $sql);
            $nums=mysqli_num_rows($result);
            ?>
            <div class="shadow-sm border my-2 mx-1" style="border-radius: 20px; width: 30%; ">
              <div class="text-center mb-2 mx-2" style="padding-top: 10px; font-family:math;opacity: 0.5; ">
                <b>TOTAL BOOKINGS</b></div>
              <div class="text-center mb-2 mx-4" style="padding-top: 5px; font-size: 30px; font-family:math;">
                <b><?php echo $nums ?> &nbsp; <span style="font-size: 15px; color:greenyellow"> <a href="view_total_bookings.php"><i style="color:greenyellow" class="fa fa-arrow-up" aria-hidden="true"></i></a></span>
                </b></div>
            </div>
            <?php  
            
            $sql = "select * from `items`";
            $result = mysqli_query($conn, $sql);
            $nums=mysqli_num_rows($result);
            ?>
            <div class="shadow-sm border my-2 mx-1" style="border-radius: 20px; width: 30%; ">
              <div class="text-center mb-2 mx-2" style="padding-top: 10px; font-family:math;opacity: 0.5; ">
                <b>TOTAL ITEMS</b></div>
              <div class="text-center mb-2 mx-4" style="padding-top: 5px; font-size: 30px; font-family:math;">
                <b><?php echo $nums ?> &nbsp; <span style="font-size: 15px; color:greenyellow"> <a href="items_of_shops.php"><i style="color:greenyellow" class="fa fa-arrow-up" aria-hidden="true"></i></a></span>
                </b></div>
            </div>
            <?php  
            $booking_status="Completed";
            $total_amount=0;
            $sql = "select * from `bookings` where `booking_status`='$booking_status'";
            $result = mysqli_query($conn, $sql);
            $nums=mysqli_num_rows($result);
            while($row=mysqli_fetch_assoc($result)){
$total_amount += $row['item_amount'];
            }
            ?>
            <div class="shadow-sm border my-2 mx-1" style="border-radius: 20px; width: 30%; ">
              <div class="text-center mb-2 mx-2" style="padding-top: 10px; font-family:math;opacity: 0.5; ">
                <b>TOTAL REVENUE</b></div>
              <div class="text-center mb-2 mx-4" style="padding-top: 5px; font-size: 30px; font-family:math;">
                <b><?php echo $total_amount ?>/- &nbsp; <span style="font-size: 15px; color:greenyellow"> <a href="view_register_shop.php"><i style="color:greenyellow" class="fa fa-arrow-up" aria-hidden="true"></i></a></span>
                </b></div>
            </div>
            <?php  
            $booking_status="Cancelled";
            $total_amount=0;
            $sql = "select * from `booking_renter` where `booking_status`='$booking_status'";
            $result = mysqli_query($conn, $sql);
            $nums=mysqli_num_rows($result);
           
            ?>
            <div class="shadow-sm border my-2 mx-1" style="border-radius: 20px; width: 30%; ">
              <div class="text-center mb-2 mx-2" style="padding-top: 10px; font-family:math;opacity: 0.5; ">
                <b>TOTAL CANCELLED</b></div>
              <div class="text-center mb-2 mx-4" style="padding-top: 5px; font-size: 30px; font-family:math;">
                <b><?php echo $nums ?> &nbsp; <span style="font-size: 15px; color:greenyellow"> <a href="view_cancel_bookings.php"><i style="color:greenyellow" class="fa fa-arrow-up" aria-hidden="true"></i></a></span>
                </b></div>
            </div>
            <?php  
            $booking_status="Completed";
            $total_amount=0;
            $sql = "select * from `booking_renter` where `booking_status`='$booking_status'";
            $result = mysqli_query($conn, $sql);
            $nums=mysqli_num_rows($result);
           
            ?>
            <div class="shadow-sm border my-2 mx-1" style="border-radius: 20px; width: 30%; ">
              <div class="text-center mb-2 mx-2" style="padding-top: 10px; font-family:math;opacity: 0.5; ">
                <b>TOTAL COMPLETED</b></div>
              <div class="text-center mb-2 mx-4" style="padding-top: 5px; font-size: 30px; font-family:math;">
                <b><?php echo $nums ?> &nbsp; <span style="font-size: 15px; color:greenyellow"> <a href="completed_bookings.php"><i style="color:greenyellow" class="fa fa-arrow-up" aria-hidden="true"></i></a></span>
                </b></div>
            </div>
            <?php  
            $booking_status="Confirmed";
            $total_amount=0;
            $sql = "select * from `booking_renter` where `booking_status`='$booking_status'";
            $result = mysqli_query($conn, $sql);
            $nums=mysqli_num_rows($result);
           
            ?>
            <div class="shadow-sm border my-2 mx-1" style="border-radius: 20px; width: 30%; ">
              <div class="text-center mb-2 mx-2" style="padding-top: 10px; font-family:math;opacity: 0.5; ">
                <b>TOTAL PENDING</b></div>
              <div class="text-center mb-2 mx-4" style="padding-top: 5px; font-size: 30px; font-family:math;">
                <b><?php echo $nums ?> &nbsp; <span style="font-size: 15px; color:greenyellow"> <a href="pending_order.php"><i style="color:greenyellow" class="fa fa-arrow-up" aria-hidden="true"></i></a></span>
                </b></div>
            </div>
            <?php  
            $user="admin";
            $total_amount=0;
            $sql = "select * from `register_user` where `user`='$user'";
            $result = mysqli_query($conn, $sql);
            $nums=mysqli_num_rows($result);
           
            ?>
            <div class="shadow-sm border my-2 mx-1" style="border-radius: 20px; width: 30%; ">
              <div class="text-center mb-2 mx-2" style="padding-top: 10px; font-family:math;opacity: 0.5; ">
                <b>TOTAL ADMIN</b></div>
              <div class="text-center mb-2 mx-4" style="padding-top: 5px; font-size: 30px; font-family:math;">
                <b><?php echo $nums ?>  &nbsp; <span style="font-size: 15px; color:greenyellow"> <a href="view_register_shop.php"><i style="color:greenyellow" class="fa fa-arrow-up" aria-hidden="true"></i></a></span>
                </b></div>
            </div>
          </div>
          <div class="my-4 text-center" style="font-size: 30px; font-family: math;">TODAYS COLLECTION</div>
          <div class="row">
          <?php  
            $user="admin";
            $date=date("Y-m-d");

            $total_amount=0;
            $sql = "select * from `shops` where `date_of_reg`='$date'";
            $result = mysqli_query($conn, $sql);
            $nums=mysqli_num_rows($result);
           ?>
            <div class="shadow-sm border my-2 mx-1" style="border-radius: 20px; width: 30%; ">
              <div class="text-center mb-2 mx-2" style="padding-top: 10px; font-family:math;opacity: 0.5; ">
                <b>TODAY REGISTER SHOPS</b></div>
              <div class="text-center mb-2 mx-4" style="padding-top: 5px; font-size: 30px; font-family:math;">
                <b><?php echo $nums ?>   &nbsp; <span style="font-size: 15px; color:greenyellow"> <a href="register_shop_single.php"><i style="color:greenyellow" class="fa fa-arrow-up" aria-hidden="true"></i></a></span>
                </b></div>
            </div>
            <?php  
            $user="admin";
            $date=date("Y-m-d");

            $total_amount=0;
            $sql = "select * from `register_user` where `date_of_reg`='$date'";
            $result = mysqli_query($conn, $sql);
            $nums=mysqli_num_rows($result);
           ?>
            <div class="shadow-sm border my-2 mx-1" style="border-radius: 20px; width: 30%; ">
              <div class="text-center mb-2 mx-2" style="padding-top: 10px; font-family:math;opacity: 0.5; ">
                <b>TODAY REGISTER USERS</b></div>
              <div class="text-center mb-2 mx-4" style="padding-top: 5px; font-size: 30px; font-family:math;">
                <b><?php echo $nums ?>    &nbsp; <span style="font-size: 15px; color:greenyellow"> <a href="single_user.php"><i style="color:greenyellow" class="fa fa-arrow-up" aria-hidden="true"></i></a></span>
                </b></div>
            </div>
            <?php  
            $user="admin";
            $date=date("Y/m/d");

            $total_amount=0;
            $sql = "select * from `booking_renter` where `booking_date`='$date'";
            $result = mysqli_query($conn, $sql);
            $nums=mysqli_num_rows($result);
           ?>
            <div class="shadow-sm border my-2 mx-1" style="border-radius: 20px; width: 30%; ">
              <div class="text-center mb-2 mx-2" style="padding-top: 10px; font-family:math;opacity: 0.5; ">
                <b>TODAY BOOKINGS</b></div>
              <div class="text-center mb-2 mx-4" style="padding-top: 5px; font-size: 30px; font-family:math;">
                <b><?php echo $nums ?>     &nbsp; <span style="font-size: 15px; color:greenyellow"> <a href="single_bookings.php"><i style="color:greenyellow" class="fa fa-arrow-up" aria-hidden="true"></i></a></span>
                </b></div>
            </div>
            <?php  
            $user="admin";
            $date=date("Y-m-d");

            $total_amount=0;
            $sql = "select * from `items` where `date`='$date'";
            $result = mysqli_query($conn, $sql);
            $nums=mysqli_num_rows($result);
           ?>
            <div class="shadow-sm border my-2 mx-1" style="border-radius: 20px; width: 30%; ">
              <div class="text-center mb-2 mx-2" style="padding-top: 10px; font-family:math;opacity: 0.5; ">
                <b>TODAY ADDED ITEMS</b></div>
              <div class="text-center mb-2 mx-4" style="padding-top: 5px; font-size: 30px; font-family:math;">
                <b><?php echo $nums ?>   &nbsp; <span style="font-size: 15px; color:greenyellow"> <a href="single_items.php"><i style="color:greenyellow" class="fa fa-arrow-up" aria-hidden="true"></i></a></span>
                </b></div>
            </div>
            <?php  
            $booking_status="Completed";
            $total_amount=0;
            $date=date("Y-m-d");

            $sql = "select * from `bookings` where `booking_status`='$booking_status' and `booking_date`='$date'";
            $result = mysqli_query($conn, $sql);
            $nums=mysqli_num_rows($result);
            while($row=mysqli_fetch_assoc($result)){
$total_amount += $row['item_amount'];
            }
            ?>
            <div class="shadow-sm border my-2 mx-1" style="border-radius: 20px; width: 30%; ">
              <div class="text-center mb-2 mx-2" style="padding-top: 10px; font-family:math;opacity: 0.5; ">
                <b>TODAY REVENUE</b></div>
              <div class="text-center mb-2 mx-4" style="padding-top: 5px; font-size: 30px; font-family:math;">
                <b><?php echo $total_amount ?>/-  &nbsp; <span style="font-size: 15px; color:greenyellow"> <a href="view_register_shop.php"><i style="color:greenyellow" class="fa fa-arrow-up" aria-hidden="true"></i></a></span>
                </b></div>
            </div>
            <?php  
            $booking_status="Cancelled";
            $total_amount=0;
            $date=date("Y/m/d");

            $sql = "select * from `booking_renter` where `booking_status`='$booking_status' and `booking_date`='$date'";
            $result = mysqli_query($conn, $sql);
            $nums=mysqli_num_rows($result);
         
            ?>
            <div class="shadow-sm border my-2 mx-1" style="border-radius: 20px; width: 30%; ">
              <div class="text-center mb-2 mx-2" style="padding-top: 10px; font-family:math;opacity: 0.5; ">
                <b>TODAY CANCELLED</b></div>
              <div class="text-center mb-2 mx-4" style="padding-top: 5px; font-size: 30px; font-family:math;">
                <b><?php echo $nums ?> &nbsp; <span style="font-size: 15px; color:greenyellow"> <a href="single_cancel.php"><i style="color:greenyellow" class="fa fa-arrow-up" aria-hidden="true"></i></a></span>
                </b></div>
            </div>

            <?php  
            $booking_status="Completed";
            $total_amount=0;
            $date=date("Y/m/d");

            $sql = "select * from `booking_renter` where `booking_status`='$booking_status' and `booking_date`='$date'";
            $result = mysqli_query($conn, $sql);
            $nums=mysqli_num_rows($result);
         
            ?>
            <div class="shadow-sm border my-2 mx-1" style="border-radius: 20px; width: 30%; ">
              <div class="text-center mb-2 mx-2" style="padding-top: 10px; font-family:math;opacity: 0.5; ">
                <b>TODAY COMPLETED</b></div>
              <div class="text-center mb-2 mx-4" style="padding-top: 5px; font-size: 30px; font-family:math;">
                <b><?php echo $nums ?> &nbsp; <span style="font-size: 15px; color:greenyellow"> <a href="single_completed.php"><i style="color:greenyellow" class="fa fa-arrow-up" aria-hidden="true"></i></a></span>
                </b></div>
            </div>
            <?php  
            $booking_status="Confirmed";
            $total_amount=0;
            $date=date("Y/m/d");

            $sql = "select * from `booking_renter` where `booking_status`='$booking_status' and `booking_date`='$date'";
            $result = mysqli_query($conn, $sql);
            $nums=mysqli_num_rows($result);
         
            ?>
            <div class="shadow-sm border my-2 mx-1" style="border-radius: 20px; width: 30%; ">
              <div class="text-center mb-2 mx-2" style="padding-top: 10px; font-family:math;opacity: 0.5; ">
                <b>TODAY PENDING</b></div>
              <div class="text-center mb-2 mx-4" style="padding-top: 5px; font-size: 30px; font-family:math;">
                <b><?php echo $nums ?>  &nbsp; <span style="font-size: 15px; color:greenyellow"> <a href="single_pending.php"><i style="color:greenyellow" class="fa fa-arrow-up" aria-hidden="true"></i></a></span>
                </b></div>
            </div>
            <?php  
            $user="admin";
            $date=date("m/d/Y");
            $total_amount=0;
            $sql = "select * from `register_user` where `user`='$user' and `date`='$date'";
            $result = mysqli_query($conn, $sql);
            $nums=mysqli_num_rows($result);
           
            ?>
            <div class="shadow-sm border my-2 mx-1" style="border-radius: 20px; width: 30%; ">
              <div class="text-center mb-2 mx-2" style="padding-top: 10px; font-family:math;opacity: 0.5; ">
                <b>TODAY ADMIN</b></div>
              <div class="text-center mb-2 mx-4" style="padding-top: 5px; font-size: 30px; font-family:math;">
                <b><?php echo $nums ?> &nbsp; <span style="font-size: 15px; color:greenyellow"> <a href="view_register_shop.php"><i style="color:greenyellow" class="fa fa-arrow-up" aria-hidden="true"></i></a></span>
                </b></div>
            </div>
          </div>
        </div><hr><hr>
        <div class="col-md-3">
          <button type="button" id="conta" style="margin-top:10px; height:65px;" class="shadow-sm form-control">Categories</button>

          <div class="toggle " style="display: none;">


            <?php include 'categories_admin.php'; ?>

          </div>
        </div>


      </div>


    </div>


    <script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>




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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>

  </html>
<?php  } ?>