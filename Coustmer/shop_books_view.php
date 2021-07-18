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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <title>Shop View</title>
</head>

<body>
    <?php
    session_start();
    include '../Connection/connection.php';
    include 'ip.php';
    $shop_id = $_GET['shop_id'];

    $sql = "select * from `shops` where `shop_id`='$shop_id'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {



    ?>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../Admin/Shops Image/<?php echo $row['img_1'] ?>" width="100%" height="300px"
                    class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="../Admin/ShopsImage/<?php echo $row['img_2'] ?>" width="100%" height="300px"
                    class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="../Admin/Shops Image/<?php echo $row['img_3'] ?>" width="100%" height="300px"
                    class="d-block w-100" alt="">
            </div>
        </div>
    </div>



    <div class="container">



        <div class="card-body" style="width: 100%;">


            <div class="row">
                <div class="col-md-8">
                    <div class=""><a href="" class="nav-link" style="color:orange; font-family: math;"><b> <i
                                    class="fa fa-map-marker" aria-hidden="true"></i>
                                &nbsp; Search Shop By Location</b></a></div>
                    <div class="mt-2" style="font-size: 20px;  font-family: math ;">

                        <b><?php echo $row['shop_name'] ?></b>

                    </div>


                    <div class=" " style="font-family:math;">West Bengal , <?php echo $row['shop_dist'] ?> ,
                        <?php echo $row['shop_pin'] ?>
                        ,<?php echo $row['dist'] ?>
                    </div>


                </div>


                <div class="col-md-4 mt-1 ">
                <?php
 if($row['rating'] >=0 && $row['rating']<=1){




?>
                    <button class="btn btn mt-2" style="background-color: red;" disabled>
                        <?php echo $row['rating'] ?>&nbsp;<i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;&nbsp; Poor


                    </button>
<?php
 }
                    ?>

<?php
 if($row['rating'] >=1.1 && $row['rating']<=2){




?>
                    <button class="btn btn mt-2" style="background-color: orange;" disabled>
                        <?php echo $row['rating'] ?>&nbsp;<i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;&nbsp; Average


                    </button>
<?php
 }
                    ?>
                    <?php
 if($row['rating'] >=2.1 && $row['rating']<=3){




?>
                    <button class="btn btn mt-2" style="background-color: yellow;" disabled>
                        <?php echo $row['rating'] ?>&nbsp;<i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;&nbsp; Good


                    </button>
<?php
 }
                    ?>

<?php
 if($row['rating'] >=3.1 && $row['rating']<=4){




?>
                    <button class="btn btn mt-2" style="background-color: yellowgreen;" disabled>
                        <?php echo $row['rating'] ?>&nbsp;<i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;&nbsp; Very Good


                    </button>
<?php
 }
                    ?>

<?php
 if($row['rating'] >=4.1 && $row['rating']<=5){




?>
                    <button class="btn btn mt-2" style="background-color: green;" disabled>
                        <?php echo $row['rating'] ?>&nbsp;<i class="fa fa-star-o" aria-hidden="true"></i>&nbsp;&nbsp; Execellent


                    </button>
<?php
 }
                    ?>
                </div>
            </div>

            <button type="button" class="btn btn mt-3" style="background-color:#f9dd884f;;; font-family: math;">We
                Provide Sanatized Salons And Parlour || Your Safety Is Our First Priority </button>
            <div class="mx-4 mt-3" style="font-family: math; font-size: 20px;"><i><b>Ameneties :</b></i></div>
            <div class="text-center" style="font-size: 25px;">
                <i class="fa fa-<?php echo $row['amenities'] ?>" aria-hidden="true"></i>&nbsp;&nbsp;<i
                    class="fa fa-<?php echo $row['amenities1'] ?>" aria-hidden="true"></i>&nbsp;&nbsp;<i
                    class="fa fa-<?php echo $row['amenities2'] ?>" aria-hidden="true"></i>&nbsp;&nbsp;<i
                    class="fa fa-<?php echo $row['amenities3'] ?>" aria-hidden="true"></i>&nbsp;&nbsp;<i
                    class="fa fa-<?php echo $row['amenities4'] ?>" aria-hidden="true"></i>&nbsp;&nbsp;
            </div>



        </div>

        <div class="d-flex justify-content-between">

            <button type="button" id="working_hours" class="btn mt-4 mx-1 form-control" style="border-radius: 9px;border-color:cyan;
