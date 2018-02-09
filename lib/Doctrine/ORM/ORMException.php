<?php

declare(strict_types=1);

namespace Doctrine\ORM;

use Exception;
use function get_class;
use function implode;
use function sprintf;

/**
 * Base exception class for all ORM exceptions.
 */
interface ORMException extends \Throwable
{
}
