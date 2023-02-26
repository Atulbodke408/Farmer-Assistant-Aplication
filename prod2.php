<?php
  @session_start();
  require 'db.php';
  //print_r($_POST);
   $countprod = 1;
?>
<!doctype html>
<html class="no-js" lang="en">
<head>

  <!-- =====  BASIC PAGE NEEDS  ===== -->
  <meta charset="utf-8">
  <title>Products - SDCAyush.com</title>

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
  <link rel="stylesheet" href="quantity-button-master/example/style.css">
  <style type="text/css">
          #toast {
          visibility: hidden;
          max-width: 50px;
          height: 50px;
          /*margin-left: -125px;*/
          margin: auto;
          background-color: #333;
          color: #fff;
          text-align: center;
          border-radius: 2px;

          position: fixed;
          z-index: 1;
          left: 0;right:0;
          bottom: 80px;
          font-size: 17px;
          white-space: nowrap;
      }
      #toast #toast_img{
        width: 50px;
        height: 50px;
          
          float: left;
          
          padding-top: 16px;
          padding-bottom: 16px;
          
          box-sizing: border-box;

          
          background-color: #111;
          color: #fff;
      }
      #toast #desc{

          
          color: #fff;
         
          padding: 6px;
          
          overflow: hidden;
        white-space: nowrap;
      }

      #toast.show {
          visibility: visible;
          animation: fadein 0.5s, expand 0.5s 0.5s,stay 4s 1s, shrink 0.5s 5s, fadeout 0.5s 4.5s;
      }
      #toast.hide {
          visibility: hidden;
          
       
      }
      @-webkit-keyframes fadein {
          from {bottom: 0; opacity: 0;} 
          to {bottom: 30px; opacity: 1;}
      }

      @keyframes fadein {
          from {bottom: 0; opacity: 0;}
          to {bottom: 30px; opacity: 1;}
      }

      @-webkit-keyframes expand {
          from {min-width: 50px} 
          to {min-width: 550px}
      }

      @keyframes expand {
          from {min-width: 50px}
          to {min-width: 550px}
      }
      @-webkit-keyframes stay {
          from {min-width: 550px} 
          to {min-width: 550px}
      }

      @keyframes stay {
          from {min-width: 550px}
          to {min-width: 550px}
      }
      @-webkit-keyframes shrink {
          from {min-width: 550px;} 
          to {min-width: 50px;}
      }

      @keyframes shrink {
          from {min-width: 550px;} 
          to {min-width: 50px;}
      }

      @-webkit-keyframes fadeout {
          from {bottom: 30px; opacity: 1;} 
          to {bottom: 60px; opacity: 0;}
      }

      @keyframes fadeout {
          from {bottom: 30px; opacity: 1;}
          to {bottom: 60px; opacity: 0;}
      }
  </style>
</head>

<body>
  <!-- =====  LODER  ===== -->
  
  <div class="wrapper">

   <?php include "main_head.php";?>
    <!-- =====  HEADER END  ===== -->
     <?php
          $prod = $_GET["prod"];
          $query = "SELECT * FROM product where prod_name like '$prod'";
          //echo $query;
          if ($result = $con->query($query)) {
             
              while ($data = $result->fetch_assoc()) {
              
                $realpath = dirname($data["image"]);
                            $path = str_replace($realpath, "", trim($data["image"]));
                             $path=  "admin/upload/images/".$path;

                extract($data);

                
             
          }
        }
      ?>
    <!-- =====  BREADCRUMB STRAT  ===== -->
    <div class="breadcrumb section pt-60 pb-60 mb-30">
      <div class="container">
        <h1 class="uppercase"><?php echo $prod_name;?></h1>
        <ul>
          <li><a href="javascript:;"><i class="fa fa-home"></i></a></li>
          <li class="active">Products</li>
        </ul>
      </div>
    </div>
    <div id="toast"><div id="toast_img"><i class="fa fa-shopping-cart"></i></div>
      <div id="desc" class="row">
        
         <div class="col-md-6" style="text-align: left;">
             <p style="line-height: 2.3;" id="desc_text">Item added to cart.</p>
         </div>
       
        <div class="col-md-3 " style="text-align: end">
           <a href="cart.php" class="btn btn-success">Proceed to Checkout</a>
        </div>
        <div class="col-md-3" style="text-align: end">
          <button type="button" id="hide_toast" class="btn btn-danger">X</button>
        </div>
      
      </div>

