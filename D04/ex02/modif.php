<?php
function print_error()
{
	echo "ERROR\n";
	exit;
}
if (!isset($_POST["login"]) || !isset($_POST["oldpw"]) || !isset($_POST["newpw"]))
	print_error();
if (!$_POST["login"] || !$_POST["oldpw"] || !$_POST["newpw"])
	print_error();
if (isset($_POST['submit']) && $_POST['submit'] == "OK")
{
	$dir="../private";
	$filename=$dir."/passwd";
	if (!file_exists($filename))
	{
		print_error();
	}
	$tabsecurite=unserialize(file_get_contents($filename));
	$found = false;
	foreach ($tabsecurite as $key => $element)
	{
		if ($element['login'] === $_POST['login'])
		{
			$found = true;
			$found_key = $key;
			break;
		}
	}
	if ($found == false)
	{
		print_error();
	}
	$hash_str=hash("whirlpool",$_POST["oldpw"]);
	if ($hash_str !== $element["passwd"])
	{
		print_error();
	}
	$tabsecurite[$found_key]["passwd"]= hash("whirlpool",$_POST["newpw"]);
	$str=serialize($tabsecurite);
	file_put_contents($filename,$str);
	echo "OK\n";
}
else
{
	print_error();
}
?>