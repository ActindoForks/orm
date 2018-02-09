<?php

declare(strict_types=1);

namespace Doctrine\ORM\EntityManager;

use Doctrine\ORM\ManagerException;

final class MissingMappingDriverImplementation extends \Exception implements ManagerException
{
    public static function create() : self
    {
        return new self(
            "It's a requirement to specify a Metadata Driver and pass it " .
            'to Doctrine\\ORM\\Configuration::setMetadataDriverImpl().'
        );
    }
}
