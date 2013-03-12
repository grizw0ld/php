<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/ DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Create Table</title>
</head>
<body>
	<?php //script 12.4 create_table.php
		if($dbc = @mysql_connect('localhost', 'mark', 'password')){
			if(!@mysql_select_db('myblog', $dbc)){
				print '<p style="color: red;">Could not connect database: <br />' . mysql_error($dbc) . '</p>';
				mysql_close($dbc);
				$dbc = FALSE;
			}
		}else{
			print '<p style="color: red;">Could not connect to database: <br />' . mysql_error() . '</p>';
		}
		
		if($dbc){
			$query = 'CREATE TABLE entries (
						entry_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
						title VARCHAR(100) NOT NULL,
						entry TEXT NOT NULL,
						date_entered DATETIME NOT NULL
						)';
		
			if(@mysql_query($query, $dbc)){
				print '<p>The table has ben created</p>';
			} else {
				print '<p style="color: red;">Could not create the query because: <br />' . mysql_error($dbc) .
			  		'the query being run was: ' . $query . '</p>';
			}
			mysql_close($dbc);
		}
	
	?>
</body>
</html>