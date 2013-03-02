 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML  1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
   <meta http-equiv="Content-Tyoe"  
   content="text/html; charset=utf-8" />
   <title>Your Feedback</title>
 </head>
 <body>
	<?php
	/*
	 *Script 3.3 handle_form.php
	 *Receives data from feedback.html
	 *Receives title, name, email, response, comments
	 *Submit in $_POST
	 */
	 ini_set ('display_errors', 1);
	 error_reporting (E_ALL | E_STRICT);
	 
	 $title = $_POST['title'];
	 $name = $_POST['name'];
	 $response = $_POST['response'];
	 $comments = $_POST['comments'];
	 $email = $_POST['email'];
	 
	 print "<p>Thank you, $title, $name, for your comments.</p>
	 <p>You stated that you found this example to be '$response' and
	 added:<br />$comments</p>";
	 
	 print "<p>Your email address is listed as: $email</p>";
	 
	?>
 </body>
 </html>