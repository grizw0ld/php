 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML  1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
   <meta http-equiv="content-type"  
   content="text/html; charset=utf-8" />
   <title>Pursue HTML Variables</title>
 </head>
 <body>
	<?php
	/*
	 *Filename: pursuehtmlvariables.php
	 *Book reference: <Chapter 2 Pursue, PHP for the web>
	 *Created by: Mark G
	 * Jan 24th 2013
	 */
	 $quotes_url = "http://localhost/php/02/quotes.php";
	 $pursue_url = "http://localhost/php/02/pursuevariables.php";
	 
	 print "<h3>Chapter 2 Work Links</h3>";
	 print "<p>";
	 echo "<a href=$quotes_url>Quotes Site</a>";
	 print "</p>";
	 
	 print "<p>";
	 echo "<a href=$pursue_url>Pursue Variables Site</a>";
	 print "</p>";
	?>
 </body>
 </html>