<?php

require 'vendor/autoload.php';

use \Alura\Doctrine\Helper\EntityManagerCreator;
use Doctrine\Migrations\Configuration\Migration\PhpFile;
use Doctrine\Migrations\Configuration\EntityManager\ExistingEntityManager;
use Doctrine\Migrations\DependencyFactory;

$config = new PhpFile('migrations.php');

$entityManager = EntityManagerCreator::createEntityManager();

return DependencyFactory::fromEntityManager($config,
        new ExistingEntityManager($entityManager));