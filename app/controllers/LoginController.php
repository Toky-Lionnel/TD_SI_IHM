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
        $data = ['contexte' => "Inscription", 'url' => constant('BASE_URL').'inscription' ];
        Flight::render('login',$data);
    }


    public function connexion ()
    {
        $data = ['contexte' => "Connexion" , 'url' => constant('BASE_URL').'connexion' ];
        Flight::render('login',$data);
    }


    public function insertUtilisateur ()
    {

        $data = Flight::request()->data;
        $nom = $data->nom;
        $mdp = $data->password;

        Flight::LoginModel()->insertUtilisateur($nom,$mdp);

        session_start();
        $_SESSION['type'] = "message-success";
        $_SESSION['message'] = "Inscription termine, veuillez vous connecter";

        Flight::redirect(constant('BASE_URL').'connexion');
    }


    public function login()
    {
        $data = Flight::request()->data;
        $nom = $data->nom;
        $mdp = $data->password;
    
        $userId = Flight::LoginModel()->verifUtilisateur($nom, $mdp);
    
        if ($userId) {
            session_start();
            $_SESSION['utilisateur'] = $userId; // Stocke l'ID de l'utilisateur en session
    
            Flight::redirect(constant('BASE_URL')); // Redirige vers la page principale
        } else {
            session_start();
            $_SESSION['type'] = "message-error";
            $_SESSION['message'] = "Informations non exactes.";
    
            Flight::redirect(constant('BASE_URL') . 'connexion'); // Retour à la page de connexion
        }
    }

}
