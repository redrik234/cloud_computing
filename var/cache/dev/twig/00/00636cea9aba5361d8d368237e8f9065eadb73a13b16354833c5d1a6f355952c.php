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

/* home.html.twig */
class __TwigTemplate_caa72f60813e84a949d506ee63b1a13ab3ced6264f7edb893897947694477679 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
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
        echo "<header class=\"masthead\">
    <section class=\"contact-section bg-black\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 mb-3 mb-md-0\">
                    <div class=\"card py-4 h-100 card-gradient\">
                        <div class=\"card-body text-center\">
                            <i class=\"fas fa-map-marked-alt text-primary mb-2\"></i>
                            <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("1");
        echo "\" class=\"btn btn-info text-uppercase m-0\" role=\"button\"><h3>Lab 1</h3></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 mb-3 mb-md-0\">
                    <div class=\"card py-4 h-100 card-gradient\">
                        <div class=\"card-body text-center\">
                            <i class=\"fas fa-envelope text-primary mb-2\"></i>
                            <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("2");
        echo "\" class=\"btn btn-info text-uppercase m-0\" role=\"button\"><h3>Lab 2</h3></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 mb-3 mb-md-0\">
                    <div class=\"card py-4 h-100 card-gradient\">
                        <div class=\"card-body text-center\">
                            <i class=\"fas fa-mobile-alt text-primary mb-2\"></i>
                            <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("3");
        echo "\" class=\"btn btn-info text-uppercase m-0\" role=\"button\"><h3>Lab 3</h3></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"social d-flex justify-content-center\">
                <a href=\"#\" class=\"mx-2\">
                    <i class=\"fab fa-twitter\"></i>
                </a>
                <a href=\"#\" class=\"mx-2\">
                    <i class=\"fab fa-facebook-f\"></i>
                </a>
                <a href=\"#\" class=\"mx-2\">
                    <i class=\"fab fa-github\"></i>
                </a>
            </div>
        </div>
    </section>
</header>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 27,  89 => 19,  78 => 11,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body -%}
<header class=\"masthead\">
    <section class=\"contact-section bg-black\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-4 mb-3 mb-md-0\">
                    <div class=\"card py-4 h-100 card-gradient\">
                        <div class=\"card-body text-center\">
                            <i class=\"fas fa-map-marked-alt text-primary mb-2\"></i>
                            <a href=\"{{ path('1')}}\" class=\"btn btn-info text-uppercase m-0\" role=\"button\"><h3>Lab 1</h3></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 mb-3 mb-md-0\">
                    <div class=\"card py-4 h-100 card-gradient\">
                        <div class=\"card-body text-center\">
                            <i class=\"fas fa-envelope text-primary mb-2\"></i>
                            <a href=\"{{ path('2')}}\" class=\"btn btn-info text-uppercase m-0\" role=\"button\"><h3>Lab 2</h3></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4 mb-3 mb-md-0\">
                    <div class=\"card py-4 h-100 card-gradient\">
                        <div class=\"card-body text-center\">
                            <i class=\"fas fa-mobile-alt text-primary mb-2\"></i>
                            <a href=\"{{ path('3')}}\" class=\"btn btn-info text-uppercase m-0\" role=\"button\"><h3>Lab 3</h3></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"social d-flex justify-content-center\">
                <a href=\"#\" class=\"mx-2\">
                    <i class=\"fab fa-twitter\"></i>
                </a>
                <a href=\"#\" class=\"mx-2\">
                    <i class=\"fab fa-facebook-f\"></i>
                </a>
                <a href=\"#\" class=\"mx-2\">
                    <i class=\"fab fa-github\"></i>
                </a>
            </div>
        </div>
    </section>
</header>

{% endblock %}

", "home.html.twig", "/home/redrik/Документы/cloud_computing/templates/home.html.twig");
    }
}
