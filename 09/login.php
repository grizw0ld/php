<?php //script 9.6 login.php 3

/**
 * @author M Grzechowiak
 * @copyright 2013
 */

//create a title constant to be printed on the template
define('TITLE', 'Login');

//include header template in page
include('templates/header.htm');

//add introductory text
print '<h2>Login Form</h2>
    <p>Users who are logged in can take advantage of certain features
    like this that and the other thing</p>';
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if((!empty($_POST['email'])) && 
            (!empty($_POST['password']))) {
                if((strtolower($_POST['email']) == 'me@example.com') &&
                    (($_POST['password']) == 'testpass')) {
                        //print '<p>You are now logged in!<br />
                        //Now you can Blah Blah Blah</p>';
                        ob_end_clean(); //cleans out the  buffer started in header.htm
                        
                        //start sessuib to be used with welcome.php
                        session_start();
						$_SESSION['email'] = $_POST['email'];
						$_SESSION['loggedin'] = time();
						
                        header('Location: welcome.php'); //redirects the user to welcome.php
                        exit(); //stops the rest of the script from executing
                    } else { //incorrect
                        print '<p>User Name and Passwrod do not match</p>';
                    }
            } else { //empty field
                print '<p>Please make sure all fields have been filled out</p>';
            }
    } else {//display the form
        print '<form action="login.php" method="post">
        <p>Email Address <input type="text" name="email" size="20" /></p>
        <p>Password <input type="password" name="password" size="20" />
        <p><input type="submit" value="login"</p></form>';
    }
    
    include('templates/footer.htm');
    
?>