<?php
include_once("connection_bdd.php");
if(isset($_SESSION['userId'])){
  session_unset();
  session_destroy();
  echo " Vous êtes déconnecté";
}else{
  if(isset($_POST['nickname'])){
    $salt = 'AESDaqdZEZA;%%aeaADDZADAZ^^eâem^mad,k,keiijdifdjsiufezfzfzjfzijfzijzfij';
    $password = trim(htmlspecialchars($salt.sha1($_POST['password'])));

    $verifUser = $pdo->prepare("SELECT * FROM users WHERE nickname= :nickname");
      $verifUser->bindParam(':nickname',$_POST['nickname']);
      $verifUser->execute();
      $result=$verifUser->fetch();

      if( $result === false){
        echo "Votre pseudo est introuvable !";
      }
      elseif(empty($_POST['password'])){
        echo "Veuillez rentrer un password !";
      }
      elseif($password != $result['password']){
        echo "Mot de passe incorrect";
      }else{
        $_SESSION['userId'] = $result['id'];
        echo " Bienvenue vous êtes maintenant connecté";
      }
  }

}
