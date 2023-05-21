<?php
function call_bdd()
{
    // On essaye d'appeler la Base de Donnée
    try {
        $bdd = new PDO(
            mysql:host=c.bddyar2023.postgres.database.azure.com,
            port=5432,
            dbname=citus,
            user=citus,
            password=bddyar2023!,
            sslmode=require,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    return $bdd;
}

// On essaie d'appeler la Base de Donnée
$bdd = call_bdd();

?>

<body>
    <?php
    // On test si les valeurs entrées dans le formulaire ne sont pas nul
    if (isset($_POST['identifiant']) && $_POST['identifiant'] != "" && isset($_POST['mot_de_passe']) && $_POST['mot_de_passe'] != "" && isset($_POST['prenom']) && $_POST['prenom'] != "" && isset($_POST['nom']) && $_POST['nom'] != "") {
        if ($_POST['mot_de_passe'] != $_POST['verification_mot_de_passe']) {
            header('Location: https://cloudcomputingyar.azurewebsites.net/index.php?erreur=' . 'Mot de passe différent' . '');
            die();
        }
        $identifiant_compte = $_POST['identifiant'];
        $mot_de_passe_compte = $_POST['mot_de_passe'];
        $prenom_compte = $_POST['prenom'];
        $nom_compte = $_POST['nom'];

        try {
            $req = $bdd->prepare("INSERT INTO administrateur(admin_identifiant, admin_mot_de_passe, admin_prenom, admin_nom) VALUES (:identifiant, :mot_de_passe, :prenom, :nom)");
            $req->execute(array('identifiant' => $identifiant_compte, 'mot_de_passe' => password_hash($_POST['mot_de_passe'], PASSWORD_BCRYPT), 'prenom' => $prenom_compte, 'nom' => $nom_compte));
        } catch (Exception $e) {
            header('Location: https://cloudcomputingyar.azurewebsites.net/index.php?erreur=' . $e->getMessage() . '');
            die();
        }

        header('Location: https://cloudcomputingyar.azurewebsites.net/index.php');
    }
    ?>
</body>
