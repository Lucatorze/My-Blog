<?php



?>

<section>

    <table>

        <tr>

            <th colspan="3">Liste des différentes catégories</th>

        </tr>
        <?php

        require_once('model/categoriesManage.php');

        $categories = new categories();
        $stmt = $categories->getCategoriesName($pdo);

        while ($result = $stmt->fetch()) {

            ?>

            <tr>

                <td><?php echo '<a href="index.php?pages=viewCategories&&id='.$result['id'].'">'.$result['name'].'</a>'; ?></td>
                <td><?php echo $result['description']; ?></td>

            </tr>

            <?php
        }
        ?>
    </table>

</section>