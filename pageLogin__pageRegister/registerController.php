<?php
include_once("connection_bdd.php");

$tabFormOk = []; //json_encode tab sucess
$tabFormError = []; //json_encode tab erreur
$formOk = true;
if(isset($_POST['firstname']) && strlen($_POST['firstname'])>2){
  $firstname = trim(htmlspecialchars($_POST['firstname']));
  echo $firstname;
  var_dump($firstname);
  array_push($tabFormOk, $firstname);
}else{
  echo "veuillez saisir un prénom.";
  $formOk = false;
}
if(isset($_POST['lastname']) && strlen($_POST['lastname'])>2){
  $lastname = trim(htmlspecialchars($_POST['lastname']));
  echo $lastname;
  var_dump($lastname);
}else{
  echo "veuillez saisir un nom correct.";
  $formOk = false;
}
if(isset($_POST['nickname']) && strlen($_POST['nickname'])>5){
  $nickname = trim(htmlspecialchars($_POST['nickname']));
  echo $nickname;
  var_dump($nickname);
}else{
  echo "veuillez saisir un pseudo correct.";
  $formOk = false;
  }

if(isset($_POST['password']) && strlen($_POST['password'])>4 && isset($_POST['password2']) && $_POST['password'] === $_POST['password2']){
  $salt = 'AESDaqdZEZA;%%aeaADDZADAZ^^eâem^mad,k,keiijdifdjsiufezfzfzjfzijfzijzfij';
  $password = trim(htmlspecialchars($salt.sha1($_POST['password'])));
  echo $password;
  var_dump($password);
}else{
  echo "veuillez saisir un mdp valide";
  $formOk = false;
}
if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  $email = trim(htmlspecialchars($_POST['email']));
  echo $email;
  var_dump($email);
}else{
  echo "veuillez saisir un email valide";
  $formOk = false;
}
$tabFormOkJson = json_encode($tabFormOk);
var_dump(json_encode($tabFormOkJson));

if($formOk = true){
  $date = time();
  $addUser = $pdo->prepare("INSERT INTO users(firstname,lastname,nickname,password,email,date) VALUE (?,?,?,?,?,?)");
   $addUser->bindParam(1, $firstname);
   $addUser->bindParam(2, $lastname);
   $addUser->bindParam(3, $nickname);
   $addUser->bindParam(4, $password);
   $addUser->bindParam(5, $email);
   $addUser->bindParam(6, $date);
   $addUser->execute();
   echo "utilisateur ajouté avec succès";
   /* redirection page de login */
}
