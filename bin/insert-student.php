<?php

use \Alura\Doctrine\Entity\Phone;
use Alura\Doctrine\Entity\Student;
use Alura\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

$student = new Student('Aluno novo');
$student->addPhone( new Phone('(11) 91555 - 0411'));
$student->addPhone(new Phone('(11) 33333 - 2122'));

$entityManager->persist($student);
$entityManager->flush();
