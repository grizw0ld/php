<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/ DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Login</title>
</head>
<body>
	<h1>Login</h1>
<?php //script 11.8 login.php
	$file = '.../users/users.txt';
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		print $_POST['username'] . ' ' . md5($_POST['password']);
		$logged00in = FALSE;
		ini_set('auto_detect_line_endings', 1);
		$fp = fopen($file, 'rb'); //rb indicates that the file is open for reading in inary safe mode
		while ($line = fgetcsv($fp, 1000, "\t")) {
			// print $_POST['username'];
			// print md5(trim($_POST['password']));
			print_r($line);
			if( ($line[0] == $_POST['username'])
			AND ($line[1] == md5(trim($_POST['password'])))){
				$loggedin = TRUE;
				break;
			}
		}
		fclose($fp);
		if($loggedin){
			print '<p>You are now logged in</p>';
		}else{
			print '<p style="color: red;">The username and password do not match</p>';
		}
	} else {
 ?>
	<form action="login.php", method="post">
		<p>Username: <input type="text" name="username" size="20" /></p>
		<p>Password: <input type="password" name="password" size="20" /></p>
		<input type="submit" name="submit" value="log in" />
	</form>
<?php } ?>
</body>
</html>