<?php  
include '../Connection/connection.php';

if(isset($_POST['action'])){

    $dist=$_POST['dist'];
   

  


    $sql="SELECT * FROM shops WHERE category_shop !='' AND `dist`='$dist'";
    if(isset($_POST['category_shops'])){
        $category=implode("','",$_POST['category_shops']);
        $sql .= "AND category_shop IN('".$category."')";
    }

    if(isset($_POST['opening_time'])){
        $opening_time=implode("','",$_POST['opening_time']);
        $sql .= "AND opening_time IN('".$opening_time."')";
    }

    if(isset($_POST['amenities'])){
        $amenities=implode("','",$_POST['amenities']);
        $sql .= "AND amenities  IN('".$amenities."')";
    }
    
    if(isset($_POST['amenities1'])){
        $amenities1=implode("','",$_POST['amenities1']);
        $sql .= "AND amenities1  IN('".$amenities1."')";
    }
    if(isset($_POST['amenities2'])){
        $amenities2=implode("','",$_POST['amenities2']);
        $sql .= "AND amenities2  IN('".$amenities2."')";
    }
    if(isset($_POST['amenities3'])){
        $amenities3=implode("','",$_POST['amenities3']);
        $sql .= "AND amenities3  IN('".$amenities3."')";
    }
    if(isset($_POST['amenities4'])){
        $amenities4=implode("','",$_POST['amenities4']);
        $sql .= "AND amenities4  IN('".$amenities4."')";
    }
    if(isset($_POST['amenities4'])){
        $amenities4=implode("','",$_POST['amenities4']);
        $sql .= "AND amenities4  IN('".$amenities4."')";
    }
    if(isset($_POST['day1'])){
        $day1=implode("','",$_POST['day1']);
        $sql .= "AND day1  IN('".$day1."')";
    }
    if(isset($_POST['day2'])){
        $day2=implode("','",$_POST['day2']);
        $sql .= "AND day2  IN('".$day2."')";
    }
    if(isset($_POST['day3'])){
        $day3=implode("','",$_POST['day3']);
        $sql .= "AND day3  IN('".$day3."')";
    }
    if(isset($_POST['day4'])){
        $day4=implode("','",$_POST['day4']);
        $sql .= "AND day4  IN('".$day4."')";
    }

    if(isset($_POST['day5'])){
        $day5=implode("','",$_POST['day5']);
        $sql .= "AND day5  IN('".$day5."')";
    }
    if(isset($_POST['day6'])){
        $day6=implode("','",$_POST['day6']);
        $sql .= "AND day6  IN('".$day6."')";
    }
    if(isset($_POST['day7'])){
        $day7=implode("','",$_POST['day7']);
        $sql .= "AND day7  IN('".$day7."')";
    }
$output = '';
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result) > 0){
            while($row=mysqli_fetch_assoc($result)){
$output .='<div class=" shadow-lg  my-2" style="width:100% ; border-radius:15px;">
            <div class="row no-gutters">
            <div class="col-md-4">
            <img src="../Admin/Shops Image/'.$row['img_1'].'" class="card-img" height="290px"
            alt="...">
    </div>
    <div class="col-md-8">
        <div class="card-body">





            <div class="shop_title" style="font-size: 24px;  font-family:math;">
                '. $row['shop_name'].'</div>
            <div>West Bengal ,
                '. $row['shop_dist'] .','. $row['dist']   .','. $row['shop_pin']   .'
            </div>

            <h6 style=" font-size: 15px;"><small><i class="fa fa-star-o" aria-hidden="true"></i>
                    '.$row['rating'].'
                    &nbsp; &nbsp; <span style="font-size:10px;">(441 rating)</span> &nbsp;
                    &nbsp;<span style="font-size:10px;">(Very Good)</span></small></h6>
                    <div class="d-flex justify-content-between">
                    <button class="btn btn-default border my-1" style="width: 10rem;" href="#" disabled>
                        <i class="fa fa-mars-stroke" aria-hidden="true"></i>
                        '.$row['category_shop'].'</button>
                    <div class="mx-4" style="font-size: 25px; font-family: math;"><i class="fa fa-inr"
                            aria-hidden="true"></i>&nbsp;'.$row['base_price'].'</div>
                </div>

            <div class="mb-2">Time: &nbsp;'. $row['opening_time'].' To '. $row['closing_time'].'</div>
            <div class="text-center" style="font-size: 25px;">
            <i class="fa fa-'.$row['amenities'].'" aria-hidden="true"></i>&nbsp;&nbsp;<i class="fa fa-'.$row['amenities1'].'" aria-hidden="true"></i>&nbsp;&nbsp;<i class="fa fa-'. $row['amenities2'].'" aria-hidden="true"></i><i class="fa fa-'. $row['amenities3'] .'" aria-hidden="true"></i>&nbsp;&nbsp;<i class="fa fa-'.$row['amenities4'].'" aria-hidden="true"></i>
            </div>
            <div class="d-flex justify-content-end mt-2">
                

                    <a type="submit" href="shop_books_view.php?shop_id='. $row['shop_id'] .'"
                        class="btn btn-success mr-1">Book Shop</a>

            

            </div>

        </div>
    </div>
</div>
</div>';

            }

        }

        else{
            $output='<h3>No Record Found</h3>';
        }
echo $output;
    }


;
?>