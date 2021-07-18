<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Add Shop</title>
</head>

<body style="background-color: #FAFAFA;">

    <div class="container">

        <div class="shadow-sm bg-white my-4" style="border-radius: 20px;">

            <div class="text-center py-4" style="font-size: 20px; font-family: math;"><b>ADD TIME</b></div>
            <hr>


            <form action="<?php $_SERVER['REQUEST_URI']  ?>" class="m-3" method="post">
                <div class="text-center py-3" style="font-family: math; font-size:20px;"><b>SUNDAY</b></div>
                <input type="hidden" value="Sunday" name="Sunday" >
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <select name="open_sunday" class="form-control" id="">

                            <option value="" selected>--Opening Time--</option>
                            <option value="08:00AM">08:00AM</option>
                            <option value="09:00AM">09:00AM</option>

                            <option value="10:00AM">10:00AM</option>

                            <option value="11:00AM">11:00AM</option>
                            <option value="11:00AM">12:00AM</option>
                            <option style="color: red;" value="Closed Shop">Closed Shop</option>



                        </select>
                    </div>

                    </div>
                    <div class="col-md-6">
                    <div class="form-group">

                        <select name="close_sunday" class="form-control" id="">

                            <option value="" selected>--Closing Time--</option>
                            <option value="06:00PM">06:00PM</option>
                            <option value="07:00PM">07:00PM</option>

                            <option value="08:00PM">08:00PM</option>

                            <option value="09:00PM">09:00PM</option>
                            <option value="10:00PM">10:00PM</option>
                            <option value="11:00PM">11:00PM</option>

                            <option value="11:00PM">12:00PM</option>
                            <option style="color: red;" value="Closed Shop">Closed Shop</option>



                        </select>
                    </div>
                    </div>
                </div>






                <div class="text-center py-3" style="font-family: math; font-size:20px;"><b>MONDAY</b></div>
                <input type="hidden" value="Monday" name="Monday">
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <select name="open_monday" class="form-control" id="">

                            <option value="" selected>--Opening Time--</option>
                            <option value="08:00AM">08:00AM</option>
                            <option value="09:00AM">09:00AM</option>

                            <option value="10:00AM">10:00AM</option>

                            <option value="11:00AM">11:00AM</option>
                            <option value="11:00AM">12:00AM</option>
                            <option style="color: red;" value="Closed Shop">Closed Shop</option>



                        </select>
                    </div>

                    </div>
                    <div class="col-md-6">
                    <div class="form-group">

                        <select name="close_monday" class="form-control" id="">

                            <option value="" selected>--Closing Time--</option>
                            <option value="06:00PM">06:00PM</option>
                            <option value="07:00PM">07:00PM</option>

                            <option value="08:00PM">08:00PM</option>

                            <option value="09:00PM">09:00PM</option>
                            <option value="10:00PM">10:00PM</option>
                            <option value="11:00PM">11:00PM</option>

                            <option value="11:00PM">12:00PM</option>
                            <option style="color: red;" value="Closed Shop">Closed Shop</option>



                        </select>
                    </div>
                    </div>
                </div>





                <div class="text-center py-3" style="font-family: math; font-size:20px;"><b>TUESDAY</b></div>
                <input type="hidden" value="Tuesday" name="Tuesday">
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <select name="open_tuesday" class="form-control" id="">

                            <option value="" selected>--Opening Time--</option>
                            <option value="08:00AM">08:00AM</option>
                            <option value="09:00AM">09:00AM</option>

                            <option value="10:00AM">10:00AM</option>

                            <option value="11:00AM">11:00AM</option>
                            <option value="11:00AM">12:00AM</option>
                            <option style="color: red;" value="Closed Shop">Closed Shop</option>



                        </select>
                    </div>

                    </div>
                    <div class="col-md-6">
                    <div class="form-group">

                        <select name="close_tuesday" class="form-control" id="">

                            <option value="" selected>--Closing Time--</option>
                            <option value="06:00PM">06:00PM</option>
                            <option value="07:00PM">07:00PM</option>

                            <option value="08:00PM">08:00PM</option>

                            <option value="09:00PM">09:00PM</option>
                            <option value="10:00PM">10:00PM</option>
                            <option value="11:00PM">11:00PM</option>

                            <option value="11:00PM">12:00PM</option>
                            <option style="color: red;" value="Closed Shop">Closed Shop</option>



                        </select>
                    </div>
                    </div>
                </div>







                <div class="text-center py-3" style="font-family: math; font-size:20px;"><b>WEDNESDAY</b></div>
                <input type="hidden" value="Wednesday" name="Wednesday">
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <select name="open_wednesday" class="form-control" id="">

                            <option value="" selected>--Opening Time--</option>
                            <option value="08:00AM">08:00AM</option>
                            <option value="09:00AM">09:00AM</option>

                            <option value="10:00AM">10:00AM</option>

                            <option value="11:00AM">11:00AM</option>
                            <option value="11:00AM">12:00AM</option>
                            <option style="color: red;" value="Closed Shop">Closed Shop</option>



                        </select>
                    </div>

                    </div>
                    <div class="col-md-6">
                    <div class="form-group">

                        <select name="close_wednesday" class="form-control" id="">

                            <option value="" selected>--Closing Time--</option>
                            <option value="06:00PM">06:00PM</option>
                            <option value="07:00PM">07:00PM</option>

                            <option value="08:00PM">08:00PM</option>

                            <option value="09:00PM">09:00PM</option>
                            <option value="10:00PM">10:00PM</option>
                            <option value="11:00PM">11:00PM</option>

                            <option value="11:00PM">12:00PM</option>
                            <option style="color: red;" value="Closed Shop">Closed Shop</option>



                        </select>
                    </div>
                    </div>
                </div>




                <div class="text-center py-3" style="font-family: math; font-size:20px;"><b>THURSDAY</b></div>
                <input type="hidden" value="Thursday" name="Thursday">
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <select name="open_thursday" class="form-control" id="">

                            <option value="" selected>--Opening Time--</option>
                            <option value="08:00AM">08:00AM</option>
                            <option value="09:00AM">09:00AM</option>

                            <option value="10:00AM">10:00AM</option>

                            <option value="11:00AM">11:00AM</option>
                            <option value="11:00AM">12:00AM</option>
                            <option style="color: red;" value="Closed Shop">Closed Shop</option>



                        </select>
                    </div>

                    </div>
                    <div class="col-md-6">
                    <div class="form-group">

                        <select name="close_thursday" class="form-control" id="">

                            <option value="" selected>--Closing Time--</option>
                            <option value="06:00PM">06:00PM</option>
                            <option value="07:00PM">07:00PM</option>

                            <option value="08:00PM">08:00PM</option>

                            <option value="09:00PM">09:00PM</option>
                            <option value="10:00PM">10:00PM</option>
                            <option value="11:00PM">11:00PM</option>

                            <option value="11:00PM">12:00PM</option>
                            <option style="color: red;" value="Closed Shop">Closed Shop</option>



                        </select>
                    </div>
                    </div>
                </div>





                <div class="text-center py-3" style="font-family: math; font-size:20px;"><b>FRIDAY</b></div>
                <input type="hidden" value="Friday" name="Friday">
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <select name="open_friday" class="form-control" id="">

                            <option value="" selected>--Opening Time--</option>
                            <option value="08:00AM">08:00AM</option>
                            <option value="09:00AM">09:00AM</option>

                            <option value="10:00AM">10:00AM</option>

                            <option value="11:00AM">11:00AM</option>
                            <option value="11:00AM">12:00AM</option>
                            <option style="color: red;" value="Closed Shop">Closed Shop</option>



                        </select>
                    </div>

                    </div>
                    <div class="col-md-6">
                    <div class="form-group">

                        <select name="close_friday" class="form-control" id="">

                            <option value="" selected>--Closing Time--</option>
                            <option value="06:00PM">06:00PM</option>
                            <option value="07:00PM">07:00PM</option>

                            <option value="08:00PM">08:00PM</option>

                            <option value="09:00PM">09:00PM</option>
                            <option value="10:00PM">10:00PM</option>
                            <option value="11:00PM">11:00PM</option>

                            <option value="11:00PM">12:00PM</option>
                            <option style="color: red;" value="Closed Shop">Closed Shop</option>



                        </select>
                    </div>
                    </div>
                </div>






                <div class="text-center py-3" style="font-family: math; font-size:20px;"><b>SATURDAY</b></div>
                <input type="hidden" value="Saturday" name="Saturday">
                <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <select name="open_saturday" class="form-control" id="">

                            <option value="" selected>--Opening Time--</option>
                            <option value="08:00AM">08:00AM</option>
                            <option value="09:00AM">09:00AM</option>

                            <option value="10:00AM">10:00AM</option>

                            <option value="11:00AM">11:00AM</option>
                            <option value="11:00AM">12:00AM</option>
                            <option style="color: red;" value="Closed Shop">Closed Shop</option>



                        </select>
                    </div>

                    </div>
                    <div class="col-md-6">
                    <div class="form-group">

                        <select name="close_saturday" class="form-control" id="">

                            <option value="" selected>--Closing Time--</option>
                            <option value="06:00PM">06:00PM</option>
                            <option value="07:00PM">07:00PM</option>

                            <option value="08:00PM">08:00PM</option>

                            <option value="09:00PM">09:00PM</option>
                            <option value="10:00PM">10:00PM</option>
                            <option value="11:00PM">11:00PM</option>

                            <option value="11:00PM">12:00PM</option>
                            <option style="color: red;" value="Closed Shop">Closed Shop</option>



                        </select>
                    </div>
                    </div>
                </div>
