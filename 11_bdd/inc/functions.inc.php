<?php 

function debug(array $liste){
    echo "<pre>";
    print_r($liste);
    echo "</pre>";
}


function mailOk(string $mail):bool{

    if (empty($mail)){
        return false;
    }

    if (strlen($mail)<=4 || strlen($mail)>150){
        return false;
    }

    return true;

}


function passwordFormatOk(string $mdp):bool{

    if (empty($mdp)){
        return false;
    }

    return true;

}

function nomOk(string $nom):bool{

    if (empty($nom)){
        return false;
    }

    return true;

}

function prenomOk(string $prenom):bool{

    if (empty($prenom)){
        return false;
    }

    return true;

}

function adresseOk(string $adresse):bool{

    if (empty($adresse)){
        return false;
    }

    return true;

}