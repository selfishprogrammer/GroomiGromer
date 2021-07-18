<?php 
include '../Connection/connection.php';
$verified="verified";
$phone=$_GET['phone'];
$del=mysqli_query($conn,"update `document_of_shop` set `status`='$verified' where `phone`='$phone'");
if($del){
    header("location:view_document");
}

?>