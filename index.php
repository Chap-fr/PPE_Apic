<?php
require "controleur/controleur.php";
require "header.php";


$page = isset($_GET['page']) ? $_GET['page'] :0;

$unC = new controleur("localhost" ,"root" ,"","bdd_ppe");

switch ($page) {

  case 1: 
    include("Controleur/c_boutique.php");
  break;

  case 2:
    include("Controleur/c_formation.php");
  break;
  case 3 :
    include("Controleur/c_panier.php");
  break;

  case 4 :
    include("Controleur/c_inscription.php");
  break;

  case 5 :
    include("Controleur/c_connexion.php");
  break;

  case 6 :
    include("Controleur/c_apropos.php");
  break;

  case 7 :
    include("Controleur/c_contact.php");
  break;

  case 8 :
    include("Controleur/c_inscripFormation.php");
  break;

  case 9 :
    include("Controleur/c_log.php");
  break;

  case 10 :
    include("Controleur/c_essaims.php");
  break;
}

  require "footer.php";
?>
