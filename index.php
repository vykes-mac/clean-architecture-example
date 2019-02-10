<?php
require_once __DIR__ . '/vendor/autoload.php';

use Application\Entrypoints\Controllers\CustomerController;
use \Slim\App;
use Application\DI\SlimDi;
use Application\Entrypoints\Rest\Router;

$app = new App(SlimDi::getInstance()->container);
$router = new Router($app);
$router->configureRoutes();
$app->run();
