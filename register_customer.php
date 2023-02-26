<?php

 extract($_POST);

	require 'db.php';
		$insert_query= "INSERT INTO customer(user_name,email,phone_no,address,password) VALUES ('$user_name','$email','$phone_no','$address','$password')";

		//echo $insert_query."<br>";	
		$fire_query= mysqli_query($con,$insert_query);
		//print_r($update_query_teacher);
		if($fire_query)
		{
			
			echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated');
    window.location.href='login.php';
    </script>");
		
		}
		else
		{
			echo "<script>alert(' Not Registerd');</script>
			window.location.href='login.php';
			";
		}
	
?>
