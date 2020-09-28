<?php include ("connexion.php"); ?>
<?php
$CodeLivre=$_POST['CodeLivre'];
$requet="delete from livre where CodeLivre= $CodeLivre";
$ok=mysql_query($requet,$idcon);
if(!(mysql_query($requet,$idcon)))
 echo "Problème de suppression <br/>";
else{
 echo"<script>alert('suppression effectuèe avec  succes')</script>";     
 echo "Suppression effectuée avec succes <br/>";
}
?>
<?php include ("deconnexion.php"); ?> 