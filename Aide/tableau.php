<?php
	//Ce fichier permet la connexion à la base de données
	require 'cobdd.php';
	//On démarre la session 
	session_start();

	$idtab=array();
	//On stoque les clefs dans une liste
	$keys=array();
	$keys= array_keys($_SESSION['formulaire']);
	
	$condition="";

	//On fait une boucle pour générer la condition de la requete, petite triche, j'ai appelé les key de ma liste comme sur la bdd
	foreach($_SESSION['formulaire'] as $key => $value){

		if($value!=NULL){
			$condition= $condition . " AND ".$key." = '".$value."' ";
		}

	}
	//Requete : Select tout de patient et souche où l'identifiant patient de la table patient = à l'identifiant patient de la table souche + les conditions
	$req="SELECT * FROM Patient, Souche WHERE Patient.idp = Souche.idp ".$condition.";";
	$reponse = $bdd->query($req);

	//Si j'utilise le bouton fiche alors je mets dans la session l'identifiant patient marqué
	if(isset($_POST['fiche'])){
		$_SESSION['patient']=$_POST['idPatient'];
		header("Location:patient.php");
	}
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Tableau</title>
	<link rel="stylesheet"  href="css/bootstrap.css">
	<link rel="stylesheet"  href="css/style.css">
</head>
<body>
	<h1>Tableau des Patients : </h1><br>
		<form class="table" method='POST' action="" target="_blank">	
			<label>Fiche Patient n° : </label>
			<div class=""><input type="text" name="idPatient">
			<button  type="submit" name="fiche" class="btn btn-default btn-sm"><img src="img/arrows-1.png" /></button>
		</form>
		<br>
		<table class="table table-striped">

			<tr>

				<th>Id Patient</th>
				<th>Nom</th>
				<th>Prenom</th>
				<th>Date Naissance</th>
				<th>Date pr&eacutel&egravevement</th>
				<th>Lieu de souchage</th>
				<th>Mat&eacuteriel</th>
				<th>BK++</th>
			
			</tr>
	
		<?php
		//Boucle pour le générer le tableau
		while ($donnees = $reponse->fetch()) {

			 //Permet de convertir la date en Jour/Mois/Annee
			 $DateNaissance = date("d/m/Y", strtotime($donnees['datenaissance']));
			 $DatePre = date("d/m/Y", strtotime($donnees['datepre']));
		?>
		<tr>

				<td><?php echo $donnees['idp']; ?></td>
				<td><?php echo $donnees['nom']; ?></td>
				<td><?php echo $donnees['prenom']; ?></td>
				<td><?php echo $DateNaissance; ?></td>
				<td><?php echo $DatePre; ?></td>
				<td><?php echo $donnees['lieusouch']; ?></td>
				<td><?php echo $donnees['mat']; ?></td>
				<td><?php echo $donnees['bplus']; ?></td>

			
		</tr>
		<?php
		
		}
		?>

	</table>
	<a href="index.php" type="button" class="btn btn-default btn-sm">
	    Retour vers la recherche
    </a><br>

	<?php
	$reponse->closeCursor();
	?>
	
</body>
</html>