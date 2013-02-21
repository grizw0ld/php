 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML  1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
   <meta http-equiv="Content-Tyoe"  
   content="text/html; charset=utf-8" />
   <title>Guess Results</title>
 </head>
 <body>
 <?php 
 /*
  *Script 4.pursue pursue.php
  *Generates a random number
  *Takes results from pursue.html
  */
	$guess1 = $_POST['guess1'];
	$guess2 = $_POST['guess2'];
	$guess3 = $_POST['guess3'];
	
	$random_number = rand(1,20);
	
	print "<p>The random number is $random_number</p>";
	
	switch ($random_number) {
		case $guess1:
			print "You had it on the first guess";
			break;
		case $guess2:
			print "You had it on the second guess";
			break;
		case $guess3:
			print "You had it on the last guess";
			break;
		default:
			print "None of your guesses were correct";
	}
	
 ?>
 </body>
 </html>