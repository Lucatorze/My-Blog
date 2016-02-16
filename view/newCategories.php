<?php require_once('controller/categoriesController.php'); ?>
<section>

    <div><?php echo $error;?></div>

    <form action="index.php?pages=listCategories" method="post">

        <label for="name">Titre :</label>
        <input type="text" name="name" id="name" value="<?php echo $result['name']; ?>"><br>
        <br>

        <label for="description">Description :</label>
        <textarea name="description" id="description" cols="40" rows="10"><?php echo $result['description']; ?></textarea><br>

        <input type="hidden" name="idCategories" value="<?php echo $result['id']; ?>">

        <input type="submit" value="Envoyer">

        </p>
    </form>

</section>