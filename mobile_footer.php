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
              <?php
               if(!empty($_SESSION['user_id']))
                {
                  echo'<div class="login_icon">
                        <a href="user_account.php"><i class="fa fa-user"></i>Account</a>
                      </div>';
                }
                else{
                      echo'<div class="login_icon">
                        <a href="login.php"><i class="fa fa-user"></i>Login</a>
                      </div>';
                   }
              ?>
              
              <div class="telephone_icon">
                <a href="contact_us.php"><i class="fa fa-phone"></i>Contact</a>
              </div>
            </div>
          </div>
        </div>
      </div>