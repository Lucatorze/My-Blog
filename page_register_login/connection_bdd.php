
<?php
 $config = [
    "host" => "mysql:host=127.0.0.1;dbname=blogbdd",
    "user" => "root",
     "password" => ""
 ];
 session_start();
 $pdo = new PDO($config['host'],$config['user'],$config['password']);
