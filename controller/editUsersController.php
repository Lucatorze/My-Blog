<?php
require_once('model/editUsersManage.php');

$editUsers = new editUsers();
$userForUpdate = $editUsers->getUserUpdate($pdo);
$result = $editUsers->getUser($pdo);
$getUserlist = $editUsers->getUserlist($pdo);

$success = '';

if (isset($_POST['firstname']) and isset($_POST['lastname']) and isset($_POST['nickname'])  and isset($_POST['email']) and isset($_POST['password']) and isset($_POST['rank'])){

    $editUsers->updateUsers($pdo);

    var_dump($editUsers);

    $success = '<div class="success"> Utilisateur modifié avec succès !<br/><a href="gest_member.php" >Retour</a></div>';

}

if (isset($_GET['del'])){

    $editUsers->deleteUsers($pdo);
    $success = '<div class="success"> Utilisateur effacé avec succès !<br/><a href="gest_member.php" >Retour</a></div>';

}