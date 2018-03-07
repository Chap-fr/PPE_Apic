<?php
//Ce fichier permet la connexion à la base de données
	require 'cobdd.php';

//On demarre la session
	session_start();

	class Recherche{
		private $idp,$nom,$prenom,$datenaiss,$datepre,$typeprel,$lieusouche,$antibiogramme,$erreur,$bkplus;

//On initialise les données
		public function __construct(){
			$this->idP=0;
			$this->nom="";
			$this->prenom="";
			$this->datenaiss=0;
			$this->datepre=0;
			$this->lieusouche="";
			$this->materiel="";
			$this->bkplus="";
			$erreur="";
		}

	}
	//Si le bouton recherche est utilise, on prend les entites dans la session sous forme d'une liste.
		if(isset($_POST["recherche"])){
			$_SESSION['formulaire']= array(
				"Patient.idp" => $_POST['idP'],
				"Patient.nom" => $_POST['nom'],
				"Patient.prenom" => $_POST['prenom'],
				"Patient.datenaiss" => $_POST['datenaiss'],
				"Souche.datepre" => $_POST['datepre'],
				"Souche.lieusouch" => $_POST['lieusouche'],
				"Souche.mat" => $_POST['materiel'],
				"Souche.bplus" => $_POST['bkplus'],
			);
			
			header("Location:tableau.php");
		}
	
	require 'header.php';

?>
	<div class="container">
		<h2>Saisie Des Informations : </h2></br>
		<div class= "alert alert-info col-md-6">
			<form class="table" method='POST' action="">
				
					<h3> Patient : </h3>

					<div class="row">
						<div class="col-md-4 "><label>Identifiant Patient :</label></div>
						<div class="col-md-1 "><input type="text" name="idP"></div>
					</div>

					<div class="row">
						<div class="col-md-4 "><label>Nom :</label></div>
						<div class="col-md-1 "><input type="text" name="nom"></div>
					</div>

					<div class="row">
						<div class="col-md-4 "><label>Prenom :</label></div>
						<div class="col-md-1 "><input type="text" name="prenom"></div>
					</div>
				
					<h3> Informations pr&eacutel&egravevement : </h3>
					

					<div class="row">
						<div class="col-md-4"><label>Lieu de souchage : </label></div>
						<div class="col-md-1 "><input type="text" name="lieusouche"></div>
					</div>

					<div class="row">
						<div class="col-md-4"><label>Mat&eacuteriel : </label></div> 
						<div class="col-md-1 "><input type="text" name="materiel"></div>
					</div>

					<div class="row">
						<div class="col-md-4"><label>BK++ : </label></div> 
						<div class="col-md-1 "><input type="text" name="bkplus"></div>
					</div>

					<div class="row">
						<div class ="col-md-4">
							<button type="submit" class="btn btn-info" name="recherche" > Rechercher</button>
						</div>
					</div>
			
			</form>
		</div>
	</div>
</body>

</html>
