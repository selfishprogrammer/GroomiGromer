<?php
include 'connection.php';

session_start();
session_unset();
session_commit();
setcookie("phone_me","",time()-8555555555555555555555555555555555555);
setcookie("password_me","",time()-8555555555555555555555555555555555555);

header("location:login_user");





?>