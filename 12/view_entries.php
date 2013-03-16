<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/ DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>View My Blog</title>
</head>
<body>
	<h1>My Blog</h1>
	<?php //script 12.7 view entries && chapter 12 pursue --added in nl2b4 function to add lin line breaks
		include('db_connection.php');
		
		$query = 'SELECT * FROM entries ORDER BY date_entered DESC';
		
		if($r = mysql_query($query, $dbc)){
			while($row = mysql_fetch_array($r)){	
				$row['entry'] = nl2br($row['entry']);
				print "<p><h3>{$row['title']}</h3>{$row['entry']}<br />
				  <a href=\"edit_entry.php?id={$row[entry_id]}\">Edit</a>
				  <a href=\"delete_entry.php?id={$row[entry_id]}\">Delete</a></p><hr />\n";
			}
		} else {//query didnt run
			print '<p style="color: red;">Could not retrieve the data because: <br />' .
			  mysql_error($dbc) . '</p>';
		}
		
		mysql_close($dbc);
	
	?>
</body>
</html>