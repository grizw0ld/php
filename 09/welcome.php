<?php //script 9.7 welcome.php

//begin the session which is necessary to access the $_SESSION array
session_start();

//set the title contant to be used in the header template
define('TITLTE', 'Welcome to the J.D. Salinger Fan Club!');

//include the page header
include('templates/header.htm');

print "<p>Welcome to the J.D. Salinger Fan Club!</h2>";

//user $_SESSION to access the users email address and print a custom message
print "<p<Hello " . $_SESSION['email'] . "</p>";

//set server timezone
date_default_timezone_set('America/New_York');

//print a timestamp of when the user had logged in using $_SESSION
print "<p>You have been logged in since " . date('g: i a', $_SESSION['loggedin']) . "</p>";

print '<p><a href="logout.php">Click here to logout!</a></p>';

//include the footer template
include('templates/footer.htm');

?>