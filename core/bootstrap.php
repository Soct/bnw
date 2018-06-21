<?php

use Bnw\Core\App;
use Bnw\Database\QueryBuilder;
use Bnw\Database\Connection;

App::bind('config', require __DIR__.'/../config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

function view($name, $data = [])
{
    extract($data);

    return require __DIR__."/../app/views/{$name}.view.php";
}

function redirect($path)
{
    return header("Location: /{$path}");
}
