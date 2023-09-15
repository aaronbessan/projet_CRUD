<?php
require('db.php');
$etudiant_id = $_GET['id'];
$deleteSql = "delete from etudiant where id=?";
$deleteStmt = $db->prepare($deleteSql);
$feedback = $deleteStmt->execute([$etudiant_id]);

if ($feedback) {
    // Suppression réussie, vous pouvez rediriger l'utilisateur vers une page de confirmation
    header('Location: confirmation_suppression.php');
    exit;
} else {
    // Gestion des erreurs en cas d'échec de la suppression
    echo "Erreur lors de la suppression de l'étudiant.";
}
