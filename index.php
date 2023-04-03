<?php

use Helpers\DatabaseFactory;

require __DIR__ . "/vendor/autoload.php";

$database = new DatabaseFactory();
$connection = $database->createConnection();
