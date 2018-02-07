<?php

require "controleur/controleur.php";

require "header.php";


$page = isset($_GET['page']) ? $_GET['page'] :0;

//instanciation de la classe controleur
$unC = new controleur("localhost" ,"root" ,"","bdd_ppe");

switch ($page) {

  case 0:
    include("Controleur/C_Ac.php");
  break;
  
  case 1: 
    include("Controleur/Control_boutique.php");
  break;

  case 2:
    include("Controleur/Control_formation.php");
  break;

  case 3 :
    include("Controleur/Control_panier.php");
  break;

  case 4 :
    include("Controleur/Control_inscription.php");
  break;

  case 5 :
    include("Controleur/Control_co.php");
  break;

  case 6 :
    include("Controleur/Control_apropos.php");
  break;

  case 7 :
    include("Controleur/Control_contact.php");
  break;

  case 8 :
    include("Controleur/Control_inscripFormation.php");
  break;

  case 9 :
    include("Controleur/Control_log.php");
  break;

  case 10 :
    include("Controleur/Control_essaims.php");
  break;
}

  require "footer.php";
?>