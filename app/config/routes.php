<?php

use app\controllers\ApiExampleController;
use app\controllers\WelcomeController;
use app\controllers\AccueilController;
use app\controllers\LoginController;
use flight\Engine;
use flight\net\Router;
//use Flight;

/** 
 * @var Router $router 
 * @var Engine $app
 */

//  $Welcome_Controller = new WelcomeController();
//  $router->get('/', [ $Welcome_Controller, 'home' ]); 
//  $router->get('/homedb', [ $Welcome_Controller, 'homedb' ]); 
//  $router->get('/testdb', [ $Welcome_Controller, 'testdb' ]); 
//  $router->get('/home-template', [ $Welcome_Controller, 'homeTemplate' ]); 
//  $router->get('/product-template', [ $Welcome_Controller, 'productTemplate' ]); 
 
 
 //$router->get('/', \app\controllers\WelcomeController::class.'->home'); 
 
 $router->get('/hello-world/@name', function($name) {
     echo '<h1>Hello world! Oh hey '.$name.'!</h1>';
 });
 
 $router->group('/api', function() use ($router, $app) {
     $Api_Example_Controller = new ApiExampleController($app);
     $router->get('/users', [ $Api_Example_Controller, 'getUsers' ]);
     $router->get('/users/@id:[0-9]', [ $Api_Example_Controller, 'getUser' ]);
     $router->post('/users/@id:[0-9]', [ $Api_Example_Controller, 'updateUser' ]);
 });
 


$AccueilController = new AccueilController();
$router->get('/', [ $AccueilController, 'home' ]);



$Login_Controller = new LoginController();
$router->get('/connexion', [$Login_Controller,'connexion']);
$router->get('/inscription', [$Login_Controller,'inscription']);
$router->post('/inscription', [$Login_Controller,'insertUtilisateur']);
$router->post('/connexion', [$Login_Controller,'login']);
