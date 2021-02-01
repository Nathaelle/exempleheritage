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

        var_dump($verif);

        if($verif) {
            //On insère le demandeur
            $query = "INSERT INTO demandeurs (id_demandeur, nom, prenom, cp, email, passwd, id_utilisateur) VALUES (:idd, :nom, :prenom, :cp, :email, :pw, :id);";
            $result = $this->pdo->prepare($query);
            
            $result->bindValue("idd", $verif, \PDO::PARAM_INT);
            $result->bindValue("nom", $this->getNom(), \PDO::PARAM_STR);
            $result->bindValue("prenom", $this->getPrenom(), \PDO::PARAM_STR);
            $result->bindValue("cp", $this->getCp(), \PDO::PARAM_STR);
            $result->bindValue("email", $this->getEmail(), \PDO::PARAM_STR);
            $result->bindValue("pw", $this->getPasswd(), \PDO::PARAM_STR);
            $result->bindValue("id", $verif, \PDO::PARAM_INT);

            if(!$result->execute()) {
                var_dump($result->errorInfo());
            }
        }
        
    }

}