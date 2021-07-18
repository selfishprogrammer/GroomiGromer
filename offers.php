<!DOCTYPE html>
<html>
<head>
  <title>Slick Playground</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../css/slick.css">
  <link rel="stylesheet" type="text/css" href="../css/slick-theme.css">



  <style type="text/css">
    * {
    margin: 0px;
    padding: 0px;
}

    * {
      box-sizing: border-box;
    }

    .slider {
        width: 50%;
        margin: 100px auto;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
      height: 200px;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }
    
    .slick-active {
      opacity: 1;
    }

    .slick-current {
      opacity: 1;
    }
  </style>
</head>
<body>

<section class="multiple-items my-4">
  
    <div>
      <img src="../Image/offer1.jpeg">
    </div>
    <div>
    <img src="../Image/offer.jpg">
    </div>
    <div>
    <img src="../Image/offer1.jpeg">
    </div>
    <div>
    <img src="../Image/offer.jpg">
    </div>
    <div>
    <img src="../Image/offer1.jpeg">
    </div>
    <div>
    <img src="../Image/offer.jpg">
    </div>
    <div>
    <img src="../Image/offer1.jpeg">
    </div>
    <div>
    <img src="../Image/offer.jpg">
    </div>
    <div>
    <img src="../Image/offer1.jpeg">
    </div>
    
  </section>




  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="../javascript/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
        $('.multiple-items').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 3
        })
});
</script>

</body>
</html>