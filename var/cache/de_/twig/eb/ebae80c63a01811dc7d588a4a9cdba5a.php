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

/* loans/admin/_navMenu.html.twig */
class __TwigTemplate_5dc87106c97ec6fc7db40fc308aaa314 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loans/admin/_navMenu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loans/admin/_navMenu.html.twig"));

        // line 1
        echo "
<nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
    <ul class=\"nav\">
        <li class=\"nav-item\">
            <a class=\"nav-link\"  href=\"/admin/loans/list\" >
                <i class=\"mdi mdi-wrench menu-icon\"></i>
                <span class=\"menu-title\">Manage Loans</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\"  href=\"/admin/bids/list\" >
                <i class=\"mdi mdi-wrench menu-icon\"></i>
                <span class=\"menu-title\">Manage Bids</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\"  href=\"/admin/loans/stats\" >
                <i class=\"mdi mdi-chart-bar menu-icon\"></i>
                <span class=\"menu-title\">Statistics</span>
            </a>
        </li>
    </ul>
    
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "loans/admin/_navMenu.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
    <ul class=\"nav\">
        <li class=\"nav-item\">
            <a class=\"nav-link\"  href=\"/admin/loans/list\" >
                <i class=\"mdi mdi-wrench menu-icon\"></i>
                <span class=\"menu-title\">Manage Loans</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\"  href=\"/admin/bids/list\" >
                <i class=\"mdi mdi-wrench menu-icon\"></i>
                <span class=\"menu-title\">Manage Bids</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\"  href=\"/admin/loans/stats\" >
                <i class=\"mdi mdi-chart-bar menu-icon\"></i>
                <span class=\"menu-title\">Statistics</span>
            </a>
        </li>
    </ul>
    
</nav>", "loans/admin/_navMenu.html.twig", "/var/safe-spot/templates/loans/admin/_navMenu.html.twig");
    }
}
