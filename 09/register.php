<?php //script 8.10 registe2.php #2

//create page title to be used in index
define('TITLE', 'Register');
include('templates/header.htm');

//Print introductory text
print '<h2>Registration Page</h2>
    <p>Register so that you can take advantage of certain features like this that and the other thing</p>';

//and css
print '<style type="text/css" media="screen">.error {color: red; }</style>';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $problem = FALSE;
    if (empty($_POST['first_name'])){
        $problem =  TRUE;
        print '<p class="error">Please Enter Your First Name</p>';
    }
    if (empty($_POST['last_name'])){
        $problem = TRUE;
        print '<p class="error">Please Enter Your Last Name</p>';
    }

    if (empty($_POST['email']) || (substr_count($_POST['email'],'@'))!= 1){
        $problem = TRUE;
        print '<p class="error">Please Enter Your Email Address</p>';
    }
    //uaing filter_var() to validate emial
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $problem = TRUE;
        print '<p class="error">Please enter a valid email address</p>';
    }
    /*
    if (empty($_POST['password1'])){
        $problem = TRUE;
        print '<p class="error">Please Enter a Password</p>';
    }
    if ($_POST['password2'] != $_POST['password1']){
        $problem = TRUE;
        print '<p class="error">Passwords do not match</p>';
    }
    */
    //pursue password conditional rewrite 
    if(!empty($_POST['password1'])){
        if($_POST['password1'] != $_POST['password2']){
            $problem = TRUE;
            print '<p class="error">Passwords do not match</p>';
        }
    } else {
        $problem = TRUE;
        print '<p class="error">Please enter a password</p>';
    }
    if (!$problem){
        print '<p> You have successfully registered for the site more or less...';

        //send an email message
        $body = "Thank you for joining the J.D. Salinger fan club, Your headquarters for all of the
        latest J.D. Salinger news.  Your passwod or the site is:
         '{$_POST['password']}'.";

         mail($_POST['email'], 'Welcome to the J.D. Salinger Fan Club!', $body, 'From: admin@example.com');

        $_POST = array(); //set post to an empty array to reset it
    } else { //forgot a field
        print '<p class="error">Please Try Again</p>';
    }
}
?>
<form action="register.php" method="post">
<p>First Name: <input type="text" name="first_name" value="<?php 
    if (isset($_POST['first_name'])){
        print htmlspecialchars($_POST['first_name']);
    }?>" /></p>
<p>Last Name: <input type="text" name="last_name" value="<?php
    if (isset($_POST['last_name'])){
        print htmlspecialchars($_POST['last_name']);
    }?>" /></p>
<p>Email Address: <input type="text" name="email" value="<?php
    if (isset($_POST['email'])){
        print htmlspecialchars($_POST['email']);
    }?>" /></p>
<p>Password: <input type="password" name="password1" size="20" value="<?php
    if (isset($_POST['password1'])){
        print htmlspecialchars($_POST['password1']);
    }?>" /> </p>
<p>Confirm Password: <input type="password" name="password2" size="20" value="<?php
    if (isset($_POST['password2'])){
        print htmlspecialchars($_POST['password2']);
    }?>" /></p>
<p><input type="submit" name="submit" value="Submit Registration" /></p>
</form>

<?php include('templates/footer.htm'); ?>