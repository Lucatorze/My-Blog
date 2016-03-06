<?php
require_once('controller/editUsersController.php');
?>

<section>

    <?php

    if(isset($_SESSION['userId']) && isset($_SESSION['admin'])) {

        ?>

        <div class="usersContent">

            <?php
            if (isset($_GET['mod'])){

                ?>

                <form action="" method="post" >

                    <label for="firstname"><b>Prénom :</b></label><br/>
                    <input type="text" size="75" name="firstname" id="firstname" placeholder="Prénom" value="<?php echo $userForUpdate['firstname']; ?>"><br>

                    <label for="lastname"><b>Nom :</b></label><br/>
                    <input type="text" size="75"  name="lastname" id="lastname" placeholder="Nom" value="<?php echo $userForUpdate['lastname']; ?>"><br>

                    <label for="nickname"><b>Pseudo :</b></label><br/>
                    <input type="text" size="75" name="nickname" id="nickname" placeholder="Pseudo" value="<?php echo $userForUpdate['nickname']; ?>"><br>

                    <label for="password"><b>Mot de passe</b></label><br>
                    <input type="password" size="75" name="mdp" name="password" id="password" placeholder="Mot de passe"><br>

                    <label for="email"><b>E-mail :</b></label><br>
                    <input type="text" size="75" name="email" id="email" placeholder="E-mail" value="<?php echo $userForUpdate['email']; ?>"><br>

                    <label><b>Rang :</b></label><br>
                    <input type="radio" name="rank" value="2"/>Administrateur<br>
                    <input type="radio" name="rank" checked value="1"/>Membres<br>

                    <input type="submit" name="btnSubmit" value="Envoyer" id="btnSubmit">

                </form>

                <?php
            }
            else{

                ?>

                <table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#ffffff">

                    <tr>

                        <td><strong>Pseudo</strong></td>
                        <td><strong>Rang</strong></td>
                        <td><strong>Action</strong></td>

                    </tr>

                    <?php foreach($getUserlist as $result):?>

                        <tr>

                            <td><?php echo $result['nickname']; ?><br/></td>
                            <td><?php echo $result['rank']; ?></a><br/></td>
                            <td><a href="index.php?pages=editUsers&&mod=<?php echo $result['id']; ?>">Modifier</a><br/><a href="index.php?pages=editUsers&&del=<?php echo $result['id']; ?>">Effacer</a></td>

                        </tr>



                    <?php endforeach;?>

                </table>

            <?php } ?>

        </div>

        <?php
    }else {
        ?>

        Vous devez être connecté en tant qu'administrateur pour accéder à cet page !

        <?php
    }
    ?>
</section>