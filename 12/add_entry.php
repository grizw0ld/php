<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/ DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Add a blog entry</title>
</head>
<body>
	<h1>Add a Blog Entry</h1>
	<?php // script 12.6 add_entry.php
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			include('db_connection.php');
			
			$problem = FALSE;
			if(!empty($_POST['title']) && !empty($_POST['entry'])){
				$title = mysql_real_escape_string(trim(strip_tags($_POST['title'])));
				$entry = mysql_real_escape_string(trim(strip_tags($_POST['entry'])));
			} else {
				print '<p style="color:red;">Please submit both a title and an entry</p>';
				$problem = TRUE; 
			}
			
			if(!$problem){
				$query = "INSERT INTO entries(entry_id, title, entry, date_entered) 
				VALUES (0, '$title', '$entry', NOW() )";
			}
			
			if(@mysql_query($query, $dbc)){
				print '<p>The blog post has been entered</p>';
			} else {
				print '<p style="color: red;">Could not add entry because: <br />' .
				mysql_error($dbc) . '</p><p>The query being entered was: ' . $query . '</p>';
			}//no problem
			mysql_close($dbc);
		}//end if form submission
	?>
	<form action="add_entry.php" method="post">
		<p>Entry title: <input type="text" name="title" size="40" maxsize="100" value="
			<?php if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['title'])){
				print trim($_POST['title']);
			} ?>" /></p>
		<p>Entry text: <textarea name="entry" cols="40" rows="5">
			<?php if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['entry'])){
				print trim($_POST['entry']);
			}?>
		</textarea> </p>
		<input type="submit" name="submit" value="Post this entry" />
	</form>
</body>
</html>