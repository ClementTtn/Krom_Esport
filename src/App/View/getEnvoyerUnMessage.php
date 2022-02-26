<!-- Formulaire de contact -->
<div class="formulaire">
    <form id="formulaire" enctype="multipart/form-data" method="post" action="contact">
        <p>
            <label for="mail">Votre adresse mail :</label>
            <input type="email" id="mail" name="mail" required/>
        </p>

        <p>
            <label for="message">Votre message :</label>
            <textarea id="message" name="message" required> </textarea>
        </p>

        <p class="bouton">
            <input type="submit" value="Envoyer" name="send"/>
        </p>
    </form>

    <!-- Confirmation de l'envoi du mail -->
    <?php if(isset($message_systeme)) : ?>
        <p class="message_client"><?=$message_systeme?></p>
    <?php endif ; ?>
</div>