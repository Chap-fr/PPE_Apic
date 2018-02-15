<?php
	include ('model.class.php');	
	class ModeleProduit extends Model
	{
		public function __construct($serveur, $bdd, $user, $mdp) {
			//constructeur de la classe more
			parent::__construct($serveur, $bdd, $user, $mdp);
		}
		
		public function nbProduit ()
		{
			//retourne idcommune nomcommune nbsecteurs
			$requete = "select * from Produit;";
			$select = $this->pdo->prepare ($requete);
			$select->execute();
			$donnees = $select->fetchAll();
			return $donnees;
		}
	}
?>