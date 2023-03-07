<?php

// Établir une connexion avec le serveur de base de données
$servername = "database";
$username = "root";
$password = "root";
$dbname = "person";

try {
    $dbPerson = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $dbPerson->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connexion échouée : " . $e->getMessage();
}