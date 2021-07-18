<?php
include '../Connection/connection.php';
$item_id = $_GET['item_id'];
$verification = "no";
$verification1 = "yes";
$shop_id=$_GET['shop_id'];
$sql1 = "select `verification` from `items` where `item_id`='$item_id'";
$result1 = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($result1);
if ($row['verification'] == 'yes') {
    $sql = "update `items` set `verification`='$verification' where `item_id`='$item_id'";
    $result = mysqli_query($conn, $sql);
    header("location:items_of_shops?shop_id=$shop_id");
} else {
    $sql2 = "update `items` set `verification`='$verification1' where `item_id`='$item_id'";
    $result2 = mysqli_query($conn, $sql2);
    header("location:items_of_shops?shop_id=$shop_id");
}
