<?php

namespace app\models;

use Flight;

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
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getProduitByCaisse($id_caisse)
    {
        $stmt = $this->db->prepare("SELECT 
            p.designation AS produit, 
            p.prix AS prix_unite, 
            a.quantite, 
            (p.prix * a.quantite) AS prix_total,
            a.date_achat
            FROM Achat a
            JOIN Produit p ON a.id_produit = p.id
            WHERE a.id_caisse = ?
            ORDER BY a.date_achat DESC");
        $stmt->execute([$id_caisse]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    
}