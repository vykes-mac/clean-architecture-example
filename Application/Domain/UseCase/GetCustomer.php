<?php
/**
 * @GetCustomer
 * Interface that exposes get customer use case
 */

namespace Application\Domain\UseCase;

use Application\Domain\Entity\Customer;

interface GetCustomer
{
    public function getCustomer($id): Customer;
}
