<?php
namespace Application\DataProviders;

use Application\Domain\UseCase\GetCustomer;
use Application\Domain\Entity\Customer;

class CustomerDbProvider implements GetCustomer
{
    public function __construct()
    {
    }

    public function getCustomer($id): Customer
    {
        $customer = new Customer();
        $customer->setCompanyName("My Company Rocks");
        return $customer;
    }
}
