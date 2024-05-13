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

/* loans/_loanStatus.html.twig */
class __TwigTemplate_e08258def630deac6ce7a07e84048994 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loans/_loanStatus.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loans/_loanStatus.html.twig"));

        // line 1
        echo "
";
        // line 2
        if ((twig_get_attribute($this->env, $this->source, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 2, $this->source); })()), "value", [], "any", false, false, false, 2) == "IN_BIDDING")) {
            // line 3
            echo "    <label class=\"badge badge-info\">In Bidding</label>
";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 4
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 4, $this->source); })()), "value", [], "any", false, false, false, 4) == "PAID")) {
            // line 5
            echo "    <label class=\"badge badge-success\">Complete</label>
";
        } else {
            // line 7
            echo "    <label class=\"badge badge-warning\">Active</label>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "loans/_loanStatus.html.twig";
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
        return array (  57 => 7,  53 => 5,  51 => 4,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% if status.value == \"IN_BIDDING\" %}
    <label class=\"badge badge-info\">In Bidding</label>
{% elseif status.value == \"PAID\" %}
    <label class=\"badge badge-success\">Complete</label>
{% else %}
    <label class=\"badge badge-warning\">Active</label>
{% endif %}", "loans/_loanStatus.html.twig", "C:\\Users\\elgay\\IdeaProjects\\safe-spot1\\templates\\loans\\_loanStatus.html.twig");
    }
}
