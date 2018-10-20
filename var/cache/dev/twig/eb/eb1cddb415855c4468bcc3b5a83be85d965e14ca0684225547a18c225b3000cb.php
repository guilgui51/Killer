<?php

/* base.html.twig */
class __TwigTemplate_eb66c2f72f1eb3ea51de6c4e9e1ff28181f96037483b3aefa48a574f27319840 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/style.css\">
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    </head>
    <body>
        <header>
        <nav class=\"navbar navbar-inverse navbar-fixed-top\">
\t\t  <div class=\"container-fluid\">
\t\t    <div class=\"navbar-header\">
\t\t\t    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
\t\t\t        <span class=\"icon-bar\"></span>
\t\t\t        <span class=\"icon-bar\"></span>
\t\t\t        <span class=\"icon-bar\"></span>
\t\t\t    </button>
\t\t    </div>

\t\t  </div>

\t\t  <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
\t\t  \t<div class=\"navbar-header\">
\t\t      <a class=\"navbar-brand\" href=\"/home\">Killer Party</a>
\t\t    </div>
            ";
        // line 29
        $this->displayBlock('navbar', $context, $blocks);
        // line 60
        echo "\t\t    <ul class=\"nav navbar-nav navbar-right\">
          ";
        // line 61
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 61, $this->source); })()), "session", array()), "get", array(0 => "user"), "method")) {
            // line 62
            echo "          <li><a href=\"/signin\"><span class=\"glyphicon glyphicon-user\"></span> S'enregistrer </a></li>
\t\t      <li><a href=\"/login\"><span class=\"glyphicon glyphicon-log-in\"></span> S'identifier &nbsp;</a></li>
          ";
        } else {
            // line 65
            echo "          <li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 65, $this->source); })()), "session", array()), "get", array(0 => "user"), "method"), "getUserName", array(), "method"), "html", null, true);
            echo " </a></li>
          <li><a href=\"/disconnect\"><span class=\"glyphicon glyphicon-log-out\"></span> Se déconnecter &nbsp;</a></li>
          ";
        }
        // line 68
        echo "\t\t    </ul>

\t\t  </div>
\t\t</nav>
\t\t</header>
\t\t<main>
\t\t";
        // line 74
        $this->displayBlock('body', $context, $blocks);
        // line 76
        echo "\t\t</main>
        ";
        // line 77
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 30
        echo "\t\t    <ul class=\"nav navbar-nav\">
\t\t      <li class=\"active\"><a href=\"/home\">Home</a></li>
\t\t      <li><a href=\"/party/create\">Créer une Party</a></li>
\t\t    </ul>

\t\t    <form onsubmit=\"return goToParty()\" class=\"navbar-form navbar-left\" >
\t\t    \t<div class=\"input-group\">
\t\t    \t\t<input id=\"inPart\" type=\"text\" class=\"form-control\" placeholder=\"Voir une Party\">
\t\t    \t\t<div class=\"input-group-btn\">
\t\t    \t\t\t<button class=\"btn btn-default\" type=\"submit\">
\t\t    \t\t\t\t<i class=\"glyphicon glyphicon-list-alt\"></i>
\t\t    \t\t\t</button>
\t\t    \t\t</div>
\t\t    \t</div>
\t\t    </form>
        <form onsubmit=\"return goToProfil()\" class=\"navbar-form navbar-left\">
\t\t    \t<div class=\"input-group\">
\t\t    \t\t<input id=\"inProf\" type=\"text\" class=\"form-control\" placeholder=\"Voir un profil\">
\t\t    \t\t<div class=\"input-group-btn\">
\t\t    \t\t\t<button class=\"btn btn-default\" onclick=\"goToProfil()\">
\t\t    \t\t\t\t<i class=\"glyphicon glyphicon-file\"></i>
\t\t    \t\t\t</button>
\t\t    \t\t</div>
\t\t    \t</div>
\t\t    </form>

        ";
        // line 56
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 56, $this->source); })()), "session", array()), "get", array(0 => "user"), "method") && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 56, $this->source); })()), "session", array()), "get", array(0 => "user"), "method"), "getIsAdmin", array(), "method"))) {
            // line 57
            echo "        <a type=\"button\" class=\"btn btn-danger navbar-btn\" href=\"/admin/home\">Admin</a>
        ";
        }
        // line 59
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 75
        echo "\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  \t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <script src=\"/script/navbutton.min.js\"></script>
  \t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 78,  224 => 77,  214 => 75,  205 => 74,  195 => 59,  191 => 57,  189 => 56,  161 => 30,  152 => 29,  135 => 9,  117 => 8,  104 => 82,  102 => 77,  99 => 76,  97 => 74,  89 => 68,  82 => 65,  77 => 62,  75 => 61,  72 => 60,  70 => 29,  49 => 10,  47 => 9,  43 => 8,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"/assets/css/style.css\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        <header>
        <nav class=\"navbar navbar-inverse navbar-fixed-top\">
