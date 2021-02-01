<?php

namespace Models;

class Demandeur extends Utilisateur {

    private $idDemandeur;

    function getIdDemandeur(): ?int {
        return $this->idDemandeur;
    }

    function setIdDemandeur(int $id) {
        $this->idDemandeur = $id;
    }

    function insert() {

        $verif = parent::insert();

        if($verif) {
            //On insère le demandeur
            $query = "INSERT INTO demandeurs (nom, prenom, cp, email, passwd, id_utilisateur) VALUES (:nom, :prenom, :cp, :email, :pw, :id);";
            $result = $this->pdo->prepare($query);

            $result->bindValue("nom", $this->nom, \PDO::PARAM_STR);
            $result->bindValue("prenom", $this->prenom, \PDO::PARAM_STR);
            $result->bindValue("cp", $this->cp, \PDO::PARAM_STR);
            $result->bindValue("email", $this->email, \PDO::PARAM_STR);
            $result->bindValue("pw", $this->passwd, \PDO::PARAM_STR);
            $result->bindValue("id", $this->idUtilisateur, \PDO::PARAM_INT);

            $result->execute();
        }
        
    }

}