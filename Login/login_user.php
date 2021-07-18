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


                <div class="text-center pt-2" style="    font-size: 25px; font-family: 'Pacifico', cursive;">Login</div>
                <hr>

                <?php
        include '../Connection/connection.php';
        include '../Coustmer/ip.php';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $username = $_POST['phone'];
          $password = $_POST['password'];
          $sql = "select * from `register_user` where `userphone`='$username' and `password`='$password'";
          $result = mysqli_query($conn, $sql);
          $nums = mysqli_num_rows($result);
          if ($nums == 1) {
            $row = mysqli_fetch_assoc($result);

            session_start();

            $_SESSION['loggedin'] = true;
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['userphone'] = $row['userphone'];
            $_SESSION['user'] = $row['user'];
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['useremail'] = $row['useremail'];
            $_SESSION['verified'] = $row['verified'];

            if (isset($_POST['rememberme'])) {
              setcookie("phone_me", $username, time() + 8555555555555555555555555555555555555);
              setcookie("password_me", $password, time() + 8555555555555555555555555555555555555);

              if ($row['user'] == 'admin') {

                header("location: ../Admin/admin_home");
              } else if ($row['user'] == 'shop_user' && $row['verified'] == '') {

                header("location: ../Users Folder/document_upload");
              } else if ($row['user'] == 'shop_user' && $row['verified'] == 'submitted') {

                header("location: ../Users Folder/document_submitted");
              } else if ($row['user'] == 'shop_user' && $row['verified'] == 'verified') {

                header("location: ../Users Folder/shop_index");
              } else {
                $ip = getUserIp();
                $user_id = $_SESSION['user_id'];
                $sql = "select * from `cart` where `user_ip`='$ip'";
                $result = mysqli_query($conn, $sql);
                $nums = mysqli_num_rows($result);
                if ($nums > 0) {
                  $sql1 = "update `cart` set `user_id`='$user_id' where `user_ip`='$ip'";
                  $result1 = mysqli_query($conn, $sql1);
                  if ($result1) {
                    header("location:../Coustmer/check_out");
                  } else {
                    header("location:login_user");
                  }
                } else {
                  header("location:../Coustmer/index");
                }
              }
            } else {
              if ($row['user'] == 'admin') {

                header("location: ../Admin/admin_home");
              } else if ($row['user'] == 'shop_user' && $row['verified'] == '') {

                header("location: ../Users Folder/document_upload");
              } else if ($row['user'] == 'shop_user' && $row['verified'] == 'submitted') {

                header("location: ../Users Folder/document_submitted");
              } else if ($row['user'] == 'shop_user' && $row['verified'] == 'verified') {

                header("location: ../Users Folder/shop_index");
              } else {
                $ip = getUserIp();
                $user_id = $_SESSION['user_id'];
                $sql = "select * from `cart` where `user_ip`='$ip'";
                $result = mysqli_query($conn, $sql);
                $nums = mysqli_num_rows($result);
                if ($nums > 0) {
                  $sql1 = "update `cart` set `user_id`='$user_id' where `user_ip`='$ip'";
                  $result1 = mysqli_query($conn, $sql1);
                  if ($result1) {

                    header("location:../Coustmer/check_out");
                  } else {

                    header("location:login_user");
                  }
                } else {
                  header("location:../Coustmer/index");
                }
              }
            }
          } else {

            echo "Check phone Or Password";
          }
        }
        ?>


                <form action="<?php $_SERVER['REQUEST_METHOD'] ?>" method="post" class="m-3">

                    <div class="form-group">
                        <input type="number" name="phone" style="font-family: cursive;" value="<?php if (isset($_COOKIE['phone_me'])) {
                                                                                      echo $_COOKIE['phone_me'];
                                                                                    } ?>" placeholder="Phone"
                            id="phone" class="form-control">
                    </div>


                    <div class="form-group">
                        <input type="password" name="password" style="font-family: cursive;" value="<?php if (isset($_COOKIE['password_me'])) {
                                                                                          echo $_COOKIE['password_me'];
                                                                                        } ?>" placeholder="Password"
                            id="phone" class="form-control">
                    </div>

                    <div class="form-group">

                        <input type="checkbox" name="rememberme" class="mx-1"> Remember Me

                    </div>

                    <div class="form-group">
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="form-control btn btn"
                                style="width: 18rem; font-family: auto; font-size: 19px; background-color: #23bd1edb;">Login</button>
                        </div>
                        <hr>
                    </div>
                </form>

                <div class="d-flex justify-content-between">
                    <a type="button" href="register_user" class="form-control btn btn ml-2 mb-2"
                        style=" font-family: auto; font-size: 19px; background-color: #00ff90; ">New Account</a>

                    <a href="forget_password.php" class="nav-link">Forgot_password?</a>
                </div>




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