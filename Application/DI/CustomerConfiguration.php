<?php
namespace Application\DI;

use \Slim\Container;
use Application\Domain\UseCase\GetCustomerUseCase;
use Application\DataProviders\CustomerDbProvider;

class CustomerConfiguration
{
    public static function getCustomerUseCase()
    {
        return new GetCustomerUseCase(new CustomerDbProvider());
    }
}
