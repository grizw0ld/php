<?php //script 9.3 customize.php
/*
 * ver 2, adding in the full list of arguments to the 
 * setcookie() functions to ensure that the cookie persists 
 * after the browser is closed
 */
 //handle the form if it has been submitted
 if(isset($_POST['font_size'], $_POST['font_color'])){
     setcookie('font_size', $_POST['font_size'], time()+1000000000,
             '/', '',  0);
     setcookie('font_color', $_POST['font_color'], time()+1000000000,
             '/', '', 0);
 $msg = '<p>Your settings have been saved, please click <a href="view_settings.php">here</a> 
 to see them in action</p>';
 }//end if
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <?php //if the cookies were sent print a message
            if(isset($msg)){
                print $msg;
            }
        ?>
        <p>Use this form to set your prefrences</p>

        <form action="customize.php" method="post">
            <select name="font_size">
                <option value="">Font Size</option>
                <option value="xx-small">xx-small</option>
                <option value="x-small">x-small</option>
                <option value="small">small</option>
                <option value="medium">medium</option>
                <option value="large">large</option>
                <option value="x-large">x-large</option>
                <option value="xx-large">xx-large</option>
            </select>
            <select name="font_color">
                <option value="">Font Color</option>            
                <option value="999">Grey</option>
                <option value="0c0">Green</option>
                <option value="0000FF">Blue</option>
                <option value="c00">Red</option>
                <option value="000">Black</option>
            </select>
            <input type="submit" name="submit" value="Set My Preferences" />
        </form>        
    </body>
</html>
