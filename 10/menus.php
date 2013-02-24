<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Date Menus</title>
</head
<body>
	<?php //Script 10.1 menus.php
		function make_date_menus(){
			
			//create month array and print values to html select list
			$months = array(
			1 => 'January', 'February', 'March', 'April', 'May', 'June',
			'July', 'August', 'September', 'October', 'November', 'December'
			);
			print '<select name="month">';
			foreach($months as $key => $value){
				print "\n<option value=\"$key\">$value</option>";
			}
			print '</select>';
			
			//populate a day select list from 1 - 31
			print '<select name="day">';
			for($day = 1;$day <= 31;$day++){
				print "\n<option value=\"$day\">$day</option>";
			}
			print '</select>';
			
			//populate the year select list
			print '<select name="year">';
			$start_year = date('Y');
			for($y = $start_year; $y < ($start_year+10); $y++){
				print "<option value=\"$y\">$y</option>";
			}
			print '</select>';
		} // end of the make_date_menus() function
		
		//print out the form		
		print '<form action="" method="post">';
		make_date_menus();
		print '</form>';		
	?>

</body>

</html>