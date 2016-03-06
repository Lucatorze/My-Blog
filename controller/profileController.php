<?php
require_once('model/profileManage.php');

$profile = new profile();
$result = $profile->profileUser($pdo);

$resetEmail = '';



if(!empty($_POST['newNickname']) && !empty($_POST['newEmail'])){
    if(isset($_POST['newNickname']) && $_POST['newNickname']>5){
        $_POST['newNickname'] = trim(htmlentities($_POST['newNickname']));
    }
    if(isset($_POST['newEmail'])){
        $_POST['newEmail'] = trim(htmlentities($_POST['newEmail']));
        $resetEmail = "New login ! ";
    }
    if(isset($_POST['newPassword'])){
        $salt = 'zezjaejzeoakzodkozdkozadkoazdoazkdokaodkazodkozakdoazdkoazkdaozdaokdoakzodkazodkaodkazodkoakoladkaodkaodkoakolkoo';
        $_POST['newPassword'] = trim(htmlentities(sha1(sha1($_POST['newPassword']).$salt)));
    }
    $profile->profileEdit($pdo);
}

