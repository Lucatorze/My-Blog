<?php
require_once('controller/editUsersController.php');
?>

<section>

    <?php

    if(isset($_SESSION['userId']) && isset($_SESSION['admin'])) {

        ?>

        <div class="blockAdmin">

            <a class="linkAdmin" href="index.php?pages=admin">Administration</a><br>

            <table class="listAdmin">

                <tr class="listAdmin">

                    <th class="listAdmin"><strong>Pseudo</strong></th>
                    <th class="listAdmin"><strong>Rang</strong></th>
                    <th class="listAdmin"><strong>Action</strong></th>

                </tr>

                <?php foreach($getUserlist as $result):
                    if($result['rank'] == 2){
                        $rank = 'Administrateur';
                    }else{
                        $rank = 'Membre';
                    }
                    ?>

                    <tr class="listAdmin">

                        <td class="listAdmin"><?php echo $result['nickname']; ?></td>
                        <td class="listAdmin"><?php echo $rank ?></a></td>
                        <td class="listAdmin"><a href="index.php?pages=updateUser&&update=<?php echo $result['id']; ?>">Modifier</a><br><a href="index.php?pages=editUsers&&del=<?php echo $result['id']; ?>">Effacer</a></td>

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