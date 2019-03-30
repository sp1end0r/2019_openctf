<?php
	$flag = 'flag{basic_SSRF_XDDDDDDD}';
	if($_SERVER['REMOTE_ADDR'] === '127.0.0.1' || $_SERVER['REMOTE_ADDR'] === 'localhost' || $_SERVER['REMOTE_ADDR'] === '::1'){
		echo $flag;
	}
	else{
		echo 'hmm? you are not local ip';
	}
?>