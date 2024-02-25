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

/* bid/_bidStatus.html.twig */
class __TwigTemplate_87ffae46baae268f7250d325e91e333e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bid/_bidStatus.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bid/_bidStatus.html.twig"));

        // line 1
        if ((twig_get_attribute($this->env, $this->source, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 1, $this->source); })()), "value", [], "any", false, false, false, 1) == "PENDING")) {
            // line 2
            echo "    <label class=\"badge badge-info\">Pending</label>
";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 3
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 3, $this->source); })()), "value", [], "any", false, false, false, 3) == "APPROVED")) {
            // line 4
            echo "    <label class=\"badge badge-success\">Approved</label>
";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 5
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 5, $this->source); })()), "value", [], "any", false, false, false, 5) == "REJECTED")) {
            // line 6
            echo "    <label class=\"badge badge-danger\">Rejected</label>
";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 7
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 7, $this->source); })()), "value", [], "any", false, false, false, 7) == "ACTIVE")) {
            // line 8
            echo "    <label class=\"badge badge-warning\">Active</label>
";
        } else {
            // line 10
            echo "    <label class=\"badge badge-secondary\">Completed</label>
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
        return "bid/_bidStatus.html.twig";
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
        return array (  64 => 10,  60 => 8,  58 => 7,  55 => 6,  53 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if status.value == \"PENDING\" %}
    <label class=\"badge badge-info\">Pending</label>
{% elseif status.value == \"APPROVED\" %}
    <label class=\"badge badge-success\">Approved</label>
{% elseif status.value == \"REJECTED\" %}
    <label class=\"badge badge-danger\">Rejected</label>
{% elseif status.value == \"ACTIVE\" %}
    <label class=\"badge badge-warning\">Active</label>
{% else %}
    <label class=\"badge badge-secondary\">Completed</label>
{% endif %}
", "bid/_bidStatus.html.twig", "C:\\Users\\elgay\\IdeaProjects\\safe-spot1\\templates\\bid\\_bidStatus.html.twig");
    }
}
