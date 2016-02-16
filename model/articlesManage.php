<?php

class articles{

    function addArticles($pdo, $date){

        $stmt = $pdo->prepare("INSERT INTO articles(title, author, content, date, idCat) VALUE (?,?,?,?,?)");
        $stmt->bindParam(1, $_POST['title']);
        $stmt->bindParam(2, $_POST['author']);
        $stmt->bindParam(3, $_POST['content']);
        $stmt->bindParam(4, $date);
        $stmt->bindParam(5, $_POST['idCat']);
        $stmt->execute();

    }

    function updateArticles($pdo, $date){

        $stmt = $pdo->prepare("UPDATE articles SET title = :title, author = :author, content = :content, date = :date, idCat = :idCat WHERE id = :id");
        $stmt->bindParam("title", $_POST['title']);
        $stmt->bindParam("author", $_POST['author']);
        $stmt->bindParam("content", $_POST['content']);
        $stmt->bindParam("date", $date);
        $stmt->bindParam("idCat", $_POST['idCat']);
        $stmt->bindParam("id", $_POST['idArticles']);
        $stmt->execute();

    }

    function deleteArticles($pdo){

        $stmt = $pdo->prepare("DELETE FROM articles WHERE id = :id");
        $stmt->bindParam("id", $_GET['deleteArticles']);
        $stmt->execute();

    }

    function getArticles($pdo){

        $stmt = $pdo->prepare("SELECT * FROM articles WHERE id = :id");
        $stmt->bindParam("id", $_GET['updateArticles']);
        $stmt->execute();
        $result = $stmt->fetch();

        return $result;
    }

    function getViewArticles($pdo){

        $stmt = $pdo->prepare("SELECT * FROM articles WHERE id = :id");
        $stmt->bindParam("id", $_GET['id']);
        $stmt->execute();
        $result = $stmt->fetch();

        return $result;
    }

    function getArticlesOrder($pdo){

        $stmt = $pdo->prepare("SELECT * FROM articles ORDER BY id DESC LIMIT 0, 10");
        $stmt->execute();

        $getArticlesOrder = [];

        while ($result = $stmt->fetch()) {
            $getArticlesOrder[] = $result;
        }

        return $getArticlesOrder;
    }

    function getArticlesId($pdo){

        $stmt = $pdo->prepare("SELECT * FROM articles ORDER BY id");
        $stmt->execute();

        $getArticlesId = [];

        while ($result = $stmt->fetch()) {
            $getArticlesId[] = $result;
        }

        return $getArticlesId;
    }

    function getArticlesCategories($pdo){

        $stmt = $pdo->prepare("SELECT * FROM articles WHERE idCat = :idCat");
        $stmt->bindParam("idCat", $_GET['id']);
        $stmt->execute();

        $getArticlesCategories = [];

        while ($result = $stmt->fetch()) {
            $getArticlesCategories[] = $result;
        }

        return $getArticlesCategories;
    }


}