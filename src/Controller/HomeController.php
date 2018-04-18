<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends Controller
{
  public function test()
  {
    return new Response(
      "<html><body><h1>teste</h1></body></html>"
    );
  }

  public function message()
  {
    return $this->render("hello/message.html.twig", [
      'message' => "Companies"
    ]);
  }
}