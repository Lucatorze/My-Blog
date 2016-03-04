<?php require_once('controller/articlesController.php'); ?>

<section>

    <table class="categories">

        <tr class="categories">

            <th class="categories" colspan="2">Liste des différents articles<hr></th>

        </tr>
        <?php foreach($getArticlesCategories as $result):

            $content = substr($result['content'], 0, 120);

            ?>

            <tr class="categories">

                <td class="categories"><?php echo '<a href="index.php?pages=viewArticles&&id=' . $result['id'] . '">' . $result['title'] . '</a>'; ?> par <?php echo $result['author']; ?></td>
                <td class="categories"><?php echo $content; ?> ...<hr></td>

            </tr>

        <?php endforeach; ?>

    </table>

</section>