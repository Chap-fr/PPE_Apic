<?php
require "controleur/controleur.php";
require "header.php";


$page = isset($_GET['page']) ? $_GET['page'] :0;

//instanciation de la classe controleur
$unC = new controleur("localhost" ,"root" ,"","bdd_ppe");

switch ($page) {

  case 1: 
    include("Vue/vue_boutique.php");
  break;

  case 2:
    include("Vue/vue_formation.php");
  break;

  case 3 :
    include("Vue/vue_panier.php");
  break;

  case 4 :
    include("Vue/vue_inscription.php");
  break;

  case 5 :
    include("Vue/vue_connexion.php");
  break;

  case 6 :
    include("Vue/vue_apropos.php");
  break;

  case 7 :
    include("Vue/vue_contact.php");
  break;

  case 8 :
    include("Vue/vue_inscripFormation.php");
  break;

  case 9 :
    include("Vue/vue_log.php");
  break;

  case 10 :
    include("Vue/vue_essaims.php");
  break;
}

  require "footer.php";
?>