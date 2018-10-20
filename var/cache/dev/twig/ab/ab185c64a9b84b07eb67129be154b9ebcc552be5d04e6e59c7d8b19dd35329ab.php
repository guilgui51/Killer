<?php

/* admin/partyView.html.twig */
class __TwigTemplate_6bf626c10a03904b44a1b3b0ab912085617f8ace2a4c4e325272d7084d0ddddc extends Twig_Template
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
  <li><a href=\"/admin/mission/list\">Voir les missions</a></li>
  <li  class=\"active\"><a href=\"/admin/party/list\">Voir les partys</a></li>
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["party"]) || array_key_exists("party", $context) ? $context["party"] : (function () { throw new Twig_Error_Runtime('Variable "party" does not exist.', 21, $this->source); })()), "getName", array()), "html", null, true);
        echo "</h1>
        </div>
    <div class=\"table-responsive\">
     <table class=\"table\">
         <thead>
           <tr>
             <th class=\"text-center\">Nom</th>
             <th class=\"text-center\">Email</th>
             <th class=\"text-center\">Cible</th>
             <th class=\"text-center\">Killer</th>
             <th class=\"text-center\">Nombre de kill</th>
             <th class=\"text-center\">Mission</th>
           </tr>
         </thead>
         <tbody>
             ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["party"]) || array_key_exists("party", $context) ? $context["party"] : (function () { throw new Twig_Error_Runtime('Variable "party" does not exist.', 36, $this->source); })()), "getParticipants", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["participant"]) {
            // line 37
            echo "             ";
            if (twig_get_attribute($this->env, $this->source, $context["participant"], "isAlive", array())) {
                // line 38
                echo "             <tr class=\"success\">
             ";
            } else {
                // line 40
                echo "             <tr class=\"danger\">
             ";
            }
            // line 42
            echo "
               <td class=\"text-center\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participant"], "getName", array()), "html", null, true);
            echo "</td>
               <td class=\"text-center\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participant"], "getEmailAddress", array()), "html", null, true);
            echo "</td>
               ";
            // line 45
            if (twig_get_attribute($this->env, $this->source, $context["participant"], "isAlive", array())) {
                // line 46
                echo "               <td class=\"text-center\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["participant"], "getTarget", array()), "getName", array()), "html", null, true);
                echo "</td>
               <td class=\"text-center\">";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["participant"], "getKiller", array()), "getName", array()), "html", null, true);
                echo "</td>
               ";
            } else {
                // line 49
                echo "               <td class=\"text-center\">null</td>
               <td class=\"text-center\">null</td>
               ";
            }
            // line 52
            echo "
               <td class=\"text-center\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participant"], "getNumberOfKills", array()), "html", null, true);
            echo "</td>
               <td class=\"text-center\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["participant"], "getMission", array()), "getMissionTitle", array()), "html", null, true);
            echo "</td>
               <td class=\"text-center\">
                   <div class=\"btn-group\">
                       <a class=\"btn btn-warning btn-sm\" href=\"/admin/partipant/modify/";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participant"], "getUid", array()), "html", null, true);
            echo "\">Modifier</a>
                       ";
            // line 58
            if (twig_get_attribute($this->env, $this->source, $context["participant"], "isAlive", array())) {
                // line 59
                echo "                       <a class=\"btn btn-danger btn-sm\" href=\"/admin/participant/kill/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participant"], "getUid", array()), "html", null, true);
                echo "\">Tuer</a>
                       ";
            } else {
                // line 61
                echo "                       <a class=\"btn btn-danger btn-sm disabled\" href=\"/admin/participant/kill/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["participant"], "getUid", array()), "html", null, true);
                echo "\">Tuer</a>
                       ";
            }
            // line 63
            echo "                    </div>
                </td>
             </tr>
             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['participant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
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
        return array (  206 => 67,  197 => 63,  191 => 61,  185 => 59,  183 => 58,  179 => 57,  173 => 54,  169 => 53,  166 => 52,  161 => 49,  156 => 47,  151 => 46,  149 => 45,  145 => 44,  141 => 43,  138 => 42,  134 => 40,  130 => 38,  127 => 37,  123 => 36,  105 => 21,  100 => 18,  91 => 17,  72 => 6,  63 => 5,  46 => 3,  15 => 1,);
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
  <li><a href=\"/admin/mission/list\">Voir les missions</a></li>
  <li  class=\"active\"><a href=\"/admin/party/list\">Voir les partys</a></li>
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
             <th class=\"text-center\">Email</th>
             <th class=\"text-center\">Cible</th>
             <th class=\"text-center\">Killer</th>
             <th class=\"text-center\">Nombre de kill</th>
             <th class=\"text-center\">Mission</th>
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
               <td class=\"text-center\">{{participant.getEmailAddress}}</td>
               {% if participant.isAlive %}
               <td class=\"text-center\">{{participant.getTarget.getName}}</td>
               <td class=\"text-center\">{{participant.getKiller.getName}}</td>
               {% else %}
               <td class=\"text-center\">null</td>
               <td class=\"text-center\">null</td>
               {% endif %}

               <td class=\"text-center\">{{participant.getNumberOfKills}}</td>
               <td class=\"text-center\">{{participant.getMission.getMissionTitle}}</td>
               <td class=\"text-center\">
                   <div class=\"btn-group\">
                       <a class=\"btn btn-warning btn-sm\" href=\"/admin/partipant/modify/{{participant.getUid}}\">Modifier</a>
                       {% if participant.isAlive %}
                       <a class=\"btn btn-danger btn-sm\" href=\"/admin/participant/kill/{{participant.getUid}}\">Tuer</a>
                       {% else %}
                       <a class=\"btn btn-danger btn-sm disabled\" href=\"/admin/participant/kill/{{participant.getUid}}\">Tuer</a>
                       {% endif %}
                    </div>
                </td>
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
