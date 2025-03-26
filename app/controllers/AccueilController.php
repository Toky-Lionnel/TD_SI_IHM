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
        $data = ['nom' => $caisse["nom"]];
        Flight::render('home', $data);
    }

}