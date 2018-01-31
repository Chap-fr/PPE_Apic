<?php
  require "header.php";


$page = isset($_GET['page']) ? $_GET['page'] :0;

// if (isset($_GET['page'])){
//  $page = $_GET['page'];
// }else{
//  $page = 0;
// }

//instanciation de la classe controleur
$unC = new controleur("localhost" ,"root" ,"","bdd_ppe");

switch ($page) {

  case 1:
    /*$unC->setTable("candidat");
    $resultats = $unC->selectAll();*/
    include("./Vue/vueBoutique.php");
  break;

  case 2:
/*    $unC->setTable("etat");
    $resultats = $unC->selectAll();*/
    include("./Vue/vueFormation.php");
  break;


  case 3 :
    /*$unC->setTable("etatPermis");
    $resultats = $unC->selectAll();*/
    include("./Vue/vuePanier.php");
  break;


  case 4 :
    /*$unC->setTable("etatPermis");
    $resultats = $unC->selectAll();*/
    include("./Vue/vueInscription.php");
  break;

  case 5 :
    /*$unC->setTable("etatPermis");
    $resultats = $unC->selectAll();*/
    include("./Vue/vueConnexion.php");
  break;
}

  require "footer.php";
?>