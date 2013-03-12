<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/ DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Create the Database</title>
</head>
<body>
	<?php //script 12.3 mysql_connect.php
		if($dbc = @mysql_connect('localhost', 'mark', 'password')){
			print '<p>Successfully connected to MySQL</p>';
			if(@mysql_query('CREATE DATABASE myblog', $dbc)){
				print '<p>The database has been created</p>';
			}else{
				print '<p style="color: red;">Could not create the database because:<br />' . mysql_error() . '.</p>';
			}
			//mysql_close($dbc);
		} else {
			print '<p style="color: red;">Could not connect to MySQL:<br />' . mysql_error($dbc) . '.</p>';
		}
		if(@mysql_select_db('myblog', $dbc)){
			print '<p>The database has been selected</p>';
		} else {
			print '<p style="color: red;">Could not select the database because: <br />' . mysql_error($dbc) . '</p>';
		}
	
	?>
</body>
</html>