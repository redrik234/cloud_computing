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
class __TwigTemplate_85dd13ad22ddd4dd312598fe69ab16e1bb6a569b7b079e48fa452bbcec4ada77 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  82 => 27,  71 => 19,  60 => 11,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home.html.twig", "/home/redrik/Документы/cloud_computing/templates/home.html.twig");
    }
}
