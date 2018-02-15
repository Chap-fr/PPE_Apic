


<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-md-2 sidenav">
    </div>
      <div class="col-sm-8 text-left"> 
      <h1>Boutique</h1>
       <hr>
       
          <div class="container">    
            <div class="row">
               <?php
                foreach ($donnees as $uneDonnees ) 
          
                {
                  echo '<div class="col-md-4">
                    <div class="panel panel-primary">
                      <div class="panel-heading">'.$uneDonnees['NOMP'].'</div>
                      <div class="panel-body"><img src="./images/Produit/'.$uneDonnees['IMG'].'".png class="img-responsive" style="width:100px;" alt="Image"></div>
                      <div class="panel-footer">'.$uneDonnees['LIBILLR'].$uneDonnees['PRIXP'].'euro  </div>
                    </div>
                  </div>';

                  
                        }
                  ?>   
                </div>
              </div>
    

            </div>
          </div>
        </div>
        <div class="col-md-2 sidenav">
    

      
        </div>
    </div>
</div>
</div>