<?php


include '../Connection/connection.php';
if(isset($_POST['id1'])){
    $id1= $_POST['id1'];
    
    
    $sql1="select * from `services` where `dist_id`='$id1'";
    $result1=mysqli_query($conn,$sql1);
    while($row1=mysqli_fetch_assoc($result1)){
        echo '<option value="'.$row1['slno'].'">'.$row1['village'].'</option>';
    }
    
    }


?>

