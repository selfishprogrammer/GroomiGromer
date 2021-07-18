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

    <div class="text-center my-3" style="color:black; font-size: 25px; font-family: math;">TOTAL ITEMS IN GROOMIGROMER</div><hr>


        <div class="shadow-sm" style="overflow-x: auto;">
            <table class="table table-bordered">
                <thead>
                    <tr style="background-color:black;">
                        <th style="color:white; font-family: math;"> Item Id </th>
                        <th style="color:white; font-family: math;"> User Id</th>
                        <th style="color:white; font-family: math;"> Shop Id</th>
                        <th style="color:white; font-family: math;"> Item Name</th>
                        <th style="color:white; font-family: math;"> Price</th>
                        <th style="color:white; font-family: math;"> Time</th>
                        <th style="color:white; font-family: math;"> Verification</th>
                        <th style="color:white; font-family: math;"> Status</th>
                        <th style="color:white; font-family: math;"> Update User</th>
                        <th style="color:white; font-family: math;"> Delete User</th>
                        <th style="color:white; font-family: math;"> Verify Shop</th>
                    </tr>
                </thead>
                <tbody>




                    <?php
                    include '../Connection/connection.php';
$date=date("Y-m-d");
                    $sql = "select * from `items` where `date`='$date'";
                    $result = mysqli_query($conn, $sql);
$nums=mysqli_num_rows($result);
if($nums > 0){
                    while ($row = mysqli_fetch_assoc($result)) {
                        if($row['verification']=="yes"){
                        echo ' 
<tr style="background-color:yellowgreen;">
<td style="color:white; font-family: math;">' . $row['item_id'] . '</td>
<td style="color:white; font-family: math;">' . $row['user_id'] . '</td>
<td style="color:white; font-family: math;">' . $row['shop_id'] . '</td>
<td style="color:white; font-family: math;">' . $row['item_in_shop'] . '</td>
<td style="color:white; font-family: math;">' . $row['price'] . '</td>
<td style="color:white; font-family: math;">' . $row['time_taken'] . '</td>
<td style="color:white; font-family: math;">' . $row['verification'] . '</td>
<td style="color:white; font-family: math;">' . $row['status'] . '</td>
<td style="color:white; font-family: math;"><a href="update_item.php?item_id=' . $row['item_id'] . '" class="btn btn-warning" style="width:10rem;">Update User</a></td>
<td style="color:white; font-family: math;"><a href="item_delete.php?item_id=' . $row['item_id'] . '" class="btn btn-danger" style="width:10rem;">Delete User</a></td>
<td style="color:white; font-family: math;"><a href="verify.php?item_id=' . $row['item_id'] . '" class="btn btn-success" style="width:10rem;">Verify Shops</a></td>
</tr>';
                        }

                        else{

                            echo ' 
                            <tr style="background-color:red;">
                            <td style="color:white; font-family: math;">' . $row['item_id'] . '</td>
                            <td style="color:white; font-family: math;">' . $row['user_id'] . '</td>
                            <td style="color:white; font-family: math;">' . $row['shop_id'] . '</td>
                            <td style="color:white; font-family: math;">' . $row['item_in_shop'] . '</td>
                            <td style="color:white; font-family: math;">' . $row['price'] . '</td>
                            <td style="color:white; font-family: math;">' . $row['time_taken'] . '</td>
                            <td style="color:white; font-family: math;">' . $row['verification'] . '</td>
                            <td style="color:white; font-family: math;">' . $row['status'] . '</td>
                            <td style="color:white; font-family: math;"><a href="update_item.php?item_id=' . $row['item_id'] . '" class="btn btn-warning" style="width:10rem;">Update User</a></td>
                            <td style="color:white; font-family: math;"><a href="item_delete.php?item_id=' . $row['item_id'] . '" class="btn btn-danger" style="width:10rem;">Delete User</a></td>
                            <td style="color:white; font-family: math;"><a href="verify.php?item_id=' . $row['item_id'] . '" class="btn btn-success" style="width:10rem;">Verify Shops</a></td>
                            </tr>';

                        }
                    }

                }
                else{
                    echo "Not  Found";
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