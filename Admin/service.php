<?php

include '../Connection/connection.php';
if(isset($_POST['id'])){
$id= $_POST['id'];


$sql="select * from `dist_services` where `state_id`='$id'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
    echo '<option style="font-family:cursive;" value="'.$row['dist'].'">'.$row['dist'].'</option>';
}

}
?>