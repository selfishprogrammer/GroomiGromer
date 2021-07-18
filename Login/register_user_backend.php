<?php 

include '../Connection/connection.php';


$name=$_GET['name'];
$email=$_GET['email'];
$phone=$_GET['phone'];
$password=$_GET['password'];
$cpassword=$_GET['cpassword'];


$sql="select * from `register_user` where `userphone`='$phone' and `useremail`='$email'";
$result=mysqli_query($conn,$sql);
$nums=mysqli_num_rows($result);
if($nums==1)
{
echo "Email Or Phone Already Exist";


}
else{
if($password==$cpassword){

     



    ?>
<div class="container">
    <div class="col-md-6 offset-md-3">
        <div class="card border">
            <form action="">
                <div class="form-group">
                    <input type="number" name="otp" style="border-radius:20px;" placeholder="Enter Otp" id="phone"
                        class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn" value="submit"
                        style="border-radius:20px; background-color:yellowgreen; font-family: 'Pacifico', cursive;">Verify</button>
            </form>
        </div>
    </div>
</div>
<?php

if(isset($_POST['submit'])){

}


}

else{
    echo "Check your Password";
}



}









?>