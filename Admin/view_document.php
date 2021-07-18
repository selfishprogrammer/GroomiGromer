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

    <div class="text-center my-3" style="color:black; font-size: 25px; font-family: math;">TOTAL SHOPS IN GROOMIGROMER</div><hr>
    <div class="shadow-sm bg-info" style="width: 100%;">


        <form action="<?php $_SERVER['REQUEST_URI'] ?>" class="p-3" method="post">
            <div class="col-md-6 offset-md-3">

                <div class="form-group">
                    <input type="number" name="phone" placeholder="Enter Mobile" class="form-control" style="width:100%; font-family: cursive;" id="">
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

if(isset($_POST['by_no'])){
$phone=$_POST['phone'];
?>
        <div class="shadow-sm" style="overflow-x: auto;">
            <table class="table table-bordered">
                <thead>
                <tr style="background-color:black; font-family: math; color:white;">
                        <th style=" font-family: math; color:white;">Phone No</th>
                        <th style=" font-family: math; color:white;">Aadhar Card No</th>
                        <th style=" font-family: math; color:white;">Aadhar Front</th>
                        <th style=" font-family: math; color:white;">Aadhar Back</th>
                        <th style=" font-family: math; color:white;">PAN Number</th>
                        <th style=" font-family: math; color:white;">PAN Front</th>
                        <th style=" font-family: math; color:white;">PAN Back</th>
                        <th style=" font-family: math; color:white;">Account Number</th>
                        <th style=" font-family: math; color:white;">IFSC</th>
                        <th style=" font-family: math; color:white;">Account Image</th>
                        <th style=" font-family: math; color:white;">Status</th>
                        <th style=" font-family: math; color:white;">Update Status</th>

                        <th style=" font-family: math; color:white;">Add Shop</th>

                       

                      
                </thead>
                <tbody>




                    <?php
                    include '../Connection/connection.php';

                    $sql = "select * from `document_of_shop` where `phone`='$phone'";
                    $result = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo ' 
<tr>
<td style=" font-family: math; color:black">' . $row['phone'] . '</td>
<td style=" font-family: math; color:black">' . $row['id_proof_no'] . '</td>
<td style=" font-family: math; color:black"><a href="../Users Folder/Document Images/' . $row['id_proof_front'] . '"><img src="../Users Folder/Document Images/' . $row['account_image'] . '" width="60" height:"60"></a></td>
<td style=" font-family: math; color:black"><a href="../Users Folder/Document Images/' . $row['id_proof_back'] . '"><img src="../Users Folder/Document Images/' . $row['account_image'] . '" width="60" height:"60"></a></td>
<td style=" font-family: math; color:black">' . $row['pan_no'] . '</td>
<td style=" font-family: math; color:black"><a href="../Users Folder/Document Images/' . $row['pan_no_front'] . '"><img src="../Users Folder/Document Images/' . $row['account_image'] . '" width="60" height:"60"></a></td>
<td style=" font-family: math; color:black"><a href="../Users Folder/Document Images/' . $row['pan_no_back'] . '"><img src="../Users Folder/Document Images/' . $row['account_image'] . '" width="60" height:"60"></a></td>
<td style=" font-family: math; color:black">' . $row['account_no'] . '</td>
<td style=" font-family: math; color:black">' . $row['ifsc'] . '</td>


<td style=" font-family: math; color:black"><a href="../Users Folder/Document Images/' . $row['account_image'] . '"><img src="../Users Folder/Document Images/' . $row['account_image'] . '" width="60" height:"60"></a></td>
<td style=" font-family: math; color:black">' . $row['status'] . '</td>

<td style=" font-family: math; color:black"><a href="verify_document?phone=' . $row['phone'] . '" class="btn btn-success" style="width:10rem;">Verify Document</a></td>
<td style=" font-family: math; color:black"><a href="add_shops?phone=' . $row['phone'] . '" class="btn btn-secondary" style="width:10rem;">Add Shop</a></td>

</tr>';
                    }

                

                    ?>


                </tbody>
            </table>
        </div>
<?php } 

else{
?>

<div class="shadow-sm" style="overflow-x: auto;">
            <table class="table table-bordered">
                <thead>
                <tr style="background-color:black; font-family: math; color:white;">
                        <th style=" font-family: math; color:white;">Phone No</th>
                        <th style=" font-family: math; color:white;">Aadhar Card No</th>
                        <th style=" font-family: math; color:white;">Aadhar Front</th>
                        <th style=" font-family: math; color:white;">Aadhar Back</th>
                        <th style=" font-family: math; color:white;">PAN Number</th>
                        <th style=" font-family: math; color:white;">PAN Front</th>
                        <th style=" font-family: math; color:white;">PAN Back</th>
                        <th style=" font-family: math; color:white;">Account Number</th>
                        <th style=" font-family: math; color:white;">IFSC</th>
                        <th style=" font-family: math; color:white;">Account Image</th>
                        <th style=" font-family: math; color:white;">Status</th>
                        <th style=" font-family: math; color:white;">Update Status</th>

                        <th style=" font-family: math; color:white;">Add Shop</th>

                       

                      
                </thead>
                <tbody>




                    <?php
                    include '../Connection/connection.php';

                    $sql = "select * from `document_of_shop`";
                    $result = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo ' 
<tr>

<td style=" font-family: math; color:black">' . $row['phone'] . '</td>
<td style=" font-family: math; color:black">' . $row['id_proof_no'] . '</td>
<td style=" font-family: math; color:black"><a href="../Users Folder/Document Images/' . $row['id_proof_front'] . '"><img src="../Users Folder/Document Images/' . $row['account_image'] . '" width="60" height:"60"></a></td>
<td style=" font-family: math; color:black"><a href="../Users Folder/Document Images/' . $row['id_proof_back'] . '"><img src="../Users Folder/Document Images/' . $row['account_image'] . '" width="60" height:"60"></a></td>
<td style=" font-family: math; color:black">' . $row['pan_no'] . '</td>
<td style=" font-family: math; color:black"><a href="../Users Folder/Document Images/' . $row['pan_no_front'] . '"><img src="../Users Folder/Document Images/' . $row['account_image'] . '" width="60" height:"60"></a></td>
<td style=" font-family: math; color:black"><a href="../Users Folder/Document Images/' . $row['pan_no_back'] . '"><img src="../Users Folder/Document Images/' . $row['account_image'] . '" width="60" height:"60"></a></td>
<td style=" font-family: math; color:black">' . $row['account_no'] . '</td>
<td style=" font-family: math; color:black">' . $row['ifsc'] . '</td>



<td style=" font-family: math; color:black"><a href="../Users Folder/Document Images/' . $row['account_image'] . '"><img src="../Users Folder/Document Images/' . $row['account_image'] . '" width="60" height:"60"></a></td>
<td style=" font-family: math; color:black">' . $row['status'] . '</td>

<td style=" font-family: math; color:black"><a href="verify_document?phone=' . $row['phone'] . '" class="btn btn-success" style="width:10rem;">Verify Document</a></td>
<td style=" font-family: math; color:black"><a href="add_shops?phone=' . $row['phone'] . '" class="btn btn-secondary" style="width:10rem;">Add Shop</a></td>

</tr>';
                    }

                

                    ?>


                </tbody>
            </table>
        </div>

<?php } ?>
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