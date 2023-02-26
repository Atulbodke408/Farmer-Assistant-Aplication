 
<?php

    session_start();
//print_r($_SESSION);
    require 'db.php';
    if(!isset($_SESSION['phone_no'])){
        header('location: login.php');
    }
    $user_id=$_SESSION['id'];
    $user_products_query="SELECT users_items.user_id,users_items.prod_id,users_items.status,users_items.qty,product.prod_name,product.prod_price,product.id FROM users_items INNER JOIN product ON users_items.prod_id=product.id WHERE users_items.user_id='$user_id'";
    $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
    $no_of_user_products= mysqli_num_rows($user_products_result);
    $sum=0;
    if($no_of_user_products==0){
        //echo "Add items to cart first.";
    ?>
        <script>
        window.alert("No items in the cart!!");
        </script>
    <?php
    }else{
        while($row=mysqli_fetch_array($user_products_result)){
            $sum=$sum+$row['prod_price']; 
       }
    }
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
	 echo' <a href="login.php"margin-left: 70rem;>Login | Register</a>';
		   }
	  else{
		  echo' <a href="logout.php" style="margin-left: 75rem;">Logout</a>';
	  }
	  ?>

    <!-- =====  HEADER START  ===== -->
   <?php include "main_head.php";?>
    <!-- =====  HEADER END  ===== -->
    <!-- =====  BREADCRUMB STRAT  ===== -->
    <div class="breadcrumb section pt-60 pb-60">
      <div class="container">
        <h1 class="uppercase">Cart Items</h1>
        <ul>
          <li><a href="index.php"><i class="fa fa-home"></i></a></li>
          <li class="active">Cart Items</li>
        </ul>
      </div>
    </div>
    <!-- =====  BREADCRUMB END===== -->
    <div class="page-login section">
    <!-- =====  CONTAINER START  ===== -->
    <div class="container">
		<form method="post" >
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>Item Number</th><th>Item Name</th><th>Price</th><th></th>
                        </tr>
                       <?php 
                        $user_products_result=mysqli_query($con,$user_products_query) or die(mysqli_error($con));
                        $no_of_user_products= mysqli_num_rows($user_products_result);
                        $counter=1;
                       while($row=mysqli_fetch_array($user_products_result)){
                           
                         ?>
                        <tr>
                            <th><?php echo $counter ?></th><th><?php echo $row['prod_name']?></th><th><?php echo $row['prod_price']?></th>
                            <th><a href='cart_remove.php?id=<?php echo $row['id'] ?>'>Remove</a></th>
                        </tr>
                       <?php $counter=$counter+1;}?>
                        <tr>
                            <th></th><th>Total</th><th>Rs <?php echo $sum;?>/-</th><th>
							<a href="success.php?id=<?php echo $user_id?>" class="btn btn-primary">Confirm Order</a></th>
                        </tr>
                    </tbody>
                </table>
		</form>
            </div>
  </div>
  </div>

  <!-- =====  CONTAINER END  ===== -->
    <!-- =====  FOOTER START  ===== -->
    <?php include 'footer.php'; ?>
    <!-- =====  FOOTER END  ===== -->
  <a id="scrollup"></a>
  <script src="js/modernizr.js"></script>
  <script src="js/jQuery_v3.1.1.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.magnific-popup.js"></script>
  <script src="js/jquery.firstVisitPopup.js"></script> 
  <script src="js/custom.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.2.8/firebase-app.js"></script>

  <!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
  <script src="https://www.gstatic.com/firebasejs/8.2.8/firebase-analytics.js"></script>

  <!-- Add Firebase products that you want to use -->
  <script src="https://www.gstatic.com/firebasejs/8.2.8/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.2.8/firebase-firestore.js"></script>

  <!-- The core Firebase JS SDK is always required and must be listed first -->




</body>



</html>