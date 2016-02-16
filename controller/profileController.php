<?php
require_once('model/profileManage.php');

$profile = new profile();
$result = $profile->profileUser($pdo);