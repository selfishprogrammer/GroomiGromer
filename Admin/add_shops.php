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

<body style="background-color: #FAFAFA;">
<?php
                        include '../Connection/connection.php';
$phone_real=$_GET['phone'];

$row_my=mysqli_fetch_assoc(mysqli_query($conn,"select * from `register_user` where `userphone`='$phone_real'"));
$useremail=$row_my['useremail'];
$username=$row_my['username'];

?>
    <div class="container">
        <div class="shadow-sm bg-white">
        
            <form action="<?php $_SERVER['REQUEST_URI'] ?>" class="m-5 pt-5 pb-5" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="text-center mb-5" style="font-size: 25px; font-family:cursive;">ADD SHOPS</div>
                </div>

                <div class="form-group">
                    <input type="text" name="shop_name1" id="shop_name" placeholder="Shop Name" style="font-family:cursive;" class="form-control">
                </div>






                <div class="form-group">
                    <input type="email" name="email" id="email" value="<?php echo $useremail ?>" placeholder="Shop Email" style="font-family:cursive;" class="form-control">
                </div>






                <div class="form-group">
                    <input type="number" name="phone" id="phone"   value="<?php echo $phone_real ?>" placeholder="Shop Number" style="font-family:cursive;" class="form-control">
                </div>







                <div class="form-group">
                    <input type="text" name="owner_name" id="owner_name"  value="<?php echo $username ?>" placeholder="Owner Name" style="font-family:cursive;" class="form-control">
                </div>







                <div class="form-group">
                    <select name="category_shop" style="font-family:cursive;" class="form-control" id="">
                        <option style="font-family:cursive;" value="" selectrd>--Select Shop--</option>
                        <option style="font-family:cursive;" value="Male">Male</option>
                        <option style="font-family:cursive;" value="Female">Female</option>
                        <option value="Both">Both</option>
                    </select>
                </div>






                <div class="form-group">


                    <select name="shop_state" style="font-family:cursive;" class="form-control" id="shop_state">
                        <option value="" selectrd>--Select Village--</option>
                        <?php

                        $sql = "select * from `state_services`";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {

                            echo ' <option  value="' . $row['state_id'] . '">' . $row['state'] . '</option>';
                        }
                        ?>


                    </select>
                </div>




                <div class="form-group">
                    <input type="text" name="shop_dist" id="shop_name" placeholder="Shop Dist" style="font-family:cursive;" class="form-control">
                </div>


                <div class="form-group">
                    <select name="dist" style="font-family:cursive;" class="form-control" id="dist">
                        <option value="">--Select Village--</option>
                    </select>
                </div>


                <div class="form-group">
                    <input type="number" name="shop_pin" id="shop_name" placeholder="Shop Pin Code" style="font-family:cursive;" class="form-control">
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
                        <option style="font-family:cursive;" value="8">8</option>
                        <option style="font-family:cursive;" value="10">10</option>
                        <option style="font-family:cursive;" value="11">11</option>
                        <option style="font-family:cursive;" value="12">12</option>
                        <option style="font-family:cursive;" value="13">13</option>
                        <option style="font-family:cursive;" value="14">14</option>
                        <option style="font-family:cursive;" value="15">15</option>
                        <option style="font-family:cursive;" value="16">16</option>
                        <option style="font-family:cursive;" value="17">17</option>
                        <option style="font-family:cursive;" value="18">18</option>
                        <option style="font-family:cursive;" value="19">19</option>
                        <option style="font-family:cursive;" value="20">20</option>
                        <option style="font-family:cursive;" value="21">21</option>
                        <option style="font-family:cursive;" value="22">22</option>

                    </select>
                </div>
                <div class="form-group">
                    <select name="workers_no" style="font-family:cursive;" class="form-control" id="">
                        <option style="font-family:cursive;" value="" selectrd>--Select No of Workers--</option>
                        <option style="font-family:cursive;" value="1">1</option>
                        <option style="font-family:cursive;" value="2">2</option>
                        <option style="font-family:cursive;" value="3">3</option>
                        <option style="font-family:cursive;" value="4">4</option>
                        <option style="font-family:cursive;" value="5">5</option>
                        <option style="font-family:cursive;" value="6">6</option>
                        <option style="font-family:cursive;" value="7">7</option>
                        <option style="font-family:cursive;" value="8">8</option>
                        <option style="font-family:cursive;" value="10">10</option>
                        <option style="font-family:cursive;" value="11">11</option>
                        <option style="font-family:cursive;" value="12">12</option>
                        <option style="font-family:cursive;" value="13">13</option>
                        <option style="font-family:cursive;" value="14">14</option>
                        <option style="font-family:cursive;" value="15">15</option>
                        <option style="font-family:cursive;" value="16">16</option>
                        <option style="font-family:cursive;" value="17">17</option>
                        <option style="font-family:cursive;" value="18">18</option>
                        <option style="font-family:cursive;" value="19">19</option>
                        <option style="font-family:cursive;" value="20">20</option>
                        <option style="font-family:cursive;" value="21">21</option>
                        <option style="font-family:cursive;" value="22">22</option>

                    </select>
                </div>

                <div class="form-group">
                    <input type="file" name="img_1" id="shop_name" placeholder="Shop Pin Code" style="font-family:cursive;" class="form-control">
                </div>

                <div class="form-group">
                    <input type="file" name="img_2" id="shop_name" placeholder="Shop Pin Code" style="font-family:cursive;" class="form-control">
                </div>
                <div class="form-group">
                    <input type="file" name="img_3" id="shop_name" placeholder="Shop Pin Code" style="font-family:cursive;" class="form-control">
                </div>
                <div class="form-group">
                    <input type="file" name="img_4" id="shop_name" placeholder="Shop Pin Code" style="font-family:cursive;" class="form-control">
                </div>
              
                <div class="form-group">
                    <input type="text" name="reg_id" id="shop_name" placeholder="Shop Regestration Id"  class="form-control">
                </div>

                

                <div class="form-group">
                    <input type="text" name="opening_time" id="shop_name" placeholder="Opening Time "  class="form-control">
                </div>

                <div class="form-group">
                    <input type="text" name="closing_time" id="shop_name" placeholder="Closing Time"  class="form-control">
                </div>

                <div class="form-group">
                    <input type="number" name="base_price" id="shop_name" placeholder="Shop Base Price"  class="form-control">
                </div>
                <div class="form-group">
                <div class="mx-2 my-2" style="font-family: cursive;"><b>Amenities :--</b></div>
                </div>
                <div class="form-group">

               <select name="amenities" class="form-control" id="">
               <option value="" selected>WIFI</option>
               <option value="wifi">YES</option>
               <option value="" >NO</option>

               
               </select>
                </div>


                <div class="form-group">

