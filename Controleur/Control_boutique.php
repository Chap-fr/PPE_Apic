<?php
include '../Modele/cobdd.php';

$requ = "SELECT  * FROM Produit";
$reponse = $bdd->query($requ);




require '../Vue/vue_boutique.php';
?>