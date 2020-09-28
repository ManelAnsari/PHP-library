<?php include ("connexion.php"); ?>
<?php
$code=$_POST['CodeEtudiant'];
$requet="delete from etudiant where CodeEtudiant = $code";
$ok=mysql_query($requet,$idcon);
if($ok==FALSE)
 echo "Problème de suppression <br/>";
else
 echo"<script>alert('Suppression effectuèe avec succes')</script>";     
 echo "Suppression effectuée avec succes <br/>";

?>
<?php include ("deconnexion.php"); ?> 