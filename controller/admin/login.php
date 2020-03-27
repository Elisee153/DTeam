<?php
/*
*
controller
*
*/
session_start();

require_once("../../model/connexion.php");
require_once("../../model/User.php");


extract($_POST);

$user = User::select();
$data = json_decode($user,true);

//Verification de l'existence de l'utilisateur
$found = false;

foreach($data as $d=>$value){
    if((strcmp($login,$value['login']) == 0) && (strcmp($pwd,$value['pwd']) == 0)){

        $_SESSION['id'] = $value['iduser'];
        $_SESSION['nom'] = $value['nom'];

        $found = true;

        header("Location:../../da-min/dashboard.php");
    }    
}

if(!$found){
    //header("Location:../../da-min/dashboard.php");
    $_SESSION['error'] = "Erreur! Login ou mot de passe incorrect.";
    header("Location:../../da-min");
}

