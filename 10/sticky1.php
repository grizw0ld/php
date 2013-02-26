<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Sticky Text Inputs</title>
</head
<body>
	<?php //script 10.2 sticky1.php
	
		function make_text_input($name, $label, $size=20){
			print '<p><label>' . $label . ':';
			print '<input type="text" name="' . $name . '" size="' . $size . '"';
			
			if(isset($_POST[$name])){
				print ' value="' . htmlspecialchars($_POST[$name]) . '"';
			}
			
			print ' /></label></p>';
		} //end of make_text_input()  function
		
		print '<form action="" method="post">';
		make_text_input('first_name', 'First_Name');
		make_text_input('last_name', 'Last_Name', 30);
		make_text_input('email', 'Email Address', 50);
		
		print '<input type="submit" name="submit value="Register" /></form>';
		
	?>
</body>
</html>