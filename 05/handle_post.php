 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML  1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
   <meta http-equiv="Content-Tyoe"  
   content="text/html; charset=utf-8" />
   <title>Chapter 4 Pursue</title>
 </head>
 <body>
 
<?php //script 5.7 handle_post.php

//error handeling
ini_set('display_errors', 1);
error_reporting(E_ALL | E_STRICT);

$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$email = trim($_POST['email']);
$posting = trim($_POST['posting']);

//$html_post = nl2br(htmlentities($_POST['posting']));
//$strip_post = nl2br(strip_tags($_POST['posting']));

$name = $first_name . ' ' . $last_name;
$words = str_word_count($posting);

//$posting = substr($posting, 0, 50);

$posting = str_ireplace('badword', 'XXXX', $posting);
$posting = str_ireplace('badword1', 'XXXX', $posting);
$posting = str_ireplace('badword2', 'XXXX', $posting);
$posting = str_ireplace('badword3', 'XXXX', $posting);

print "<div>Thank you, $name, for your posting: 
<p>$posting</p>
<p>Words: $words</p></div>";

//$name = urlencode($name);
//$email = urlencode($email);

print 'Click <a href="thanks.php?
 name=' . $name . '&email=' . $email . '">here</a> to continue.';


?>
 </body>
 </html>   
