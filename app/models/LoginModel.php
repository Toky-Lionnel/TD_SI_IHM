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
        $sql = "INSERT INTO Client (nom,motdepasse) VALUES (?,?)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$nom,$motdepasse]);
    }
    

    public function verifUtilisateur($nom, $motdepasse)
    {
        $sql = "SELECT id FROM Client WHERE nom = ? AND motdepasse = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$nom, $motdepasse]);
        $user = $stmt->fetch();
    
        return $user ? $user['id'] : false;
    }
    
}