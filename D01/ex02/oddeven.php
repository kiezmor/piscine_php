#!/usr/bin/php
<?php
	$str = fopen("php://stdin", "r");
	while ($str && !feof($str))
	{
		echo "Enter a number:";
		$nbr = fgets($str);
		if ($nbr)
		{
			$nbr = str_replace("\n", "", "$nbr");
			if (is_numeric($nbr))
			{
				if ($nbr % 2 == 0)
					echo "The number ".$nbr." is even\n";
				else
					echo "The number ".$nbr." is odd\n";
			}
			else
				echo "'".$nbr."' is not a number\n";
		}
	}
	fclose($str);
	echo "\n";
?>