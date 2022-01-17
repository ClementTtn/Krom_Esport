<h2 class="h2_sous_nav_admin">Connexion à votre l'espace administrateur</h2>
<div class='formulaire_admin'>

    <div class="formulaire">

        <form action="login_admin.php" method="post">
            <fieldset>
                <p>
                    <label for="mail">Identifiant</label> <br>
                    <input <?php if(!empty($value['mail'])) :?>value='<?=$value['mail']?>' <?php endif ; ?>   type="email" id="mail" name="mail" placeholder="adresse.email@exemple.com" required>
                </p>

                <p>
                    <label for="mdp">Mot de passe</label>
                    <input type="password" id="mdp" name="mdp" placeholder="Mot de passe" required>

                    <img src="../img/formulaire%20/eye.svg" alt="eye" class="cache">
                    <img src="../img/formulaire%20/eye-off.svg" alt="eye-off" class="visible" style="display: none">

                    <?php if( isset($informations_incorrectes)) :?>

                <p class="informations_incorrectes"><?=$informations_incorrectes?></p>

                <?php endif ; ?>
            </fieldset>

            <p class="bouton">
                <input type="submit" value="Se connecter" name="send"/>
            </p>
        </form>

        <a class="redirection_formulaire" href="../index.php">Retourner vers l'accueil</a>
    </div>

</div>