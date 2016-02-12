<?php
include('controller/articlesController.php');
?>

<section>

    <form action="index.php?pages=listArticles" method="post">

        <label for="title">Titre :</label>
        <input type="text" name="title" id="title" value="<?php echo $result['title']; ?>"><br>
        <br>

        <label for="author">Auteur :</label>
        <input type="text" name="author" id="author" value="<?php echo $result['author']; ?>"><br>
        <br>

        <label for="content">Contenu :</label>
        <textarea name="content" id="content" cols="40" rows="10"><?php echo $result['content']; ?></textarea><br>

        <label for="idCat">Catégories : </label>
        <select name="idCat" id="idCat">

            <?php

            require_once('model/categoriesManage.php');

            $categories = new categories();
            $stmt2 = $categories->getCategoriesId($pdo);

            while($result2 = $stmt2->fetch()){

                echo '<option value="'.$result2['id'].'" name="'.$result2['id'].'">'.$result2['name'].'</option>';

            }

            ?>

        </select>

        <input type="hidden" name="idArticles" value="<?php echo $result['id']; ?>">

        <input type="submit" value="Envoyer">

        </p>
    </form>

</section>