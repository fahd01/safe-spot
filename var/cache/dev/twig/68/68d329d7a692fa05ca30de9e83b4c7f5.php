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

/* loans/findLoan.html.twig */
class __TwigTemplate_e986357761069446591297304997addf extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loans/findLoan.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loans/findLoan.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "loans/findLoan.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "List of all loans";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 7
        echo twig_include($this->env, $context, "loans/_loanNavMenu.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "  <style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
  </style>

  <div>


    <div class=\"card\">
      <div class=\"card-body\">
        <h4 class=\"card-title\">List of all loans</h4>
        <a href=\"/loans/create\"
           role=\"button\"
           class=\"btn btn-info btn-sm btn-icon-text mr-3 float-right\"
           data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-html=\"true\"
           title=\"Create new loan\"
        >
          <i class=\"mdi mdi-plus-circle-outline btn-icon-prepend\"></i>
          Request Loan
        </a>
        <div class=\"table-responsive pt-3\">
          <table class=\"table table-striped\">
            <thead>
            <tr>
              <th>ID</th>
              <th>Amount</th>
              <th>Interest</th>
              <th>Term</th>
              <th>Purpose</th>
              <th>Status</th>
              <th>Borrower</th>
              <th>Bids Progress</th>

              <th></th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["loanskey"]) || array_key_exists("loanskey", $context) ? $context["loanskey"] : (function () { throw new RuntimeError('Variable "loanskey" does not exist.', 48, $this->source); })()));
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
            // line 49
            echo "              <tr>

                <td> ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 51), "html", null, true);
            echo "    </td>
                <td> ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "amount", [], "any", false, false, false, 52), "html", null, true);
            echo " TND </td>
                <td> ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "interest", [], "any", false, false, false, 53), "html", null, true);
            echo " % </td>
                <td> ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "term", [], "any", false, false, false, 54), "html", null, true);
            echo " mois</td>
                <td> ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "purpose", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                <td> ";
            // line 56
            echo twig_include($this->env, $context, "loans/_loanStatus.html.twig", ["status" => twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 56)]);
            echo "  </td>
                <td> ";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "borrower", [], "any", false, false, false, 57), "firstName", [], "any", false, false, false, 57), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "borrower", [], "any", false, false, false, 57), "lastName", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                <td> ";
            // line 58
            echo twig_include($this->env, $context, "loans/_loanProgress.html.twig", ["progress" => twig_get_attribute($this->env, $this->source, $context["item"], "bidsProgress", [], "method", false, false, false, 58), "remainingAmount" => (twig_get_attribute($this->env, $this->source, $context["item"], "amount", [], "any", false, false, false, 58) - twig_get_attribute($this->env, $this->source, $context["item"], "collectedBids", [], "method", false, false, false, 58)), "collectedAmount" => twig_get_attribute($this->env, $this->source, $context["item"], "collectedBids", [], "method", false, false, false, 58)]);
            echo " </td>
                <td>
                  <a href=\"/loans/";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 60), "html", null, true);
            echo "/bids/create\"
                     role=\"button\"
                     class=\"btn btn-success btn-sm btn-icon-text mr-3
                     ";
            // line 63
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 63), "value", [], "any", false, false, false, 63) != "IN_BIDDING")) {
                echo "disabled ";
            }
            echo "\"
                     data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\"
                     title=\"A bid is a participation in a loan where the owner of the bid lends the borrower a fraction of the loan\">
                    <i class=\"mdi mdi-currency-usd btn-icon-prepend\"></i>
                    Bid
                  </a>
                  <!-- # TODO display edit / delete if the the borrower == currentUser -->
                  <!--
                  <a href=\"/loans/create?id=";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 71), "html", null, true);
            echo "\"
                     data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\"
                     role=\"button\" class=\"btn btn-warning btn-sm btn-icon-text mr-3\" title=\"Edit this loan\">
                    <i class=\"mdi mdi-pencil btn-icon-prepend\"></i>
                    Edit
                  </a>
                  <button onclick=\"triggerDeleteLoanModal(";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 77), "html", null, true);
            echo ")\"
                     type=\"button\" class=\"btn btn-danger btn-sm btn-icon-text mr-3\"
                          data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Delete this loan\">
                    <i class=\"mdi mdi-delete-forever btn-icon-prepend\"></i>
                    Delete
                  </button>
                  -->
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
        // line 89
        echo "
            </tbody>
          </table>
        </div>
      </div>
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

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "loans/findLoan.html.twig";
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
        return array (  260 => 89,  234 => 77,  225 => 71,  212 => 63,  206 => 60,  201 => 58,  195 => 57,  191 => 56,  187 => 55,  183 => 54,  179 => 53,  175 => 52,  171 => 51,  167 => 49,  150 => 48,  111 => 11,  101 => 10,  89 => 7,  79 => 6,  60 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}List of all loans{% endblock %}

