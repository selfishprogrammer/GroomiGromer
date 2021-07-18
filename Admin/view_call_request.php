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

    <div class="text-center my-3" style="color:black; font-size: 25px; font-family: math;">TOTAL CALL REQUEST IN GROOMIGROMER</div><hr>


        <div class="shadow-sm" style="overflow-x: auto;">
            <table class="table table-bordered">
                <thead>
                    <tr style="background-color:black; font-family: math; color:white;">
                         <th style=" font-family: math; color:white;">Serial No</th>
                        <th style=" font-family: math; color:white;">Mobile No</th>
                        <th style=" font-family: math; color:white;">City/Village</th>
                        <th style=" font-family: math; color:white;">Responce</th>
                        <th style=" font-family: math; color:white;">Update Request</th>
                        <th style=" font-family: math; color:white;">Delete Request</th>
                        <th style=" font-family: math; color:white;">Add Responce</th>
                    </tr>
                </thead>
                <tbody>




                    <?php
                    include '../Connection/connection.php';

                    $sql = "select * from `call_request`";
                    $result = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                        if($row['responce']=="verified"){
                        echo ' 
<tr style="background-color:green; font-family: math; color:white;">
<td style=" font-family: math; color:white;">' . $row['slno'] . '</td>
<td style=" font-family: math; color:white;">' . $row['request_call'] . '</td>
<td style=" font-family: math; color:white;">' . $row['phone'] . '</td>
<td style=" font-family: math; color:white;">' . $row['responce'] . '</td>

<td style=" font-family: math; color:white;"><a href="call_request_update.php?id=' . $row['slno'] . '" class="btn btn-warning" style="width:10rem;">Update Request</a></td>
<td style=" font-family: math; color:white;"><a href="call_request_delete.php?id=' . $row['slno'] . '" class="btn btn-danger" style="width:10rem;">Delete Request</a></td>
<td style=" font-family: math; color:white;"><a href="call_request_user?phone='.$row['phone'].' " class="btn btn-success" style="width:10rem;">Add Responce</a></td>
</tr>';
                        }
                        else{
                            echo ' 
                            <tr style="background-color:red; font-family: math; color:white;">
                            <td>' . $row['slno'] . '</td>
                            <td>' . $row['request_call'] . '</td>
                            <td>' . $row['phone'] . '</td>
                            <td>' . $row['responce'] . '</td>
                            
                            <td><a href="call_request_update.php?id=' . $row['slno'] . '" class="btn btn-warning" style="width:10rem;">Update Request</a></td>
                            <td><a href="call_request_delete.php?id=' . $row['slno'] . '" class="btn btn-danger" style="width:10rem;">Delete Request</a></td>
                            <td><a href="register_admin?phone='.$row['phone'].'" class="btn btn-success" style="width:10rem;">Add Responce</a></td>
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