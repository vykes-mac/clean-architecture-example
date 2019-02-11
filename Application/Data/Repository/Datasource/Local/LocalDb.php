<?php
namespace Application\Data\Repository\Datasource\Local;

use Application\Domain\UseCase\GetCustomer;
use Application\Domain\Entity\Customer;

final class LocalDb implements GetCustomer
{
    private $mysqli;

    public function __construct()
    {
        //$this->pdo = new \PDO('mysql:host=localhost;dbname=customer', 'root', '');
        $this->mysqli = new \mysqli("localhost", "root", "root", "customer");
    }
    
    public function getCustomer($id): Customer
    {
        $result = $this->mysqli->query("SELECT * FROM customer WHERE customerid=$id");
        $row = mysqli_fetch_row($result);
        
        $customer = new Customer();
        $customer->setCustomerId($row[0]);
        $customer->setContactName($row[1]);
        
        return $customer;
    }
}
