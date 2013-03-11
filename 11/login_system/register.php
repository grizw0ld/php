<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/ DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Register Pursue</title>
</head>
<body>
	<?php 
		if(isset($_COOKIE['message']) && $_COOKIE['message'] == 'success'){
			print '<p style="color: green;"> Registration Complete </p>';
			print '<p>click <a href="login.php">here</a> to login</p>';
			$_COOKIE['message'] = array();
		}else if((isset($_COOKIE['message']) && $_COOKIE['message'] != 'success') || 
		  (!isset($_COOKIE['message'])) ){
		  	if(isset($_COOKIE['message'])){
			print '<p style="color: red;">' . $_COOKIE['message'] . '</p>';
			$_COOKIE['message'] = array();
			}
	?>
	<form action="check_registration.php" method="post">
		<p>Nick name: <input type="text" name="name" size="30" /></p>
		<p>Email address: <input type="text" name="email" size="30" /></p>
		<p>Password: <input type="password" name="password1" size="30"/></p>
		<p>Password: <input type="password" name="password2" size="30"</p>
		<input type="submit" name="submit" value="Register" />
	</form>
	<?php } 
	?>
</body>
</html>
