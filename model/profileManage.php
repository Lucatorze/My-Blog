<?php
class profile{
    function profileUser($pdo){
        $profile = $pdo->prepare("SELECT * FROM users WHERE id= :id");
        $profile->bindParam(':id',$_SESSION['userId']);
        $profile->execute();
        $result=$profile->fetch();
        return $result;
    }
    function profileEdit($pdo){
        $newProfile = $pdo->prepare("UPDATE users SET nickname = :nickname, email = :email WHERE id = :id");
        $newProfile->bindParam(':id',$_SESSION['userId']);
        $newProfile->bindParam(':nickname',$_POST['newNickname']);
        $newProfile->bindParam(':email',$_POST['newEmail']);
        $newProfile->execute();
    }
}