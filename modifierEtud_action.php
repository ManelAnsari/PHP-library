<?php include ("connexion.php"); ?>
<?php
  $CodeEtudiant=$_POST['CodeEtudiant'];  
  $nom=$_POST['nom'];   
  $prenom=$_POST['prenom']; 
   $adresse=$_POST['adresse']; 
    $Classe=$_POST['Classe']; 
$requet="update etudiant set nom='$nom', prenom='$prenom',
adresse ='$adresse', Classe='$Classe' where CodeEtudiant='$CodeEtudiant'"; 
$ok=mysql_query($requet,$idcon);
if($ok==FALSE)
 echo "Problème de modification <br/>";
else
	echo"<script>alert('Modification effectuèe avec  succes')</script>";     
 echo "modification effectuée avec succes <br/>";
?>
<?php include ("deconnexion.php"); ?> 