font-family: math;">Working
                Hours&nbsp;<i class="fa fa-angle-double-down" aria-hidden="true"></i>
            </button>
            <button type="button" id="details_shops" class="btn mt-4 mx-1 form-control" style="border-radius: 9px; border-color:cyan;
font-family: math;">
                Shop
                Details&nbsp;<i class="fa fa-angle-double-down" aria-hidden="true"></i>
            </button>
        </div>
        <div style="overflow-x: auto;">
            <div class="d-flex justify-content-between">

                <div class="card-body border mx-1 my-4" id="working_hour"
                    style="background-color:  gainsboro;;border-radius: 9px; display:none;">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col"><b>Days</b></th>
                                <th scope="col"><b> Opening Time</b></th>
                                <th scope="col"><b> Closing Time</b>
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
  
  


    $sql = "select * from `shops_time` where `shop_id`='$shop_id'";
    $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);



    ?>
                            <tr>

                                <td><?php echo $row['opening_days1'] ?></td>
                                <td><?php echo $row['opening_time1'] ?></td>
                                <td><?php echo $row['closing_time1'] ?></td>
                            </tr>
                            <tr>

                                <td><?php echo $row['opening_days2'] ?></td>
                                <td><?php echo $row['opening_time2'] ?></td>
                                <td><?php echo $row['closing_time2'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $row['opening_days3'] ?></td>
                                <td><?php echo $row['opening_time3'] ?></td>
                                <td><?php echo $row['closing_time3'] ?></td>
                            </tr>
                            <tr>

                                <td><?php echo $row['opening_days4'] ?></td>
                                <td><?php echo $row['opening_time4'] ?></td>
                                <td><?php echo $row['closing_time4'] ?></td>
                            </tr>
                            <tr>
                                <td><?php echo $row['opening_days5'] ?></td>
                                <td><?php echo $row['opening_time5'] ?></td>
                                <td><?php echo $row['closing_time5'] ?></td>
                            </tr>
                            <tr>

                                <td><?php echo $row['opening_days6'] ?></td>
                                <td><?php echo $row['opening_time6'] ?></td>
                                <td><?php echo $row['closing_time6'] ?></td>
                            </tr>
                            <tr>

                                <td><?php echo $row['opening_days7'] ?></td>
                                <td><?php echo $row['opening_time7'] ?></td>
                                <td><?php echo $row['closing_time7'] ?></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-body border mx-1 my-4" id="details_shop"
                style="background-color:  gainsboro;;border-radius: 9px; display:none;">
                <?php
  
  


  $sql = "select * from `shops` where `shop_id`='$shop_id'";
  $result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);



  ?>
                <div class="text-center my-2" style="font-size: 20px; font-family:math;"><?php echo $row['shop_name']  ?></div>
                <hr>
                <div class="mx-2 my-1" style="font-size: 20px; font-family: math;">Description :&nbsp; <small><?php echo $row['shop_desp']  ?></small> </div>

                        <div class="mx-2" style="font-size: 20px; font-family: math;"">Ameneties : &nbsp; <small>There are few Ameneties in Salon They Offer : 
                            <ul>
                                <li><i class="fa fa-<?php echo $row['amenities'] ?>" aria-hidden="true"></i>&nbsp;<?php  echo strtoupper($row['amenities'])  ?></li>
                                <li><i class="fa fa-<?php echo $row['amenities1'] ?>" aria-hidden="true"></i>&nbsp;<?php  echo strtoupper($row['amenities1'])  ?></li>
                                <li><i class="fa fa-<?php echo $row['amenities2'] ?>" aria-hidden="true"></i>&nbsp;<?php  echo strtoupper($row['amenities2'])  ?></li>
                                <li><i class="fa fa-<?php echo $row['amenities3'] ?>" aria-hidden="true"></i>&nbsp;<?php  echo strtoupper($row['amenities3'])  ?></li>
                                <li><i class="fa fa-<?php echo $row['amenities4'] ?>" aria-hidden="true"></i>&nbsp;<?php  echo strtoupper($row['amenities4'])  ?></li>
                            </ul>

                        <div class="mx-2" style="font-size: 20px; font-family: math;"">Product : &nbsp; <small>We Use Loreal Products</small> </div>

                        <div class="mx-2" style="font-size: 20px; font-family: math;"">Worker : &nbsp; <small>We Have <?php echo $row['chairs_no']  ?> Workers In Our Shops And All Are Fully Trained And Exprienced</small> </div>


                       


            </div>
            <button type="submit" class="btn mt-4 mx-1 form-control" style="border-radius: 9px; border-color:cyan; display: none;
