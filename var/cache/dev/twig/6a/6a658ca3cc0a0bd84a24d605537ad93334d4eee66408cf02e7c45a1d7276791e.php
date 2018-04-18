<?php

/* categoria/index.html.twig */
class __TwigTemplate_3a570a16bf373a24ca857fba9fc11d6f6aa4e84e067c84868c5ad2e4a4ac375b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "categoria/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categoria/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "categoria/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Categorias";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 8
            echo "    <div class=\"alert alert-success alert-dismissible fade show\">
      ";
            // line 9
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
      </button>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
  ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 16, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "    <div class=\"alert alert-warning alert-dismissible fade show\">
      ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
      </button>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "
  <h1>Categorias</h1>
  <hr>
  <div class=\"row\">
    <div class=\"col-md-12\">
      <a class=\"btn btn-primary btn-lg pull-right\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cadastrar_categoria");
        echo "\">Adicionar Categoria</a>
    </div>
  </div>
  <table class=\"table table-striped table-hover mt-3\">
    <thead>
      <tr>
        <th>#</th>
        <th>Descrição</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>

      ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) || array_key_exists("categorias", $context) ? $context["categorias"] : (function () { throw new Twig_Error_Runtime('Variable "categorias" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 43
            echo "        <tr>
          <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "id", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "descricao", array()), "html", null, true);
            echo "</td>
          <td>
            <a class=\"btn btn-sm btn-success\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editar_categoria", array("id" => twig_get_attribute($this->env, $this->source, $context["categoria"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fas fa-pencil-alt\"></i></a>
            <a class=\"btn btn-sm btn-danger bt_excluir_categoria\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletar_categoria", array("id" => twig_get_attribute($this->env, $this->source, $context["categoria"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fas fa-trash-alt\"></i></a>
          </td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
    <script>
      \$(document).ready(function () {
        \$(\".bt_excluir_categoria\").click(function (ev) {
          ev.preventDefault();

          let url = \$(this).prop('href');

          if (confirm(\"Deseja realmente excluir a Categoria ?\")) {
            window.location = url;
          }
        });
      });
    </script>

  </tbody>
</table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "categoria/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 52,  159 => 48,  155 => 47,  150 => 45,  146 => 44,  143 => 43,  139 => 42,  123 => 29,  116 => 24,  104 => 18,  101 => 17,  97 => 16,  94 => 15,  82 => 9,  79 => 8,  75 => 7,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'default/index.html.twig' %}

{% block title %}Categorias{% endblock %}

{% block body %}

  {% for flashMessage in app.session.flashbag.get('success') %}
    <div class=\"alert alert-success alert-dismissible fade show\">
      {{ flashMessage }}
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
      </button>
    </div>
  {% endfor %}

  {% for flashMessage in app.session.flashbag.get('warning') %}
    <div class=\"alert alert-warning alert-dismissible fade show\">
      {{ flashMessage }}
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\">&times;</span>
      </button>
    </div>
  {% endfor %}

  <h1>Categorias</h1>
  <hr>
  <div class=\"row\">
    <div class=\"col-md-12\">
      <a class=\"btn btn-primary btn-lg pull-right\" href=\"{{ path(\"cadastrar_categoria\") }}\">Adicionar Categoria</a>
    </div>
  </div>
  <table class=\"table table-striped table-hover mt-3\">
    <thead>
      <tr>
        <th>#</th>
        <th>Descrição</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>

      {% for categoria in categorias %}
        <tr>
          <td>{{ categoria.id }}</td>
          <td>{{ categoria.descricao }}</td>
          <td>
            <a class=\"btn btn-sm btn-success\" href=\"{{ path(\"editar_categoria\", {\"id\": categoria.id}) }}\"><i class=\"fas fa-pencil-alt\"></i></a>
            <a class=\"btn btn-sm btn-danger bt_excluir_categoria\" href=\"{{ path(\"deletar_categoria\", {\"id\": categoria.id}) }}\"><i class=\"fas fa-trash-alt\"></i></a>
          </td>
        </tr>
      {% endfor %}

    <script>
      \$(document).ready(function () {
        \$(\".bt_excluir_categoria\").click(function (ev) {
          ev.preventDefault();

          let url = \$(this).prop('href');

          if (confirm(\"Deseja realmente excluir a Categoria ?\")) {
            window.location = url;
          }
        });
      });
    </script>

  </tbody>
</table>

{% endblock %}
", "categoria/index.html.twig", "/home/gu/companies/management-companies/templates/categoria/index.html.twig");
    }
}
