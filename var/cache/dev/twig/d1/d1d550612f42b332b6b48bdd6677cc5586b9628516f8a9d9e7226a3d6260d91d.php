<?php

/* admin/profil.html.twig */
class __TwigTemplate_38f5674c02990e671e3c71887533ec475a37f2467c115a610e4fd6c9f718d234 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/profil.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navbar' => array($this, 'block_navbar'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/profil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/profil.html.twig"));

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

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 6
        echo "<ul class=\"nav navbar-nav\">
  <li><a href=\"#\">Administration</a></li>
  <li><a href=\"/home\">Home</a></li>
  <li><a href=\"/admin/mission/create\">Créer une mission</a></li>
  <li><a href=\"/admin/mission/view\">Voir les missions</a></li>
  <li  class=\"active\"><a href=\"/admin/party/list\">Voir les partys</a></li>
  <li><a href=\"/admin/participant/view\">Voir les participants</a></li>
  <li><a href=\"/admin/user/view\">Voir les utilisateurs</a></li>
</ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "    <div class=\"container\">
    <div class=\"jumbotron\">
        <div class=\"page-header\">
        <h1 class=\"text-center text-uppercase\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new Twig_Error_Runtime('Variable "participant" does not exist.', 21, $this->source); })()), "getName", array()), "html", null, true);
        echo "</h1>
        ";
        // line 22
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new Twig_Error_Runtime('Variable "participant" does not exist.', 22, $this->source); })()), "isAlive", array())) {
            // line 23
            echo "        <div class=\"text-center\">
        <h2>Mince on dirait que tu es mort <span class=\"glyphicon glyphicon-thumbs-down\"></span> Ta mission est donc terminée <span class=\"glyphicon glyphicon-remove-circle\"></span></h2>
        </div>
        </div>
        ";
        } else {
            // line 28
            echo "        </div>
        <div class=\"container\">
        <div class=\"text-center\"><p>Ta cible est ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new Twig_Error_Runtime('Variable "participant" does not exist.', 30, $this->source); })()), "getTarget", array()), "getName", array()), "html", null, true);
            echo "</p></div>
        <div class=\"jumbotron\">
        <div class=\"text-center\"><h2>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new Twig_Error_Runtime('Variable "participant" does not exist.', 32, $this->source); })()), "getMission", array()), "getMissionTitle", array()), "html", null, true);
            echo "</h2></div>
        <div class=\"text-center\"><p>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new Twig_Error_Runtime('Variable "participant" does not exist.', 33, $this->source); })()), "getMission", array()), "getMissionText", array()), "html", null, true);
            echo "</p></div>
        </div>
        </div>
        ";
        }
        // line 37
        echo "

        <div class=\"row\">
        <div class=\"col-xs-6 text-center\">
        ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new Twig_Error_Runtime('Variable "participant" does not exist.', 41, $this->source); })()), "isAlive", array())) {
            // line 42
            echo "        <a class=\"btn btn-danger btn-lg\" href=\"/killed/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new Twig_Error_Runtime('Variable "participant" does not exist.', 42, $this->source); })()), "getUid", array()), "html", null, true);
            echo "\">Oh non je me suis fait tué :(</a>
        ";
        } else {
            // line 44
            echo "        <a class=\"btn btn-danger btn-lg disabled\" href=\"/killed/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new Twig_Error_Runtime('Variable "participant" does not exist.', 44, $this->source); })()), "getUid", array()), "html", null, true);
            echo "\">Oh non je me suis fait tué :(</a>
        ";
        }
        // line 46
        echo "        </div>
        <div class=\"col-xs-6 text-center\">
        <a class=\"btn btn-success btn-lg\" href=\"/party/";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new Twig_Error_Runtime('Variable "participant" does not exist.', 48, $this->source); })()), "getParty", array()), "getUid", array()), "html", null, true);
        echo "\">Voir le tableau des scores</a>
        </div>
        </div>
    </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 48,  158 => 46,  152 => 44,  146 => 42,  144 => 41,  138 => 37,  131 => 33,  127 => 32,  122 => 30,  118 => 28,  111 => 23,  109 => 22,  105 => 21,  100 => 18,  91 => 17,  72 => 6,  63 => 5,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block navbar %}
<ul class=\"nav navbar-nav\">
  <li><a href=\"#\">Administration</a></li>
  <li><a href=\"/home\">Home</a></li>
  <li><a href=\"/admin/mission/create\">Créer une mission</a></li>
  <li><a href=\"/admin/mission/view\">Voir les missions</a></li>
  <li  class=\"active\"><a href=\"/admin/party/list\">Voir les partys</a></li>
  <li><a href=\"/admin/participant/view\">Voir les participants</a></li>
  <li><a href=\"/admin/user/view\">Voir les utilisateurs</a></li>
</ul>
{% endblock %}

{% block body %}
    <div class=\"container\">
    <div class=\"jumbotron\">
        <div class=\"page-header\">
        <h1 class=\"text-center text-uppercase\">{{participant.getName}}</h1>
        {% if not(participant.isAlive) %}
        <div class=\"text-center\">
        <h2>Mince on dirait que tu es mort <span class=\"glyphicon glyphicon-thumbs-down\"></span> Ta mission est donc terminée <span class=\"glyphicon glyphicon-remove-circle\"></span></h2>
        </div>
        </div>
        {% else %}
        </div>
        <div class=\"container\">
        <div class=\"text-center\"><p>Ta cible est {{participant.getTarget.getName}}</p></div>
        <div class=\"jumbotron\">
        <div class=\"text-center\"><h2>{{participant.getMission.getMissionTitle}}</h2></div>
        <div class=\"text-center\"><p>{{participant.getMission.getMissionText}}</p></div>
        </div>
        </div>
        {% endif %}


        <div class=\"row\">
        <div class=\"col-xs-6 text-center\">
        {% if participant.isAlive %}
        <a class=\"btn btn-danger btn-lg\" href=\"/killed/{{participant.getUid}}\">Oh non je me suis fait tué :(</a>
        {% else %}
        <a class=\"btn btn-danger btn-lg disabled\" href=\"/killed/{{participant.getUid}}\">Oh non je me suis fait tué :(</a>
        {% endif %}
        </div>
        <div class=\"col-xs-6 text-center\">
        <a class=\"btn btn-success btn-lg\" href=\"/party/{{participant.getParty.getUid}}\">Voir le tableau des scores</a>
        </div>
        </div>
    </div>
    </div>

{% endblock %}
", "admin/profil.html.twig", "C:\\Users\\Pascal\\Desktop\\Web\\Killer\\templates\\admin\\profil.html.twig");
    }
}
