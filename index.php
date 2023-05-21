<!DOCTYPE html>
<html>

<head>
    <title>Ma page web</title>
</head>

<?php

?>

<body>
    <h1>Bienvenue sur ma page web!</h1>

    <form action="https://cloudcomputingyar.azurewebsites.net/checkCreationCompte.php" method="POST">
        <!-- INPUT IDENTIFIANT -->
        <div class="form-group">
            <label>Adresse Email</label>
            <input type="email" class="form-control input_user" placeholder="Entrer votre nom d'utilisateur" name="identifiant" required>
        </div>
        <!-- INPUT MOT DE PASSE -->
        <div class="form-group">
            <label>Mot de Passe</label>
            <input type="password" class="form-control input_pass" placeholder="Entrer votre mot de passe" name="mot_de_passe" required>
        </div>
        <!-- INPUT MOT DE PASSE -->
        <div class="form-group">
            <label>Vérification Mot de Passe</label>
            <input type="password" class="form-control input_pass" placeholder="Entrer votre mot de passe" name="verification_mot_de_passe" required>
        </div>
        <!-- INPUT PRENOM -->
        <div class="form-group">
            <label>Prénom</label>
            <input type="text" class="form-control input_prenom" placeholder="Entrer votre prénom" name="prenom" required>
        </div>
        <!-- INPUT NOM -->
        <div class="form-group">
            <label>Nom</label>
            <input type="text" class="form-control input_nom" placeholder="Entrer votre nom" name="nom" required>
        </div>
        <!-- MESSAGE ERREUR -->
        <div class="d-flex justify-content-center mt-3 login_container">
            <?php
            if (isset($_GET['erreur'])) {
                echo ($_GET['erreur']);
            }
            ?>
        </div>
        <div class="form-group">
            <button type="submit" name="button" class="btn btn-primary" value='LOGIN'>Créer</button>
        </div>
    </form>

    <?php
    // Code PHP ici
    ?>

</body>

</html>
