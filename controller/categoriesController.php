<?php

if (isset($_POST['name']) AND isset($_POST['description'])) {

    if ($_POST['idCategories'] == 0) {

        $stmt = $pdo->prepare("INSERT INTO categories(name, description) VALUE (?,?)");
        $stmt->bindParam(1, $_POST['name']);
        $stmt->bindParam(2, $_POST['description']);
        $stmt->execute();

        header("Location: index.php?pages=categories");
        exit;

    } else {

        $stmt = $pdo->prepare("UPDATE categories SET name = :name, description = :description WHERE id = :id");
        $stmt->bindParam("name", $_POST['name']);
        $stmt->bindParam("description", $_POST['description']);
        $stmt->bindParam("id", $_POST['idCategories']);
        $stmt->execute();

        header("Location: index.php?pages=categories");
        exit;

    }
}

if (isset($_GET['deleteCategories'])) {


    $stmt = $pdo->prepare("DELETE FROM categories WHERE id = :id");
    $stmt->bindParam("id", $_GET['deleteCategories']);
    $stmt->execute();

    $stmt = $pdo->prepare("DELETE FROM articles WHERE idCat = :id");
    $stmt->bindParam("id", $_GET['deleteCategories']);
    $stmt->execute();

    header("Location: index.php?pages=categories");
    exit;
}

if (isset($_GET['updateCategories']))
{

    $stmt = $pdo->prepare("SELECT * FROM categories WHERE id = :id");
    $stmt->bindParam("id", $_GET['updateCategories']);
    $stmt->execute();
    $result = $stmt->fetch();

}
else {

    $result['name'] = '';
    $result['description'] = '';
    $result['id'] = 0;
}

