<?php

/* include le fichier à la connection bdd */

  if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['pseudo']) && isset($_POST['password']) && isset($_POST['password2']) && isset($_POST['email']))
  {
    $formOK = true;
    if(empty($_POST['firstname']) || strlen($_POST['firstname'])<1 || is_numeric($_POST['firstname']))
    {
      $formOK = false;
      //nom de la div firstname
      echo " Le firstname doit contenir au minimum 2 caracteres !<br>";
      echo " le firstname ne doit contenir que des lettres";
    }

    if(empty($_POST['lastname']) || strlen($_POST['lastname'])<1 || is_numeric($_POST['lastname']))
    {
      $formOK = false;
      //nom de la div lastname
      echo " Le lastname doit contenir au minimum 2 caracteres !<br>";
      echo " Le lastname doit que des lettres";
    }

    if(empty($_POST['nickname']) || strlen($_POST['nickname'])<4)
    {
      $formOK = false;
      // nom de la div nickname
      echo " Le pseudo doit faire au minimum 4 caractères ";
    }

    if(empty($_POST['password']) || empty($_POST['password2']) || $_POST['password2'] !== $_POST['password'] || strlen($_POST['password'])<6 || strlen($_POST['password2'])<6)
    {
      $formOK = false;
      // nom de la div pwd
      echo "Le mot de passe doit contenir minimum 6 caractères";
    }

    if(empty($_POST['email']) || !filter_var($email, FILTER_VALIDATE_EMAIL) === false)
    {
      $formOK = false;
      // nom de la div email
      echo "L'email n'est pas valide ";
    }
    if($formOK = true)
    {
      $firstname = strtolower($_POST['firstname']);
      $lastname = strtolower($_POST['lastname']);
      $nickname = $_POST['nickname'];
      //pwd + sha1 + salt
      $salt = 'AzSreQAEdzsqez4745774518787/7/7/7;ezaeazkdoskodko£%eaekdkdos1';
      $password = sha1($_POST['password']).$salt;
      $email = $_POST['email'];
      $date = time();



    }
    var_dump($firstname);
    var_dump($lastname);
    var_dump($nickname);
    var_dump($salt);
    var_dump($password);
    var_dump($email);
    var_dump($date);

  }
