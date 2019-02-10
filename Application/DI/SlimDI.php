<?php
namespace Application\DI;

use \Slim\Container;

final class SlimDi
{
    private static $instance = null;
    public $container;

    private function __construct()
    {
        $this->container = new Container();
        $this->container["getCustomerUseCase"] = CustomerConfiguration::getCustomerUseCase();
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new SlimDi();
        }

        return self::$instance;
    }
}
