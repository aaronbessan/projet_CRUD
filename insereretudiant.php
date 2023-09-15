<?php
require('db.php');
if (isset($_POST['enregistrement'])) {
    $matricule = trim(htmlspecialchars($_POST['matricule']));
    $nom = trim(htmlspecialchars($_POST['nom']));
    $prenom = trim(htmlspecialchars($_POST['prenom']));
    $sexe = trim(htmlspecialchars($_POST['sexe']));
    $date_naissance = trim(htmlspecialchars($_POST['date_naissance']));
    $telephone = trim(htmlspecialchars($_POST['telephone']));



    $insertSql = "INSERT INTO etudiant (matricule, nom, prenom,sexe,date_naissance,telephone) VALUES (:matricule, :nom, :prenom,:sexe,:date_naissance,:telephone)";
    $insertStmt = $db->prepare($insertSql);

    $feedback = $insertStmt->execute([
        ':matricule' => $matricule,
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':sexe' => $sexe,
        ':date_naissance' => $date_naissance,
        ':telephone' => $telephone


    ]);

    if ($feedback) {
        header('Location:afficheretudiant.php');
    } else {
        echo json_encode(['error' => 'Erreur lors de l\'enregistrement.']);
    }
}
