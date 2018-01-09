#!/usr/bin/php
<?php
	if ($argc > 1)
	{
		$str = array_values(array_filter(explode(' ', $argv[1])));
		$str[count($str)] = $str[0];
		unset($str[0]);
		foreach ($str as $p) 
			$res .= $p." ";
		echo trim($res)."\n";
	}
?>