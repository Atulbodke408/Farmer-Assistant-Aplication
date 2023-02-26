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
  <?php
	   if(!isset($_SESSION['phone_no'])){
	 echo' <a href="login.php" style="margin-left: 70rem;">Login | Register</a>';
		   }
	  else{
		  echo' <a href="logout.php" style="margin-left: 75rem;">Logout</a>';
	  }
	  ?>

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
      <!-- =====  SEARVICES END  ===== -->

      <!-- =====  PRODUCT CATEGORY START  ===== -->
      <br></br>
      <div class="category-banner-block">
        <div class="section_title">Our Categories</div>
        <div class="row">
           <?php
          $query = "SELECT * FROM category ";
          //echo $query;
          if ($result = $con->query($query)) {
             
              while ($data = $result->fetch_assoc()) {
              
                // $realpath = dirname($data["cat_image"]);
                //             $path = str_replace($realpath, "", trim($data["cat_image"]));
                //              $path=  "admin/assets/img/cat_img".$path;

                 echo '<div class="product-layout col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="product-thumb transition text-center">
              <div class="caption categoryname">
                <h4><a href="products.php?id='.$data["id"].'">'.$data["cat_name"].'</a></h4>
              </div>
              <div class="image"><a href="products.php?id='.$data["id"].'"><img src="images/cat2.png" alt="Veggies"  title="" class="img-responsive"></a></div>
            </div>
          </div>';
               
             
          }
        }  
        ?>
          
          
        </div>
      </div>
      <!-- =====  PRODUCT CATEGORY END  ===== -->

      <!-- =====  PRODUCT section  ===== -->
    

        <div class="featured_product section mt-30">
        <div class="row">
          <div class="col-12">
            <div class="section_title">Featured Products</div>
          </div>
          <div class="section-product grid section">
              <?php
              include "db.php";

             $query2 = "SELECT * FROM product";
            //  echo $query2;
              if ($result2 = $con->query($query2)) {
                 
                  while ($data2 = $result2->fetch_assoc()) {
                     $realpath = dirname($data2["img"]);
                     $path = str_replace($realpath, "", trim($data2["img"]));
                     $path=  "images/".$path;
                  //   echo $path;
            echo'<div class=" product-items col-6 col-sm-4 col-md-4 col-lg-3">
              <div class="product-thumb transition">
              <div class="image">
                <div class="first_image"> <a href="prod.php?prod='.$data2["prod_name"].'"> <img src="'.$path.'" style="min-height:170px;min-width:220px;max-height:170px;max-width:220px" alt="'.$data2["prod_name"].'" class="img-responsive featured_img"> </a> </div>
                
              </div>
                <div class="product-details">
                  <div class="caption">
                    <h4 class="text-center" style="float: none;"><a >'.$data2["prod_name"].'</a></h4><br>
                   <p class="price"  style="float: none;text-align: center;">'.$data2["prod_price"].'Rs.</p><br>
                    <div class="product_option">
                    
                       <div class="input-group button-group">
                          <label class="control-label">Qty</label>
                           <input type="number" name="quantity" min="1" value="1" step="1" class="qty form-control">
                         <a href="prod.php?prod='.$data2["prod_name"].'"> <button type="button" class="addtocart pull-right">Add</button></a>

                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>';
          }
        }
        ?>
         
          </div>

        </div>
      </div>

    

      <!-- =====  PRODUCT section  END ===== -->

      <!-- =====  Brand start ===== -->
    
      <!-- =====  Brand end ===== -->



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