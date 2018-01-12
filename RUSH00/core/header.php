<?php
	// error_reporting(0);
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
<meta charset="utf-8">
<div class="head">
	<div class="account">
		<ul>
			<?php
				if(isset($_SESSION['loggued_usr']) && $_SESSION['loggued_usr'] != "")
				{
					echo "<li><a href=account.php?mail=";
					echo $_SESSION['loggued_usr'];
					echo "<li><a href='logout.php'>Deconnexion<br></a></li>";
				}
				else
			?>
				<li><a href="account.php">Connexion/Inscription</a></li>
			<li><a href="panier.php">Panier:<?php echo $_SESSION['total_cart'];?></a></li>
		</ul>
	</div>
</div>
<?php include 'core/menu.php';