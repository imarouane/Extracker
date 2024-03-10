<?php

declare(strict_types=1);

namespace Framework;

use PDO, PDOException;

class Database
{
    public PDO $connection;

    public function __construct(
        string $driver,
        array $config,
        string $username,
        string $password
    ) {
        $formattedConfig = http_build_query(data: $config, arg_separator: ';');
        $dsn = "{$driver}:{$formattedConfig}";

        try {
            $this->connection = new PDO($dsn, $username, $password);
        } catch (PDOException $e) {
            die("Unable to connect to database. {$e->getMessage()}");
        }
    }
}
