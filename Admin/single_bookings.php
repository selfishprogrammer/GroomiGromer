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

    <div class="text-center my-3" style="color:black; font-size: 25px; font-family: math;">TOTAL BOOKINGS IN GROOMIGROMER</div><hr>


        <div class="shadow-sm" style="overflow-x: auto;">
            <table class="table table-bordered">
                <thead>
                <tr style="background-color:black; font-family: math; color:white;">
                        <th style=" font-family: math; color:white;">Booking No</th>
                        <th style=" font-family: math; color:white;">Booking ID</th>
                        <th style=" font-family: math; color:white;">Shop Id</th>
                        <th style=" font-family: math; color:white;">Booking Status</th>
                        <th style=" font-family: math; color:white;">Booking Date</th>
                        <th style=" font-family: math; color:white;">Booking Time</th>
                        <th style=" font-family: math; color:white;">User_id</th>
                        <th style=" font-family: math; color:white;">OTP</th>

                       
 
                        <th style=" font-family: math; color:white;">View Bookings</th>
                      
                </thead>
                <tbody>




                    <?php
                    include '../Connection/connection.php';
$date=date("Y/m/d");
                    $sql = "select * from `booking_renter` where `booking_date`='$date'";
                    $result = mysqli_query($conn, $sql);
$nums=mysqli_num_rows($result);
if($nums>0){
                    while ($row = mysqli_fetch_assoc($result)) {
                        if($row['booking_status']=="Cancelled"){
                            echo ' 
                            <tr style="background-color:red;">
                            <td style=" font-family: math; color:black">' . $row['slno'] . '</td>
                            <td style=" font-family: math; color:black">' . $row['booking_id'] . '</td>
                            <td style=" font-family: math; color:black">' . $row['shop_id'] . '</td>
                            <td style=" font-family: math; color:black">' . $row['booking_status'] . '</td>
                            <td style=" font-family: math; color:black">' . $row['booking_date'] . '</td>
                            <td style=" font-family: math; color:black">' . $row['booking_time'] . '</td>
                            <td style=" font-family: math; color:black">' . $row['user_id'] . '</td>
                            <td style=" font-family: math; color:black">' . $row['otp'] . '</td>
                            
                            <td style=" font-family: math; color:black"><a href="booking_details.php?bookings_id=' . $row['booking_id'] . '" class="btn btn-warning" style="width:100%;">View Bookings</a></td>
                            </tr>';
                                                }
                                                else if($row['booking_status']=="Completed"){
                        
                        echo ' 
<tr style="background-color:yellowgreen;">
<td style=" font-family: math; color:black">' . $row['slno'] . '</td>
<td style=" font-family: math; color:black">' . $row['booking_id'] . '</td>
<td style=" font-family: math; color:black">' . $row['shop_id'] . '</td>
<td style=" font-family: math; color:black">' . $row['booking_status'] . '</td>
<td style=" font-family: math; color:black">' . $row['booking_date'] . '</td>
<td style=" font-family: math; color:black">' . $row['booking_time'] . '</td>
<td style=" font-family: math; color:black">' . $row['user_id'] . '</td>
<td style=" font-family: math; color:black">' . $row['otp'] . '</td>

<td style=" font-family: math; color:black"><a href="booking_details.php?bookings_id=' . $row['booking_id'] . '" class="btn btn-warning" style="width:100%;">View Bookings</a></td>
</tr>';
                    }

                    else if($row['booking_status']=="Confirmed"){
                        echo ' 
                        <tr style="background-color:orange;">
                        <td style=" font-family: math; color:black">' . $row['slno'] . '</td>
                        <td style=" font-family: math; color:black">' . $row['booking_id'] . '</td>
                        <td style=" font-family: math; color:black">' . $row['shop_id'] . '</td>
                        <td style=" font-family: math; color:black">' . $row['booking_status'] . '</td>
                        <td style=" font-family: math; color:black">' . $row['booking_date'] . '</td>
                        <td style=" font-family: math; color:black">' . $row['booking_time'] . '</td>
                        <td style=" font-family: math; color:black">' . $row['user_id'] . '</td>
                        <td style=" font-family: math; color:black">' . $row['otp'] . '</td>
                        
                        <td style=" font-family: math; color:black"><a href="booking_details.php?bookings_id=' . $row['booking_id'] . '" class="btn btn-warning" style="width:100%;">View Bookings</a></td>
                        </tr>';
                    }


                }
            }
            else{
                echo "Not Found";
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