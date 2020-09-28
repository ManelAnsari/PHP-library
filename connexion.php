<?php
$idcon=mysql_connect("localhost" ,"root", "")or die (mysql_error());
if($idcon)
{
 echo "Connexion réussite <br/>" ;
 $okbd=mysql_select_db("biblio");
 if($okbd==TRUE)
 echo "<br/>Base correcte <br/>";
 else
 echo "<br/>Base incorrect <br/>";
}
else
 echo "Erreur de connexion avec le serveur:<br/>";
?> 
