<?PHP
include 'connect.php';
if (isset($_POST['conne']))
{
	if (!isset($_POST['mail']))
		echo "Adresse mail obligatoire.";
	else if (!isset($_POST['passwd']))
		echo "Veuillez entrer un mot de passe";
	else
	{
		$passwd = hash("oppaicrew", $_POST['passwd']);
		$mail = mysqli_real_escape_string($link, $_POST['mail']);
		$query = 'SELECT email,mdp FROM client WHERE email="'.$mail.'" AND mdp="'.$passwd.'"';
		$array = mysqli_query($link, $query);
		if ( mysqli_fetch_assoc($array) === NULL)
		{
			$conne = "Mauvais mail ou mot de passe, réessayez";
		}
		else
		{
			$_SESSION['loggued_usr'] = $_POST['mail'];
			header("Location: index.php");
		}
	}
}
?>
