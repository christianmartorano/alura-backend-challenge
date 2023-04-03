<?php

namespace Helpers;

use Doctrine\DBAL\Driver\Connection;
use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Exception;

class DatabaseFactory
{

    private string $databasePath;

    public function __construct(string $databasePath = 'database.sqlite')
    {
        $this->databasePath = __DIR__ . $databasePath;
    }

    public function createConnection(): ?Connection
    {
        $connectionOptions = ['driver' => 'pdo_sqlite', 'path' => $this->databasePath];
        try {
            return DriverManager::getConnection($connectionOptions);
        } catch (Exception $e) {
            echo 'Error when trying to connect with ' . $this->databasePath . ' ' . $e;
        }
        return null;
    }

}