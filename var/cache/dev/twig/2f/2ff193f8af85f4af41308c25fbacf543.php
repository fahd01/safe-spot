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

/* loans_list/_loanNavMenu.html.twig */
class __TwigTemplate_f51115804997bcb3fefd4c0b3dc1d10f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loans_list/_loanNavMenu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loans_list/_loanNavMenu.html.twig"));

        // line 1
        echo "
<nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
    <ul class=\"nav\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"/loans/create\">
                <i class=\"typcn typcn-plus menu-icon\"></i>
                <span class=\"menu-title\">Request Loan</span>
                <div class=\"badge badge-danger\">new</div>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\"  href=\"/loans/list\" >
                <i class=\"typcn typcn-zoom menu-icon\"></i>
                <span class=\"menu-title\">Find a Loan</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\"  href=\"/loans/mine\" >
                <i class=\"typcn typcn-th-list menu-icon\"></i>
                <span class=\"menu-title\">My Loans</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\"  href=\"/bids/mine\" >
                <i class=\"mdi mdi-currency-usd menu-icon\"></i>
                <span class=\"menu-title\">My Bids</span>
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
        return "loans_list/_loanNavMenu.html.twig";
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
            <a class=\"nav-link\" href=\"/loans/create\">
                <i class=\"typcn typcn-plus menu-icon\"></i>
                <span class=\"menu-title\">Request Loan</span>
                <div class=\"badge badge-danger\">new</div>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\"  href=\"/loans/list\" >
                <i class=\"typcn typcn-zoom menu-icon\"></i>
                <span class=\"menu-title\">Find a Loan</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\"  href=\"/loans/mine\" >
                <i class=\"typcn typcn-th-list menu-icon\"></i>
                <span class=\"menu-title\">My Loans</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\"  href=\"/bids/mine\" >
                <i class=\"mdi mdi-currency-usd menu-icon\"></i>
                <span class=\"menu-title\">My Bids</span>
            </a>
        </li>
    </ul>
</nav>", "loans_list/_loanNavMenu.html.twig", "/var/safe-spot/safe-spot/templates/loans_list/_loanNavMenu.html.twig");
    }
}
