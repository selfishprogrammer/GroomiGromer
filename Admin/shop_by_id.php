<?php

session_start();
if (isset($_SESSION['loggedin']) == true && $_SESSION['user'] == 'admin') {




?>




    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <title>User View</title>
    </head>

    <body>

    <div class="shadow-sm bg-info" style="width: 100%;">


<form action="<?php $_SERVER['REQUEST_URI'] ?>" class="p-3" method="post">
    <div class="col-md-6 offset-md-3">

        <div class="form-group">
            <input type="text" name="reg_id" placeholder="Enter Registration ID" class="form-control" style="width:100%; font-family: cursive;" id="">
        </div>
        <div class="d-flex justify-content-center">
            <div class="form-group">
                <button type="submit" name="by_id" class="btn btn-warning form-control" style="width: 18rem;">
                    SEARCH
                </button>
            </div>
        </div>

    </div>
</form>



<form action="<?php $_SERVER['REQUEST_URI'] ?>" class="p-3" method="post">
    <div class="col-md-6 offset-md-3">

        <div class="form-group">
            <input type="number" name="number" placeholder="Enter Mobile Number" class="form-control" style="width:100%; font-family: cursive;" id="">
        </div>
        <div class="d-flex justify-content-center">
            <div class="form-group">
                <button type="submit" name="by_no" class="btn btn-warning form-control" style="width: 18rem;">
                    SEARCH
                </button>
            </div>
        </div>

    </div>
</form>

</div>
<?php
            include '../Connection/connection.php';

           if(isset($_POST['by_id'])){

           $reg_id=$_POST['reg_id'];
?>


        <div class="shadow-sm" style="overflow-x: auto;">
            <table class="table table-bordered">
                <thead>
                <tr style="background-color:black; font-family: math; color:white;">
                        <th style=" font-family: math; color:white;">Shop No</th>
                        <th style=" font-family: math; color:white;">Shop Name</th>
                        <th style=" font-family: math; color:white;">Email</th>
                        <th style=" font-family: math; color:white;">Phone</th>
                        <th style=" font-family: math; color:white;">Owner Name</th>
                        <th style=" font-family: math; color:white;">Shop Category</th>
                        <th style=" font-family: math; color:white;">State</th>
                        <th style=" font-family: math; color:white;">District</th>
                        <th style=" font-family: math; color:white;">Village</th>
                        <th style=" font-family: math; color:white;">shop_chairs_no</th>
                        <th style=" font-family: math; color:white;">Shop Pin</th>
                        <th style=" font-family: math; color:white;">User Id</th>

                        <th style=" font-family: math; color:white;">Image 1 </th>
                        <th style=" font-family: math; color:white;">Image 2</th>
                        <th style=" font-family: math; color:white;">Image 3</th>
                        <th style=" font-family: math; color:white;">Image 4</th>  
                        <th style=" font-family: math; color:white;">Update Shop</th>
                        <th style=" font-family: math; color:white;">Delete Request</th>
                        <th style=" font-family: math; color:white;">View Bookings</th>
                        <th style=" font-family: math; color:white;">View Item</th>
                        <th style=" font-family: math; color:white;">View Time</th>
                        <th style=" font-family: math; color:white;">View Details</th>
                      
                </thead>
                <tbody>




                    <?php
                    include '../Connection/connection.php';

                    $sql = "select * from `shops` where `reg_id`='$reg_id'";
                    $result = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo ' 
<tr>
<td style=" font-family: math; color:black">' . $row['shop_id'] . '</td>
<td style=" font-family: math; color:black">' . $row['shop_name'] . '</td>
<td style=" font-family: math; color:black">' . $row['email'] . '</td>
<td style=" font-family: math; color:black">' . $row['phone'] . '</td>
<td style=" font-family: math; color:black">' . $row['owner_name'] . '</td>
<td style=" font-family: math; color:black">' . $row['category_shop'] . '</td>
<td style=" font-family: math; color:black">' . $row['shop_state'] . '</td>
<td style=" font-family: math; color:black">' . $row['shop_dist'] . '</td>
<td style=" font-family: math; color:black">' . $row['dist'] . '</td>
<td style=" font-family: math; color:black">' . $row['chairs_no'] . '</td>
<td style=" font-family: math; color:black">' . $row['shop_pin'] . '</td>
<td style=" font-family: math; color:black">' . $row['user_id'] . '</td>

<td style=" font-family: math; color:black"><a href="Shops Image/' . $row['img_1'] . '"><img src="Shops Image/' . $row['img_1'] . '" width="60" height:"60"></a></td>
<td style=" font-family: math; color:black"><a href="Shops Image/' . $row['img_2'] . '"><img src="Shops Image/' . $row['img_2'] . '" width="60" height:"60"></a></td>
<td style=" font-family: math; color:black"><a href="Shops Image/' . $row['img_3'] . '"><img src="Shops Image/' . $row['img_3'] . '" width="60" height:"60"></a></td>
<td style=" font-family: math; color:black"><a href="Shops Image/' . $row['img_4'] . '"><img src="Shops Image/' . $row['img_4'] . '" width="60" height:"60"></a></td>
<td style=" font-family: math; color:black"><a href="shop_update.php?shop_id=' . $row['shop_id'] . '" class="btn btn-warning" style="width:10rem;">Update Shop</a></td>
<td style=" font-family: math; color:black"><a href="shop_delete.php?shop_id=' . $row['shop_id'] . '" class="btn btn-danger" style="width:10rem;">Delete Shop</a></td>
<td style=" font-family: math; color:black"><a href="shop_details_by_id.php?shop_id=' . $row['shop_id'] . '" class="btn btn-danger" style="width:10rem;">View Bookings</a></td>
<td style=" font-family: math; color:black"><a href="items_of_shops?shop_id=' . $row['shop_id'] . '" class="btn btn-info" style="width:10rem;">View Items</a></td>
<td style=" font-family: math; color:black"><a href="view_time?shop_id=' . $row['shop_id'] . '" class="btn btn-primary" style="width:10rem;">View Time</a></td>
<td style=" font-family: math; color:black"><a href="view_details?shop_id=' . $row['shop_id'] . '" class="btn btn-success" style="width:10rem;">View Details</a></td>
</tr>';
                    }
                }


                    ?>


                </tbody>
            </table>
        </div>


        <?php 

