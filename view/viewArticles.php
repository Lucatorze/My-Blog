<?php
require_once('controller/articlesController.php');
require_once('controller/commentsController.php');

?>

<section>

    <h1>Titre : <?php echo $getViewArticles['title'] ?></h1>

    <div>

        Auteur : <?php echo $getViewArticles['author'] ?>


        <?php echo $getViewArticles['content'] ?>

        Ajouté le <?php echo date('d/m/Y', $getViewArticles['date']); ?><br>

        <?php

            if(isset($_SESSION['userId']) && $getViewArticles['idAuthor'] == $_SESSION['userId']){

                echo '<a href="index.php?pages=newArticles&&updateArticles=' . $getViewArticles['id'] . '">Modifier cet articles</a><br>';
                echo '<a href="index.php?pages=viewArticles&&deleteArticles=' . $getViewArticles['id'] . '">Supprimer cet articles</a>';

            }

        ?>

    </div>

    <hr>

    <div>

        <?php if(isset($_SESSION['userId'])){?>

        <form action="index.php?pages=viewArticles&&id=<?php echo $_GET['id']; ?>" method="post">

            <label for="author">Auteur :</label>
            <input type="text" name="author" id="author" value="<?php echo $result['author']; ?>"><br>
            <br>

            <label for="content">Description :</label>
            <textarea name="content" id="content" cols="40" rows="10"><?php echo $result['content']; ?></textarea><br>

            <input type="hidden" name="idAuthor" value="<?php echo $_SESSION['userId']; ?>">
            <input type="hidden" name="idComments" value="<?php echo $result['id']; ?>">
            <input type="hidden" name="idArticles" value="<?php echo $_GET['id']; ?>">

            <input type="submit" value="Envoyer">

        </form>

            <?php


            }else{
        ?>

            Vous devez être connecté pour commenter cet article !

        <?php
            }
        ?>

    </div>

    <div>

        <?php foreach($getCommentsOrder as $result):?>

            <div>

                Auteur : <?php echo $result['author'] ?><br>

                <?php echo $result['content'] ?><br>

                Ajouté le <?php echo date('d/m/Y', $result['date']); ?><br>

                <?php

                if(isset($_SESSION['userId']) && $result['idAuthor'] == $_SESSION['userId']){

                    echo '<a href="index.php?pages=editComments&&updateComments=' . $result['id'] . '">Modifier ce commentaire</a><br>';
                    echo '<a href="index.php?pages=viewArticles&&deleteComments=' . $result['id'] . '">Supprimer ce commentaire</a>';

                }

                ?>

            </div>

        <?php endforeach; ?>

    </div>

</section>