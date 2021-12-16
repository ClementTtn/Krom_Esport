<?php
include '../connexion.php';
$connexion = connexionBd();

//Formulaire
if(isset($_POST["send"]))
{
    if (!(empty($_POST['mail']) && empty($_POST['mdp']) && empty($_POST['prenom']) && empty($_POST['nom']))) {
        $mail = htmlspecialchars($_POST['mail']);
        $mdp = hash('sha256', $_POST['mdp']);
        //$mdp = htmlspecialchars($_POST['mdp']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $nom = htmlspecialchars($_POST['nom']);

        //Hachage du mot de passe

        //Insertion des données du formulaire dans la table "article".
        $req_insertion_admin = "INSERT INTO admin (mail, mdp, prenom, nom) VALUES (:mail, :mdp, :prenom, :nom);";

        $req_inscription_admin = $connexion->prepare($req_insertion_admin);
        $req_inscription_admin->bindParam(':mail', $mail);
        $req_inscription_admin->bindParam(':mdp', $mdp);
        $req_inscription_admin->bindParam(':prenom', $prenom);
        $req_inscription_admin->bindParam(':nom', $nom);

        //Exécution de l'insertion
        $req_inscription_admin->execute();

        $message_systeme = "Nouvel administrateur ajouté au site.";
    }
}


require 'header_admin.php';
?>

<main>
    <h2 class="h2_sous_nav">Ajouter un administrateur</h2>
    <div class="formulaire">
        <form id="formulaire" enctype="multipart/form-data" method="post" action="ajout_admin.php">
            <p>
                <label for="mail">Adresse mail :</label>
                <input type="email" id="mail" name="mail" required/>
            </p>

            <p>
                <label for="mdp">Mot de passe :</label>
                <input type="password" id="mdp" name="mdp" required/>
            </p>

            <p>
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" required/>
            </p>

            <p>
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required/>
            </p>

            <p class="bouton">
                <input type="submit" value="Ajouter" name="send"/>
            </p>
        </form>

        <?php if(isset($message_systeme)) : ?>
            <a><?=$message_systeme?></a>
        <?php endif ; ?>

    </div>
</main>


<!-- Lien vers index.php -->
<div class="a_admin">
    <h3><a href="index.php">Acceuil administration</a></h3>
</div>

</body>