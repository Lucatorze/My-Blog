<?php
class profile{
    function profileUser($pdo){
        $profile = $pdo->prepare("SELECT * FROM users WHERE id= :id");
        $profile->bindParam(':id',$_SESSION['userId']);
        $profile->execute();
        $result=$profile->fetch();
        return $result;
    }
}