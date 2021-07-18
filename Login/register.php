              <?php       
                      include '../Connection/connection.php';
if(isset($_POST['otp'])){

$name = $_GET['name'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$password = $_GET['password'];

$wallet_money=50;


                if ($_GET['user_id'] == $_POST['otp_no']) {
                    $date=date("Y-m-d");

                    $sql = "insert into `register_user` (`username`,`userphone`,`useremail`,`password`,`date_of_reg`) values ('$name','$phone','$email','$password','$date')";

                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        $sql1 = "select * from `register_user` where `userphone`='$phone' and `useremail`='$email'";
                        $result1 = mysqli_query($conn, $sql1);
                        $row=mysqli_fetch_assoc($result1);
                        $user_id=$row['user_id'];
                        $sql2 = "insert into `wallet_integration` (`user_id`,`wallet_money`,`date`) values ('$user_id','$wallet_money','$date')";
                        $result2 = mysqli_query($conn, $sql2);
                        header("location:login_user.php");
                    } 
                 

            
            }
            else {
                echo '
<div class="col-md-6 offset-md-3">
<div class=" text-center alert alert-danger" role="alert" style="font-family: Pacifico, cursive;">
Wrong OTP  </div>
</div>';
            }



        }
        ?>