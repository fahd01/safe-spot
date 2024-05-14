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

/* loans/myLoans.html.twig */
class __TwigTemplate_6989d28d206e51afa2a56e8d63702d12 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loans/myLoans.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loans/myLoans.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "loans/myLoans.html.twig", 1);
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

        echo "Create Loan";
        
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
        echo "    ";
        echo twig_include($this->env, $context, "loans/_loanNavMenu.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "<div>
    <div class=\"row\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["loans"]) || array_key_exists("loans", $context) ? $context["loans"] : (function () { throw new RuntimeError('Variable "loans" does not exist.', 11, $this->source); })()));
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
            // line 12
            echo "        <div class=\"col-lg-6 grid-margin stretch-card\">
            <div class=\"card\">
                <div class=\"card-body border-bottom\">
                    <div class=\"d-flex-column justify-content-between align-items-center flex-wrap\">
                        <div class=\"d-flex justify-content-between align-items-center flex-wrap\">
                            <h6 class=\"mb-2 mb-md-0 text-uppercase font-weight-medium\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "purpose", [], "any", false, false, false, 17), "html", null, true);
            echo "</h6>
                            <div style=\"margin-left: auto;order: 2;\">
                                <a href=\"/loans/create?id=";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "\"
                                    role=\"button\"
                                    class=\"btn btn-warning btn-icon d-inline-flex justify-content-center align-items-center ";
            // line 21
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 21), "value", [], "any", false, false, false, 21) != "IN_BIDDING")) {
                echo " disabled ";
            }
            echo "\"
                                    data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-html=\"true\"
                                    title=\"Edit this loan\">
                                    <i class=\"mdi mdi-lead-pencil btn-icon-prepend\"></i>
                                </a>
                                <button onclick=\"triggerDeleteLoanModal(";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo ")\"
                                        ";
            // line 27
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 27), "value", [], "any", false, false, false, 27) != "IN_BIDDING")) {
                echo " disabled ";
            }
            // line 28
            echo "                                        type=\"button\"
                                        class=\"btn btn-danger btn-icon\"
                                        data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-html=\"true\"
                                        title=\"Delete this loan\">
                                    <i class=\"mdi mdi-delete-forever btn-icon-prepend\"></i>
                                </button>
                            </div>
                        </div>
                        <div>
                            ";
            // line 37
            echo twig_include($this->env, $context, "loans/_loanStatus.html.twig", ["status" => twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 37)]);
            echo "
                        </div>
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"d-flex flex-column align-items-center justify-content-between border-bottom pb-3 mb-3 mt-4\">
                        <table class=\"justify-content-center align-items-center\">
                            <tr>
                                <td class=\"text-muted\">Amount: </td>
                                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "amount", [], "any", false, false, false, 46), "html", null, true);
            echo " TND</td>
                            </tr>
                            <tr>
                                <td class=\"text-muted\">Interest: </td>
                                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "interest", [], "any", false, false, false, 50), "html", null, true);
            echo " % </td>
                            </tr>
                            <tr>
                                <td class=\"text-muted\">Term: </td>
                                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "term", [], "any", false, false, false, 54), "html", null, true);
            echo " months </td>
                            </tr>
                            <tr>
                                <td class=\"text-muted\">Purpose: </td>
                                <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "purpose", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <td class=\"text-muted\">Status: </td>
                                <td>";
            // line 62
            echo twig_include($this->env, $context, "loans/_loanStatus.html.twig", ["status" => twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 62)]);
            echo " </td>
                            </tr>
                            <tr>
                                <td class=\"text-muted\">Progress: </td>
                                <td>";
            // line 66
            echo twig_include($this->env, $context, "loans/_loanProgress.html.twig", ["progress" => twig_get_attribute($this->env, $this->source, $context["item"], "bidsProgress", [], "method", false, false, false, 66), "remainingAmount" => (twig_get_attribute($this->env, $this->source, $context["item"], "amount", [], "any", false, false, false, 66) - twig_get_attribute($this->env, $this->source, $context["item"], "collectedBids", [], "method", false, false, false, 66)), "collectedAmount" => twig_get_attribute($this->env, $this->source, $context["item"], "collectedBids", [], "method", false, false, false, 66)]);
            echo " </td>
                            </tr>
                            <tr>
                                <td class=\"text-muted\">Collected Amount: </td>
                                <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "collectedBids", [], "method", false, false, false, 70), "html", null, true);
            echo " TND</td>
                            </tr>
                            <tr>
                                <td class=\"text-muted\">Remaining Amount: </td>
                                <td>";
            // line 74
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["item"], "amount", [], "any", false, false, false, 74) - twig_get_attribute($this->env, $this->source, $context["item"], "collectedBids", [], "method", false, false, false, 74)), "html", null, true);
            echo " TND </td>
                            </tr>


                        </table>
                    </div>

                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"table-responsive pt-3\">
                            <table class=\"table table-striped\">
                                <thead>
                                    <tr>
