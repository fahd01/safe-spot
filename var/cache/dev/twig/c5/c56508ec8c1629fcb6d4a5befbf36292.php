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

/* loans/_loanProgress.html.twig */
class __TwigTemplate_c8ef3f70d25c72a3e3b2631a6129a68d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loans/_loanProgress.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loans/_loanProgress.html.twig"));

        // line 1
        $context["progressValue"] = (isset($context["progress"]) || array_key_exists("progress", $context) ? $context["progress"] : (function () { throw new RuntimeError('Variable "progress" does not exist.', 1, $this->source); })());
        // line 2
        echo "
<div class=\"progress\">
    <div class=\"progress-bar progress-bar-striped
        ";
        // line 5
        if (((isset($context["progressValue"]) || array_key_exists("progressValue", $context) ? $context["progressValue"] : (function () { throw new RuntimeError('Variable "progressValue" does not exist.', 5, $this->source); })()) < 40)) {
            // line 6
            echo "        bg-danger
        ";
        } elseif ((        // line 7
(isset($context["progressValue"]) || array_key_exists("progressValue", $context) ? $context["progressValue"] : (function () { throw new RuntimeError('Variable "progressValue" does not exist.', 7, $this->source); })()) < 80)) {
            // line 8
            echo "        bg-warning
        ";
        } else {
            // line 10
            echo "        bg-success
        ";
        }
        // line 12
        echo "        -stripped\"
         data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-html=\"true\"
         title=\"Collected Amount: ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["collectedAmount"]) || array_key_exists("collectedAmount", $context) ? $context["collectedAmount"] : (function () { throw new RuntimeError('Variable "collectedAmount" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " TND<br/>Remaining Amount: ";
        echo twig_escape_filter($this->env, (isset($context["remainingAmount"]) || array_key_exists("remainingAmount", $context) ? $context["remainingAmount"] : (function () { throw new RuntimeError('Variable "remainingAmount" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " TND\"
         role=\"progressbar\"
         style=\"width: ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["progressValue"]) || array_key_exists("progressValue", $context) ? $context["progressValue"] : (function () { throw new RuntimeError('Variable "progressValue" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "%\"
         aria-valuenow=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["progressValue"]) || array_key_exists("progressValue", $context) ? $context["progressValue"] : (function () { throw new RuntimeError('Variable "progressValue" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\"
         aria-valuemin=\"0\"
         aria-valuemax=\"100\">
        ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["progressValue"]) || array_key_exists("progressValue", $context) ? $context["progressValue"] : (function () { throw new RuntimeError('Variable "progressValue" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "%
    </div>
</div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "loans/_loanProgress.html.twig";
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
        return array (  86 => 20,  80 => 17,  76 => 16,  69 => 14,  65 => 12,  61 => 10,  57 => 8,  55 => 7,  52 => 6,  50 => 5,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set progressValue = progress %}

<div class=\"progress\">
    <div class=\"progress-bar progress-bar-striped
        {% if progressValue < 40 %}
        bg-danger
        {% elseif progressValue < 80 %}
        bg-warning
        {% else %}
        bg-success
        {% endif %}
        -stripped\"
         data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-html=\"true\"
         title=\"Collected Amount: {{ collectedAmount }} TND<br/>Remaining Amount: {{ remainingAmount }} TND\"
         role=\"progressbar\"
         style=\"width: {{ progressValue }}%\"
         aria-valuenow=\"{{ progressValue }}\"
         aria-valuemin=\"0\"
         aria-valuemax=\"100\">
        {{ progressValue }}%
    </div>
</div>

", "loans/_loanProgress.html.twig", "/var/safe-spot/templates/loans/_loanProgress.html.twig");
    }
}
