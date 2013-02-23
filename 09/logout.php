<?php //script 9.8 logout.php
//start the session to access the session to be deleted
session_start();

//reset the session array
$_SESSION = array();

//destroy the session data in the server
session_destroy();

define('TITLE', 'logout');
include('templates/header.htm');

?>

<h2>Welcome to the J.D. Salinger Fan Club!</h2>
<p>You are now logged out</p>
<p>Thank you for using this site, we hoped that you liked it<br />
some more text can go here</p>

<?php
include('templates/footer.htm');
?>