<?php

include '../Connection/connection.php';
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['user'] == 'admin') {




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


<body style="background-color:aqua;">

    <div class="container">
    <div class="shadow-sm border bg-white" style="margin-top: 20px; width:100%; height:70px; border-radius: 20px;">
            <div class="text-center" style="font-size: 25px; padding-top: 12px; font-family: math;"><b> Update Items
                    Section</b></div>
        </div>
        <?php
        $item_id=$_GET['item_id'];
$sql="select * from `items` where `item_id`='$item_id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

?>
        <div class="shadow-lg bg-white" style="border-radius:20px;">
            <form action="<?php $_SERVER['REQUEST_URI'] ?>" class="m-5 pt-5 pb-5" method="post">
                <div class="form-group">
                    <input type="text" name="item_name" value="<?php echo $row['item_in_shop'] ?>" class="form-control" placeholder="Item Name" id="">
                </div>
                <div class="form-group">
                    <input type="text" name="item_price" value="<?php echo $row['price'] ?>" class="form-control" placeholder="Price" id="">
                </div>
                <div class="form-group">
                    <input type="text" name="time_taken" value="<?php echo $row['time_taken'] ?>" class="form-control" placeholder="Time Taken" id="">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default form-control" style="border-color:yellowgreen;"> UPDATE ITEM</button>
                </div>
            </form>
        </div>
    </div>

    <?php   
    if($_SERVER['REQUEST_METHOD']=='POST'){
$item_id=$_GET['item_id'];




$item_price=$_POST['item_price'];
$time_taken=$_POST['time_taken'];
$item_name=$_POST['item_name'];

$sql1="update `items` set `item_in_shop`='$item_name',`price`='$item_price',`time_taken`='$time_taken' where `item_id`='$item_id'";
$result1=mysqli_query($conn,$sql1);
if($result1){
    header("location:items_of_shops.php");

}
else{
    header("location:items_of_shops.php");
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