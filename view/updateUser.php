<?php
require_once('controller/editUsersController.php');
?>

<section>

    <?php

    if(isset($_SESSION['userId']) && isset($_SESSION['admin'])) {

        ?>

        <div class="usersContent">

            <a href="index.php?pages=editUsers">Administration</a><br>

                <form action="" method="post" >

                    <label for="firstname"><b>Prénom :</b></label><br/>
                    <input type="text" name="firstname" id="firstname" placeholder="Prénom" value="<?php echo $userForUpdate['firstname']; ?>"><br>

                    <label for="lastname"><b>Nom :</b></label><br/>
                    <input type="text" name="lastname" id="lastname" placeholder="Nom" value="<?php echo $userForUpdate['lastname']; ?>"><br>

                    <label for="nickname"><b>Pseudo :</b></label><br/>
                    <input type="text" name="nickname" id="nickname" placeholder="Pseudo" value="<?php echo $userForUpdate['nickname']; ?>"><br>

                    <label for="password"><b>Mot de passe</b></label><br>
                    <input type="password" name="mdp" name="password" id="password" placeholder="Mot de passe"><br>

                    <label for="email"><b>E-mail :</b></label><br>
                    <input type="text" name="email" id="email" placeholder="E-mail" value="<?php echo $userForUpdate['email']; ?>"><br>

                    <label><b>Rang :</b></label><br>
                    <input type="radio" name="rank" value="2"/>Administrateur<br>
                    <input type="radio" name="rank" checked value="1"/>Membres<br>

                    <input type="submit" name="btnSubmit" value="Envoyer" id="btnSubmit">

                </form>

        </div>

        <?php
    }else {
        ?>

        Vous devez être connecté en tant qu'administrateur pour accéder à cet page !

        <?php
    }
    ?>
</section>