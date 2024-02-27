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

/* bids/myBids.html.twig */
class __TwigTemplate_24f0e9835bb185ae835b5cce3473d658 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bids/myBids.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bids/myBids.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "bids/myBids.html.twig", 1);
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

        echo "My Bids";
        
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
            <h4 class=\"card-title\">My Bids</h4>

            <div class=\"table-responsive pt-3\">
                <table class=\"table table-striped\">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Loan</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bids"]) || array_key_exists("bids", $context) ? $context["bids"] : (function () { throw new RuntimeError('Variable "bids" does not exist.', 28, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 29
            echo "                    <tr>

                        <td> ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "    </td>
                        <td> ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "amount", [], "any", false, false, false, 32), "html", null, true);
            echo " TND </td>
                        <td> ";
            // line 33
            echo twig_include($this->env, $context, "bids/_bidStatus.html.twig", ["status" => twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 33)]);
            echo "  </td>
                        <td> ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "loan", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34), "html", null, true);
            echo " ";
            echo twig_include($this->env, $context, "loans/_loanStatus.html.twig", ["status" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "loan", [], "any", false, false, false, 34), "status", [], "any", false, false, false, 34)]);
            echo " </td>
                        <td>
                            <a href=\"\"
                               role=\"button\"
                               class=\"btn btn-warning btn-sm btn-icon-text mr-3 ";
            // line 38
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 38), "value", [], "any", false, false, false, 38) != "PENDING")) {
                echo " disabled ";
            }
            echo "\"
                               data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-html=\"true\"
                               title=\"Edit this bid\"
                                >
                                <i class=\"mdi mdi-pencil btn-icon-prepend\"></i>
                                Edit
                            </a>
                            <button onclick=\"triggerDeleteBidModal(";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo ")\"
                                    type=\"button\"
                                    class=\"btn btn-danger btn-sm btn-icon-text mr-3\"
                                    data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-html=\"true\"
                                    title=\"Delete this bid\"
                                    ";
            // line 50
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 50), "value", [], "any", false, false, false, 50) != "PENDING") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 50), "value", [], "any", false, false, false, 50) != "REJECTED"))) {
                echo " disabled ";
            }
            // line 51
            echo "                                    >
                                <i class=\"mdi mdi-delete-forever btn-icon-prepend\"></i>
                                Delete
                            </button>
                        </td>

                    </tr>

                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div id=\"delete-bid-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Delete Bid</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                Are you sure you want to delete this bid
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                <a role=\"button\" id=\"delete-bid-link\" href=\"/bids/id/delete\" class=\"btn btn-danger\">Yes, delete</a>
            </div>
        </div>
    </div>
</div>

<script>
function triggerDeleteBidModal(bidId){
  \$('#delete-bid-link').attr('href', `/bids/\${bidId}/delete`);
  \$('#delete-bid-modal').modal();
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
        return "bids/myBids.html.twig";
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
        return array (  219 => 60,  197 => 51,  193 => 50,  185 => 45,  173 => 38,  164 => 34,  160 => 33,  156 => 32,  152 => 31,  148 => 29,  131 => 28,  111 => 10,  101 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}My Bids{% endblock %}

{% block navigation %}
{{ include('loans/_loanNavMenu.html.twig')}}
{% endblock %}

{% block body %}

<div>
    <div class=\"card\">
        <div class=\"card-body\">
            <h4 class=\"card-title\">My Bids</h4>

            <div class=\"table-responsive pt-3\">
                <table class=\"table table-striped\">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Loan</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for item in bids %}
                    <tr>

                        <td> {{ item.id }}    </td>
                        <td> {{ item.amount }} TND </td>
                        <td> {{ include ('bids/_bidStatus.html.twig',{'status':item.status}) }}  </td>
                        <td> {{ item.loan.id }} {{ include ('loans/_loanStatus.html.twig',{'status':item.loan.status}) }} </td>
                        <td>
                            <a href=\"\"
                               role=\"button\"
                               class=\"btn btn-warning btn-sm btn-icon-text mr-3 {% if item.status.value != 'PENDING' %} disabled {% endif %}\"
                               data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-html=\"true\"
                               title=\"Edit this bid\"
                                >
                                <i class=\"mdi mdi-pencil btn-icon-prepend\"></i>
                                Edit
                            </a>
                            <button onclick=\"triggerDeleteBidModal({{ item.id }})\"
                                    type=\"button\"
                                    class=\"btn btn-danger btn-sm btn-icon-text mr-3\"
                                    data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-html=\"true\"
                                    title=\"Delete this bid\"
                                    {% if item.status.value != 'PENDING' and item.status.value != 'REJECTED' %} disabled {% endif %}
                                    >
                                <i class=\"mdi mdi-delete-forever btn-icon-prepend\"></i>
                                Delete
                            </button>
                        </td>

                    </tr>

                    {% endfor %}

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div id=\"delete-bid-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Delete Bid</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                Are you sure you want to delete this bid
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                <a role=\"button\" id=\"delete-bid-link\" href=\"/bids/id/delete\" class=\"btn btn-danger\">Yes, delete</a>
            </div>
        </div>
    </div>
</div>

<script>
function triggerDeleteBidModal(bidId){
  \$('#delete-bid-link').attr('href', `/bids/\${bidId}/delete`);
  \$('#delete-bid-modal').modal();
}
</script>



{% endblock %}
", "bids/myBids.html.twig", "/var/safe-spot/safe-spot/templates/bids/myBids.html.twig");
    }
}
