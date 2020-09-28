
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>nouveau etudiant </title>
</head>
<body>
  <div class="container">
  <div class="jumbotron text-center">
    <p class="display-4">Recherche Etudiant</p>
     <br>
    <a href="indexEtud.php">
    <button type="button" class="btn btn-info">
        <i class="fas fa-home">&nbsp;Retour à l'accueil</i>
    </button>
    </a>    
    <br><br>
  </div>
   <form method="post" action='rechercheEtud_action.php'>
       <div class="form-group">
        <label for="champ">Critere</label>
        <select class="form-control" name="champ" id="champ">
  <option name="code"> CodeEtudiant </option>
      <option name="nom"> Nom </option>
      <option name="prenom" selected> Prenom </option>
      <option name="adresse"> Adresse </option>
      <option name="classe"> Classe </option>
      </select>

  <label for="Valeur">Valeur</label>

        <input type="text" name="Valeur" id="Valeur" class="form-control" placeholder="Saisir une Valeur">
      
      <input type="submit" class="btn btn-info form-control" value="Recherche" />
      <input type="reset" class="btn btn-warning form-control" value="Annuler">
      </form>  
  </div>
</body>
</html>s