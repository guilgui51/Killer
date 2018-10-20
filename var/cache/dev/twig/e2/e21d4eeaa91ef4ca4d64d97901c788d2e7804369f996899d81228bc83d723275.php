<?php

/* admin/partyList.html.twig */
class __TwigTemplate_da652dcedf56f8f223e3037b17cfab1f374710e6773a5921f483021a3c844354 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/partyList.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/partyList.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/partyList.html.twig"));

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
        <h1 class=\"text-center text-uppercase\">Liste des Party</h1>
        </div>
    <div class=\"table-responsive\">
     <table class=\"table-dark\">
         <thead>
           <tr>

             <th class=\"text-center\">Nom</th>
             <th class=\"text-center\">Date de début</th>

           </tr>
         </thead>
         <tbody>
             ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partys"]) || array_key_exists("partys", $context) ? $context["partys"] : (function () { throw new Twig_Error_Runtime('Variable "partys" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["party"]) {
            // line 35
            echo "             <a href=\"/partys\">
             <tr>
               <td class=\"text-center\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["party"], "getName", array()), "html", null, true);
            echo "<span class=\"badge badge-light\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["party"], "getParticipants", array())), "html", null, true);
            echo "</span></td>
               <td class=\"text-center\">";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["party"], "getStartingDate", array()), "D j F Y à Hh"), "html", null, true);
            echo "</td>
               <a class=\"btn btn-danger btn-lg\" href=\"#\">Supprimer</a>
             </tr>
             <a>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['party'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
     </table>
    </div>
    </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/partyList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 43,  132 => 38,  126 => 37,  122 => 35,  118 => 34,  100 => 18,  91 => 17,  72 => 6,  63 => 5,  46 => 3,  15 => 1,);
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
        <h1 class=\"text-center text-uppercase\">Liste des Party</h1>
        </div>
    <div class=\"table-responsive\">
     <table class=\"table-dark\">
         <thead>
           <tr>

             <th class=\"text-center\">Nom</th>
             <th class=\"text-center\">Date de début</th>

           </tr>
         </thead>
         <tbody>
             {% for party in partys %}
             <a href=\"/partys\">
             <tr>
               <td class=\"text-center\">{{party.getName}}<span class=\"badge badge-light\">{{party.getParticipants|length}}</span></td>
               <td class=\"text-center\">{{party.getStartingDate|date(\"D j F Y à Hh\")}}</td>
               <a class=\"btn btn-danger btn-lg\" href=\"#\">Supprimer</a>
             </tr>
             <a>
             {% endfor %}
        </tbody>
     </table>
    </div>
    </div>
    </div>

{% endblock %}
", "admin/partyList.html.twig", "C:\\Users\\Pascal\\Desktop\\Web\\Killer\\templates\\admin\\partyList.html.twig");
    }
}