if(isset($_POST['by_no'])){

    $phone=$_POST['number'];


    ?>
<div class="shadow-sm" style="overflow-x: auto;">
<table class="table table-bordered">
    <thead>
    <tr style="background-color:black; font-family: math; color:white;">
            <th style=" font-family: math; color:white;">Shop No</th>
            <th style=" font-family: math; color:white;">Shop Name</th>
            <th style=" font-family: math; color:white;">Email</th>
            <th style=" font-family: math; color:white;">Phone</th>
            <th style=" font-family: math; color:white;">Owner Name</th>
            <th style=" font-family: math; color:white;">Shop Category</th>
            <th style=" font-family: math; color:white;">State</th>
            <th style=" font-family: math; color:white;">District</th>
            <th style=" font-family: math; color:white;">Village</th>
            <th style=" font-family: math; color:white;">shop_chairs_no</th>
            <th style=" font-family: math; color:white;">Shop Pin</th>
            <th style=" font-family: math; color:white;">User Id</th>

            <th style=" font-family: math; color:white;">Image 1 </th>
            <th style=" font-family: math; color:white;">Image 2</th>
            <th style=" font-family: math; color:white;">Image 3</th>
            <th style=" font-family: math; color:white;">Image 4</th>  
            <th style=" font-family: math; color:white;">Update Shop</th>
            <th style=" font-family: math; color:white;">Delete Request</th>
            <th style=" font-family: math; color:white;">View Bookings</th>
            <th style=" font-family: math; color:white;">View Item</th>
            <th style=" font-family: math; color:white;">View Time</th>
            <th style=" font-family: math; color:white;">View Details</th>
          
    </thead>
    <tbody>




        <?php
        include '../Connection/connection.php';

        $sql = "select * from `shops` where `phone`='$phone'";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {
            echo ' 
<tr>
<td style=" font-family: math; color:black">' . $row['shop_id'] . '</td>
<td style=" font-family: math; color:black">' . $row['shop_name'] . '</td>
<td style=" font-family: math; color:black">' . $row['email'] . '</td>
<td style=" font-family: math; color:black">' . $row['phone'] . '</td>
<td style=" font-family: math; color:black">' . $row['owner_name'] . '</td>
<td style=" font-family: math; color:black">' . $row['category_shop'] . '</td>
<td style=" font-family: math; color:black">' . $row['shop_state'] . '</td>
<td style=" font-family: math; color:black">' . $row['shop_dist'] . '</td>
<td style=" font-family: math; color:black">' . $row['dist'] . '</td>
<td style=" font-family: math; color:black">' . $row['chairs_no'] . '</td>
<td style=" font-family: math; color:black">' . $row['shop_pin'] . '</td>
<td style=" font-family: math; color:black">' . $row['user_id'] . '</td>

<td style=" font-family: math; color:black"><a href="Shops Image/' . $row['img_1'] . '"><img src="Shops Image/' . $row['img_1'] . '" width="60" height:"60"></a></td>
<td style=" font-family: math; color:black"><a href="Shops Image/' . $row['img_2'] . '"><img src="Shops Image/' . $row['img_2'] . '" width="60" height:"60"></a></td>
<td style=" font-family: math; color:black"><a href="Shops Image/' . $row['img_3'] . '"><img src="Shops Image/' . $row['img_3'] . '" width="60" height:"60"></a></td>
<td style=" font-family: math; color:black"><a href="Shops Image/' . $row['img_4'] . '"><img src="Shops Image/' . $row['img_4'] . '" width="60" height:"60"></a></td>
<td style=" font-family: math; color:black"><a href="shop_update.php?shop_id=' . $row['shop_id'] . '" class="btn btn-warning" style="width:10rem;">Update Shop</a></td>
<td style=" font-family: math; color:black"><a href="shop_delete.php?shop_id=' . $row['shop_id'] . '" class="btn btn-danger" style="width:10rem;">Delete Shop</a></td>
<td style=" font-family: math; color:black"><a href="shop_details_by_id.php?shop_id=' . $row['shop_id'] . '" class="btn btn-danger" style="width:10rem;">View Bookings</a></td>
<td style=" font-family: math; color:black"><a href="items_of_shops?shop_id=' . $row['shop_id'] . '" class="btn btn-info" style="width:10rem;">View Items</a></td>
<td style=" font-family: math; color:black"><a href="view_time?shop_id=' . $row['shop_id'] . '" class="btn btn-primary" style="width:10rem;">View Time</a></td>
<td style=" font-family: math; color:black"><a href="view_details?shop_id=' . $row['shop_id'] . '" class="btn btn-success" style="width:10rem;">View Details</a></td>
</tr>';
        }
    }


        ?>


    </tbody>
</table>
</div>


        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>

        <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    </body>

    </html>


<?php  }   ?>