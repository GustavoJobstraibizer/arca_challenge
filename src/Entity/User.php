<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @ORM\Table(name="users")
 */
class User implements UserInterface {

  /**
   * @ORM\Id()
   * @ORM\GeneratedValue()
   * @ORM\Column(type="integer")
   */
  private $id;

  /**
   *
   * @var string
   *
   * @ORM\Column(type="string")
   */
  private $username;

  /**
   *
   * @var string
   *
   * @ORM\Column(type="string")
   */
  private $password;

  /**
   *
   * @var string
   *
   * @ORM\Column(type="string")
   */
  private $email;

  function getId() {
    return $this->id;
  }

  function getUsername() {
    return $this->username;
  }

  function getPassword() {
    return $this->password;
  }

  function getEmail() {
    return $this->email;
  }

  function setUsername($username) {
    $this->username = $username;
  }

  function setPassword($password) {
    $this->password = $password;
  }

  function setEmail($email) {
    $this->email = $email;
  }

  public function getRoles() {
    return ['ROLE_ADMIN'];
  }

  public function getSalt() {
    return null;
  }

  public function eraseCredentials() {
    return null;
  }

}
