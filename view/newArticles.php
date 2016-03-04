<?php
require_once('controller/articlesController.php');
require_once('controller/categoriesController.php');
?>

<section>

    <?php

    if(isset($_SESSION['userId'])) {

    ?>


    <form class="addForm" action="index.php?pages=listArticles" method="post">

        <label class="addForm" for="title">Titre :</label>
        <input class="addForm" type="text" name="title" id="title" value="<?php echo $result['title']; ?>"><br>
        <br>

        <label class="addForm" for="author">Auteur :</label>
        <input class="addForm" type="text" name="author" id="author" value="<?php echo $result['author']; ?>"><br>
        <br>

        <label class="addForm" for="content">Contenu :</label><br>
        <textarea class="addForm" name="content" id="content" cols="40" rows="10"><?php echo $result['content']; ?></textarea><br>

        <label class="addForm" for="idCat">Catégories : </label>
        <select class="addForm" name="idCat" id="idCat">

            <?php

            foreach($getCategoriesId as $result2){

                echo '<option value="'.$result2['id'].'" name="'.$result2['id'].'">'.$result2['name'].'</option>';

            }

            ?>

        </select><br>

        <input type="hidden" name="idAuthor" value="<?php echo $_SESSION['userId']; ?>">
        <input type="hidden" name="idArticles" value="<?php echo $result['id']; ?>">

        <input class="addForm" type="submit" value="Envoyer">

        </p>
    </form>

        <?php

    }else {

        ?>

        Vous devez être connecté pour accéder à cet page !

        <?php

    }

    ?>

</section>