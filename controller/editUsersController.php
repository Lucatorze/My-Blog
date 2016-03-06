<?php
require_once('model/editUsersManage.php');

$editUsers = new editUsers();
$result = $editUsers->getUser($pdo);

$getUserlist = $editUsers->getUserlist($pdo);

$success = '';
$rank = '';

if (isset($_POST['firstname']) and isset($_POST['lastname'])){

    $_POST['firstname'] = trim(htmlentities($_POST['firstname']));
    $_POST['lastname'] = trim(htmlentities($_POST['lastname']));
    $_POST['nickname'] = trim(htmlentities($_POST['nickname']));
    $_POST['email'] = trim(htmlentities($_POST['email']));
    $_POST['password'] = trim(htmlentities($_POST['password']));

    $editUsers->updateUsers($pdo);

    header("Location: index.php?pages=editUsers");
    exit;

}

if (isset($_GET['update'])) {

    $userForUpdate = $editUsers->getUserUpdate($pdo);

}

if (isset($_GET['del'])){

    $editUsers->deleteUsers($pdo);
    $success = '<div class="success"> Utilisateur effacé avec succès !<br/><a href="gest_member.php" >Retour</a></div>';

}