<?php

/* party/profil.html.twig */
class __TwigTemplate_461c3241c0dba788e3ec9b06565f3645bc40a19fa79906e8b7a4b866fcf661ce extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "party/profil.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "party/profil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "party/profil.html.twig"));

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

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"container\">
    <div class=\"jumbotron\">
        <div class=\"page-header\">
        <h1 class=\"text-center text-uppercase\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new Twig_Error_Runtime('Variable "participant" does not exist.', 8, $this->source); })()), "getName", array()), "html", null, true);
        echo "</h1>
        ";
        // line 9
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new Twig_Error_Runtime('Variable "participant" does not exist.', 9, $this->source); })()), "isAlive", array())) {
            // line 10
            echo "        <div class=\"text-center\">
        <h2>Mince on dirait que tu es mort <span class=\"glyphicon glyphicon-thumbs-down\"></span> Ta mission est donc terminée <span class=\"glyphicon glyphicon-remove-circle\"></span></h2>
        </div>
        </div>
        ";
        } else {
            // line 15
            echo "        </div>
        <div class=\"container\">
        <div class=\"text-center\"><p>Ta cible est ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new Twig_Error_Runtime('Variable "participant" does not exist.', 17, $this->source); })()), "getTarget", array()), "getName", array()), "html", null, true);
            echo "</p></div>
        <div class=\"jumbotron\">
        <div class=\"text-center\"><h2>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new Twig_Error_Runtime('Variable "participant" does not exist.', 19, $this->source); })()), "getMission", array()), "getMissionTitle", array()), "html", null, true);
            echo "</h2></div>
        <div class=\"text-center\"><p>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new Twig_Error_Runtime('Variable "participant" does not exist.', 20, $this->source); })()), "getMission", array()), "getMissionText", array()), "html", null, true);
            echo "</p></div>
        </div>
        </div>
        ";
        }
        // line 24
        echo "

        <div class=\"row\">
        <div class=\"col-xs-6 text-center\">
        ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new Twig_Error_Runtime('Variable "participant" does not exist.', 28, $this->source); })()), "isAlive", array())) {
            // line 29
            echo "        <a class=\"btn btn-danger btn-lg\" href=\"/killed/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new Twig_Error_Runtime('Variable "participant" does not exist.', 29, $this->source); })()), "getUid", array()), "html", null, true);
            echo "\">Oh non je me suis fait tué :(</a>
        ";
        } else {
            // line 31
            echo "        <a class=\"btn btn-danger btn-lg disabled\" href=\"/killed/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new Twig_Error_Runtime('Variable "participant" does not exist.', 31, $this->source); })()), "getUid", array()), "html", null, true);
            echo "\">Oh non je me suis fait tué :(</a>
        ";
        }
        // line 33
        echo "        </div>
        <div class=\"col-xs-6 text-center\">
        <a class=\"btn btn-success btn-lg\" href=\"/party/";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new Twig_Error_Runtime('Variable "participant" does not exist.', 35, $this->source); })()), "getParty", array()), "getUid", array()), "html", null, true);
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
        return "party/profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 35,  129 => 33,  123 => 31,  117 => 29,  115 => 28,  109 => 24,  102 => 20,  98 => 19,  93 => 17,  89 => 15,  82 => 10,  80 => 9,  76 => 8,  71 => 5,  62 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}
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
", "party/profil.html.twig", "C:\\Users\\Pascal\\Desktop\\Web\\Killer\\templates\\party\\profil.html.twig");
    }
}
