<?php

include '../Connection/connection.php';
session_start();

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){




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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Pay To GG</title>
</head>

<body>
<div class="shadow-sm border bg-info" style="margin-top: 20px; width:100%;  border-radius: 20px;">
            <div class="text-center mb-3 mt-1" style="font-size: 25px; padding-top: 12px; font-family: math;"><b> PAY TO GROOMIGROMER 
                    </b></div>
        </div>
</div>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php 
include '../Connection/connection.php';
$user_id=$_SESSION['user_id'];

$result=mysqli_query($conn,"select * from `shops` where `user_id`='$user_id'");
$row=mysqli_fetch_assoc($result);
$shop_id=$row['shop_id'];
$total_comision=0;
$total_amount=0;
$to_coustmer=0;
$total_earning=0;
$result1=mysqli_query($conn,"select * from `shopkeper_info` where `shop_id`='$shop_id' and `offers_applied`!= ''  and `status`='Pending'");
$nums=mysqli_num_rows($result);
if($nums > 0){
while($row=mysqli_fetch_assoc($result1)){
    $total_comision +=$row['comission'];
    $total_amount +=$row['total_amount'];
    $total_earning +=$row['earn'];
    $to_coustmer +=$row['to_coustmer'];
?>

                <div class="shadow-sm border bg-white my-4 pt-2 pb-2 bl-3 pr-3" style="width:100%">
                    <div class="d-flex justify-content-between">

                        <div class="ml-2" style="font-size:10px; font-family:math;"><b>Booking Id :
                                #<?php echo $row['booking_id'];    ?></b></div>
                        <div class="mr-2" style="font-size:10px; font-family:math;"><b>
                                Total Earnings</b></div>
                        <div class="mr-2" style="font-size:10px; font-family:math;"><b>
                                Total Amount &nbsp;<i class="fa fa-inr"
                                    aria-hidden="true"></i>&nbsp;<?php echo $row['total_amount'];    ?></b></div>




                    </div>

                    <div class="text-center" style="font-size:35px; font-family:math;"><b>
                            <i class="fa fa-inr" aria-hidden="true"></i>&nbsp;<?php echo $row['earn'];    ?></b></div>

                            <div class="d-flex justify-content-between">


<div class="mr-2" style="font-size:10px; font-family:math;"><b>
        Total Amount Got :</b><i class="fa fa-inr"
            aria-hidden="true"></i>&nbsp;<?php echo $row['offers_applied'];?></b></div>
<div class="mr-2" style="font-size:10px; font-family:math;"><b>
        Amount To Get &nbsp;<i class="fa fa-inr"
            aria-hidden="true"></i>&nbsp;<?php echo $row['to_coustmer'];?></b></div>




</div>
                    <div class="d-flex justify-content-center">

                        <button type="submit" style="width:18rem;" class="btn btn-outline-info">View Full
                            Detaills</button>
                    </div>


                </div>

                <?php


                                                }


                                                }

                                                else{

                                                    echo "No Payment Left";
                                                }
                                                ?>

            </div>

            <div class="col-md-4">
                <div class="shadow-sm my-2 border fixed-bottom" style="border-radius:10px;" >
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn-default border form-control my-2 mx-2"
                            style="font-family:math; font-size:20px;background-color:white; width:20rem;" disabled>Amount From GG</button>
                        <button type="" class="btn form-control my-2 mx-2"

                            style="font-family:math; font-size:20px;background-color:yellowgreen ; width:20rem;" id="total_earn"> <i
                                class="fa fa-inr" aria-hidden="true"></i>&nbsp;<?php echo $to_coustmer?>&nbsp;<i
                                class="fa fa-angle-down" aria-hidden="true"></i></button>
                    </div>

                    <div class="card" id="payment_page" style="display:none">
                        <div class="card-header text-center bg-info" style="font-size:20px; font-family:math">GET FROM GG</div>
                        
                    <div class="card-body" >
                        <div class="d-flex justify-content-between my-3">
                                <div class="text-center" style="font-size:20px; font-family:math;">Your Total Bookings :</div>
                                <div class="text-center" style="font-size:20px; font-family:math;"><?php  echo $nums   ?></div>


                            </div>

                            <div class="d-flex justify-content-between my-3">
                                <div class="text-center" style="font-size:20px; font-family:math;">Bookings Total Amount :</div>
                                <div class="text-center" style="font-size:20px; font-family:math;"><i
                                class="fa fa-inr" aria-hidden="true"></i>&nbsp;<?php  echo $total_amount   ?></div>


                            </div>

                             <div class="d-flex justify-content-between my-3">
                                <div class="text-center" style="font-size:20px; font-family:math;">Comission Per Bookings</div>
                                <div class="text-center" style="font-size:20px; font-family:math;">10%</div>


                                            </div>
                            <div class="d-flex justify-content-between my-3">
                                <div class="text-center" style="font-size:20px; font-family:math;">Your Total Earning :</div>
                                <div class="text-center" style="font-size:20px; font-family:math;"><i
                                class="fa fa-inr" aria-hidden="true"></i>&nbsp;<?php  echo $total_earning   ?></div>


                            </div><hr>
                            


                            <div class="d-flex justify-content-between my-3">
                                <div class="text-center" style="font-size:25px; font-family:math;">Amount To Get :</div>
                                <div class="text-center" style="font-size:25px; font-family:math;"><i
                                class="fa fa-inr" aria-hidden="true"></i>&nbsp;<?php  echo $to_coustmer   ?></div>


                            </div>



                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="http://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>


    <script>
    $(document).ready(() => {

        console.log("Ajax")
        $('#total_earn').click(function() {
            $('#payment_page').slideToggle("slow")
        });
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>


</body>

</html>

<?php } ?>