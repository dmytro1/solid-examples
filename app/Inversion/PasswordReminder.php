<?php

namespace App\Inversion;

class PasswordReminder
{
    private $dbConnection;

    /**
     * We don't care what connection we use.
     * We depend upon abstraction.
     *
     * PasswordReminder constructor.
     * @param ConnectionInterface $dbConnection
     */
    public function __construct(ConnectionInterface $dbConnection)
    {
        $this->dbConnection = $dbConnection;

        $this->dbConnection->connect();
    }

    public function remind(): bool
    {
        return true;
    }
}
