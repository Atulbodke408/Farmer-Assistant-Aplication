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
                 $add="insert into company_contract(company_name,product_name,farmer_name,terms_condition,comment) values ('$company_name','$product_name','$farmer_name','$terms_condition','$comment')";
//echo $add;
  
  $result=mysqli_query($con,$add) or die(mysqli_error($con));
  if($result)
  {
    echo "<script>";
    echo "alert('Sign Successfully..!');";
 echo "window.location.href='index.php';";
    echo "</script>";
  }
  else
  {
    echo "<script>";
    echo "alert('Error');";
   // echo "window.location.href='manage_product.php';";
    echo "</script>";
  }

}


?>