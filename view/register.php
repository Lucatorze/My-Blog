<?php require_once('controller/registerController.php'); ?>

<section>

    <form id="registerForm" method="POST" action="index.php?pages=register">
        <fieldset>
            <label for="firstname">Prénom</label>
            <input type="text" name="firstname" id="firstname" placeholder="Prénom" required><br><br>

            <label for="lastname">Nom</label>
            <input type="text" name="lastname" id="lastname" placeholder="Nom" required><br><br>

            <label for="nickname">Pseudo</label>
            <input type="text" name="nickname" id="nickname" placeholder="Pseudo" required><br><br>

            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" required><br><br>

            <label for="password2">Vérification du mot de passe</label>
            <input type="password" name="password2" id="password2" required><br><br>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="sylvain.joly123@gmail.com"><br><br>

            <input type="submit" name="btnSubmit" value="Envoyer" id="btnSubmit">
        </fieldset>
    </form>

</section>