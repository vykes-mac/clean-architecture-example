<?php
namespace Application\Entrypoints\Controllers;

abstract class BaseController
{
    protected $app;

    public function __construct($app)
    {
        $this->app = $app;
    }
}
