#!/usr/bin/php
<?php
	$str = array();
	unset($argv[0]);
	foreach ($argv as $p)
	{
		$tmp = array_filter(explode(" ", $p));
		foreach ($tmp as $p2)
			$str[] = $p2;
	}
	sort($str);
	foreach ($str as $p)
		echo $p."\n";
?>