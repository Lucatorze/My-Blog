<?php require_once('controller/articlesController.php'); ?>

<section>

    <table>

        <tr>

            <th colspan="3">Liste des différents articles</th>

        </tr>
        <?php foreach($getArticlesCategories as $result):

            $content = substr($result['content'], 0, 120);

            ?>

            <tr>

                <td><?php echo '<a href="index.php?pages=viewArticles&&id=' . $result['id'] . '">' . $result['title'] . '</a>'; ?></td>
                <td><?php echo $result['author']; ?></td>
                <td><?php echo $content; ?> ...</td>

            </tr>

        <?php endforeach; ?>

    </table>

</section>