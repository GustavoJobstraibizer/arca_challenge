<?php

/* empresa/index.html.twig */
class __TwigTemplate_f552b7e98eabedb94215c0b3697190a0b190a92bba406c5e91a8193a8023dee2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "empresa/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "empresa/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "empresa/index.html.twig"));

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

        echo "Empresas";
        
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
  <h1>Empresas</h1>
  <hr>
  <div class=\"row\">
    <div class=\"col-md-12\">
      <a class=\"btn btn-primary btn-lg pull-right\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cadastrar_empresa");
        echo "\">Adicionar Empresa</a>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-md-12\">
      <form action=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("filter");
        echo "\" method=\"post\" class=\"form-inline mt-3\">
        <label for=\"title\">Título</label>
        <input type=\"text\" name=\"titulo\" class=\"form-control col-md-2\" id=\"title\" aria-describedby=\"title\" placeholder=\"informe um titulo\">
        <button type=\"submit\" class=\"btn btn-success ml-2\">Filtrar</button>
      </form>
    </div>
  </div>
  <table class=\"table table-striped table-hover mt-3\">
    <thead>
      <tr>
        <th>#</th>
        <th>Título</th>
        <th>Telefone</th>
        <th>Endereço</th>
        <th>Cep</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>Descrição</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>

      ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empresas"]) || array_key_exists("empresas", $context) ? $context["empresas"] : (function () { throw new Twig_Error_Runtime('Variable "empresas" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["empresa"]) {
            // line 58
            echo "        <tr>
          <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "id", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "titulo", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "telefone", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "endereco", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "cep", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "cidade", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "estado", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["empresa"], "descricao", array()), "html", null, true);
            echo "</td>
          <td>
            <a class=\"btn btn-sm btn-warning\" href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visualizar_empresa", array("id" => twig_get_attribute($this->env, $this->source, $context["empresa"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fas fa-eye\"></i></a>
            <a class=\"btn btn-sm btn-success\" href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editar_empresa", array("id" => twig_get_attribute($this->env, $this->source, $context["empresa"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fas fa-pencil-alt\"></i></a>
            <a class=\"btn btn-sm btn-danger bt_excluir_empresa\" href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletar_empresa", array("id" => twig_get_attribute($this->env, $this->source, $context["empresa"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fas fa-trash-alt\"></i></a>
          </td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empresa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
    <script>
      \$(document).ready(function () {
        \$(\".bt_excluir_empresa\").click(function (ev) {
          ev.preventDefault();

          let url = \$(this).prop('href');

          if (confirm(\"Deseja realmente excluir a Empresa ?\")) {
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
        return "empresa/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 74,  205 => 70,  201 => 69,  197 => 68,  192 => 66,  188 => 65,  184 => 64,  180 => 63,  176 => 62,  172 => 61,  168 => 60,  164 => 59,  161 => 58,  157 => 57,  131 => 34,  123 => 29,  116 => 24,  104 => 18,  101 => 17,  97 => 16,  94 => 15,  82 => 9,  79 => 8,  75 => 7,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Empresas{% endblock %}

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

  <h1>Empresas</h1>
  <hr>
  <div class=\"row\">
    <div class=\"col-md-12\">
      <a class=\"btn btn-primary btn-lg pull-right\" href=\"{{ path(\"cadastrar_empresa\") }}\">Adicionar Empresa</a>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"col-md-12\">
      <form action=\"{{ path(\"filter\") }}\" method=\"post\" class=\"form-inline mt-3\">
        <label for=\"title\">Título</label>
        <input type=\"text\" name=\"titulo\" class=\"form-control col-md-2\" id=\"title\" aria-describedby=\"title\" placeholder=\"informe um titulo\">
        <button type=\"submit\" class=\"btn btn-success ml-2\">Filtrar</button>
      </form>
    </div>
  </div>
  <table class=\"table table-striped table-hover mt-3\">
    <thead>
      <tr>
        <th>#</th>
        <th>Título</th>
        <th>Telefone</th>
        <th>Endereço</th>
        <th>Cep</th>
        <th>Cidade</th>
        <th>Estado</th>
        <th>Descrição</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>

      {% for empresa in empresas %}
        <tr>
          <td>{{ empresa.id }}</td>
          <td>{{ empresa.titulo }}</td>
          <td>{{ empresa.telefone }}</td>
          <td>{{ empresa.endereco }}</td>
          <td>{{ empresa.cep }}</td>
          <td>{{ empresa.cidade }}</td>
          <td>{{ empresa.estado }}</td>
          <td>{{ empresa.descricao }}</td>
          <td>
            <a class=\"btn btn-sm btn-warning\" href=\"{{ path('visualizar_empresa', {\"id\": empresa.id}) }}\"><i class=\"fas fa-eye\"></i></a>
            <a class=\"btn btn-sm btn-success\" href=\"{{ path('editar_empresa', {\"id\": empresa.id}) }}\"><i class=\"fas fa-pencil-alt\"></i></a>
            <a class=\"btn btn-sm btn-danger bt_excluir_empresa\" href=\"{{ path('deletar_empresa', {\"id\": empresa.id}) }}\"><i class=\"fas fa-trash-alt\"></i></a>
          </td>
        </tr>
      {% endfor %}

    <script>
      \$(document).ready(function () {
        \$(\".bt_excluir_empresa\").click(function (ev) {
          ev.preventDefault();

          let url = \$(this).prop('href');

          if (confirm(\"Deseja realmente excluir a Empresa ?\")) {
            window.location = url;
          }
        });
      });
    </script>

  </tbody>
</table>

{% endblock %}
", "empresa/index.html.twig", "/home/gu/companies/management-companies/templates/empresa/index.html.twig");
    }
}
