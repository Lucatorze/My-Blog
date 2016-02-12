<?php
include('controller/articlesController.php');
?>

<section>

    <a href="index.php?pages=newArticles">Ajouter un article</a>

    <table>

        <tr>

            <th>Action</th>
            <th>Titre</th>
            <th>Auteur</th>
            <th>Id catégories</th>

        </tr>
        <?php

        require_once('model/articlesManage.php');

        $articles = new articles();
        $stmt = $articles->getArticlesId($pdo);

        while ($result = $stmt->fetch())
        {

            ?>

            <tr>

                <td>
                    <?php echo '<a href="index.php?pages=newArticles&&updateArticles=' . $result['id'] . '">'; ?>Modifier</a><br>
                    <?php echo '<a href="index.php?pages=listArticlesdeleteArticles=' . $result['id'] . '">'; ?>Supprimer</a>
                </td>
                <td><?php echo $result['title']; ?></td>
                <td><?php echo $result['author']; ?></td>
                <td><?php echo $result['idCat']; ?></td>

            </tr>

            <?php

        }

        ?>
    </table>

</section>