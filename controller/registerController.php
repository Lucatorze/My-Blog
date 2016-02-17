<?php
require_once("model/registerManage.php");

$register = new register();
$verif = $register->verif($pdo);
var_dump($verif);
$date = time();

if(isset($_POST['firstname'])){

    $formOk = true;

    if(isset($_POST['firstname']) && strlen($_POST['firstname'])>2){
        $_POST['firstname'] = trim(htmlspecialchars($_POST['firstname']));
        echo $_POST['firstname']."<br>";
    }else{
        echo "veuillez saisir un prénom.";
        $formOk = false;
    }
    if(isset($_POST['lastname']) && strlen($_POST['lastname'])>2){
        $_POST['lastname'] = trim(htmlspecialchars($_POST['lastname']));
        echo $_POST['lastname']."<br>";
    }else{
        echo "veuillez saisir un nom correct.";
        $formOk = false;
    }

    if(isset($_POST['nickname']) && strlen($_POST['nickname'])>5){
        if($verif['nickname'] == $_POST['nickname']){
            echo "ce pseudo est déjà pris";
            $formOk = false;
        }else{
            $_POST['nickname'] = trim(htmlspecialchars($_POST['nickname']));
            echo $_POST['nickname']."<br>";
        }
    }else{
        echo "veuillez saisir un pseudo correct.";
        $formOk = false;
    }
    if(isset($_POST['password']) && strlen($_POST['password'])>4 && isset($_POST['password2']) && $_POST['password'] === $_POST['password2']){
        $salt = 'zezjaejzeoakzodkozdkozadkoazdoazkdokaodkazodkozakdoazdkoazkdaozdaokdoakzodkazodkaodkazodkoakoladkaodkaodkoakolkoo';
        $_POST['password'] = trim(htmlspecialchars($salt.sha1($_POST['password'])));
        echo $_POST['password']."<br>";
    }else{
        echo "veuillez saisir un mdp valide";
        $formOk = false;
    }
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        if($verif['email'] == $_POST['email']){
            echo "ce mail est déjà utilisé";
            $formOk = false;
        }else{
            $_POST['email'] = trim(htmlspecialchars($_POST['email']));
            echo $_POST['email']."<br>";
        }
    }else{
        echo "veuillez saisir un email valide";
        $formOk = false;
    }
    if($formOk){
        $register->registerUser($pdo,$date);
        echo "utilisateur ajouté avec succès";
        var_dump($formOk);
    }

}
