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
		<p>Username: </p><input type="text" name="login"><br />
		<p>Password: </p><input type="password" name="passwd"><br />
		<input type="submit" name="submit" value="OK">
	</form>
</body>
</html>
