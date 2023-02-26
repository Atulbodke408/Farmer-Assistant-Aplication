<?php
	@session_start();
	$disc_price = "";
	if(isset($_POST))
	{
		require 'admin/db.php';
		$promo_code = $_POST['promo_code'];
		
		$select = "select * from promo_codes where promo_code like '$promo_code' and status = 1";
		
		$query = mysqli_query($con, $select);

		$cart_amt = $_POST['cart_amt'];
		//echo $cart_amt;
		$data = mysqli_num_rows($query);
		if($data == 1)
		{
			if ($result = $con->query($select)) 
	         {
	         	while ($row = $result->fetch_assoc())
	         	{
	         		$today = date("Y-m-d");
	         		//echo $today."<br>";
	         		$sd =  date("Y-m-d", strtotime($row["start_date"]));
	         		$ed =  date("Y-m-d", strtotime($row["end_date"]));
	         		//echo $row["disc_end_date"]."<br>";
	         	
	         		if($sd <= $today && $ed >= $today )
	         		{

	         			$disc_percent = $row["discount"];
		         		$percent = $disc_percent /100 ;

		         		$disc_price = $cart_amt * $percent;
		         		if($disc_price > $row["max_discount_amount"])
		         		{
		         			$disc_price = $row["max_discount_amount"];
		         		}
		         		$final_amt = $cart_amt - $disc_price;
		         		echo '<input id="disc_price" value='.number_format($disc_price, 2).'></input>';
		         		echo '<input id="final_amt" value='.number_format($final_amt, 2).'></input>';
	         		}
	         		else
	         		{
						echo 'Promo code Expired';
						$_SESSION['promo_code'] = '';
	         		}
	         		
	         	}
			}
		}
		else
		{
			echo 'Not valid promo code';
			$_SESSION['promo_code'] = '';
		}
		
	}
?>