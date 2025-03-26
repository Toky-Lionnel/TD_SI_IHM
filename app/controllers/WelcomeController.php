<?php

namespace app\controllers;

use app\models\CaisseModel;
use Flight;

class WelcomeController {

	public function __construct() {

	}

	public function home() {
		$produit = Flight::CaisseModel()->getProduit();
        $data = ['nom' => $produit["nom"], 'prix'=> $produit["prix"]];
        Flight::render('template', $data);
    }

    
	public function homeDB() {
		$produit = Flight::CaisseModel()->test();
        $data = ['nom' => $produit["nom"], 'prix'=> $produit["date_naissance"]];
        Flight::render('welcome', $data);
    }

    public function testDB() {
        $CaisseModel = new CaisseModel(Flight::db());
		$produit = $CaisseModel->test();
        $data = ['nom' => $produit["nom"], 'prix'=> $produit["date_naissance"]];
        Flight::render('welcome', $data);
    }

    //pour tester le template
    public function homeTemplate() {
        $data = ['page' => "home"];
        Flight::render('template', $data);
    }

    //pour tester le template
    public function productTemplate() {
        $data = ['page' => "product"];
        Flight::render('template', $data);
    }
}