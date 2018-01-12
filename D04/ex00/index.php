<?php
	session_start();
	if ($_GET['submit'] === "OK" && $_GET['login'] && $_GET['pw'])
	{
		$_SESSION['login'] = $_GET['login'];
		$_SESSION['password'] = $_GET['pw'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form name="index.php" method="GET">
		<input type="text" name="login">
		<input type="password" name="passwd">
		<input type="submit" name="submit" value="OK">
	</form>
</body>
</html>
