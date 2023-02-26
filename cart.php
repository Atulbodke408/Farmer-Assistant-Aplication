<?php
  @session_start();
  require 'admin/db.php';
  //print_r($_SESSION);
   $countprod = 1;
   $promotext = "";
  $_SESSION['url'] = $_SERVER['REQUEST_URI'];
    if(isset($_SESSION['promo_code']) && !empty($_SESSION['promo_code']))
    {
    	$promotext = $_SESSION['promo_code'];
    }
    else
    {
    	$_SESSION['promo_code'] = '';
    }
    //print_r($cod_count);
   
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
	<?php
	if ((!empty($_SESSION['user_id'])) && ($_SESSION["site_type"]=="cust_side"))
	{

	  echo '<input type="hidden" value="true" id="loggedin">';
	}
	?>
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
    
    <!-- =====  Nav END  ===== -->

    <!-- =====  HEADER START  ===== -->
    <?php include "main_head.php";?>
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
                            <input type="text" class="form-control" style="text-transform: uppercase;" value="<?php echo $promotext;?>" id="promo_code" placeholder="Enter Coupon Code here" value="" name="coupon">
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
                  <?php
                  require 'admin/db.php';
                 
                    $sql = "SELECT * FROM settings WHERE  variable='system_timezone'";

                  if ($result2 = $con->query($sql)) 
                    {
                      while ($row2 = $result2->fetch_assoc()) 
                        {
                           $id = $row2['id'];
                            $data = json_decode($row2['value'], true);
                        }
                      }
                  ?>
                  <?php
                 // echo $data["min_order_amount"];
                  $subtotal = $data["min_order_amount"] -$total;

                  if ($total >= $data["min_order_amount"]) {
                   echo '<div class="col-md-12 offset-md-12">
                    <table class="table ">
                      <thead>
                        <tr>
                          <td colspan="2"  class="card-header text-right">
                           <button type="button" id="proceed_address_btn" style="border:none;background-color: unset;color: blue"> <h4 style="font-weight:bold;font-size: 1.5em;color: white; text-shadow: 0px 0px 0 rgb(253,253,253),1px 0px  0 rgb(252,252,252), 2px 0px 1px rgba(21,13,255,0.25), 2px 0px 1px rgba(21,13,255,0.5), 0px 0px 1px rgba(21,13,255,.2);">Proceed For Address   <i class="fa fa-forward"></i></h4></button>
                          </td>
                        </tr>
                      </thead>
                     
                    </table>
                  </div>';
                  }
                  else{
                    echo'<h3  class="text-center" style="color:red;">Add '.$subtotal.' Rs. Worth Or More Products To Place An Order  </h3>';

                  }

                 echo'

                </div>
              </div>
              </div>
              <div id="data_back" style="display: none">
                
              </div>
              <div id="pagetext" style="display: none">
                
              </div>
              <div id="promo_info" style="display: none">
                
              </div>
            </form>';
            
            
            
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
  	 var promo_code_valid="";
  	 if($("#promo_code").val()!='')
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
  	 	                  	promo_code_valid = $("#promo_code").val();
  	 	                    
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
                          	promo_code_valid = $("#promo_code").val();
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
  
  	$("#proceed_address_btn").click(function (e) {
	  e.preventDefault();
	 
	      
	       
	        var formData =new FormData();
          cart_amt = $("#cart_amt").text();
          promo_disc_amt = $("#promo_disc_amt").text();

          cart_final_amt = $("#cart_final_amt").text();
	       	formData.append("promo_code_valid",promo_code_valid);
          formData.append("cart_amt",cart_amt);
          formData.append("promo_disc_amt",promo_disc_amt);
          formData.append("cart_final_amt",cart_final_amt);

	           $.ajax({
	              type:"POST",
	              url:"save/save_promo_session.php",
	              data:formData,
	              processData: false,
	              cache : false,
	              contentType: false,
	              success: function(data){
	               
	                  window.location.href='cust_address.php';
	                
	              }
	          });
	      
	     
	  return false;
  	});
  	
  </script>
</body>
</html>