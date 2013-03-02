<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Sticky Text Inputs</title>
</head
<body>
	<?php //script 10.2 sticky1.php ****pursue enhancement to make_test_input() function
		function make_text_input($name, $label, $method='post', $input='text', $size=20){	
			print '<p><label>' . $label . ':';
			
			switch ($input) {
				case 'text':
					print '<input type="text" name="' . $name . '" size="' . $size . '"';
					break;
				case 'password':
					print '<input type="password" name="' . $name . '" size="' . $size . '"';
					break;
				default:
					print "something went wrong";
					break;
			}
			
			switch ($method) {
				case 'post':
					if(isset($_POST[$name])){
						print ' value="' . htmlspecialchars($_POST[$name]) . '"';
					}
				case 'get':
					if(isset($_GET[$name])){
						print ' value="' . htmlspecialchars($_GET[$name]) . '"';
						break;
					}
				default:
					print "something went wrong";
					break;
			}
			
			
			print ' /></label></p>';
		} //end of make_text_input()  function
		
		print '<form action="" method="get">';
		make_text_input('first_name', 'First_Name', 'get', 'text');
		make_text_input('last_name', 'Last_Name','get', 'text', 30);
		make_text_input('email', 'Email Address','get', 'text', 50);
		make_text_input('password', 'Password','get', 'password', 50);
		
		print '<input type="submit" name="submit value="Register" /></form>';
		
	?>
</body>
</html>