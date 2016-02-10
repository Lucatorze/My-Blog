<?php
if (isset($_POST['author']) AND isset($_POST['content'])){

    $date = time();

    if ($_POST['idComments'] == 0){

        $stmt = $pdo->prepare("INSERT INTO comments(author, content, date, idArticles) VALUE (?,?,?,?)");
        $stmt->bindParam(1, $_POST['author']);
        $stmt->bindParam(2, $_POST['content']);
        $stmt->bindParam(3, $date);
        $stmt->bindParam(4, $_POST['idArticles']);
        $stmt->execute();

        header("Location: index.php?pages=viewArticles&&id=" . $_POST['idArticles']);
        exit;

    }
    else{

        $stmt = $pdo->prepare("UPDATE articles SET author = :author, content = :content, date = :date, idArticles = :idArticles WHERE id = :id");
        $stmt->bindParam("author", $_POST['author']);
        $stmt->bindParam("content", $_POST['content']);
        $stmt->bindParam("date", $date);
        $stmt->bindParam("idArticles", $_POST['idArticles']);
        $stmt->bindParam("id", $_POST['idComments']);
        $stmt->execute();

        header("Location: index.php?pages=viewArticles&&id=" . $_POST['idArticles']);
        exit;
    }
}

if (isset($_GET['deleteArticles'])){ //Supprimer un article


    $stmt = $pdo->prepare("DELETE FROM comments WHERE id = :id");
    $stmt->bindParam("id", $_GET['deleteComments']);
    $stmt->execute();

    header("Location: index.php?pages=viewArticles&&id=" . $_POST['idArticles']);
    exit;
}

if (isset($_GET['updateComments']))
{

    $stmt = $pdo->prepare("SELECT * FROM comments WHERE id = :id");
    $stmt->bindParam("id", $_GET['updateComments']);
    $stmt->execute();
    $result = $stmt->fetch();

}
else
{

    $result['author'] = '';
    $result['content'] = '';
    $result['id'] = 0;
}