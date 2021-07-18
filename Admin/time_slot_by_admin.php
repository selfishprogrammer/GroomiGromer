<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>User View</title>
</head>

<body>
<?php
include '../Connection/connection.php';
$shop_id=$_GET['shop_id'];



$row=mysqli_fetch_assoc(mysqli_query($conn,"select * from `shops` where `shop_id`='$shop_id'"));
$no_of_chairs=$row['chairs_no'];
    ?>
    <div class="container">

        <div class="shadow-sm bg-info my-4">


            <div class="text-center py-3" style="font-size:20px; font-family:math;"><b>TIME SLOT</b></div>
        </div>
        <div class=" card-body bg-white" style="margin-top: 150px;;">

            <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">

                <div class="row">
                    <div class="col-md-3">

                        <div class="form-group">

                            <input type="text" name="no_of_chairs1" class="form-control" value="No Of Chairs (<?php  echo $row['chairs_no']  ?>)" id=""
                                disabled>
                                <input type="hidden" name="no_of_chairs" value="<?php  echo $row['chairs_no']  ?>" >
                        </div>
                    </div>
                    <div class="col-md-3">

                        <div class="form-group">

                            <input type="text" name="total_time" class="form-control" placeholder="Total Time" id="">
                        </div>
                    </div>

                    <div class="col-md-3">

                        <div class="form-group">
                            <input type="text" name="time" class="form-control" placeholder="Enter Time Eg(10:00AM)"
                                id="">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <button type="submit" name="time_b" class="btn btn-outline-success form-control">ADD TIME</button>

                    </div>



                </div>

            </form>

        </div>

    </div>
<?php 
if(isset($_POST['time_b'])){
    $shop_id=$_GET['shop_id'];
    $no_of_chairs=$_POST['no_of_chairs'];
    $time=$_POST['time'];
    $ttime=$_POST['total_time'];


  if(  mysqli_query($conn,"insert into `time_managem` (`total_time`,`time`,`shop_id`,`no_of_chairs`) values ('$ttime','$time','$shop_id','$no_of_chairs')")){

  }else{
      echo "error";
  }

}



?>

<form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">

<div class="form-group">

<button type="submit" name="live" class="btn btn-outline-info form-control" >LIVE SHOP</button>
</div>

</form>

<?php  

if(isset($_POST['live'])){
    $shop_id=$_GET['shop_id'];
$status="on";
$phone_of_shop=mysqli_fetch_assoc(mysqli_query($conn,"select * from `shops` where `shop_id`='$shop_id'"));
$phone=$phone_of_shop['phone'];
$reg_id=$phone_of_shop['reg_id'];
$user_id_of_shop=mysqli_fetch_assoc(mysqli_query($conn,"select * from `register_user` where `userphone`='$phone'"));

$user_id=$user_id_of_shop['user_id'];
$result=mysqli_query($conn,"update `shops` set `shop_status`='$status' , `user_id`='$user_id' where `shop_id`='$shop_id'");
if($result){

    $apiKey = urlencode('PjpPF3sS0U8-zV0Us9s2oQMZ2ZnRWUBPT2gLyXmb0s');
                      // Message details
                      $numbers = urlencode($phone);
                      $sender = urlencode('GRGMER');
                      $message = rawurlencode("Congratulation your Shop is Live now.\nRegistration ID : $reg_id");
                   
                      // Prepare data for POST request
                      $data = 'apikey=' . $apiKey . '&numbers=' . $numbers . "&sender=" . $sender . "&message=" . $message;
                   
                      // Send the GET request with cURL
                      $ch = curl_init('https://api.textlocal.in/send/?' . $data);
                      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                      $response = curl_exec($ch);
                      curl_close($ch);

    header("location:view_register_shop");
}

}


?>
  

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
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