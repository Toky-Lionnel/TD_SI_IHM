<?php

namespace app\models;

use Flight;
use PDO;

class CaisseModel {

    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }


    public function getAllCaisse()
    {
        $stmt = $this->db->query("SELECT * FROM Caisse");
        return $stmt->fetch();
    }

    public function getAllDept () {
        $stmt = $this->db->prepare("SELECT * FROM Departement");
        
        $stmt->execute();
        $departements = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $departements;
    }
    
}