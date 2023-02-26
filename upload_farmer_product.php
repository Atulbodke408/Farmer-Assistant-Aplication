<?php
@session_start();
require 'db.php';


?>

<!doctype html>
<html class="no-js" lang="en">
<head>

  <!-- =====  BASIC PAGE NEEDS  ===== -->
  <meta charset="utf-8">
  <title>Farm Assistant</title>

  <!-- =====  SEO MATE  ===== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="distribution" content="global">
  <meta name="revisit-after" content="2 Days">
  <meta name="robots" content="ALL">
  <meta name="rating mt-5 mb-5" content="8 YEARS">
  <meta name="GOOGLEBOT" content="NOARCHIVE">

  <!-- =====  MOBILE SPECIFICATION  ===== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- =====  CSS  ===== -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/all.css" >
  <link rel="stylesheet" href="css/meanmenu.css">
  <link rel="stylesheet" href="css/style.css">  
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="shortcut icon" href="images/favicon.png">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <style type="text/css">
  	.featured_img
  	{
	  	 width: 50%;
	  	 min-height: unset!important; 
	     min-width: unset!important; 
	     max-height: unset!important; 
	     max-width: unset!important; 

  	}
  </style>
</head>

<body>
  <!-- =====  LODER  ===== -->

  
  <div class="wrapper">
  <a href="login.php" style="margin-left:70rem;"><i class="fa fa-user"></i>Login | Register</a>

              <?php include "main_head.php";?>


    <div class="banner section">
      <div class="main-banner owl-carousel">
        <div class="item"><a href="#"><img src="images/main_banner1.jpg" alt="Main Banner" class="img-responsive" /></a></div>
        <div class="item"><a href="#"><img src="images/main_banner2.jpg" alt="Main Banner" class="img-responsive" /></a></div>
      </div>
    </div>
    <!-- =====  BANNER END  ===== -->

    <!-- =====  CONTAINER START  ===== -->
    <div class="container">
      <!-- =====  SUB BANNER  STRAT ===== -->
    
      <!-- =====  SUB BANNER END  ===== --> 

      <!-- =====  SEARVICES START  ===== -->
      <div class="shipping-outer section">
        <div class="shipping-inner row">
          <div class="heading col-lg-3 col-12 text-center text-lg-left">
            <h2>Why choose us?</h2>
          </div>
          <div class="subtitle-part subtitle-part1 col-lg-3 col-4 text-center text-lg-left">
            <div class="subtitle-part-inner">
              <div class="subtitile">
                <div class="subtitle-part-image"></div>
                <div class="subtitile1">On time delivery</div>
                <div class="subtitile2">15% back if not able</div>
              </div>
            </div>
          </div>
          <div class="subtitle-part subtitle-part2 col-lg-3 col-4 text-center text-lg-left">
            <div class="subtitle-part-inner">
              <div class="subtitile">
                <div class="subtitle-part-image"></div>
                <div class="subtitile1">Free delivery</div>
                <div class="subtitile2">Order over $ 200</div>
              </div>
            </div>
          </div>
          <div class="subtitle-part subtitle-part3 col-lg-3 col-4 text-center text-lg-left">
            <div class="subtitle-part-inner">
              <div class="subtitile">
                <div class="subtitle-part-image"></div>
                <div class="subtitile1">Quality assurance</div>
                <div class="subtitile2">You can trust us</div>
              </div>
            </div>
          </div>
        </div>
      </div>
     <div class="col-md-6 col-12 d-flex" style="margin:auto">
              <div class="login">
                <h3>Upload Product</h3>
                <form class="my-4" id="register_form" method="post" action="submit_product.php" enctype="multipart/form-data">
                   <div class="form-group">
                    <label style="float: left;">Product Image</label>

                        <input type="file" required name="img" class="form-control" id="exampleInputtext" aria-describedby="exampleInputtext" placeholder="Enter Product Image">
                      </div>
                      <div class="form-group">
                         <label style="float: left;">Select Category</label>

                       <select class="form-control" name="category">
                        <option selected disabled>Select Category</option>
                        <?php
                        include "db.php";
                           $query = "SELECT * FROM category";
                             //echo $query;
                         if ($result = $con->query($query)) {
                 
                          while ($data = $result->fetch_assoc()) {
                  
                        echo' <option value="'.$data["id"].'">'.$data["cat_name"].'</option>';
                      }
                    }
                    ?>
                       </select>
                      </div>
                      <div class="form-group">
                       <label style="float: left;">Product Name</label>
                        <input type="text" required name="prod_name" class="form-control" id="exampleInputtext" aria-describedby="exampleInputtext" placeholder="Enter Product Name">
                      </div>
                       <div class="form-group"> <label style="float: left;">Product Price</label>

                        <input type="text" required name="prod_price" class="form-control" id="exampleInputtext" aria-describedby="exampleInputtext" placeholder="Enter Product Price">
                      </div>
                       <div class="form-group">
                         <label style="float: left;">Product Description</label>

                        <input type="text" required name="product_desc" class="form-control" id="exampleInputtext" aria-describedby="exampleInputtext" placeholder="Enter Product Description">
                      </div>
                     
                   
                     <!--  <div class="form-group">
                        <input type="password" required maxlength="10" minlength="8" id="confirmpass" name="confirmpass" class="form-control" id="exampleInputConformPassword1" placeholder="Confirm password">
                      </div> -->
                      <button type="submit" name="submit" id="register_btn" class="btn btn-primary" style="font-size: 18px;font-weight: bold;color: white;width: 100%;border:none;background-color:#673ab7">Submit</button>
                      <div id="recaptcha-container"></div>
                    </form>
                
            </div>
            </div>



    </div>
     <br></br>
    <!-- =====  CONTAINER END  ===== -->
    <!-- =====  FOOTER START  ===== -->

   <?php include 'footer.php'; ?>
    <!-- =====  FOOTER END  ===== -->
  </div>
  <a id="scrollup"></a>
  <script src="js/modernizr.js"></script>
  <script src="js/jQuery_v3.1.1.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.magnific-popup.js"></script>
  <script src="js/jquery.firstVisitPopup.js"></script>
  <script src="js/custom.js"></script>
  <script type="text/javascript">
    $('#sdc_specials_owl').owlCarousel({
        loop:true,
        autoplay:true,
        dots:false,
        responsiveClass:true,
        items : 4, //10 items above 1000px browser width
        responsive:{
            0:{
                items:2,
                nav:false
            },
            400:{
                items:3,
                nav:false
            },
            600:{
                items:4,
                nav:false
            },
            1000:{
                items:4,
                nav:false,
                loop:true
            }
        }
    });
     $('#all_prod').owlCarousel({
        loop:true,
        autoplay:true,
        dots:true,

        autoPlaySpeed: 1000,
        
        autoplayHoverPause: true,
        responsiveClass:true,
        items : 4, //10 items above 1000px browser width
        responsive:{
            0:{
                items:2,
                nav:false
            },
            400:{
                items:3,
                nav:false
            },
            600:{
                items:4,
                nav:false
            },
            1000:{
                items:4,
                nav:false,
                loop:true
            }
        }
    })
  </script>
</body>


</html>