 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML  1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
   <meta http-equiv="Content-Tyoe"  
   content="text/html; charset=utf-8" />
   <title>Chapter 6 Registration</title>
   <style type="text/css" media="screen">
    .error { color: red; }
   </style>
 </head>
 <body>
 <h1>Registration Results</h1>
 <?php //script 6.3 handle_registration.php
 /*
  * This script receives seven values from register.html
  *email, password, confirm, year, terms, color, submit
 */
 
 //error reporting
 ini_set('display_errors', 1);
 error_reporting( E_ALL | E_STRICT);
 
 //flagvariable to track success
 $okay = TRUE;
 
 //validate the email address
 if (empty($_POST['email'])) {
    print '<p class="error">Please enter your email address.</p>';
    $okay = FALSE;
 }
 
 //validate passsword
 if (empty($_POST['password'])) {
    print '<p class="error">Please enter a password</p>';
    $okay = FALSE;
 }
 
 if ($okay){
    print "<p>You have successfully registered (but not really)</p>";
 }
  
 
 ?>
 </body>
 </html>