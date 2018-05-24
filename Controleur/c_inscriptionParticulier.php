<?php
require 'Modele/model.class.php';


	class inscriptionParticulier{

		
		private $IDENTIFIANTC, $NOMPARTICULIER ,$PRENOMPARTICULIER,$MDPC,$TELC,$ADRESSEC,$MAILC,$success,$erreur;

//On initialise les données
		public function __construct(){
		
			$this->NOMPARTICULIER="";
			$this->PRENOMPARTICULIER="";
			$this->MDPC="";
		
			$this->ADRESSEC="";
			$this->TELC="";
			$this->MAILC="";
			$this->IDENTIFIANTC="";

			$success="";
			$erreur=0;
		}
	}

	if (isset($_POST['submit'])){

		$IDENTIFIANTC=$_POST["identifiantc"];
		$NOMPARTICULIER=$_POST["nomparticulier"];
		$PRENOMPARTICULIER=$_POST["prenomparticulier"];
		$MDPC=$_POST["mdpc"];
		$ADRESSEC=$_POST["adresse"];
		$TELC=$_POST["Tel"];
		$MAILC=$_POST["mail"];

		if($erreur==0){

			
			$req=$bdd->querry("INSERT INTO particulier (NOMPARTICULIER,PRENOMPARTICULIER,ADRESSEC,TELC,MAILC,MDPC, IDENTIFIANTC) VALUES (".$NOMPARTICULIER.",".$PRENOMPARTICULIER.",".$ADRESSEC.",".$TELC.",".$MAILC.",".$MDPC.",".$IDENTIFIANTC."); ");


			//$success = "/br><span> L'enregistrement à été effectué</span></br>";
		}
	}

$unControleur = new inscriptionParticulier("localhost","bdd_ppe","root","");require './Vue/v_inscriptionParticulier.php';