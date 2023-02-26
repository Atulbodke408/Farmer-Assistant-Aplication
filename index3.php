<?php
@session_start();
require 'admin/db.php';


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

    <?php include "main_head.php";?>
    <div class="banner section">
      <div class="main-banner owl-carousel">
       
        <?php
          $query = "SELECT * FROM slider";
          //echo $query;
          if ($result = $con->query($query)) {
             
              while ($data = $result->fetch_assoc()) {
              
                $realpath = dirname($data["image"]);
                            $path = str_replace($realpath, "", trim($data["image"]));
                             $path=  "admin/upload/slider".$path;

                 echo '<div class="item" >
                        <a href="#"><img style="width:100%;margin:auto" src="'.$path.'" alt="Main Banner" class="img-responsive" /></a>
                        </div>';
               
             
          }
        }  
        ?>

      </div>
    </div>
    <!-- =====  BANNER END  ===== -->

    <!-- =====  CONTAINER START  ===== -->
    <div class="container">
      <!-- =====  SUB BANNER  STRAT ===== -->
      <div class="subbanner-section section mt-20">
        <div class="owl-carousel banner-carousel">
          <?php
          $query = "SELECT * FROM offer_master ";
          //echo $query;
          if ($result = $con->query($query)) {
             
              while ($data = $result->fetch_assoc()) {
              
                $realpath = dirname($data["offer_main_image"]);
                            $path = str_replace($realpath, "", trim($data["offer_main_image"]));
                             $path=  "admin/assets/img/offer_img".$path;

                 echo '<div class="home-subbanner">
                        <div class="home-img"><a href="offers.php?offer='.$data["offer_url"].'"><img class="leftbanner" src="'.$path.'" alt="sub-banner1"></a></div>
                        <div class="cms-desc">
                          <div class="cms-text1"><b>'.$data["offer_name"].'</b></div>
                          <div class="cms-text2">Get '.$data["offer_percent_off"].' % off </div>
                          <div class="cms-text3">Shop for '.$data["offer_min_cart_value"].'</div>
                        </div>
                      </div>';
               
             
          }
        }  
        ?>
          
          

        </div>
      </div>
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
      <div class="category-banner-block">
        <div class="section_title">Our Categories</div>
        <div class="row">
           <?php
          $query = "SELECT * FROM category_master ";
          //echo $query;
          if ($result = $con->query($query)) {
             
              while ($data = $result->fetch_assoc()) {
              
                $realpath = dirname($data["cat_image"]);
                            $path = str_replace($realpath, "", trim($data["cat_image"]));
                             $path=  "admin/assets/img/cat_img".$path;

                 echo '<div class="product-layout col-lg-2 col-md-3 col-sm-4 col-6">
            <div class="product-thumb transition text-center">
              <div class="caption categoryname">
                <h4><a href="cat.php?cat='.$data["cat_id"].'">'.$data["cat_name"].'</a></h4>
              </div>
              <div class="image"><a href="cat.php?cat='.$data["cat_id"].'"><img src="'.$path.'" alt="'.$data["cat_name"].'" title="'.$data["cat_name"].'" class="img-responsive"></a></div>
            </div>
          </div>';
               
             
          }
        }  
        ?>
          
          
        </div>
      </div>
      <!-- =====  PRODUCT CATEGORY END  ===== -->

      <!-- =====  PRODUCT section  ===== -->
      <div class="category_product section">
        <div class="row">
          <div class="col-12">
            <div class="section_title">Shop By Brands</div>
          </div>
         
          <div class="col-sm-12 right_block">
            <div class="row">
              <?php
                $query = "SELECT * FROM brand_master ";
                //echo $query;
                if ($result = $con->query($query)) {
                   
                    while ($data = $result->fetch_assoc()) {
                    
                      $realpath = dirname($data["brand_image"]);
                                  $path = str_replace($realpath, "", trim($data["brand_image"]));
                                   $path=  "admin/assets/img/brand_img".$path;

                       echo '<div class="product-layout col-lg-3 col-md-4 col-sm-6 col-6">
                              <div class="product-thumb transition">
                                
                                <h4><a href="brand.php?brand='.$data["brand_id"].'">'.$data["brand_name"].'</a></h4>
                                <div class="image"><a href="brand.php?brand='.$data["brand_id"].'"><img src="'.$path.'" alt="'.$data["brand_name"].'" title="'.$data["brand_name"].'" class="img-thumbnail"></a></div>
                              </div>
                            </div>';
                     
                   
                }
              }  
              ?>
             
            </div>
          </div>
          <div class="col-sm-12 text-center">
            <div class="btn btn-primary viewall"><a href="brands.php">View All</a></div>
          </div>
        </div>
      </div>

            <div class="row">
              <div class="col-md-12">
                <div class="heading-part text-center mb-10">
                  <h3 class="section_title mt-50">Featured Products</h3>
                </div>
                <div class="related_pro">
                  <div class="product-layout related-pro  owl-carousel mb-50 ">

                     <?php
                     $query2 = "SELECT * FROM sections  ";
                        //echo $query;
                        if ($result2 = $con->query($query2)) {
                           
                            while ($data2 = $result2->fetch_assoc()) {
                              $prodids = $data2["product_ids"];
                              $query = "SELECT * FROM products where id in ($prodids) ";
                               //echo $query;
                               if ($result = $con->query($query)) {
                                  
                                   while ($data = $result->fetch_assoc()) {
                                   $realpath = dirname($data["image"]);
                                    $path = str_replace($realpath, "", trim($data["image"]));
                                     $path=  "admin/upload/images/".$path;
                                     $prod_id = $data["id"];
                                     $select_prod_price = "select * from product_variant where product_id = '$prod_id' ";

                                if ($result3 = $con->query($select_prod_price)) {
                     
                                      while ($data3 = $result3->fetch_assoc()) {
                                        extract($data3);
                                      }
                                      }     
                                   echo' <div class="product-grid">
                                      <div class="item">
                                         <div class="product-thumb transition">
                                            <div class="image">
                                              <div class="first_image"> <a href="prod.php?prod='.$data["slug"].'"> <img src="'.$path.'" style="min-height:170px;min-width:220px;max-height:170px;max-width:220px" alt="'.$data["slug"].'" class="img-responsive featured_img"> </a> </div>
                                              
                                            </div>
                                            <div class="product-details">
                                              <div class="caption">
                                                <h4 class="text-center" style="float: none;"><a href="prod.php?prod='.$data["slug"].'">'.$data["name"].'</a></h4><br>
                                                
                                                <div class="product_option">
                                                  <div class="form-group required ">
                                                   <p class="price" style="float: none;text-align: center;">'.$price.' Rs.</p> <br>
                                                  </div>

                                                  <div class="input-group button-group">
                                                    <label class="control-label">Qty</label>
                                                     <input type="number" name="quantity" min="1" value="1" step="1" class="qty form-control">
                                                   <a href="prod.php?prod='.$data["slug"].'"> <button type="button" class="addtocart pull-right">Add</button></a>
 
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>';
                                 
                               
                             }
                        }
                        }
                      }
                       ?>
                                    

                    
                   
                  </div>
                </div>
              </div>
            </div>

      <!-- =====  featured section  ===== -->
     <!--  <div class="featured_product section mt-30">
        <div class="row">
          <div class="col-12">
            <div class="section_title">Featured Products</div>
          </div>
          <div class="section-product grid section ">
            <?php
             $query2 = "SELECT * FROM sections  ";
                //echo $query;
                if ($result2 = $con->query($query2)) {
                   
                    while ($data2 = $result2->fetch_assoc()) {
                    	$prodids = $data2["product_ids"];
                    	$query = "SELECT * FROM products where id in ($prodids) ";
                       //echo $query;
                       if ($result = $con->query($query)) {
                          
                           while ($data = $result->fetch_assoc()) {
                      $realpath = dirname($data["image"]);
                                  $path = str_replace($realpath, "", trim($data["image"]));
                                   $path=  "admin/upload/images/".$path;
                                   $prod_id = $data["id"];
                                   $select_prod_price = "select * from product_variant where product_id = '$prod_id' ";

                        if ($result3 = $con->query($select_prod_price)) {
             
                              while ($data3 = $result3->fetch_assoc()) {
                                extract($data3);
                              }
                              }     
                       echo '<div class=" product-items col-6 col-sm-4 col-md-4 col-lg-3">
                              <div class="product-thumb transition">
                               <div class="image">
                                  <div class="first_image"> <a href="prod.php?prod='.$data["slug"].'"> <img src="'.$path.'" style="min-height:170px;min-width:220px;max-height:170px;max-width:220px" alt="'.$data["slug"].'" title="'.$data["slug"].'" class="img-responsive featured_img"> </a> </div>
                                 
                                </div>
                                <div class="product-details">
                                  <div class="caption">
                                    <h4 class="text-center" style="float: none;"><a href="prod.php?prod='.$data["slug"].'">'.$data["name"].'</a></h4><br>
                                    <p class="price" style="float: none;text-align: center;">'.$price.'  Rs.<span class="price-tax">'.$price.' Rs.</span></p>
                                    <div class="product_option">
                                      <br>
                                      <div class="input-group button-group">
                                        <label class="control-label">Qty</label>
                                        <input type="number" name="quantity" min="1" value="1" step="1" class="qty form-control">
                                       <a href="prod.php?prod='.$data["slug"].'"> <button type="button" class="addtocart pull-right">Add</button></a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>';
                     
	                   }
	              }
                }
              }
            ?>
            
          </div>

        </div>
      </div> -->
      <!-- =====  featured section end ===== -->
      <div id="brand_carouse" class="section text-center mt-30 pb-15">
        <div class="row">
          
          <div class="col-sm-12 col-md-2" style="margin: auto;">
              <h1>SDC Specials</h1>
              <a href="special_products.php" class="btn btn-primary">View All</a>
          </div>
          <div class="col-sm-12 col-md-10">
            <div class="brand3 owl-carousel" id="sdc_specials_owl">
              
              <?php
               $query = "SELECT * FROM special_prod inner join prod_master on special_prod_id = prod_id  ";
                  //echo $query;
                  if ($result = $con->query($query)) {
                     
                      while ($data = $result->fetch_assoc()) {
                      
                        $realpath = dirname($data["prod_image"]);
                                    $path = str_replace($realpath, "", trim($data["prod_image"]));
                                     $path=  "admin/prod_img".$path;

                echo '<div class=" product-items" style="margin:10px 20px"> 
                        <div class="product-thumb transition">
                         <div class="image">
                            <div class="first_image"> <a href="prod.php?prod='.$data["slug"].'"> <img src="'.$path.'" alt="'.$data["slug"].'" title="'.$data["slug"].'" class="img-responsive"> </a> </div>
                            
                          </div>
                          <div class="product-details">
                            <div class="caption" >
                              <h4 style="float: none;"><a style="text-align: center;" href="prod.php?prod='.$data["slug"].'">'.$data["name"].'</a></h4>
                             
                              <div class="product_option">
                                <div class="form-group text-center">
                                   <p class="price" style="float: none;">'.$data["name"].' Rs.</p>
                                </div>
                                <div class="input-group button-group">
                                  <label class="control-label">Qty</label>
                                  <input type="number" name="quantity" min="1" value="1" step="1" class="qty form-control">
                                  <button type="button" class="addtocart pull-right">Add</button>
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
      </div>

      <div id="brand_carouse" class="section text-center mt-30 pb-15">
        <div class="row">
          
          <div class="col-sm-12 col-md-2" style="margin: auto;">
              <h1>Explore All Products</h1>
              <a href="products.php" class="btn btn-primary">View</a>
          </div>
          <div class="col-sm-12 col-md-10">
            <div class="brand3 owl-carousel" id="all_prod">
              <?php
               $query = "SELECT * FROM special_prod inner join prod_master on special_prod_id = prod_id  ";
                  //echo $query;
                  if ($result = $con->query($query)) {
                     
                      while ($data = $result->fetch_assoc()) {
                      
                        $realpath = dirname($data["prod_image"]);
                                    $path = str_replace($realpath, "", trim($data["prod_image"]));
                                     $path=  "admin/prod_img".$path;

                                  echo '<div class=" product-items" style="margin:10px 20px"> 
                                          <div class="product-thumb transition">
                                           <div class="image">
                                              <div class="first_image"> <a href="prod.php?prod='.$data["slug"].'"> <img src="'.$path.'" alt="'.$data["slug"].'" title="'.$data["prod_uname"].'" class="img-responsive"> </a> </div>
                                              
                                            </div>
                                            <div class="product-details">
                                              <div class="caption" >
                                                <h4 style="float: none;"><a style="text-align: center;" href="prod.php?prod='.$data["prod_uname"].'">'.$data["prod_name"].'</a></h4>
                                               
                                                <div class="product_option">
                                                  <div class="form-group text-center">
                                                     <p class="price" style="float: none;">'.$data["prod_price"].' Rs.</p>
                                                  </div>
                                                  <div class="input-group button-group">
                                                    <label class="control-label">Qty</label>
                                                    <input type="number" name="quantity" min="1" value="1" step="1" class="qty form-control">
                                                    <button type="button" class="addtocart pull-right">Add</button>
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
      </div>

      <!-- =====  PRODUCT section  END ===== -->

      <!-- =====  Brand start ===== -->
      <div id="brand_carouse" class="section text-center mt-30 pb-15">
        <div class="row">
          <div class="col-12">
            <div class="section_title">Our Popular Brands</div>
          </div>
          <div class="col-sm-12">
            <div class="brand owl-carousel">
              <?php
               $query = "SELECT * FROM brand_logo ";
                  //echo $query;
                  if ($result = $con->query($query)) {
                     
                      while ($data = $result->fetch_assoc()) {
                      
                        $realpath = dirname($data["brand_logo_img"]);
                                    $path = str_replace($realpath, "", trim($data["brand_logo_img"]));
                                     $path=  "admin/assets/img/brand_img".$path;

                  echo '<div class="product-thumb">
                      <div class="item text-center"> 
                        <a href="javascript:;"><img src="'.$path.'" alt="brand_logo" class="img-responsive" /></a> 
                      </div>
                    </div>';
                  }
                }
              ?>
              
              

            </div>
          </div>
        </div>
      </div>
      <!-- =====  Brand end ===== -->



    </div>
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