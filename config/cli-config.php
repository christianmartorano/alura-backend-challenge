<?php
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\SchemaTool;
use Doctrine\ORM\Tools\Setup;
use Helpers\DatabaseFactory;
use Models\User;


require __DIR__ . "/../vendor/autoload.php";

$paths[] = __DIR__ . '/../src/models';

$config = Setup::createAnnotationMetadataConfiguration($paths, true);

$database = new DatabaseFactory();

$entityManager = EntityManager::create($database->getConnectionOptions(), $config);

$tool = new SchemaTool($entityManager);
$classes = array(
    $entityManager->getClassMetadata(User::class)
);
$tool->createSchema($classes);

return ConsoleRunner::createHelperSet($entityManager);
