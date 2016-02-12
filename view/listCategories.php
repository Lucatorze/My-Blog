<?php
include('controller/categoriesController.php');
?>

<a href="../index.php?pages=newCategories">Ajouter une categorie</a>

<table>

    <tr>

        <th>Action</th>
        <th>Titre</th>

    </tr>
    <?php

    require_once('model/categoriesManage.php');

    $categories = new categories();
    $stmt = $categories->getCategoriesId($pdo);

    while ($result = $stmt->fetch()) {

        ?>

        <tr>

            <td>
                <?php echo '<a href="index.php?pages=newCategories&&updateCategories=' . $result['id'] . '">'; ?>Modifier</a>
                <br>
                <?php echo '<a href="index.php?pages=listCategories&&deleteCategories=' . $result['id'] . '">'; ?>Supprimer</a>
            </td>
            <td></td>
            <td><?php echo '<a href="index.php?pages=viewCategories&&id='.$result['id'].'">'.$result['name'].'</a>'; ?></td>

        </tr>

        <?php

    }

    ?>
</table>