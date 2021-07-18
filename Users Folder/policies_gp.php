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
            <div class="swiper-slide">
                <div class="shadow-sm mb-3 border" style="width: 300px; height:450px;">
                    <div class="d-flex justify-content-center">
                        <img src="../Users Image/channel.png" width="190" height="190" alt="" class="rounded-circle">
                    </div>
                    <hr>
                    <div class="my-4 text-center" style="font-family: cursive; font-size: 23px;">Channel Management
                    </div>


                    <p class="text-center m-4">Groomigromer help you to get more booking at your shop with our website .
                    </p>
                    <div class="d-flex justify-content-center">
                        <button type="button" data-toggle="modal" data-target="#channel" class="btn btn-default  "
                            style="width: 16rem;">View More</button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="shadow-sm mb-3 border" style="width: 300px; height:450px;">
                    <div class="d-flex justify-content-center">
                        <img src="../Users Image/technology.png" width="190" height="190" alt="" class="rounded-circle">
                    </div>
                    <hr>
                    <div class="my-4 text-center" style="font-family: cursive; font-size: 23px;">Technology Management
                    </div>


                    <p class="text-center m-4"> Stay hassle-free and easy process.
                    </p>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-default  " data-toggle="modal" data-target="#tecnology"
                            style="width: 16rem;">View More</button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="shadow-sm mb-3 border" style="width: 300px; height:450px;">
                    <div class="d-flex justify-content-center">
                        <img src="../Users Image/technology.png" width="190" height="190" alt="" class="rounded-circle">
                    </div>
                    <hr>
                    <div class="my-4 text-center" style="font-family: cursive; font-size: 23px;">Schedule your routine 
                    </div>


                    <p class="text-center m-4">  Groomigromer will help you to maintain your shop schedule everyday with a proper way.
                    </p>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-default  " data-toggle="modal" data-target="#sedule"
                            style="width: 16rem;">View More</button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="shadow-sm mb-3 border" style="width: 300px; height:450px;">
                    <div class="d-flex justify-content-center">
                        <img src="../Users Image/revenue.png" width="190" height="190" alt="" class="rounded-circle">
                    </div>
                    <hr>
                    <div class="my-4 text-center" style="font-family: cursive; font-size: 23px;">Revenue Management
                    </div>


                    <p class="text-center m-4"> Groomigromer help you to increase your revenue.
                    </p>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-default  " data-toggle="modal" data-target="#revenue"
                            style="width: 16rem;">View More</button>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="shadow-sm mb-3 border" style="width: 300px; height:450px;">
                    <div class="d-flex justify-content-center">
                        <img src="../Users Image/user.png" width="190" height="190" alt="" class="rounded-circle">
                    </div>
                    <hr>
                    <div class="my-4 text-center" style="font-family: cursive; font-size: 23px;">Guest Experience
                        Management</div>


                    <p class="text-center m-4">Groomigromer help you to improve your grooming service 

                    </p>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-default  " data-toggle="modal" data-target="#user"
                            style="width: 16rem;">View More</button>
                    </div>
                </div>
            </div>




        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
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





    <!-- Channel Management -->

    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="channel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="my-4 text-center" style="font-family: cursive; font-size: 28px;">Channel Management
                        </div>
                        <p class="text-center m-4"> Groomigromer help you to get more booking at your shop with our website .Save Your Time and Secdule your day.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Channel Management -->
   <!-- Modal -->
   <div class="modal fade" id="sedule" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="my-4 text-center" style="font-family: cursive; font-size: 28px;">Schedule your routine 
                        </div>
                        <p class="text-center m-4">  Groomigromer will help you to maintain your shop schedule everyday with a proper way.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Technology Management -->



    <!-- Modal -->
    <div class="modal fade" id="user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="my-4 text-center" style="font-family: cursive; font-size: 28px;">Guest Management
                        </div>
                        <p class="text-center m-4">Groomigromer help you to improve your grooming service quality and also help to retain your good quality service.
By our rating and feedback system from customer help you to improve your Customer experience.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Technology Management -->


    <!-- Revenue Management -->


    <!-- Modal -->
    <div class="modal fade" id="revenue" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="my-4 text-center" style="font-family: cursive; font-size: 28px;">Revenue Management
                        </div>
                        <p class="text-center m-4"> Groomigromer help you to increase your revenue.Our team will help you to manage your revenue.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Revenue Management -->


    <!-- user Management -->


    <!-- Modal -->
    <div class="modal fade" id="tecnology" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="my-4 text-center" style="font-family: cursive; font-size: 28px;">Technology
                            Management</div>
                        <p class="text-center m-4">  Stay hassle-free and easy process . Our simple user friendly plartform help to understand and grow your business.

                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- user Management -->








</body>

</html>