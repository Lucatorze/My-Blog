<?php

$stmt = $pdo->prepare("SELECT * FROM articles WHERE id = :id");
$stmt->bindParam("id", $_GET['id']);
$stmt->execute();
$result = $stmt->fetch();

?>

<section>

    <h1>Titre : <?php echo $result['title'] ?></h1>


    <div>

        Auteur : <?php echo $result['author'] ?>

    </div>

    <div >

        <?php echo $result['content'] ?>

    </div>

    <div>

        <ul>

            <li>Ajouté le <?php echo date('d/m/Y', $result['date']); ?></li>
            <li><a href="index.php?pages=newComments&&id=<?php echo $result['id']; ?>">Ajouter un commentaire</a></li>

        </ul>

    </div>
<hr>
    <div>

        <?php
        include('controller/commentsController.php');


        $stmt2 = $pdo->prepare("SELECT * FROM comments WHERE idArticles = :idArticles ORDER BY date");
        $stmt2->bindParam("idArticles", $_GET['id']);
        $stmt2->execute();

        while ($result2 = $stmt2->fetch()) {

        ?>

            <div>

                Auteur : <?php echo $result2['author'] ?>

            </div>

            <div >

                <?php echo $result2['content'] ?>

            </div>

            <div>

                Ajouté le <?php echo date('d/m/Y', $result2['date']); ?>

            </div>

            <?php

        }

        ?>

    </div>

</section>