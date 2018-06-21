<?php 

require __DIR__.'/../vendor/autoload.php';

require __DIR__.'/../core/bootstrap.php';

use Bnw\Core\{Router, Request};

Router::load(__DIR__.'/../app/routes.php')
    ->direct(Request::uri(), Request::method());
