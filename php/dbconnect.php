<?php

// Établir une connexion avec le serveur de base de données
$servername = "database";
$username = "root";
$password = "root";
$dbname = "person";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connexion échouée : " . $e->getMessage();
}