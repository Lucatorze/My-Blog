<?php

require_once('model/articlesManage.php');

$articles = new articles();
$date = time();

if (isset($_POST['title']) AND isset($_POST['content'])){



    if ($_POST['idArticles'] == 0){ //Poster un nouvelle articles

        $articles->addArticles($pdo, $date);

        header("Location: index.php?pages=listArticles");
        exit;

    }
    else{ //Poster une modification d'articles

        $articles->updateArticles($pdo, $date);

        header("Location: index.php?pages=listArticles");
        exit;
    }
}

if (isset($_GET['deleteArticles'])){ //Supprimer un article

    $articles->deleteArticles($pdo, $date);

    header("Location: index.php?pages=listArticles");
    exit;
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