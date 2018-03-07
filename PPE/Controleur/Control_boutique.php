<?php
require './Modele/model.produit.php';
require './button.php';
	class Control_produit
	{
		private $unModele;
		
		public function __construct ($serveur, $bdd, $user, $mdp)
		{
			$this->unModele = new ModeleProduit($serveur, $bdd, $user, $mdp);
			$this->unModele->setTable("produit");
		}
		
		public function selectAll()
		{
			return $this->unModele->selectAll();
			
		}
		public function selectWhere ($champs, $where) {
			return $this->unModele->selectWhere($champs, $where);
		}
		
		public function insert($tab){
			$this->unModele->insert($tab);
		}
		
		public function delete ($where) {
			$this->unModele->delete($where);
		}
		
		public function update($tab, $where) {
			$this->unModele->update($tab,$where);
		}
	}
$unControleur = new Control_produit("localhost","bdd_ppe","root","");
$donnees = $unControleur->selectAll();





require './Vue/vue_boutique.php';

?>