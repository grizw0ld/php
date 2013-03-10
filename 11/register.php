<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/ DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Register</title>
	<style type="text/css" media="screen">.error {color:red; }</style>
</head>
<body>
	<h1>Register</h1>
<?php //script 11.6 Register.php
	$dir = '../users/';
	$file = $dir . 'users.txt';
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$problem = FALSE;
		if(empty($_POST['username'])){
			$problem = TRUE;
			print '<p class="error">Please enter a username</p>';
		}
		if(strpos(file_get_contents($file), $_POST['username'])){
			$problem = TRUE;
			print '<p class="error">Username already taken</p>';
		}
		if(empty($_POST['password1'])){
			$problem = TRUE;
			print '<p class="error">Please enter a password</p>';
		}
		if($_POST['password1'] != $_POST['password2']){
			$problem = TRUE;
			print '<p class="error">Passwords do not match</p>';
		}
		if(!$problem){
			if(is_writable($file)){
				$subdir = time() . rand(0, 4596);
				$data = $_POST['username'] . "\t" . md5(trim($_POST['password1'])) . "\t" . $subdir . PHP_EOL;
				file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
				mkdir($dir . $subdir);
				print "You are now registered";
			} else {
				print '<p class="error">You could not be regiestered due to a system error</p>';
			}
		} else {
			print '<p class="error">Please go back and try again</p>';
		}
	} else{
?>
<form action="register.php" method="post">
	<p>Username: <input type="text" name="username" size="20" /></p>
	<p>Password: <input type="password" name="password1" size="20" /></p>
	<p>Confirm Password: <input type="password" name="password2" size="20" /></p>
	<p><input type="submit" name="submit" value="Register" /></p>
</form>

<?php } //end if ?>

</body>
</html>