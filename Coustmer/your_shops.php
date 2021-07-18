<?php

// echo $_GET['dist'];
// echo $_GET['state'];

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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:wght@700&family=Satisfy&display=swap" rel="stylesheet">
    <title>Shops</title>
</head>

<body>

    <div class="shadow-sm border" style=" width:100%;  background-color: #38c5c0; border-radius: 5px;">
        <form action="your_shops.php" class="pt-3 pl-2 pr-2">
            <div class="row">


                <div class="col-md-5">

                    <div class="form-group">

                        <select class="form-control" name="state" id="state" style=" font-family: cursive;   width:100%;     " aria-label="Example select with button addon" required>
                            <option selected>West Bengal</option>
                            <?php
                            include '../Connection/connection.php';
                            $sql = "select * from `state_services`";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {


                            ?>
                                <option value="<?php echo $row['state_id'] ?>"><?php echo $row['state'] ?></option>
                            <?php
                            }



                            ?>
                        </select>

                    </div>
                </div>
                <div class="col-md-5">

                    <div class="form-group">
                        <select class="form-control" name="dist" id="dist" style=" font-family: cursive;    width:100%;      " aria-label="Example select with button addon" required>
                            <option value="<?php echo $_GET['dist'] ?>" selected><?php echo $_GET['dist'] ?></option>

                        </select>
                    </div>
                </div>



                <div class="col-md-2">
                    <div class="form-group">
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-info form-control " type="submit" style="background-color:#1E88E5;   width:10rem;">Search</button>
                        </div>
                    </div>
                </div>

            </div>





        </form>


    </div>



















    <div class="col-md-6 offset-md-3 mb-4">
        <div class="d-flex justify-content-between my-4">
            <button type="button" id="filter" class="btn btn-default border mx-1 form-control" style="border-radius: 10px; font-family: cursive;"><i class="fa fa-filter" aria-hidden="true"></i>
                &nbsp; Filter</button>
            <button type="button" id="sort" class="btn btn-default border mx-1 form-control" style="border-radius: 10px;font-family: cursive; ;"><i class="fa fa-sort-amount-desc" aria-hidden="true"></i>
                &nbsp; Sort</button>
            <button type="button" class="btn btn-default border mx-1 form-control" style="border-radius: 10px;font-family: cursive; ;" id="open"><i class="fa fa-angle-down" aria-hidden="true"></i>
                &nbsp; Open</button>

        </div>
    </div>
    <!-- Filture -->


    <div class="shadow-sm p-3 mr-2" id="filters" style="width: 100%; display: none;">

        <div class="ml-1 my-3" style="font-size:20px;">Type :</div>
        <?php
        $sql = "SELECT DISTINCT  `category_shop` FROM `shops` ORDER BY `category_shop`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {



        ?>

            <div class="form-check my-2">
                <input class="form-check-input shops" type="checkbox" value="<?php echo $row['category_shop'] ?>" id="category_shops">&nbsp; <?php echo $row['category_shop'] ?>
            </div>
        <?php } ?>

        <hr>
        <div class="ml-1 my-3" style="font-size:20px;">Opening Time</div>
        <?php
        $sql = "SELECT DISTINCT  `opening_time` FROM `shops` ORDER BY `opening_time`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {



        ?>

            <div class="form-check my-2">
                <input class="form-check-input shops shops " type="checkbox" value="<?php echo $row['opening_time'] ?>" id="opening_time">&nbsp; <?php echo $row['opening_time'] ?>
            </div>

        <?php } ?>




        <hr>

        <div class="ml-1 my-3" style="font-size:20px;">Aminities</div>

        <div class="form-check my-2">
            <input class="form-check-input shops" type="checkbox" id="amenities" value="wifi" aria-label="..."> <i class="fa fa-wifi" aria-hidden="true"></i>

        </div>
        &nbsp;
        <div class="form-check my-2">
            <input class="form-check-input shops" type="checkbox" id="amenities2" value="car" aria-label="..."><i class="fa fa-car" aria-hidden="true"></i>
 
        </div>
        &nbsp;
        <div class="form-check my-2">
            <input class="form-check-input shops" type="checkbox" id="amenities1" value="television" aria-label="..."><i class="fa fa-television" aria-hidden="true"></i>

        </div>
        &nbsp;
        <div class="form-check my-2">
            <input class="form-check-input shops" type="checkbox" id="amenities3" value="music" aria-label="..."><i class="fa fa-music" aria-hidden="true"></i>

          
        </div>
        &nbsp;
        <div class="form-check my-2">
            <input class="form-check-input shops" type="checkbox" id="amenities4" value="shower" aria-label="..."><i class="fa fa-shower" aria-hidden="true"></i>
        </div>

        <hr>


    </div>


    <!-- Filture -->
    <!-- Sort -->


    <div class="shadow-sm p-3" id="sorts" style="width: 100%; height: 13rem; display: none;">
        <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">
            <a class=" nav-link" style=" font-family: math; color:black;" href="view_reguster_shop.php">By
                Popularity</a>
        </form>
        <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">
            <button class="btn btn-default" style=" font-family: math; color:black;" name="rating_popularit">By
                User Rating</button>
        </form>
        <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">

            <button class="btn btn-default" type="submit" name="low_to_high" style=" font-family: math; color:black;">Low To
                High</button>
        </form>
        <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">

            <button class="btn btn-default" type="submit" name="high_to_low" style=" font-family: math; color:black;">High To
                Low</button>
        </form>




    </div>

    <!-- Sort -->
    <!-- Open -->
    <div class="shadow-sm p-3 mr-2" id="opens" style="width: 100%; display: none;">



        <form action="#">
            <div class="form-check my-2">
                <input class="form-check-input shops" type="checkbox"  id="opening_shops" value="male" aria-label="...">&nbsp; All
            </div>


            <div class="form-check my-2">
                <input class="form-check-input shops" type="checkbox" id="day7"  value="Sunday" aria-label="...">&nbsp; Sunday
            </div>


            <div class="form-check my-2">
                <input class="form-check-input shops" type="checkbox" id="day1"  value="Monday" aria-label="...">&nbsp; Monday
            </div>



            <div class="form-check my-2">
                <input class="form-check-input shops" type="checkbox" id="day2" value="Tuesday" aria-label="...">&nbsp; Tuesday
            </div>


            <div class="form-check my-2">
                <input class="form-check-input shops" type="checkbox" id="day3"  value="Wednesday" aria-label="...">&nbsp; Wednesday
            </div>

            <div class="form-check my-2">
                <input class="form-check-input shops" type="checkbox" id="day4"  value="Thursday" aria-label="...">&nbsp; Thursday
            </div>

            <div class="form-check my-2">
                <input class="form-check-input shops" type="checkbox" id="day5"  value="Friday" aria-label="...">&nbsp; Friday
            </div>

            <div class="form-check my-2">
                <input class="form-check-input shops" type="checkbox" id="day6"  value="Saturday" aria-label="...">&nbsp; Saturday
            </div>

        </form>
    </div>

    <!-- Open -->









    <div class="col-md-12" id="results">
        <div class="container">
            <?php

        

            if (isset($_POST['low_to_high'])) {
                $shop_status = "on";
                $state_id = $_GET['state'];
                $dist_id = $_GET['dist'];
$shop_id=0;
                $result = mysqli_query($conn, "select * from `shops` where `shop_status`='$shop_status' and `shop_state`='$state_id' and `dist`='$dist_id' order by `base_price` asc");
                $nums = mysqli_num_rows($result);
                while ($row = mysqli_fetch_assoc($result)) {
                    $shop_id=$row['shop_id'];



            ?>
                    <div class=" shadow-lg my-2" style="width:100%; border-radius:15px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="../Admin/Shops Image/<?php echo $row['img_1']   ?>" class="card-img" height="290px" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">





                                    <div class="shop_title" style="font-size: 24px;  font-family: 'Lobster Two';">
                                        <?php echo $row['shop_name']   ?></div>
                                    <div>West Bengal ,
                                        <?php echo $row['shop_dist']   ?>,<?php echo $row['dist']   ?>,<?php echo $row['shop_pin']   ?>
                                    </div>

                                    <?php 
$rating=0;
$avg_rating=0;
$result_rating=mysqli_query($conn,"select `rating` from `booking_renter` where `shop_id`='$shop_id' and `rating`!=''");
$nums=mysqli_num_rows($result_rating);
while($row_rating=mysqli_fetch_assoc($result_rating)){

    $rating +=$row_rating['rating'];

}

$avg_rating=round( $rating/$nums,1);

?>
                                        <h6 style=" font-size: 15px;"><small><i class="fa fa-star-o" aria-hidden="true"></i>
                                                <?php echo $row['rating']  ?>
                                                &nbsp; &nbsp; <span style="font-size:10px;">(          <?php echo $nums  ?> rating)</span> &nbsp;
                                                &nbsp;<span style="font-size:10px;">(Very Good)</span></small></h6>

                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-default border my-1" style="width: 10rem;" href="#" disabled>
                                            <i class="fa fa-mars-stroke" aria-hidden="true"></i>
                                            <?php echo $row['category_shop']   ?></button>
                                        <div class="mx-4" style="font-size: 25px; font-family: math;"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;<?php echo $row['base_price']  ?></div>
                                    </div>

                                    <div class="mb-1">Time: &nbsp;<?php echo $row['opening_time']   ?> To
                                        <?php echo $row['closing_time']   ?></div>
                                        <div class="text-center" style="font-size: 25px;">
                                    <i class="fa fa-<?php echo $row['amenities'] ?>" aria-hidden="true"></i>&nbsp;&nbsp;<i class="fa fa-<?php echo $row['amenities1'] ?>" aria-hidden="true"></i>&nbsp;&nbsp;<i class="fa fa-<?php echo $row['amenities2'] ?>" aria-hidden="true"></i><i class="fa fa-<?php echo $row['amenities3'] ?>" aria-hidden="true"></i>&nbsp;&nbsp;<i class="fa fa-<?php echo $row['amenities4'] ?>" aria-hidden="true"></i>&nbsp;&nbsp;
                                    </div>

                                    <div class="d-flex justify-content-end mt-2">

                                        <a type="submit" href="shop_books_view?shop_id=<?php echo $row['shop_id']; ?>" class="btn btn-success mr-1">View Shop</a>



                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
            } 
else if (isset($_POST['rating_popularit'])) {
    $shop_status = "on";
    $state_id = $_GET['state'];
    $dist_id = $_GET['dist'];
$shop_id=0;
    $result = mysqli_query($conn, "select * from `shops` where `shop_status`='$shop_status' and `shop_state`='$state_id' and `dist`='$dist_id' order by `rating` desc");
    $nums = mysqli_num_rows($result);
    while ($row = mysqli_fetch_assoc($result)) {
        $shop_id=$row['shop_id'];



?>
        <div class=" shadow-lg my-2" style="width:100%; border-radius:15px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="../Admin/Shops Image/<?php echo $row['img_1']   ?>" class="card-img" height="290px" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">





                        <div class="shop_title" style="font-size: 24px;  font-family: 'Lobster Two';">
                            <?php echo $row['shop_name']   ?></div>
                        <div>West Bengal ,
                            <?php echo $row['shop_dist']   ?>,<?php echo $row['dist']   ?>,<?php echo $row['shop_pin']   ?>
                        </div>

                        <?php 
$rating=0;
$avg_rating=0;
$result_rating=mysqli_query($conn,"select `rating` from `booking_renter` where `shop_id`='$shop_id' and `rating`!=''");
$nums=mysqli_num_rows($result_rating);
while($row_rating=mysqli_fetch_assoc($result_rating)){

$rating +=$row_rating['rating'];

}

$avg_rating=round( $rating/$nums,1);

?>
                            <h6 style=" font-size: 15px;"><small><i class="fa fa-star-o" aria-hidden="true"></i>
                                    <?php echo $row['rating']  ?>
                                    &nbsp; &nbsp; <span style="font-size:10px;">(          <?php echo $nums  ?> rating)</span> &nbsp;
                                    &nbsp;<span style="font-size:10px;">(Very Good)</span></small></h6>

                        <div class="d-flex justify-content-between">
                            <button class="btn btn-default border my-1" style="width: 10rem;" href="#" disabled>
                                <i class="fa fa-mars-stroke" aria-hidden="true"></i>
                                <?php echo $row['category_shop']   ?></button>
                            <div class="mx-4" style="font-size: 25px; font-family: math;"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;<?php echo $row['base_price']  ?></div>
                        </div>

                        <div class="mb-1">Time: &nbsp;<?php echo $row['opening_time']   ?> To
                            <?php echo $row['closing_time']   ?></div>
                            <div class="text-center" style="font-size: 25px;">
                        <i class="fa fa-<?php echo $row['amenities'] ?>" aria-hidden="true"></i>&nbsp;&nbsp;<i class="fa fa-<?php echo $row['amenities1'] ?>" aria-hidden="true"></i>&nbsp;&nbsp;<i class="fa fa-<?php echo $row['amenities2'] ?>" aria-hidden="true"></i><i class="fa fa-<?php echo $row['amenities3'] ?>" aria-hidden="true"></i>&nbsp;&nbsp;<i class="fa fa-<?php echo $row['amenities4'] ?>" aria-hidden="true"></i>&nbsp;&nbsp;
                        </div>

                        <div class="d-flex justify-content-end mt-2">

                            <a type="submit" href="shop_books_view?shop_id=<?php echo $row['shop_id']; ?>" class="btn btn-success mr-1">View Shop</a>



                        </div>

                    </div>
                </div>
            </div>
        </div>
    <?php
    }
} 
            else if(isset($_POST['high_to_low'])){

                $shop_status = "on";
                $state_id = $_GET['state'];
                $dist_id = $_GET['dist'];
$shop_id=0;
                $result = mysqli_query($conn, "select * from `shops` where `shop_status`='$shop_status' and `shop_state`='$state_id' and `dist`='$dist_id' order by `base_price` desc");
                $nums = mysqli_num_rows($result);
                while ($row = mysqli_fetch_assoc($result)) {
                    $shop_id=$row['shop_id'];



            ?>
                    <div class=" shadow-lg my-2" style="width:100%; border-radius:15px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="../Admin/Shops Image/<?php echo $row['img_1']   ?>" class="card-img" height="290px" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">





                                    <div class="shop_title" style="font-size: 24px;  font-family: 'Lobster Two';">
                                        <?php echo $row['shop_name']   ?></div>
                                    <div>West Bengal ,
                                        <?php echo $row['shop_dist']   ?>,<?php echo $row['dist']   ?>,<?php echo $row['shop_pin']   ?>
                                    </div>

                                    <?php 
                                    
$rating=0;
$avg_rating=0;
$result_rating=mysqli_query($conn,"select `rating` from `booking_renter` where `shop_id`='$shop_id' and `rating`!=''");
$nums=mysqli_num_rows($result_rating);
while($row_rating=mysqli_fetch_assoc($result_rating)){

    $rating +=$row_rating['rating'];

}

$avg_rating=round( $rating/$nums,1);

?>
                                        <h6 style=" font-size: 15px;"><small><i class="fa fa-star-o" aria-hidden="true"></i>
                                                <?php echo $row['rating']  ?>
                                                &nbsp; &nbsp; <span style="font-size:10px;">(          <?php echo $nums  ?> rating)</span> &nbsp;
                                                &nbsp;<span style="font-size:10px;">(Very Good)</span></small></h6>

                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-default border my-1" style="width: 10rem;" href="#" disabled>
                                            <i class="fa fa-mars-stroke" aria-hidden="true"></i>
                                            <?php echo $row['category_shop']   ?></button>
                                        <div class="mx-4" style="font-size: 25px; font-family: math;"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;<?php echo $row['base_price']  ?></div>
                                    </div>

                                    <div class="mb-1">Time: &nbsp;<?php echo $row['opening_time']   ?> To
                                        <?php echo $row['closing_time']   ?></div>
                                    <div class="text-center" style="font-size: 25px;">
                                    <i class="fa fa-<?php echo $row['amenities'] ?>" aria-hidden="true"></i>&nbsp;&nbsp;<i class="fa fa-<?php echo $row['amenities1'] ?>" aria-hidden="true"></i>&nbsp;&nbsp;<i class="fa fa-<?php echo $row['amenities2'] ?>" aria-hidden="true"></i><i class="fa fa-<?php echo $row['amenities3'] ?>" aria-hidden="true"></i>&nbsp;&nbsp;<i class="fa fa-<?php echo $row['amenities4'] ?>" aria-hidden="true"></i>&nbsp;&nbsp;
                                    </div>

                                    <div class="d-flex justify-content-end mt-2">

                                        <a type="submit" href="shop_books_view?shop_id=<?php echo $row['shop_id']; ?>" class="btn btn-success mr-1">View Shop</a>



                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }

            }
            
            
            
            
            
            else {

                ?>
                <?php


                include '../Connection/connection.php';
                $shop_status = "on";
                $state_id = $_GET['state'];
                $dist_id = $_GET['dist'];
                $shop_id=0;

                $result = mysqli_query($conn, "select * from `shops` where `shop_status`='$shop_status' and `shop_state`='$state_id' and `dist`='$dist_id'");
                $nums = mysqli_num_rows($result);
                if ($nums > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {

$shop_id=$row['shop_id'];



                ?>
                        <div class=" shadow-lg my-2" style="width:100%; border-radius:15px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="../Admin/Shops Image/<?php echo $row['img_1']   ?>" class="card-img" height="290px" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">





                                        <div class="shop_title" style="font-size: 24px;  font-family: 'Lobster Two';">
                                            <?php echo $row['shop_name']   ?></div>
                                        <div>West Bengal ,
                                            <?php echo $row['shop_dist']   ?>,<?php echo $row['dist']   ?>,<?php echo $row['shop_pin']   ?>
                                        </div>
<?php 
$rating=0;
$avg_rating=0;
$result_rating=mysqli_query($conn,"select `rating` from `booking_renter` where `shop_id`='$shop_id' and `rating`!=''");
$nums=mysqli_num_rows($result_rating);
while($row_rating=mysqli_fetch_assoc($result_rating)){

    $rating +=$row_rating['rating'];

}

$avg_rating=round( $rating/$nums,1);

?>
                                        <h6 style=" font-size: 15px;"><small><i class="fa fa-star-o" aria-hidden="true"></i>
                                                <?php echo $row['rating']  ?>
                                                &nbsp; &nbsp; <span style="font-size:10px;">(          <?php echo $nums  ?> rating)</span> &nbsp;
                                                &nbsp;<span style="font-size:10px;">(Very Good)</span></small></h6>

                                        <div class="d-flex justify-content-between">
                                            <button class="btn btn-default border my-1" style="width: 10rem;" href="#" disabled>
                                                <i class="fa fa-mars-stroke" aria-hidden="true"></i>
                                                <?php echo $row['category_shop']   ?></button>
                                            <div class="mx-4" style="font-size: 25px; font-family: math;"><i class="fa fa-inr" aria-hidden="true"></i>&nbsp;<?php echo $row['base_price']  ?></div>
                                        </div>

                                        <div class="mb-1">Time: &nbsp;<?php echo $row['opening_time']   ?> To
                                            <?php echo $row['closing_time']   ?></div>
                                            <div class="text-center" style="font-size: 25px;">
                                    <i class="fa fa-<?php echo $row['amenities'] ?>" aria-hidden="true"></i>&nbsp;&nbsp;<i class="fa fa-<?php echo $row['amenities1'] ?>" aria-hidden="true"></i>&nbsp;&nbsp;<i class="fa fa-<?php echo $row['amenities2'] ?>" aria-hidden="true"></i><i class="fa fa-<?php echo $row['amenities3'] ?>" aria-hidden="true"></i>&nbsp;&nbsp;<i class="fa fa-<?php echo $row['amenities4'] ?>" aria-hidden="true"></i>
                                    </div>

                                        <div class="d-flex justify-content-end mt-2">

                                            <a type="submit" href="shop_books_view?shop_id=<?php echo $row['shop_id']; ?>" class="btn btn-success mr-1">View Shop</a>



                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                } else {
                    ?>
                    <div class="text-center" style="margin-top: 44px; font-size: 30px; font-family: math;">
                        <b>
                            No Shops Found In Your Location
                        </b>

                    </div>
                    <div class="text-center" style="margin-top: 14px; font-size: 20px; font-family: math;">
                        <b>
                            We are Coming Soon Here
                        </b>

                    </div>
            <?php
                }
            } ?>
        </div>



    </div>


    <script src="http://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>


    <script>
        $(document).ready(() => {
            console.log("Connected");

            $("#state").on('change', function() {
                var StateId = $(this).val();
                console.log("StateId")




                $.ajax({
                    url: "service.php",
                    method: "POST",
                    data: {
                        id: StateId
                    },
                    dataType: "html",
                    success: (data) => {
                        $('#dist').html(data)
                        console.log(data)
                    }
                })
            });



            $("#filter").click(() => {

                $("#filters").slideToggle("slow")

            })
            $("#sort").click(() => {

                $("#sorts").slideToggle("fast")

            })
            $("#open").click(() => {

                $("#opens").slideToggle("fast")

            })
            

            var dist = $("#dist").val();

            console.log(dist)

            $('.shops').click(function() {
                var action = 'data';
                var category_shops = get_filter_date('category_shops')
                var opening_time = get_filter_date('opening_time')
                var amenities = get_filter_date('amenities')


                var amenities1 = get_filter_date('amenities1')
                var amenities2 = get_filter_date('amenities2')

                var amenities3 = get_filter_date('amenities3')
                var amenities4 = get_filter_date('amenities4')
                var day1 = get_filter_date('day1')
                var day2 = get_filter_date('day2')
                var day3 = get_filter_date('day3')


                var day4 = get_filter_date('day4')
                var day5 = get_filter_date('day5')

                var day6 = get_filter_date('day6')
                var day7 = get_filter_date('day7')


                $.ajax({
                    url: 'action.php',
                    method: 'POST',
                    data: {
                        action: action,
                        category_shops: category_shops,
                        dist: dist,
                        amenities: amenities,
                        amenities2: amenities2,
                        amenities3: amenities3,
                        amenities4: amenities4,
                        amenities1: amenities1,
                        opening_time: opening_time,
                        day1: day1,
                        day2: day2,
                        day3: day3,
                        day4: day4,
                        day5: day5,
                        day6: day6,
                        day7: day7
                    },
                    success: (response) => {
                        $("#results").html(response);



                    }
                })
            })

            function get_filter_date(text_id) {
                var data_in_filter = [];
                $("#" + text_id + ":checked").each(function() {
                    data_in_filter.push($(this).val())
                })
                return data_in_filter;

            }

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