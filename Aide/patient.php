<?php
require 'cobdd.php';
//On demarre la session
session_start();
//requete
$req="SELECT * FROM Patient, Souche WHERE Patient.idp = Souche.idp AND Patient.idp='".$_SESSION['patient']."';";
$reponse = $bdd->query($req);

?>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<title>Patient</title>
	<link rel="stylesheet"  href="css/bootstrap.css">
	<link rel="stylesheet"  href="css/bootstrap.min.css">
</head>
<body>
<center>
	<h1>--- Fiche Patient <?php echo $_SESSION['patient'];?>---</h1></br></br>
</center>

<?php 
while ($donnees = $reponse->fetch()) {
	//Formatage des dates en jour/mois/annee.
	$DateNaiss = date("d/m/Y", strtotime($donnees['datenaissance']));
	$DatePre = date("d/m/Y", strtotime($donnees['datepre']));

?>
<p>
Nom : <?php echo $donnees['nom'];?></br>
Prenom : <?php echo $donnees['prenom'];?></br>
Date Naissance : <?php echo $DateNaiss;?></br>
Date Pr&eacutel&egravevement : <?php echo $DatePre; ?></br>
Lieu Souchage : <?php echo $donnees['lieusouch']; ?></br>
Mat&eacuteriel : <?php echo $donnees['mat']; ?></br>
BK++ : <?php echo $donnees['bplus']; ?></br>
</p>

<?php
}
?>
</body>
</html>