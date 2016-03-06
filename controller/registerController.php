
<?php
require_once("model/registerManage.php");


/* $verif = $register->verif($pdo); */

$date = time();
$errors = array();
$isFormGood = true;
$msgOk = '';
$register = new register();

if(isset($_POST))
{

    if(!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errors['email'] = 'Votre email doit être valide';
        $isFormGood = false;
    }

    if(!isset($_POST['password']) || strlen($_POST['password']) < 6) {
        $errors['password'] = 'Votre mot de passe doit faire plus de 6 caractères';
        $isFormGood = false;
    }
    if(!isset($_POST['password2']) || ($_POST['password2'] != $_POST['password'])) {
        $errors['password2'] = 'Votre mots de passes doivent être identique';
        $isFormGood = false;
    }
    if(!isset($_POST['nickname']) || strlen($_POST['nickname']) < 4) {
        $errors['nickname'] = 'Votre pseudo doit faire plus de 4 caractères';
        $isFormGood = false;
    }
    if(!isset($_POST['firstname']) || !$_POST['firstname']) {
        $errors['firstname'] = 'Indiquez votre prénom';
        $isFormGood = false;
    }

    if(!isset($_POST['lastname']) || !$_POST['lastname']) {
        $errors['lastname'] = 'Indiquez votre nom';
        $isFormGood = false;
    }

    if(!$isFormGood) {
        foreach($errors as $value) {
                echo  $value."<br>";
        }
    } else {
        $_POST['email'] = trim(htmlentities($_POST['email']));
        $_POST['password2'] = trim(htmlentities($_POST['password2']));
        $_POST['nickname'] = trim(htmlentities($_POST['nickname']));
        $_POST['firstname'] = trim(htmlentities($_POST['firstname']));
        $_POST['lastname'] = trim(htmlentities($_POST['lastname']));

        $salt = 'zezjaejzeoakzodkozdkozadkoazdoazkdokaodkazodkozakdoazdkoazkdaozdaokdoakzodkazodkaodkazodkoakoladkaodkaodkoakolkoo';
        $_POST['password'] = trim(htmlentities(sha1(sha1($_POST['password']).$salt)));
        unset($_POST['password2']);

        $register->registerUser($pdo,$date);


        header('Location: index.php?pages=registerOk');
        exit;



    }
} else {
    http_response_code(400);
    $msgError = "veuillez remplir les champs !";
}