<select name="amenities1" class="form-control" id="">
<option value="" selected>TELIVISION</option>
<option value="telivision">YES</option>
<option value="" >NO</option>


</select>
 </div>



 <div class="form-group">

<select name="amenities2" class="form-control" id="">
<option value="" selected>CAR</option>
<option value="car">YES</option>
<option value="" >NO</option>


</select>
 </div>


 <div class="form-group">

<select name="amenities3" class="form-control" id="">
<option value="" selected>MUSIC</option>
<option value="music">YES</option>
<option value="" >NO</option>


</select>
 </div>



 <div class="form-group">

<select name="amenities4" class="form-control" id="">
<option value="" selected>AC</option>
<option value="ac">YES</option>
<option value="" >NO</option>


</select>
 </div>
 <div class="form-group">

 <div class="mx-2 my-2" style="font-family: cursive;"><b>Days Of Opening :--</b></div>


 </div>
        
        <div class="form-group">

        <select name="day1" class="form-control" id="">
               <option value="" selected>MONDAY</option>
               <option value="Monday">YES</option>
               <option value="" >NO</option>

               
               </select>
                </div>


                <div class="form-group">

<select name="day2" class="form-control" id="">
<option value="" selected>TUESDAY</option>
<option value="Tuesday">YES</option>
<option value="" >NO</option>


</select>
 </div>



 <div class="form-group">

<select name="day3" class="form-control" id="">
<option value="" selected>WEDNESDAY</option>
<option value="Wednesday">YES</option>
<option value="" >NO</option>


</select>
 </div>


 <div class="form-group">

<select name="day4" class="form-control" id="">
<option value="" selected>THURSDAY</option>
<option value="Thursday">YES</option>
<option value="" >NO</option>


</select>
 </div>



 <div class="form-group">

<select name="day5" class="form-control" id="">
<option value="" selected>FRIDAY</option>
<option value="Friday">YES</option>
<option value="" >NO</option>


</select>
 </div>        

 <div class="form-group">

<select name="day6" class="form-control" id="">
<option value="" selected>SATURDAY</option>
<option value="Saturday">YES</option>
<option value="" >NO</option>


</select>

 </div>

 
 <div class="form-group">

<select name="day7" class="form-control" id="">
<option value="" selected>SUNDAY</option>
<option value="Sunday">YES</option>
<option value="" >NO</option>


