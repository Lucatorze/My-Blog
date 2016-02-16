<?php
require_once("connection_bdd.php");
require_once("loginModel.php");
if(isset($_SESSION['userId'])){
  session_unset();
  session_destroy();
  echo " Vous êtes déconnecté";
}else{
  $login = new login();
  if(isset($_POST['nickname'])){
    $salt = 'AESDaqdZEZA;%%aeaADDZADAZ^^eâem^mad,k,keiijdifdjsiufezfzfzjfzijfzijzfij';
    $_POST['password']= trim(htmlspecialchars($salt.sha1($_POST['password'])));
    $result = $login->loginUser($pdo);
      if( $result === false){
        echo "Votre pseudo est introuvable !";
      }
      elseif(empty($_POST['password'])){
        echo "Veuillez rentrer un password !";
      }
      elseif($_POST['password'] != $result['password']){
        echo "Mot de passe incorrect";
      }else{
        $_SESSION['userId'] = $result['id'];
        echo " Bienvenue vous êtes maintenant connecté";
      }
  }

}
