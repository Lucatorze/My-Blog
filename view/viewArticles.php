<?php
require_once('controller/articlesController.php');
require_once('controller/commentsController.php');

?>

<section>

    <div class="viewArticleConteneur">
        <div class="titleArticle"><?php echo $getViewArticles['title'] ?></div>

        <div class="viewArticleContent">
            <?php echo $getViewArticles['content'] ?>
        </div>

        <div class="author">par <b><?php echo $getViewArticles['author']; ?></b><br> le <?php echo date('d/m/Y', $getViewArticles['date']); ?></div>

        <?php

            if(isset($_SESSION['userId']) && $getViewArticles['idAuthor'] == $_SESSION['userId']){

                echo '<a class="linkViewArticle" href="index.php?pages=newArticles&&updateArticles=' . $getViewArticles['id'] . '">Modifier cet articles</a>';
                echo '<a class="linkViewArticle" href="index.php?pages=viewArticles&&deleteArticles=' . $getViewArticles['id'] . '">Supprimer cet articles</a>';

            }

        ?>

    </div>

    <hr>


    <div class="newsComm">

        <?php if(isset($_SESSION['userId'])){?>

        <form class="commentForm" action="index.php?pages=viewArticles&&id=<?php echo $_GET['id']; ?>" method="post">

            <label class="commentForm" for="author">Auteur :</label>
            <input class="commentForm" type="text" name="author" id="author" value="<?php echo $result['author']; ?>"><br>
            <br>

            <label class="commentForm" for="content">Description :</label><br>
            <textarea class="commentForm" name="content" id="content" cols="40" rows="10"><?php echo $result['content']; ?></textarea><br>

            <input class="commentForm" type="hidden" name="idAuthor" value="<?php echo $_SESSION['userId']; ?>">
            <input class="commentForm" type="hidden" name="idComments" value="<?php echo $result['id']; ?>">
            <input class="commentForm" type="hidden" name="idArticles" value="<?php echo $_GET['id']; ?>">

            <input class="commentForm" type="submit" value="Envoyer">

        </form>

            <?php


            }else{
        ?>

            Vous devez être connecté pour commenter cet article !

        <?php
            }
        ?>

    </div>
    <div class="viewComment">
        <img class="imageFlech" src="./assets/img/flech.png" title="voir les commentaires">
        <img class="imageFlech2" src="./assets/img/flech2.png" title="cacher les commentaires">
    </div>
    <script>
        $(function () {
            $('.viewComment').tabSlide('imageFlech','imageFlech2','comment');
        })
    </script>
    <div>

        <?php foreach($getCommentsOrder as $result):?>

            <div class="comment">

                <div class="commentContent"><?php echo $result['content'] ?></div>

                <div class="dateComm"><?php echo $result['author'] ?><br> le <?php echo date('d/m/Y', $result['date']); ?></div>

                <?php

                if(isset($_SESSION['userId']) && $result['idAuthor'] == $_SESSION['userId']){

                    echo '<a class="linkViewArticle" href="index.php?pages=editComments&&updateComments=' . $result['id'] . '">Modifier</a>';
                    echo '<a class="linkViewArticle" href="index.php?pages=viewArticles&&deleteComments=' . $result['id'] . '">Supprimer</a>';

                }

                ?>

            </div>

        <?php endforeach; ?>

    </div>

</section>