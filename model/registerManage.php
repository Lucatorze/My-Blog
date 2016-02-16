<?php

class register{
    function registerUser($pdo,$date){
        $addUser = $pdo->prepare("INSERT INTO users(firstname,lastname,nickname,password,email,date) VALUE (?,?,?,?,?,?)");
        $addUser->bindParam(1, $_POST['firstname']);
        $addUser->bindParam(2, $_POST['lastname']);
        $addUser->bindParam(3, $_POST['nickname']);
        $addUser->bindParam(4, $_POST['password']);
        $addUser->bindParam(5, $_POST['email']);
        $addUser->bindParam(6, $date);
        $addUser->execute();
    }
}