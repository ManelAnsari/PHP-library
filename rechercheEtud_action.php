<?php include ("connexion.php"); ?>
 <?php
    $idcon=mysql_connect("localhost","root","");
    $champ=$_POST['champ'];
	$valeur=$_POST['valeur'];
	$requet="select* from etudiant where $champ = $valeur";
	$res=mysql_query($requet,$idcon);
     $nbr=mysql_num_rows($res);
	//$nbr=mysql_query($requet,$idcon);
	
	if($nbr==0)
		echo "<h2><i> l etudiant rechercher n existe pas dans la base </i></h2><br/>";
	else
		echo "<h2> l etudiant rechercher existe  dans la base </h2><br/>";
 ?>
<?php include ("deconnexion.php"); ?>
