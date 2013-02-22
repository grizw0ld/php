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
	 *Script 3.7 hello.php
	 *Receives data from hello.html
	 *Receives name
	 *Submit in $_GET
	 */
	ini_set ('display_errors', 1);
	error_reporting (E_ALL | E_STRICT);
	
	$name = $_GET['name'];
	$last = $_GET['last'];
	print "<p>Hello, <span style=\"font-weight: bold;\">$name $last</span>!</p>";
	
	?>
 </body>
 </html>