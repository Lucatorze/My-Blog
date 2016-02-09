<?php
if (isset($_POST['title']) AND isset($_POST['content'])){

    $date = time();

    if ($_POST['idArticles'] == 0){ //Poster un nouvelle articles

        $stmt = $pdo->prepare("INSERT INTO articles(title, author, content, date, idCat) VALUE (?,?,?,?,?)");
        $stmt->bindParam(1, $_POST['title']);
        $stmt->bindParam(2, $_POST['author']);
        $stmt->bindParam(3, $_POST['content']);
        $stmt->bindParam(4, $date);
        $stmt->bindParam(5, $_POST['idCat']);
        $stmt->execute();

        header("Location: index.php?pages=listArticles");
        exit;

    }
    else{ //Poster une modification d'articles

        $stmt = $pdo->prepare("UPDATE articles SET title = :title, author = :author, content = :content, date = :date, idCat = :idCat WHERE id = :id");
        $stmt->bindParam("title", $_POST['title']);
        $stmt->bindParam("author", $_POST['author']);
        $stmt->bindParam("content", $_POST['content']);
        $stmt->bindParam("date", $date);
        $stmt->bindParam("idCat", $_POST['idCat']);
        $stmt->bindParam("id", $_POST['idArticles']);
        $stmt->execute();

        header("Location: index.php?pages=listArticles");
        exit;
    }
}

if (isset($_GET['deleteArticles'])){ //Supprimer un article


    $stmt = $pdo->prepare("DELETE FROM articles WHERE id = :id");
    $stmt->bindParam("id", $_GET['deleteArticles']);
    $stmt->execute();

    header("Location: index.php?pages=listArticles");
    exit;
}

if (isset($_GET['updateArticles']))
{

    $stmt = $pdo->prepare("SELECT * FROM articles WHERE id = :id");
    $stmt->bindParam("id", $_GET['updateArticles']);
    $stmt->execute();
    $result = $stmt->fetch();

}
else
{

    $result['title'] = '';
    $result['author'] = '';
    $result['content'] = '';
    $result['idCat'] = 1;
    $result['id'] = 0;
}