<?php
require_once('controller/editUsersController.php');
?>

<section>

    <?php

    if(isset($_SESSION['userId']) && isset($_SESSION['admin'])) {

        ?>

        <div class="usersContent">

            <a href="index.php?pages=admin">Administration</a><br>

                <table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#ffffff">

                    <tr>

                        <td><strong>Pseudo</strong></td>
                        <td><strong>Rang</strong></td>
                        <td><strong>Action</strong></td>

                    </tr>

                    <?php foreach($getUserlist as $result):
                        if($result['rank'] == 2){
                            $rank = 'Administrateur';
                        }else{
                            $rank = 'Membre';
                        }
                        ?>

                        <tr>

                            <td><?php echo $result['nickname']; ?></td>
                            <td><?php echo $rank ?></a></td>
                            <td><a href="index.php?pages=updateUser&&update=<?php echo $result['id']; ?>">Modifier</a><br><a href="index.php?pages=editUsers&&del=<?php echo $result['id']; ?>">Effacer</a></td>

                        </tr>



                    <?php endforeach;?>

                </table>

        </div>

        <?php
    }else {
        ?>

        Vous devez être connecté en tant qu'administrateur pour accéder à cet page !

        <?php
    }
    ?>
</section>