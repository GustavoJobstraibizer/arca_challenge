<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoriaRepository")
 */
class Categoria {

  /**
   * @ORM\Id()
   * @ORM\GeneratedValue()
   * @ORM\Column(type="integer")
   */
  private $id;

  /**
   * @var string
   * @ORM\Column(type="string")
   * @Assert\NotBlank(message="campo Descrição não pode ser vazio!")
   *
   */
  private $descricao;

  /**
   * @var object
   *
   * @ORM\ManyToMany(targetEntity="App\Entity\Empresa", mappedBy="categoria")
   *
   */
  private $category;

  // getters and setters

  public function getId() {
    return $this->id;
  }

  public function setDescricao($descricao) {
    $this->descricao = $descricao;
  }

  public function getDescricao() {
    return $this->descricao;
  }

  public function setCategory($category) {
    $this->category = $category;
  }

  public function getCategory() {
    return $this->category;
  }

}
