<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
    <?php

    require('db.php');
    // Requête SQL pour sélectionner tous les étudiants
    $selectSql = "SELECT * FROM etudiant";
    // Préparation de la requête
    $selectStmt = $db->prepare($selectSql);

    // Exécution de la requête
    $selectStmt->execute(); // Notez la correction ici

    // Récupération des résultats sous forme d'objet stdClass
    $etudiants = $selectStmt->fetchAll(PDO::FETCH_OBJ);

    // Vérification des résultats
    if ($etudiants) {
        // Pour parcourir les résultats et les afficher, par exemple :
        echo '<table class="table table-striped">';
        echo '<thead class="thead-dark">';
        echo '<tr>';
        echo '<th>Matricule</th>';
        echo '<th>Nom</th>';
        echo '<th>Prénom</th>';
        echo '<th>Sexe</th>';
        echo '<th>Date de Naissance</th>';
        echo '<th>Téléphone</th>';
        echo '<th>Actions</th>'; // Nouvelle colonne pour les boutons
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        foreach ($etudiants as $etudiant) {
            echo '<tr>';
            echo '<td>' . $etudiant->matricule . '</td>';
            echo '<td>' . $etudiant->nom . '</td>';
            echo '<td>' . $etudiant->prenom . '</td>';
            echo '<td>' . $etudiant->sexe . '</td>';
            echo '<td>' . $etudiant->date_naissance . '</td>';
            echo '<td>' . $etudiant->telephone . '</td>';
            // Ajout des boutons de modification et de suppression
            echo '<td>';
            echo '<a href="modifier_etudiant.php?id=' . $etudiant->id . '" class="btn btn-primary">Modifier</a>';
            echo ' <a href="supprimer_etudiant.php?id=' . $etudiant->id . '" class= "btn btn-danger">Supprimer</a>';

            echo '</td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
    }

    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>