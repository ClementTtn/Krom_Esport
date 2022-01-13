<div class="formulaire">
    <form id="formulaire" enctype="multipart/form-data" method="post" action="info.php">
        <p>
            <label for="mail">Votre adresse mail</label>
            <input type="email" id="mail" name="mail" required/>
        </p>

        <p>
            <label for="message">Votre message</label>
            <textarea id="message" name="message" required> </textarea>
        </p>

        <p class="bouton">
            <input type="submit" value="Envoyer" name="send"/>
        </p>
    </form>

    <?php if(isset($message_systeme)) : ?>
        <a class="message_client"><?=$message_systeme?></a>
    <?php endif ; ?>
</div>