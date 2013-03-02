 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML  1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
   <meta http-equiv="Content-Tyoe"  
   content="text/html; charset=utf-8" />
   <title>Chapter 7 No Soup for you!</title>
 </head>
 <body>
 <h1>MMmmmm Soups</h1>
 <?php //script 7.3 soups3.php
 
    $soups = array (
    'Monday' => 'Clam Chowder',
    'Tuesday' => 'White Chicken Chili',
    'Wednesday' => 'Vegetarian',
    'Thursday' => 'Chucken Noodle',
    'Firday' => 'Cream of Broccoli'
    );
    
    foreach ($soups as $day => $soup){
        print "<p>$day: $soup</p>\n";
    }
    
 ?>
 </body>
 </html>
