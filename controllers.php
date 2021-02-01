<?php
function showPage1() {
    return ["template" => "page1.php"];
}

function showPage2() {
    return ["template" => "page2.php"];
}

function insertTravailleur() {

    $travailleur = new Models\Travailleur();
    $travailleur->setNom($_POST["nom"]);
    $travailleur->setPrenom($_POST["prenom"]);
    $travailleur->setCp($_POST["cp"]);
    $travailleur->setEmail($_POST["email"]);
    $travailleur->setPasswd($_POST["passwd"]);
    $travailleur->insert();
}

function insertDemandeur() {

    $demandeur = new Models\Demandeur();
    $demandeur->setNom($_POST["nom"]);
    $demandeur->setPrenom($_POST["prenom"]);
    $demandeur->setCp($_POST["cp"]);
    $demandeur->setEmail($_POST["email"]);
    $demandeur->setPasswd($_POST["passwd"]);
    $demandeur->insert();
    
}

function insertService() {

    // $_POST["intitule"]
    // $_POST["tarif"]
    // $_POST["description"]
    var_dump($_POST);
    var_dump($_FILES);
    
}