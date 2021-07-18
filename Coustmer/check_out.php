<?php
include '../Connection/connection.php';
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {


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
    <link rel="stylesheet" type="text/css" href="../css/jquery-ui.css">
    <script src="../javascript/jquery-1.12.4.js"></script>
    <script src="../javascript/jquery-ui.js"></script>
    <title>Checkout Page</title>
</head>

<body>

    <div class="container">

        <div class="shadow-sm border bg-info" style="margin-top: 20px; width:100%; height:70px; border-radius: 20px;">
            <div class="text-center" style="font-size: 25px; padding-top: 12px; font-family: math;"><b> Checkout Your
                    Booking
                </b></div>
        </div>
        <div class="col-md-6 offset-md-3">
            <div class="shadow-sm my-4 border" style="width:100% ; border-radius: 15px;">
                <div class="text-center pt-3" style="font-size: 20px; font-family: math;"><b>CHOOSE YOUR TIME SLOT</b>
                </div>
                <hr>
                <?php
                    $user_id = $_SESSION['user_id'];
                    $total_time11 = 0;
                    $total_amount = 0;

                    $user_id = $_SESSION['user_id'];
                    $sql3 = "select * from `cart` where `user_id`='$user_id'";
                    $result3 = mysqli_query($conn, $sql3);
                    while ($row = mysqli_fetch_assoc($result3)) {
                        $total_time11 += $row['time_taken'];
                        $shop_id = $row['shop_id'];
                    }


                    ?>


                <?php

                    $date = date("d F");



                    $date1 = date("d F", strtotime($date . ' + 1 Days'));


                    $date2 = date("d F", strtotime($date . ' + 2 Days'));

                    $date3 = date("d F", strtotime($date . ' + 3 Days'));

                    $date4 = date("d F", strtotime($date . ' + 4 Days'));

                    $date5 = date("d F", strtotime($date . ' + 5 Days'));

                    $date6 = date("d F", strtotime($date . ' + 6 Days'));

                    $date7 = date("d F", strtotime($date . ' + 7 Days'));

                    $date8 = date("d F", strtotime($date . ' + 8 Days'));

                    $date9 = date("d F", strtotime($date . ' + 9 Days'));

                    $date10 = date("d F", strtotime($date . ' + 10 Days'));

                    $date11 = date("d F", strtotime($date . ' + 11 Days'));

                    $date12 = date("d F", strtotime($date . ' + 12 Days'));

                    $date13 = date("d F", strtotime($date . ' + 13 Days'));

                    $date14 = date("d F", strtotime($date . ' + 14 Days'));

                    $date15 = date("d F", strtotime($date . ' + 15 Days'));



                    $datest = date("Y/m/d");



                    $datest1 = date("Y/m/d", strtotime($date . ' + 1 Days'));


                    $datest2 = date("Y/m/d", strtotime($date . ' + 2 Days'));

                    $datest3 = date("Y/m/d", strtotime($date . ' + 3 Days'));

                    $datest4 = date("Y/m/d", strtotime($date . ' + 4 Days'));

                    $datest5 = date("Y/m/d", strtotime($date . ' + 5 Days'));

                    $datest6 = date("Y/m/d", strtotime($date . ' + 6 Days'));

                    $datest7 = date("Y/m/d", strtotime($date . ' + 7 Days'));

                    $datest8 = date("Y/m/d", strtotime($date . ' + 8 Days'));

                    $datest9 = date("Y/m/d", strtotime($date . ' + 9 Days'));

                    $datest10 = date("Y/m/d", strtotime($date . ' + 10 Days'));

                    $datest11 = date("Y/m/d", strtotime($date . ' + 11 Days'));

                    $datest12 = date("Y/m/d", strtotime($date . ' + 12 Days'));

                    $datest13 = date("Y/m/d", strtotime($date . ' + 13 Days'));

                    $datest14 = date("Y/m/d", strtotime($date . ' + 14 Days'));

                    $datest15 = date("Y/m/d", strtotime($date . ' + 15 Days'));









                    $dates = date("l");


                    $dates1 = date("l", strtotime($dates . ' + 1 Days'));


                    $dates2 = date("l", strtotime($dates . ' + 2 Days'));
                    $dates3 = date("l", strtotime($dates . ' + 3 Days'));
                    $dates4 = date("l", strtotime($dates . ' + 4 Days'));
                    $dates5 = date("l", strtotime($dates . ' + 5 Days'));

                    $dates6 = date("l", strtotime($dates . ' + 6 Days'));

                    $dates7 = date("l", strtotime($dates . ' + 7 Days'));
                    $dates8 = date("l", strtotime($dates . ' + 8 Days'));
                    $dates9 = date("l", strtotime($dates . ' + 9 Days'));
                    $dates10 = date("l", strtotime($dates . ' + 10 Days'));
                    $dates11 = date("l", strtotime($dates . ' + 11 Days'));
                    $dates12 = date("l", strtotime($dates . ' + 12 Days'));
                    $dates13 = date("l", strtotime($dates . ' + 13 Days'));
                    $dates14 = date("l", strtotime($dates . ' + 14 Days'));
                    $dates15 = date("l", strtotime($dates . ' + 15 Days'));
                    date_default_timezone_set("Asia/Kolkata");
                    $time_of_current = date("h:iA");
                    echo date("H:i");;
                    ?>
                <div class="just" style="overflow-x: auto;">

                    <div class="d-flex justify-content-between">


                        <div class="ml-2">
                            <?php
                                $result4 = mysqli_query($conn, "select * from `shops_time` where `shop_id`='$shop_id'");
                                $row = mysqli_fetch_assoc($result4);
                                if ($row['closed_shop'] == $dates) {




                                ?>

                            <button type="button" class="btn btn-danger form-control mb-4 mt-2" style="width:18rem;"
                                id="day3" disabled>Shop Is Closed For Today</button>

                            <?php  } else { ?>
                            <button type="button" class="btn btn-outline-info form-control mb-4 mt-2"
                                style="width:18rem; " id="day"><i class="fa fa-angle-down"
                                    aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $dates; ?>&nbsp;&nbsp;<?php echo $date; ?></button>
                            <?php } ?>
                            <div class="shadow-sm my-1 bg-dark" style="width:18rem; border-radius: 10px; display: none;"
                                id="days">
                                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post" id="day_ones"
                                    class=" pb-5 pt-5 pr-2 pl-2">

                                    <div class="form-group">
                                        <select name="time" id="time" class="form-control bg-white"
                                            style="height: 40px;">
                                            <?php
                                                date_default_timezone_set("Asia/Kolkata");
                                                $time_of_current = date("h:iA");
                                                echo date("H:iA");

                                                $sql3 = "select * from `time_managem` where `total_time`='$total_time11' and `shop_id`='$shop_id' and `no_of_chairs`!='' and `time`>='$time_of_current' and `status`='' and `date`!='$datest'";
                                                $result3 = mysqli_query($conn, $sql3);
                                                while ($row = mysqli_fetch_assoc($result3)) {




                                                ?>

                                            <option value="<?php echo $row['time']  ?>"><?php echo $row['time']  ?>
                                            </option>
                                            <?php  }  ?>




                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="date" value="<?php echo $datest; ?>">
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-outline-info form-control"
                                            style="width: 18rem;">Check</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="ml-2">
                            <?php
                                $result4 = mysqli_query($conn, "select * from `shops_time` where `shop_id`='$shop_id'");
                                $row = mysqli_fetch_assoc($result4);
                                if ($row['closed_shop'] == $dates1) {




                                ?>
                            <button type="button" class="btn btn-danger form-control mb-4 mt-2" style="width:18rem;"
                                id="day3" disabled>Shop Is Closed For Today</button>

                            <?php  } else { ?>
                            <button type="button" class="btn btn-outline-info form-control mb-4 mt-2"
                                style="width:18rem;" id="day1"><i class="fa fa-angle-down"
                                    aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $dates1; ?>&nbsp;&nbsp;<?php echo $date1; ?></button>

                            <?php } ?>
                            <div class="shadow-sm my-1 bg-dark" style="width:18rem; border-radius: 10px; display: none;"
                                id="days1">
                                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post" id="day_ones"
                                    class=" pb-5 pt-5 pr-2 pl-2">

                                    <div class="form-group">
                                        <select name="time" id="time" class="form-control bg-white"
                                            style="height: 40px;">
                                            <?php

                                                $sql3 = "select * from `time_managem` where `total_time`='$total_time11' and `shop_id`='$shop_id' and `no_of_chairs`!='' and `status`='' and `date`!='$datest1'";
                                                $result3 = mysqli_query($conn, $sql3);
                                                while ($row = mysqli_fetch_assoc($result3)) {





                                                ?>

                                            <option value="<?php echo $row['time']  ?>"><?php echo $row['time']  ?>
                                            </option>
                                            <?php  }  ?>



                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="date" value="<?php echo $datest1; ?>">
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-outline-info form-control"
                                            style="width: 18rem;">Check</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="ml-2">
                            <?php
                                $result4 = mysqli_query($conn, "select * from `shops_time` where `shop_id`='$shop_id'");
                                $row = mysqli_fetch_assoc($result4);
                                if ($row['closed_shop'] == $dates2) {




                                ?>
                            <button type="button" class="btn btn-danger form-control mb-4 mt-2" style="width:18rem;"
                                id="day3" disabled>Shop Is Closed For Today</button>

                            <?php  } else { ?>
                            <button type="button" class="btn btn-outline-info form-control mb-4 mt-2"
                                style="width:18rem;" id="day2"><i class="fa fa-angle-down"
                                    aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $dates2; ?>&nbsp;&nbsp;<?php echo $date2; ?></button>

                            <?php } ?>
                            <div class="shadow-sm my-1 bg-dark" style="width:18rem; border-radius: 10px; display: none;"
                                id="days2">
                                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post" id="day_ones"
                                    class=" pb-5 pt-5  pr-2 pl-2">

                                    <div class="form-group">
                                        <select name="time" id="time" class="form-control bg-white"
                                            style="height: 40px;">
                                            <?php

                                                $sql3 = "select * from `time_managem` where `total_time`='$total_time11' and `shop_id`='$shop_id' and `no_of_chairs`!='' and `status`='' and `date`!='$datest2'";
                                                $result3 = mysqli_query($conn, $sql3);
                                                while ($row = mysqli_fetch_assoc($result3)) {




                                                ?>

                                            <option value="<?php echo $row['time']  ?>"><?php echo $row['time']  ?>
                                            </option>
                                            <?php  }  ?>



                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="date" value="<?php echo $datest2; ?>">
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-outline-info form-control"
                                            style="width: 18rem;">Check</button>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="ml-2">

                            <?php
                                $result4 = mysqli_query($conn, "select * from `shops_time` where `shop_id`='$shop_id'");
                                $row = mysqli_fetch_assoc($result4);
                                if ($row['closed_shop'] == $dates3) {




                                ?>
                            <button type="button" class="btn btn-danger form-control mb-4 mt-2" style="width:18rem;"
                                id="day3" disabled>Shop Is Closed For Today</button>




                            <?php } else {
                                ?>


                            <button type="button" class="btn btn-outline-info form-control mb-4 mt-2"
                                style="width:18rem;" id="day3"><i class="fa fa-angle-down"
                                    aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $dates3; ?>&nbsp;&nbsp;<?php echo $date3; ?></button>
                            <?php  } ?>
                            <div class="shadow-sm my-1 bg-dark" style="width:18rem; border-radius: 10px; display: none;"
                                id="days3">



                                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post" id="day_ones"
                                    class=" pb-5 pt-5 pr-2 pl-2">

                                    <div class="form-group">
                                        <select name="time" id="time" class="form-control bg-white"
                                            style="height: 40px;">
                                            <?php

                                                $sql3 = "select * from `time_managem` where `total_time`='$total_time11' and `shop_id`='$shop_id' and `no_of_chairs`!='' and `status`='' and `date`!='$datest3'";
                                                $result3 = mysqli_query($conn, $sql3);
                                                while ($row = mysqli_fetch_assoc($result3)) {




                                                ?>

                                            <option value="<?php echo $row['time']  ?>"><?php echo $row['time']  ?>
                                            </option>
                                            <?php  }  ?>



                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="date" value="<?php echo $datest3; ?>">
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-outline-info form-control"
                                            style="width: 18rem;">Check</button>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="ml-2">
                            <?php
                                $result4 = mysqli_query($conn, "select * from `shops_time` where `shop_id`='$shop_id'");
                                $row = mysqli_fetch_assoc($result4);
                                if ($row['closed_shop'] == $dates4) {




                                ?>
                            <button type="button" class="btn btn-danger form-control mb-4 mt-2" style="width:18rem;"
                                id="day3" disabled>Shop Is Closed For Today</button>

                            <?php  } else { ?>
                            <button type="button" class="btn btn-outline-info form-control mb-4 mt-2"
                                style="width:18rem;" id="day4"><i class="fa fa-angle-down"
                                    aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $dates4; ?>&nbsp;&nbsp;<?php echo $date4; ?></button>
                            <?php } ?>
                            <div class="shadow-sm my-1 bg-dark" style="width:18rem; border-radius: 10px; display: none;"
                                id="days4">
                                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post" id="day_ones"
                                    class=" pb-5 pt-5 pr-2 pl-2">

                                    <div class="form-group">
                                        <select name="time" id="time" class="form-control bg-white"
                                            style="height: 40px;">
                                            <?php

                                                $sql3 = "select * from `time_managem` where `total_time`='$total_time11' and `shop_id`='$shop_id' and `no_of_chairs`!='' and `status`='' and `date`!='$datest4'";
                                                $result3 = mysqli_query($conn, $sql3);
                                                while ($row = mysqli_fetch_assoc($result3)) {




                                                ?>

                                            <option value="<?php echo $row['time']  ?>"><?php echo $row['time']  ?>
                                            </option>
                                            <?php  }  ?>



                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="date" value="<?php echo $datest4; ?>">
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-outline-info form-control"
                                            style="width: 18rem;">Check</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="ml-2">

                            <?php
                                $result4 = mysqli_query($conn, "select * from `shops_time` where `shop_id`='$shop_id'");
                                $row = mysqli_fetch_assoc($result4);
                                if ($row['closed_shop'] == $dates5) {




                                ?>
                            <button type="button" class="btn btn-danger form-control mb-4 mt-2" style="width:18rem;"
                                id="day3" disabled>Shop Is Closed For Today</button>

                            <?php  } else { ?>
                            <button type="button" class="btn btn-outline-info form-control mb-4 mt-2"
                                style="width:18rem;" id="day5"><i class="fa fa-angle-down"
                                    aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $dates5; ?>&nbsp;&nbsp;<?php echo $date5; ?></button>
                            <?php } ?>
                            <div class="shadow-sm my-1 bg-dark" style="width:18rem; border-radius: 10px; display: none;"
                                id="days5">
                                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post" id="day_ones"
                                    class=" pb-5 pt-5 pr-2 pl-2">

                                    <div class="form-group">
                                        <select name="time" id="time" class="form-control bg-white"
                                            style="height: 40px;">
                                            <?php

                                                $sql3 = "select * from `time_managem` where `total_time`='$total_time11' and `no_of_chairs`!='' and `shop_id`='$shop_id' and `status`='' and `date`!='$datest5'";
                                                $result3 = mysqli_query($conn, $sql3);
                                                while ($row = mysqli_fetch_assoc($result3)) {




                                                ?>

                                            <option value="<?php echo $row['time']  ?>"><?php echo $row['time']  ?>
                                            </option>
                                            <?php  }  ?>



                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="date" value="<?php echo $datest5; ?>">
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-outline-info form-control"
                                            style="width: 18rem;">Check</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="ml-2">
                            <?php
                                $result4 = mysqli_query($conn, "select * from `shops_time` where `shop_id`='$shop_id'");
                                $row = mysqli_fetch_assoc($result4);
                                if ($row['closed_shop'] == $dates6) {




                                ?>
                            <button type="button" class="btn btn-danger form-control mb-4 mt-2" style="width:18rem;"
                                id="day3" disabled>Shop Is Closed For Today</button>

                            <?php  } else { ?>
                            <button type="button" class="btn btn-outline-info form-control mb-4 mt-2"
                                style="width:18rem;" id="day6"><i class="fa fa-angle-down"
                                    aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $dates6; ?>&nbsp;&nbsp;<?php echo $date6; ?></button>
                            <?php } ?>
                            <div class="shadow-sm my-1 bg-dark" style="width:18rem; border-radius: 10px; display: none;"
                                id="days6">
                                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post" id="day_ones"
                                    class=" pb-5 pt-5 pr-2 pl-2">

                                    <div class="form-group">
                                        <select name="time" id="time" class="form-control bg-white"
                                            style="height: 40px;">
                                            <?php

                                                $sql3 = "select * from `time_managem` where `total_time`='$total_time11' and `no_of_chairs`!='' and `shop_id`='$shop_id' and `status`='' and `date`!='$datest6'";
                                                $result3 = mysqli_query($conn, $sql3);
                                                while ($row = mysqli_fetch_assoc($result3)) {




                                                ?>

                                            <option value="<?php echo $row['time']  ?>"><?php echo $row['time']  ?>
                                            </option>
                                            <?php  }  ?>



                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="date" value="<?php echo $datest6; ?>">
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-outline-info form-control"
                                            style="width: 18rem;">Check</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="ml-2">
                            <?php
                                $result4 = mysqli_query($conn, "select * from `shops_time` where `shop_id`='$shop_id'");
                                $row = mysqli_fetch_assoc($result4);
                                if ($row['closed_shop'] == $dates7) {




                                ?>
                            <button type="button" class="btn btn-danger form-control mb-4 mt-2" style="width:18rem;"
                                id="day3" disabled>Shop Is Closed For Today</button>

                            <?php  } else { ?>
                            <button type="button" class="btn btn-outline-info form-control mb-4 mt-2"
                                style="width:18rem;" id="day7"><i class="fa fa-angle-down"
                                    aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $dates7; ?>&nbsp;&nbsp;<?php echo $date7; ?></button>

                            <?php  } ?>
                            <div class="shadow-sm my-1 bg-dark" style="width:18rem; border-radius: 10px; display: none;"
                                id="days7">
                                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post" id="day_ones"
                                    class=" pb-5 pt-5 pr-2 pl-2">

                                    <div class="form-group">
                                        <select name="time" id="time" class="form-control bg-white"
                                            style="height: 40px;">
                                            <?php

                                                $sql3 = "select * from `time_managem` where `total_time`='$total_time11' and `no_of_chairs`!='' and `shop_id`='$shop_id' and `status`='' and `date`!='$datest7'";
                                                $result3 = mysqli_query($conn, $sql3);
                                                while ($row = mysqli_fetch_assoc($result3)) {




                                                ?>

                                            <option value="<?php echo $row['time']  ?>"><?php echo $row['time']  ?>
                                            </option>
                                            <?php  }  ?>



                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="date" value="<?php echo $datest7; ?>">
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-outline-info form-control"
                                            style="width: 18rem;">Check</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="ml-2">

                            <?php
                                $result4 = mysqli_query($conn, "select * from `shops_time` where `shop_id`='$shop_id'");
                                $row = mysqli_fetch_assoc($result4);
                                if ($row['closed_shop'] == $dates8) {




                                ?>
                            <button type="button" class="btn btn-danger form-control mb-4 mt-2" style="width:18rem;"
                                id="day3" disabled>Shop Is Closed For Today</button>

                            <?php  } else { ?>

                            <button type="button" class="btn btn-outline-info form-control mb-4 mt-2"
                                style="width:18rem;" id="day8"><i class="fa fa-angle-down"
                                    aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $dates8; ?>&nbsp;&nbsp;<?php echo $date8; ?></button>

                            <?php } ?>
                            <div class="shadow-sm my-1 bg-dark" style="width:18rem; border-radius: 10px; display: none;"
                                id="days8">
                                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post" id="day_ones"
                                    class=" pb-5 pt-5 pr-2 pl-2">

                                    <div class="form-group">
                                        <select name="time" id="time" class="form-control bg-white"
                                            style="height: 40px;">
                                            <?php

                                                $sql3 = "select * from `time_managem` where `total_time`='$total_time11' and `no_of_chairs`!='' and `shop_id`='$shop_id' and `status`='' and `date`!='$datest8'";
                                                $result3 = mysqli_query($conn, $sql3);
                                                while ($row = mysqli_fetch_assoc($result3)) {




                                                ?>

                                            <option value="<?php echo $row['time']  ?>"><?php echo $row['time']  ?>
                                            </option>
                                            <?php  }  ?>



                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="date" value="<?php echo $datest8; ?>">
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-outline-info form-control"
                                            style="width: 18rem;">Check</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="ml-2">
                            <?php
                                $result4 = mysqli_query($conn, "select * from `shops_time` where `shop_id`='$shop_id'");
                                $row = mysqli_fetch_assoc($result4);
                                if ($row['closed_shop'] == $dates9) {




                                ?>
                            <button type="button" class="btn btn-danger form-control mb-4 mt-2" style="width:18rem;"
                                id="day3" disabled>Shop Is Closed For Today</button>

                            <?php  } else { ?>
                            <button type="button" class="btn btn-outline-info form-control mb-4 mt-2"
                                style="width:18rem;" id="day9"><i class="fa fa-angle-down"
                                    aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $dates9; ?>&nbsp;&nbsp;<?php echo $date9; ?></button>
                            <?php } ?>
                            <div class="shadow-sm my-1 bg-dark" style="width:18rem; border-radius: 10px; display: none;"
                                id="days9">
                                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post" id="day_ones"
                                    class=" pb-5 pt-5 pr-2 pl-2">

                                    <div class="form-group">
                                        <select name="time" id="time" class="form-control bg-white"
                                            style="height: 40px;">
                                            <?php

                                                $sql3 = "select * from `time_managem` where `total_time`='$total_time11' and `no_of_chairs`!='' and `shop_id`='$shop_id' and `status`='' and `date`!='$datest9'";
                                                $result3 = mysqli_query($conn, $sql3);
                                                while ($row = mysqli_fetch_assoc($result3)) {




                                                ?>

                                            <option value="<?php echo $row['time']  ?>"><?php echo $row['time']  ?>
                                            </option>
                                            <?php  }  ?>



                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="date" value="<?php echo $datest9; ?>">
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-outline-info form-control"
                                            style="width: 18rem;">Check</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="ml-2">
                            <?php
                                $result4 = mysqli_query($conn, "select * from `shops_time` where `shop_id`='$shop_id'");
                                $row = mysqli_fetch_assoc($result4);
                                if ($row['closed_shop'] == $dates10) {




                                ?>
                            <button type="button" class="btn btn-danger form-control mb-4 mt-2" style="width:18rem;"
                                id="day3" disabled>Shop Is Closed For Today</button>

                            <?php  } else { ?>
                            <button type="button" class="btn btn-outline-info form-control mb-4 mt-2"
                                style="width:18rem;" id="day10"><i class="fa fa-angle-down"
                                    aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $dates10; ?>&nbsp;&nbsp;<?php echo $date10; ?></button>
                            <?php } ?>

                            <div class="shadow-sm my-1 bg-dark" style="width:18rem; border-radius: 10px; display: none;"
                                id="days10">
                                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post" id="day_ones"
                                    class=" pb-5 pt-5 pr-2 pl-2">

                                    <div class="form-group">
                                        <select name="time" id="time" class="form-control bg-white"
                                            style="height: 40px;">
                                            <?php

                                                $sql3 = "select * from `time_managem` where `total_time`='$total_time11' and `no_of_chairs`!='' and `shop_id`='$shop_id' and `status`='' and `date`!='$datest10'";
                                                $result3 = mysqli_query($conn, $sql3);
                                                while ($row = mysqli_fetch_assoc($result3)) {




                                                ?>

                                            <option value="<?php echo $row['time']  ?>"><?php echo $row['time']  ?>
                                            </option>
                                            <?php  }  ?>



                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="date" value="<?php echo $datest10; ?>">
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-outline-info form-control"
                                            style="width: 18rem;">Check</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="ml-2">
                            <?php
                                $result4 = mysqli_query($conn, "select * from `shops_time` where `shop_id`='$shop_id'");
                                $row = mysqli_fetch_assoc($result4);
                                if ($row['closed_shop'] == $dates11) {




                                ?>
                            <button type="button" class="btn btn-danger form-control mb-4 mt-2" style="width:18rem;"
                                id="day3" disabled>Shop Is Closed For Today</button>

                            <?php  } else { ?>
                            <button type="button" class="btn btn-outline-info form-control mb-4 mt-2"
                                style="width:18rem;" id="day11"><i class="fa fa-angle-down"
                                    aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $dates11; ?>&nbsp;&nbsp;<?php echo $date11; ?></button>
                            <?php } ?>
                            <div class="shadow-sm my-1 bg-dark" style="width:18rem; border-radius: 10px; display: none;"
                                id="days11">
                                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post" id="day_ones"
                                    class=" pb-5 pt-5 pr-2 pl-2">

                                    <div class="form-group">
                                        <select name="time" id="time" class="form-control bg-white"
                                            style="height: 40px;">
                                            <?php

                                                $sql3 = "select * from `time_managem` where `total_time`='$total_time11' and `no_of_chairs`!='' and `shop_id`='$shop_id' and `status`='' and `date`!='$datest11'";
                                                $result3 = mysqli_query($conn, $sql3);
                                                while ($row = mysqli_fetch_assoc($result3)) {




                                                ?>

                                            <option value="<?php echo $row['time']  ?>"><?php echo $row['time']  ?>
                                            </option>
                                            <?php  }  ?>



                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="date" value="<?php echo $datest11; ?>">
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-outline-info form-control"
                                            style="width: 18rem;">Check</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="ml-2">
                            <?php
                                $result4 = mysqli_query($conn, "select * from `shops_time` where `shop_id`='$shop_id'");
                                $row = mysqli_fetch_assoc($result4);
                                if ($row['closed_shop'] == $dates12) {




                                ?>
                            <button type="button" class="btn btn-danger form-control mb-4 mt-2" style="width:18rem;"
                                id="day3" disabled>Shop Is Closed For Today</button>

                            <?php  } else { ?>
                            <button type="button" class="btn btn-outline-info form-control mb-4 mt-2"
                                style="width:18rem;" id="day12"><i class="fa fa-angle-down"
                                    aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $dates12; ?>&nbsp;&nbsp;<?php echo $date12; ?></button>
                            <?php } ?>
                            <div class="shadow-sm my-1 bg-dark" style="width:18rem; border-radius: 10px; display: none;"
                                id="days12">
                                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post" id="day_ones"
                                    class=" pb-5 pt-5 pr-2 pl-2">

                                    <div class="form-group">
                                        <select name="time" id="time" class="form-control bg-white"
                                            style="height: 40px;">
                                            <?php

                                                $sql3 = "select * from `time_managem` where `total_time`='$total_time11' and `no_of_chairs`!='' and `shop_id`='$shop_id' and `status`='' and `date`!='$datest12'";
                                                $result3 = mysqli_query($conn, $sql3);
                                                while ($row = mysqli_fetch_assoc($result3)) {




                                                ?>

                                            <option value="<?php echo $row['time']  ?>"><?php echo $row['time']  ?>
                                            </option>
                                            <?php  }  ?>



                                        </select>

                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" name="date" value="<?php echo $datest12; ?>">
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-outline-info form-control"
                                            style="width: 18rem;">Check</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="ml-2">
                            <?php
                                $result4 = mysqli_query($conn, "select * from `shops_time` where `shop_id`='$shop_id'");
                                $row = mysqli_fetch_assoc($result4);
                                if ($row['closed_shop'] == $dates13) {




                                ?>
                            <button type="button" class="btn btn-danger form-control mb-4 mt-2" style="width:18rem;"
                                id="day3" disabled>Shop Is Closed For Today</button>

                            <?php  } else { ?>
                            <button type="button" class="btn btn-outline-info form-control mb-4 mt-2"
                                style="width:18rem;" id="day13"><i class="fa fa-angle-down"
                                    aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $dates13; ?>&nbsp;&nbsp;<?php echo $date13; ?></button>
                            <?php } ?>
                            <div class="shadow-sm my-1 bg-dark" style="width:18rem; border-radius: 10px; display: none;"
                                id="days13">
                                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post" id="day_ones"
                                    class="pt-5 pb-5 pl-2 pr-2">

                                    <div class="form-group">
                                        <select name="time" id="time" class="form-control bg-white"
                                            style="height: 40px;">
                                            <?php

                                                $sql3 = "select * from `time_managem` where `total_time`='$total_time11' and `no_of_chairs`!='' and `shop_id`='$shop_id' and `status`='' and `date`!='$datest13'";
                                                $result3 = mysqli_query($conn, $sql3);
                                                while ($row = mysqli_fetch_assoc($result3)) {




                                                ?>

                                            <option value="<?php echo $row['time']  ?>"><?php echo $row['time']  ?>
                                            </option>
                                            <?php  }  ?>



                                        </select>

                                    </div>



                                    <div class="form-group">
                                        <input type="hidden" name="date" value="<?php echo $datest13; ?>">
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-outline-info form-control"
                                            style="width: 18rem;">Check</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="ml-2">
                            <?php
                                $result4 = mysqli_query($conn, "select * from `shops_time` where `shop_id`='$shop_id'");
                                $row = mysqli_fetch_assoc($result4);
                                if ($row['closed_shop'] == $dates14) {




                                ?>
                            <button type="button" class="btn btn-danger form-control mb-4 mt-2" style="width:18rem;"
                                id="day3" disabled>Shop Is Closed For Today</button>

                            <?php  } else { ?>
                            <button type="button" class="btn btn-outline-info form-control mb-4 mt-2"
                                style="width:18rem;" id="day14"><i class="fa fa-angle-down"
                                    aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $dates14; ?>&nbsp;&nbsp;<?php echo $date14; ?></button>
                            <?php } ?>
                            <div class="shadow-sm my-1 bg-dark" style="width:18rem; border-radius: 10px; display: none;"
                                id="days14">
                                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post" id="days14"
                                    class="pt-5 pb-5 pl-2 pr-2">

                                    <div class="form-group">
                                        <select name="time" id="time" class="form-control bg-white"
                                            style="height: 40px;">
                                            <?php

                                                $sql3 = "select * from `time_managem` where `total_time`='$total_time11' and `no_of_chairs`!='' and `shop_id`='$shop_id' and `status`='' and `date`!='$datest14'";
                                                $result3 = mysqli_query($conn, $sql3);
                                                while ($row = mysqli_fetch_assoc($result3)) {




                                                ?>

                                            <option value="<?php echo $row['time']  ?>"><?php echo $row['time']  ?>
                                            </option>
                                            <?php  }  ?>



                                        </select>

                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" name="date" value="<?php echo $datest14; ?>">
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-outline-info form-control"
                                            style="width: 18rem;">Check</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="ml-2">
                            <?php
                                $result4 = mysqli_query($conn, "select * from `shops_time` where `shop_id`='$shop_id'");
                                $row = mysqli_fetch_assoc($result4);
                                if ($row['closed_shop'] == $dates15) {




                                ?>
                            <button type="button" class="btn btn-danger form-control mb-4 mt-2" style="width:18rem;"
                                id="day3" disabled>Shop Is Closed For Today</button>

                            <?php  } else { ?>
                            <button type="button" class="btn btn-outline-info form-control mb-4 mt-2"
                                style="width: 18rem; margin-right: 15px;" id="day15"><i class="fa fa-angle-down"
                                    aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $dates15; ?>&nbsp;&nbsp;<?php echo $date15; ?></button>
                            <?php } ?>
                            <div class="shadow-sm my-1 bg-dark" style="width:18rem; border-radius: 10px; display: none;"
                                id="days15">
                                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post" id="day_ones"
                                    class=" pb-5 pt-5 pr-2 pl-2">

                                    <div class="form-group">
                                        <select name="time" id="time" class="form-control bg-white"
                                            style="height: 40px;">
                                            <?php

                                                $sql3 = "select * from `time_managem` where `total_time`='$total_time11' and `no_of_chairs`!='' and `shop_id`='$shop_id' and `status`='' and `date`!='$datest15'";
                                                $result3 = mysqli_query($conn, $sql3);
                                                while ($row = mysqli_fetch_assoc($result3)) {




                                                ?>

                                            <option value="<?php echo $row['time']  ?>"><?php echo $row['time']  ?>
                                            </option>
                                            <?php  }  ?>



                                        </select>

                                    </div>

                                    <div class="form-group">
                                        <input type="hidden" name="date" value="<?php echo $datest15; ?>">
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-outline-info form-control"
                                            style="width: 18rem;">Check</button>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>




            </div>
        </div>
    </div>
    <?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $time = $_POST['time'];
            $date = $_POST['date'];
            $status = 'booked';
            $sql1 = "select * from `time_managem` where `time`='$time' and `date`='$date' and `status`='$status'";
            $result1 = mysqli_query($conn, $sql1);
            $nums = mysqli_num_rows($result1);
            if ($nums == 1) {

                echo "This Time Slot Is not Avalaible";
            } else {


                $sql = "insert into `time_date_of_booking` (`time`,`date`) values ('$time','$date')";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    $total_time = 0;
                    $total_amount = 0;
                    $total_amount_after_offee = 0;
                    $user_id = $_SESSION['user_id'];
                    $sql3 = "select * from `cart` where `user_id`='$user_id'";
                    $result3 = mysqli_query($conn, $sql3);

        ?>
    <div class="container">
        <div class="col-md-6 offset-md-3">
            <div class="shadow-sm my-4 border" style="width:100% ; border-radius: 15px;">
                <div class="text-center" style="font-size: 20px; padding-top: 12px; font-family: math;"><b>YOUR BOOKINGS
                        DETAILS</b></div>
                <hr>

                <?php
                                while ($row = mysqli_fetch_assoc($result3)) {

                                    $total_time += $row['time_taken'];
                                    $total_amount += $row['item_price'];

                                    $total_amount_after_offee = $row['total_amount'];

                                ?>

                <div class="text-center" style="font-size:18px; font-family: math;"><?php echo $row['item_name'] ?>
                </div>
                <div class="d-flex justify-content-between my-4">

                    <div class="ml-5" style="font-size:18px; font-family: math;">
                        <?php echo $time ?>&nbsp;<i class="fa fa-clock-o" aria-hidden="true"></i>
                    </div>
                    <div class="mr-5" style="font-size:18px; font-family: math;"> <i class="fa fa-calendar"
                            aria-hidden="true"></i></i>&nbsp;<?php echo $date ?></div>
                </div>
                <div class="d-flex justify-content-between">

                    <div class="ml-5" style="font-size:18px; font-family: math;">
                        <?php echo $row['time_taken'] ?>&nbsp;<i class="fa fa-clock-o" aria-hidden="true"></i>
                    </div>
                    <div class="mr-5" style="font-size:18px; font-family: math;"><i class="fa fa-inr"
                            aria-hidden="true"></i>&nbsp;<?php echo $row['item_price'] ?></div>
                </div>
                <hr>




                <?php
                                }
                                ?>


                <hr>
                <div class="d-flex justify-content-between">
                    <div class="ml-3" style="font-size:18px; font-family: math;">
                        Total Time : <?php echo $total_time ?>&nbsp;<i class="fa fa-clock-o" aria-hidden="true"></i>
                    </div>
                    <?php

                                    if ($total_amount_after_offee == "") {


                                    ?>
                    <div class="mr-3" style="font-size:18px; font-family: math;">
                        Total Amount :<i class="fa fa-inr" aria-hidden="true"></i>
                        &nbsp;<?php echo $total_amount ?>
                    </div>

                    <?php
                                    } else {
                                    ?>
                    <div class="mr-3" style="font-size:18px; font-family: math;">
                        Total Amount :<i class="fa fa-inr" aria-hidden="true"></i>
                        &nbsp;<?php echo $total_amount_after_offee ?>
                    </div>

                    <?php  }  ?>

                </div>


                <form action="book.php?user_id=<?php echo $user_id ?>&time=<?php echo $time ?>&date=<?php echo $date ?>"
                    method="post">
                    <div class="d-flex justify-content-between">
                        <select name="payment" class="form-control ml-1 mb-4  mt-3" id="">
                            <option value="Cash On Delivery">Cash On Delivery</option>
                            <option value="Pay Online" disabled>Pay Online</option>
                            <option value="Pay Through Walet" disabled>Pay Through Wallet</option>
                        </select>
                        <button type="submit" class="btn btn-info form-control mr-1 ml-1 mb-4 mt-3">BOOK</button>
                    </div>
                </form>


            </div>
        </div>


        <?php
                }
            }
        }



            ?>

        <script type="text/javascript">
        $(document).ready(function() {
            $("#date").datepicker({
                minDate: 0
            });


            $("#day").click(() => {

                $("#days").slideToggle("slow")

            })
            $("#day1").click(() => {

                $("#days1").slideToggle("slow")

            })
            $("#day3").click(() => {

                $("#days3").slideToggle("slow")

            })

            $("#day2").click(() => {

                $("#days2").slideToggle("slow")

            })

            $("#day4").click(() => {

                $("#days4").slideToggle("slow")

            })
            $("#day5").click(() => {

                $("#days5").slideToggle("slow")

            })
            $("#day6").click(() => {

                $("#days6").slideToggle("slow")

            })



            $("#day7").click(() => {

                $("#days7").slideToggle("slow")

            })


            $("#day8").click(() => {

                $("#days8").slideToggle("slow")

            })


            $("#day9").click(() => {

                $("#days9").slideToggle("slow")

            })



            $("#day10").click(() => {

                $("#days10").slideToggle("slow")

            })


            $("#day11").click(() => {

                $("#days11").slideToggle("slow")

            })


            $("#day12").click(() => {

                $("#days12").slideToggle("slow")

            })


            $("#day13").click(() => {

                $("#days13").slideToggle("slow")

            })


            $("#day14").click(() => {

                $("#days14").slideToggle("slow")

            })


            $("#day15").click(() => {

                $("#days15").slideToggle("slow")

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

<?php

}





?>