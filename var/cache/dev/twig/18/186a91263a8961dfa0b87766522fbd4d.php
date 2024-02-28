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

/* bids/myAutomations.html.twig */
class __TwigTemplate_407fe4e400210b9babffb6017fe51847 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'navigation' => [$this, 'block_navigation'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bids/myAutomations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bids/myAutomations.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "bids/myAutomations.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "My Automations";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 6
        echo twig_include($this->env, $context, "loans/_loanNavMenu.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
<div>
    <div class=\"card\">
        <div class=\"card-body\">
            <h4 class=\"card-title\">My Automations</h4>
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["automations"]) || array_key_exists("automations", $context) ? $context["automations"] : (function () { throw new RuntimeError('Variable "automations" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["automation"]) {
            // line 16
            echo "                    <div class=\"alert alert-success\" role=\"alert\">
                        <div class=\"d-flex justify-content-between align-items-center flex-wrap\">
                            <h6 class=\"mb-2 mb-md-0 text-uppercase font-weight-medium\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["automation"], "name", [], "any", false, false, false, 18), "html", null, true);
            echo "</h6>
                            <div style=\"margin-left: auto;order: 2;\">
                                <a href=\"/bids/automations/create?id=";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["automation"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "\"
                                   role=\"button\"
                                   class=\"btn btn-warning btn-icon d-inline-flex justify-content-center align-items-center\"
                                   data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-html=\"true\"
                                   title=\"Edit this automation\">
                                    <i class=\"mdi mdi-lead-pencil btn-icon-prepend\"></i>
                                </a>
                                <button onclick=\"triggerDeleteAutomationModal(";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["automation"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo ")\"
                                        type=\"button\"
                                        class=\"btn btn-danger btn-icon\"
                                        data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-html=\"true\"
                                        title=\"Delete this automation\">
                                    <i class=\"mdi mdi-delete-forever btn-icon-prepend\"></i>
                                </button>
                            </div>
                        </div>

                        <p>
                            Automatically bid <b>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["automation"], "bidAmount", [], "any", false, false, false, 38), "html", null, true);
            echo " TND</b> if a newly created loan satisfies <b>ALL</b> the following conditions:
                                <ul>
                                    ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["automation"], "rules", [], "any", false, false, false, 40));
            foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
                // line 41
                echo "                                        <li>
                                            <b>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rule"], "attribute", [], "any", false, false, false, 42), "name", [], "any", false, false, false, 42), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rule"], "operator", [], "any", false, false, false, 42), "value", [], "any", false, false, false, 42), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "value", [], "any", false, false, false, 42), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "getValueUnit", [], "method", false, false, false, 42), "html", null, true);
                echo "</b>
                                        </li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                                </ul>
                        </p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['automation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </div>
    </div>
</div>



<!-- Modal -->
<div id=\"delete-automation-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Delete Automation</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                Are you sure you want to delete this automation
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                <a role=\"button\" id=\"delete-automation-link\" href=\"/bids/automations/id/delete\" class=\"btn btn-danger\">Yes, delete</a>
            </div>
        </div>
    </div>
</div>

<script>
function triggerDeleteAutomationModal(id){
  \$('#delete-automation-link').attr('href', `/bids/automations/\${id}/delete`);
  \$('#delete-automation-modal').modal();
}
</script>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "bids/myAutomations.html.twig";
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
        return array (  191 => 49,  182 => 45,  167 => 42,  164 => 41,  160 => 40,  155 => 38,  141 => 27,  131 => 20,  126 => 18,  122 => 16,  118 => 15,  111 => 10,  101 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}My Automations{% endblock %}

{% block navigation %}
{{ include('loans/_loanNavMenu.html.twig')}}
{% endblock %}

{% block body %}

<div>
    <div class=\"card\">
        <div class=\"card-body\">
            <h4 class=\"card-title\">My Automations</h4>
                {% for automation in automations %}
                    <div class=\"alert alert-success\" role=\"alert\">
                        <div class=\"d-flex justify-content-between align-items-center flex-wrap\">
                            <h6 class=\"mb-2 mb-md-0 text-uppercase font-weight-medium\">{{ automation.name }}</h6>
                            <div style=\"margin-left: auto;order: 2;\">
                                <a href=\"/bids/automations/create?id={{ automation.id }}\"
                                   role=\"button\"
                                   class=\"btn btn-warning btn-icon d-inline-flex justify-content-center align-items-center\"
                                   data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-html=\"true\"
                                   title=\"Edit this automation\">
                                    <i class=\"mdi mdi-lead-pencil btn-icon-prepend\"></i>
                                </a>
                                <button onclick=\"triggerDeleteAutomationModal({{ automation.id }})\"
                                        type=\"button\"
                                        class=\"btn btn-danger btn-icon\"
                                        data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-html=\"true\"
                                        title=\"Delete this automation\">
                                    <i class=\"mdi mdi-delete-forever btn-icon-prepend\"></i>
                                </button>
                            </div>
                        </div>

                        <p>
                            Automatically bid <b>{{ automation.bidAmount }} TND</b> if a newly created loan satisfies <b>ALL</b> the following conditions:
                                <ul>
                                    {% for rule in automation.rules %}
                                        <li>
                                            <b>{{ rule.attribute.name }} {{ rule.operator.value }} {{ rule.value }} {{rule.getValueUnit()}}</b>
                                        </li>
                                    {% endfor %}
                                </ul>
                        </p>
                    </div>
                {% endfor %}
        </div>
    </div>
</div>



<!-- Modal -->
<div id=\"delete-automation-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Delete Automation</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                Are you sure you want to delete this automation
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                <a role=\"button\" id=\"delete-automation-link\" href=\"/bids/automations/id/delete\" class=\"btn btn-danger\">Yes, delete</a>
            </div>
        </div>
    </div>
</div>

<script>
function triggerDeleteAutomationModal(id){
  \$('#delete-automation-link').attr('href', `/bids/automations/\${id}/delete`);
  \$('#delete-automation-modal').modal();
}
</script>


{% endblock %}
", "bids/myAutomations.html.twig", "/var/safe-spot/safe-spot/templates/bids/myAutomations.html.twig");
    }
}
