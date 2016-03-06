<?php

class editUsers{

    function getUser($pdo){

        $stmt = $pdo->prepare("SELECT * FROM users ORDER BY id ASC");
        $stmt->execute();
        $result = $stmt->fetch();

        return $result;

    }

    function getUserUpdate($pdo){

        $stmt = $pdo->prepare("SELECT * FROM users WHERE id= :id");
        $stmt->bindParam("id", $_GET['update']);
        $stmt->execute();
        $result = $stmt->fetch();

        return $result;

    }

    function getUserlist($pdo){

        $stmt = $pdo->prepare("SELECT * FROM users ORDER BY id");
        $stmt->execute();

        $getUserId = [];

        while ($result = $stmt->fetch()) {
            $getUserId[] = $result;
        }

        return $getUserId;
    }


    function updateUsers($pdo){

        $stmt = $pdo->prepare("UPDATE users SET firstname = :firstname, lastname = :lastname, nickname = :nickname, email = :email, password = :password, rank = :rank WHERE id = :id");
        $stmt->bindParam("firstname", $_POST['firstname']);
        $stmt->bindParam("lastname", $_POST['lastname']);
        $stmt->bindParam("nickname", $_POST['nickname']);
        $stmt->bindParam("email", $_POST['email']);
        $stmt->bindParam("password", $_POST['password']);
        $stmt->bindParam("rank", $_POST['rank']);
        $stmt->bindParam("id", $_GET['update']);
        $stmt->execute();

    }

    function deleteUsers($pdo){

        $stmt = $pdo->prepare("DELETE FROM Users WHERE id = :id");
        $stmt->bindParam("id", $_GET['del']);
        $stmt->execute();

    }

}