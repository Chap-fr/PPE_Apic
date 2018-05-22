<?php
//require "controleur/controleur.php";
require "header.php";


$page = isset($_GET['page']) ? $_GET['page'] :0;

//$unC = new controleur("localhost" ,"root" ,"","bdd_ppe");

switch ($page) {

  case 1: 
    include("Controleur/c_home.php");
  break;

  case 2:
    include("Controleur/c_formation.php");
  break;
  case 3 :
    include("Controleur/c_catalogue.php");
  break;

  case 4:
    include("Controleur/c_contact.php");
  break;

  case 5:
    include("Controleur/c_monCompte.php");
  break;

  case 6:
    include("Controleur/c_connexion.php");
  break;

  case 7:
    include("Controleur/c_inscription.php");
  break;

}

  require "footer.php";
?>