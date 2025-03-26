<?php

namespace app\controllers;

use app\models\CaisseModel;
use Flight;

class AccueilController
{
    public function __construct() {

	}

    public function home()
    {
        $caisse = Flight::CaisseModel()->getAllCaisse();
        $data = ['caisse' => $caisse]; 
        Flight::render('home', $data);
    }


    public function vers_saisie_achat()
    {
        $request = Flight::request()->query;
        $id_caisse = (int) $request->id_caisse;

        $produits = Flight::CaisseModel()->getAllProduit();
        Flight::render('achat', ['produits' => $produits, 'id_caisse' => $id_caisse]);
    }
    
}