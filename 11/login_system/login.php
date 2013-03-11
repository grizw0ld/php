<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/ DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Login Pursue</title>
</head>
<body>
	<?php
		$file = 'admin.txt';
		$read = fopen($file, 'rb');
			if($_SERVER['REQUEST_METHOD'] == 'POST'){
			while( $line = fgetcsv($read, 1000, "\t")){
				if($line[0] == $_POST['email'] && $line[1] == md5($_POST['password'])){
					setcookie('user', $line[0]);
					fclose($file);
		            header('Location:welcome.htm');
					break;
				}
			}
		} else {
	?>
	<h1>Please Login</h1>
	<form action="login.php" method="post">
		<p>email: <input type="text" name="email" size="30" /></p>
		<p>password: <input type="password" name="password" size="30" /></p>
		<input type="submit" name="submit" value="login" />
	</form>
	<?php }?>
</body>
</html>
