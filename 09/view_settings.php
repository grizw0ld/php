<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>View Your Settings</title>
        <style type="text/css">
            body {
                <?php 
                    if(isset($_COOKIE['font_size'])){
                        print "\t\tfont-size: " . htmlentities($_COOKIE['font_size']) . ";\n";
                    }else{
                        print "\t\tfont-size: medium;";
                    }
                    if(isset($_COOKIE['font_color'])){
                        print "\t\tcolor: #" . htmlentities($_COOKIE['font_color']) . ";\n";
                    }else{
                        print "\t\tcolor: #000;";
                    }

                ?>                 
            }
            
        </style>
    </head>
    <body>
        <p><a href="customize.php">Customize Your Settings</a></p>
        <p><a href="reset.php">Reset Your Settings</a></p>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type 
            specimen book. It has survived not only five centuries, but also the leap into 
            electronic typesetting, remaining essentially unchanged. It was popularised in 
            the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
            and more recently with desktop publishing software like Aldus PageMaker including 
            versions of Lorem Ipsum.</p>
    </body>
</html>
