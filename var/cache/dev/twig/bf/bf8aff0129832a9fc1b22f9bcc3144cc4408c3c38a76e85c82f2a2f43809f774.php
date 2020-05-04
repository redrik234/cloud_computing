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

/* secondLab.html.twig */
class __TwigTemplate_ee320dbfb7c6b30d1f8b240d92029f06ca0e0d5ee6323caa03f3f55190d416e5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "secondLab.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "secondLab.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "secondLab.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<header class=\"space\">
    <form class=\"form-inline  row justify-content-md-center\" action=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planet_search");
        echo "\" method=\"get\">
        <input class=\"form-control col-3\" type=\"search\" aria-label=\"Search\" name=\"q\" placeholder=\"Введите название планеты\">
        <div class=\"input-group-append\">
            <button class=\"btn btn-info\" type=\"submit\">Поиск</button>
        </div>
    </form>
</header>
<div class=\"container-fluid offset-planets\">
    <table class=\"table table-striped table-dark\">
        <thead>
            <tr>
                <th class=\"text-center\" scope=\"col\">#</th>
                <th class=\"text-center\" scope=\"col\">Название</th>
                <th class=\"text-center\" scope=\"col\">Диаметр(км)</th>
                <th class=\"text-center\" scope=\"col\">Плотность(кг/м3)</th>
                <th class=\"text-center\" scope=\"col\">Притяжение(м/с2кг)</th>
                <th class=\"text-center\" scope=\"col\">Масса(1024 кг)</th>
                <th class=\"text-center\" scope=\"col\">Расстояние от Солнца(млн.км)</th>
                <th class=\"text-center\" scope=\"col\">Количество лун</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["planets"]) || array_key_exists("planets", $context) ? $context["planets"] : (function () { throw new RuntimeError('Variable "planets" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["planet"]) {
            // line 27
            echo "            <tr>
                <th class=\"text-center\" scope=\"row\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planet"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "</th>
                <td class=\"text-center\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planet"], "name", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td class=\"text-center\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planet"], "diameter", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td class=\"text-center\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planet"], "density", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                <td class=\"text-center\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planet"], "gravitation", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                <td class=\"text-center\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planet"], "weight", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                <td class=\"text-center\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planet"], "distanceFromSun", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                <td class=\"text-center\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["planet"], "numberOfMoons", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
            </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "            <tr>
                <td colspan=\"8\">
                    <h2 class=\"text-center\">Ничего не найдено :(</h2>
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['planet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "secondLab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 44,  140 => 38,  132 => 35,  128 => 34,  124 => 33,  120 => 32,  116 => 31,  112 => 30,  108 => 29,  104 => 28,  101 => 27,  96 => 26,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body -%}
<header class=\"space\">
    <form class=\"form-inline  row justify-content-md-center\" action=\"{{ path('planet_search') }}\" method=\"get\">
        <input class=\"form-control col-3\" type=\"search\" aria-label=\"Search\" name=\"q\" placeholder=\"Введите название планеты\">
        <div class=\"input-group-append\">
            <button class=\"btn btn-info\" type=\"submit\">Поиск</button>
        </div>
    </form>
</header>
<div class=\"container-fluid offset-planets\">
    <table class=\"table table-striped table-dark\">
        <thead>
            <tr>
                <th class=\"text-center\" scope=\"col\">#</th>
                <th class=\"text-center\" scope=\"col\">Название</th>
                <th class=\"text-center\" scope=\"col\">Диаметр(км)</th>
                <th class=\"text-center\" scope=\"col\">Плотность(кг/м3)</th>
                <th class=\"text-center\" scope=\"col\">Притяжение(м/с2кг)</th>
                <th class=\"text-center\" scope=\"col\">Масса(1024 кг)</th>
                <th class=\"text-center\" scope=\"col\">Расстояние от Солнца(млн.км)</th>
                <th class=\"text-center\" scope=\"col\">Количество лун</th>
            </tr>
        </thead>
        <tbody>
            {% for planet in planets %}
            <tr>
                <th class=\"text-center\" scope=\"row\">{{planet.id}}</th>
                <td class=\"text-center\">{{planet.name}}</td>
                <td class=\"text-center\">{{planet.diameter}}</td>
                <td class=\"text-center\">{{planet.density}}</td>
                <td class=\"text-center\">{{planet.gravitation}}</td>
                <td class=\"text-center\">{{planet.weight}}</td>
                <td class=\"text-center\">{{planet.distanceFromSun}}</td>
                <td class=\"text-center\">{{planet.numberOfMoons}}</td>
            </tr>
            {% else %}
            <tr>
                <td colspan=\"8\">
                    <h2 class=\"text-center\">Ничего не найдено :(</h2>
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}
", "secondLab.html.twig", "/home/redrik/Документы/cloud_computing/templates/secondLab.html.twig");
    }
}
