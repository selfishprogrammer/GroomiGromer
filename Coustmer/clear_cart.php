<?php
include '../Connection/connection.php';
$shop_id=$_GET['shop_id'];
$ip=$_GET['user_ip'];
$item_id=$_GET['item_id'];


if(mysqli_query($conn,"delete from `cart` where `shop_id`!='$shop_id' and `user_ip`='$ip'")){

    header("location:cart?item_id=$item_id");
    
}
else{

    header("location:shop_books_view?shop_id=$shop_id");

}


?>