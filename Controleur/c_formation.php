<?php
require './Modele/model.class.php';


class Formation{

	
private $unModele;
		
		public function __construct ($serveur, $bdd, $user, $mdp)
		{
			$this->unModele = new Modele($serveur, $bdd, $user, $mdp);
			$this->unModele->setTable("entreprise");
		}
		public function selectAll()
		{
			return $this->unModele->selectAll();
			
		}
		public function insert($tab){
			return $this->unModele->insert($tab);
		}

}

$unModele = new inscriptionFormation(" "," ", " ", " ");
$donnees = $unModele->selectAll();

	if (isset($_POST["subform1"])) {
		$tab =   array('' => , );
		# code...
	}

require './Vue/v_formation.php';


?>