<?php
include('view/includes/header.php');
include('view/includes/nav.php');

if(!isset($_GET['pages'])){

    include('view/articles.php');

}
else{
    switch($_GET['pages'])
    {
        default:
            include('view/articles.php');
            break;

        //Page Articles
        case 'articles':
            include('view/articles.php');
            break;
        case 'newArticles':
            include('view/newArticles.php');
            break;
        case 'listArticles':
            include('view/listArticles.php');
            break;
        case 'viewArticles':
            include('view/viewArticles.php');
            break;

        // Page Catégories
        case 'categories':
            include('view/categories.php');
            break;
        case 'newCategories':
            include('view/newCategories.php');
            break;
        case 'viewCategories':
            include('view/viewCategories.php');
            break;
        case 'listCategories':
            include('view/listCategories.php');
            break;

        // Page Membres
        case 'register':
            include('view/register.php');
            break;
    }
}

include('view/includes/footer.php');