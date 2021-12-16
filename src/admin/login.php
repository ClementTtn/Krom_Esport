<?php
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE); //Permet de cacher la notice qui informe du doublon de session_start() avec ce fichier et header.php

include '../connexion.php';
$connexion=connexionBd();

if(isset($_POST["send"])) {
    if (isset($_POST['mail']) && isset($_POST['mdp'])) {
        $mail = htmlspecialchars($_POST['mail']);
        $mdp = hash('sha256', $_POST['mdp']);

        //Requête pour vérifier que les informations de connexions sont présentes dans la bdd.
        $req_verif_admin = $connexion->prepare("SELECT COUNT(*) AS count FROM admin WHERE mail = :mail AND mdp = :mdp ");
        $req_verif_admin->bindParam(":mail", $mail);
        $req_verif_admin->bindParam(":mdp", $mdp);
        $req_verif_admin->execute();
        $login_admin = $req_verif_admin->fetch(PDO::FETCH_OBJ);

        //Vérification de la requête
        if ($login_admin->count == 1) {
            $login_admin = $connexion->prepare("SELECT id_admin, prenom, nom FROM admin WHERE mail = :mail AND mdp = :mdp");
            $login_admin->bindParam(":mail", $mail);
            $login_admin->bindParam(":mdp", $mdp);
            $login_admin->execute();
            $login_admin = $login_admin->fetch(PDO::FETCH_OBJ);

            //Variables de la session
            $_SESSION['id_admin'] = $login_admin->id_admin;
            $_SESSION['prenom_admin'] = $login_admin->prenom;
            $_SESSION['nom_admin'] = $login_admin->nom;

            // Redirection de l'utilisateur vers index.php
            header('location: index.php');
        } else {
            $informations_incorrectes = "Identifiant ou mot de passe incorrect.";
        }
    }
}
else {}

foreach( $_POST as $cle => $valeur){
    $value[$cle] = htmlspecialchars($valeur);
}

require 'header_admin.php';
?>

<main>
    <h2 class="h2_sous_nav">Connexion à votre compte administrateur</h2>
    <div class="formulaire">

        <form action="login.php" method="post">
            <fieldset>
                <p>
                    <label for="mail">Identifiant</label> <br>
                    <input <?php if(!empty($value['mail'])) :?>value='<?=$value['mail']?>' <?php endif ; ?>   type="email" id="mail" name="mail" placeholder="adresse.email@exemple.com" required>
                </p>

                <p>
                    <label for="mdp"><p>Mot de passe</p>
                <input type="password" id="mdp" name="mdp" placeholder="Mot de passe" required>

                <img src="../img/eye.svg" alt="eye" class="cache">
                <img src="../img/eye-off.svg" alt="eye-off" class="visible" style="display: none">
                </label>
                </p>

                <?php if( isset($informations_incorrectes)) :?>

                    <p class="informations_incorrectes"><?=$informations_incorrectes?></p>

                <?php endif ; ?>
            </fieldset>

            <p class="bouton">
                <input type="submit" value="Se connecter" name="send"/>
            </p>
        </form>

        <a href="../index.php">Accueil</a>
    </div>
</main>

<script src="js/main.js"></script>
<script src="js/mdp.js"></script>