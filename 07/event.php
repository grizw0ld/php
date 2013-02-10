 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML  1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
   <meta http-equiv="Content-Tyoe"  
   content="text/html; charset=utf-8" />
   <title>I have this sorted out</title>
 </head>
 
 <body>
<?php //script 7.9 event.php
/*
 * this script receives an array in $_POST['days[]'] 
*/

$event_name = $_POST['name'];
print "You want to add an event called <b>$event_name</b>
 which takes place on: <br />";

if (isset($_POST['days']) AND is_array($_POST['days'])) {
    foreach($_POST['days'] as $day) {
        print "$day<br />\n";
    }
} else {
    print "Please select at least one day for this event";
}

?>
 </body>
 </html>
