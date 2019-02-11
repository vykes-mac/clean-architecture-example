<?php
namespace Application\Data\Models;

use Application\Domain\Entity\Customer;

class CustomerDto implements \JsonSerializable
{
    public $customerId;
    public $companyName;
    public $contactName;
    public $contactTitle;
    public $address;
    
    public function __construct(Customer $customer)
    {
        $this->customerId = $customer->getCustomerId();
        $this->companyName = $customer->getCompanyName();
        $this->contactName = $customer->getContactName();
        $this->contactTitle = $customer->getContactTitle();
        $this->address = $customer->getAddress();
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
