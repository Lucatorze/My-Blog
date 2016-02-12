<?php

class categories{

    function addCategories($pdo){

        $stmt = $pdo->prepare("INSERT INTO categories(name, description) VALUE (?,?)");
        $stmt->bindParam(1, $_POST['name']);
        $stmt->bindParam(2, $_POST['description']);
        $stmt->execute();

    }

    function updateCategories($pdo){

        $stmt = $pdo->prepare("UPDATE categories SET name = :name, description = :description WHERE id = :id");
        $stmt->bindParam("name", $_POST['name']);
        $stmt->bindParam("description", $_POST['description']);
        $stmt->bindParam("id", $_POST['idCategories']);
        $stmt->execute();

    }

    function deleteCategories($pdo){

        $stmt = $pdo->prepare("DELETE FROM categories WHERE id = :id");
        $stmt->bindParam("id", $_GET['deleteCategories']);
        $stmt->execute();

        $stmt = $pdo->prepare("DELETE FROM articles WHERE idCat = :id");
        $stmt->bindParam("id", $_GET['deleteCategories']);
        $stmt->execute();

    }

    function getCategories($pdo){

        $stmt = $pdo->prepare("SELECT * FROM categories WHERE id = :id");
        $stmt->bindParam("id", $_GET['updateCategories']);
        $stmt->execute();
        $result = $stmt->fetch();

        return $result;

    }

    function getCategoriesName($pdo){

        $stmt = $pdo->prepare("SELECT * FROM categories ORDER BY name");
        $stmt->execute();

        return $stmt;
    }

    function getCategoriesId($pdo){

        $stmt = $pdo->prepare("SELECT * FROM categories ORDER BY id");
        $stmt->execute();

        return $stmt;
    }

}