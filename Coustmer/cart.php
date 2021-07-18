<?php 
session_start();
include '../Connection/connection.php';
include 'ip.php';

$item_id=$_GET['item_id'];
$user_id2="null";
$sql="select * from `items` where `item_id`='$item_id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$shop_id1=$row['shop_id'];
$item_in_shop=$row['item_in_shop'];
$offers=$row['offers'];
$time_taken=$row['time_taken'];

$item_price=$row['price'];


$user_id=0;
$user_ip=getUserIp();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    $email=$_SESSION['useremail'];
$sql3="select * from `register_user` where `useremail`='$email'";
$result3=mysqli_query($conn,$sql3);
$row3=mysqli_fetch_assoc($result3);
$user_id1=$row3['user_id'];
$sql = "select * from `cart` where `user_ip`='$user_ip'  and `shop_id`='$shop_id1' and `item_id`='$item_id'";
$result = mysqli_query($conn, $sql);
$nums = mysqli_num_rows($result);
if($nums >0)
{
    $sql2="update `cart` set `item_id`='$item_id',`shop_id`='$shop_id1',`user_id`='$user_id1',`user_ip`='$user_ip',`item_name`='$item_in_shop',`item_price`='$item_price',`time_taken`='$time_taken' where `item_id`=''";
    $result2=mysqli_query($conn,$sql2);
    if($result2){
        ?>
        <?php
        header("Location:shop_books_view.php?shop_id=$shop_id1");
        echo $email;
        
        }
        else{
            echo"Sorry";
        }
        

}else{
$sql1="insert into `cart` (`item_id`,`shop_id`,`user_id`,`user_ip`,`item_name`,`item_price`,`time_taken`) values ('$item_id','$shop_id1','$user_id1','$user_ip','$item_in_shop','$item_price','$time_taken')";
$result1=mysqli_query($conn,$sql1);
if($result1){
    ?>
    <?php
    header("Location:shop_books_view.php?shop_id=$shop_id1");
    echo $email;
    
    }
    else{
        echo"Sorry";
    }
    
}}
else{
    $sql = "select * from `cart` where `user_ip`='$user_ip'  and `shop_id`='$shop_id1' and `item_id`='$item_id'";
    $result = mysqli_query($conn, $sql);
    $nums = mysqli_num_rows($result);
    if($nums >0)
    {
        $sql2="update `cart` set `item_id`='$item_id',`shop_id`='$shop_id1',`user_id`='$user_id',`user_ip`='$user_ip',`item_name`='$item_in_shop',`item_price`='$item_price',`time_taken`='$time_taken' where `item_id`=''";
        $result2=mysqli_query($conn,$sql2);
        if($result2){
            ?>
            <?php
            header("Location:shop_books_view.php?shop_id=$shop_id1");
            echo $email;
            
            }
            else{
                echo"Sorry";
            }
            

    }else{
$sql1="insert into `cart` (`item_id`,`shop_id`,`user_id`,`user_ip`,`item_name`,`item_price`,`time_taken`) values ('$item_id','$shop_id1','$user_id','$user_ip','$item_in_shop','$item_price','$time_taken')";
$result1=mysqli_query($conn,$sql1);

if($result1){
?>
<?php
header("Location:shop_books_view.php?shop_id=$shop_id1");
echo $email;

}
else{
    echo"Sorry";
}


}
}
?>