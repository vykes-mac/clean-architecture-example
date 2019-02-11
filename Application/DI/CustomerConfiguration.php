<?php
namespace Application\DI;

use \Slim\Container;
use Application\Domain\UseCase\GetCustomerUseCase;
use Application\Data\Repository\Customer\CustomerRepository;
use Application\Data\Repository\Datasource\Local\LocalDb;

class CustomerConfiguration
{
    public static function getCustomerUseCase()
    {
        return new GetCustomerUseCase(new CustomerRepository(new LocalDb())) ;
    }
}
