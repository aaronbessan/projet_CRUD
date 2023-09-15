<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<!DOCTYPE html>
<html>

<div class="container">
    <h1>Enregistrement d'un étudiant</h1>
    <form method="POST" action="insereretudiant.php">
        <div class="form-group row">
            <label for="matricule" class="col-sm-2 col-form-label">Matricule :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="matricule" name="matricule">
            </div>
        </div>
        <div class="form-group row">
            <label for="nom" class="col-sm-2 col-form-label">Nom :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nom" name="nom">
            </div>
        </div>
        <div class="form-group row">
            <label for="prenom" class="col-sm-2 col-form-label">Prénom :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="prenom" name="prenom">
            </div>
        </div>
        <div class="form-group row">
            <label for="sexe" class="col-sm-2 col-form-label">Sexe :</label>
            <div class="col-sm-10">
                <select class="form-control" id="sexe" name="sexe">
                    <option value="Masculin">Masculin</option>
                    <option value="Feminin">Feminin</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="date_naissance" class="col-sm-2 col-form-label">Date de naissance :</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="date_naissance" name="date_naissance">
            </div>
        </div>
        <div class="form-group row">
            <label for="telephone" class="col-sm-2 col-form-label">Téléphone :</label>
            <div class="col-sm-10">
                <input type="tel" class="form-control" id="telephone" name="telephone">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button name="enregistrement" type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </div>
    </form>
</div>
<!-- Inclure Bootstrap JS (optionnel) -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>




</body>

</html>