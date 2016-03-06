<?php
require_once('controller/editUsersController.php');
?>

<section>

    <?php

    if(isset($_SESSION['userId']) && isset($_SESSION['admin'])) {

        ?>
            <a href="index.php?pages=editUsers">Administration</a><br>

            <form class="addForm" action="" method="post" >

                <label class="addForm" for="firstname"><b>Prénom :</b></label><br/>
                <input class="addForm" type="text" name="firstname" id="firstname" placeholder="Prénom" value="<?php echo $userForUpdate['firstname']; ?>"><br>

                <label class="addForm" for="lastname"><b>Nom :</b></label><br/>
                <input class="addForm" type="text" name="lastname" id="lastname" placeholder="Nom" value="<?php echo $userForUpdate['lastname']; ?>"><br>

                <label class="addForm" for="nickname"><b>Pseudo :</b></label><br/>
                <input class="addForm" type="text" name="nickname" id="nickname" placeholder="Pseudo" value="<?php echo $userForUpdate['nickname']; ?>"><br>

                <label class="addForm" for="password"><b>Mot de passe</b></label><br>
                <input class="addForm" type="password" name="mdp" name="password" id="password" placeholder="Mot de passe"><br>

                <label class="addForm" for="email"><b>E-mail :</b></label><br>
                <input class="addForm" type="text" name="email" id="email" placeholder="E-mail" value="<?php echo $userForUpdate['email']; ?>"><br>

                <label class="addForm"><b>Rang :</b></label><br>
                <input class="addForm" type="radio" name="rank" id="2" value="2"/><label class="addForm" for="2">Administrateur</label><br>
                <input class="addForm" type="radio" name="rank" id="1" checked value="1"/><label class="addForm" for="1">Membres</label><br>

                <input class="addForm" type="submit" name="btnSubmit" value="Envoyer" id="btnSubmit">

            </form>

        <?php
    }else {
        ?>

        Vous devez être connecté en tant qu'administrateur pour accéder à cet page !

        <?php
    }
    ?>
</section>