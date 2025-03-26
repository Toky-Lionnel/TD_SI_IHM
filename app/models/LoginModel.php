<?php

namespace app\models;

use Flight;
use PDO;

class LoginModel {

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

	public function insertUtilisateur ($nom,$motdepasse)
    {
        $sql = "INSERT INTO client (nom,motdepasse) VALUES (?,?)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$nom,$motdepasse]);
    }
    

    public function verifUtilisateur($nom, $motdepasse) {
        $sql = "SELECT id FROM client WHERE nom = ? AND motdepasse = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$nom, $motdepasse]);
        return $stmt->fetch() ? true : false;
    }
    
}