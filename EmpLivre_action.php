<?php include (
  "connexion.php");?> 
 <?php  
 $CODEM=$_POST['CODEM'];
   $DateEmprunt=$_POST['DateEmprunt'] ;
    $CodeEtudiant=$_POST['CodeEtudiant'];  
      $CodeLivre=$_POST['CodeLivre'];  
 
        $requet="insert into emprunter (CODEM,DateEmprunt,CodeEtudiant,CodeLivre)values('$CODEM','$DateEmprunt=y-m-d','$CodeEtudiant','$CodeLivre')"; 
        $ok=mysql_query($requet,$idcon);  
           if($ok==FALSE) 
            echo "Problème d'emprunter un livre verifier les codes <br/>"; 
               else {  
             //echo"<script>alert ('l'emprunt de livre effectuèe avec succes')</script>";   
                 echo "l'emprunt de livre effectuée avec succes <br/>";}?> 
             <?php include ("deconnexion.php"); 
             ?> 