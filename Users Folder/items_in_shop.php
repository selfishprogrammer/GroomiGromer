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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Register</title>
</head>


<body>
    <div class="container">
        <div class="shadow-sm border bg-info" style="margin-top: 20px; width:100%; height:70px; border-radius: 20px;">
            <div class="text-center" style="font-size: 25px; padding-top: 12px; font-family: math;"><b> Items
                    Section</b></div>
        </div>

        <?php
            $user_id = $_SESSION['user_id'];
            $verification = "";
            $sql = "select * from `items` where `user_id`='$user_id'";
            $result = mysqli_query($conn, $sql);
            $nums = mysqli_num_rows($result);
            if ($nums > 0) {

                while ($row = mysqli_fetch_assoc($result)) {

                    if($row['verification']=='yes'){
              
            ?>
        <div class="col-md-6 offset-md-3 my-4">
            <div class="d-flex justify-content-center">
                <div class="shadow-sm border  bg-white" style="width:100%;  border-radius: 20px;">
                    <div class="text-center" style="font-size: 20px;"><?php echo $row['item_in_shop']    ?></div>
                    <div class="d-flex justify-content-between">


                        <div class="" style="margin-top: 10px; margin-left: 10px; font-size: 20px;"><i
                                class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;<?php echo $row['time_taken']    ?>
                            min</div>
                        <div class="" style="margin-top: 10px; ;   font-size: 20px;"><i class="fa fa-inr"
                                aria-hidden="true"></i>&nbsp;<?php echo $row['price']    ?></div>
                        <?php 
                           if($row['status']==1){

                           
                           
                           ?>
                        <div class="" style="    margin-top: 14px;
                                                    margin-left: 15px;
                                                    margin-right: 15px;
                                                    font-size: 15px;
                                                    color: #74ff74;"><i class="fa fa-circle"
                                aria-hidden="true"></i>&nbsp;Active</div>
                        <?php } 



                else{
                ?>
                        <div class="" style="    margin-top: 14px;
                                                    margin-left: 15px;
                                                    margin-right: 15px;
                                                    font-size: 15px;
                                                    color: red;"><i class="fa fa-circle"
                                aria-hidden="true"></i>&nbsp;Deactive</div>

                        <?php
                }
                ?>



                    </div>

                    <div class="d-flex justify-content-between">

                        <a href="status.php?active_id=<?php echo $row['item_id'] ?>"><button type="submit"
                                style="width:6rem; margin-top: 15px; ; margin-left: 56px; border-color: yellow; background-color: #74ff74; margin-bottom:15px;"
                                class="btn-btn-offset">Active</button></a>
                        <a href="status.php?deactive_id=<?php echo $row['item_id'] ?>"><button type="submit"
                                style="width:6rem; margin-top: 15px; ; margin-right: 56px; border-color: yellow; background-color:red; margin-bottom:15px;"
                                class="btn-btn-offset">Deactive</button></a>


                    </div>

                </div>
            </div>
        </div>

        <?php
        }
        else{
        ?>
        <div class="col-md-6 offset-md-3 my-4">
            <div class="d-flex justify-content-center">
                <div class="shadow-sm border  bg-info" style="width:100%;   border-radius: 20px;">
                    <div class="text-center" style="font-size: 20px;"><?php echo $row['item_in_shop']    ?></div>
                    <div class="d-flex justify-content-between">


                        <div class="" style="margin-top: 10px; margin-left: 10px; font-size: 20px;"><i
                                class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;<?php echo $row['time_taken']    ?>
                            min</div>
                        <div class="" style="margin-top: 10px; ;   font-size: 20px;"><i class="fa fa-inr"
                                aria-hidden="true"></i>&nbsp;<?php echo $row['price']    ?></div>

                        <div class="text-center" style="font-size:20px; font-family:math;">
                            Pending For Verification

                        </div>
                  



                    </div>

                </div>
            </div>
        </div>
            <?php

        }

    }

            }
            else{
                echo "No Item Avalaible";
            }
?>


            <div class="col-md-6 offset-md-3 my-4">
                <div class="d-flex justify-content-center">

                    <a href="add_new_item.php"><button type="submit" class="btn btn-info form-control my-4"
                            style="border-color: yellowgreen; width:18rem;">ADD MORE ITEM</button></a>

                </div>

            </div>


















            <!-- Edit Profile Section -->

            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
                crossorigin="anonymous">
            </script>

            <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>

<?php } else {

    header("location:../Login/login_user.php");
}

?>