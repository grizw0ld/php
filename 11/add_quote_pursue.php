<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/ DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type"content="text/html; charset=utf-8" />
<title>Add A Quotation</title>
</head>
<body>
<?php //script 11.1 add_quote.php
	$file = '../quotes_pursue.txt';
	
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    	if(file_exists($file)){
	    	if( (!empty($_POST['quote']) && ($_POST['quote'] != 'Enter your quotation here.')) &&
			    (!empty($_POST['attribution']) && ($_POST['attribution'] != 'Enter a attribution.'))){
	    		if(is_writable($file)){
	    			file_put_contents($file, $_POST['quote'] . " ~ " . $_POST['attribution'] . 
	    				PHP_EOL, FILE_APPEND | LOCK_EX);
					
					print '<p>Your quotation has been stored</p>';
					
					/*
					 * $fp = fopen($file, 'ab');
					 * flock($fb, LOCK_EX);
					 * fwrite($fp, $_POST['quote] . PHP_EOL);
					 * FLOCK($fb, LOCK_UN);
					 * fclode($fp);
					 */
	    		} else { //could not open file
	    			print '<p style="color: red;">Your quotation could not be stored, system error</p>';
	    		}
	    	} else { //no quotation entered
	    		print '<p style="color: red;">Please enter a quotation</p>';
			}
		} else { //file does not exist
			print '<p style="color: red;">file does not exist</p>';
		}
    } //end if
?>
<form action="add_quote_pursue.php" method="post">
	<textarea name="quote" row="5" cols="30"><?php 
	if(isset($_POST['quote'])){
		print $_POST['quote'];
	} else {
		print 'Enter your quotation here.';
	} ?></textarea><br />
	<textarea  name="attribution" row="1" cols="30"><?php
	if(isset($_POST['attribution'])){
		print $_POST['attribution'];
	} else {
		print 'Enter a attribution.';
	}
	?></textarea>
	<input type="submit" name="submit" value="Add this quote!" 
	<input type="hidden" name="submitted" value="true" />
</form>

</body>
</html>