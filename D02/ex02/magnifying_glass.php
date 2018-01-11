#!/usr/bin/php
<?php
if ($argc > 1)
{
	if (($str = file_get_contents($argv[1])) === false)
		exit("Read error\n");
	$str = preg_replace_callback("/(<a )(.*?)(>)(.*)(<\/a>)/ism", 
		function($reg)
		{
			$reg[0] = preg_replace_callback("/( title=\")(.*?)(\")/ism", 
				function($reg1)
				{
					return ($reg1[1].strtoupper($reg1[2]).$reg1[3]);
				}, $reg[0]);
			$reg[0] = preg_replace_callback("/(>)(.*?)(<)/sm", 
				function($reg2)
				{
					return ($reg2[1].strtoupper($reg2[2]).$reg2[3]);
				}, $reg[0]);
			return ($reg[0]);
		}, $str);
	echo $str;
}
else
	echo "Usage: ./magnifying_glass.php file.html\n";
?>