<?php //script 8.4 index.php
/*
 * This is the homepage for the sute
 * It uses a templates to create the layout
*/

// error management
ini_set('display_errors', 1);
error_reporting( E_ALL | E_STRICT );

//create title
define('TITLE', 'Fan Club Home Page');

include ('templates/header.htm');
?>
<h2>Welcome to a J.D. Silinger Fan Club</h2>
<p>Lorem ipsum dolor sit amet,consectetur adipisicing elit, sed do
eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<?php include('templates/footer.htm') ?>
