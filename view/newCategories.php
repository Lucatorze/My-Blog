<?php require_once('controller/categoriesController.php'); ?>

<section>

    <?php

    if(isset($_SESSION['userId']) && isset($_SESSION['admin'])) {

        ?>

        <div class="blockAdmin">

            <div><?php echo $error;?></div>

            <form class="addForm" action="index.php?pages=listCategories" method="post">

                <label class="addForm" for="name">Titre :</label>
                <input class="addForm" type="text" name="name" id="name" value="<?php echo $result['name']; ?>"><br>

                <label class="addForm" for="description">Description :</label>
                <textarea class="addForm" name="description" id="description" cols="30" rows="10"><?php echo $result['description']; ?></textarea><br>

                <input type="hidden" name="idCategories" value="<?php echo $result['id']; ?>">

                <input class="addForm" type="submit" value="Envoyer">

                </p>
            </form>

        </div>

        <?php

    }else {

        ?>

        Vous devez être connecté en tant qu'administrateur pour accéder à cet page !

        <?php

    }

    ?>

</section>