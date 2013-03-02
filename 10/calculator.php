<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Cost Calculator</title>
</head
<body>
	<?php //script 10.5 calculator.php revision 2
		//deine tax rate
		$tax = 8.74;
	
		function calculate_total($quantity, $price){
			
			global $tax;
			
			$total = $quantity * $price;
			$taxrate = ($tax / 100) + 1;
			$total *= $taxrate;
			$total = number_format($total, 2);
			return $total;
		}
		
		if($_SERVER['REQUEST_METHOD']=='POST'){
			if(is_numeric($_POST['quantity'])
				AND (is_numeric($_POST['price']))){
					$total = calculate_total($_POST['quantity'], $_POST['price']);
					print "<p>Your total comes to $<span style=\"font-weight:bold;\">
						$total</span>, including $tax percent tax rate</p>";
				}else{
					print "<p style=\"color:red;\">Please enter a 
						valid quantity and price</p>";
				}			
		}
	?>
	
	<form action="" method="post">
		<p>Quantity: <input type="text" name="quantity" size="3"  /></p>
		<p>Price: <input type="text" name="price" size="5" /></p>
		<input type="submit" name="submit" value="Calculate!" />
	</form>
	

</body>
</html>