<?php

namespace Models;

class Service extends DbConnect {

    private $idService;
    private $tarif;
    private $intitule;
    private $description;
    private $illustration;

    function getIdService(): ?int {
        return $this->idService;
    }

    function getTarif(): ?float {
        return $this->tarif;
    }

    function getIntitule(): ?string {
        return $this->intitule;
    }

    function getDescription(): ?string {
        return $this->description;
    }

    function getIllustration(): ?string {
        return $this->illustration;
    }

    function setIdService(int $id) {
        $this->idService = $id;
    }

    function setTarif(float $tarif) {
        $this->tarif = $tarif;
    }

    function setIntitule(string $txt) {
        $this->intitule = $txt;
    }

    function setDescription(string $txt) {
        $this->description = $txt;
    }

    function setIllustration(string $txt) {
        $this->illustration = $txt;
    }
}