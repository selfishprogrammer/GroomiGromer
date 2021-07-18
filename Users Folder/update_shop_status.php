<?php 
include '../Connection/connection.php';
session_start();
    $user_id1=$_GET['user_id1'];
    $user_id=$_GET['user_id'];
    $user_id = $_SESSION['user_id'];
if(isset($_GET['user_id'])){


$shop_status="on";
    $sql="update `shops` set `shop_status`='$shop_status' where `user_id`='$user_id'";
    $result=mysqli_query($conn,$sql);    
    header("location:close_shop.php");
}
else if(isset($_GET['user_id1'])){


    $shop_status1="off";
        $sql="update `shops` set `shop_status`='$shop_status1' where `user_id`='$user_id1'";
        $result=mysqli_query($conn,$sql);    
        header("location:close_shop.php");
    }
    ?>