</select>

 </div>


        

                <div class="form-group">
                    <textarea name="shop_desp" id="shop_name" placeholder="Shop Description" style="font-family:cursive; width:100%; height:400px;" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-outline-warning form-control">ADD SHOP</button>
                </div>

            </form>
        </div>


    </div>

    <?php

include '../Connection/connection.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $shop_name1 = $_POST['shop_name1'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $owner_name = $_POST['owner_name'];
        $category_shop = $_POST['category_shop'];
        $shop_state = $_POST['shop_state'];
        $shop_dist = $_POST['shop_dist'];
        $dist = $_POST['dist'];
        $shop_pin = $_POST['shop_pin'];
        $chairs_no = $_POST['chairs_no'];
        $shop_desp = $_POST['shop_desp'];
        $img_1 = $_FILES['img_1']['name'];
        $img_2 = $_FILES['img_2']['name'];
        $img_3 = $_FILES['img_3']['name'];
        $img_4 = $_FILES['img_4']['name'];
        $img_1_tmp = $_FILES['img_1']['tmp_name'];
        $img_2_tmp = $_FILES['img_2']['tmp_name'];
        $img_3_tmp = $_FILES['img_3']['tmp_name'];
        $img_4_tmp = $_FILES['img_4']['tmp_name'];
        $reg_id=$_POST['reg_id'];
        $opening_time=$_POST['opening_time'];
        $closong_time=$_POST['closing_time'];
        $base_price=$_POST['base_price'];
        $amenities=$_POST['amenities'];
        $amenities1=$_POST['amenities1'];
        $amenities2=$_POST['amenities2'];
        $amenities3=$_POST['amenities3'];
        $amenities4=$_POST['amenities4'];
        $day1=$_POST['day1'];
        $day2=$_POST['day2'];
        $day3=$_POST['day3'];
        $day4=$_POST['day4'];
        $day5=$_POST['day5'];
        $day6=$_POST['day6'];
        $day7=$_POST['day7'];
        $workers_no=$_POST['workers_no'];
        $date=date("Y-m-d");

        $directory_1 = "Shops Image/" . $img_1;
        move_uploaded_file($img_1_tmp, $directory_1);

        $directory_2 = "Shops Image/" . $img_2;
        move_uploaded_file($img_2_tmp, $directory_2);

        $directory_3 = "Shops Image/" . $img_3;
        move_uploaded_file($img_3_tmp, $directory_3);

        $directory_4 = 'Shops Image/' . $img_4;
        move_uploaded_file($img_4_tmp, $directory_4);







        $sql = "insert into `shops`(`shop_name`,`email`,`phone`,`owner_name`,`category_shop`,`shop_state`,`shop_dist`,`dist`,`shop_pin`,`chairs_no`,`workers_no`,`img_1`,`img_2`,`img_3`,`img_4`,`shop_desp`,`date_of_reg`,`reg_id`,`opening_time`,`closing_time`,`base_price`,`amenities`,`amenities1`,`amenities2`,`amenities3`,`amenities4`,`day1`,`day2`,`day3`,`day4`,`day5`,`day6`,`day7`) 
        values ('$shop_name1','$email','$phone','$owner_name','$category_shop','$shop_state','$shop_dist','$dist','$shop_pin','$chairs_no','$workers_no','$img_1','$img_2','$img_3','$img_4','$shop_desp','$date','$reg_id','$opening_time','$closong_time','$base_price','$amenities','$amenities1','$amenities2','$amenities3','$amenities4','$day1','$day2','$day3','$day4','$day5','$day6','$day7')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            
            $row=mysqli_fetch_assoc(mysqli_query($conn,"select * from `shops` where `phone`='$phone'"));
            $shop_id=$row['shop_id'];
            
            echo '<script> swal("Shop Added Successfully", "Congrats Sourav , Rahul And Sabitendra You Got One New Shop", "success") </script>;';

            ?>
<a href="shop_timing.php?shop_id=<?php echo $shop_id ?>" type="submit" class="btn btn-outline-info">NEXT ONE</a>
            <?php
        } else {
            echo '<script> swal("Something Went Wrong", "Aabe Thik Se Add Kar Na", "error") </script>;';

        }


    }







    ?>



    <script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


    <script>
        $(document).ready(() => {
            console.log("Connected");

            $("#shop_state").on('change', function() {
                var StateId = $(this).val();
                console.log("StateId")




                $.ajax({
                    url: "service.php",
                    method: "POST",
                    data: {
                        id: StateId
                    },
                    dataType: "html",
                    success: (data) => {
                        $('#dist').html(data)
                        console.log(data)
                    }
                })
            });










        });
    </script>

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