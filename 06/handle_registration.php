 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML  1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
   <meta http-equiv="Content-Tyoe"  
   content="text/html; charset=utf-8" />
   <title>Chapter 6 Registration</title>
   <style type="text/css" media="screen">
    .error { color: red; }
   </style>
 </head>
 <body>
 <h1>Registration Results</h1>
 <?php //script 6.8 handle_registration.php
 /*
  * This script receives seven values from register.html
  *email, password, confirm, year, terms, color, submit
 */
 
//error reporting
 ini_set('display_errors', 1);
 error_reporting( E_ALL | E_STRICT);
 
//print out the values of the $_POST array
// print_r($_POST);
 
 $year = $_POST['year'];
 $color = $_POST['color'];
 $dob = $_POST['month'] . '/' . $_POST['day'] . '/' . $_POST['year'];
 
 //flagvariable to track success
 $okay = TRUE;
 
 //validate the email address
 if (empty($_POST['email'])) {
    print '<p class="error">Please enter your email address.</p>';
    $okay = FALSE;
 }
 
 //validate passsword
 if (empty($_POST['password'])) {
    print '<p class="error">Please enter a password</p>';
    $okay = FALSE;
 }
 
 //check the two passwords for equality
 if (trim($_POST['password']) != trim($_POST['confirm'])) {
    print '<p class="error">Your confirmed password does not match the original</p>';
    $okay = false;
 }

if (!isset($_POST['terms'])) {
    print '<p class="error">Please accept the terms of service</p>';
    $okay = FALSE;
}

if ($_POST['month'] == 'month') {
    print '<p class="error">Please select a month</p>';
    $okay = FALSE;
}

if (!is_numeric($_POST['day'] )){
    print '<p class="error">Please select a valid date</p>';
    $okay = FALSE;
} elseif ($_POST['day'] < 0 || $_POST['day'] > 31) {
    print '<p class="error">Number selected is out of range</p>';
    $OKAY = FALSE;
}

if (is_numeric($year) AND strlen($year) == 4) {
    //check to see if the birthday is reasonable
    if($year < 2013 ){
        //calculate age
        $age = 2013 - $year;
    } else {
        print '<p class="error">Incorrect birth year or you are
        from the future</p>';
        $okay = FALSE;
    }//ELSE
} else {
    print '<p class="error">Please enter the year you were born
    using four digits</p>';
}

switch ($_POST['color']){
    case 'red' :
        $color_type = 'primary';
        break;
    case 'yellow':
        $color_type = 'primary';
        break;
    case 'blue' :
        $color_type = 'primary';
        break;
    case 'green' :
        $color_type = 'secondary';
        break;
    default :
        print '<p class="error">Please select a color</p>';
        $okay = FALSE;
        break;
} //end switch
 
 //if there are no errors pruint the success message
 if ($okay){
    print "<p>You have successfully registered (but not really)</p>";
    print "<p>Your birthday is $dob</p>";
    print "<p>You will turn $age this year</p>";
    print "<p style=\"color:$color;\">Your favorite color is a $color_type color</p>";
 }
 
  
 
 ?>
 </body>
 </html>