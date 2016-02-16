<?php
require_once('controller/articlesController.php');
require_once('controller/commentsController.php');

?>

<section>

    <h1>Titre : <?php echo $getViewArticles['title'] ?></h1>

    <div>

        Auteur : <?php echo $getViewArticles['author'] ?>

    </div>

    <div >

        <?php echo $getViewArticles['content'] ?>

    </div>

    <div>

        <ul>

            <li>Ajouté le <?php echo date('d/m/Y', $getViewArticles['date']); ?></li>
            <li><a href="index.php?pages=newComments&&id=<?php echo $getViewArticles['id']; ?>">Ajouter un commentaire</a></li>

        </ul>

    </div>

    <hr>

    <div>

        <?php foreach($getCommentsOrder as $result):?>

            <div>

                Auteur : <?php echo $result['author'] ?>

            </div>

            <div >

                <?php echo $result['content'] ?>

            </div>

            <div>

                Ajouté le <?php echo date('d/m/Y', $result['date']); ?>

            </div>

        <?php endforeach; ?>

    </div>

</section>