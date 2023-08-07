<?php
// Informations d'identification pour la base de données
$host = 'mysql-gestiondesclients.alwaysdata.net'; // Hôte du serveur de base de données
$db_name = 'gestiondesclients_test'; // Nom de la base de données
$username = '323121_test'; // Nom d'utilisateur de la base de données
$password = 'gestion'; // Mot de passe de la base de données
$db_port = 3306;
try {
    // Créer une instance de la classe PDO pour établir la connexion
    $db = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);

    // Configurer les options de PDO pour afficher les erreurs en mode développement
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Définir le jeu de caractères à UTF-8 pour prendre en charge les caractères spéciaux
    $db->exec("SET NAMES utf8");
} catch (PDOException $e) {
    // En cas d'erreur de connexion, afficher l'erreur et arrêter le script
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}