 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML  1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
   <meta http-equiv="Content-Tyoe"  
   content="text/html; charset=utf-8" />
   <title>Chapter 7 No Soup for you!</title>
 </head>
 <body>
 <h1>My Little Gradebook</h1>
 <?php //script 7.5 sort.php
 
 //create original array
 $grades = array (
    'Richard' => 70,
    'Janelle' => 92,
    'Lisa' => 95,
    'James' => 100,
    'Sandy' => 75,
    'Ronald' => 89);
 
 //print out the array in the original value
 print "<p>Originally the array looks like this:<br />";
 foreach ($grades as $student => $grade) {
    print "$student: $grade<br />\n";
 }
 print '</p>';
 
 //sort the array in revers numaric order
 arsort($grades);
 
 //print out the array after arsort())
 print "<p>After sorting the array on value using arsort():<br />";
 foreach ($grades as $student => $grade) {
    print "$student: $grade<br />\n";
 }
 print '</p>';
 
 //sor the array by the key values (student names)
 ksort($grades);
 
 print "<p>After sorting the array on key using ksort():<br />";
 foreach ($grades as $student => $grade) {
    print "$student: $grade<br />\n";
 }
 print '</p>';
 
 
 

 ?>
 </body>
 </html>
