<?php

session_start();

include '../Connection/connection.php';
if($_SESSION['loggedin']){
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Niconne&family=Pacifico&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Verify Your Shop By Calling</title>
</head>

<body style="background-color:white;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <div class="mx-4" style="margin-top:15px; font-family: 'Pacifico', cursive; font-size:25px;">
                    Register Your Shop With Us And Grow Your Business</div>
                
            </div>
            <div class="col-md-6">
                <div class="shadow-sm border" style="width: 100%; height:400px; background-color:white; border-radius: 10px; margin-top: 15px;">

                    <div class="text-center pt-2" style="font-size: 20px; font-family: 'Pacifico', cursive;">Register
                        Your
                        Shop With Us</div>
                    <hr>
                    <h6 class="text-center" style="font-size: 16px; font-family: 'Niconne', cursive;;">Verify By Just
                        Requesting A Call------></h6>

                    <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="POST" class="ml-5 mr-5">
                        <div class="pl-2 pt-1" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                            <i> Choose Your City / Village:</i>
                        </div>
                        <div class="form-group">

                            <input type="text" name="request_call" style="font-family:cursive ;"  placeholder="Enter Your City / Village Name" class="form-control" id="" required>

                                
                        </div>
                        <div class="pl-2 pt-1" style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                            <i> Enter your Mobile Number:</i>
                        </div>
                        <div class="form-group">

                            <input type="number" name="phone" class="form-control" required placeholder="Enter Your Mobile" style="font-family:cursive ;" id="" value="<?php echo $_SESSION['userphone'] ?>">
                        </div>

                        <div class="form-group">

<input type="checkbox" name="terms_condi"> &nbsp; By Checking This You Are Agreed Our <a href="terms&Condition.php" data-toggle="modal" data-target="#termscondition2">Terms & Conditions</a> 
</div>
                        <div class="form-group">

                            <button type="submit" class="btn btn-outline-success form-control mt-3">REQUEST A
                                CALL</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
    <hr>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['terms_condi'])){
        $request_call = $_POST['request_call'];
        $phone = $_POST['phone'];

        $result = mysqli_query($conn, "insert into `call_request` (`request_call`,`phone`) values ('$request_call','$phone')");

        if ($result) {
$shop_phone=$_SESSION['userphone'];
            echo '<script> swal("Your Call Request Has Been Confirmed", "Our Team Will Contact You As Soon As Posible", "success") </script>;';
            $apiKey = urlencode('PjpPF3sS0U8-zV0Us9s2oQMZ2ZnRWUBPT2gLyXmb0s');
                      $otp=mt_rand(1000,9999);
                      // Message details
                      $numbers = urlencode($shop_phone);
                      $sender = urlencode('GRGMER');
                      $message = rawurlencode("Your call request has been received.\nWe will contact with you soon. Thank you so much for your interest.");
                   
                      // Prepare data for POST request
                      $data = 'apikey=' . $apiKey . '&numbers=' . $numbers . "&sender=" . $sender . "&message=" . $message;
                   
                      // Send the GET request with cURL
                      $ch = curl_init('https://api.textlocal.in/send/?' . $data);
                      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                      $response = curl_exec($ch);
                      curl_close($ch);
        }
    }
    else{
        echo '<script> swal("Please Check Our Terms & Conditions", "") </script>;';
    
    
    }
    }



    ?>

    <div class="text-center my-4" style="font-size:30px; font-family:Verdana, Geneva, Tahoma, sans-serif;">Why To Choose
        GG ??</div>

    <?php include 'policies_gp.php'; ?>
    <?php include 'terms&Conditions2.php' ; ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>
<?php } 


else{

    header("location:../Login/login_user");
}

?>