<!--                                        <th>ID</th>-->
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Bidder</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
            // line 94
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "bids", [], "any", false, false, false, 94));
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
            foreach ($context['_seq'] as $context["_key"] => $context["bid"]) {
                // line 95
                echo "                                    <tr>
<!--                                        <td> ";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "id", [], "any", false, false, false, 96), "html", null, true);
                echo " </td>-->
                                        <td> ";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "amount", [], "any", false, false, false, 97), "html", null, true);
                echo " TND </td>
                                        <td> ";
                // line 98
                echo twig_include($this->env, $context, "bids/_bidStatus.html.twig", ["status" => twig_get_attribute($this->env, $this->source, $context["bid"], "status", [], "any", false, false, false, 98)]);
                echo " </td>
                                        <td class=\"py-1\">
                                            <!-- #TODO replace with user images -->
                                            <img src=\"/dashboard-template/images/faces/face";
                // line 101
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bid"], "bidder", [], "any", false, false, false, 101), "id", [], "any", false, false, false, 101) % 27) + 1), "html", null, true);
                echo ".jpg\" alt=\"image\">
                                            <a href=\"/users/";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bid"], "bidder", [], "any", false, false, false, 102), "id", [], "any", false, false, false, 102), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bid"], "bidder", [], "any", false, false, false, 102), "firstName", [], "any", false, false, false, 102), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bid"], "bidder", [], "any", false, false, false, 102), "lastName", [], "any", false, false, false, 102), "html", null, true);
                echo " </a>
                                        </td>
                                        <td>

                                            <a href=\"/bids/";
                // line 106
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "id", [], "any", false, false, false, 106), "html", null, true);
                echo "/approve\"
                                                    role=\"button\"
                                                    class=\"btn btn-success btn-rounded btn-icon d-inline-flex justify-content-center align-items-center
                                                    ";
                // line 109
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bid"], "status", [], "any", false, false, false, 109), "value", [], "any", false, false, false, 109) != "PENDING") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 109), "value", [], "any", false, false, false, 109) != "IN_BIDDING"))) {
                    echo " disabled ";
                }
                echo "\"
                                                    data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-html=\"true\"
                                                    title=\"Approve this bid\"
                                                    >
                                                <i class=\"mdi mdi-check btn-icon-prepend\"></i>
                                            </a>
                                            <a href=\"/bids/";
                // line 115
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "id", [], "any", false, false, false, 115), "html", null, true);
                echo "/reject\"
                                                    role=\"button\"
                                                    class=\"btn btn-danger btn-rounded btn-icon d-inline-flex justify-content-center align-items-center
                                                    ";
                // line 118
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bid"], "status", [], "any", false, false, false, 118), "value", [], "any", false, false, false, 118) != "PENDING")) {
                    echo " disabled ";
                }
                echo "\"
                                                    data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-html=\"true\"
                                                    title=\"Reject this bid\"
                                                    >
                                                <i class=\"mdi mdi-window-close btn-icon-prepend\"></i>
                                            </a>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bid'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 127
            echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        // line 135
        echo "    </div>
</div>



<!-- Modal -->
<div id=\"delete-loan-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Delete Loan</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                Are you sure you want to delete this loan
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                <a role=\"button\" id=\"delete-loan-link\" href=\"/loans/id/delete\" class=\"btn btn-danger\">Yes, delete</a>
            </div>
        </div>
    </div>
</div>

