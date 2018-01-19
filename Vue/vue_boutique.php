<?php require 'header.php';
?>

  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
      <h1>Boutique</h1>


     <?php 
    //Boucle pour afficher les images
     while ($donnees = $reponse->fetch()) {
      
      ?>
      <div class="col-sm-3">
        <?php
          echo '<img src="../images/Produit/'.$donnees['IMGP'].'.jpg" width="150" height="150" class="d-inline-block align-top" alt=""></br></br><label>'.$donnees['PRIXP'].'euro </label><button>Ajouter au panier</button>';
        
        echo "</div>";
      }
      ?>    
       <hr>
    </div>
    <div class="col-sm-2 sidenav">
      <div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>
    </div>
  </div>
</div>

<?php
  require '../footer.php';
?>