#!/usr/bin/php
<?php
	function	custom_sort($a, $b)
	{
		$ca = strtolower($a);
		$cb = strtolower($b);
		$i = 0;
		$comp = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
		while (($i < strlen($a)) || ($i < strlen($b)))
		{
			$posa = strpos($comp, $ca[$i]);
			$posb = strpos($comp, $cb[$i]);
			if ($posa < $posb)
				return (-1);
			else if ($posa > $posb)
				return (1);
			else
				$i++;
		}
	}
	$str = [];
	$estr = [];
	if ($argc >1)
	{
		foreach ($argv as $p => $res) 
		{
			if ($p != 0)
			{
				$str = array_filter(array_map("trim", explode(' ', $res)), 'strlen');
				foreach ($str as $p => $res)
					array_push($estr, $res);
			}
		}
		usort($estr, "custom_sort");
		foreach ($estr as $v)
			echo $v."\n";
	}
?>