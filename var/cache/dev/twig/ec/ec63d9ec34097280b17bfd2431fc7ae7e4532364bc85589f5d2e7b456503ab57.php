<?php

/* emails/end.html.twig */
class __TwigTemplate_a58404321baf5968aee7c4a55d4e7976525fe5958cec56437b7a55a58f8b9aab extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/end.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "emails/end.html.twig"));

        // line 2
        echo "<h3>Il n'en reste plus qu'un!</h3>

Merci à tous pour cette partie exceptionnelle.
Cependant un seul d'entre vous a su se montrer à la hauteur.
Aujourd'hui c'est ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["winner"]) || array_key_exists("winner", $context) ? $context["winner"] : (function () { throw new Twig_Error_Runtime('Variable "winner" does not exist.', 6, $this->source); })()), "getName", array()), "html", null, true);
        echo " qui vous aura tous dominer en remportant sont duel contre le lamentable ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["loser"]) || array_key_exists("loser", $context) ? $context["loser"] : (function () { throw new Twig_Error_Runtime('Variable "loser" does not exist.', 6, $this->source); })()), "getName", array()), "html", null, true);
        echo ", mais qui sait ce que nous réserve le futur.

Fin de transmission.
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/end.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# templates/emails/registration.html.twig #}
<h3>Il n'en reste plus qu'un!</h3>

Merci à tous pour cette partie exceptionnelle.
Cependant un seul d'entre vous a su se montrer à la hauteur.
Aujourd'hui c'est {{winner.getName}} qui vous aura tous dominer en remportant sont duel contre le lamentable {{loser.getName}}, mais qui sait ce que nous réserve le futur.

Fin de transmission.
", "emails/end.html.twig", "C:\\Users\\Pascal\\Desktop\\Web\\Killer\\templates\\emails\\end.html.twig");
    }
}
