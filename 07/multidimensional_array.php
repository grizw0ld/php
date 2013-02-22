 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML  1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
   <meta http-equiv="Content-Tyoe"  
   content="text/html; charset=utf-8" />
   <title>Chapter 7 No Soup for you!</title>
 </head>
 <body>
 <h2>BaseBall Scoreboard</h2>
 <?php //script pursue multidimensional_array.php 
 
 $baseball_score = array (
 'first' => array(0 , 1),
 'second' => array(0, 2),
 'third' => array(1, 0),
 'fourth' => array(1, 0),
 'fifth' => array(0, 0),
 'sixth' => array(0, 0),
 'seventh' => array(0, 0),
 'eigth' => array(1, 0),
 'ninth' => array(2, 1)
 );
 
 foreach ($baseball_score as $inning => $scores){
    print "<p>$inning inning ";
        foreach($scores as $score) {
            print " $score ";
        }
        print "</p>";
 }
    
 ?>
 </body>
 </html>
