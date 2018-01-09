#!/usr/bin/php
<?php
	function ft_is_sort($str)
	{
		$res = $str;
		sort($res);
		if (array_diff_assoc($res, $str) == null)
			return true;
		return false;
	}
?>