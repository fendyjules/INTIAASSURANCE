<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
try{
    $bdd = new PDO('mysql:host=localhost;dbname=intiadata','root',''); }   
 
  catch (Exception $e)
    {
      die('Erreur : ' . $e->getMessage());
    }
?>