font-family: math;">
                Shop
                Details&nbsp;<i class="fa fa-angle-double-down" aria-hidden="true"></i>
            </button>
        </div>


        <hr>
    </div>
    <?php } ?>

    <div class="container-fluid">
        <div class="row">
        
            <div class="col-md-8 mb-5">
                <?php


                $shop_id = $_GET['shop_id'];
                $status = 1;
                $verification = "yes";
                $sql = "select * from `items` where `shop_id`='$shop_id' and `verification`='$verification' and `status`='$status'";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {

                ?>
                <!-- Items -->
                <div class="shadow-sm border pb-2 mb-3" style="width: 100%; height:100px; border-radius:10px;">
                    <div class="d-flex justify-content-between">
                        <div class="ml-1 mt-4 mx-2" style="font-family: cursive; font-size: 15px;">
                            <b><?php echo $row['item_in_shop'] ?></b>
                            &nbsp; <span><small>(<?php echo $row['time_taken'] ?> min)</small> </span>
                        </div>
                        <div class="ml-1 mt-4" style="font-family: 'Lobster', cursive;"><?php echo $row['price'] ?>/-
                        </div>

                        <?php



                            $item_id = $row['item_id'];
                            $user_ip1 = getUserIp();

                            $sql6 = "select * from `cart` where `user_ip`='$user_ip1'  and `shop_id`='$shop_id' and `item_id`='$item_id'";
                            $result6 = mysqli_query($conn, $sql6);
                            $nums6 = mysqli_num_rows($result6);
                            
                            if ($nums6 > 0) {
                              
                                echo '<a href="delete_item.php?item_id=' . $item_id . '&shop_id=' . $shop_id . '" class="ml-1 mt-4 btn btn-default form-control mx-2" style="width:8rem; border-color:red;">REMOVE</a>';
                            } else {
                                $result9=mysqli_query($conn,"select * from `cart` where `user_ip`='$user_ip1'  and `shop_id`!='$shop_id'");
                                if(mysqli_num_rows($result9)>0){
                                    $row=mysqli_fetch_assoc($result9);
                                    $shop_id1=$row['shop_id'];

                                    ?>
                                <a href="#" data-toggle="modal" data-target="#popup" class="ml-1 mt-4 btn btn-default form-control mx-2" style="width:8rem; border-color:blueviolet;"><i class="fa fa-plus" aria-hidden="true"></i>ADD</a>
<!-- Pop Up -->


<!-- Modal -->
<div class="modal fade" id="popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
     
      <div class="modal-body">
    <p>You Call Book Your Grooming Item Only From One Partner Shop , So Do You Want To Remove You Item In Cart </p>
    <div class="d-flex justify-content-between">
    <a href="clear_cart.php?user_ip=<?php echo $user_ip1   ?>&shop_id=<?php echo $shop_id ?>&item_id=<?php echo $item_id ?>" type="submit" class="btn btn-danger mx-1 form-control">Clear Cart</a>
    <a href="shop_books_view.php?shop_id=<?php   echo $shop_id1 ?>" type="submit" class="btn btn-success mx-1 form-control">Continue</a>

    
    </div>
      </div>
     
    </div>
  </div>
</div>

<?php
                                }
                                else{

                                echo '<a href="cart.php?item_id=' . $item_id . '" class="ml-1 mt-4 btn btn-default form-control mx-2" style="width:8rem; border-color:blueviolet;"><i class="fa fa-plus" aria-hidden="true"></i>ADD</a>';
                               
                                }
                            }
                            ?>
                    </div>
                    

                </div>
                <!-- Items -->
                <?php } ?>
            </div> 


            <?php




            $user_ip = getUserIp();
            $total_time1= 0;
                        $total_amount1 = 0;

            $sql4 = "select * from `cart` where `shop_id`='$shop_id' and `user_ip`='$user_ip'";
            $result4 = mysqli_query($conn, $sql4);
            if (mysqli_num_rows($result4) > 0) {
                while ($row = mysqli_fetch_assoc($result4)) {
                    $total_time1 += $row['time_taken'];
                    $total_amount1 += $row['item_price'];
                }
            ?>
            <div class="col-md-4">
                <div class="shadow-sm border bg-white fixed-bottom">
                    <div class="d-flex justify-content-between my-2">
                        <button class="btn btn-default mr-2 ml-2 shadow-sm"
                            style="width: 25rem; font-size: 18px; font-family: cursive;"><b>Total Amount : </b></button>
                        <button class="btn btn-danger mr-2 ml-2 shadow-sm" id="card_total"
                            style="width: 20rem; background-color: red; font-size: 20px;; font-family: cursive;"><i
                                class="fa fa-inr" aria-hidden="true"></i>
                            &nbsp;<?php echo $total_amount1  ?>&nbsp;&nbsp;<i class="fa fa-angle-up"
                                aria-hidden="true"></i>

                        </button>

                    </div>
                </div>
                <!-- Cart Section -->
                <div class="shadow-sm  border mb-5" id="card_totals" style="width: 100%; display: none;">

                    <?php

                        $shop_id = $_GET['shop_id'];
                        $total_time = 0;
                        $total_amount = 0;

                        $sql = "select * from `cart` where `user_ip`='$user_ip'  and `shop_id`='$shop_id'";
                        $result = mysqli_query($conn, $sql);
                        $nums = mysqli_num_rows($result);



                        while ($row = mysqli_fetch_assoc($result)) {
                            $total_time += $row['time_taken'];
                            $total_amount += $row['item_price'];

                        ?>
                    <div class="d-flex justify-content-between my-4">
                        <div class="ml-3" style="font-family: cursive; font-size: 15px;"><?php echo $row['item_name'] ?>
                        </div>

                        <div class="mx-1" style="font-size: 19px; font-family: 'Pacifico', cursive;"><i
                                class="fa fa-inr" aria-hidden="true"></i>
                            <?php echo $row['item_price'] ?></div>

                        <a href="delete_item.php?item_id=<?php echo $row['item_id'] ?>&shop_id=<?php echo $row['shop_id'] ?>"
                            type="submit" class="btn btn-danger mr-2"><i class="fa fa-trash-o"
                                aria-hidden="true"></i></a>


                    </div>
                    <hr>

                    <?php } ?>
                    <hr>
                    <div class="d-flex justify-content-between my-4">
                        <div class="mx-4" style="font-size: 15px; font-family:math">Total Time :
                            </div>
                        <div class="mx-4" style="font-size: 15px; font-family:math"><?php echo $total_time ?> min
                            </div>
                    </div>
                    <div class="d-flex justify-content-between my-4">
                        <div class="mx-4" style="font-size: 15px; font-family:math">Total item :
                        </div>
                        <div class="mx-4" style="font-size: 15px; font-family:math"><?php echo $nums ?></div>
                    </div>
                    <hr>

                    <!-- <a href="" class="mx-4  mb-1 nav-link" data-toggle="modal" data-target="#coupon"
                        style="color: black;" id="toggle" ;><i class="fa fa-money" aria-hidden="true"></i>&nbsp; View
                        Your Offers
                    </a> -->




                    <!-- <div class="shadow-sm bg-info border " style="width: 100%;">

                        <div class="d-flex justify-content-between">
                            <div class="mx-2 mb-4 mt-4" style="font-family: 'Pacifico', cursive; font-size: 20px;;">
                                Total Amount :</div>
                            <div class="mx-2 mb-4 mt-4" style="font-size: 19px; font-family: 'Pacifico', cursive;"><i
                                    class="fa fa-inr" aria-hidden="true"></i>
                                <?php echo $total_amount ?></div>
                        </div>
                            </div> -->
                            <!-- Promocode Code -->
                    <!-- <form action="<?php $_SERVER['REQUEST_URI'] ?>" class="mx-4" method="post">
                        <div class="d-flex justify-content-between">
                            <div class="input-group mt-1 mb-2">

                                <input type="text" class="form-control" name="pcode" placeholder="Promo Code"
                                    aria-label="ADD PROMO CODE" aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" value="submit" name="submit" type="submit"
                                        id="button-addon2">Verify</button>

                                </div>

                            </div>
                        </div>
                    </form> -->
                                                <!-- Promocode Code -->

                    <div class="shadow-sm bg-info border " style="width: 100%;">

                        <div class="d-flex justify-content-between">
                            <div class="mx-2 mb-4 mt-4" style="font-family:math ; font-size: 20px;;">
                                Total Amount :</div>
                            <div class="mx-2 mb-4 mt-4" style="font-size: 19px; font-family:math; "><i
                                    class="fa fa-inr" aria-hidden="true"></i>
                                <?php echo $total_amount ?></div>
                        </div>

                    </div>
                                                <!-- Promocode Code -->

                    <!-- <?php
                        if (isset($_POST['submit'])) {
                            $grandtotal = 0;
                            $code = $_POST['pcode'];

                            $sql = "select * from `coupon_code` where `coupon_name`='$code'";
                            $result = mysqli_query($conn, $sql);
                            $nums = mysqli_num_rows($result);
                            if ($nums == 1) {

                                $row = mysqli_fetch_assoc($result);
                                $value = $row['value'];
                                $grandtotal = $total_amount - $value;



                                if ($row['coupon_name'] === $code) {
                                    $sql6 = "select * from `coupon_code` where `coupon_name`='$code'";
                                    $result6 = mysqli_query($conn, $sql6);
                                    $row6 = mysqli_fetch_assoc($result6);

                                    if ($total_amount >= $row['starting_amount'] && $total_amount <= $row['amount']) {
                                        $result=mysqli_query($conn,"update `cart` set `total_amount`='$grandtotal' where `user_ip`='$user_ip'  and `shop_id`='$shop_id'");
                                        echo '<p class="text-center" style="color:green;">' . $code . ' PromoCode Applied Successfully</p>';




                        ?>

                    <div class="d-flex justify-content-between">
                        <div class="mx-2 mb-4 mt-4" style="font-family: 'Pacifico', cursive; font-size: 20px;;">
                            Offers Applied :</div>
                        <?php
                                            ?>
                        <div class="mx-2 mb-4 mt-4" style="font-size: 19px; font-family: 'Pacifico', cursive;"><i
                                class="fa fa-inr" aria-hidden="true"></i>
                            <?php echo -$value ?></div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="mx-2 mb-4 mt-4" style="font-family: 'Pacifico', cursive; font-size: 20px;;">
                            Grand Total :</div>
                        <?php
                                            ?>
                        <div class="mx-2 mb-4 mt-4" style="font-size: 19px; font-family: 'Pacifico', cursive;"><i
                                class="fa fa-inr" aria-hidden="true"></i>
                            <?php echo $grandtotal ?></div>
                    </div>
                    <?php
                                    } else {
                                        echo '<p class="text-center" style="color:red;">Wrong Promocode</p>';
                                    }
                                }
                            } else {
                                echo '<p class="text-center" style="color:red;">Wrong Promocode</p>';
                            }
 






                            ?>


                    <?php } ?> -->
                                                <!-- Promocode Code -->



                    <?php




                        ?>


                    <?php
                        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

                        ?>
                    <div class="d-flex justify-content-center">
                        <a href="check_out.php" type="submit" class="btn btn-warning form-control mt-3 mb-3"
                            style="width: 18rem; height: 40px;">CHECKOUT</a>
                    </div>
                    <?php



                        } else {

                        ?>
                    <div class="d-flex justify-content-center">
                        <a href="../Login/login_user.php" type="submit"
                            class="btn btn-warning form-control ml-3 mr-3 mt-3 mb-3" style=" height: 40px;">LOGIN
                            AND CHECKOUT</a>
                    </div>
                    <?php
                                }
                            } else {
                            }


                                ?>




                </div>










            </div>







        </div>











    </div>


    <script src="http://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>


    <script>
    $(document).ready(() => {

        console.log("Ajax")
        $('#toggle').click(function() {
            $('#conta').slideToggle("slow")
        });

        $("#card_total").click(() => {
            $("#card_totals").slideToggle("slow")
        })


        $('#working_hours').click(function() {

            $('#working_hour').slideToggle("slow")


        });

        $("#details_shops").click(() => {
            $("#details_shop").slideToggle("slow")
        })
    });
    </script>
    <?php include 'coupon.php'   ?>
    <!--  <div class="col-md-3">

                <div class="shadow-sm  style="width:100%; height:400px;"></div>

            </div> -->

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


<!-- 
     -->