\t\t  <div class=\"container-fluid\">
\t\t    <div class=\"navbar-header\">
\t\t\t    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#myNavbar\">
\t\t\t        <span class=\"icon-bar\"></span>
\t\t\t        <span class=\"icon-bar\"></span>
\t\t\t        <span class=\"icon-bar\"></span>
\t\t\t    </button>
\t\t    </div>

\t\t  </div>

\t\t  <div class=\"collapse navbar-collapse\" id=\"myNavbar\">
\t\t  \t<div class=\"navbar-header\">
\t\t      <a class=\"navbar-brand\" href=\"/home\">Killer Party</a>
\t\t    </div>
            {% block navbar %}
\t\t    <ul class=\"nav navbar-nav\">
\t\t      <li class=\"active\"><a href=\"/home\">Home</a></li>
\t\t      <li><a href=\"/party/create\">Créer une Party</a></li>
\t\t    </ul>

\t\t    <form onsubmit=\"return goToParty()\" class=\"navbar-form navbar-left\" >
\t\t    \t<div class=\"input-group\">
\t\t    \t\t<input id=\"inPart\" type=\"text\" class=\"form-control\" placeholder=\"Voir une Party\">
\t\t    \t\t<div class=\"input-group-btn\">
\t\t    \t\t\t<button class=\"btn btn-default\" type=\"submit\">
\t\t    \t\t\t\t<i class=\"glyphicon glyphicon-list-alt\"></i>
\t\t    \t\t\t</button>
\t\t    \t\t</div>
\t\t    \t</div>
\t\t    </form>
        <form onsubmit=\"return goToProfil()\" class=\"navbar-form navbar-left\">
\t\t    \t<div class=\"input-group\">
\t\t    \t\t<input id=\"inProf\" type=\"text\" class=\"form-control\" placeholder=\"Voir un profil\">
\t\t    \t\t<div class=\"input-group-btn\">
\t\t    \t\t\t<button class=\"btn btn-default\" onclick=\"goToProfil()\">
\t\t    \t\t\t\t<i class=\"glyphicon glyphicon-file\"></i>
\t\t    \t\t\t</button>
\t\t    \t\t</div>
\t\t    \t</div>
\t\t    </form>

        {% if app.session.get(\"user\") and app.session.get(\"user\").getIsAdmin() %}
        <a type=\"button\" class=\"btn btn-danger navbar-btn\" href=\"/admin/home\">Admin</a>
        {% endif %}
        {% endblock %}
\t\t    <ul class=\"nav navbar-nav navbar-right\">
          {% if not(app.session.get(\"user\"))%}
          <li><a href=\"/signin\"><span class=\"glyphicon glyphicon-user\"></span> S'enregistrer </a></li>
\t\t      <li><a href=\"/login\"><span class=\"glyphicon glyphicon-log-in\"></span> S'identifier &nbsp;</a></li>
          {% else %}
          <li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> {{app.session.get(\"user\").getUserName() }} </a></li>
          <li><a href=\"/disconnect\"><span class=\"glyphicon glyphicon-log-out\"></span> Se déconnecter &nbsp;</a></li>
          {% endif %}
\t\t    </ul>

\t\t  </div>
\t\t</nav>
\t\t</header>
\t\t<main>
\t\t{% block body %}
\t\t{% endblock %}
\t\t</main>
        {% block javascripts %}
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  \t\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        <script src=\"/script/navbutton.min.js\"></script>
  \t\t{% endblock %}

    </body>
</html>
", "base.html.twig", "C:\\Users\\Pascal\\Desktop\\Web\\Killer\\templates\\base.html.twig");
    }
}
