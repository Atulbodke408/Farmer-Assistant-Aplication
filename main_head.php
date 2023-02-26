<?php
include "db.php";
?>

 <nav id="top">
      <div class="container">
        <div class="row"> <span class="responsive-bar"><i class="fa fa-bars"></i></span>
          <div class="header-middle-outer closetoggle">
            <div id="responsive-menu" class="nav-container1 nav-responsive navbar">
              <div class="navbar-collapse navbar-ex1-collapse collapse">
                <ul class="nav navbar-nav">
                 <?php
                  $query = "select * from category";

                // $query = "SELECT *  FROM `product`";
                  if ($result = $con->query($query)) 
                    {
                      while ($data = $result->fetch_assoc()) 
                        {
                          echo'  <li class="collapsed" data-toggle="collapse" data-target="#PersonalCare'.$data["id"].'"><a href="products.php?cat_id='.$data["id"].'">'.$data["name"].'</a> <span><i class="fa fa-plus"></i></span>
                              <ul class="menu-dropdown collapse" id="PersonalCare'.$data["id"].'">';
                              $cat =$data["id"];
                              $query2 = "select * from products where category_id='$cat' limit 5";
                               if ($result2 = $con->query($query2)) 
                                {
                                  while ($data2 = $result2->fetch_assoc()) 
                                    {

                                       echo' <li class="main_cat"> <a href="prod.php?prod='.$data2['slug'].'">'.$data2["name"].'</a> </li>';
                                     }
                                   }

                                
                             echo' <li ><a href="products.php?cat_id='.$data["id"].'" style="color:red;">View All</li></a>
                             </ul>
                            </li>';
                        }
                    }
                  ?>
                 
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
 </nav>
  <header id="header" class="section">
      <div class="container">
        <div class="header-top py-1">
          <div class="row align-items-center">
            <div class="col-md-6">
              <ul class="header-top-left pull-left">              
               
               
              </ul> 
            </div>
           
          </div>
        </div>
      </div>
      <div class="header section pt-15 pb-15">
        <div class="container">
          <div class="row">
            <div class="navbar-header col-2 header-bottom-left"> <a class="navbar-brand" href="index.php">
             <img alt="Bigmarket" src="images/images.png" style="margin:-20px;width:58%;"> </a> </div>
            <div class="col-10 header-bottom-right">
              <div class="header-menu">
                <div class="responsive-menubar-block">
                  <span>Shop By<br> Category</span>
                  <span class="menu-bar collapsed" data-target=".navbar-ex1-collapse" data-toggle="collapse"><i class="fa fa-bars"></i></span>
                </div>
                 <nav id="menu" class="navbar">
                 <!--  <div class="collapse navbar-collapse navbar-ex1-collapse" style="background-color: #84c225;">
                    <ul class="nav navbar-nav main-navigation">
                      <?php
                        $query3 = "select * from category";

                      // $query = "SELECT *  FROM `products`";
                        if ($result3 = $con->query($query3)) 
                          {
                            while ($data3 = $result3->fetch_assoc()) 
                              {
                                  echo'<li class="main_cat dropdown"> <a href="products.php?cat_id='.$data3["id"].'" style="color:#ffffff">'.$data3["name"].'</a>
                                    <div class="dropdown-menu megamenu column1">
                                      <div class="dropdown-inner">
                                        <ul class="list-unstyled childs_1">';
                                        $id=$data3["id"];
                                       $query4 = "select * from products where  category_id = '$id' limit 5";
                                      // echo $query4;
                                          // $query = "SELECT *  FROM `products`";
                                            if ($result4 = $con->query($query4)) 
                                              {
                                                while ($data4 = $result4->fetch_assoc()) 
                                                  {
                                                     echo' <li class="main_cat active"> <a href="prod.php?prod='.$data4['slug'].'">'.$data4["name"].'</a> </li>';
                                                   }
                                              }

                                        echo'<li ><a href="products.php?cat_id='.$data3["id"].'" style="color:red;">View All</li></a>
                                         </ul>
                                      </div>
                                    </div>
                                  </li>';
                                }
                              }
                              ?>
                     
                     
                     
                     
                     
                    </ul>
                  </div> -->
                </nav>
              
              </div>
              <div class="header-link-search">
                <div class="header-search">
                  <div class="actions">
                      <button type="submit" title="Search" class="action search" id="head-search"></button>
                  </div>
                  <form action="search.php" method="get" >
                  <div id="search" class="input-group">
                    <input type="text" id="search-input" name="prod_name"  placeholder="Search Products..." class="form-control input-lg" autocomplete="off">
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-default btn-lg">Search</button>
                    </span>
                  </div>
                </form>
                </div>
                <div class="header-link">
                 <ul class="list-unstyled">
                  <li style="background:url('images/ico/1.png') no-repeat 4px; "><a href="products.php">Products</a></li>
                  <li style="background:url('images/ico/3.png') no-repeat 4px; "><a href="#">Offers</a></li>
                  
                  <li style="background:url('images/ico/map.png') no-repeat 4px; "><a href="company_contract.php">Company Contract</a></li>
                  <li style="background:url('images/ico/1.png')no-repeat 4px; "><a href="upload_farmer_product.php">Upload Product </a></li>
                </ul>
              </div>
              </div>
              <?php include 'cartdata.php';?>
            </div>
          </div>
        </div>
      </div>
     
    </header>
  