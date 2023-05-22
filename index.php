<!DOCTYPE html>
<html>

<head>
    <title>Ma page web</title>
</head>

<?php

?>

<body>
    <h1>Bienvenue sur ma page web!</h1>

    <form action="checkCreationCompte.php" method="POST">
        <!-- INPUT IDENTIFIANT -->
        <div class="form-group">
            <label>Adresse Email</label>
            <input type="email" class="form-control input_user" placeholder="email" name="identifiant" required>
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
    //     function call_bdd()
    //     {
    //         // On essaye d'appeler la Base de Donnée
    //         try {
    //             $bdd = new PDO(
    //                 mysql:host=c.bddyar2023.postgres.database.azure.com,
    //                 port=5432,
    //                 dbname=citus,
    //                 user=citus,
    //                 password=bddyar2023!,
    //                 sslmode=require,
    //                 [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    //             );
    //         } catch (Exception $e) {
    //             die('Erreur : ' . $e->getMessage());
    //         }

    //         return $bdd;
    //     }

    //     // On essaie d'appeler la Base de Donnée
    //     $bdd = call_bdd();

    //     // On test si les valeurs entrées dans le formulaire ne sont pas nul
    //     if (isset($_POST['identifiant']) && $_POST['identifiant'] != "" && isset($_POST['mot_de_passe']) && $_POST['mot_de_passe'] != "" && isset($_POST['prenom']) && $_POST['prenom'] != "" && isset($_POST['nom']) && $_POST['nom'] != "") {
    //         if ($_POST['mot_de_passe'] != $_POST['verification_mot_de_passe']) {
    //             header('Location: ./index.php?erreur=' . 'Mot de passe différent' . '');
    //             die();
    //         }
    //         $identifiant_compte = $_POST['identifiant'];
    //         $mot_de_passe_compte = $_POST['mot_de_passe'];
    //         $prenom_compte = $_POST['prenom'];
    //         $nom_compte = $_POST['nom'];

    //         try {
    //             $req = $bdd->prepare("INSERT INTO administrateur(admin_identifiant, admin_mot_de_passe, admin_prenom, admin_nom) VALUES (:identifiant, :mot_de_passe, :prenom, :nom)");
    //             $req->execute(array('identifiant' => $identifiant_compte, 'mot_de_passe' => password_hash($_POST['mot_de_passe'], PASSWORD_BCRYPT), 'prenom' => $prenom_compte, 'nom' => $nom_compte));
    //         } catch (Exception $e) {
    //             header('Location: ./index.php?erreur=' . $e->getMessage() . '');
    //             die();
    //         }

    //         header('Location: ./index.php');
    //     }
     ?>

</body> 
</html>
