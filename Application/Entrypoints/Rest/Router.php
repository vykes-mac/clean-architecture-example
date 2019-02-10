<?php
namespace Application\Entrypoints\Rest;

use Application\Entrypoints\Controllers\CustomerController;

final class Router
{
    private $app;
    public function __construct($app)
    {
        $this->app = $app;
    }

    public function configureRoutes()
    {
        $this->app->get('/customer/{id}', CustomerController::class . ':getCustomer');
    }
}
