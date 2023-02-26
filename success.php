<?php 
include "db.php";
//define('PATH','https://farmassist.mycloudspace.in/admin2/');

	extract($_GET);
$id =$_GET["id"];
 $add="select * from users_items where user_id='$id'";
//echo $add;
 $result=mysqli_query($con,$add) or die(mysqli_error($con));
  if($result)
  {
    echo "<script>";
    echo "alert('Order Sent Successfully..!');";
 echo "window.location.href='products.php';";
    echo "</script>";
  }
  else
  {
    echo "<script>";
    echo "alert('Order Not Sent');";
   // echo "window.location.href='products.php';";
    echo "</script>";
  }


  
 


?>