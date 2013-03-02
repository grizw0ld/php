 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML  1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
   <meta http-equiv="Content-Tyoe"  
   content="text/html; charset=utf-8" />
   <title>Greetings!</title>
 </head>
 <body>
	<?php
	/*
	 *Script Pursue hello2.php
	 *Receives data from hello2.html
	 *Receives first, last, age
	 *Submit in $_GET
	 */
	ini_set ('display_errors', 1);
	error_reporting (E_ALL | E_STRICT);
	
	$first = $_GET['first'];
	$last = $_GET['last'];
	$age = $_GET['age'];
	print "<p>Hello, <span style=\"font-weight: bold;\">$first $last</span>! 
	Congrats on being $age years old...</p>";
	
	?>
 </body>
 </html>