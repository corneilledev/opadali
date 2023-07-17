<?php
// Configuration de la base de données
$hostname = 'localhost'; // Hôte de la base de données
$username = 'root'; // Nom d'utilisateur de la base de données
$password = ''; // Mot de passe de la base de données
$database = 'opadalia'; // Nom de la base de données

// Connexion à la base de données
$conn = mysqli_connect($hostname, $username, $password, $database);

// Vérifier la connexion
if (!$conn) {
    die("Échec de la connexion à la base de données : " . mysqli_connect_error());
}
?>
