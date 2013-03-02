 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML  1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
   <meta http-equiv="Content-Tyoe"  
   content="text/html; charset=utf-8" />
   <title>Chapter 4 Pursue</title>
 </head>
 <body>
<?php //Chapter 4 Persue calc.php

ini_set('display_errors', 1);
error_reporting(E_ALL | E_STRICT);

$add1 = $_POST['add1'];
$add2 = $_POST['add2'];

$minus1 = $_POST['minus1'];
$minus2 = $_POST['minus2'];

$multiply1 = $_POST['multiply1'];
$multiply2 = $_POST['multiply2'];

$divide1 = $_POST['divide1'];
$divide2 = $_POST['divide2'];

$sum = $add1 + $add2;
$difference = $minus1 - $minus2;
$product = $multiply1 * $multiply2;
$quotient = $divide1 / $divide2;

print "<p>The sum is: $sum</p>";
print "<p>The difference is: $difference</p>";
print "<p>The product is: $product";
print "<p>The quotient is: $quotient</p>";




    
?>
 </body>
 </html>