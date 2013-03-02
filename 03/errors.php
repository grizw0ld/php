 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML  1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
   <meta http-equiv="Content-Tyoe"  
   content="text/html; charset=utf-8" />
   <title>Errors</title>
 </head>
 <body>
	<?php
	/*
	 *Script Pursue errors.php
	*/
	ini_set ('display_errors', 1);
	error_reporting (E_ALL | E_STRICT);
	
	//$no_semicolon = 12 //( ! ) Parse error: syntax error, unexpected T_VARIABLE
	//$for_inbalanced_quotes = "'Mark'";
	//$WrongCase = 31;
	
	//print "$for_inbalanced_quotes's quote is "inbalanced"";Parse error: syntax error, unexpected T_STRING
	//print "I am $wrong_case years old"; //Notice: Undefined variable: wrong_case
	//print Printing without quotes? // Parse error: syntax error, unexpected T_STRING 
	
	?>
 </body>
 </html>