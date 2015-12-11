<?php
	echo "<p>We up here boys</p>";
	
	$derp = new Java("java.lang.System");
	$ver = $derp->getProperty("java.version");
	echo "<p> version=\"" . $ver . "\"</p>";
	
	$test = new Java("Test");
	$msg1 = $test->getMsg();
	$msg2 = $test->getMsg("2nd");
	
	echo "<p> msg1=\"" . $msg1 . "\"</p>";
	echo "<p> msg2=\"" . $msg2 . "\"</p>";
?>