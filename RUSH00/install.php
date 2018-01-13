<?php
	include 'connect.php';
	if (isset($_POST['submit']))
	{
		$sql = file_get_contents("db.sql");
		$sql_array = explode(";", $sql);
		foreach ($sql_array as $p) 
			mysqli_query($link, $val);
	}
?>

<form action="install.php" method="post">
	<input type="submit" name="submit" value="INSTALL" />
</form>