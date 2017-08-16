<?php
	define("HOST", "localhost");
	define("USER", "local");
	define("PASS", "local");
	define("DB", "local");

$link= @mysqli_connect(HOST,USER,PASS,DB) or die (mysqli_error($link));
?>