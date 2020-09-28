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
    <p class="display-4">Emprunt livre</p>
     <br>
    <a href="indexEmp.php">
    <button type="button" class="btn btn-info">
        <i class="fas fa-home">&nbsp;Retour à l'accueil</i>
    </button>
    </a>    
    <br><br>
  </div>
  <fieldset>
    <legend> Veuillez remplir les champs suivantes </legend>

    <form method="post" action='EmpLivre_action.php' >
       <div class="form-group">
        <label for="nom">Code Emprunt</label>
        <input type="text" name="CODEM" id="CODEM" class="form-control" placeholder="Saisir code Emprunt">
      </div>
      
  <div class="form-group">
        <label for="DateEmprunt">Date Emprunt</label>
        <input type="date" name="DateEmprunt" id="DateEmprunt" class="form-control" placeholder="date('Y-m-d')">
      </div>
    


      <div class="form-group">
        <label for="nom">Code Etudiant</label>
        <input type="text" name="CodeEtudiant" id="CodeEtudiant" class="form-control" placeholder="Saisir votre Code ">
      </div>
      <div class="form-group">
        <label for="prenom">Code Livre</label>
        <input type="text" name="CodeLivre" id="CodeLivre" class="form-control" placeholder="Saisir code livre">
      </div>
      
    
      <button type="submit" name="" id="" class="btn btn-primary btn-lg btn-block">Valider</button>
      <button type="reset" name="" id="" class="btn btn-warning btn-lg btn-block">Annuler</button>
    </form>
  </fieldset>    
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>