<?php

$user_id=$_GET['user_id'];
include '../Connection/connection.php';

$sql="delete from `register_user` where `user_id`='$user_id'";
$result=mysqli_query($conn,$sql);
if($result){
header("location:view_user.php");
}



?>