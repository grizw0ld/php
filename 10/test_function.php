<?php
    function return_array($var1, $var2){
    	$var1 = $var1 * 10;
		$var2 = $var2 / 10;
		
		return array($var1, $var2);
    }
	
	list($var1, $var2) = return_array(7, 150);
	print "var1: " . $var1 . "\nvar2: " . $var2;
?>