 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML  1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
   <meta http-equiv="Content-Tyoe"  
   content="text/html; charset=utf-8" />
   <title>Chapter 4 Pursue</title>
 </head>
 <body>
 
<?php //Chapter 5 persue thanks.php

$name = ucwords($_GET['name']);
$email = $_GET['email'];

print nl2br("<p>Thank you $name. 
    \nWe will be contacting you at $email</p>");

?>
 </body>
 </html>