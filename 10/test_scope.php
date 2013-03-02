<?php
	$var1 = 10;
	$var2 = 15;
	$total = 1;
	$global_test = 50;
	
	function add_two_numbers($var1, $var2){
		$var1 *= 5;
		$var2 *= 25;
		$total = $var1 + $var2;
		return array($var1, $var2, $total);
	}
	
	function global_change($var1){
		global $global_test; //global will change the variable scope
		$global_test -= $var1;

	}
	
	print "Variables outside of the function";
	print "var1: " . $var1 . " var2: " . $var2 . " total: " . $total . "\n\n";
	
	print "variables inside the function";
	list($ret1, $ret2, $ret3) = add_two_numbers($var1, $var2);
	print "var1: " . $ret1 . " var2: " . $ret2 . " total: " . $ret3 . "\n\n";
	
	print "before: " . $global_test . " after: ";
	global_change(19);
	print $global_test;
	
?>