<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <title>Login</title>
</head>

<body>

    <div class="container">

        <div class="col-md-6 offset-md-3">
            <div class="card border " style="margin-top: 150px;">





                <form action="<?php $_SERVER['REQUEST_URI'] ?>" class="m-3" method="post">


                    <div class="form-group">

                        <input type="number" name="phone" value="<?php echo $_POST['phone'] ?>" class="form-control"
                         id=""   placeholder="Enter Your Registered Mobile Number" id="">
                    </div>
                    <div class="form-group">

                        <button type="submit" name="send_otp" class="btn btn-outline-info form-control"
                            id="phone">SEND OTP</button>
                    </div>

                </form>
                <?php  
include '../Connection/connection.php';
if(isset($_POST['send_otp'])){

    $phone=$_POST['phone'];

    $result=mysqli_query($conn,"select * from `register_user` where `userphone`='$phone'");
$nums=mysqli_num_rows($result);
if($nums==1){

    $otp=rand(1000,9999);
    echo $otp;
    ?>
     <script>
                                    const send_otp = document.getElementById('phone');
                                    send_otp.innerText = 'RESEND OTP';
                </script>
<form action="change_password.php?phone=<?php echo $phone?>" class="m-3" method="post">
                <div class="form-group">
                    <input type="number" name="otp_got" placeholder="Enter OTP" class="form-control" id="">

                </div>
<input type="hidden" name="otp" value="<?php echo $otp  ?>" >
                <div class="form-group">
                    <button type="submit" name="otp_button" class="form-control btn btn-outline-success">CHECK OTP</button>
                </div>

                </form>


                <?php

               

}

else{

echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Phone Number Not Registered!</strong>Please Check The Mobile Number
</div>';


    ?>


                <script>
                                    const send_otp = document.getElementById('send_otp');
                                    send_otp.innerText = 'SEND OTP';
                </script>



                <?php
}

}


?>
            </div>


        </div>



    </div>

    <!-- Optional JavaScript; choose one of the two! -->

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