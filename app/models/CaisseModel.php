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

	public  function getProduit() {
        $produit = ['nom' => 'iphone 15', 'prix'=> 1290];
        return $produit;
    }

	public  function test() {
        $stmt = $this->db->query("SELECT * FROM etudiant");
        return $stmt->fetch();
    }

    public function getAllCaisse()
    {
        $stmt = $this->db->query("SELECT * FROM Caisse");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getAllProduit()
    {
        $stmt = $this->db->query("SELECT * FROM Produit");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProduitByCaisse($id_caisse)
    {
        $stmt = $this->db->prepare("SELECT p.* FROM Achat as a JOIN Produit as p ON a.id_produit=p.id WHERE a.id_caisse = ?");
        $stmt->execute([$id_caisse]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $stmt->fetch();
    }


    public function getProduitById ($id_produit)
    {
        $stmt = $this->db->prepare("SELECT * FROM Produit WHERE id = ?");
        $stmt->execute([$id_produit]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    
}