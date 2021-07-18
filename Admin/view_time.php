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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>User View</title>
</head>

<body>

    <div class="text-center my-3" style="color:black; font-size: 25px; font-family: math;">SHOP DETAILS
    </div>
    <hr>


    <div class="shadow-sm" style="overflow-x: auto;">
        <table class="table table-bordered">
            <thead>
                <tr style="background-color:black; font-family: math; color:white;">
                    <th style=" font-family: math; color:white;">Shop Closed</th>
                    <th style=" font-family: math; color:white;">SUNDAY</th>
                    <th style=" font-family: math; color:white;">MONDAY</th>
                    <th style=" font-family: math; color:white;">TUESDAY</th>
                    <th style=" font-family: math; color:white;">WEDNESDAY</th>
                    <th style=" font-family: math; color:white;">THRUSDAY</th>
                    <th style=" font-family: math; color:white;">FRIDAY</th>
                    <th style=" font-family: math; color:white;">SATURDAY</th>






            </thead>
            <tbody>




                <?php
                    include '../Connection/connection.php';
$shop_id=$_GET['shop_id'];
                    $sql = "select * from `shops_time` where `shop_id`='$shop_id'";
                    $result = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo ' 
<tr>
<td style=" font-family: math; color:black">' . $row['closed_shop'] . '</td>

<td style=" font-family: math; color:black">' . $row['opening_time1'] . ' to ' . $row['closing_time1'] . '</td>
<td style=" font-family: math; color:black">' . $row['opening_time2'] . ' to ' . $row['closing_time2'] . '</td>
<td style=" font-family: math; color:black">' . $row['opening_time3'] . ' to ' . $row['closing_time3'] . '</td>
<td style=" font-family: math; color:black">' . $row['opening_time4'] . ' to ' . $row['closing_time4'] . '</td>
<td style=" font-family: math; color:black">' . $row['opening_time5'] . ' to ' . $row['closing_time5'] . '</td>
<td style=" font-family: math; color:black">' . $row['opening_time6'] . ' to ' . $row['closing_time6'] . '</td>
<td style=" font-family: math; color:black">' . $row['opening_time7'] . ' to ' . $row['closing_time7'] . '</td>


</tr>';
                    }



                    ?>


            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
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


<?php  }   ?>