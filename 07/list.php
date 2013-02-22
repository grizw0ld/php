 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML  1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
   <meta http-equiv="Content-Tyoe"  
   content="text/html; charset=utf-8" />
   <title>I have this sorted out</title>
 </head>
 
 <body>
<?php //script 7.7 list.php
/*
 * this script receives a string in $_POST['words'] 
 * converts it into an array and then sorts it
*/

// recieve the words submitted, put them into an array and sort them

$words_array = explode(' ', $_POST['words']);
sort($words_array);

//for pursure
print "<p>AS an array</p>";
foreach($words_array as $key => $value) {
    $key += 1;
    print "<p>$key. $value</p>";
}

$string_words = implode('<br />', $words_array);
print "$string_words";



?>
 </body>
 </html>
