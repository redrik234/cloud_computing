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

/* firstLab.html.twig */
class __TwigTemplate_d32e7c2f35d0bae055501564351c988bc244f2a5c39f225222aeb5e96b33055d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "firstLab.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "firstLab.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "firstLab.html.twig", 1);
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
        echo "<header class=\"solaire-system\">   
</header>
<div class=\"container offset-planets\">
    <div class=\"row\">
        <div class=\"col-md card shadow rounded\">
            <div class=\"card-header row\">
                <h2 class=\"text-center\">Меркурий</h2>
            </div>
            <div class=\"card-body\">
                <p class=\"card-text\">Ближайшая к Солнцу планета Солнечной системы, наименьшая из планет земной группы. Названа в честь древнеримского бога торговли — быстрого Меркурия, поскольку она движется по небу быстрее других планет. Её период обращения вокруг Солнца составляет всего 87,97 дней — самый короткий среди всех планет Солнечной системы.</p>
            </div>
        </div>
        <div class=\"col-md offset-md-1 card shadow rounded\">
            <div class=\"card-header row\">
                <h2 class=\"text-center\">Венера</h2>
            </div>
            <div class=\"card-body\">
                <p class=\"card-text\">Вторая по удалённости от Солнца планета Солнечной системы, наряду с Меркурием, Землёй и Марсом принадлежащая к семейству планет земной группы. Названа в честь древнеримской богини любви Венеры</p>
            </div>
        </div>  
        <div class=\"col-md offset-md-1 card shadow rounded\">
            <div class=\"card-header row\">
                <h2 class=\"text-center\">Земля</h2>
            </div>
            <div class=\"card-body\">
                <p class=\"card-text\">Третья по удалённости от Солнца планета Солнечной системы. Самая плотная, пятая по диаметру и массе среди всех планет и крупнейшая среди планет земной группы, в которую входят также Меркурий, Венера и Марс. Единственное известное человеку на данный момент тело Солнечной системы в частности и Вселенной вообще, населённое живыми организмами.</p>
            </div>
        </div>
    </div>
    <div class=\"row offset-planets\">
        <div class=\"col-md card shadow rounded\">
            <div class=\"card-header row\">
                <h2 class=\"text-center\">Марс</h2>
            </div>
            <div class=\"card-body\">
                <p class=\"card-text\">Четвёртая по удалённости от Солнца и седьмая по размерам планета Солнечной системы; масса планеты составляет 10,7 % массы Земли</p>
            </div>
        </div>
        <div class=\"col-md offset-md-1 card shadow rounded\">
            <div class=\"card-header row\">
                <h2 class=\"text-center\">Юпитер</h2>
            </div>
            <div class=\"card-body\">
                <p class=\"card-text\">Крупнейшая планета Солнечной системы, пятая по удалённости от Солнца. Наряду с Сатурном, Ураном и Нептуном, Юпитер классифицируется как газовый гигант</p>
            </div>
        </div>  
        <div class=\"col-md offset-md-1 card shadow rounded\">
            <div class=\"card-header row\">
                <h2 class=\"text-center\">Сатурн</h2>
            </div>
            <div class=\"card-body\">
                <p class=\"card-text\">Шестая планета от Солнца и вторая по размерам планета в Солнечной системе после Юпитера. Сатурн, а также Юпитер, Уран и Нептун, классифицируются как планеты-гиганты. Сатурн назван в честь римского бога земледелия</p>
            </div>
        </div>  
    </div>
    <div class=\"row offset-planets\">
        <div class=\"col-md card\">
            <div class=\"card-header row shadow rounded\">
                <h2 class=\"text-center\">Уран</h2>
            </div>
            <div class=\"card-body\">
                <p class=\"card-text\">Планета Солнечной системы, седьмая по удалённости от Солнца, третья по диаметру и четвёртая по массе. Была открыта в 1781 году английским астрономом Уильямом Гершелем и названа в честь греческого бога неба Урана</p>
            </div>
        </div>
        <div class=\"col-md offset-md-1 card shadow rounded\">
            <div class=\"card-header row\">
                <h2 class=\"text-center\">Нептун</h2>
            </div>
            <div class=\"card-body\">
                <p class=\"card-text\">Восьмая и самая дальняя от Земли планета Солнечной системы. По диаметру находится на четвёртом месте, а по массе — на третьем. Масса Нептуна в 17,2 раза, а диаметр экватора в 3,9 раза больше земных. Планета была названа в честь римского бога морей</p>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "firstLab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body -%}
