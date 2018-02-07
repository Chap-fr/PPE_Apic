	 <?php
require '../Modele/conectbdd.php';

	class connexion{
		private $mail,$password,$erreur,$success;
	}

	$password="";
	$mail="";
	$erreur=0;

	if (isset($_POST['button'])) {

		if($_POST['email']==$mail && $_POST['mdp']==$password){
			$success="<span> Connecté </span>";
		}
	}


require '../Vue/vue_log.php';
?>