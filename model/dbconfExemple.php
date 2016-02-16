<?php
$config = [

    "host" => "mysql:host=host;dbname=dbname",
    "user" => "login",
    "password" => "password"

];

session_start();

$pdo = new PDO($config['host'], $config['user'], $config['password']);