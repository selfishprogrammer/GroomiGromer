<?php 
include '../Connection/connection.php';
session_start();
$user_id=$_SESSION['user_id'];
$sql="select * from `shops` where `user_id`='$user_id'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$shop_id=$row['shop_id'];
?>
<div class="shadow-sm" style="width: 100%; height:200px; background-color: #86e0f2;">

    <div class="text-center" style="    font-size: 20px;
    font-family: ui-serif;
    padding-top: 55px;"><b><?php echo $row['shop_name']?></b></div>
   
    <div class="container">
        <div class="shadow-sm bg-white border" style=" width:100%; margin-top:25px; border-radius: 20px;">

            <div class="mx-4 mt-4 mb-2" style="font-family: cursive; ">Share Tour Shop On WhatsApp</div>
            <div class="mx-4 mt-1 mb-1" style="font-family:'Times New Roman', Times, serif; opacity: 0.5;">Your Coustmer
                Can Visit Your Shop Directly Via This Link Share it On your WhatsApp</div>
            <div class="d-flex justify-content-end ">
                <button type="submit" class="mr-4 mb-2"
                    style="width: 8rem; height:35px; border-radius: 15px; border-color:green; background-color: #25D366;"><i
                        class="fa fa-whatsapp" aria-hidden="true"></i>&nbsp; Share</button>
            </div>
        </div>
    </div>
</div>