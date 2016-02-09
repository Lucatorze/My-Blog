<?php



?>

<section>

    <table>

        <tr>

            <th colspan="3">Liste des différentes catégories</th>

        </tr>
        <?php

        $stmt = $pdo->prepare("SELECT * FROM categories ORDER BY name");
        $stmt->execute();;

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