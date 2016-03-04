<?php
require_once("model/loginManage.php");

if(isset($_SESSION['userId'])){

    header('Location: index.php');
    exit;

}else{
    $login = new login();
    $allGood = '';
    $nicknameInvalide='';
    $passwordInvalide='';
    if(isset($_POST['nickname'])){
        $salt = 'zezjaejzeoakzodkozdkozadkoazdoazkdokaodkazodkozakdoazdkoazkdaozdaokdoakzodkazodkaodkazodkoakoladkaodkaodkoakolkoo';
        $_POST['password'] = trim(htmlentities(sha1(sha1($_POST['password']).$salt)));
        $result = $login->loginUser($pdo);
        if( $result === false){
            $nicknameInvalide = "Votre pseudo est introuvable !";
        }
        elseif(empty($_POST['password'])){
            echo "Veuillez rentrer un password !";
        }
        elseif($_POST['password'] != $result['password']){
            $passwordInvalide ="Mot de passe incorrect";
        }else{
            $_SESSION['userId'] = $result['id'];
            $allGood = " Bienvenue vous êtes maintenant connecté  IL FAUDRA SE METTRE SUR LA PAGE D ACCUEIL";
        }
    }

}