{% block navigation %}
{{ include('loans/_loanNavMenu.html.twig')}}
{% endblock %}

{% block body %}
  <style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
  </style>

  <div>


    <div class=\"card\">
      <div class=\"card-body\">
        <h4 class=\"card-title\">List of all loans</h4>
        <a href=\"/loans/create\"
           role=\"button\"
           class=\"btn btn-info btn-sm btn-icon-text mr-3 float-right\"
           data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-html=\"true\"
           title=\"Create new loan\"
        >
          <i class=\"mdi mdi-plus-circle-outline btn-icon-prepend\"></i>
          Request Loan
        </a>
        <div class=\"table-responsive pt-3\">
          <table class=\"table table-striped\">
            <thead>
            <tr>
              <th>ID</th>
              <th>Amount</th>
              <th>Interest</th>
              <th>Term</th>
              <th>Purpose</th>
              <th>Status</th>
              <th>Borrower</th>
              <th>Bids Progress</th>

              <th></th>
            </tr>
            </thead>
            <tbody>
            {% for item in loanskey %}
              <tr>

                <td> {{ item.id }}    </td>
                <td> {{ item.amount }} TND </td>
                <td> {{ item.interest }} % </td>
                <td> {{ item.term }} mois</td>
                <td> {{ item.purpose }}</td>
                <td> {{ include ('loans/_loanStatus.html.twig',{'status':item.status}) }}  </td>
                <td> {{ item.borrower.firstName }} {{ item.borrower.lastName }}</td>
                <td> {{ include ('loans/_loanProgress.html.twig',{'progress':item.bidsProgress(),'remainingAmount':item.amount-item.collectedBids(), 'collectedAmount':item.collectedBids() }) }} </td>
                <td>
                  <a href=\"/loans/{{ item.id }}/bids/create\"
                     role=\"button\"
                     class=\"btn btn-success btn-sm btn-icon-text mr-3
                     {% if item.status.value != 'IN_BIDDING' %}disabled {% endif %}\"
                     data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\"
                     title=\"A bid is a participation in a loan where the owner of the bid lends the borrower a fraction of the loan\">
                    <i class=\"mdi mdi-currency-usd btn-icon-prepend\"></i>
                    Bid
                  </a>
                  <!-- # TODO display edit / delete if the the borrower == currentUser -->
                  <!--
                  <a href=\"/loans/create?id={{ item.id }}\"
                     data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\"
                     role=\"button\" class=\"btn btn-warning btn-sm btn-icon-text mr-3\" title=\"Edit this loan\">
                    <i class=\"mdi mdi-pencil btn-icon-prepend\"></i>
                    Edit
                  </a>
                  <button onclick=\"triggerDeleteLoanModal({{ item.id }})\"
                     type=\"button\" class=\"btn btn-danger btn-sm btn-icon-text mr-3\"
                          data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" title=\"Delete this loan\">
                    <i class=\"mdi mdi-delete-forever btn-icon-prepend\"></i>
                    Delete
                  </button>
                  -->
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
", "loans/findLoan.html.twig", "/var/safe-spot/safe-spot/templates/loans/findLoan.html.twig");
    }
}
