<?php include ("connexion.php"); ?>
 <?php
    $idcon=mysql_connect("localhost","root","");
   $champ=$_POST['champ'];
	$valeur=$_POST['valeur'];
	$requet="select * from livre where $champ = $valeur";
	$res=mysql_query($requet,$idcon);
     $nbr=mysql_num_rows($res);
	//$nbr=mysql_num_rows($res);
	if($nbr==0)
		echo "<h2><i> le livre rechercher n existe pas dans la base </i></h2><br/>";
	else
		echo "<h2> le livre rechercher existe  dans la base </h2><br/>";
 ?>
<?php include ("deconnexion.php"); ?>
