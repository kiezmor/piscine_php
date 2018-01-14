<?php
	error_reporting(0);
	session_start();
	include 'connect.php';
	include 'pp.php';
	if (array_key_exists('cart', $_SESSION) || $_SESSION['cart'] !== NULL)
	{
		$_SESSION['total_cart'] = count($_SESSION['cart']);
	}
	else
	{
		$_SESSION['total_cart'] = 0;
	}
?>
<link rel="stylesheet" type="text/css" href="css/trydotcss.css">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<div class="head">
	<a href="index.php"><img src="img/cavelogo.jpg" height=80px></a>
	<div class="account">
		<ul>
			<?php
				if(isset($_SESSION['loggued_on_user']) && $_SESSION['loggued_on_user'] != "")
				{
					echo "<li><a href=account.php?mail=";
					echo $_SESSION['loggued_on_user'];
					echo "<li><a href='logout.php'>Deconnexion<br></a></li>";
				}
				else
					echo "<li><a href=\"account.php\">Connexion/Inscription</a></li>";
			?>
			<li><a href="panier.php">Panier:<?php echo $_SESSION['total_cart'];?></a></li>
		</ul>
	</div>
</div>
<div class="clearfix"></div>
<?php include 'core/menu.php';?>