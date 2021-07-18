<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="shadow-sm bg-white" style="width: 100;">
    <div class="container-fluid">
        <div class="d-flex justify-content-between">


            <h6 class="mt-4" style="color: #38c5c0; font-size: 22px; "><b>Groomigromer</b></h6>
            <div class="d-flex justify-content-end">
            <?php
            include '../Connection/connection.php';
            session_start();
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
                $user_id = $_SESSION['user_id'];
                include 'ip.php';
            ?>

                

                    <a href="myaccount" class="nav-link  my-3">
                        <div style="color: black; font-size: 16px;; "><img src="../Image/profile.png" height="30" width="30" alt=""></div>
                    </a>

                    <?php

                    $ip = getUserIp();

                    $result1 = mysqli_query($conn, "select * from `cart` where `user_ip`='$ip' and `user_id`='$user_id'");
                    $nums = mysqli_num_rows($result1);


                    ?>

                    <p class="mb-3 mt-2" style="font-size:30px; "><a href="cart_details" class="nav-link"><i class="fa fa-cart-plus" aria-hidden="true" style="color:black;"><span style="font-size:15px; color:yellow;"><?php echo $nums  ?></span></i>
                        </a></p>
                    <?php } else {



                    ?>

                    <a href="../Login/login_user" class="nav-link  my-3">
                        <div style="color: black; font-size: 16px;; "><img src="../Image/login.png" height="30" width="30" alt=""></div>
                    </a>
                    <?php
                    include 'ip.php';

                    $ip1 = getUserIp();

                    $result1 = mysqli_query($conn, "select * from `cart` where `user_ip`='$ip1'");
                    $nums = mysqli_num_rows($result1);
                    ?>
                    <p class="mb-3 mt-2" style="font-size:30px; color:black;"> <a href="cart_details" class="nav-link"><i class="fa fa-cart-plus" aria-hidden="true"><span style="font-size:15px;"><?php echo $nums  ?></span></i>
                        </a>
                    </p>
                </div>

            <?php } ?>

        </div>
    </div>
</div>
</div>


<div class="shadow-lg bg-white sticky-top border" style=" width:100%;">
    <form action="your_shops" class="ml-3 mr-3 mt-3">
        <div class="row">


            <div class="col-md-5">

                <div class="form-group ">

                    <select class="form-control" name="state" id="state" style=" font-family: cursive; height:45px;   width:100%;      " aria-label="Example select with button addon" required>
                        <option value="" selected>--Choose Region--</option>
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
                    <select class="form-control" name="dist" id="dist" style=" font-family: cursive;  height:45px;  width:100%;      " aria-label="Example select with button addon" required>

                        <option value="" selected>--Choose Area--</option>

                    </select>
                </div>
            </div>



            <div class="col-md-2 ">
                <div class="form-group">
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-info form-control " type="submit" style="background-color:#1E88E5;height:45px;   width:100%;    width:10rem;">Search</button>
                    </div>
                </div>
            </div>

        </div>





    </form>


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








    });
</script>