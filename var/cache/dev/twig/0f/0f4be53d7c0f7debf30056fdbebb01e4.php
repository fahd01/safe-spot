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

/* admin/index.html.twig */
class __TwigTemplate_6875fa6437ad5b5c430b4ff751132812 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome Back Admin!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

    <main class=\"main-content position-relative max-height-vh-100 h-100 border-radius-lg \">

        <div class=\"container-fluid py-4\">
            <div class=\"row mt-4\">
                <div class=\"col-lg-4 col-md-6 mt-4 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-header p-3 pt-2\">
                            <div class=\"text-end pt-1\">
                                <p class=\"text-sm mb-0 text-capitalize\">User count</p>
                                <h4 class=\"mb-0\">";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "</h4>
                            </div>
                        </div>
                        <hr class=\"dark horizontal my-0\">
                        <div class=\"card-body\">
                            <p class=\"text-sm \">Users distribution per status </p>
                            <hr class=\"dark horizontal\">
                            <div class=\"d-flex \">
                                <div id=\"div_graph\"></div>
                                <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
                                <script type=\"text/javascript\">
                                    ";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension']->gcLanguage("fr"), "html", null, true);
        echo "
                                    ";
        // line 27
        echo $this->extensions['CMEN\GoogleChartsBundle\Twig\GoogleChartsExtension']->gcDraw((isset($context["pieChart"]) || array_key_exists("pieChart", $context) ? $context["pieChart"] : (function () { throw new RuntimeError('Variable "pieChart" does not exist.', 27, $this->source); })()), "div_graph");
        echo "
                                </script>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/index.html.twig";
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
        return array (  119 => 27,  115 => 26,  101 => 15,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%extends 'base.html.twig'%}
{% block title %}Welcome Back Admin!{% endblock %}
{% block body %}


    <main class=\"main-content position-relative max-height-vh-100 h-100 border-radius-lg \">

        <div class=\"container-fluid py-4\">
            <div class=\"row mt-4\">
                <div class=\"col-lg-4 col-md-6 mt-4 mb-4\">
                    <div class=\"card\">
                        <div class=\"card-header p-3 pt-2\">
                            <div class=\"text-end pt-1\">
                                <p class=\"text-sm mb-0 text-capitalize\">User count</p>
                                <h4 class=\"mb-0\">{{ users }}</h4>
                            </div>
                        </div>
                        <hr class=\"dark horizontal my-0\">
                        <div class=\"card-body\">
                            <p class=\"text-sm \">Users distribution per status </p>
                            <hr class=\"dark horizontal\">
                            <div class=\"d-flex \">
                                <div id=\"div_graph\"></div>
                                <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
                                <script type=\"text/javascript\">
                                    {{ gc_language('fr') }}
                                    {{ gc_draw(pieChart, 'div_graph') }}
                                </script>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
{% endblock %}", "admin/index.html.twig", "C:\\Users\\21692\\Downloads\\safe-spot-main (1)\\safe-spot-main\\templates\\admin\\index.html.twig");
    }
}
