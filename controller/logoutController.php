<?php

if(isset($_SESSION['userId'])){
    session_unset();
    session_destroy();
}
else {

    header('Location : index.php?pages=login');
    exit;

}