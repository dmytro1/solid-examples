<?php

namespace App\Inversion;

/**
 * Lower level modules depend on higher level modules.
 *
 * Class DbConnection
 * @package App\Inversion
 */
class DbConnection implements ConnectionInterface
{
    public function connect(): bool
    {
        return true;
    }
}
