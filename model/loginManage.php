<?php

class login{
    function loginUser($pdo){
        $verifUser = $pdo->prepare("SELECT * FROM users WHERE nickname= :nickname");
        $verifUser->bindParam(':nickname',$_POST['nickname']);
        $verifUser->execute();
        $result=$verifUser->fetch();
        return $result;
    }
}
