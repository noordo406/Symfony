<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* personnage/perso.html.twig */
class __TwigTemplate_5c5dd154ffaa028e0d631c4efbffd454 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'monTitre' => [$this, 'block_monTitre'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "personnage/perso.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "personnage/perso.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "personnage/perso.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Personnage";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_monTitre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monTitre"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "monTitre"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["perso"]) || array_key_exists("perso", $context) ? $context["perso"] : (function () { throw new RuntimeError('Variable "perso" does not exist.', 4, $this->source); })()), "pseudo", [], "any", false, false, false, 4), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <table class=\"table\">
        <tr class=\"thead-dark\">
            <th>Image</th>
            <th>Nom</th>
            <th>Age</th>
            <th>Sexe</th>
            <th>Force</th>
            <th>Agilité</th>
            <th>Intelligence</th>
        </tr>
        <tr>
            <td><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("images/personnages/" . twig_get_attribute($this->env, $this->source, (isset($context["perso"]) || array_key_exists("perso", $context) ? $context["perso"] : (function () { throw new RuntimeError('Variable "perso" does not exist.', 18, $this->source); })()), "pseudo", [], "any", false, false, false, 18)) . ".png")), "html", null, true);
        echo "\" alt=\"\"></td>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["perso"]) || array_key_exists("perso", $context) ? $context["perso"] : (function () { throw new RuntimeError('Variable "perso" does not exist.', 19, $this->source); })()), "pseudo", [], "any", false, false, false, 19), "html", null, true);
        echo "</td>
            <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["perso"]) || array_key_exists("perso", $context) ? $context["perso"] : (function () { throw new RuntimeError('Variable "perso" does not exist.', 20, $this->source); })()), "age", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            <td>";
        // line 21
        if (twig_get_attribute($this->env, $this->source, (isset($context["perso"]) || array_key_exists("perso", $context) ? $context["perso"] : (function () { throw new RuntimeError('Variable "perso" does not exist.', 21, $this->source); })()), "sexe", [], "any", false, false, false, 21)) {
            echo " Homme ";
        } else {
            echo " Femme ";
        }
        echo "</td>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["perso"]) || array_key_exists("perso", $context) ? $context["perso"] : (function () { throw new RuntimeError('Variable "perso" does not exist.', 22, $this->source); })()), "carac", [], "any", false, false, false, 22), "force", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["perso"]) || array_key_exists("perso", $context) ? $context["perso"] : (function () { throw new RuntimeError('Variable "perso" does not exist.', 23, $this->source); })()), "carac", [], "any", false, false, false, 23), "agi", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
            <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["perso"]) || array_key_exists("perso", $context) ? $context["perso"] : (function () { throw new RuntimeError('Variable "perso" does not exist.', 24, $this->source); })()), "carac", [], "any", false, false, false, 24), "intel", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
        </tr>
    </table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "personnage/perso.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  149 => 24,  145 => 23,  141 => 22,  133 => 21,  129 => 20,  125 => 19,  121 => 18,  108 => 7,  98 => 6,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Personnage{% endblock %}
{% block monTitre %}{{perso.pseudo}}{% endblock %}

{% block body %}
    <table class=\"table\">
        <tr class=\"thead-dark\">
            <th>Image</th>
            <th>Nom</th>
            <th>Age</th>
            <th>Sexe</th>
            <th>Force</th>
            <th>Agilité</th>
            <th>Intelligence</th>
        </tr>
        <tr>
            <td><img src=\"{{asset('images/personnages/'~ perso.pseudo ~'.png')}}\" alt=\"\"></td>
            <td>{{perso.pseudo}}</td>
            <td>{{perso.age}}</td>
            <td>{% if perso.sexe %} Homme {% else %} Femme {% endif %}</td>
            <td>{{perso.carac.force}}</td>
            <td>{{perso.carac.agi}}</td>
            <td>{{perso.carac.intel}}</td>
        </tr>
    </table>
{% endblock %}
", "personnage/perso.html.twig", "C:\\Users\\DWWM\\Desktop\\Symfony\\Personnages\\templates\\personnage\\perso.html.twig");
    }
}
