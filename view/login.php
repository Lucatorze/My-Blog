<?php require_once("controller/loginController.php"); ?>

<section>

    <form id="loginForm" name="loginForm" method="post" action="index.php?pages=login">

        <label for"email">Pseudo</label>
        <input type="text" name="nickname" id="nickname" placeholder="xX-Kikoo-xX"><br>
        <br>

        <label for"pwd">Mot de passe</label>
        <input type="password" name="password" id="password"><br>
        <br>

        <input type="submit" name="btnSubmit" value="Envoyer" id="btnSubmit">
    </form>

</section>