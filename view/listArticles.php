<?php require_once('controller/articlesController.php'); ?>


<section>

    <?php

    if(isset($_SESSION['userId']) && isset($_SESSION['admin'])) {

    ?>

    <a href="index.php?pages=admin">Administration</a><br>
    <a href="index.php?pages=newArticles">Ajouter un article</a>

    <table>

        <tr>

            <th>Action</th>
            <th>Titre</th>
            <th>Auteur</th>
            <th>Id catégories</th>

        </tr>
        <?php foreach($getArticlesOrder as $result):?>

            <tr>

                <td>
                    <?php echo '<a href="index.php?pages=newArticles&&updateArticles=' . $result['id'] . '">'; ?>Modifier</a><br>
                    <?php echo '<a href="index.php?pages=listArticles&&deleteArticles=' . $result['id'] . '">'; ?>Supprimer</a>
                </td>
                <td><?php echo $result['title']; ?></td>
                <td><?php echo $result['author']; ?></td>
                <td><?php echo $result['idCat']; ?></td>

            </tr>

        <?php endforeach; ?>

    </table>

    <?php

        }else {

    ?>

        Vous devez être connecté en tant qu'administrateur pour accéder à cet page !

    <?php

    }

    ?>

</section>