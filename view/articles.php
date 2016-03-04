<?php
require_once('controller/articlesController.php');
?>

<section>

    <?php

        if(!isset($_SESSION['userId'])){

    ?>

            <form id="loginForm" name="loginForm" method="post" action="index.php?pages=login">

                <label for"email">Pseudo</label>
                <input type="text" name="nickname" id="nickname" placeholder="xX-Kikoo-xX"><br>
                <br>

                <label for"pwd">Mot de passe</label>
                <input type="password" name="password" id="password"><br>
                <br>

                <input type="submit" name="btnSubmit" value="Envoyer" id="btnSubmit">
            </form>

    <?php

        }

    ?>

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