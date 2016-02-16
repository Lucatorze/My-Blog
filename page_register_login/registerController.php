<?php
require_once("connection_bdd.php");
require_once("registerModel.php");

$register = new register();
$date = time();
$formOk = true;
if(!empty($_POST)){
  if(isset($_POST['firstname']) && strlen($_POST['firstname'])>2){
    $_POST['firstname'] = trim(htmlentities($_POST['firstname']));
    echo $_POST['firstname']."<br>";
  }else{
    echo "veuillez saisir un prénom.";
    $formOk = false;
  }
  if(isset($_POST['lastname']) && strlen($_POST['lastname'])>2){
    $_POST['lastname'] = trim(htmlentities($_POST['lastname']));
    echo $_POST['lastname']."<br>";
  }else{
    echo "veuillez saisir un nom correct.";
    $formOk = false;
  }
  if(isset($_POST['nickname']) && strlen($_POST['nickname'])>5){
    $_POST['nickname'] = trim(htmlentities($_POST['nickname']));
    echo $_POST['nickname']."<br>";
  }else{
    echo "veuillez saisir un pseudo correct.";
    $formOk = false;
    }

  if(isset($_POST['password']) && strlen($_POST['password'])>4 && isset($_POST['password2']) && $_POST['password'] === $_POST['password2']){
    $salt = 'AESDaqdZEZA;%%aeaADDZADAZ^^eâem^mad,k,keiijdifdjsiufezfzfzjfzijfzijzfij';
    $_POST['password'] = trim(htmlentities($salt.sha1($_POST['password'])));
    echo $_POST['password']."<br>";
  }else{
    echo "veuillez saisir un mdp valide";
    $formOk = false;
  }
  if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $_POST['email'] = trim(htmlentities($_POST['email']));
    echo $_POST['email']."<br>";
  }else{
    echo "veuillez saisir un email valide";
    $formOk = false;
  }
  if($formOk){
    $register->registerUser($pdo,$date);
    echo "utilisateur ajouté avec succès";
    var_dump($formOk);
  }
  if(!$formOk)
  {
      http_response_code(400);
      echo(json_encode(array('success'=>false, "errors"=>$errors)));
  }else{
      http_response_code(200);
      echo(json_encode(array('success'=>true, "user"=>$_POST)));
  }

}else{
    http_response_code(400);
    echo(json_encode(array('success'=>false, "errors"=>array('Missing form data'))));
}
