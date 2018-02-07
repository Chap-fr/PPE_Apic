<?php


/*class connexion{

		private $mail,$password,$erreur;
	
	$password="";
	$mail="";
	$erreur="";

	if(isset($_POST["submit"])){
		$mail=$_POST["login"];
		$password=$_POST["password"];

	$email = $db->query("SELECT * FROM ADULTE where mail = ".$login." ;")->fetch(PDO::FETCH_OBJ);
	$mdp = $db->query("SELECT * FROM ADULTE where Password = ".$password." ;")->fetch(PDO::FETCH_OBJ);
	$co = $db->query("SELECT * FROM ADULTE where Password ='".$password."' and mail = '".$login."';")->fetch(PDO::FETCH_OBJ);

 	if($email == false){
 	 	$Erreur .="<span>Adresse Mail incorrect<span><br>";
 	}
 	if($password!=$mdp || $mdp == false){
 		$Erreur .="<span>Mot de passe incorrect<span><br>";
 	}

 	if($co !=false){
 		$res="<span>Connecté<span><br>";
 	}
 	}

 	*/
require './Vue/vue_connexion.php';
?>