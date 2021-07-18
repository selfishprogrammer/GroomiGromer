<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Add Shop</title>
</head>

<body>
<?php 
include '../Connection/connection.php';
$shop_id=$_GET['shop_id'];
$sql="select * from `shops` where `shop_id`='$shop_id'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){



?>
    <div class="container">
        <div class="shadow-sm">
            <form action="<?php echo $_SERVER['REQUEST_URI']  ?>" class="m-5 pt-5 pb-5" method="post">
                <div class="form-group">
                    <div class="text-center mb-5" style="font-size: 25px; font-family:cursive;">UPDATE SHOPS</div>
                </div>

                <div class="form-group">
                    <input type="text" name="shop_name" id="shop_name" placeholder="Shop Name" value="<?php echo $row['shop_name']   ?>" style="font-family:cursive;" class="form-control">
                </div>






                <div class="form-group">
                    <input type="email" name="email" id="email" placeholder="Shop Email" value="<?php echo $row['email']   ?>" style="font-family:cursive;" class="form-control">
                </div>






                <div class="form-group">
                    <input type="number" name="phone" id="phone" placeholder="Shop Number" value="<?php echo $row['phone']   ?>" style="font-family:cursive;" class="form-control">
                </div>







                <div class="form-group">
                    <input type="text" name="owner_name" id="owner_name" placeholder="Owner Name" value="<?php echo $row['owner_name']   ?>" style="font-family:cursive;" class="form-control">
                </div>













               





             

                <div class="form-group">
                    <select name="chairs_no" style="font-family:cursive;" class="form-control" id="">
                        <option style="font-family:cursive;" value="" selectrd>--Select No of Chairs--</option>
                        <option style="font-family:cursive;" value="1">1</option>
                        <option style="font-family:cursive;" value="2">2</option>
                        <option style="font-family:cursive;" value="3">3</option>
                        <option style="font-family:cursive;" value="4">4</option>
                        <option style="font-family:cursive;" value="5">5</option>
                        <option style="font-family:cursive;" value="6">6</option>
                        <option style="font-family:cursive;" value="7">7</option>

                    </select>
                </div>

               

                <div class="form-group">
                    <button type="submit" class="btn btn-outline-warning form-control">ADD SHOP</button>
                </div>

            </form>
        </div>


    </div>
<?php 
}  ?>
    <?php
$shop_id=$_GET['shop_id'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $shop_name = $_POST['shop_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $rowner_name = $_POST['owner_name'];
        $chairs_no = $_POST['chairs_no'];
      



        $sql = "update `shops` set `shop_name`='$shop_name',`email`='$email',`phone`='$phone',`owner_name`='$rowner_name',`chairs_no`='$chairs_no' where `shop_id`='$shop_id'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo '<script> swal("Shop Updated Successfully", "Congrats Sourav , Rahul And Sabitendra You Got One New Shop", "success") </script>;';
        } else {
            echo '<script> swal("Something Went Wrong", "Aabe Thik Se Add Kar Na", "error") </script>;';
        }
    }







    ?>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>