<?php 
$servername = "localhost";
$username = "root";
$password = "";

// on tente d'etablir la connexion
try {
    $conn = new PDO("mysql:host=$servername;dbname=monoshop", $username, $password);

    // on definit le mode d'erreur de PDO sur Exeption
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} 

// on capture les exceptions si une exeption est lancee et on affiche les informations relatives a celle ci

catch (Exception $e) 
{
    echo "Erreur :" .$e->getMessage();
}
?>