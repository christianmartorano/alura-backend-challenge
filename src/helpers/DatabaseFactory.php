<?php

namespace Helpers;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Exception;

class DatabaseFactory
{

    private string $databasePath;
    private string $schema;

    public function __construct(string $databasePath = 'database.sqlite', string $schema = 'adopet')
    {
        $this->databasePath = __DIR__ . $databasePath;
        $this->schema = $schema;
    }

    public function createConnection(): ?Connection
    {
        $connectionOptions = ['driver' => 'pdo_sqlite', 'path' => $this->databasePath, 'dbname' => $this->schema];
        try {
            return DriverManager::getConnection($connectionOptions);
        } catch (Exception $e) {
            echo 'Error when trying to connect with ' . $this->databasePath . ' ' . $e;
        }
        return null;
    }

}