<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Swiper demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="../css/swiper-bundle.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,700&family=Kreon:wght@700&family=Philosopher:wght@700&family=Podkova:wght@800&family=Redressed&display=swap"
        rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php  
            include '../Connection/connection.php';

            $sql="select * from `shops`";
            $result=mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($result)){

            
            
            
            
            ?>
            <div class="swiper-slide">
                <div class="shadow-sm mb-3" style="width: 300px; height:450px; border-radius: 15px;">
                    <img src="../Admin/Shops Image/<?php echo $row['img_1'] ?>" style="border-radius: 15px,15px,0,0;" width="100%" height="200px" alt="" class="card-img">
                    <div class="text-center my-2" style="font-size: 20px;  font-family: 'Lobster', cursive;"><?php echo $row['shop_name'] ?></div>
                    <div class="mx-2 my-1" style="font-size: 15px;; font-family: 'Lobster', cursive;">Owner Name : <span style="cursive;"><b><?php echo $row['owner_name'] ?></b></span> </div>

                    <div class="mx-2" style="font-size: 15px;; font-family: 'Lobster', cursive;">Sallon For : <span style="cursive;"><b><?php echo $row['category_shop'] ?></b></span> </div>
                  
                    <div class="mx-2 my-1" style="font-size: 15px;; font-family: 'Lobster', cursive;">Address:<span style="cursive;"><b> West Bengal,<?php echo $row['dist'] ?>,<?php echo $row['shop_pin'] ?></b></span> </div>
                    <div class="mx-2 my-1"style="font-size: 15px;; font-family: 'Lobster', cursive;">Dist:<span style="cursive;"><b><?php echo $row['shop_dist'] ?></b></span> </div>
                   <div class="text-center" style="font-family: 'Lobster', cursive;"><b><i class="fa fa-star-o" style="width:20px;" aria-hidden="true"></i> Rating &nbsp; (441) &nbsp; (Very Good) </b></div>
                    <div class="d-flex justify-content-center mt-2">
                        <a href="your_shops.php" type="submit" class="btn btn-default border mt-2  " style="width: 16rem;">View More</a>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- Add Pagination -->
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="../javascript/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflowEffect: {
            rotate: 20,
            stretch: 0,
            depth: 500,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: '.swiper-pagination',
        },
    });
    </script>
</body>

</html>