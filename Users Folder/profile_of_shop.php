<?php

include '../Connection/connection.php';
session_start();

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){




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

    <title>Profile</title>
</head>


<body style="background-color: #ffffff;">
    <div class="container">
    <?php  
$user_id= $_SESSION['user_id'];

$sql="select * from `shops` where `user_id`='$user_id'";
$result=mysqli_query($conn,$sql);
$nums=mysqli_num_rows($result);
if($nums ==1){
    $row=mysqli_fetch_assoc($result);




?>
        <div class="shadow-lg  border" style="margin-top: 200px; background-color: #ffffff; border-radius: 20px;">
            <div class="d-flex justify-content-center">
                <img src="../Admin/Shops Image/own sefie.jpeg" width="80" height="80" alt=""
                    class="rounded-circle mt-4">
            </div>

            <div class="mb-5">
                <div class="text-center m-3" style="font-size: 20px; font-family: cursive;"><i class="fa fa-home"
                        aria-hidden="true"></i>&nbsp;<b><?php echo $row['shop_name']  ?></b> </div>
                <div class="text-center m-3" style="font-size: 20px;"><i class="fa fa-envelope-o"
                        aria-hidden="true"></i>&nbsp;<b><?php echo $row['email']  ?></b></div>
                <div class="text-center m-3" style="font-size: 20px;"><i class="fa fa-phone"
                        aria-hidden="true"></i>&nbsp;<b><?php echo $row['phone']  ?></b></div>
                <div class="text-center m-3" style="font-size: 20px;"><i class="fa fa-home"
                        aria-hidden="true"></i>&nbsp;<b><?php echo $row['dist']  ?>, <?php echo $row['shop_pin']  ?> ,<?php echo $row['shop_dist']  ?> , West Bengal</b></div>
                        <div class="text-center m-3" style="font-size: 20px;">REGESTRATION ID : &nbsp;<b><?php echo $row['reg_id']  ?></b></div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" data-toggle="modal" data-target="#editprofile"
                    class="btn btn-outline-danger mt-3 mb-5" style="width: 18rem;">Edit
                    Profile</button>
            </div>
        </div>

<?php } 


else{
echo 'We will Update You Soon';

}
    
    ?>

    </div>
    </div>


    <!-- Edit Profile Section -->




    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="editprofile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="shadow-sm" style="width: 100%; height: 100%;">
                    <div class="text-center my-4" style="font-size: 20px; font-family:cursive;">Welcome Binary Bara Shop
                    </div>
                    <hr>
<?php 

$user_id=$_SESSION['user_id'];

$sql="select * from `shops` where `user_id`='$user_id'";
$result=mysqli_query($conn,$sql);
$nums=mysqli_num_rows($result);

?>

                    <form action="<?php  $_SERVER['REQUEST_URI'] ?>" class="m-5" method="post">
                        <div class="form-group">

                            <input type="email" name="email" value="<?php echo $row['email']  ?>" class="form-control" id="">
                        </div>

                        <div class="form-group">
                            <input type="number" name="phone" value="<?php echo $row['phone']  ?>" class="form-control" id="" disabled>

                        </div>
                        

                       
                        <div class="form-group">
                            <button type="submit" class="tn btn-outline-success form-control">Update</button>

                        </div>

                    </form>


<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
    $email=$_POST['email'];
$user_id=$_SESSION['user_id'];
$sql1="update `shops` set `email`='$email' where `user_id`='$user_id'";
$result1=mysqli_query($conn,$sql1);
if($result1){
    header("location:../Users Folder/profile_of_shop.php");
}
else{
    header("location:../Users Folder/profile.php");
}
}

?>
             

                </div>

            </div>
        </div>
    </div>








    <!-- Edit Profile Section -->

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

<?php }

else{

    header("location:../Login/login_user.php");
}

?>