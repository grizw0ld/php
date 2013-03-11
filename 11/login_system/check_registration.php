<?php
	$gtg = TRUE;
	$file = 'admin.txt';
	if($_POST['name'] && $_POST['email'] && $_POST['password1'] && $_POST['password2'] && 
	($_POST['password1'] == $_POST['password2'])){
		if((strpos(file_get_contents($file), $_POST['email'])) ||
		  (strpos(file_get_contents($file), $_POST['name']))){
			$gtg = FALSE;
			$message = 'username or email alread taken';
		} else if(is_writable($file)){
			$gtg = TRUE;
			$login = $_POST['name'] . "\t" . $_POST['email'] . "\t" . md5($_POST['password1']);
			file_put_contents($file, $login . PHP_EOL, FILE_APPEND | LOCK_EX);
			$message = 'success';		
		} else {
			$message = 'file_not_writeable';
		}
	} else {
			$message = 'data_entry_error';
			header('Location:register.php');
	}
	setcookie('message', $message);
	header('Location:register.php');
?>