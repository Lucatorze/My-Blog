<?php

require_once('model/categoriesManage.php');

$categories = new categories();

$getCategoriesId = $categories->getCategoriesId($pdo);

$getCategoriesName = $categories->getCategoriesName($pdo);

if (isset($_POST['name']) AND isset($_POST['description'])) {

    if ($_POST['idCategories'] == 0) {

        $categories->addCategories($pdo);

        header("Location: index.php?pages=listCategories");
        exit;

    } else {

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
