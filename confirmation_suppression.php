<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Confirmation de suppression</title>
    <!-- Inclure le lien vers la feuille de style Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Inclure un lien vers une feuille de style CSS personnalisée -->
</head>

<body>
    <div class="container mt-5">
        <div class="alert alert-success custom-alert" role="alert">
            <h1 class="display-4">Suppression réussie</h1>
            <p class="lead"> L'étudiant a été supprimé de la base de données avec succès.</p>
            <p>
                <a href="afficheretudiant.php" class="btn btn-primary">Retour à la liste des étudiants</a>
            </p>
        </div>
    </div>

    <!-- Inclure les scripts Bootstrap (facultatif, mais recommandé) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>