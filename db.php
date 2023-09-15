<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=projet_etudiant', 'root', '');
} catch (PDOException $e) {
    die('Erreur :' . $e->getMessage());
}
