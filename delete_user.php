<?php
extract($_POST);
require 'admin/db.php';

	$delete = "DELETE FROM `users` WHERE id = '$id'";

		$fire_query= mysqli_query($con,$delete);
	     if($fire_query)
		{
			echo "success";
			
		}
		else
		{
			echo "error";
		}

?>