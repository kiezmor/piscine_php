#!/usr/bin/php
<?php
	if ($argc != 4)
		exit("Invalid numbers of arguments!\n");
	if (strpos($argv[2], "+"))
		echo ($argv[1] + $argv[3])."\n";
	elseif (strpos($argv[2], "-"))
		echo ($argv[1] - $argv[3])."\n";
	elseif (strpos($argv[2], "/"))
		echo ($argv[1] / $argv[3])."\n";
	elseif (strpos($argv[2], "%"))
		echo ($argv[1] % $argv[3])."\n";
	elseif (strpos($argv[2], "*"))
		echo ($argv[1] * $argv[3])."\n";
?>