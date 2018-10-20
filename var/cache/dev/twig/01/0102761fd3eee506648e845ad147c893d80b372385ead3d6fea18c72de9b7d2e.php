<?php

/* emails/kill.html.twig */
class __TwigTemplate_506733591ad35f26368b8b8915830aed6751a0b76bb01947542acc8b878556a4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/kill.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/kill.html.twig"));

        // line 2
        echo "<h3>Bravo agent ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new Twig_Error_Runtime('Variable "participant" does not exist.', 2, $this->source); })()), "getName", array()), "html", null, true);
        echo "</h3>

Il semblerait que tu ai réussi un kill.
L'agence te félicite. Mais ne te reposes pas trop car tu as déjà une nouvelle cible ainsi qu'une nouvelle mission.

Utilise ton espace personnel pour les consulter (";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new Twig_Error_Runtime('Variable "participant" does not exist.', 7, $this->source); })()), "getUid", array()), "html", null, true);
        echo ")
Tu peux utiliser cette url : <a href=\"http://ckngf.fr/participant/";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new Twig_Error_Runtime('Variable "participant" does not exist.', 8, $this->source); })()), "getUid", array()), "html", null, true);
        echo "\">Mon profil</a>.

Fin de transmission.
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/kill.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  38 => 7,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# templates/emails/registration.html.twig #}
<h3>Bravo agent {{participant.getName}}</h3>

Il semblerait que tu ai réussi un kill.
L'agence te félicite. Mais ne te reposes pas trop car tu as déjà une nouvelle cible ainsi qu'une nouvelle mission.

Utilise ton espace personnel pour les consulter ({{participant.getUid}})
Tu peux utiliser cette url : <a href=\"http://ckngf.fr/participant/{{participant.getUid}}\">Mon profil</a>.

Fin de transmission.
", "emails/kill.html.twig", "C:\\Users\\Pascal\\Desktop\\Web\\Killer\\templates\\emails\\kill.html.twig");
    }
}
