<div class="shopcart">
  <?php 
  //$total =  0 ;
  //print_r($_SESSION);
   if(!empty($_SESSION['prod_id']))
   {
      $item_count = count($_SESSION['prod_id']);
     // echo $item_count;
   }
   else
   {
    //$item_count = 0;
   // $total =  0 ;

   }
    
  ?>
  <div id="cart" class="btn-block mt-40 mb-30 ">
    <a href="cart2.php"> <button type="button" class="btn" data-target="#cart-dropdown" data-toggle="collapse" aria-expanded="true"><span id="shippingcart">My basket</span><span id="cart-total">Item </span></button></a>
    <a href="cart2.php" class="cart_responsive btn"><span id="cart-text">My basket</span><span id="cart-total-res"></span> </a>
  </div>
 
</div>