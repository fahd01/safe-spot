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

/* bids/admin/listBids.html.twig */
class __TwigTemplate_79ab2ee58ea1a8aa2c06b733e3a14187 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bids/admin/listBids.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bids/admin/listBids.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "bids/admin/listBids.html.twig", 1);
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
        echo twig_include($this->env, $context, "loans/admin/_navMenu.html.twig");
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
            <h4 class=\"card-title\">List of All Bids</h4>

            <div class=\"table-responsive pt-3\">
                <table class=\"table table-striped\">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th></th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Loan ID</th>
                        <th>Loan Status</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bids"]) || array_key_exists("bids", $context) ? $context["bids"] : (function () { throw new RuntimeError('Variable "bids" does not exist.', 30, $this->source); })()));
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
            // line 31
            echo "                    <tr>
                        <td>
                            ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "
                        </td>
                        <td>
                            ";
            // line 36
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "automation", [], "any", false, false, false, 36) != null)) {
                // line 37
                echo "                            <a href=\"#\" title=\"Placed by '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "automation", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37), "html", null, true);
                echo "' automation\"
                               data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-html=\"true\"
                            >
                                <i class=\"mdi mdi-flash-auto menu-icon\"></i>
                            </a>
                            ";
            }
            // line 43
            echo "                        </td>
                        <td> ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "amount", [], "any", false, false, false, 44), "html", null, true);
            echo " TND </td>
                        <td> ";
            // line 45
            echo twig_include($this->env, $context, "bids/_bidStatus.html.twig", ["status" => twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 45)]);
            echo "  </td>
                        <td> ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "loan", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46), "html", null, true);
            echo " </td>
                        <td> ";
            // line 47
            echo twig_include($this->env, $context, "loans/_loanStatus.html.twig", ["status" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "loan", [], "any", false, false, false, 47), "status", [], "any", false, false, false, 47)]);
            echo " </td>
                        <td>
                            <a href=\"/admin/loans/";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "loan", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49), "html", null, true);
            echo "/bids/edit?id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "\"
                               role=\"button\"
                               class=\"btn btn-warning btn-sm btn-icon-text mr-3 ";
            // line 51
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 51), "value", [], "any", false, false, false, 51) != "PENDING")) {
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
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 58), "html", null, true);
            echo ")\"
                                    type=\"button\"
                                    class=\"btn btn-danger btn-sm btn-icon-text mr-3\"
                                    data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-html=\"true\"
                                    title=\"Delete this bid\"
                                    ";
            // line 63
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 63), "value", [], "any", false, false, false, 63) != "PENDING") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 63), "value", [], "any", false, false, false, 63) != "REJECTED"))) {
                echo " disabled ";
            }
            // line 64
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
        // line 73
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
                <a role=\"button\" id=\"delete-bid-link\" href=\"/admin/bids/id/delete\" class=\"btn btn-danger\">Yes, delete</a>
            </div>
        </div>
    </div>
</div>

<script>
function triggerDeleteBidModal(bidId){
  \$('#delete-bid-link').attr('href', `/admin/bids/\${bidId}/delete`);
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
        return "bids/admin/listBids.html.twig";
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
        return array (  245 => 73,  223 => 64,  219 => 63,  211 => 58,  199 => 51,  192 => 49,  187 => 47,  183 => 46,  179 => 45,  175 => 44,  172 => 43,  162 => 37,  160 => 36,  154 => 33,  150 => 31,  133 => 30,  111 => 10,  101 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}My Bids{% endblock %}

{% block navigation %}
{{ include('loans/admin/_navMenu.html.twig')}}
{% endblock %}

{% block body %}

<div>
    <div class=\"card\">
        <div class=\"card-body\">
            <h4 class=\"card-title\">List of All Bids</h4>

            <div class=\"table-responsive pt-3\">
                <table class=\"table table-striped\">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th></th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Loan ID</th>
                        <th>Loan Status</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for item in bids %}
                    <tr>
                        <td>
                            {{ item.id }}
                        </td>
                        <td>
                            {% if item.automation != null %}
                            <a href=\"#\" title=\"Placed by '{{ item.automation.name }}' automation\"
                               data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-html=\"true\"
                            >
                                <i class=\"mdi mdi-flash-auto menu-icon\"></i>
                            </a>
                            {% endif %}
                        </td>
                        <td> {{ item.amount }} TND </td>
                        <td> {{ include ('bids/_bidStatus.html.twig',{'status':item.status}) }}  </td>
                        <td> {{ item.loan.id }} </td>
                        <td> {{ include ('loans/_loanStatus.html.twig',{'status':item.loan.status}) }} </td>
                        <td>
                            <a href=\"/admin/loans/{{ item.loan.id }}/bids/edit?id={{ item.id }}\"
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
                <a role=\"button\" id=\"delete-bid-link\" href=\"/admin/bids/id/delete\" class=\"btn btn-danger\">Yes, delete</a>
            </div>
        </div>
    </div>
</div>

<script>
function triggerDeleteBidModal(bidId){
  \$('#delete-bid-link').attr('href', `/admin/bids/\${bidId}/delete`);
  \$('#delete-bid-modal').modal();
}
</script>



{% endblock %}
", "bids/admin/listBids.html.twig", "/var/safe-spot/safe-spot/templates/bids/admin/listBids.html.twig");
    }
}
