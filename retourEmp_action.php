<?php include ("connexion.php"); ?>
<?php
$code=$_POST['CODEM'];
$requet="delete from emprunter where CODEM=$code";
mysql_query($requet,$idcon);
if(!(mysql_query($requet,$idcon)))
 echo "Problème de retour <br/>";
else
	echo"<script>alert('Retour Emprunt effectuèe avec  succes')</script>";   
 echo "Retour effectuée avec succes <br/>";
?>
<?php include ("deconnexion.php"); ?> 
