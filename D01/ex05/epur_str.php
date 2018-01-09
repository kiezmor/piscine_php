#!/usr/bin/php
<?php
	if ($argc == 2)
	{
		$str = array_filter(explode(" ", $argv[1]));
		$ecp = " ";
		foreach ($str as $p)
			$ecp .= $p." ";
		echo trim($ecp)."\n";
	}
?>