<header class=\"solaire-system\">   
</header>
<div class=\"container offset-planets\">
    <div class=\"row\">
        <div class=\"col-md card shadow rounded\">
            <div class=\"card-header row\">
                <h2 class=\"text-center\">Меркурий</h2>
            </div>
            <div class=\"card-body\">
                <p class=\"card-text\">Ближайшая к Солнцу планета Солнечной системы, наименьшая из планет земной группы. Названа в честь древнеримского бога торговли — быстрого Меркурия, поскольку она движется по небу быстрее других планет. Её период обращения вокруг Солнца составляет всего 87,97 дней — самый короткий среди всех планет Солнечной системы.</p>
            </div>
        </div>
        <div class=\"col-md offset-md-1 card shadow rounded\">
            <div class=\"card-header row\">
                <h2 class=\"text-center\">Венера</h2>
            </div>
            <div class=\"card-body\">
                <p class=\"card-text\">Вторая по удалённости от Солнца планета Солнечной системы, наряду с Меркурием, Землёй и Марсом принадлежащая к семейству планет земной группы. Названа в честь древнеримской богини любви Венеры</p>
            </div>
        </div>  
        <div class=\"col-md offset-md-1 card shadow rounded\">
            <div class=\"card-header row\">
                <h2 class=\"text-center\">Земля</h2>
            </div>
            <div class=\"card-body\">
                <p class=\"card-text\">Третья по удалённости от Солнца планета Солнечной системы. Самая плотная, пятая по диаметру и массе среди всех планет и крупнейшая среди планет земной группы, в которую входят также Меркурий, Венера и Марс. Единственное известное человеку на данный момент тело Солнечной системы в частности и Вселенной вообще, населённое живыми организмами.</p>
            </div>
        </div>
    </div>
    <div class=\"row offset-planets\">
        <div class=\"col-md card shadow rounded\">
            <div class=\"card-header row\">
                <h2 class=\"text-center\">Марс</h2>
            </div>
            <div class=\"card-body\">
                <p class=\"card-text\">Четвёртая по удалённости от Солнца и седьмая по размерам планета Солнечной системы; масса планеты составляет 10,7 % массы Земли</p>
            </div>
        </div>
        <div class=\"col-md offset-md-1 card shadow rounded\">
            <div class=\"card-header row\">
                <h2 class=\"text-center\">Юпитер</h2>
            </div>
            <div class=\"card-body\">
                <p class=\"card-text\">Крупнейшая планета Солнечной системы, пятая по удалённости от Солнца. Наряду с Сатурном, Ураном и Нептуном, Юпитер классифицируется как газовый гигант</p>
            </div>
        </div>  
        <div class=\"col-md offset-md-1 card shadow rounded\">
            <div class=\"card-header row\">
                <h2 class=\"text-center\">Сатурн</h2>
            </div>
            <div class=\"card-body\">
                <p class=\"card-text\">Шестая планета от Солнца и вторая по размерам планета в Солнечной системе после Юпитера. Сатурн, а также Юпитер, Уран и Нептун, классифицируются как планеты-гиганты. Сатурн назван в честь римского бога земледелия</p>
            </div>
        </div>  
    </div>
    <div class=\"row offset-planets\">
        <div class=\"col-md card\">
            <div class=\"card-header row shadow rounded\">
                <h2 class=\"text-center\">Уран</h2>
            </div>
            <div class=\"card-body\">
                <p class=\"card-text\">Планета Солнечной системы, седьмая по удалённости от Солнца, третья по диаметру и четвёртая по массе. Была открыта в 1781 году английским астрономом Уильямом Гершелем и названа в честь греческого бога неба Урана</p>
            </div>
        </div>
        <div class=\"col-md offset-md-1 card shadow rounded\">
            <div class=\"card-header row\">
                <h2 class=\"text-center\">Нептун</h2>
            </div>
            <div class=\"card-body\">
                <p class=\"card-text\">Восьмая и самая дальняя от Земли планета Солнечной системы. По диаметру находится на четвёртом месте, а по массе — на третьем. Масса Нептуна в 17,2 раза, а диаметр экватора в 3,9 раза больше земных. Планета была названа в честь римского бога морей</p>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "firstLab.html.twig", "/home/redrik/Документы/cloud_computing/templates/firstLab.html.twig");
    }
}
