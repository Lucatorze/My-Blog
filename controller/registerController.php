
<?php
require_once("model/registerManage.php");


$register = new register();
$verif = $register->verif($pdo);

$date = time();
$errors = array();
$isFormGood = true;

if(isset($_POST))
{

    if(!isset($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errors['email'] = 'The email field should be filled';
        $isFormGood = false;
    }

    if(!isset($_POST['password']) || strlen($_POST['password']) < 6) {
        $errors['password'] = 'Your password should have at least 6 characters';
        $isFormGood = false;
    }
    if(!isset($_POST['password2']) || ($_POST['password2'] != $_POST['password'])) {
        $errors['password2'] = 'You Password Confirmation should be exactly like your password';
        $isFormGood = false;
    }
    if(!isset($_POST['nickname']) || strlen($_POST['nickname']) < 4) {
        $errors['nickname'] = 'Your pseudo should have at least 4 characters';
        $isFormGood = false;
    }
    if(!isset($_POST['firstname']) || !$_POST['firstname']) {
        $errors['firstname'] = 'The firstname field should be filled';
        $isFormGood = false;
    }

    if(!isset($_POST['lastname']) || !$_POST['lastname']) {
        $errors['lastname'] = 'The lastname field should be filled';
        $isFormGood = false;
    }

    if(!$isFormGood) {
        http_response_code(400);
        echo(json_encode(array('success'=>false, "errors"=>$errors)));
    } else {
        $_POST['email'] = trim(htmlentities($_POST['email']));
        $_POST['password2'] = trim(htmlentities($_POST['password2']));
        $_POST['nickname'] = trim(htmlentities($_POST['nickname']));
        $_POST['firstname'] = trim(htmlentities($_POST['firstname']));
        $_POST['lastname'] = trim(htmlentities($_POST['lastname']));

        $salt = 'zezjaejzeoakzodkozdkozadkoazdoazkdokaodkazodkozakdoazdkoazkdaozdaokdoakzodkazodkaodkazodkoakoladkaodkaodkoakolkoo';
        $_POST['password'] = trim(htmlentities(sha1(sha1($_POST['password']).$salt)));
        unset($_POST['password2']);


        echo(json_encode(array('success'=>true, "user"=>$_POST)));

        $register->registerUser($pdo,$date);

        header('Location: index.php?pages=registerOk');
        exit;

    }
} else {
    http_response_code(400);
    echo(json_encode(array('success'=>false, "errors"=>array('Missing form data'))));
}

