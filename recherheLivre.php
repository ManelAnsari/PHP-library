
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 


</head>
<body>
                      <div class="container">
                        <div class="jumbotron text-center">
                  <p class="display-4">Rechercher Livre</p>
                      <br>
                  <a href="indexLivre.php">
  
                      <button type="button" class="btn btn-info">
                        <i class="fas fa-home">&nbsp;Retour à l'accueil</i>
                     </button>
                  </a>    
                <br><br>
                    </div>



                    <form method="post" action='rechercheLivre_action.php' >
                        <div class="form-group">
                         <label for="champ">Critere</label>
                            <select class="form-control" name="champ" id="champ">
                                 <option value="CodeLivre" >CodeLivre</option>
                                  <option value="Titre">Titre</option>
                                   <option value="Auteur">Auteur</option>
                                   <option value="DateEdition">DateEdition</option>
       
                             </select><br>
                       

                    <label for="valeur">valeur</label>
                     <input type="text" name="valeur"  class="form-control"  placeholder="Saisir une valeur">


                <input type="submit" class="btn btn-info form-control" value="Rechercher" />
                <input type="reset" class="btn btn-warning form-control" value="Annuler">
     </form>  
       </div>
        </body>
         </html>