<?php require_once('controller/categoriesController.php'); ?>

<section>

    <table class="categories">

        <tr class="categories">

            <th class="categories" colspan="3">Liste des différentes catégories<hr></th>

        </tr>

        <?php foreach($getCategoriesName as $result):?>

            <tr class="categories">

                <td class="categories"><?php echo '<a href="index.php?pages=viewCategories&&id='.$result['id'].'">'.$result['name'].'</a>'; ?></td>
                <td class="categories"><?php echo $result['description']; ?><hr></td>
            </tr>

        <?php endforeach;?>
    </table>

</section>