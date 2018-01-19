
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
      <h1>Se connecter</h1>
      <form action="" method="POST">
      	<input type="text" name="email" placeholder="Email"></br>
     	 <input type="text" name="mdp" placeholder="Mot de passe"></br>
      	<button type="submit" name="button">Connecter</button>
      	<p>Vous n'avez pas de compte ?</p>
      	 <a type="submit" href='../Controleur/Control_compte.php'>S'inscrire</a>
      </form>
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

<p></p>
<?php
  require '../footer.php';
?>