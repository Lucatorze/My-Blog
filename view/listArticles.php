<?php require_once('controller/articlesController.php'); ?>


<section>

    <?php

    if(isset($_SESSION['userId']) && isset($_SESSION['admin'])) {

        ?>
        <div class="blockAdmin">
            <a class="linkAdmin" href="index.php?pages=admin">Administration</a><br>
            <a class="linkAdmin" href="index.php?pages=newArticles">Ajouter un article</a>

            <table class="listAdmin">

                <tr class="listAdmin">

                    <th class="listAdmin">Action</th>
                    <th class="listAdmin">Titre</th>
                    <th class="listAdmin">Auteur</th>

                </tr>
                <?php foreach($getArticlesOrder as $result):?>

                    <tr class="listAdmin">

                        <td class="listAdmin">
                            <?php echo '<a href="index.php?pages=newArticles&&updateArticles=' . $result['id'] . '">'; ?>Modifier</a><br>
                            <?php echo '<a href="index.php?pages=listArticles&&deleteArticles=' . $result['id'] . '">'; ?>Supprimer</a>
                        </td>
                        <td class="listAdmin"><?php echo $result['title']; ?></td>
                        <td class="listAdmin"><?php echo $result['author']; ?></td>

                    </tr>

                <?php endforeach; ?>

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