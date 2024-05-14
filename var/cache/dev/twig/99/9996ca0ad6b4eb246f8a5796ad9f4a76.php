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

/* loans_list/myLoans.html.twig */
class __TwigTemplate_7dc2e83456b9619b11df036f28985145 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loans_list/myLoans.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loans_list/myLoans.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "loans_list/myLoans.html.twig", 1);
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
        echo twig_include($this->env, $context, "loans_list/_loanNavMenu.html.twig");
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
            echo "        <div class=\"col-xl-5 grid-margin stretch-card\">
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
                                    class=\"btn btn-warning btn-icon d-inline-flex justify-content-center align-items-center \"
                                    title=\"edit this loan\">
                                    <i class=\"mdi mdi-lead-pencil btn-icon-prepend\"></i>
                                </a>
                                <button onclick=\"triggerDeleteLoanModal(";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo ")\"
                                        ";
            // line 26
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 26), "value", [], "any", false, false, false, 26) != "IN_BIDDING")) {
                echo " disabled ";
            }
            // line 27
            echo "                                        type=\"button\"
                                        class=\"btn btn-danger btn-icon\"
                                        title=\"delete this loan\">
                                    <i class=\"mdi mdi-delete-forever btn-icon-prepend\"></i>
                                </button>
                            </div>
                        </div>
                        <div>
                            ";
            // line 35
            echo twig_include($this->env, $context, "loans_list/_loanStatus.html.twig", ["status" => twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 35)]);
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
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "amount", [], "any", false, false, false, 44), "html", null, true);
            echo " TND</td>
                            </tr>
                            <tr>
                                <td class=\"text-muted\">Interest: </td>
                                <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "interest", [], "any", false, false, false, 48), "html", null, true);
            echo " % </td>
                            </tr>
                            <tr>
                                <td class=\"text-muted\">Term: </td>
                                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "term", [], "any", false, false, false, 52), "html", null, true);
            echo " % </td>
                            </tr>
                            <tr>
                                <td class=\"text-muted\">Purpose: </td>
                                <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "purpose", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                                <td class=\"text-muted\">Status: </td>
                                <td>";
            // line 60
            echo twig_include($this->env, $context, "loans_list/_loanStatus.html.twig", ["status" => twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 60)]);
            echo " </td>
                            </tr>
                            <tr>
                                <td class=\"text-muted\">Progress: </td>
                                <td>";
            // line 64
            echo twig_include($this->env, $context, "loans_list/_loanProgress.html.twig", ["progress" => twig_get_attribute($this->env, $this->source, $context["item"], "bidsProgress", [], "method", false, false, false, 64), "remainingAmount" => (twig_get_attribute($this->env, $this->source, $context["item"], "amount", [], "any", false, false, false, 64) - twig_get_attribute($this->env, $this->source, $context["item"], "collectedBids", [], "method", false, false, false, 64)), "collectedAmount" => twig_get_attribute($this->env, $this->source, $context["item"], "collectedBids", [], "method", false, false, false, 64)]);
            echo " </td>
                            </tr>
                            <tr>
                                <td class=\"text-muted\">Collected Amount: </td>
                                <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "collectedBids", [], "method", false, false, false, 68), "html", null, true);
            echo " TND



                                </td>
                            </tr>
                            <tr>
                                <td class=\"text-muted\">Remaining Amount: </td>
                                <td>";
            // line 76
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["item"], "amount", [], "any", false, false, false, 76) - twig_get_attribute($this->env, $this->source, $context["item"], "collectedBids", [], "method", false, false, false, 76)), "html", null, true);
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
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "bids", [], "any", false, false, false, 96));
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
                // line 97
                echo "                                    <tr>
