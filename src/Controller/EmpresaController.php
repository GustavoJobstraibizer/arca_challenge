<?php

namespace App\Controller;

use App\Entity\Empresa;
use App\Form\EmpresaType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EmpresaController extends Controller {

  /**
   * @Route("/empresa", name="listar_empresa")
   */
  public function index() {
    $em = $this->getDoctrine()->getManager();

    $empresas = $em->getRepository(Empresa::class)->findAll();

    return $this->render("empresa/index.html.twig", [
                'empresas' => $empresas
    ]);
  }

  /**
   * @Route("/filterBy", name="filter")
   */
  public function filterBy(Request $request) {

    $em = $this->getDoctrine()->getManager();

    $titulo = $request->get('titulo');

    if (!$titulo) {
      $this->get('session')->getFlashBag()->set('warning', 'Informe o filtro');

      return $this->redirectToRoute('listar_empresa');
    }

    $empresas = $em->getRepository(Empresa::class)->findBy(
            [
                'titulo' => $titulo
    ]);

    return $this->render("empresa/index.html.twig", [
                'empresas' => $empresas
    ]);
  }

  /**
   * @param Request $request
   *
   * @Route("/empresa/cadastrar", name="cadastrar_empresa")
   *
   */
  public function create(Request $request) {
    $empresa = new Empresa();

    $form = $this->createForm(EmpresaType::class, $empresa);

    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $em = $this->getDoctrine()->getManager();

      $em->persist($empresa);
      $em->flush();

      $this->get('session')->getFlashBag()->set('success', 'Empresa incluída com sucesso!');

      return $this->redirectToRoute('listar_empresa');
    }

    return $this->render("empresa/create.html.twig", [
                'form' => $form->createView()
    ]);
  }

  /**
   * @param Request $request
   * @return Response
   *
   * @Route("empresa/editar/{id}", name="editar_empresa")
   *
   */
  public function update(Request $request, $id) {
    $em = $this->getDoctrine()->getManager();

    $empresa = $em->getRepository(Empresa::class)->find($id);

    $form = $this->createForm(EmpresaType::class, $empresa);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
      $em->persist($empresa);
      $em->flush();

      $this->get('session')->getFlashBag()->set('success', "Empresa " . $empresa->getId() . " atualizada com sucesso");
      return $this->redirectToRoute("listar_empresa");
    }

    return $this->render("empresa/update.html.twig", [
                'empresa' => $empresa,
                'form' => $form->createView()
    ]);
  }

  /**
   * @param Request $request
   * @param $id
   *
   * @Route("empresa/{id}", name="visualizar_empresa")
   *
   */
  public function view(Request $request, $id) {
    $em = $this->getDoctrine()->getManager();
    $empresa = $em->getRepository(Empresa::class)->find($id);

    return $this->render("empresa/view.html.twig", [
                'empresa' => $empresa
    ]);
  }

  /**
   * @param Request $request
   * @param $id
   *
   * @Route("empresa/delete/{id}", name="deletar_empresa")
   */
  public function delete(Request $request, $id) {
    $em = $this->getDoctrine()->getManager();

    $empresa = $em->getRepository(Empresa::class)->find($id);

    $mensagem = "";
    $tipo = "";

    if (!$empresa) {
      $mensagem = "Empresa não encontrada!";
      $tipo = "warning";
    } else {
      $em->remove($empresa);
      $em->flush();
      $mensagem = "Empresa Removida com sucesso.";
      $tipo = "success";
    }

    $this->get('session')->getFlashBag()->set($tipo, $mensagem);
    return $this->redirectToRoute('listar_empresa');
  }

}
