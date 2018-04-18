<?php

/* default/login.html.twig */
class __TwigTemplate_b6d2c198e327d2783e7bc591d04ef1a4611476bdfbc1b1d18aae45d33e592c03 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("login_base.html.twig", "default/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "login_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 4, $this->source); })())) {
            // line 5
            echo "    <div class=\"alert alert-danger\">
      ";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->source); })()), "messageKey", array()), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->source); })()), "messageData", array()), "security"), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 9
        echo "  <form class=\"form-signin\" method=\"post\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">
    <img class=\"mb-4\" src=\"https://getbootstrap.com/assets/brand/bootstrap-solid.svg\" alt=\"\" width=\"72\" height=\"72\">
    <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
    <label for=\"inpUserName\" class=\"sr-only\">Username</label>
    <input type=\"text\" name=\"_username\" id=\"inpUserName\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"User Name\" required autofocus>
    <label for=\"inpPassword\" class=\"sr-only\">Password</label>
    <input type=\"password\" name=\"_password\" id=\"inpPassword\" class=\"form-control\" placeholder=\"Password\" required>
    <div class=\"checkbox mb-3\">
      <label>
        <input type=\"checkbox\" value=\"remember-me\"> Remember me
      </label>
    </div>
    <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
    <p class=\"mt-5 mb-3 text-muted\">&copy; 2017-2018</p>
  </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  65 => 9,  59 => 6,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"login_base.html.twig\" %}

{% block body %}
  {% if error %}
    <div class=\"alert alert-danger\">
      {{ error.messageKey|trans(error.messageData, 'security') }}
    </div>
  {% endif%}
  <form class=\"form-signin\" method=\"post\" action=\"{{ path(\"login\") }}\">
    <img class=\"mb-4\" src=\"https://getbootstrap.com/assets/brand/bootstrap-solid.svg\" alt=\"\" width=\"72\" height=\"72\">
    <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
    <label for=\"inpUserName\" class=\"sr-only\">Username</label>
    <input type=\"text\" name=\"_username\" id=\"inpUserName\" value=\"{{ last_username }}\" class=\"form-control\" placeholder=\"User Name\" required autofocus>
    <label for=\"inpPassword\" class=\"sr-only\">Password</label>
    <input type=\"password\" name=\"_password\" id=\"inpPassword\" class=\"form-control\" placeholder=\"Password\" required>
    <div class=\"checkbox mb-3\">
      <label>
        <input type=\"checkbox\" value=\"remember-me\"> Remember me
      </label>
    </div>
    <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Sign in</button>
    <p class=\"mt-5 mb-3 text-muted\">&copy; 2017-2018</p>
  </form>
{% endblock %}", "default/login.html.twig", "/home/gu/companies/management-companies/templates/default/login.html.twig");
    }
}
