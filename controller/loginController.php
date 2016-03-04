<?php
require_once("model/loginManage.php");

if(isset($_SESSION['userId'])){

    header('Location: index.php');
    exit;

}else{
    $error = '';
    $login = new login();
    if(isset($_POST['nickname'])){
        $salt = 'zezjaejzeoakzodkozdkozadkoazdoazkdokaodkazodkozakdoazdkoazkdaozdaokdoakzodkazodkaodkazodkoakoladkaodkaodkoakolkoo';
        $_POST['password'] = trim(htmlentities(sha1(sha1($_POST['password']).$salt)));
        $result = $login->loginUser($pdo);
        if( $result === false){
            $error = "Votre pseudo est introuvable !";
        }
        elseif(empty($_POST['password'])){
            $error = "Veuillez rentrer un password !";
        }
        elseif($_POST['password'] != $result['password']){
            $error = "Mot de passe incorrect";
        }else{

            if($result['rank'] == 2){

                $_SESSION['admin'] = $result['id'];
                $_SESSION['userId'] = $result['id'];

            }
            else{

                $_SESSION['userId'] = $result['id'];

            }

            header('Location: index.php?pages=loginOk');
            exit;

        }
    }

}
