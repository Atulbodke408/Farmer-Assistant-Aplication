<?php 
include "db.php";
//define('PATH','https://farmassist.mycloudspace.in/admin2/');
if(isset($_POST['submit'])){
	extract($_POST);

	 $path = "images/";
//	echo $path;
           
              $path = $path . basename( $_FILES['img']['name']);
            move_uploaded_file($_FILES['img']['tmp_name'], $path);
             
                
               // $path1 = PATH.$path; 
                 $path1 = $path;
                 $add="insert into product(img,prod_name,category,prod_price,company,product_desc) values ('$path1','$prod_name','$category','$prod_price','$company','$product_desc')";
//echo $add;
  
  $result=mysqli_query($con,$add) or die(mysqli_error($con));
  if($result)
  {
    echo "<script>";
    echo "alert('Inserted Successfully..!');";
 echo "window.location.href='products.php';";
    echo "</script>";
  }
  else
  {
    echo "<script>";
    echo "alert('Error in insert');";
   // echo "window.location.href='manage_product.php';";
    echo "</script>";
  }

}


?>