<?php require_once('controller/categoriesController.php'); ?>

<section>

    <?php

    if(isset($_SESSION['userId']) && isset($_SESSION['admin'])) {

        ?>
        <div class="blockAdmin">
            <a class="linkAdmin" class="linkAdmin" href="index.php?pages=admin">Administration</a><br>
            <a class="linkAdmin" href="index.php?pages=newCategories">Ajouter une categorie</a>

            <table class="listAdmin">

                <tr class="listAdmin">

                    <th class="listAdmin">Action</th>
                    <th class="listAdmin">Titre</th>

                </tr>
                <?php foreach($getCategoriesId as $result):?>

                    <tr class="listAdmin">

                        <td class="listAdmin">
                            <?php echo '<a href="index.php?pages=newCategories&&updateCategories=' . $result['id'] . '">'; ?>Modifier</a>
                            <br>
                            <?php echo '<a href="index.php?pages=listCategories&&deleteCategories=' . $result['id'] . '">'; ?>Supprimer</a>
                        </td>
                        <td class="listAdmin">
                            <?php echo '<a href="index.php?pages=viewCategories&&id='.$result['id'].'">'.$result['name'].'</a>'; ?>
                        </td>

                    </tr>

                <?php endforeach;?>
            </table>
        </div>
        <?php

    }else {

        ?>

        Vous devez être connecté en tant qu'administrateur pour accéder à cet page !

        <?php

    }

    ?>

</section>