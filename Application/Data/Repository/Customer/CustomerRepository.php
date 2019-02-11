<?php
namespace Application\Data\Repository\Customer;

use Application\Domain\UseCase\GetCustomer;
use Application\Domain\Entity\Customer;

final class CustomerRepository implements GetCustomer
{
    private $datasource;

    public function __construct($datasource)
    {
        $this->datasource = $datasource;
    }

    public function getCustomer($id): Customer
    {
        return $this->datasource->getCustomer($id);
    }
}
