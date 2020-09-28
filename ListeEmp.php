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
		<?php
$idcon=mysql_connect("localhost","root","");
$okbd=mysql_select_db("biblio",$idcon);
$requet="select * from emprunter";
$res=mysql_query($requet,$idcon);
?>
<a href="indexEmp.php">
   
 <p class="display-4 text-center p-3 mb-2 bg-primary text-white" > liste des Emprunts </p>
 <br>
    <a href="indexEmp.php">
    <button type="button" class="btn btn-info">
        <i class="fas fa-home">&nbsp;Retour à l'accueil</i>
    </button>
    </a>    
    <br><br>
<table class="table" border="1" >
	<thead class="thead-light">
<tr>
 <th scope="col"> CodeEmprunt</th>
 <th scope="col"> Date </th>
 <th scope="col"> codeEtudiant</th>
 <th scope="col"> codeLivre</th>
 
</tr>
</thead>
<?php
while($ligne=mysql_fetch_array($res))
{
?>
<tr>
 <td><?php echo $ligne[0]; ?></td>
 <td><?php echo $ligne[1]; ?></td>
 <td><?php echo $ligne[2]; ?></td>
 <td><?php echo $ligne[3]; ?></td>

</tr>
<?php
}
mysql_close($idcon);
?>
</table>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>