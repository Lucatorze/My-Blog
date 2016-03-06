<?php
require_once('model/articlesManage.php');

$articles = new articles();
$date = time();

$getArticlesCategories = $articles->getArticlesCategories($pdo);

$getArticlesOrder = $articles->getArticlesOrder($pdo);

$getArticlesId = $articles->getArticlesId($pdo);

$getViewArticles = $articles->getViewArticles($pdo);

if (isset($_POST['title']) AND isset($_POST['content'])){

    if ($_POST['idArticles'] == 0){ //Poster un nouvelle articles

        $_POST['title'] = trim(htmlentities($_POST['title']));
        $_POST['author'] = trim(htmlentities($_POST['author']));
        $_POST['content'] = trim(htmlentities($_POST['content']));

        $articles->addArticles($pdo, $date);

        if(isset($_SESSION['userId'])){

            header("Location: index.php?pages=articles");
            exit;

        }
        else{

            header("Location: index.php?pages=listArticles");
            exit;

        }


    }
    else{ //Poster une modification d'articles

        $_POST['title'] = trim(htmlentities($_POST['title']));
        $_POST['author'] = trim(htmlentities($_POST['author']));
        $_POST['content'] = trim(htmlentities($_POST['content']));

        $articles->updateArticles($pdo, $date);

        header("Location: index.php?pages=listArticles");
        exit;
    }
}

if (isset($_GET['deleteArticles'])){ //Supprimer un article

    $articles->deleteArticles($pdo, $date);

    if(isset($_SESSION['userId'])){

        header("Location: index.php?pages=articles");
        exit;

    }
    else{

        header("Location: index.php?pages=listArticles");
        exit;

    }
}

if (isset($_GET['updateArticles']))
{

    $result = $articles->getArticles($pdo, $date);

}
else
{

    $result['title'] = '';
    $result['author'] = '';
    $result['content'] = '';
    $result['idCat'] = 1;
    $result['id'] = 0;
}