<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/ DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Connect to MySQL</title>
</head>
<body>
	<?php //script 12.1 mysql_connect.php
		if($dbc = @mysql_connect('localhost', 'mark', 'password1')){
			print '<p>Successfully connected to MySQL</p>';
			mysql_close($dbc);
		} else {
			print '<p style="color: red;">Could not connect to MySQL:<br />' . mysql_error() . '.</p>';
		}
	
	?>
</body>
</html>