<?php
namespace Application\Data\Repository\Datasource\Local;

use Application\Domain\UseCase\GetCustomer;
use Application\Domain\Entity\Customer;

final class LocalDb implements GetCustomer
{
    public function getCustomer($id): Customer
    {
        $customer = new Customer();
        $customer->setCompanyName("My Company Rocks");
        return $customer;
    }
}