<script>
function triggerDeleteLoanModal(loanId){
  \$('#delete-loan-link').attr('href', `/loans/\${loanId}/delete`);
  \$('#delete-loan-modal').modal();
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
        return "loans/myLoans.html.twig";
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
        return array (  381 => 135,  360 => 127,  335 => 118,  329 => 115,  318 => 109,  312 => 106,  301 => 102,  297 => 101,  291 => 98,  287 => 97,  283 => 96,  280 => 95,  263 => 94,  240 => 74,  233 => 70,  226 => 66,  219 => 62,  212 => 58,  205 => 54,  198 => 50,  191 => 46,  179 => 37,  168 => 28,  164 => 27,  160 => 26,  150 => 21,  145 => 19,  140 => 17,  133 => 12,  116 => 11,  112 => 9,  102 => 8,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Create Loan{% endblock %}

{% block navigation %}
    {{ include('loans/_loanNavMenu.html.twig')}}
{% endblock %}
{% block body %}
<div>
    <div class=\"row\">
    {% for item in loans %}
        <div class=\"col-lg-6 grid-margin stretch-card\">
            <div class=\"card\">
                <div class=\"card-body border-bottom\">
                    <div class=\"d-flex-column justify-content-between align-items-center flex-wrap\">
                        <div class=\"d-flex justify-content-between align-items-center flex-wrap\">
                            <h6 class=\"mb-2 mb-md-0 text-uppercase font-weight-medium\">{{ item.purpose }}</h6>
                            <div style=\"margin-left: auto;order: 2;\">
                                <a href=\"/loans/create?id={{ item.id }}\"
                                    role=\"button\"
                                    class=\"btn btn-warning btn-icon d-inline-flex justify-content-center align-items-center {% if item.status.value != 'IN_BIDDING' %} disabled {% endif %}\"
                                    data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-html=\"true\"
                                    title=\"Edit this loan\">
                                    <i class=\"mdi mdi-lead-pencil btn-icon-prepend\"></i>
                                </a>
                                <button onclick=\"triggerDeleteLoanModal({{ item.id }})\"
                                        {% if item.status.value != 'IN_BIDDING' %} disabled {% endif %}
                                        type=\"button\"
                                        class=\"btn btn-danger btn-icon\"
                                        data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-html=\"true\"
                                        title=\"Delete this loan\">
                                    <i class=\"mdi mdi-delete-forever btn-icon-prepend\"></i>
                                </button>
                            </div>
                        </div>
                        <div>
                            {{ include ('loans/_loanStatus.html.twig',{'status':item.status}) }}
                        </div>
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"d-flex flex-column align-items-center justify-content-between border-bottom pb-3 mb-3 mt-4\">
                        <table class=\"justify-content-center align-items-center\">
                            <tr>
                                <td class=\"text-muted\">Amount: </td>
                                <td>{{ item.amount }} TND</td>
                            </tr>
                            <tr>
                                <td class=\"text-muted\">Interest: </td>
                                <td>{{ item.interest }} % </td>
                            </tr>
                            <tr>
                                <td class=\"text-muted\">Term: </td>
                                <td>{{ item.term }} months </td>
                            </tr>
                            <tr>
                                <td class=\"text-muted\">Purpose: </td>
                                <td>{{ item.purpose }}</td>
                            </tr>
                            <tr>
                                <td class=\"text-muted\">Status: </td>
                                <td>{{ include ('loans/_loanStatus.html.twig',{'status':item.status}) }} </td>
                            </tr>
                            <tr>
                                <td class=\"text-muted\">Progress: </td>
                                <td>{{ include ('loans/_loanProgress.html.twig',{'progress':item.bidsProgress(),'remainingAmount':item.amount - item.collectedBids(),'collectedAmount':item.collectedBids() }) }} </td>
                            </tr>
                            <tr>
                                <td class=\"text-muted\">Collected Amount: </td>
                                <td>{{ item.collectedBids() }} TND</td>
                            </tr>
                            <tr>
                                <td class=\"text-muted\">Remaining Amount: </td>
                                <td>{{ item.amount - item.collectedBids() }} TND </td>
                            </tr>


                        </table>
                    </div>

                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"table-responsive pt-3\">
                            <table class=\"table table-striped\">
                                <thead>
                                    <tr>
<!--                                        <th>ID</th>-->
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Bidder</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for bid in item.bids %}
                                    <tr>
<!--                                        <td> {{ bid.id }} </td>-->
                                        <td> {{ bid.amount }} TND </td>
                                        <td> {{ include ('bids/_bidStatus.html.twig',{'status':bid.status}) }} </td>
                                        <td class=\"py-1\">
                                            <!-- #TODO replace with user images -->
                                            <img src=\"/dashboard-template/images/faces/face{{ (bid.bidder.id % 27) + 1 }}.jpg\" alt=\"image\">
                                            <a href=\"/users/{{bid.bidder.id}}\">{{ bid.bidder.firstName }} {{ bid.bidder.lastName }} </a>
                                        </td>
                                        <td>

                                            <a href=\"/bids/{{ bid.id }}/approve\"
                                                    role=\"button\"
                                                    class=\"btn btn-success btn-rounded btn-icon d-inline-flex justify-content-center align-items-center
                                                    {% if bid.status.value != 'PENDING' or item.status.value != 'IN_BIDDING' %} disabled {% endif %}\"
                                                    data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-html=\"true\"
                                                    title=\"Approve this bid\"
                                                    >
                                                <i class=\"mdi mdi-check btn-icon-prepend\"></i>
                                            </a>
                                            <a href=\"/bids/{{ bid.id }}/reject\"
                                                    role=\"button\"
                                                    class=\"btn btn-danger btn-rounded btn-icon d-inline-flex justify-content-center align-items-center
                                                    {% if bid.status.value != 'PENDING' %} disabled {% endif %}\"
                                                    data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-html=\"true\"
                                                    title=\"Reject this bid\"
                                                    >
                                                <i class=\"mdi mdi-window-close btn-icon-prepend\"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {% endfor %}
    </div>
</div>



<!-- Modal -->
<div id=\"delete-loan-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Delete Loan</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                Are you sure you want to delete this loan
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                <a role=\"button\" id=\"delete-loan-link\" href=\"/loans/id/delete\" class=\"btn btn-danger\">Yes, delete</a>
            </div>
        </div>
    </div>
</div>

<script>
function triggerDeleteLoanModal(loanId){
  \$('#delete-loan-link').attr('href', `/loans/\${loanId}/delete`);
  \$('#delete-loan-modal').modal();
}
</script>

{% endblock %}
", "loans/myLoans.html.twig", "/var/safe-spot/safe-spot/templates/loans/myLoans.html.twig");
    }
}
