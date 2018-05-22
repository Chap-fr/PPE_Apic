<?php


class Modele{


	protected $pdo;
	private $table;

	public function __construct ($serveur, $bdd, $user, $mdp){
		try {

			$this->pdo = new PDO("mysql:host=".$serveur.";dbname=".$bdd, $user, $mdp);



			
		} catch (Exeption $exp) {
			echo "connexion impossible à :" .$serveur."/".$bdd;

		}
	}

	public function setTable($table){
		$this->table=$table;
	}
	public function selectAll(){

		$requete = "select * from " .$this->table.";";

		//si co pdo est null() retourne null
		if($this->pdo != null){
			$select = $this->pdo->prepare($requete);
			$select->execute();
			$resultats = $select->fetchAll();
			return $resultats;

		}else {
			return null;
		}
	}

	public function insert ($tab){

			$champs = array();
			$donnees = array();
			$valeurs = array();
			
			foreach($tab as $cle=>$valeur)
			{
				$champs[]=$cle;
				$valeurs[] = ":".$cle;
				$donnees[":".$cle] = $valeur;
			}
			
			$listeChamps = implode(",", $champs);
			$listeDonnees = implode(",", $valeurs);
			
			$requete = "insert into ".$this->table." (".$listeChamps.") values (".$listeDonnees.")";
			$insert = $this->pdo->prepare($requete);
			$insert->execute($donnees);
		}	
	}


?>



			

		
				
