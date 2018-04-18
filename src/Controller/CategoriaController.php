<?php

namespace App\Controller;

use App\Entity\Categoria;
use App\Form\CategoriaType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CategoriaController extends Controller {

  /**
   * @Route("/categoria", name="listar_categorias")
   */
  public function index() {
    $em = $this->getDoctrine()->getManager();

    $categorias = $em->getRepository(Categoria::class)->findAll();

    return $this->render('categoria/index.html.twig', [
                'categorias' => $categorias,
    ]);
  }

  /**
   * @param Request $request
   *
   * @Route("/categoria/cadastrar", name="cadastrar_categoria")
   *
   */
  public function create(Request $request) {
    $categoria = new Categoria();

    $form = $this->createForm(CategoriaType::class, $categoria);

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $em = $this->getDoctrine()->getManager();

      $em->persist($categoria);
      $em->flush();

      $this->get('session')->getFlashBag()->set('success', 'Categoria incluída com sucesso!');

      return $this->redirectToRoute('listar_categorias');
    }

    return $this->render("categoria/create.html.twig", [
                'form' => $form->createView()
    ]);
  }

  /**
   * @param Request $request
   * @return Response
   *
   * @Route("categoria/editar/{id}", name="editar_categoria")
   *
   */
  public function update(Request $request, $id) {
    $em = $this->getDoctrine()->getManager();

    $categoria = $em->getRepository(Categoria::class)->find($id);

    $form = $this->createForm(CategoriaType::class, $categoria);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $em->persist($categoria);
      $em->flush();

      $this->get('session')->getFlashBag()->set('success', "Categoria " . $categoria->getId() . " atualizada com sucesso");
      return $this->redirectToRoute("listar_categorias");
    }

    return $this->render("categoria/update.html.twig", [
                'categoria' => $categoria,
                'form' => $form->createView()
    ]);
  }

  /**
   * @param Request $request
   * @param $id
   *
   * @Route("categoria/delete/{id}", name="deletar_categoria")
   */
  public function delete(Request $request, $id) {
    $em = $this->getDoctrine()->getManager();

    $categoria = $em->getRepository(Categoria::class)->find($id);

    $mensagem = "";
    $tipo = "";

    if (!$categoria) {
      $mensagem = "Categoria não encontrada!";
      $tipo = "warning";
    } else {
      $em->remove($categoria);
      $em->flush();
      $mensagem = "Categoria Removida com sucesso.";
      $tipo = "success";
    }

    $this->get('session')->getFlashBag()->set($tipo, $mensagem);
    return $this->redirectToRoute('listar_categorias');
  }

  /**
   * @param Request $request
   * @param $id
   *
   * @Route("categoria/{id}", name="visualizar_categoria")
   *
   */
  public function view(Request $request, $id) {
    $em = $this->getDoctrine()->getManager();
    $categoria = $em->getRepository(Categoria::class)->find($id);

    return $this->render("categoria/view.html.twig", [
                'categoria' => $categoria
    ]);
  }

}
