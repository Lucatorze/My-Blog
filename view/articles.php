
<section>
    <?php

    $stmt = $pdo->prepare("SELECT * FROM articles ORDER BY id DESC LIMIT 0, 10");
    $stmt->execute();

    while ($result = $stmt->fetch()) {

    ?>
    <div class="article1Conteneur">
        <div class="article1">
            <h2><?php echo $result['title']; ?> par <?php echo $result['author']; ?> le <?php echo date('d/m/Y à H\hi', $result['date']); ?> ===> image</h2>
                <div class="imageArticle1">
                <img src="" />
            </div>
            <p>
                <?php echo $result['content']; ?>
            </p>
        </div>
    </div>
        <hr>
            <?php

        }

        ?>

</section>