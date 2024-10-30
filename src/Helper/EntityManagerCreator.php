<?php

namespace Alura\Doctrine\Helper;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

class EntityManagerCreator {
    public static function createEntityManager(): EntityManager {

        // Create a simple "default" Doctrine ORM configuration for Annotations
        $config = ORMSetup::createAttributeMetadataConfiguration(
            [__DIR__ . "/src"],
            true
        );
        // or if you prefer yaml or XML
        // $config = Setup::createXMLMetadataConfiguration(array(__DIR__."/config/xml"), $isDevMode);
        // $config = Setup::createYAMLMetadataConfiguration(array(__DIR__."/config/yaml"), $isDevMode);

        // database configuration parameters
        $conn = array(
            'driver' => 'pdo_sqlite',
            'path' => __DIR__ . '/../../db.sqlite',
        );

        // obtaining the entity manager
        return EntityManager::create($conn, $config);
    }
}