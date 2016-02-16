<?php require_once('controller/categoriesController.php'); ?>

<section>

    <table>

        <tr>

            <th colspan="3">Liste des différentes catégories</th>

        </tr>

        <?php foreach($getCategoriesName as $result):?>

            <tr>

                <td><?php echo '<a href="index.php?pages=viewCategories&&id='.$result['id'].'">'.$result['name'].'</a>'; ?></td>
                <td><?php echo $result['description']; ?></td>

            </tr>

        <?php endforeach;?>
    </table>

</section>