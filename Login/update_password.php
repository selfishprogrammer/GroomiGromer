<?php
include '../Connection/connection.php';
if(isset($_POST['update_password'])){

    $phone=$_GET['phone'];
    $password=$_POST['password'];

    $result=mysqli_query($conn,"update `register_user` set `password`='$password' where `userphone`='$phone'");
    if($result){
        header("location:login_user.php");
    }
    else{
        echo "Failed";
    }
    
}


?>