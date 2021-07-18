<?php

$shop_id=$_GET['shop_id'];
include '../Connection/connection.php';

$sql="delete from `shops` where `shop_id`='$shop_id'";
$result=mysqli_query($conn,$sql);
if($result){
header("location:view_user.php");
}



?>