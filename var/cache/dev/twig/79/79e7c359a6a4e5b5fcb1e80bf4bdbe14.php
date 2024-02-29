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

/* loans/_loanNavMenu.html.twig */
class __TwigTemplate_69754c9e93badf9958d70e5bdc632673 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loans/_loanNavMenu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loans/_loanNavMenu.html.twig"));

        // line 1
        echo "<nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
    <ul class=\"nav\">
        <li class=\"nav-item ";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "requesturi", [], "any", false, false, false, 3) == "/loans/create")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"/loans/create\">
                <i class=\"typcn typcn-plus menu-icon\"></i>
                <span class=\"menu-title\">Request Loan</span>
                <div class=\"badge badge-danger\">new</div>
            </a>
        </li>
        <li class=\"nav-item ";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "requesturi", [], "any", false, false, false, 10) == "/loans/list")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"/loans/list\" >
                <i class=\"typcn typcn-zoom menu-icon\"></i>
                <span class=\"menu-title\">Find a Loan</span>
            </a>
        </li>
        <li class=\"nav-item ";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "requesturi", [], "any", false, false, false, 16) == "/loans/mine")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"/loans/mine\" >
                <i class=\"typcn typcn-th-list menu-icon\"></i>
                <span class=\"menu-title\">My Loans</span>
            </a>
        </li>
        <li class=\"nav-item ";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "requesturi", [], "any", false, false, false, 22) == "/bids/mine")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"/bids/mine\" >
                <i class=\"mdi mdi-currency-usd menu-icon\"></i>
                <span class=\"menu-title\">My Bids</span>
            </a>
        </li>
        <li class=\"nav-item ";
        // line 28
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, false, 28), "requesturi", [], "any", false, false, false, 28) == "/bids/automations/create") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, false, 28), "requesturi", [], "any", false, false, false, 28) == "/bids/automations/mine"))) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\"
               data-toggle=\"collapse\"
               href=\"#bids-automation\"
               aria-expanded=\"false\"
               aria-controls=\"auth\">
                <i class=\"mdi mdi-flash-auto menu-icon\"></i>
                <span class=\"menu-title\">Bids Automation</span>
                <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse ";
        // line 38
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "requesturi", [], "any", false, false, false, 38) == "/bids/automations/create") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "requesturi", [], "any", false, false, false, 38) == "/bids/automations/mine"))) {
            echo "show";
        }
        echo "\"
                 id=\"bids-automation\">
                <ul class=\"nav flex-column sub-menu\">
                    <li class=\"nav-item\"> <a class=\"nav-link\" href=\"/bids/automations/create\"> Create Automation </a></li>
                    <li class=\"nav-item\"> <a class=\"nav-link\" href=\"/bids/automations/mine\"> My Automations </a></li>
                </ul>
            </div>
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
        return "loans/_loanNavMenu.html.twig";
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
        return array (  107 => 38,  92 => 28,  81 => 22,  70 => 16,  59 => 10,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
    <ul class=\"nav\">
        <li class=\"nav-item {% if app.request.requesturi == '/loans/create' %}active{% endif %}\">
            <a class=\"nav-link\" href=\"/loans/create\">
                <i class=\"typcn typcn-plus menu-icon\"></i>
                <span class=\"menu-title\">Request Loan</span>
                <div class=\"badge badge-danger\">new</div>
            </a>
        </li>
        <li class=\"nav-item {% if app.request.requesturi == '/loans/list' %}active{% endif %}\">
            <a class=\"nav-link\" href=\"/loans/list\" >
                <i class=\"typcn typcn-zoom menu-icon\"></i>
                <span class=\"menu-title\">Find a Loan</span>
            </a>
        </li>
        <li class=\"nav-item {% if app.request.requesturi == '/loans/mine' %}active{% endif %}\">
            <a class=\"nav-link\" href=\"/loans/mine\" >
                <i class=\"typcn typcn-th-list menu-icon\"></i>
                <span class=\"menu-title\">My Loans</span>
            </a>
        </li>
        <li class=\"nav-item {% if app.request.requesturi == '/bids/mine' %}active{% endif %}\">
            <a class=\"nav-link\" href=\"/bids/mine\" >
                <i class=\"mdi mdi-currency-usd menu-icon\"></i>
                <span class=\"menu-title\">My Bids</span>
            </a>
        </li>
        <li class=\"nav-item {% if (app.request.requesturi == '/bids/automations/create') or (app.request.requesturi == '/bids/automations/mine') %}active{% endif %}\">
            <a class=\"nav-link\"
               data-toggle=\"collapse\"
               href=\"#bids-automation\"
               aria-expanded=\"false\"
               aria-controls=\"auth\">
                <i class=\"mdi mdi-flash-auto menu-icon\"></i>
                <span class=\"menu-title\">Bids Automation</span>
                <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse {% if (app.request.requesturi == '/bids/automations/create') or (app.request.requesturi == '/bids/automations/mine') %}show{% endif %}\"
                 id=\"bids-automation\">
                <ul class=\"nav flex-column sub-menu\">
                    <li class=\"nav-item\"> <a class=\"nav-link\" href=\"/bids/automations/create\"> Create Automation </a></li>
                    <li class=\"nav-item\"> <a class=\"nav-link\" href=\"/bids/automations/mine\"> My Automations </a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>", "loans/_loanNavMenu.html.twig", "/var/safe-spot/safe-spot/templates/loans/_loanNavMenu.html.twig");
    }
}
