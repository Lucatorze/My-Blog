
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
    }
} else {
    http_response_code(400);
    echo(json_encode(array('success'=>false, "errors"=>array('Missing form data'))));
}

/*
$register = new register();
$verif = $register->verif($pdo);

$date = time();
$formOk = true;
$errors = array(); //AJAX
$formBad = '';
$formGood = '';


if(isset($_POST['firstname'])){
    if(isset($_POST['firstname']) && strlen($_POST['firstname'])>2){
        $_POST['firstname'] = trim(htmlentities($_POST['firstname']));
    }else{
        $errors['firstname'] = ' : Veuillez saisir un pseudo de 4 caractères minimum';
        $formOk = false;
    }
    if(isset($_POST['lastname']) && strlen($_POST['lastname'])>2){
        $_POST['lastname'] = trim(htmlentities($_POST['lastname']));
    }else{
        $errors['lastname'] = " : veuillez saisir un nom correct.";
        $formOk = false;
    }

    if(isset($_POST['nickname']) && strlen($_POST['nickname'])>5){
        if($verif['nickname'] == $_POST['nickname']){
            $errors['nickname'] =  " : ce pseudo est déjà pris";
            $formOk = false;
        }else{
            $_POST['nickname'] = trim(htmlentities($_POST['nickname']));
        }
    }else{
        $errors['nickname'] = " : veuillez saisir un pseudo correct.";
        $formOk = false;
    }
    if(isset($_POST['password']) && strlen($_POST['password'])>4 && isset($_POST['password2']) && $_POST['password'] === $_POST['password2']){
        $salt = 'zezjaejzeoakzodkozdkozadkoazdoazkdokaodkazodkozakdoazdkoazkdaozdaokdoakzodkazodkaodkazodkoakoladkaodkaodkoakolkoo';
        $_POST['password'] = trim(htmlentities($salt.sha1($_POST['password'])));
    }else{
        $errors['pwd'] =  " : veuillez saisir un mdp valide";
        $formOk = false;
    }
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        if($verif['email'] == $_POST['email']){
            $errors['email'] =  "ce mail est déjà utilisé";
            $formOk = false;
        }else{
            $_POST['email'] = trim(htmlentities($_POST['email']));
        }
    }else{
        $errors['email'] =  " : veuillez saisir un email valide";
        $formOk = false;
    }
    if($formOk){
        $register->registerUser($pdo,$date);

        $formGood = json_encode(array('success'=>true, "user"=>$_POST));
    }else{
        http_response_code(400);
        $formBad = json_encode(array('success'=>false, "errors"=>$errors));
    }

}
*/
