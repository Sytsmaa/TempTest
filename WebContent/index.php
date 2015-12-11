<?php
	$test = new Java("Test");
	$msg1 = $test->getMsg();
	$msg2 = $test->getMsg("2nd");
	
	echo "<p> msg1=\"" . $msg1 . "\"</p>";
	echo "<p> msg2=\"" . $msg2 . "\"</p>";
?>