
<?php  
session_start();
include '../Connection/connection.php';
if(isset($_SESSION['loggedin']) && $_SESSION['verified']=='submitted'){

  

  

        header("location:document_submitted.php");

    }

    else{



?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Upload Document</title>
</head>


<div class="container">

    <div class="shadow-sm my-4">

        <div class="card">

            <div class="card-header text-center bg-info">

                <div class="text-center" style="font-size: 20px; font-family: math;"><b>Upload Your Documents</b> </div>

            </div>
            <div class="card-body bg-white">
                <form action="<?php $_SERVER['REQUEST_URI']   ?>" class="m-3" enctype="multipart/form-data" method="post">
                    <label for="" style="font-size: 20px; font-family: math;;"><b>Id Proof</b></label>
                    <div class="form-group">
                        <input type="number" name="id_proof" placeholder="Any Id Proof Number"
                            style="border-radius: 10px; font-family:cursive ;" class="form-control" id="">

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Front Side</label>

                                <input type="file" name="id_front" placeholder="Front Side" class="form-control"
                                    style="border-radius: 10px;" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Back Side</label>
                                <input type="file" name="id_back" placeholder="Front Side" class="form-control"
                                    style="border-radius: 10px;" id="">

                            </div>
                        </div>

                    </div>


                    <label for="" style="font-size: 20px;  font-family: math;;" class="my-2"><b>PAN CARD</b></label>

                    <div class="form-group">
                        <input type="text" name="pan_no" placeholder="PAN Card Number"
                            style="border-radius: 10px;  font-family:cursive ;" class="form-control" id="">

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""> Front Side</label>

                                <input type="file" name="pan_front" placeholder="Front Side" class="form-control"
                                    style="border-radius: 10px; " id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for=""> Back Side</label>
                                <input type="file" name="pan_back" placeholder="Front Side" class="form-control"
                                    style="border-radius: 10px;" id="">

                            </div>
                        </div>

                    </div>



                    <label for="" style="font-size: 20px;  font-family: math;;" class="my-2"><b>ACCOUNT
                            NUMBER</b></label>

                    <div class="form-group">
                        <input type="text" name="account" placeholder="Account Number"
                            style="border-radius: 10px;  font-family:cursive ;" class="form-control" id="">

                    </div>
                    <div class="form-group">
                        <input type="text" name="ifsc" placeholder="IFSC Code"
                            style="border-radius: 10px;  font-family:cursive ;" class="form-control" id="">

                    </div>


                    <div class="form-group">
                        <label for="">Passbook Front Image</label>

                        <input type="file" name="acc_front" placeholder="Front Side" class="form-control"
                            style="border-radius: 10px; " id="">
                    </div>






                    <div class="form-group">
                        <button type="submit" name="document" class="form-control btn btn-outline-info my-4"
                            style="font-family: cursive;">Upload Document</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

</div>

<?php  



if(isset($_POST['document'])){
$user_id=$_SESSION['user_id'];
$phone=$_SESSION['userphone'];
    $id_no=$_POST['id_proof'];
$id_front=$_FILES['id_front']['name'];
$id_back=$_FILES['id_back']['name'];
$id_front1=$_FILES['id_front']['tmp_name'];
$id_back1=$_FILES['id_back']['tmp_name'];

$pan_no=$_POST['pan_no'];
$pan_front=$_FILES['pan_front']['name'];
$pan_back=$_FILES['pan_back']['name'];
$pan_front1=$_FILES['pan_front']['tmp_name'];
$pan_back1=$_FILES['pan_back']['tmp_name'];

$account=$_POST['account'];
$ifsc=$_POST['ifsc'];
$acc_front=$_FILES['acc_front']['name'];
$acc_front1=$_FILES['acc_front']['tmp_name'];


$directory_1 = "Document Images/" . $id_front;
move_uploaded_file($id_front1, $directory_1);

$directory_2 = "Document Images/" . $id_back;
move_uploaded_file($id_back1, $directory_2);

$directory_3 = "Document Images/" . $pan_front;
move_uploaded_file($pan_front1, $directory_3);

$directory_4 = "Document Images/" . $pan_back1;
move_uploaded_file($pan_back1, $directory_4);

$directory_5 = "Document Images/" . $acc_front;
move_uploaded_file($acc_front1, $directory_1);


$result1=mysqli_query($conn,"insert into `document_of_shop` (`user_id`,`phone`,`id_proof_no`,`id_proof_front`,`id_proof_back`,`pan_no`,`pan_no_front`,`pan_no_back`,`account_no`,`ifsc`,`account_image`) values ('$user_id','$phone','$id_no','$id_front','$id_back','$pan_no','$pan_front','$pan_back','$account','$ifsc','$acc_front')");
if($result1){
$submitted="submitted";
$result1_updated=mysqli_query($conn,"update `register_user` set `verified`='$submitted' where `userphone`='$phone'");
header("location:document_submitted");
}else{

}



}


?>

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


<?php } 
?>