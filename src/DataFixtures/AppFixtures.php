<?php

namespace App\DataFixtures;

use App\Entity\Categoria;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
  public function load(ObjectManager $manager)
  {
    $categorias = [
      'descricao' => 'Auto',
      'descricao' => 'Beauty and Fitness',
      'descricao' => 'Entertainment',
      'descricao' => 'Food and Dining',
      'descricao' => 'Health',
      'descricao' => 'Sports',
      'descricao' => 'Travel'
    ];

    foreach($categorias as $categoria) {
      $obj = new Categoria();
      $obj->setDescricao($categoria);
      $manager->persist($obj);
    }
    $manager->flush();
  }
}