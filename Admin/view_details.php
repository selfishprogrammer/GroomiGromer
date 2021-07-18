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
                    <th style=" font-family: math; color:white;">Rating</th>
                    <th style=" font-family: math; color:white;">Opening Time</th>
                    <th style=" font-family: math; color:white;">Closing Time</th>
                    <th style=" font-family: math; color:white;">Base Price</th>
                    <th style=" font-family: math; color:white;">REG Id</th>
                    <th style=" font-family: math; color:white;">Wifi</th>
                    <th style=" font-family: math; color:white;">Telivision</th>
                    <th style=" font-family: math; color:white;">District</th>
                    <th style=" font-family: math; color:white;">Car</th>
                    <th style=" font-family: math; color:white;">Music</th>
                    <th style=" font-family: math; color:white;">AC</th>
                    <th style=" font-family: math; color:white;">Date Of REG</th>





            </thead>
            <tbody>




                <?php
                    include '../Connection/connection.php';
$shop_id=$_GET['shop_id'];
                    $sql = "select * from `shops` where `shop_id`='$shop_id'";
                    $result = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo ' 
<tr>
<td style=" font-family: math; color:black">' . $row['rating'] . '</td>
<td style=" font-family: math; color:black">' . $row['opening_time'] . '</td>
<td style=" font-family: math; color:black">' . $row['closing_time'] . '</td>
<td style=" font-family: math; color:black">' . $row['base_price'] . '</td>
<td style=" font-family: math; color:black">' . $row['reg_id'] . '</td>
';
if($row['amenities'] ==""){
    echo '<td style=" font-family: math; color:black">NO</td>
    ';



}else{
echo '
<td style=" font-family: math; color:black">YES</td>
                    ';}
                    if($row['amenities'] ==""){
                        echo '<td style=" font-family: math; color:black">NO</td>
                        ';
                    
                    
                    
                    }else{
                    echo '
                    <td style=" font-family: math; color:black">YES</td>
                                        ';}if($row['amenities1'] ==""){
                                            echo '<td style=" font-family: math; color:black">NO</td>
                                            ';
                                        
                                        
                                        
                                        }else{
                                        echo '
                                        <td style=" font-family: math; color:black">YES</td>
                                                            ';}if($row['amenities2'] ==""){
                                                                echo '<td style=" font-family: math; color:black">NO</td>
                                                                ';
                                                            
                                                            
                                                            
                                                            }else{
                                                            echo '
                                                            <td style=" font-family: math; color:black">YES</td>
                                                                                ';}if($row['amenities3'] ==""){
                                                                                    echo '<td style=" font-family: math; color:black">NO</td>
                                                                                    ';
                                                                                
                                                                                
                                                                                
                                                                                }else{
                                                                                echo '
                                                                                <td style=" font-family: math; color:black">YES</td>
                                                                                                    ';}

                                                                                                    if($row['amenities4'] ==""){
                                                                                                        echo '<td style=" font-family: math; color:black">NO</td>
                                                                                                        ';
                                                                                                    
                                                                                                    
                                                                                                    
                                                                                                    }else{
                                                                                                    echo '
                                                                                                    <td style=" font-family: math; color:black">YES</td>
                                                                                                                        ';}
                    echo
                    '

<td style=" font-family: math; color:black">' . $row['date_of_reg'] . '</td>

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