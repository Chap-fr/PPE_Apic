<?php
include '../Modele/cobdd.php';

class Boutique{


public function setTableBoutique{



	$requete = "SELECT  * FROM Produit";
	$reponse = $bdd->query($requete);
	}

}
require '../Vue/vue_boutique.php';
?>