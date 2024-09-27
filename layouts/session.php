<?php
// Initialize the session
session_start();

$nom_user = $_SESSION["nom_user"];
$prenom_user = $_SESSION["prenom_user"]; 

// Check if the user is logged in, if not then redirect him to login page
// if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//     header("location: auth-signin-basic.php");
//     exit;
// }
?>