<?php

include '../Connection/connection.php';
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {




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

    <title>Register</title>
</head>


<body style="background-color:none;">

    <div class="container">
    <div class="shadow-sm border bg-info" style="margin-top: 20px; width:100%; height:70px; border-radius: 20px;">
            <div class="text-center" style="font-size: 25px; padding-top: 12px; font-family: math;"><b> Add Items
                    Section</b></div>
        </div>
        <div class="shadow-lg bg-white" style="border-radius:20px;">
            <form action="<?php $_SERVER['REQUEST_URI'] ?>" class="m-5 pt-5 pb-5" method="post">
                <div class="form-group">
                    <input type="text" name="item_name" class="form-control" placeholder="Item Name" id="">
                </div>
                <div class="form-group">
                    <input type="text" name="item_price" class="form-control" placeholder="Price" id="">
                </div>
                <div class="form-group">
                    <input type="text" name="time_taken" class="form-control" placeholder="Time Taken" id="">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default form-control" style="border-color:yellowgreen;"> ADD ITEM</button>
                </div>
            </form>
        </div>
    </div>

    <?php   
    if($_SERVER['REQUEST_METHOD']=='POST'){
$user_id=$_SESSION['user_id'];
$status=1;
$sql="select `shop_id` from `shops` where `user_id`='$user_id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

$shop_id=$row['shop_id'];
$item_price=$_POST['item_price'];
$time_taken=$_POST['time_taken'];
$item_name=$_POST['item_name'];
$date=date("Y-m-d");

$sql1="insert into `items` (`shop_id`,`user_id`,`item_in_shop`,`offers`,`price`,`time_taken`,`verification`,`status`,`date`) values ('$shop_id','$user_id','$item_name','','$item_price','$time_taken','','$status','$date')";
$result1=mysqli_query($conn,$sql1);
if($result1){
    header("location:../Users Folder/items_in_shop.php");

}
else{
    header("location:../Users Folder/items_in_shop.php");
}

}


    
?>

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