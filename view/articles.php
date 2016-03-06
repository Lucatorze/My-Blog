<?php
require_once('controller/articlesController.php');
?>

<section>

    <?php

        if(!isset($_SESSION['userId'])){

    ?>

            <form id="loginForm" name="loginForm" method="post" action="index.php?pages=login">

                <label for="email">Pseudo</label>
                <input type="text" name="nickname" id="nickname" placeholder="Pseudo"><br>
                <br>

                <label for="pwd">Mot de passe</label>
                <input type="password" name="password" id="password"><br>
                <br>

                <input type="submit" name="btnSubmit" value="Envoyer" id="btnSubmit">
            </form>

    <?php

        }

    ?>

    <?php foreach($getArticlesOrder as $result):

        $content = substr($result['content'], 0, 120);

        ?>

        <div class="articleConteneur">
            <div class="article">
                <h2><?php echo '<a href="index.php?pages=viewArticles&&id=' . $result['id'] . '">' . $result['title'] . '</a>'; ?></h2>
                <div class="imageArticle">
                    <img src="" />
                </div>
                <div class="articleContent">
                    <?php echo $content; ?>...
                </div>
                <div class="read"><?php echo '<a href="index.php?pages=viewArticles&&id=' . $result['id'] . '">Lire la suite ...</a>'; ?></div>
                <div class="author">par <b><?php echo $result['author']; ?></b><br> le <?php echo date('d/m/Y à H\hi', $result['date']); ?></div>
            </div>
        </div>
    <?php endforeach; ?>

</section>