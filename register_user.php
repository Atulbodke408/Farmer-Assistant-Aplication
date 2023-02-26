<?php

	 require 'db.php';

	function getUpperPost($keepVar = false){
	    $return_array = array();
	       foreach($_POST as $postKey => $postVar){
	        $return_array[$postKey] = strtoupper($postVar);
	    }
	    if($keepVar){
	        $_POST = $return_array;
	    }else{
	        return $return_array;
	    }
	}
	 getUpperPost($_POST);
	 extract($_POST);
	 $mobileno = (string)$mobileno;
	 if(!empty($password))
	 {
	 	$password = md5((string)$password);	
	 	$insert = "insert into users (mobile,password,status,name) values ('$mobileno','$password',1,'$userfullname')";
	 	
	  	$fire = mysqli_query($con,$insert);
	  	
	 }
	 elseif(!empty($password_login))
	 {
	     $select = "select * from cust_master where mobile = '$mobileno' and password = '$password_login'";
	  //echo $select;
	  $res = mysqli_query($con , $select);
	  $num_rows = mysqli_num_rows($res);
	  if($num_rows > 0)
	  {
	    echo "already_exist";
	  }
	  else
	  {
	    echo "fails";
	  }
	 }
	 
	
	  
?>