<?php

namespace Models;

class Travailleur extends Utilisateur {

    private $idTravailleur;

    function getIdTravailleur(): ?int {
        return $this->idTravailleur;
    }

    function setIdTravailleur(int $id) {
        $this->idTravailleur = $id;
    }

    // function setEmail(string $email) {
    //     parent::setEmail($email);
    // }
    
}