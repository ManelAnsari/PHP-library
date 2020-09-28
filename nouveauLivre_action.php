<?php include ("connexion.php");?> 
 <?php  
  $CodeLivre=$_POST['CodeLivre'];  
  $Titre=$_POST['Titre'];   
  $Auteur=$_POST['Auteur']; 
  
  $DateEdition=$_POST['DateEdition'];

    
  $requet="insert into livre values('$CodeLivre','$Titre','$Auteur','$DateEdition=y-m-d')"; 
  
  if(!(mysql_query($requet,$idcon)))   

  echo "Problème d'insertion ou bien le CodeLivre est deja existe<br/>"; 
  else  {
  echo"<script>alert('insertion effectuèe avec  succes')</script>";     
  echo "Insertion effectuée avec succes <br/>";}  ?> 

  <?php include ("deconnexion.php"); ?> 