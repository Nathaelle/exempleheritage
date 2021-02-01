<?php

namespace Models;

class Utilisateur extends DbConnect {

    private $idUtilisateur;
    private $nom;
    private $prenom;
    private $cp;
    private $email;
    private $passwd;

    function getIdUtilisateur(): ?int {
        return $this->idUtilisateur;
    }

    function getNom(): ?string {
        return $this->nom;
    }

    function getPrenom(): ?string {
        return $this->prenom;
    }

    function getCp(): ?string {
        return $this->cp;
    }

    function getEmail(): ?string {
        return $this->email;
    }

    function getPasswd(): ?string {
        return $this->passwd;
    }

    function setIdUtilisateur(int $id) {
        $this->idUtilisateur = $id;
    }

    function setNom(string $nom) {
        $this->nom = $nom;
    }

    function setPrenom(string $prenom) {
        $this->prenom = $prenom;
    }

    function setCp(string $cp) {
        $this->cp = $cp;
    }
    
    function setEmail(string $email) {
        $this->email = $email;
    }

    function setPasswd(string $pw) {
        $this->passwd = $pw;
    }

    function insert() {

        $query = "INSERT INTO utilisateurs (nom, prenom, cp, email, passwd) VALUES (:nom, :prenom, :cp, :email, :pw);";
        $result = $this->pdo->prepare($query);

        $result->bindValue("nom", $this->nom, \PDO::PARAM_STR);
        $result->bindValue("prenom", $this->prenom, \PDO::PARAM_STR);
        $result->bindValue("cp", $this->cp, \PDO::PARAM_STR);
        $result->bindValue("email", $this->email, \PDO::PARAM_STR);
        $result->bindValue("pw", $this->passwd, \PDO::PARAM_STR);

        if(!$result->execute()) {
            var_dump($result->errorInfo());
            return false;
        }

        return $this->pdo->lastInsertId();

    }
}