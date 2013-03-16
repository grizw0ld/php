<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/ DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Delete a Blog Entry</title>
</head>
<body>
	<h1>Delete an entry</h1>
	<?php //script 12.8 delete_entry.php
	    include('db_connection.php');
		
		if (isset($_GET['id']) && is_numeric($_GET['id']) ) { // Display the entry in a form:
		// Define the query:
		$query = "SELECT title, entry FROM entries WHERE entry_id={$_GET['id']}";
		if ($r = mysql_query($query, $dbc)) { // Run the query.
				$row = mysql_fetch_array($r); // Retrieve the information.
				print '<form action="delete_entry.php" method="post">
						<p>Are you sure you want to delete this entry?</p>
						<p><h3>' . $row['title'] . '</h3>' .
						$row['entry'] . '<br />
						<input type="hidden" name="id" value="' . $_GET['id'] . '" />
						<input type="submit" name="submit" value="Delete this Entry!" /></p>
						</form>';
			} else {
				print '<p style="color: red;">Could not retrieve the blod entry because: <br />' .
				     mysql_error($dbc) . '</p><p> The sql being run was: ' . $query . '</p>'; 
				}		 		 
 			} elseif (isset($_POST['id']) && is_numeric($_POST['id'])) { // Handle the form.

			$query = "DELETE FROM entries WHERE entry_id={$_POST['id']} LIMIT 1";
 			$r = mysql_query($query, $dbc); // Execute the query.

			if (mysql_affected_rows($dbc) == 1) {
			print '<p>The blog entry has been deleted.</p>';
			print '<p><a href="view_entries.php">view entries</a></p>';
			} else {
			print '<p style="color: red;"> Could not delete the blog entry because:<br />' .
			mysql_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
			}
		} else{
			print '<p style="color: red;">This page has been accessed in error</p>';
		}
		
		mysql_close($dbc);
	
	?>
</body>
</html>