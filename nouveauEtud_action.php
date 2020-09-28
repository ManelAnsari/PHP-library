<?php include ("connexion.php"); ?>
 <?php
    $CodeEtudiant=$_POST['CodeEtudiant'];
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $adresse=$_POST['adresse'];
  $Classe=$_POST['Classe'];
  
  $requet="insert into etudiant values ('$CodeEtudiant','$nom','$prenom','$adresse','$Classe')";
  $ok=mysql_query($requet,$idcon)	;
	if($ok==False){
		 echo"<script>alert('Probleme d'insertion le CodeEtudiant est deja existe')</script>";
	
		echo"Probleme d'insertion <br/>";
		
	}
	else {
		echo"<script>alert('Insertion effectuer avec succes')</script>";
		echo"Insertion effectuer avec succes <br/>";
		//header('location :essai/nouveauEtud.php');
}
  ?>
  
<?php include ("deconnexion.php"); ?>
