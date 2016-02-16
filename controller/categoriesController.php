<?php

require_once('model/categoriesManage.php');

$error = '';

$categories = new categories();

$getCategoriesId = $categories->getCategoriesId($pdo);

$getCategoriesName = $categories->getCategoriesName($pdo);

if (isset($_POST['name']) AND isset($_POST['description'])) {

    if ($_POST['idCategories'] == 0) {

            $_POST['name'] = trim(htmlentities($_POST['name']));
            $_POST['description'] = trim(htmlentities($_POST['description']));

            $categories->addCategories($pdo);

            header("Location: index.php?pages=listCategories");
            exit;

    } else {

        $_POST['name'] = trim(htmlentities($_POST['name']));
        $_POST['description'] = trim(htmlentities($_POST['description']));

        $categories->updateCategories($pdo);

        header("Location: index.php?pages=listCategories");
        exit;

    }
}

if (isset($_GET['deleteCategories'])) {

    $categories->deleteCategories($pdo);

    header("Location: index.php?pages=listCategories");
    exit;
}

if (isset($_GET['updateCategories']))
{

    $result = $categories->getCategories($pdo);

}
else {

    $result['name'] = '';
    $result['description'] = '';
    $result['id'] = 0;
}
