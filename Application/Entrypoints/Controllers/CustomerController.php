<?php
namespace Application\Entrypoints\Controllers;

use Psr\Container\ContainerInterface;
use Application\Domain\Entity\Customer;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Application\Data\Models\CustomerDto;

class CustomerController
{
    protected $container;
    /**@var GetCustomerUseCase */
    private $getCustomerUseCase;

    public function __construct(ContainerInterface $container)
    {

        $this->container = $container;
        $this->getCustomerUseCase = $this->container->get("getCustomerUseCase");
    }

    public function getCustomer($request, $response, $args)
    {
        $customer  = $this->getCustomerUseCase->getCustomer($args['id']);
        $customerDto = new CustomerDto($customer);
        return $response->withJson(json_encode($customerDto));
    }
}
