<?php
require('db.php');
if (isset($_POST['enregistrement'])) {
    $matricule = trim(htmlspecialchars($_POST['matricule']));
    $nom = trim(htmlspecialchars($_POST['nom']));
    $prenom = trim(htmlspecialchars($_POST['prenom']));
    $sexe = trim(htmlspecialchars($_POST['sexe']));
    $date_naissance = trim(htmlspecialchars($_POST['date_naissance']));
    $telephone = trim(htmlspecialchars($_POST['telephone']));
    $etudiant_id = $_POST['id'];

    $updateSql = "UPDATE etudiant SET matricule = ?, nom = ?, prenom = ?, sexe = ?, date_naissance = ?, telephone = ? WHERE id = ?";
    $updateStmt = $db->prepare($updateSql);

    $feedback = $updateStmt->execute([$matricule, $nom, $prenom, $sexe, $date_naissance, $telephone, $etudiant_id]);

    echo $feedback;
}
if ($feedback) {
    header('Location:afficheretudiant.php');
    exit;
} else {
    echo 'Erreur lors de la modification';
}
