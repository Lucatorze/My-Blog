<section>

    <table>

        <tr>

            <th colspan="3">Liste des différents articles</th>

        </tr>
        <?php

        require_once('model/articlesManage.php');

        $articles = new articles();
        $id = $_GET['id'];
        $stmt = $articles->getArticlesCategories($pdo, $id);

        while ($result = $stmt->fetch()) {

            $content = substr($result['content'], 0, 120);

            ?>

            <tr>

                <td><?php echo '<a href="index.php?pages=viewArticles&&id=' . $result['id'] . '">' . $result['title'] . '</a>'; ?></td>
                <td><?php echo $result['author']; ?></td>
                <td><?php echo $content; ?> ...</td>

            </tr>

            <?php

        }

        ?>
    </table>

</section>