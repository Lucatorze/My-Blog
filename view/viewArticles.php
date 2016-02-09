<?php

$stmt = $pdo->prepare("SELECT * FROM articles WHERE id = :id");
$stmt->bindParam("id", $_GET['id']);
$stmt->execute();
$result = $stmt->fetch();

?>

<section>

    <h1 class="articlesH1">Titre : <?php echo $result['title'] ?></h1>


    <div class="articlesImg">

        Auteur : <?php echo $result['author'] ?>

    </div>

    <div class="articlesDescription">

        <?php echo $result['content'] ?>

    </div>

    <div class="articlesOther">

        <ul>

            <li>Ajouté le <?php echo date('d/m/Y', $result['date']); ?></li>

        </ul>

    </div>

</section>