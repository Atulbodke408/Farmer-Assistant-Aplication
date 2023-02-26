<?php
  @session_start();
  //print_r($_SESSION);
  $userid =$_SESSION["user_id"];
  echo $userid;
  require 'admin/db.php';
 
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
  <title>Login - Sukhlal DagduTeli Chandwadkar - SDCAyush.com</title>

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
        <?php include "mobile_footer.php";?>
    </header>
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
    
    <div class="container" >
       <h3 style="text-align: center;">Forgot Password</h3>
         <div class="login" style="display: flex;align-content: stretch;justify-content: center;">
               
                <?php 
               $get_notifications = "SELECT * FROM `users` where id ='$userid'";
               if($result = $con->query($get_notifications))
                    {
                        while($data = $result->fetch_assoc())
                        {
                          extract($data);
                        }
                      }
                      ?>

                <form class="my-4" id="register_form" method="post" action="">
                      
                      <div class="form-group">
                        <input type="number" required name="mobileno"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"type = "number" maxlength = "10" class="form-control" placeholder="Enter Mobile Number" id="mobileno">
                      </div>
                   <!--    <div class="form-group">
                        <input type="password" required maxlength="10" minlength="8" id="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="New Password">
                      </div> -->
                   <!--    <div class="form-group">
                        <input type="password" required maxlength="10" minlength="8" id="confirmpass" name="confirmpass" class="form-control" id="exampleInputConformPassword1" placeholder="Confirm password">
                      </div> -->
                      <button type="submit" id="register_btn" class="btn btn-primary" style="font-size: 18px;font-weight: bold;color: white;width: 100%;border:none;background-color:#673ab7">Submit</button>
                      <div id="recaptcha-container"></div>
                    </form>
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

    /**
     * Set up UI event listeners and registering Firebase auth listeners.
     */
    window.onload = function() {
      // Event bindings.
      document.getElementById('register_form').addEventListener('submit', onSignInSubmit);
     

      window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
    };

    /**
     * Function called when clicking the Login/Logout button.
     */
    function onSignInSubmit(e) {
      e.preventDefault();
      var formData = new FormData($("#register_form")[0]);
       var mobileno = $("#mobileno").val();
               var password = $("#password").val();
       $.ajax({
              type:"POST",
              url:"get/check_password.php",
              data:formData,
              processData: false,
              cache: false,
              contentType: false,
              success: function(data){
               
                if(data == "found")
                {
                 
                    if (isPhoneNumberValid()) {
                      console.log("tes");
                      window.signingIn = true;
                      updateSignInButtonUI();
                      var phoneNumber = getPhoneNumberFromUserInput();
                      var appVerifier = window.recaptchaVerifier;
                      firebase.auth().signInWithPhoneNumber(phoneNumber, appVerifier)
                          .then(function(confirmationResult) {
                            window.signingIn = false;
                            updateSignInButtonUI();
                            resetRecaptcha();
                            // SMS sent. Prompt user to type the code from the message, then sign the
                            // user in with confirmationResult.confirm(code).
                            //$("#myModal").show()
                            swal("Enter OTP:", {
                                content: "input",
                                closeOnClickOutside: false,
                                inputValidator: (value) => {
                                      return !value && 'Please Enter 6 Digit OTP'
                                    }
                              })
                              .then((value) => {
                                var code =  value;
                                  if (code) {
                                      confirmationResult.confirm(code).then(function () {
                                        swal("Now You Can Change Your Password","","success").then((value) => {
                                             window.location.href='password_reset.php?userid=<?php echo $id ?>';
                                          });
                                      }).catch(function (error) {
                                        // User couldn't sign in (bad verification code?)
                                        console.error('Error while checking the verification code', error);
                                        window.alert('Error while checking the verification code:\n\n'
                                            + error.code + '\n\n' + error.message)
                                      });
                                    }
                                    
                              });
                            
                          }).catch(function(error) {
                            // Error; SMS not sent
                            window.signingIn = false;
                            console.error('Error during signInWithPhoneNumber', error);
                            window.alert('Error during signInWithPhoneNumber:\n\n'
                                + error.code + '\n\n' + error.message);
                            updateSignInButtonUI();
                            resetRecaptcha();
                          });
                    }
                  
                 
                }
                else if(data == "not_found")
                {
                  swal("Mobile Number is not registered with us !","Please Register ","error");
                  // .then((value) => 
                  // {
                  // window.location.href='login.php';});
                }
              //
              }
          });

      
      return false;
    }

    /**
     * Reads the phone number from the user input.
     */
    function getPhoneNumberFromUserInput() {
      return "+91"+$("#mobileno").val();
    }

    /**
     * Returns true if the phone number is valid.
     */
    function isPhoneNumberValid() {
      var pattern = /^\+[0-9\s\-\(\)]+$/;
      var phoneNumber = getPhoneNumberFromUserInput();
      return phoneNumber.search(pattern) !== -1;
    }

    /**
     * This resets the recaptcha widget.
     */
    function resetRecaptcha() {
      return window.recaptchaVerifier.render().then(function(widgetId) {
        grecaptcha.reset(widgetId);
      });
    }

    /**
     * Updates the Sign-in button state depending on ReCaptcha and form values state.
     */
    function updateSignInButtonUI() {
      document.getElementById('register_btn').disabled = !isPhoneNumberValid() || !!window.signingIn;
    }
  </script>

</body>



</html>