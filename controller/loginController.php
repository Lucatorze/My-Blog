<?php
require_once("model/loginManage.php");

if(isset($_SESSION['userId'])){

    header('Location: index.php');
    exit;

}else{
    $login = new login();
    if(isset($_POST['nickname'])){
        $salt = 'zezjaejzeoakzodkozdkozadkoazdoazkdokaodkazodkozakdoazdkoazkdaozdaokdoakzodkazodkaodkazodkoakoladkaodkaodkoakolkoo';
        $_POST['password']= trim(htmlentities($salt.sha1($_POST['password'])));
        $result = $login->loginUser($pdo);
        if( $result === false){
            echo "Votre pseudo est introuvable !";
        }
        elseif(empty($_POST['password'])){
            echo "Veuillez rentrer un password !";
        }
        elseif($_POST['password'] != $result['password']){
            var_dump($_POST['password']);
            var_dump($result['password']);
            echo "Mot de passe incorrect";
        }else{
            $_SESSION['userId'] = $result['id'];
            echo " Bienvenue vous êtes maintenant connecté  IL FAUDRA SE METTRE SUR LA PAGE D ACCUEIL";

            var_dump($_POST['password']);
            var_dump($result['password']);
            var_dump($_SESSION['userId']);
        }
    }

}
