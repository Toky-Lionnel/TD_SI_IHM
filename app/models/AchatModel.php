<?php 

namespace app\models;


class AchatModel
{
    private $id_produit;
    private $nom_produit;
    private $prix_unitaire;
    private $quantite;
    private $montant;

    public function getIdProduit()
    {
        return $this->id_produit;
    }

    public function setIdProduit($id_produit)
    {
        $this->id_produit = $id_produit;
    }

    public function getNomProduit()
    {
        return $this->nom_produit;
    }

    public function setNomProduit($nom_produit)
    {
        $this->nom_produit = $nom_produit;
    }

    public function getPrixUnitaire()
    {
        return $this->prix_unitaire;
    }

    public function setPrixUnitaire($prix_unitaire)
    {
        $this->prix_unitaire = $prix_unitaire;
    }

    public function getQuantite()
    {
        return $this->quantite;
    }

    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    }

    public function getMontant()
    {
        return $this->montant;
    }

    public function setMontant($montant)
    {
        $this->montant = $montant;
    }
    
}


?>