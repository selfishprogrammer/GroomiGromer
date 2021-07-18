<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Register</title>
</head>

<body>
    <div class="col-md-6 offset-md-3">
        <!-- Backend Code -->







        <!-- Backend Code -->


        <div class="card border " style=" border-radius:20px;     background-color: aliceblue; ">
            <div class="text-center" style="    font-size: 34px; font-family: 'Pacifico', cursive;">Update Details</div>
            <div class="d-flex justify-content-center my-3">

                <img src="../Image/register.png" width="120" height="120" alt="">


            </div>
            <?php

            include '../Connection/connection.php';
            $user_id = $_GET['user_id'];
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $password = $_POST['password'];
                $user = $_POST['user'];





                $sql = "update `register_user` set `username`='$name',`userphone`='$phone',`useremail`='$email',`password`='$password',`user`='$user' where `user_id`='$user_id'";
                $result = mysqli_query($conn, $sql);
                if ($result) {

                    header("location:view_user.php");
                }
            }






            ?>

            <?php
            $user_id = $_GET['user_id'];
            $sql = "select * from `register_user` where `user_id`='$user_id'";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {

            ?>

                <form action="<?php $_SERVER['REQUEST_URI'] ?>" class="m-5" method="post">


                    <div class="form-group">
                        <input type="text" name="name" id="name" style="border-radius:20px;" value="<?php echo $row['username'] ?>" placeholder="Name of User" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="number" name="phone" style="border-radius:20px;" value="<?php echo $row['userphone'] ?>" placeholder="Phone" id="phone" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" style="border-radius:20px;" value="<?php echo $row['useremail'] ?>" placeholder="Email" id="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="text" name="password" style="border-radius:20px;" value="<?php echo $row['password'] ?>" placeholder="Password" id="password" class="form-control">
                    </div>


                    <div class="form-group">
                        <input type="text" name="user" id="name" style="border-radius:20px;" value="<?php echo $row['user'] ?>" placeholder="User Post" class="form-control">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="form-control btn btn" value="submit" style="border-radius:20px; background-color:yellowgreen; font-family: 'Pacifico', cursive;">Update Details</button>
                        <hr>
                    </div>
                </form>

            <?php  }  ?>
            <hr>
         

        </div>



    </div>





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