<?php

include '../Connection/connection.php';
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['user'] == 'shop_user') {




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

    <title>Close Shop</title>
</head>


<body style="background-color: #ffffff;">

    <div class="container">


        <div class="shadow-sm border bg-info" style="margin-top: 20px; width:100%; height:70px; border-radius: 20px;">
            <div class="text-center" style="font-size: 25px; padding-top: 12px; font-family: math;"><b> Close
                    Shops</b></div>
        </div>
        <?php 
    
    
    $user_id = $_SESSION['user_id'];


    $sql="select * from `shops` where `user_id`='$user_id'";
    $result=mysqli_query($conn,$sql);    
    $row=mysqli_fetch_assoc($result);

    if($row['shop_status']=="off"){

        ?>
        <div class="col-md-6 offset-md-3">
            <button type="" class="btn btn-deffault form-control"
                style="width: 100%; height:150px; margin-top: 200px;; border-radius: 40px; font-family: cursive; font-size: 35px; background-color: red;; border-color: black;"
                disabled>Shop Is Closed</button>
        </div>
        <?php
    }
    else{

        ?>

        <div class="col-md-6 offset-md-3">
            <button type="" class="btn btn-deffault form-control"
                style="width: 100%; height:150px; margin-top: 200px;; border-radius: 40px; font-family: cursive; font-size: 35px; background-color: #abd2f0;; border-color: black;"
                disabled>Shop Is Open</button>
        </div>



        <?php
    }
        ?>

        <!-- <div class="d-flex justify-content-center my-4">

            <button type="submit" name="submit" data-toggle="modal" data-target="#full_half" class="form-control mx-1"
                class="btn btn-outline-warning">Half Day</button>
            <button type="submit" name="submit" class="form-control mx-1" class="btn btn-outline-warning">Full
                Day</button>
            <button type="submit" name="submit" class="form-control mx-1" class="btn btn-outline-warning">Long Term
                Close</button>

        </div> -->


    </div>





    <!-- full and half -->
    <!-- Button trigger modal -->


    <!-- Modal -->






    <?php 
    
    
    $user_id = $_SESSION['user_id'];

    $sql="select * from `shops` where `user_id`='$user_id'";
    $result=mysqli_query($conn,$sql);    
    $row=mysqli_fetch_assoc($result);

    if($row['shop_status']=="off"){

        

    
    
    ?>
    <div class="form-group">
        <div class="d-flex justify-content-center my-4">
            <a href="update_shop_status.php?user_id=<?php echo $user_id;  ?>" class="nav-link"> <button type="submit" value="on" name="submit" 
                style="width: 18rem; background-color: #07ff07;;" class="form-control mx-1 my-4"
                class="btn btn-outline-warning">OPEN YOUR
                SHOP</button></a>
        </div>
    </div>
    <?php } 
    
    else{

       ?>
    <div class="form-group">
        <div class="d-flex justify-content-center my-4">
            <a href="update_shop_status.php?user_id1=<?php echo $user_id;  ?>"  class="nav-link"> <button type="submit" value="on" name="submit" 
                style="width: 18rem; background-color: red;" class="form-control mx-1 my-4"
                class="btn btn-outline-warning">CLOSE YOUR
                SHOP</button></a>
        </div>
    </div>
    <?php
    }
    ?>




  



    <!-- full and half -->

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

<?php } else {

    header("location:../Login/login_user.php");
}

?>