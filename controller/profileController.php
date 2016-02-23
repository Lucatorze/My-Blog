<?php
require_once('model/profileManage.php');

$profile = new profile();
$result = $profile->profileUser($pdo);


/*
$profileNew = new profile();
$result = $profileNew->profileEdit($pdo);

_______________________________________________________________________________
______________________________REQUETE__________________________________________
*/
/*__________FAUDRA FAIRE LES VERIF COMME A L INSCRIPTION + PEUT ETRE CHANGER DU COUP LES BINDPARAM DES REQUETE ____________________*/

if(!empty($_POST['newNickname']) && !empty($_POST['newEmail'])){
    // voir la sécu pour l'insertion dans la BDD du nouveau pseudo (html entities + trim + verif strlen
    if(isset($_POST['newNickname']) && $_POST['newNickname']>5){
        echo "new nickname";
        var_dump($_POST['newNickname']);
    }
    if(isset($_POST['newEmail'])){
        echo "new email";
        var_dump($_POST['newEmail']);
    }
    $profile->profileEdit($pdo);
}
echo " ID : ";
var_dump($_SESSION['userId']);
echo "REFRESH LA PAGE ET CA MARCHEEEEE";

