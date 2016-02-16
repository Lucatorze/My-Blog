<?php require_once('controller/articlesController.php'); ?>

<section>

    <?php foreach($getArticlesOrder as $result):?>

        <div class="article1Conteneur">
            <div class="article1">
                <h2><?php echo '<a href="index.php?pages=viewArticles&&id=' . $result['id'] . '">' . $result['title'] . '</a>'; ?> par <?php echo $result['author']; ?> le <?php echo date('d/m/Y à H\hi', $result['date']); ?> ===> image</h2>
                <div class="imageArticle1">
                    <img src="" />
                </div>
                <p>
                    <?php echo $result['content']; ?>
                </p>
            </div>
        </div>

        <hr>

    <?php endforeach; ?>

</section>