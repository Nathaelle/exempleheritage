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
    
}