<!--                                        <td> ";
                // line 98
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "id", [], "any", false, false, false, 98), "html", null, true);
                echo " </td>-->
                                        <td> ";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "amount", [], "any", false, false, false, 99), "html", null, true);
                echo " TND </td>
                                        <td> ";
                // line 100
                echo twig_include($this->env, $context, "bid/_bidStatus.html.twig", ["status" => twig_get_attribute($this->env, $this->source, $context["bid"], "status", [], "any", false, false, false, 100)]);
                echo " </td>
                                        <td class=\"py-1\">
                                            <!-- #TODO replace with user images -->
                                            <img src=\"/dashboard-template/images/faces/face";
                // line 103
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bid"], "bidder", [], "any", false, false, false, 103), "id", [], "any", false, false, false, 103) % 27) + 1), "html", null, true);
                echo ".jpg\" alt=\"image\">
                                            <a href=\"/users/";
                // line 104
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bid"], "bidder", [], "any", false, false, false, 104), "id", [], "any", false, false, false, 104), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bid"], "bidder", [], "any", false, false, false, 104), "firstName", [], "any", false, false, false, 104), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bid"], "bidder", [], "any", false, false, false, 104), "lastName", [], "any", false, false, false, 104), "html", null, true);
                echo " </a>
                                        </td>
                                        <td>

                                            <a href=\"/bids/";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "id", [], "any", false, false, false, 108), "html", null, true);
                echo "/approve\"
                                                    role=\"button\"
                                                    class=\"btn btn-success btn-rounded btn-icon d-inline-flex justify-content-center align-items-center
                                                    ";
                // line 111
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bid"], "status", [], "any", false, false, false, 111), "value", [], "any", false, false, false, 111) != "PENDING")) {
                    echo " disabled ";
                }
                echo "\"
                                                    title=\"Approve this bid\"
                                                    >
                                                <i class=\"mdi mdi-check btn-icon-prepend\"></i>
                                            </a>
                                            <a href=\"/bids/";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bid"], "id", [], "any", false, false, false, 116), "html", null, true);
                echo "/reject\"
                                                    role=\"button\"
                                                    class=\"btn btn-danger btn-rounded btn-icon d-inline-flex justify-content-center align-items-center
                                                    ";
                // line 119
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bid"], "status", [], "any", false, false, false, 119), "value", [], "any", false, false, false, 119) != "PENDING")) {
                    echo " disabled ";
                }
                echo "\"
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
        return "loans_list/myLoans.html.twig";
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
        return array (  376 => 135,  355 => 127,  331 => 119,  325 => 116,  315 => 111,  309 => 108,  298 => 104,  294 => 103,  288 => 100,  284 => 99,  280 => 98,  277 => 97,  260 => 96,  237 => 76,  226 => 68,  219 => 64,  212 => 60,  205 => 56,  198 => 52,  191 => 48,  184 => 44,  172 => 35,  162 => 27,  158 => 26,  154 => 25,  145 => 19,  140 => 17,  133 => 12,  116 => 11,  112 => 9,  102 => 8,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Create Loan{% endblock %}

{% block navigation %}
    {{ include('loans_list/_loanNavMenu.html.twig')}}
{% endblock %}
{% block body %}
<div>
    <div class=\"row\">
    {% for item in loans %}
        <div class=\"col-xl-5 grid-margin stretch-card\">
            <div class=\"card\">
                <div class=\"card-body border-bottom\">
                    <div class=\"d-flex-column justify-content-between align-items-center flex-wrap\">
                        <div class=\"d-flex justify-content-between align-items-center flex-wrap\">
                            <h6 class=\"mb-2 mb-md-0 text-uppercase font-weight-medium\">{{ item.purpose }}</h6>
                            <div style=\"margin-left: auto;order: 2;\">
                                <a href=\"/loans/create?id={{ item.id }}\"
                                    role=\"button\"
                                    class=\"btn btn-warning btn-icon d-inline-flex justify-content-center align-items-center \"
                                    title=\"edit this loan\">
                                    <i class=\"mdi mdi-lead-pencil btn-icon-prepend\"></i>
                                </a>
                                <button onclick=\"triggerDeleteLoanModal({{ item.id }})\"
                                        {% if item.status.value != 'IN_BIDDING' %} disabled {% endif %}
                                        type=\"button\"
                                        class=\"btn btn-danger btn-icon\"
                                        title=\"delete this loan\">
                                    <i class=\"mdi mdi-delete-forever btn-icon-prepend\"></i>
                                </button>
                            </div>
                        </div>
                        <div>
                            {{ include ('loans_list/_loanStatus.html.twig',{'status':item.status}) }}
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
                                <td>{{ item.term }} % </td>
                            </tr>
                            <tr>
                                <td class=\"text-muted\">Purpose: </td>
                                <td>{{ item.purpose }}</td>
                            </tr>
                            <tr>
                                <td class=\"text-muted\">Status: </td>
                                <td>{{ include ('loans_list/_loanStatus.html.twig',{'status':item.status}) }} </td>
                            </tr>
                            <tr>
                                <td class=\"text-muted\">Progress: </td>
                                <td>{{ include ('loans_list/_loanProgress.html.twig',{'progress':item.bidsProgress(),'remainingAmount':item.amount - item.collectedBids(),'collectedAmount':item.collectedBids() }) }} </td>
                            </tr>
                            <tr>
                                <td class=\"text-muted\">Collected Amount: </td>
                                <td>{{ item.collectedBids() }} TND



                                </td>
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
                                        <td> {{ include ('bid/_bidStatus.html.twig',{'status':bid.status}) }} </td>
                                        <td class=\"py-1\">
                                            <!-- #TODO replace with user images -->
                                            <img src=\"/dashboard-template/images/faces/face{{ (bid.bidder.id % 27) + 1 }}.jpg\" alt=\"image\">
                                            <a href=\"/users/{{bid.bidder.id}}\">{{ bid.bidder.firstName }} {{ bid.bidder.lastName }} </a>
                                        </td>
                                        <td>

                                            <a href=\"/bids/{{ bid.id }}/approve\"
                                                    role=\"button\"
                                                    class=\"btn btn-success btn-rounded btn-icon d-inline-flex justify-content-center align-items-center
                                                    {% if bid.status.value != 'PENDING' %} disabled {% endif %}\"
                                                    title=\"Approve this bid\"
                                                    >
                                                <i class=\"mdi mdi-check btn-icon-prepend\"></i>
                                            </a>
                                            <a href=\"/bids/{{ bid.id }}/reject\"
                                                    role=\"button\"
                                                    class=\"btn btn-danger btn-rounded btn-icon d-inline-flex justify-content-center align-items-center
                                                    {% if bid.status.value != 'PENDING' %} disabled {% endif %}\"
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
", "loans_list/myLoans.html.twig", "C:\\Users\\elgay\\IdeaProjects\\safe-spot1\\templates\\loans_list\\myLoans.html.twig");
    }
}
