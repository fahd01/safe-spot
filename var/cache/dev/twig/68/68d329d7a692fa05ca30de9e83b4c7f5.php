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
    #loans_wrapper > div:nth-child(1) {
      margin-right: 20px;
      margin-left: 20px;
    }
  </style>

  <div>

    <div class=\"card\">
      <div class=\"card-body\">
        <div class=\"d-flex justify-content-between align-items-center flex-wrap\">
          <h4 class=\"card-title\">Find a Loan</h4>
          <a href=\"/loans/create\"
             role=\"button\"
             class=\"btn btn-info btn-sm btn-icon-text mr-3 float-right\"
             data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-html=\"true\"
             title=\"Create new loan\"
          >
            <i class=\"mdi mdi-plus-circle-outline btn-icon-prepend\"></i>
            Request Loan
          </a>
        </div>
        <div class=\"table-responsive pt-3\">
          <table class=\"table table-striped\" id=\"loans\">
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
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["loanskey"]) || array_key_exists("loanskey", $context) ? $context["loanskey"] : (function () { throw new RuntimeError('Variable "loanskey" does not exist.', 51, $this->source); })()));
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
            // line 52
            echo "              <tr>

                <td> ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo "    </td>
                <td> ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "amount", [], "any", false, false, false, 55), "html", null, true);
            echo " TND </td>
                <td> ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "interest", [], "any", false, false, false, 56), "html", null, true);
            echo " % </td>
                <td> ";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "term", [], "any", false, false, false, 57), "html", null, true);
            echo " mois</td>
                <td> ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "purpose", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                <td> ";
            // line 59
            echo twig_include($this->env, $context, "loans/_loanStatus.html.twig", ["status" => twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 59)]);
            echo "  </td>
                <td> ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "borrower", [], "any", false, false, false, 60), "firstName", [], "any", false, false, false, 60), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "borrower", [], "any", false, false, false, 60), "lastName", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                <td> ";
            // line 61
            echo twig_include($this->env, $context, "loans/_loanProgress.html.twig", ["progress" => twig_get_attribute($this->env, $this->source, $context["item"], "bidsProgress", [], "method", false, false, false, 61), "remainingAmount" => (twig_get_attribute($this->env, $this->source, $context["item"], "amount", [], "any", false, false, false, 61) - twig_get_attribute($this->env, $this->source, $context["item"], "collectedBids", [], "method", false, false, false, 61)), "collectedAmount" => twig_get_attribute($this->env, $this->source, $context["item"], "collectedBids", [], "method", false, false, false, 61)]);
            echo " </td>
                <td>
                  <a href=\"/loans/";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 63), "html", null, true);
            echo "/bids/create\"
                     role=\"button\"
                     class=\"btn btn-success btn-sm btn-icon-text mr-3
                     ";
            // line 66
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 66), "value", [], "any", false, false, false, 66) != "IN_BIDDING")) {
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
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 74), "html", null, true);
            echo "\"
                     data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\"
                     role=\"button\" class=\"btn btn-warning btn-sm btn-icon-text mr-3\" title=\"Edit this loan\">
                    <i class=\"mdi mdi-pencil btn-icon-prepend\"></i>
                    Edit
                  </a>
                  <button onclick=\"triggerDeleteLoanModal(";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 80), "html", null, true);
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
        // line 92
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

<script src=\"https://code.jquery.com/jquery-3.7.1.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\"></script>
<script src=\"https://cdn.datatables.net/2.0.1/js/dataTables.js\"></script>
<script src=\"https://cdn.datatables.net/2.0.1/js/dataTables.bootstrap4.js\"></script>

<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/2.0.1/css/dataTables.bootstrap4.css\">

<script>

new DataTable('#loans'
//, { layout: { topEnd: { search: { text: '', placeholder: 'Type search here' } } } }
);

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
        return array (  263 => 92,  237 => 80,  228 => 74,  215 => 66,  209 => 63,  204 => 61,  198 => 60,  194 => 59,  190 => 58,  186 => 57,  182 => 56,  178 => 55,  174 => 54,  170 => 52,  153 => 51,  111 => 11,  101 => 10,  89 => 7,  79 => 6,  60 => 4,  37 => 2,);
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
    #loans_wrapper > div:nth-child(1) {
      margin-right: 20px;
      margin-left: 20px;
    }
  </style>

  <div>

    <div class=\"card\">
      <div class=\"card-body\">
        <div class=\"d-flex justify-content-between align-items-center flex-wrap\">
          <h4 class=\"card-title\">Find a Loan</h4>
          <a href=\"/loans/create\"
             role=\"button\"
             class=\"btn btn-info btn-sm btn-icon-text mr-3 float-right\"
             data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\" data-html=\"true\"
             title=\"Create new loan\"
          >
            <i class=\"mdi mdi-plus-circle-outline btn-icon-prepend\"></i>
            Request Loan
          </a>
        </div>
        <div class=\"table-responsive pt-3\">
          <table class=\"table table-striped\" id=\"loans\">
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

<script src=\"https://code.jquery.com/jquery-3.7.1.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js\"></script>
<script src=\"https://cdn.datatables.net/2.0.1/js/dataTables.js\"></script>
<script src=\"https://cdn.datatables.net/2.0.1/js/dataTables.bootstrap4.js\"></script>

<link rel=\"stylesheet\" href=\"https://cdn.datatables.net/2.0.1/css/dataTables.bootstrap4.css\">

<script>

new DataTable('#loans'
//, { layout: { topEnd: { search: { text: '', placeholder: 'Type search here' } } } }
);

function triggerDeleteLoanModal(loanId){
  \$('#delete-loan-link').attr('href', `/loans/\${loanId}/delete`);
  \$('#delete-loan-modal').modal();
}
</script>

{% endblock %}
", "loans/findLoan.html.twig", "/var/safe-spot/safe-spot/templates/loans/findLoan.html.twig");
    }
}
