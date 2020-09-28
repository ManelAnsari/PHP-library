<?php include ("connexion.php"); ?>
<?php
    $CodeLivre=$_POST['CodeLivre'];
	$Titre=$_POST['Titre'];
	$Auteur=$_POST['Auteur'];
	$DateEdition=$_POST['DateEdition'];
	
	$requet="update livre set Titre='$Titre', Auteur='$Auteur', DateEdition='$DateEdition' where CodeLivre='CodeLivre' ";
 
  $ok=mysql_query($requet,$idcon);
  if($ok==FALSE)
		echo "Probleme de modification <br/>";
	else 
		echo"<script>alert('Modification effectuèe avec  succes')</script>";     
		echo "Modification effectuer avec succes <br/>";

  ?>
  
<?php include ("deconnexion.php"); ?>