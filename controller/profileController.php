<?php
require_once('model/profileManage.php');

$profile = new profile();
$result = $profile->profileUser($pdo);
$resetEmail = '';
$resetNickname = '';



if(!empty($_POST['newNickname']) && !empty($_POST['newEmail'])){
    if(isset($_POST['newNickname']) && $_POST['newNickname']>5){
        $_POST['newNickname'] = trim(htmlentities($_POST['newNickname']));
        $resetNickname = "Nickname Refresh ! ";
    }
    if(isset($_POST['newEmail'])){
        $_POST['newEmail'] = trim(htmlentities($_POST['newEmail']));
        $resetEmail = "New login ! ";
    }
    $profile->profileEdit($pdo);
}

