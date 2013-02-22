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
 <?php //script pursue soups2.php
    /*
     *Script creates and prints an array
    */
    
    //error management
    ini_set('display_errors', 1);
    error_reporting( E_ALL | E_STRICT );
    
    //create soups array
    $soups = array(
    'Monday' => 'Clam Chowder',
    'Tuesday' => 'White Chicken Chili',
    'Wednesday' => 'Vegetarian'
    );
    var_dump($soups);
    //get the number of elements in the array, then print it
    //$count1 = count($soups);
    print "<p>The original value of soups is " .
    count($soups) . "</p>";
    
    $soups['Thursday'] = 'Chicken Noodle';
    $soups['Friday'] = 'Tomato';
    $soups['Saturday'] = 'Cream of Broccoli';
    
    //using print_r()
    print_r($soups);
    //get the new number of elements in the array then print it
    //$count2 = count($soups);
    print "<p>The new value of soups is " .
    count($soups) . "</p>";
    
    
 ?>
 </body>
 </html>
