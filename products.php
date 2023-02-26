
<?php
  @session_start();
  require 'db.php';
 
 
?>

<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from html.lionode.com/bigmarket/bm002/category_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 Nov 2020 04:44:53 GMT -->
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
  <link rel="stylesheet" href="../../../use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link rel="stylesheet" href="css/meanmenu.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="shortcut icon" href="images/favicon.png">
  <link rel="apple-touch-icon" href="images/apple-touch-icon.html">
  <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.html">
  <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.html">

</head>

<body>
  <!-- =====  LODER  ===== -->
  
  <div class="wrapper">
	    <?php
	   if(!isset($_SESSION['phone_no'])){
	 echo' <a href="login.php"margin-left: 70rem;>Login | Register</a>';
		   }
	  else{
		  echo' <a href="logout.php" style="margin-left: 75rem;">Logout</a>';
	  }
	  ?>
	

   <?php include "main_head.php";?>
    <div class="breadcrumbs section">
      
        <img src="1.jpg" style="width: 100%">
      
    </div>
    <!-- =====  BREADCRUMB END===== -->
    <div class="product-section section mt-30">
    <!-- =====  CONTAINER START  ===== -->
    <div class="container">
      <div class="row">
        <div id="column-left" class="col-lg-3 col-xl-3 col-sm-4">
          <div id="category-menu" class="mb-30 mt-10">
            <div class="nav-responsive">
              <div class="heading-part">
                <h3 class="section_title">Categories</h3>
              </div>
              <ul>
                <?php
                include "db.php";
                $query2 = " select * from category";

              // $query = "SELECT *  FROM `product`";
                if ($result2 = $con->query($query2)) 
                  {
                    while ($data2 = $result2->fetch_assoc()) 
                      {

                        echo'<li ><a href="products.php?id='.$data2["id"].'" class="category_product" >'.$data2["cat_name"].'</a></li>';
                      }
                    }
                ?>
                
              </ul>
            </div>
          </div>
          
        </div>
        <div class="col-lg-9 col-xl-9 col-sm-8">
          <!-- <div class="category-page-wrapper mb-15 pb-10">
            <div class="row" style="float: right;">
            
            
            <div class="col-md-auto sort-wrapper order-11">
              <label class="control-label" for="input-sort">Sort By :</label>
              <div class="sort-inner">
                <select id="input-sort" class="form-control">
                 
                  <option value="ASC">Name (A - Z)</option>
                  <option value="DESC">Name (Z - A)</option>
                  <option value="ASC">Price (Low &gt; High)</option>
                  <option value="DESC">Price (High &gt; Low)</option>
                  
                </select>
              </div>
            </div>
          </div>
          </div> -->
         <form method="post" id="add_cart">

          <div class="row" id="get_cat_prod"  >
             <?php
             extract($_GET);
             
             if (!empty($_GET["id"])) {
              $id =$_GET['id'];

                $query = " select * from product where product.category='$id'";

              // $query = "SELECT *  FROM `products`";
                $res = $con->query($query);
                $numrows = mysqli_num_rows($res);
                if($numrows > 0)
                {
                  if ($result = $con->query($query)) 
                  {
                    while ($data = $result->fetch_assoc()) 
                      {
                        $realpath = dirname($data["img"]);
                        $path = str_replace($realpath, "", trim($data["img"]));
                        $path=  "images/".$path;
                    


                        echo'
                        <div class="product-layout  product-grid col-lg-3 col-6" >
                          <div class="item">
                           <div class="product-thumb transition">
                              <div class="image">
                                <div class="first_image"> <a > <img src="'.$path.'" alt="pure-spice-3" title="pure-spice-3" class="img-responsive"> </a> </div>
                                <div class="swap_image"> <a > <img src="'.$path.'" alt="pure-spice-3" title="pure-spice-3" class="img-responsive"> </a></div>
                              </div>
                              <div class="product-details">
                                <div class="caption">
                                  <h4><a href="">'.$data["prod_name"].'</a></h4>
                                  <p class="price">$'.$data["prod_price"].'<span class="price-tax">Ex Tax: $7.25</span></p>
                                  <p class="desc">freshly picked for you.Store them in a cool, dry place away from direct sunlight...</p>
                                  <div class="product_option">

                                    <div class="input-group button-group">
                                      <label class="control-label">Qty</label>
                                      <input type="number" name="quantity" value="1"  class="qty form-control">
                                      <input type="hidden" prod_id="id" value="'.$data["id"].'">
                                      <button type="submit" data-userid="'.$data["id"].'" data-prod_id="'.$data["id"].'"  class="addtocart pull-right submit_btn">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                          </div>
                        </div>

                        ';
                      }
                    }
                }
                else
                {
                  echo "<h1>There are no products available under this category !</h1>


                      <div style='margin:auto;'> <a href='products.php' class='btn btn-default'>Continue Shopping</a></div>
                  ";
                }
             }
             else
             {


               // $query = "select * from product  limit $start_from,$total_per_page";
               // echo $query;

              $query = "SELECT *  FROM `product`";
				// echo $query;
                if ($result = $con->query($query)) 
                  {
                    while ($data = $result->fetch_assoc()) 
                      {
                        $realpath = dirname($data["img"]);
                        $path = str_replace($realpath, "", trim($data["img"]));
                        $path=  "images/".$path;
                    


                        echo'
                        <div class="product-layout  product-grid col-lg-3 col-6" >
                          <div class="item">
                           <div class="product-thumb transition">
                              <div class="image">
                                <div class="first_image"> <a href="#"> <img src="'.$path.'" alt="pure-spice-3" title="pure-spice-3" class="img-responsive"> </a> </div>
                                <div class="swap_image"> <a href="#"> <img src="'.$path.'" alt="pure-spice-3" title="pure-spice-3" class="img-responsive"> </a></div>
                              </div>
                              <div class="product-details">
                                <div class="caption">
                                  <h4><a href="#">'.$data["prod_name"].'</a></h4>
                                  <p class="price">$'.$data["prod_price"].'<span class="price-tax">Ex Tax: $7.25</span></p>
                                  <p class="desc">freshly picked for you.Store them in a cool, dry place away from direct sunlight...</p>
                                  <div class="product_option">

                                    <div class="input-group button-group">
                                      <label class="control-label">Qty</label>
                                      <input type="number" name="quantity" value="1"  class="qty form-control">
                                      <input type="hidden"  value="'.$data["id"].'">
                                      <button type="submit" data-userid="'.$data["id"].'" data-prod_id="'.$data["id"].'"  class="addtocart pull-right submit_btn">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                          </div>
                        </div>

                        ';
                      }
                    }
             }
             
            ?>

         </div>
         </form>
        </div>
      </div>
    </div>
   


      
    <!-- =====  CONTAINER END  ===== -->

    </div>
    <!-- =====  FOOTER START  ===== -->
    <?php include "footer.php";?>

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
  <script src="js/jquery-ui.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
  $(function() {
    $("#slider-range").slider({
      range: true,
      min: 0,
      max: 500,
      values: [75, 300],
      slide: function(event, ui) {
        $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
      }
    });
    $("#amount").val("$" + $("#slider-range").slider("values", 0) +
      " - $" + $("#slider-range").slider("values", 1));
  });

   $("#add_cart").on("click", ".submit_btn", function(){
     // var ms = $(this).data('ms');
      var variant_id = $(this).data('userid');
      var qty = $(this).prev().prev().val();
      var prod_id = $(this).data('prod_id');
      form = new FormData();
      if($("#prod_id").val()!="")
      {
        //form.append('ms', ms);
        form.append('variant_id', variant_id);
        form.append('prod_id', prod_id);
        form.append('qty', qty);
      }
          $.ajax({
              type:"POST",
              url:"cart/add_with_qty.php",
              data:form,
              processData: false,
              cache: false,
              contentType: false,
              success: function(data){
                
                if(data=="success")
                {

                   swal("Item added to Cart!","","success")
                    .then((value) => {
                     if(value)
                     {
                       window.location.href="cart2.php";
 
                     }
                     else
                     {
                       //window.location.reload();
                     }
                   });

                  // $("#desc_text").html("Item added to Cart !");
                  // launch_toast();

                }
                
                else 
                {
                   //launch_toast();
                  alert("Something went wrong!");
                 // window.location.reload();
                }
                
              },
            });
        
      return false;
    });
   
</script>
</body>

</html>