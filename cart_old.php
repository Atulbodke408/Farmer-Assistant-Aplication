<?php
  @session_start();
  require 'admin/db.php';
  //print_r($_SESSION);
   $countprod = 1;
  $_SESSION['url'] = $_SERVER['REQUEST_URI'];
    
    //print_r($cod_count);
   
?>
<!doctype html>
<html class="no-js" lang="en">
<head>

  <!-- =====  BASIC PAGE NEEDS  ===== -->
  <meta charset="utf-8">
  <title>Cart - SDCAyush.com</title>

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
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.9.1/themes/smoothness/jquery-ui.css">
  <style type="text/css">
    input[type=number]::-webkit-inner-spin-button {
        display: none;
    }
  </style>
</head>

<body>
  <!-- =====  LODER  ===== -->
  
  <div class="wrapper">

    <!-- Modal -->
    
    <!-- Modal End -->

    <!-- =====  Nav START  ===== -->
    <nav id="top">
      <div class="container">
        <div class="row"> <span class="responsive-bar"><i class="fa fa-bars"></i></span>
          <div class="header-middle-outer closetoggle">
            <div id="responsive-menu" class="nav-container1 nav-responsive navbar">
              <div class="navbar-collapse navbar-ex1-collapse collapse">
                <ul class="nav navbar-nav">
                 
                  <li class="collapsed" data-toggle="collapse" data-target="#PersonalCare"><a href="#">Personal Care</a> <span><i class="fa fa-plus"></i></span>
                    <ul class="menu-dropdown collapse" id="PersonalCare">
                      <li class="main_cat"> <a href="category_page.html">Deos  Perfumes</a> </li>
                      <li class="main_cat"> <a href="category_page.html">Hair Care</a> </li>
                    </ul>
                  </li>
                 
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <!-- =====  Nav END  ===== -->

    <!-- =====  HEADER START  ===== -->
    <header id="header" class="section">
      <div class="container">
        <div class="header-top py-1">
          <div class="row align-items-center">
            <div class="col-md-6">
              <ul class="header-top-left pull-left">              
                 <li class="telephone">
                  <a href="tel:+91 7798376776"><img src="images/ico/phone.png"> +91 987-654-321</a> 
                </li>
               
              </ul> 
            </div>
            <?php include 'logincheck.php';?>
          </div>
        </div>
      </div>
      <div class="header section pt-15 pb-15">
        <div class="container">
          <div class="row">
            <div class="navbar-header col-2 header-bottom-left"> <a class="navbar-brand" href="index.php"> <img alt="Bigmarket" src="images/logo.png"> </a> </div>
            <div class="col-10 header-bottom-right">
              <div class="header-menu">
                <div class="responsive-menubar-block">
                  <span>Shop By<br> Category</span>
                  <span class="menu-bar collapsed" data-target=".navbar-ex1-collapse" data-toggle="collapse"><i class="fa fa-bars"></i></span>
                </div>
                <nav id="menu" class="navbar">
                  <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav main-navigation">
                      
                      <li class="main_cat dropdown"> <a href="category_page.html">Personal Care</a>
                        <div class="dropdown-menu megamenu column1">
                          <div class="dropdown-inner">
                            <ul class="list-unstyled childs_1">
                              
                              <!-- 2 Level Sub Categories START -->
                              <li class="main_cat active"> <a href="category_page.html">Deos & Perfumes</a> </li>
                              <li class="main_cat"> <a href="category_page.html">Hair Care</a> </li>
                              
                              <!-- 2 Level Sub Categories END -->
                            </ul>
                          </div>
                        </div>
                      </li>
                    
                    </ul>
                  </div>
                </nav>
              </div>
              <div class="header-link-search">
                <div class="header-search">
                  <div class="actions">
                      <button type="submit" title="Search" class="action search" id="head-search"></button>
                  </div>
                  <div id="search" class="input-group">
                    <input type="text" id="search-input" name="search" value="" placeholder="Search Products..." class="form-control input-lg" autocomplete="off">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-default btn-lg">Search</button>
                    </span>
                  </div>
                </div>
                <div class="header-link">
                 <ul class="list-unstyled">
                  <li style="background:url('images/ico/1.png') no-repeat 4px; "><a href="products.php">Products</a></li>
                  <li style="background:url('images/ico/3.png') no-repeat 4px; "><a href="offers.php">Offers</a></li>
                  <li style="background:url('images/ico/blog.png') no-repeat 4px; "><a href="blogs.php">Blogs</a></li>
                  <li style="background:url('images/ico/map.png') no-repeat 4px; "><a href="contact.php">Visit Store</a></li>
                </ul>
              </div>
              </div>
              <?php include 'cartdata.php';?>
            </div>
          </div>
        </div>
      </div>
      <div class="header-static-block">
        <div class="container">
          <div class="row">
            <div class="icon-block">
              <div class="home_icon">
              <a href="index.php"><i class="fa fa-home"></i>Home</a>
              </div>
              <div class="search_icon">
              <a href="#"><i class="fa fa-search"></i>Search</a>
              </div>
              <div class="cart_icon">
              </div>
              <div class="login_icon">
                <a href="login.html"><i class="fa fa-user"></i>Login</a>
              </div>
              <div class="telephone_icon">
                <a href="contact_us.html"><i class="fa fa-phone"></i>Contact</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- =====  HEADER END  ===== -->
     
    <!-- =====  BREADCRUMB STRAT  ===== -->
    <div class="breadcrumb section pt-60 pb-60 mb-30">
      <div class="container">
        <h1 class="uppercase">SHOPPING CART</h1>
        <ul>
          <li><a href="javascript:;"><i class="fa fa-home"></i></a></li>
          <li class="active">SHOPPING CART</li>
        </ul>
      </div>
    </div>
    
    <!-- =====  BREADCRUMB END===== -->
  
    <div class="product-section section">
    <!-- =====  CONTAINER START  ===== -->
      <div class="container">
        <div class="row ">
          <div class="col-12 mt-20 mb-20">
            <?php
            if(!empty($_SESSION['item_id']))
            {
              ?>
            <form enctype="multipart/form-data" method="post" action="" id="form_cart" >
              <div class="table-responsive">

                <table class="table table-bordered" style="white-space: nowrap;">
                  <thead>
                    <tr>
                      <td class="text-center">Image</td>
                      <td class="text-left">Name</td>
                      
                     
                      <td class="text-right">Unit Price</td>
                      <td class="text-left">Qty</td>
                      <td class="text-right">Total</td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    	echo '<input type="hidden" id="item_count_hidden" value="'.count($_SESSION["item_id"]).'">';
                      for($i=0;$i<count($_SESSION['item_id']);$i++)
                      {
                        $variant_id = $_SESSION['variant_id'][$i];
                     	
                        //print_r($_SESSION['variant_id']);
                        $select_prods = "select * from product_variant inner join products on products.id=product_variant.product_id where product_variant.id = $variant_id";  
                        //echo $select_prods;
                       if ($result = $con->query($select_prods)) {
                          while ($data = $result->fetch_assoc()) {
                            $path = '';
                            if($data['image']=="" || $data['image']==NULL)
                            {
                              $path = "admin/upload/images/default.png";
                            }
                            else
                            {
                              $realpath = dirname($data["image"]);
                              $path = str_replace($realpath, "", trim($data["image"]));
                              $path=  "admin/upload/images/".$path;
                            }
                            $subtotal = $_SESSION['price'][$i] * $_SESSION['qty'][$i];
                          echo '<tr>
                        <td class="text-center"><a href="prod.php?prod='.$data['slug'].'"><img style="width:50px" src="'.$path.'" alt="'.$data["name"].'" title="'.$data["name"].'"></a></td>
                        <td class="text-left"><a href="prod.php?prod='.$data['slug'].'">'.$data["name"].'</a></td>
                       
                        
                        <td class="text-right">'.$_SESSION['price'][$i].' Rs.</td>
                        <td class="text-left" style="width: 120px">
                          <div style="display: inline-flex;">
                            <input data-userid="'.$_SESSION['variant_id'][$i].'" class="qty_spinner" style="width: 40px" type="number" value="'.$_SESSION['qty'][$i].'" min="1" minlength="1" max="10" name="">
                            <button data-userid="'.$_SESSION['variant_id'][$i].'" title="remove product" style="margin-left: 5%" data-userid="" class="remove_prod btn btn-danger" title="" data-toggle="tooltip" type="button" data-original-title="Remove"><i class="fa fa-times-circle"></i></button>
                          </div>
                        </td>
                        <td class="text-right">'.$subtotal.' Rs.</td>
                      </tr>';
                        }
                       }

                      }
                    
                    
                    
                    
                    
                    ?>
                  </tbody>
                </table>
              </div>
              <h3 class="mtb_10">What would you like to do next?</h3>
              <p>Choose if you have a discount code then please enter valid coupon/promo code below to get maximum discount.</p>
              <div class="row">
                <div class="col-md-6 col-sm-12">
                  <div id="accordion">
                    <div class="card my-1">
                      <div class="card-header" id="headingOne">
                        <h4 style="font-weight:bold" class="mb-0">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Coupon Code<i class="fa fa-caret-down"></i></a>
                        </h4>
                      </div>

                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                          <div class="row align-items-center">
                          <label for="input-coupon" class="col-sm-4 control-label">Coupon Code</label>
                          <div class="input-group col-sm-8">
                            <input type="text" class="form-control" style="text-transform: uppercase;" id="promo_code" placeholder="Enter Coupon Code here" value="" name="coupon">
                            <span class="input-group-btn">
                          <input type="button" class="btn" data-loading-text="Loading..." id="promo_apply_btn" value="Apply Coupon">
                          </span> </div>
                        </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
             
              <div class="col-md-6 col-sm-12">
                <div class="row">
                  
                  <div class="col-md-12 offset-md-12">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <td colspan="2"  class="card-header">
                            <h4 style="font-weight:bold">Cart Totals</h4>
                          </td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="text-right"><strong>Sub-Total:</strong></td>
                          <td class="text-right"><p class="cart_amount" id="cart_amt"><?php echo number_format($total, 2); ?></p></td>
                        </tr>
                        <tr>
                          <td class="text-right"><strong>Discount   <button type="button" id="promo_info_btn" style="border:none;background-color: unset;color: blue"><i class="fa fa-info-circle"></i></button>:</strong></td>
                          <td class="text-right"><p class="cart_amount" id="promo_disc_amt"></p></td>
                        </tr>
                        
                        <tr>
                          <td class="text-right"><strong>Total:</strong></td>
                          <td class="text-right"><p class="cart_amount" id="cart_final_amt"><?php echo number_format($total, 2); ?></p></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-sm-12">
               
                </div>
              
              <div class="col-md-6 col-sm-12">
                <div class="row">
                  
                  <div class="col-md-12 offset-md-12">
                    <table class="table ">
                      <thead>
                        <tr>
                          <td colspan="2"  class="card-header">
                            <h4 style="font-weight:bold">Payment Options</h4>
                          </td>
                        </tr>
                      </thead>
                      <tbody>
                        <tr style="border:1px solid">
                        
                          <td class="text-left"><div class="payment_method row text-center" style="padding: 10px">
                                      <div class="panel-default d-inline-block  col-md-6">
                                           <input id="payment" name="check_method" type="radio" value="cod"><label for="payment">Cash on Delivery</label>                                           
                                           
                                       </div> 
                                      <div class="panel-default d-inline-block col-md-6">
                                           <input id="payment_defult" name="check_method" type="radio" value="online">
                                           <label for="payment_defult">Pay Online</label>

                                       </div>
                                       
                                   </div></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="checkout_btn text-center payment_method_cod" style="display: none;">
                            <?php 

                                if ((!empty($_SESSION['user_id'])) && ($_SESSION["site_type"]=="cust_side"))
                                {

                                  echo '<input type="hidden" value="true" id="loggedin">';
                                       echo '<div class="row" style="padding-left:10px"><div class="col-12">
                                         <form method="POST" action="" id="chk_captcha">
                                        <div class="row">
                                        <div class="col-md-4" style="margin:auto"> Enter following text </div>
                                        <div class="col-md-4"><input style="width:75%;padding:1% 0%" type="text form-control"  maxlength="5" minlength="5" name="captcha_text" id="captcha_text" value=""></div>

                                        <div class="col-md-4"><img src="test_c.php" style="width:100%" border="1" alt="CAPTCHA"></div>
                                        </div>
                                        <div class="row">
                                         <div class="col-12 text-center" style="padding-top:3%">
                                         <div class="order_button">
                                             ';
                                              $uid = $_SESSION['user_id'];
                                              $q = "select * from user_addresses where user_id = '$uid'";
                                                if ($result = $con->query($q)) {
                                                   while ($data = $result->fetch_assoc()) {
                                                    echo '<button data-userid="'.$uid.'" style="background:#84c225 " class="btn btn-success" type="button" data-toggle="modal" id="address_modal_btn" data-target="#address_modal">Submit &amp; Place Order</button>';
                                                   }
                                                  }  
                                              
                                              else
                                              {
                                                echo '<button  data-userid="'.$uid.'"  style="background:#84c225 " class="btn btn-info" type="button" data-toggle="modal" data-target="#add_address_modal" id="add_address_btn">Add Shipping Address</button>';   
                                              }
                                              
                                             echo'
                                         </div>
                                         </div>
                                        </div>
                                         </form>
                                         </div>
                                         
                                         </div>';
                                     


                                   }
                                   else
                                   {
                                       echo '<a class="btn btn-danger" href="login.php"> You Need to login first !</a>';
                                   }
                               ?>
                                
                            </div>
                            <div class="checkout_btn text-center payment_method_online" style="display: none;">
                            <?php
                               if ((!empty($_SESSION['user_id'])) && ($_SESSION["site_type"]=="cust_side")) {
                                       echo '<div class="row"><div class="col-6"><button type="button" style="background-color:#e7e7e7;color:black;padding:20px" id="proceed_btn_razorpay" style="">Pay with <img style="width:70px" src = "assets/rzlogo.png"></button> </div> <div class="col-6"><button style="background-color:#f5ea6c;color:black;padding:20px" id="proceed_btn_paytm" style="">Pay with <img style="width:60px" src = "assets/paytm.png"></button> </div></div>';
                                   }
                                   else
                                   {
                                       echo '<a class="btn btn-danger" href="login.php"> You Need to login first !</a>';
                                   }
                               ?>
                               <?php
                                  if ((!empty($_SESSION['user_id'])) && ($_SESSION["site_type"]=="cust_side")) {
                                          $uid = $_SESSION['user_id'];
                                          $select_user_address = "select * from user_addresses where user_id = '$uid'";
                                          $res = $con->query($select_user_address);
                                          $numrows = mysqli_num_rows($res);
										  if($numrows > 0)
                                          {
                                          	  echo '<input type="hidden" value="set" id="address_field">';                                          }
                                          	  else
                                          	  {
                                          	  	echo '<input type="hidden" value="unset" id="address_field">';
                                          	  }
                                            
                                      }
                                      
                                  ?>
                                
                            </div>
                          </td>
                          
                        </tr>
                        
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              </div>
              <div id="data_back" style="display: none">
                
              </div>
              <div id="pagetext" style="display: none">
                
              </div>
              <div id="promo_info" style="display: none">
                
              </div>
            </form>
            
            
            <?php
            }
            else
            {
              echo "<h3 style='font-size:32px' class='text-center'>Your Shopping cart is Empty!</h3>
              <form action='index.php'>
              <input class='btn pull-right mt_30' type='submit' value='Continue' />
            </form>";
            }
            ?>
            
          </div>
        </div>
      <!-- =====  Brand start ===== -->
      
      <!-- =====  Brand end ===== -->
      </div>
    <!-- =====  CONTAINER END  ===== -->
    </div>
    <div id="address_modal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Select Shipping Address</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            
          </div>
          <div class="modal-body" id="address_modal_data">
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
    </div>
    <div id="add_address_modal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Select Shipping Address</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            
          </div>
          <div class="modal-body">
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
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
  <script
  src="https://code.jquery.com/ui/1.9.1/jquery-ui.js"
  integrity="sha256-tXuytmakTtXe6NCDgoePBXiKe1gB+VA3xRvyBs/sq94="
  crossorigin="anonymous"></script>
  <script type="text/javascript">
    $("#promo_info_btn").click(function () {

      var promo_code = $("#promo_code").val();
      if(promo_code == "")
      {
        swal("PromoCode Not Applied!","","warning").then((value) => {
                                if (value) {
                                    
                                    } else {
                                   
                                    }

                              });
      }
      else
      {
        $.ajax({
                   type:"POST",
                   url:"promo_info.php",
                   data:{"promo_code":promo_code},
                   
                   
                   success: function(data){
                    $("#promo_info").html(data);
                    var promoapplied = $("#promoapplied").val();
                    var promotext = $("#promotext").val();
                    swal("PromoCode Applied :"+promoapplied,"Info :"+promotext,"info").then((value) => {
                                                  if (value) {
                                                      
                                                      } else {
                                                     
                                                      }

                                                });
                   }
               });
      }
    
    });
    $("#address_modal_btn").click(function () {
      var userid = $(this).data('userid');
      $.ajax({
                 type:"POST",
                 url:"get/get_address_cart.php",
                 data:{"userid":userid},
                 
                 
                 success: function(data){
                  $("#address_modal_data").html(data);
                  
                 
                 }
             });
    });
    $("#add_address_btn").click(function () {
      var userid = $(this).data('userid');
      console.log(userid);
    });
      $("#promo_apply_btn").click(function (e){
        var loggedin = $("#loggedin").val();
        if(loggedin != 'true')
        {
          swal("Please try after login","click ok to login / Register","warning")
                              .then((value) => {
                                if (value) {
                                    window.location.href="login.php";
                                    } else {
                                    window.location.href="login.php";
                                    }

                              });
        }
        else
        {
          var promo_code = $("#promo_code").val();
          var cart_amt = $("#cart_amt").text();

          cart_amt =parseFloat(cart_amt.replace(/,/g, ''));
          if(promo_code != "")
          {
             $.ajax({
                        type:"POST",
                        url:"promo_check.php",
                        data:{"promo_code":promo_code,"cart_amt":cart_amt},
                        
                        
                        success: function(data){
                          $("#data_back").html(data);
                          if(($("#data_back").text()!="Not valid promo code") && ($("#data_back").text()!="Promo code Expired"))
                          {
                             swal("Success","PromoCode Applied !","success")
                              .then((value) => {
                                if (value) {
                                    
                                     
                                    } else {
                                    
                                    }

                              });
                            $("#promo_disc_amt").text($("#disc_price").val());
                            $("#cart_final_amt").text($("#final_amt").val());
                          }
                          else if($("#data_back").text()=="Promo code Expired")
                          {
                            swal("Error","PromoCode not Valid or Expired !","error")
                              .then((value) => {
                                if (value) {
                                    
                                     
                                    } else {
                                    
                                    }

                              });
                            $("#promo_disc_amt").text(0);
                             $("#cart_final_amt").text($("#cart_amt").text());
                          }
                          else
                          {
                            swal("Error","PromoCode not Valid or Expired !","error")
                              .then((value) => {
                                if (value) {
                                    
                                     
                                    } else {
                                    
                                    }

                              });
                             $("#promo_disc_amt").text(0);
                             $("#cart_final_amt").text($("#cart_amt").text());
                          }
                        }
                    });
          }
          else
          {
            $("#promo_disc_amt").text(0);
            $("#cart_final_amt").text($("#cart_amt").text());
          }
        }
        
       
      });
             $('input[type=radio][name=check_method]').click(function() {
              console.log(this.value);
        if (this.value == 'cod') {
           $(".payment_method_cod").css("display","");
           $(".payment_method_online").css("display","none");
        }
        else if (this.value == 'online') {
            $(".payment_method_cod").css("display","none");
           $(".payment_method_online").css("display","");
        }
    });
    $(".qty_spinner").spinner();
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
    $(".remove_prod").click(function () {
       var formData = new FormData();
      var variant_id = ($(this).data('userid'));
      formData.append("variant_id",variant_id);
      $.ajax({
                    type:"POST",
                    url:"cart/delete_item_from_cart.php",
                    data:formData,
                    processData: false,
                    cache: false,
                    contentType: false,
                    success: function(data){
                      if(data=="prod_removed")
                      {
                        swal("Product Removed from Cart!","","success").then((value) => {
                                       if (value) {window.location.reload();
                                       }
                                       else
                                       {
                                        window.location.reload();
                                       }

                      });
                      }
                      else 
                      {
                         swal("Something went Wrong!","","error").then((value) => {
                                        if (value) {window.location.reload();
                                        }
                                        else
                                        {
                                         window.location.reload();
                                        }
                      });
                      }
                      
                    },
                  });
    });
     
      $("#form_cart").submit(function (){
        var formData = new FormData($("#chk_captcha")[0]);
        var captcha_text = $("#captcha_text").val();
        formData.append("captcha_text",captcha_text)
                $.ajax({
                        type:"POST",
                        url:"cart/submit_check_captcha.php",
                        data:formData,
                        processData: false,
                       
                        contentType: false,
                        success: function(data){
                         if(data =="1")
                         {
                          var formData = new FormData($("#form_cart")[0]);
                          $.ajax({
                                  type:"POST",
                                  url:"cart/place_order.php",
                                  data:formData,
                                  processData: false,
                                 
                                  contentType: false,
                                  success: function(data){
                                    console.log(data);
                                  },
                                });

                         }
                         else
                         {
                          swal("Please Enter Correct CAPTCHA!","","error").then((value) => {
                                        if (value) {$("#captcha_text").val("");
                                        }
                                        else
                                        {
                                         $("#captcha_text").val("");
                                        }
                      });
                         }
                       },
                     });
       
         return false;
       });
   $('.qty_spinner').change(function () {
     var formData = new FormData();
     var variant_id = ($(this).data('userid'));
     var qty = ($(this).val());
      formData.append("variant_id",variant_id);
      formData.append("new_qty",qty);
      $.ajax({
                    type:"POST",
                    url:"cart/update_qty.php",
                    data:formData,
                    processData: false,
                    cache: false,
                    contentType: false,
                    success: function(data){
                      if(data=="qty_updated")
                      {
                        swal("Quantity Updated!","","success").then((value) => {
                                       if (value) {window.location.reload();
                                       }
                                       else
                                       {
                                        window.location.reload();
                                       }

                      });
                      }
                      else 
                      {
                         swal("Something went Wrong!","","error").then((value) => {
                                        if (value) {window.location.reload();
                                        }
                                        else
                                        {
                                         window.location.reload();
                                        }
                      });
                      }
                      
                    },
                  });
   });
      
    $(".ui-spinner-up").click(function () {
      
      $(this).siblings('input').change();
    });
    $(".ui-spinner-down").click(function () {
     $(this).siblings('input').change();
    })
  
  	$("#proceed_btn_razorpay").click(function (e) {
	  e.preventDefault();
	  if($("#item_count_hidden").val()<=0)
	  {
	      swal("There is nothing in your cart !","","danger");
	  }
	  else
	  {
	      
	      if($("#address_field").val() == "set")
	      {
	       
	        var custData =new FormData($("#")[0]);
	       	
	           $.ajax({
	              type:"POST",
	              url:"temp_cart.php",
	              data:formData,
	              processData: false,
	              cache : false,
	              contentType: false,
	              success: function(data){
	                //window.location.href="ccave/index.php";
	                //$("#pagetext").html(data);
	                //console.log(data);
	                if($("#pageid").text()!="")
	                {
	                  var page = $("#pageid").text();
	                 // alert(page)
	                  window.location.href='pg/razor/index.php?ord_id='+page;
	                }
	              }
	          });
	      }
	      else {
	           swal("Add Address to Continue","","warning")
	                    .then((value) => {
	                      if (value) {
	                            window.location.href="manage_address.php";
	                           
	                          } else {
	                           window.location.href="manage_address.php"; 
	                          }

	                    });
	      
	          
	      }
	  }
	  return false;
  	});
  	$("#proceed_btn_razorpay").click(function () {
  		
  	});
  </script>
</body>


<!-- Mirrored from html.lionode.com/bigmarket/bm002/product_detail_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Nov 2020 04:45:40 GMT -->
</html>