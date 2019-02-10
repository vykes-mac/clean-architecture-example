<?php
namespace Application\Domain\Entity;

class Customer
{
    private $customerId;
    private $companyName;
    private $contactName;
    private $contactTitle;
    private $Address;
     


    public function __construct()
    {
    }

    public function getCustomerId()
    {
        return $this->customerId;
    }
    public function setCustomerId($customerId)
    {
            $this->customerId = $customerId;
    }
    public function getCompanyName()
    {
            return $this->companyName;
    }
    public function setCompanyName($companyName)
    {
            $this->companyName = $companyName;
    }
    public function getContactName()
    {
            return $this->contactName;
    }
    public function setContactName($contactName)
    {
            $this->contactName = $contactName;
    }
    public function getContactTitle()
    {
            return $this->contactTitle;
    }
    public function setContactTitle($contactTitle)
    {
            $this->contactTitle = $contactTitle;
    }
    public function getAddress()
    {
            return $this->Address;
    }
    public function setAddress($Address)
    {
            $this->Address = $Address;
    }
}
