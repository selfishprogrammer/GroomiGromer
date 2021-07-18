<?php

include './Connection/connection.php';
if(isset($_POST['id'])){
$id= $_POST['id'];


$sql="select * from `dist_services` where `state_id`='$id'";
$result=mysqli_query($conn,$sql);
echo '<option value="" selected>---Choose Area---</option>';
while($row=mysqli_fetch_assoc($result)){
    
    echo '<option value="'.$row['dist_id'].'">'.$row['dist'].'</option>';
}

}
?>