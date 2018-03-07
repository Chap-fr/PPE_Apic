    <?php 
    //Boucle pour afficher les images
     while ($donnees = $reponse->fetch()) {
         echo '<img src="../images/Produit/'.$donnees['IMGP'].'.jpg" width="150" height="150" class="d-inline-block align-top" alt=""></br></br>
          <label>'.$donnees['PRIXP'].'euro </label><button>Ajouter au panier</button>';
        
       echo "</div>";
      }
      ?>
    
    