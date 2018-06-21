<?php

$router->get('', 'PagesController@home');
$router->get('contact', 'PagesController@contact');
$router->get('about', 'PagesController@about');


$router->get('new-user', 'UsersController@create');
$router->post('new-user', 'UsersController@store');

$router->get('connect-user', 'UsersController@connect');
$router->post('connect-user', 'UsersController@validate');

$router->get('deconnect-user', 'UsersController@deconnect');