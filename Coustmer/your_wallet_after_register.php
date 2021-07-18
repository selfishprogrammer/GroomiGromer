<?php 
include '../Connection/connection.php';
session_start();
if(isset($_SESSION['loggedin'])){

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
    <title>Booking History</title>
</head>

<body style="background-color: #ffffff;">



    <div class="container">
        <div class="shadow-sm border bg-info" style="width:100%; height:65px; margin-top:67px; border-radius:20px;">

            <div class="text-center" style="padding-top:3px; font-family: math; font-size:35px;">Your Wallet</div>

        </div>
        <div class="col-md-6 offset-md-3">
            <div class="shadow-sm my-3 border" style="width:100%; border-radius: 20px;">

<?php 

$user_id=$_SESSION['user_id'];
$sql2="select * from `wallet_integration` where `user_id`='$user_id'";
$result2=mysqli_query($conn,$sql2);
$row=mysqli_fetch_assoc($result2);


?>
                <div class="d-flex justify-content-between ">
                    <img src="../Image/wallet1.png" width="130" class="rounded-circle mx-4 my-4" height="130" alt="">
                    <div class="mr-4 mt-5" style="font-size: 50px; font-family: math;">
                        <i class="fa fa-inr" aria-hidden="true"></i>&nbsp;<?php echo $row['wallet_money'] ?>
                    </div>

                </div>
            </div>

            <div class="shadow-sm my-3 border" style="width:100%; border-radius: 20px;">


                <div class="d-flex justify-content-between mt-3 mb-3 ">
                    <div class="ml-4" style="font-size: 20px; font-family: cursive;">Your Signup Bonus Is : </div>
                    <div class="mr-4" style="font-size: 20px; font-family: cursive;"> <i class="fa fa-inr"
                            aria-hidden="true"></i>&nbsp;<?php echo $row['wallet_money'] ?> </div>
                </div>
            </div>

            <div class="shadow-sm my-3 border" style="width:100%; border-radius: 20px;">
            <div class="text-center mt-3 mb-3" style="font-size: 20px; font-family: cursive;">Transction History</div>

            </div>

        </div>








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

<?php } ?>