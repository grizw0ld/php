<?php //script 8.5 books.php

/**
 * @author M Grzechowiak
 * @copyright 2013
 */
 
// error management
ini_set('display_errors', 1);
error_reporting( E_ALL | E_STRICT );

//set page title and include header file
define('TITLE', 'Books by J.D. Salinger');
include('templates/header.htm');

?>

<h2>J.D. Salingers Books</h2>
<ul>
    <li>The Catcher in the Rye</li>
    <li>Nine Stories</li>
    <li>Franny and Zoey</li>
    <li>Raise High the Roof Beam, Carpenters and Seymour: An Introduction</li>
</ul>

<?php include('templates/footer.htm'); ?>