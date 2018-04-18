<?php

/* empresa/view.html.twig */
class __TwigTemplate_7c92ad7227e7e968a0095cfd517c494f37ef8a88b41a71576961b10d22b039f5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "empresa/view.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "empresa/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "empresa/view.html.twig"));

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

        // line 4
        echo "  Empresa
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <h1>Empresa - <small>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new Twig_Error_Runtime('Variable "empresa" does not exist.', 8, $this->source); })()), "titulo", array()), "html", null, true);
        echo "</small></h1>
  <hr>
  <table class=\"table table-striped\">
    <tbody>
      <tr>
        <th>Código</th>
        <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new Twig_Error_Runtime('Variable "empresa" does not exist.', 14, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
      </tr>

      <tr>
        <th>Título</th>
        <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new Twig_Error_Runtime('Variable "empresa" does not exist.', 19, $this->source); })()), "titulo", array()), "html", null, true);
        echo "</td>
      </tr>

      <tr>
        <th>Telefone</th>
        <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new Twig_Error_Runtime('Variable "empresa" does not exist.', 24, $this->source); })()), "telefone", array()), "html", null, true);
        echo "</td>
      </tr>

      <tr>
        <th>Endereço</th>
        <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new Twig_Error_Runtime('Variable "empresa" does not exist.', 29, $this->source); })()), "endereco", array()), "html", null, true);
        echo "</td>
      </tr>

      <tr>
        <th>Cep</th>
        <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new Twig_Error_Runtime('Variable "empresa" does not exist.', 34, $this->source); })()), "cep", array()), "html", null, true);
        echo "</td>
      </tr>

      <tr>
        <th>Cidade</th>
        <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new Twig_Error_Runtime('Variable "empresa" does not exist.', 39, $this->source); })()), "cidade", array()), "html", null, true);
        echo "</td>
      </tr>

      <tr>
        <th>Estado</th>
        <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new Twig_Error_Runtime('Variable "empresa" does not exist.', 44, $this->source); })()), "estado", array()), "html", null, true);
        echo "</td>
      </tr>

      <tr>
        <th>Descrição</th>
        <td>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new Twig_Error_Runtime('Variable "empresa" does not exist.', 49, $this->source); })()), "descricao", array()), "html", null, true);
        echo "</td>
      </tr>

      <tr>
        <th>Categorias</th>
        <td>
          <ul>
            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["empresa"]) || array_key_exists("empresa", $context) ? $context["empresa"] : (function () { throw new Twig_Error_Runtime('Variable "empresa" does not exist.', 56, $this->source); })()), "categoria", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 57
            echo "              <li><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("visualizar_categoria", array("id" => twig_get_attribute($this->env, $this->source, $context["categoria"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categoria"], "descricao", array()), "html", null, true);
            echo "</a></li>
              ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 59
            echo "              <li>Nenhuma categoria cadastrada.</li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "          </ul>
        </td>
      </tr>
    </tbody>
  </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "empresa/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 61,  165 => 59,  155 => 57,  150 => 56,  140 => 49,  132 => 44,  124 => 39,  116 => 34,  108 => 29,  100 => 24,  92 => 19,  84 => 14,  74 => 8,  65 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}
  Empresa
{% endblock %}

{% block body %}
  <h1>Empresa - <small>{{ empresa.titulo }}</small></h1>
  <hr>
  <table class=\"table table-striped\">
    <tbody>
      <tr>
        <th>Código</th>
        <td>{{ empresa.id }}</td>
      </tr>

      <tr>
        <th>Título</th>
        <td>{{ empresa.titulo }}</td>
      </tr>

      <tr>
        <th>Telefone</th>
        <td>{{ empresa.telefone }}</td>
      </tr>

      <tr>
        <th>Endereço</th>
        <td>{{ empresa.endereco }}</td>
      </tr>

      <tr>
        <th>Cep</th>
        <td>{{ empresa.cep }}</td>
      </tr>

      <tr>
        <th>Cidade</th>
        <td>{{ empresa.cidade }}</td>
      </tr>

      <tr>
        <th>Estado</th>
        <td>{{ empresa.estado }}</td>
      </tr>

      <tr>
        <th>Descrição</th>
        <td>{{ empresa.descricao }}</td>
      </tr>

      <tr>
        <th>Categorias</th>
        <td>
          <ul>
            {% for categoria in empresa.categoria %}
              <li><a href=\"{{ path(\"visualizar_categoria\", {\"id\": categoria.id}) }}\">{{ categoria.descricao }}</a></li>
              {% else %}
              <li>Nenhuma categoria cadastrada.</li>
              {% endfor %}
          </ul>
        </td>
      </tr>
    </tbody>
  </table>
{% endblock %}", "empresa/view.html.twig", "/home/gu/companies/management-companies/templates/empresa/view.html.twig");
    }
}
