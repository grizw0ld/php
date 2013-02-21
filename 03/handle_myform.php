 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML  1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
   <meta http-equiv="Content-Tyoe"  
   content="text/html; charset=utf-8" />
   <title>Your Feedback</title>
 </head>
 <body>
	<?php
	/*
	 *Script Pursue handle_myform.php
	 *Receives data from myform.html
	 *Receives multiselect, dropbox, textarea, radiobuttons, textbox
	 *Submit in $_POST
	 */
	 ini_set ('display_errors', 1);
	 error_reporting (E_ALL | E_STRICT);
	 
	 //variables to catch posted items
	 $multiselect = $_POST['multiselect'];
	 $dropbox = $_POST['dropbox'];
	 $textarea = $_POST['textarea'];
	 $radio = $_POST['radio'];
	 $textbox = $_POST['textbox'];
	 
	 print_r ($multiselect);
	 print   "$dropbox <br />";
	 print   "$textarea <br />";
	 print   "$radio <br />";
	 print   "$textbox <br />";

	 
	?>
 </body>
 </html>