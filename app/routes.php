<?php

// Page Route
$router->get('', 'PagesController@home');
$router->get('contact', 'PagesController@contact');
$router->get('about', 'PagesController@about');
$router->get('tarif', 'PagesController@tarif');



// User route
$router->get('new-user', 'UsersController@create');
$router->post('new-user', 'UsersController@store');

$router->get('connect-user', 'UsersController@connect');
$router->post('connect-user', 'UsersController@validate');

$router->get('deconnect-user', 'UsersController@deconnect');

// RDV route
$router->get('rdv', 'RdvsController@show');
$router->post('rdv', 'RdvsController@store');

// Animal route
$router->get('animal', 'AnimalsController@show');
$router->get('new-animal', 'AnimalsController@create');
$router->post('new-animal', 'AnimalsController@store');

// admin routes
$router->get('admin', 'UsersController@admin');
