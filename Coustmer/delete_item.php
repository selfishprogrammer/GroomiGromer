<?php

$item_id=$_GET['item_id'];
$shop_id=$_GET['shop_id'];
include '../Connection/connection.php';

$sql="delete from `cart` where `item_id`='$item_id'";
$result=mysqli_query($conn,$sql);
if($result){
header("location:shop_books_view?shop_id=$shop_id");
}



?>