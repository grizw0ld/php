 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML  1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
   <meta http-equiv="Content-Tyoe"  
   content="text/html; charset=utf-8" />
   <title>Chapter 5 Pursue</title>
 </head>
 <body>
 <?php
    $pass1 = crypt($_POST['pass1']);
    $pass2 = $_POST['pass2'];
    
    print "<p>the encrypted password is $pass1</p>";
    print "<p>the second entery is $pass2</p>";
    
    if (crypt($pass2, $pass1) == $pass1) { //the second argument pass is the salt
        print "<p>Passsword verified</p>";
    } else {
        print "<p>Passsword incorrect</p>";
    }
 
 ?>
 </body>
 </html>