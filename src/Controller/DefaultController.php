<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class DefaultController extends Controller {

  /**
   * @Route("/admin", name="admin")
   */
  public function index() {
    return $this->render('default/index.html.twig', [
                'controller_name' => 'DefaultController',
    ]);
  }

  /**
   * @Route("/admin/dashboard", name="dashboard")
   */
  public function dashboard() {
    return $this->render('default/index.html.twig', [
                'controller_name' => 'DefaultController',
    ]);
  }

  /**
   * @Route("/admin/login", name="login")
   */
  public function login(Request $request, AuthenticationUtils $authUtils) {

    $error = $authUtils->getLastAuthenticationError();
    $lastUsername = $authUtils->getLastUsername();

    return $this->render('default/login.html.twig', [
                'error' => $error,
                'last_username' => $lastUsername
    ]);
  }

  /**
   * @param Request $request
   *
   * @Route("/insert")
   */
  public function insert(Request $request) {

    $em = $this->getDoctrine()->getManager();

    $user = new User();
    $user->setUsername('admin');
    $user->setEmail('admin@admin.com');

    $encoder = $this->get('security.password_encoder');
    $pass = $encoder->encodePassword($user, "1234");
    $user->setPassword($pass);
    $em->persist($user);

    $em->flush();

    return new Response("<h1>Inserido com sucesso!</h1>");
  }

}
