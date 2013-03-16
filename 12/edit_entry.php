<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/ DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Edit a Blog Entry</title>
</head>
<body>
	<h1>Edit an entry</h1>
	<?php //script 12.p edit_entry.php
		include('db_connection.php');
		
		if(isset($_GET['id']) && is_numeric($_GET['id'])){
			$query = "SELECT title, entry FROM entries WHERE entry_id = {$_GET['id']}";
			
			if($r = mysql_query($query, $dbc)){
				$row = mysql_fetch_array($r);
				
				print '<form action="edit_entry.php" method="post">
				<p>Entry Title: <input type="text" name="title" size="40"maxsize="100" value="' . htmlentities($row['title']) . '" /></p>
				<p>Entry Text: <textarea name="entry" cols="40" rows="5">' . htmlentities($row['entry']) . '</textarea></p>
				<input type="hidden" name="id" value="' . $_GET['id'] . '" /><input type="submit" name="submit" value="Update this Entry!" />
				</form>';

			}else{//couldnt get the data
				print '<p style="color: red;">Could not retrieve the Blog Post because: <br />' .
				      mysql_error($dbc) . '.<p>The query being ran was: ' . $query;
					  
			}
		} else if (isset($_POST['id']) && is_numeric($_POST['id'])){
			$problem = FALSE;
			if (!empty($_POST['title']) && !empty($_POST['entry'])) {
					$title = mysql_real_escape_string(trim(strip_tags($_POST['title'])), $dbc);
					$entry = mysql_real_escape_string(trim(strip_tags($_POST['entry'])), $dbc);
				} else {
					print '<p style="color: red;">Please submit both a title and an entry.</p>';
					$problem = TRUE;
				}
				if (!$problem) {
				// Define the query.
				$query = "UPDATE entries SET title='$title', entry='$entry' WHERE entry_id=
				{$_POST['id']}";
				$r = mysql_query($query, $dbc); // Execute the query.
				
				if (mysql_affected_rows($dbc) == 1) {
					print '<p>The blog entry has been updated.</p>';
				} else {
					print '<p style="color: red;">Could not update the entry because:<br />' .
					mysql_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
				}
				
				} // No problem!
				} else { // No ID set.
				print '<p style="color: red;">This page has been accessed in error.</p>';
				} // End of main IF.
				mysql_close($dbc); // Close the connection. 
	
	?>
</body>
</html>