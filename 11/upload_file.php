<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/ DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type"content="text/html; charset=utf-8" />
<title>Upload a File</title>
</head>
<body>
<?php //script 11.4 upload_file.php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(move_uploaded_file($_FILES['the_file']['tmp_name'], "../uploads/{$_FILES['the_file']['name']}")){
			print '<p>Your file has been uploaded</p>';
		} else { //problem with moving the file
			print '<p style="color: red;">Your file could not be uploaded because: ';
			switch ($_FILES['the_file']['error']) {
				case 1:
					print 'The file exceedes the maximum upload size';
					break;
				case 2:
					print 'The file exceedes the MAX_FILE_SIZE sertting in the html form';
					break;
				case 3:
					print 'The file was only partially uploaded';
					break;		
				case 4:
					print 'No file was uploaded';
					break;		
				case 6:
					print 'The temperary folder does not exist';
					break;									
				default:
					print 'Something unforeseen happened';
					break;
			}print '. </p>';//end paragraph / switch block
		} //end else
	}//end initial if
?>

<form action="upload_file.php" enctype="multipart/form-data" method="post">
	<p>Upload a file using this form</p>
	<input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
	<p><input type="file" name="the_file" /></p>
	<p><input type="submit" name="submit" value="Submit the file" /></p>
</form>


</body>
</html>