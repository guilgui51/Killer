<?php

/* emails/launch.html.twig */
class __TwigTemplate_3abac1944c9eb7381ad4c969c9e698b6842a8654fe0d52e8ba06d00ad84c8234 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/launch.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/launch.html.twig"));

        // line 2
        echo "<h3>La partie commencera le ";
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["party"]) || array_key_exists("party", $context) ? $context["party"] : (function () { throw new Twig_Error_Runtime('Variable "party" does not exist.', 2, $this->source); })()), "getStartingDate", array()), "full", "short"), "html", null, true);
        echo "</h3>

Salut ";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new Twig_Error_Runtime('Variable "participant" does not exist.', 4, $this->source); })()), "getName", array()), "html", null, true);
        echo "! Bienvenue dans le programme Killer!

Tu vas pouvoir accéder à ton espace personnel grâce à ce code (";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new Twig_Error_Runtime('Variable "participant" does not exist.', 6, $this->source); })()), "getUid", array()), "html", null, true);
        echo ") ne le perd pas!
Tu peux aussi directement utiliser cette url : <a href=\"http://ckngf.fr/participant/";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["participant"]) || array_key_exists("participant", $context) ? $context["participant"] : (function () { throw new Twig_Error_Runtime('Variable "participant" does not exist.', 7, $this->source); })()), "getUid", array()), "html", null, true);
        echo "\">Mon profil</a>.

Si tu veux consulter le tableau de bord de la partie utilise ce code (";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["party"]) || array_key_exists("party", $context) ? $context["party"] : (function () { throw new Twig_Error_Runtime('Variable "party" does not exist.', 9, $this->source); })()), "getUid", array()), "html", null, true);
        echo ")
Tu peux aussi directement utiliser cette url : <a href=\"http://ckngf.fr/party/";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["party"]) || array_key_exists("party", $context) ? $context["party"] : (function () { throw new Twig_Error_Runtime('Variable "party" does not exist.', 10, $this->source); })()), "getUid", array()), "html", null, true);
        echo "\">Killer Party</a>.

Fin de transmission.
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/launch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  49 => 9,  44 => 7,  40 => 6,  35 => 4,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# templates/emails/registration.html.twig #}
<h3>La partie commencera le {{party.getStartingDate|localizeddate('full','short')}}</h3>

Salut {{participant.getName}}! Bienvenue dans le programme Killer!

Tu vas pouvoir accéder à ton espace personnel grâce à ce code ({{participant.getUid}}) ne le perd pas!
Tu peux aussi directement utiliser cette url : <a href=\"http://ckngf.fr/participant/{{participant.getUid}}\">Mon profil</a>.

Si tu veux consulter le tableau de bord de la partie utilise ce code ({{party.getUid}})
Tu peux aussi directement utiliser cette url : <a href=\"http://ckngf.fr/party/{{party.getUid}}\">Killer Party</a>.

Fin de transmission.
", "emails/launch.html.twig", "C:\\Users\\Pascal\\Desktop\\Web\\Killer\\templates\\emails\\launch.html.twig");
    }
}