<div class="form-group">
<select name="closed_shop" class="form-control" id="">
<option value="" selected>--Choose Shop Closed Day--</option>
<option value="Sunday">Sunday</option>
<option value="Monday">Monday</option>
<option value="Tuesday">Tuesday</option>
<option value="Wednesday">Wednesday</option>
<option value="Thursday">Thursday</option>
<option value="Friday">Friday</option>
<option value="Saturday">Saturday</option>



</select>

</div>
                <div class="form-group">
                <button type="submit" name="details" class="btn btn-outline-info form-control mb-3">ADD DETAILS</button>
                
                </div>
            </form>

        </div>

    </div>



    <?php
    include '../Connection/connection.php';
    
    if(isset($_POST['details'])){
        $shop_id=$_GET['shop_id'];
$closed_shop=$_POST['closed_shop'];
        $sunday=$_POST['Sunday'];
        $open_sunday=$_POST['open_sunday'];
        $close_sunday=$_POST['close_sunday'];


        
        $monday=$_POST['Monday'];
        $open_monday=$_POST['open_monday'];
        $close_monday=$_POST['close_monday'];


        
        $tuesday=$_POST['Tuesday'];
        $open_tuesday=$_POST['open_tuesday'];
        $close_tuesday=$_POST['close_tuesday'];



        
        $wednesday=$_POST['Wednesday'];
        $open_wednesday=$_POST['open_wednesday'];
        $close_wednesday=$_POST['close_wednesday'];



        
        $thursday=$_POST['Thursday'];
        $open_thursday=$_POST['open_thursday'];
        $close_thursday=$_POST['close_thursday'];



        
        $friday=$_POST['Friday'];
        $open_friday=$_POST['open_friday'];
        $close_friday=$_POST['close_friday'];



        
        $saturday=$_POST['Saturday'];
        $open_saturday=$_POST['open_saturday'];
        $close_saturday=$_POST['close_saturday'];




        $result=mysqli_query($conn,"insert into `shops_time` (`shop_id`,`opening_days1`,`opening_days2`,`opening_days3`,`opening_days4`,`opening_days5`,`opening_days6`,`opening_days7`,`opening_time1`,`opening_time2`,`opening_time3`,`opening_time4`,`opening_time5`,`opening_time6`,`opening_time7`,`closing_time1`,`closing_time2`,`closing_time3`,`closing_time4`,`closing_time5`,`closing_time6`,`closing_time7`,`closed_shop`) values ('$shop_id','$sunday','$monday','$tuesday','$wednesday','$thursday','$friday','$saturday','$open_sunday','$open_monday','$open_tuesday','$open_wednesday','$open_thursday','$open_friday','$open_saturday','$close_sunday','$close_monday','$close_tuesday','$close_wednesday','$close_thursday','$close_friday','$close_saturday','$closed_shop')");
        if($result){

            ?>
<a href="time_slot_by_admin.php?shop_id=<?php echo $shop_id  ?>" class="btn btn-info" type="submit">NEXT</a>
<?php
}

else{

    echo '<script> swal("Something Went Wrong", "Aabe Thik Se Add Kar Na", "error") </script>;';

}





      


    }
    
    
    
    
    
    
    ?>














    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

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