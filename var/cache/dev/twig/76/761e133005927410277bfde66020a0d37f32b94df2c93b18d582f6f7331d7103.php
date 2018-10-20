<?php

/* admin/partyView.html.twig */
class __TwigTemplate_9575029290f5732b6296d2e65eb51938301fbe82e14ade18f4d9c673950d5478 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/partyView.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/partyView.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/partyView.html.twig"));

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

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "    <div class=\"container\">
    <div class=\"jumbotron\">
        <div class=\"page-header\">
        <h1 class=\"text-center text-uppercase\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["party"]) || array_key_exists("party", $context) ? $context["party"] : (function () { throw new Twig_Error_Runtime('Variable "party" does not exist.', 22, $this->source); })()), "getName", array()), "html", null, true);
        echo "</h1>
        </div>
    <div class=\"table-responsive\">
     <table class=\"table\">
         <thead>
           <tr>
             <th class=\"text-center\">Nom</th>
             <th class=\"text-center\">Nombre de tués</th>
           </tr>
         </thead>
         <tbody>
             ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["party"]) || array_key_exists("party", $context) ? $context["party"] : (function () { throw new Twig_Error_Runtime('Variable "party" does not exist.', 33, $this->source); })()), "getParticipants", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
            // line 34
            echo "             ";
            if (twig_get_attribute($this->env, $this->source, $context["participant"], "isAlive", array())) {
                // line 35
                echo "             <tr class=\"success\">
             ";
            } else {
                // line 37
                echo "             <tr class=\"danger\">
             ";
            }
            // line 39
            echo "
               <td class=\"text-center\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participant"], "getName", array()), "html", null, true);
            echo "</td>
               <td class=\"text-center\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participant"], "getNumberOfKills", array()), "html", null, true);
            echo "</td>
             </tr>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
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
        return "admin/partyView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 44,  142 => 41,  138 => 40,  135 => 39,  131 => 37,  127 => 35,  124 => 34,  120 => 33,  106 => 22,  101 => 19,  92 => 18,  72 => 6,  63 => 5,  46 => 3,  15 => 1,);
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
        <h1 class=\"text-center text-uppercase\">{{party.getName}}</h1>
        </div>
    <div class=\"table-responsive\">
     <table class=\"table\">
         <thead>
           <tr>
             <th class=\"text-center\">Nom</th>
             <th class=\"text-center\">Nombre de tués</th>
           </tr>
         </thead>
         <tbody>
             {% for participant in party.getParticipants %}
             {% if participant.isAlive %}
             <tr class=\"success\">
             {% else %}
             <tr class=\"danger\">
             {% endif %}

               <td class=\"text-center\">{{participant.getName}}</td>
               <td class=\"text-center\">{{participant.getNumberOfKills}}</td>
             </tr>
             {% endfor %}
        </tbody>
     </table>
    </div>
    </div>
    </div>

{% endblock %}
", "admin/partyView.html.twig", "C:\\Users\\Pascal\\Desktop\\Web\\Killer\\templates\\admin\\partyView.html.twig");
    }
}
