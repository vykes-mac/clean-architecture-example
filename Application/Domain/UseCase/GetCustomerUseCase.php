<?php
namespace Application\Domain\UseCase;

use Application\Domain\Entity\Customer;

class GetCustomerUseCase
{
    /**@var GetCustomer */
    private $getCustomerDetails;

    public function __construct($getCustomer)
    {
        $this->getCustomerDetails = $getCustomer;
    }

    /**
     * Get the value of getCustomer
     */
    public function getCustomer($id): Customer
    {
        $customer = $this->getCustomerDetails->getCustomer($id);
        return $customer;
    }
}
