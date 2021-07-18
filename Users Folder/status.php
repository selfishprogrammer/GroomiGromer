<?php  
include '../Connection/connection.php';
$active=$_GET['active_id'];

$deactive=$_GET['deactive_id'];


if(isset($_GET['active_id'])){
$value=1;
    $sql="update `items` set `status`='$value' where `item_id`='$active'";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("location:../Users Folder/items_in_shop.php");

    }
    else{
        header("location:../Users Folder/items_in_shop.php");
    }

}


else if(isset($_GET['deactive_id'])){
    $value1=0;
        $sql="update `items` set `status`='$value1' where `item_id`='$deactive'";
        $result=mysqli_query($conn,$sql);
        if($result){
            header("location:../Users Folder/items_in_shop.php");
    
        }
        else{
            header("location:../Users Folder/items_in_shop.php");
        }
    
    }




?>