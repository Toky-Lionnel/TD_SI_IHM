<?php

namespace app\controllers;

use app\models\LoginModel;
use Flight;

class LoginController
{
    public function __construct() {

	}


    public function inscription ()
    {
        $context = "Inscription";
        $data = ['contexte' => "Inscription"]
    }


    public function insertUtilisateur ()
    {
        $data = Flight::request()->data;
        $nom = $data->nom;
        $mdp = $data->password;

        Flight::LoginModel()->insertUtilisateur($nom,$mdp);

        $_SESSION['type'] = "message-success";
        $_SESSION['message'] = "Inscription termine, veuillez vous connecter";

        Flight::redirect(constant('BASE_URL').'login');
    }

    public function login ()
    {
        $data = Flight::request()->data;
        $id_dept = $data->user;

        session_start();
        $_SESSION['utilisateur'] = $id_dept;

        Flight::render('home');
    }


}
