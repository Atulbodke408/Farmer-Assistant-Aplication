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

<?php
if(isset($_POST["register"])){


 extract($_POST);

	require 'db.php';
		$insert_query= "INSERT INTO customer(user_name,email,phone_no,address,password) VALUES ('$user_name','$email','$phone_no','$address','$password')";

		//echo $insert_query."<br>";	
		$fire_query= mysqli_query($con,$insert_query);
		//print_r($update_query_teacher);
		if($fire_query)
		{
			
		echo "<script>
		alert('Register Successfully');
		window.location.href='login.php';
		</script>";
		
		}
		else
		{
		echo "<script>
		alert('Not Register');
		window.location.href='login.php';
		</script>";
		}
}
	
?>

<!doctype html>
<html class="no-js" lang="en">
<head>

  <!-- =====  BASIC PAGE NEEDS  ===== -->
  <meta charset="utf-8">
  <title>Login - Farm Assistant</title>

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
   <?php include "main_head.php";?>
    <!-- =====  HEADER END  ===== -->
    <!-- =====  BREADCRUMB STRAT  ===== -->
    <div class="breadcrumb section pt-60 pb-60">
      <div class="container">
        <h1 class="uppercase">Login</h1>
        <ul>
          <li><a href="index.php"><i class="fa fa-home"></i></a></li>
          <li class="active">Login</li>
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
            
            <!-- Login -->
            <div class="col-md-6 col-12 d-flex">

                <div class="login">
                    
                    <h3>Login to your account</h3>                   
                    <!-- Login Form -->
                    <form class="my-4" id="login_form" method="post" action="checklogin.php">
                      <div class="form-group">

                        <input type="number" name="phone_no"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    type = "number"
    maxlength = "10"  title="Phone number" class="form-control" id="exampleInputEmail1" aria-describedby="exampleInputEmail1" placeholder="Enter your Mobile number">
                      </div>
                      <div class="form-group">
                        <input type="password" autocomplete="off" name="password"  class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <button type="submit" style="font-weight: bold;color: white;width: 100%;border:none;background-color: #2cbf3e" class="btn btn-success">Login</button>
                        </div>
                        <div class="col-md-6">
                          <button type="button" id="reset_btn" style="font-weight: bold;color: white;width: 100%;border:none;background-color: #ff5722" class="btn btn-success">Reset</button>
                        </div>
                      </div>
                      
                    </form>

                
                    
                </div>
            </div>

            
            <!-- Login With Social -->
            <div class="col-md-6 col-12 d-flex">
              <div class="login">
                <h3>Create / Register New Account</h3>
                <form class="my-4" id="register_form" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                      <div class="form-group">
                        <input type="text" required name="user_name" class="form-control" id="exampleInputtext" aria-describedby="exampleInputtext" placeholder="Enter your username">
                      </div>
                      <div class="form-group">
                        <input type="email" required name="email" class="form-control" id="exampleInputtext" aria-describedby="exampleInputtext" placeholder="Enter your email">
                      </div>
                       <div class="form-group">
                        <input type="text" required name="address" class="form-control" id="exampleInputtext" aria-describedby="exampleInputtext" placeholder="Enter your Address">
                      </div>
                      <div class="form-group">
                        <input type="number" required name="phone_no"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
    type = "number"
    maxlength = "10" class="form-control" placeholder="Enter Mobile Number" id="mobileno">
                      </div>
                      <div class="form-group">
                        <input type="password" required maxlength="10" minlength="8" id="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                     <!--  <div class="form-group">
                        <input type="password" required maxlength="10" minlength="8" id="confirmpass" name="confirmpass" class="form-control" id="exampleInputConformPassword1" placeholder="Confirm password">
                      </div> -->
                      <button type="submit" name="register" id="register_btn" class="btn btn-primary" style="font-size: 18px;font-weight: bold;color: white;width: 100%;border:none;background-color:#673ab7">Register</button>
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
    <script type="text/javascript">

    
    function onSignInSubmit(e) {
      e.preventDefault();
      var formData = new FormData($("#register_form")[0]);
     
       $.ajax({
              type:"POST",
              url:"register_user.php",
              data:formData,
              processData: false,
              cache: false,
              contentType: false,
              success: function(data){
               
                if(data != "not_registered")
                {
                 
                    
                 
                }
                else if(data == "already_registered")
                {
                  swal("Mobile Number is already registered with us !","Please Login ","error").then((value) => {
                 // window.location.href='login.php';});
                }
              //
              }
          });

      
      return false;
    }

  
  </script>

</body>



</html>