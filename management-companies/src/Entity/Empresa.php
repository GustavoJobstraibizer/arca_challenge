<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EmpresaRepository")
 */
class Empresa
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="campo título não pode ser vazio!")
     */
    private $titulo;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=20)
     * @Assert\NotBlank(message="campo telefone não pode ser vazio!")
     */
    private $telefone;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message="campo endereço não pode ser vazio!")
     */
    private $endereco;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=15)
     * @Assert\NotBlank(message="campo cep não pode ser vazio!")
     */
    private $cep;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=30)
     * @Assert\NotBlank(message="campo cidade não pode ser vazio!")
     */
    private $cidade;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=10)
     * @Assert\NotBlank(message="campo estado não pode ser vazio!")
     */
    private $estado;

    /**
     * @var string
     * 
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="campo descrição não pode ser vazio!")
     */
    private $descricao;

    /**
     * @var object
     * 
     * @ORM\ManyToMany(targetEntity="App\Entity\Categoria", inversedBy="category")
     * @ORM\JoinTable(name="categoria_empresa")
     */
    private $categoria;

    // getters and setters

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
        return $this;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
        return $this;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    public function getCep()
    {
        return $this->cep;
    }

    public function setCep($cep)
    {
        $this->cep = $cep;
        return $this;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
        return $this;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
        return $this;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
        return $this;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
        return $this;
    }
}