</div>
    <!-- =====  BREADCRUMB END===== -->

    <div class="product-section section">
    <!-- =====  CONTAINER START  ===== -->
      <div class="container">
        <div class="row">
          <div class="col-12 mb-20">
            <div class="row mt_10 ">
              <div class="col-md-5">
                <div><a class="thumbnails"> <img style="width: 500px;height: 450px" data-name="product_image" src="<?php echo $path;?>" alt="" /></a></div>
                <div id="product-thumbnail" class="owl-carousel">
                <?php
                        $imgarr = explode(',', $other_images);
                        //$imgarr = extract($other_images);
                        $count = count($imgarr);
                        //echo $count;
                         for ($i=0; $i < $count ; $i++) { 
                                $realpath = dirname($imgarr[$i]);
                                 $path = str_replace($realpath, "", trim($imgarr[$i]));
                                  $path=  "admin/upload/other_images/".$path;
                                  if($imgarr[$i]!="")
                                  {
                                    echo '
                                            <div class="item" style="width:100px;margin:0px 10px">
                                              <div class="image-additional"><a  class="thumbnail" href="'.$path.'" data-fancybox="group1"> <img style="height:100px;width:100px;" src="'.$path.'" alt="" /></a>
                                              </div>
                                            </div>
                                         ';
                                  }
                          
                         }
                           
                    
                 
                ?>
                 </div>
              </div>
              
                <div class="col-md-7 prodetail caption" style="padding: 5%">
                <form id="prod_info" method="post" action="" > 
                <h3 style="text-transform: uppercase;font-size: 20px;font-weight: bold" data-name="product_name" class="product-name"><a href="javascript:;" title="<?php echo $prod_name;?>"><?php echo $prod_name;?></a></h3>
                 <?php
                  $select_more = "select * from product  where id = '$id'";
                  //echo $select_more;
                  $res  = $con->query($select_more);
                  $num_rows = mysqli_num_rows($res);
                  //echo $num_rows;
                    $userdata = array();
                    $i = 0;

                     
                     if ($result2 = $con->query($select_more)) {
                     
                       while ($data2= $result2->fetch_assoc()) {
                          
                        
                             $userdata[$i] = $data2;
                           
                             if($i == 0)
                             {
                             // echo $i;
                              echo "<input type='hidden' name='prod_id' value='".$data2["product_id"]."'>";
                               if($data2["discounted_price"]!=0 && $data2["discounted_price"] != "")
                                {
                                  
                                  $disc = $data2["price"] - $data2["discounted_price"];
                               
                                  echo '
                                         <span class="price mb-20"><span class="amount price_disp">
                                            <span class="currencySymbol">Price : </span>
                                             <span id = "disc_price_strike"> <strike> '.$data2["price"].' ₹</strike></span>
                                            
                                         </span>
                                      ';
                                 
                                 echo '<br><br>

                                        <span class="price mb-10"><span class="amount price_disp">
                                           <span class="currencySymbol"><h3 style="display:inline">Offer Price : </h3></span>
                                            <span><h3 id= "disc_price_h3" style="display:inline">'.$data2["discounted_price"].' ₹</h3> </span>
                                           <span style="padding-left: 2%;font-size: 12px">( Inclusive of all taxes )</span>
                                           <span style="font-size: 18px;color:blue;">[You will save  <h5 id="discounted_amt_h5" style="display:inline;font-size:18px;color:blue;font-weight:bold">'.$disc.'</h5> ₹]</span>
                                        </span>
                                     ';
                                   }
                                   else
                                   {
                                     
                                    echo '<br><br>

                                           <span class="price mb-10"><span class="amount price_disp">
                                              <span class="currencySymbol"><h3 style="display:inline"> Price : </h3></span>
                                               <span><h3 id="org_price_h3" style="display:inline">'.$data2["price"].' ₹</h3> </span>
                                              <span style="padding-left: 2%;font-size: 12px">( Inclusive of all taxes )</span>
                                           </span>
                                        ';
                                    
                                   }
                             }
                             else
                             {
                              echo "<input type='hidden' name='prod_id' value='".$data2["product_id"]."'>";
                              if($data2["discounted_price"]!=0 && $data2["discounted_price"] != "")
                               {
                                  
                                 $disc = $data2["price"] - $data2["discounted_price"];
                              
                                 echo '
                                        <span class="price mb-20"><span class="amount test">
                                           <span class="currencySymbol">Price : </span>
                                            <span> <strike> '.$data2["price"].' ₹</strike></span>
                                           
                                        </span>
                                     ';
                                
                                echo '<br><br>

                                       <span class="price mb-10"><span class="amount test">
                                          <span class="currencySymbol"><h3 style="display:inline">Offer Price : </h3></span>
                                           <span><h3 style="display:inline">'.$data2["discounted_price"].' ₹</h3> </span>
                                          <span style="padding-left: 2%;font-size: 12px">( Inclusive of all taxes )</span><br><br>
                                          <span style="font-size: 18px;color:blue;">[You will save  <h5 id="discounted_amt_h5" style="display:inline;font-size:18px;color:blue;font-weight:bold">'.$disc.'</h5> ₹]</span>
                                       </span>
                                    ';
                                  }
                                  else
                                  {
                                    
                                   echo '<br><br>

                                          <span class="price mb-10"><span class="amount test">
                                             <span class="currencySymbol"><h3 style="display:inline"> Price : </h3></span>
                                              <span><h3 style="display:inline">'.$data2["price"].' ₹</h3> </span>
                                             <span style="padding-left: 2%;font-size: 12px">( Inclusive of all taxes )</span><br><br>
                                            
                                          </span>
                                       ';
                                   
                                  }
                             }
                              $i++;
                      }
                    } 
                    
                  
                  
                
                  
                 ?> 
                
                <hr>
                <div class="product_variant">
                  <div class="text"><h4>Select Variant</h4></div>
                  <div style="margin-left: 4%">
                    <?php
                    $userdata = array();
                    $index = 0;
                     $select_more = "select * from product_variant inner join unit on measurement_unit_id = unit.id where product_id = '$id'";
                     //echo $select_more;
                     $price = 0;
                     $disc_amt = 0;
                      if ($result2 = $con->query($select_more)) {
                         
                           while ($data2= $result2->fetch_assoc()) {
                            $userdata[$index] = $data2;
                            if($data2["discounted_price"]!=0 && $data2["discounted_price"] != "")
                             {
                               $price = $data2["price"];
                               $disc = "set";
                               $disc_amt =  $data2["price"] - $data2["discounted_price"];
                               //echo $disc_amt;
                             }
                             else
                             {
                              $price = $data2["price"];
                              $disc = "unset";
                             }
                            if($index == 0)
                            {
                             
                              echo '
                                        <input type="radio" data-price="'.$price.'" data-disc = "'.$disc.'"  data-discamt = "'.$disc_amt.'" class="variant_cls" checked name="variant" value="'.$data2["measurement"].' '.$data2["short_code"].'" id="'.$data2["measurement"].''.$data2["short_code"].'"><label for="'.$data2["measurement"].''.$data2["short_code"].'" style="margin-right:  4%;margin-left: 1%"> '.$data2["measurement"].' '.$data2["short_code"].'</label>
                                     
                                      ';
                            }
                            else
                            {
                               echo '
                                        <input type="radio" data-price="'.$price.'" data-disc = "'.$disc.'" data-discamt = "'.$disc_amt.'" class="variant_cls" name="variant" value="'.$data2["measurement"].' '.$data2["short_code"].'" id="'.$data2["measurement"].''.$data2["short_code"].'"><label for="'.$data2["measurement"].''.$data2["short_code"].'" style="margin-right:  4%;margin-left: 1%"> '.$data2["measurement"].' '.$data2["short_code"].'</label>
                                     
                                      ';
                            }
                            $index++;
                            }
                          }
                        
                      ?>
                    </div>
                </div>
                  
                <hr>
                <div id="product" >
                  <div class="row" style="flex-wrap: nowrap;width: 100%;margin: auto;">
                    <div class="col-md-1 col-sm-2 " style="display: contents;width: 25%"><h3 style="margin: auto 0;width: 11%">Qty</h3></div>
                    <div class="col-md-4 col-sm-6" style="display: inline;"><form><fieldset data-quantity><legend> Quantity</legend></fieldset></form></div>
                    <div class="col-4" style="margin: auto 0"><button type="submit" class="btn btn-danger"><span><i class="fa fa-cart"></i>Add to Cart</span></button></div>
                  </div>
                
                  
                </div>
                <hr>
                <div class="prod_desc" style="margin-top: 4%">
                  <h4>Description</h4>
                  <p>
                    <?php echo strip_tags($description);?>
                  </p>
                  <hr>
                  <h4>Benifits</h4>
                   <p><?php echo strip_tags($description);?></p>
                </div>
                </form>
              </div>
              
            </div>
            
            <?php
              if(1)
              {
                echo '<div class="row">
              <div class="col-md-12">
                <div class="heading-part text-center mb-10">
                  <h3 class="section_title mt-50">Related Products</h3>
                </div>
                <div class="related_pro">
                  <div class="product-layout related-pro  owl-carousel mb-50 ">
                   ';
                     
                        $query2 = "select * from products where category_id = '$category_id' and id <> '$id' limit 10";

                        if ($result2 = $con->query($query2)) {
             
                              while ($data2 = $result2->fetch_assoc()) {
                             
                                $realpath = dirname($data2["image"]);
                                            $path = str_replace($realpath, "", trim($data2["image"]));
                                             $path=  "admin/upload/images/".$path;
                                             $prod_id = $data2["id"];
                                  $select_prod_price = "select * from product_variant where product_id = '$prod_id' ";

                        if ($result3 = $con->query($select_prod_price)) {
             
                              while ($data3 = $result3->fetch_assoc()) {
                                extract($data3);
                              }
                              }      
                                echo ' <div class="product-grid"><div class="item">
                         <div class="product-thumb transition">
                            <div class="image">
                              <div class="first_image"> <a href="prod.php?prod='.$data2["slug"].'"> <img style="width:250px;height:300px" src="'.$path.'" alt="'.$data2["slug"].'" title="'.$data2["slug"].'" class="img-responsive"> </a> </div>
                              
                            </div>
                            <div class="product-details">
                              <div class="caption">
                                <h4 class="" style="font-size:21px;font-weight:bold;line-height: 1;"><a style="font-size:15px;" href="prod.php?prod='.$data2["slug"].'">'.mb_strimwidth($data2["name"], 0, 20,'...').'</a></h4>
                                <p class="price" style="font-weight:bold">'.$price.' Rs.</p>
                                
                                <div class="product_option">
                                  <div class="row" style="width:98%;margin:auto;margin-top:8%">
                                    <div class="col-md-6 col-sm-6" >
                                      <a style="width:100%;background-color:#03a9f4;color:white" class="btn btn-info" href="prod.php?prod='.$data2["slug"].'">View</a>
                                    </div>
                                    <div class="col-md-6 col-sm-6" style="text-align:end">
                                      <a style="width:100%;background-color:#4caf50;color:white" class="btn btn-success" href="prod.php?prod='.$data2["slug"].'">Buy Now</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                      </div></div>';
                                
                             
                          }
                        }
                      
                    echo'
                    

                  </div>
                </div>
              </div>
            </div>';
              } 
            ?>
          </div>
        </div>

      <!-- =====  Brand start ===== -->
      <div id="brand_carouse" class="section text-center mt-30 pb-15">
        <div class="row">
          <div class="col-12">
            <div class="section_title">Our Popular Brands</div>
          </div>
          <div class="col-sm-12">
            <div class="brand owl-carousel">
              <div class="product-thumb"><div class="item text-center"> <a href="#"><img src="images/brand/brand1.png" alt="Disney" class="img-responsive" /></a> </div></div>
              <div class="product-thumb"><div class="item text-center"> <a href="#"><img src="images/brand/brand2.png" alt="Dell" class="img-responsive" /></a> </div></div>
              <div class="product-thumb"><div class="item text-center"> <a href="#"><img src="images/brand/brand3.png" alt="Harley" class="img-responsive" /></a> </div></div>
              <div class="product-thumb"><div class="item text-center"> <a href="#"><img src="images/brand/brand4.png" alt="Canon" class="img-responsive" /></a> </div></div>
              <div class="product-thumb"><div class="item text-center"> <a href="#"><img src="images/brand/brand5.png" alt="Canon" class="img-responsive" /></a> </div></div>
              <div class="product-thumb"><div class="item text-center"> <a href="#"><img src="images/brand/brand6.png" alt="Canon" class="img-responsive" /></a> </div></div>
              <div class="product-thumb"><div class="item text-center"> <a href="#"><img src="images/brand/brand7.png" alt="Canon" class="img-responsive" /></a> </div></div>
              <div class="product-thumb"><div class="item text-center"> <a href="#"><img src="images/brand/brand8.png" alt="Canon" class="img-responsive" /></a> </div></div>
              <div class="product-thumb"><div class="item text-center"> <a href="#"><img src="images/brand/brand9.png" alt="Canon" class="img-responsive" /></a> </div></div>
            </div>
          </div>
        </div>
      </div>
      <!-- =====  Brand end ===== -->

      </div>
    <!-- =====  CONTAINER END  ===== -->
    </div>
    <!-- =====  FOOTER START  ===== -->
     <?php include 'footer.php'; ?>
    <!-- =====  FOOTER END  ===== -->
  </div>
  <a id="scrollup"></a>
  <script src="quantity-button-master/example/script.js" type="module"></script>
  <script src="js/modernizr.js"></script>
  <script src="js/jQuery_v3.1.1.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.magnific-popup.js"></script>
  <script src="js/jquery.firstVisitPopup.js"></script> 
  <script src="js/custom.js"></script>
  <script type="text/javascript">
    $(".test").css("display","none");
    $(".variant_cls").change(function () {
      //console.log($(this).data('price'));
      if($(this).data('disc') == "set")
      {
        var org_price =  parseInt($(this).data('price'));
         var disc_amt = parseInt($(this).data('discamt'));
       
        disc_price = org_price - disc_amt;
        discounted_amt = disc_amt;
        $("#discounted_amt_h5").html(discounted_amt);
        $("#disc_price_h3").html(disc_price +" ₹");
        $("#disc_price_strike").html("<strike>"+$(this).data('price')+" ₹"+"</strike>");
      }
      else
      {
        $("#org_price_h3").html($(this).data('price')+" ₹");
      }
    });
    $("#prod_info").submit(function () {
       var formData = new FormData($("#prod_info")[0]);
          $.ajax({
              type:"POST",
              url:"cart/add_with_qty.php",
              data:formData,
              processData: false,
              cache: false,
              contentType: false,
              success: function(data){
                if(data=="added_to_cart")
                {
                  $("#desc_text").html("Item added to Cart !");
                  launch_toast();

                }
                else if(data == "qty_updated")
                {
                  $("#desc_text").html("Item Quantity Updated!");
                  launch_toast();

                }
                else 
                {
                   //launch_toast();
                  alert("Something went wrong!");
                  window.location.reload();
                }
                
              },
            });
        
      return false;
    });
    function launch_toast() {
    

        var x = document.getElementById("toast");
        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", "hide");window.location.reload(); }, 2500);
    }
    $("#hide_toast").click(function () {
       window.location.reload();
      //$("#toast").css("visibility","hidden");
    })
  </script>
</body>


<!-- Mirrored from html.lionode.com/bigmarket/bm002/product_detail_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Nov 2020 04:45:40 GMT -->
</html>