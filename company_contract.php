<?php
  @session_start();
  //print_r($_SESSION);
  require 'db.php';
 
   if(isset($_SESSION['url'])) 
        $url = $_SESSION['url']; // holds url for last page visited.
     else 
        $url = "index.php";
      $_SESSION['new_url'] = $url;
      //print_r($_SESSION);
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

    <!-- Modal -->
    
    <!-- Modal End -->

    <!-- =====  Nav START  ===== -->
    
    <!-- =====  Nav END  ===== -->

    <!-- =====  HEADER START  ===== -->
	  <a href="login.php" style="margin-left:70rem;">Login | Register</a>
   <?php include "main_head.php";?>
    <!-- =====  HEADER END  ===== -->
    <!-- =====  BREADCRUMB STRAT  ===== -->
    <div class="breadcrumb section pt-60 pb-60">
      <div class="container">
        <h1 class="uppercase">Contract Sign</h1>
        <ul>
          <li><a href="index.php"><i class="fa fa-home"></i></a></li>
          <li class="active">Contract</li>
        </ul>
      </div>
    </div>
    <!-- =====  BREADCRUMB END===== -->
    <div class="page-login section">
    <!-- =====  CONTAINER START  ===== -->
    <div class="container">
      <div class="row ">
        <div class="col-12 my-3">
          <div class="row">
             <div class="col-md-12 col-12 d-flex" style="margin:auto">
              <div class="login">
                <h3>Contract Sign</h3>
                <form class="my-4" id="register_form" method="post" action="submit_contract.php" enctype="multipart/form-data">
                   <div class="form-group">
                    <label style="float: left;">Company Name</label>

                        <input type="text" required name="company_name" class="form-control" id="exampleInputtext" aria-describedby="exampleInputtext" placeholder="Enter Company Name">
                      </div>
                      <div class="form-group">
                         <label style="float: left;">Select Farmer</label>

                       <select class="form-control" name="farmer_name">
                        <option selected disabled>Select Farmer</option>
                        <?php
                        include "db.php";
                           $query = "SELECT * FROM farmer";
                             //echo $query;
                         if ($result = $con->query($query)) {
                 
                          while ($data = $result->fetch_assoc()) {
                  
                        echo' <option value="'.$data["id"].'">'.$data["name"].'</option>';
                      }
                    }
                    ?>
                       </select>
                      </div>
                      <div class="form-group">
                       <label style="float: left;">Product Name(optional)</label>
                        <input type="text"  name="product_name" class="form-control" id="exampleInputtext" aria-describedby="exampleInputtext" placeholder="Enter Product Name">
                      </div>
                      
                       <div class="form-group">
                         <label style="float: left;">Comment</label>

                        <input type="text" required name="comment" class="form-control" id="exampleInputtext" aria-describedby="exampleInputtext" placeholder="Enter Comment">
                      </div>
					<label style="font-size: 15px;margin-left: -18rem;">Terms and Conditions</label>
					<p style="text-align:justify">This document, which consists of this form (the “Sales Plan”) and the attached Terms and
Conditions (together, the “Agreement”), creates a legal contract between Farmer and Client. It
describes the terms under which Farmer will grow, and Client will market and sell, Farmer’s
crop. By signing below, Farmer confirms that Farmer understands and agrees to the terms of
						this Agreement, including those relating to payment and waiver of statutory provisions. </p>
					
					
					 <div class="form-group">
                       

                    <input type="checkbox" required name="terms_condition" value="check" id="agree" /> I have read and agree to the Terms and Conditions and Privacy Policy

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
        </div>
      </div>
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


<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyBRAHYfB9NPkFtGtA7qi9f17kXm_wnAL3w",
    authDomain: "sdcnew-92154.firebaseapp.com",
    projectId: "sdcnew-92154",
    storageBucket: "sdcnew-92154.appspot.com",
    messagingSenderId: "805941365766",
    appId: "1:805941365766:web:59e845361d013ab6ce4787",
    measurementId: "G-PW2FG4Q1X4"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
   

</body>



</html>