<?php

require_once('model/commentsManage.php');


$comments = new comments();

if (isset($_POST['author']) AND isset($_POST['content'])){

    $date = time();

    if ($_POST['idComments'] == 0){

        $comments->addComments($pdo, $date);

        header("Location: index.php?pages=viewArticles&&id=" . $_POST['idArticles']);
        exit;

    }
    else{

        $comments->updateComments($pdo, $date);

        header("Location: index.php?pages=viewArticles&&id=" . $_POST['idArticles']);
        exit;
    }
}

if (isset($_GET['deleteComments'])){ //Supprimer un article

    $comments->deleteComments($pdo);

    header("Location: index.php?pages=viewArticles&&id=" . $_POST['idArticles']);
    exit;
}

if (isset($_GET['updateComments']))
{

    $result = $comments->getComments($pdo);

}
else
{

    $result['author'] = '';
    $result['content'] = '';
    $result['id'] = 0;
}