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
      <h1>Contact</h1>
      <p>Me contacter :</p>
      <form method="POST">
      	<input type="text" name="nom" placeholder="Nom"></br>
      	<input type="text" name="email" placeholder="Email"></br>
      	<input type="text" name="objet" placeholder="Objet"></br>
      	<textarea type="text" name="zonetext">
      		
      	</textarea></br></br>
      	<div class ="">
			<button type="submit" class="btn btn-info" name="envoyer" value="envoyer">Envoyer</button>
		</div>
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

<?php
  require '../footer.php';
?>