<?php //script 9.pursue customize.php
/*
 * ver 2, adding in the full list of arguments to the 
 * setcookie() functions to ensure that the cookie persists 
 * after the browser is closed
 * made results sticky
 * 
 */
 //handle the form if it has been submitted
 
 if(isset($_GET['font_size'], $_GET['font_color'])){
     setcookie('font_size', $_GET['font_size'], time()+1000000000,
             '/', '',  0);
	 $font_size = htmlspecialchars($_GET['font_size']);
     setcookie('font_color', $_GET['font_color'], time()+1000000000,
             '/', '', 0);
			 switch ($_GET['font_color']) {
				 case '999':
					 $font_color_name = 'Grey';
					 break;
				 case '0c0':
					 $font_color_name = 'Green';
					 break;
				 case '0000FF':
					 $font_color_name = 'Blue';
					 break;
				 case 'c00':
					 $font_color_name = 'Red';
					 break;
				 case '000':
					 $font_color_name = 'Black';
					 break;
				 default:
					 $font_color_name = '???';
					 break;
			 }
			 $font_color = '#' . htmlspecialchars($_GET['font_color']);
 $msg = "<p style=\"color:$font_color;font-size:$font_size;\">
 	Your settings have been saved, please click <a href=\"view_settings.php\">here</a> 
 	to see them in action</p>";
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

        <form action="customize_2.php" method="get">
            <select name="font_size">
            	<option value=<?php if (isset($_GET['font_size'])){
            		print htmlspecialchars($_GET['font_size']);
            	}else{
            		"";
            	}	
            	 ?>>          	
            	<?php if (isset($_GET['font_size'])){
            		print htmlspecialchars($_GET['font_size']);
            	}else{
            		print "Font Size";
            	} ?>
            	</option> 
                <!-- <option value="">Font Size</option> -->
                <option value="xx-small">xx-small</option>
                <option value="x-small">x-small</option>
                <option value="small">small</option>
                <option value="medium">medium</option>
                <option value="large">large</option>
                <option value="x-large">x-large</option>
                <option value="xx-large">xx-large</option>
            </select>            
            <select name="font_color">
            	<option value=<?php if (isset($_GET['font_color'])){
            		print $font_color;
            	}else{
            		"";
            	}	
            	 ?>>          	
            	<?php if (isset($_GET['font_color'])){
            		print $font_color_name;
            	}else{
            		print "font color";
            	} ?>
            	</option> 
            	
               <!-- <option value="">Font Color</option> -->      
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
