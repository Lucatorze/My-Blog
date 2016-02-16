<?php require_once('controller/categoriesController.php'); ?>

<a href="../index.php?pages=newCategories">Ajouter une categorie</a>

<table>

    <tr>

        <th>Action</th>
        <th>Titre</th>

    </tr>
    <?php foreach($getCategoriesId as $result):?>

        <tr>

            <td>
                <?php echo '<a href="index.php?pages=newCategories&&updateCategories=' . $result['id'] . '">'; ?>Modifier</a>
                <br>
                <?php echo '<a href="index.php?pages=listCategories&&deleteCategories=' . $result['id'] . '">'; ?>Supprimer</a>
            </td>
            <td>
                <?php echo '<a href="index.php?pages=viewCategories&&id='.$result['id'].'">'.$result['name'].'</a>'; ?>
            </td>

        </tr>

        <?php endforeach;?>
</table>