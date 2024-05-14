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

/* list_loans/index.html.twig */
class __TwigTemplate_5f3dc4206177db5f9cc7cab841bc3260 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "list_loans/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "list_loans/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "list_loans/index.html.twig", 1);
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

        echo "List all loans";
        
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
        echo "<!-- partial:partials/_sidebar.html -->
<nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
  <ul class=\"nav\">
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"/loans/list\">
        <i class=\"typcn typcn-device-desktop menu-icon\"></i>
        <span class=\"menu-title\">Find a loan</span>
      </a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"/loans/create\">
        <i class=\"typcn typcn-mortar-board menu-icon\"></i>
        <span class=\"menu-title\">Request Loan</span>
      </a>
    </li>
  </ul>
</nav>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 25
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 26
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div>
    <h1>Hello ";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "! ✅</h1>

              <div class=\"row\">
                  <div class=\"card\">
                    <div class=\"table-responsive pt-3\">
                      <table class=\"table table-striped project-orders-table\">
                        <thead>
                          <tr>
                            <th class=\"ml-5\">ID</th>
                            <th>Borrower</th>
                            <th>Amount</th>
                            <th>Interest</th>
                            <th>term</th>
                            <th>Status</th>
                            <th>Purpose</th>
                            <th>Description</th>
                          </tr>
                        </thead>
                        <tbody>
                          ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["loans"]) || array_key_exists("loans", $context) ? $context["loans"] : (function () { throw new RuntimeError('Variable "loans" does not exist.', 51, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["loan"]) {
            // line 52
            echo "                          <tr>
                            <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loan"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                            <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loan"], "borrower", [], "any", false, false, false, 54), "firstName", [], "any", false, false, false, 54), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loan"], "borrower", [], "any", false, false, false, 54), "lastName", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                            <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loan"], "amount", [], "any", false, false, false, 55), "html", null, true);
            echo " TND</td>
                            <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loan"], "interest", [], "any", false, false, false, 56), "html", null, true);
            echo " %</td>
                            <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loan"], "term", [], "any", false, false, false, 57), "html", null, true);
            echo " months</td>
                            <td>
                            ";
            // line 59
            echo twig_include($this->env, $context, "list_loans/_loan-status.html.twig", ["status" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["loan"], "status", [], "any", false, false, false, 59), "value", [], "any", false, false, false, 59)]);
            echo "
                            </td>
                            <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loan"], "purpose", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                            <td>";
            // line 62
            (((twig_get_attribute($this->env, $this->source, $context["loan"], "description", [], "any", false, false, false, 62) == null)) ? (print ("--")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loan"], "description", [], "any", false, false, false, 62), "html", null, true))));
            echo "</td>
                            <td>
                              <div class=\"d-flex align-items-center\">
                                <button type=\"button\" class=\"btn btn-success btn-sm btn-icon-text mr-3\">
                                  Bid
                                  <i class=\"typcn mdi mdi-cash-usd btn-icon-append\"></i>
                                </button>
                              </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
                        </tbody>
                      </table>
                    </div>
                  </div>
              </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "list_loans/index.html.twig";
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
        return array (  232 => 73,  207 => 62,  203 => 61,  198 => 59,  193 => 57,  189 => 56,  185 => 55,  179 => 54,  175 => 53,  172 => 52,  155 => 51,  133 => 32,  125 => 26,  115 => 25,  89 => 7,  79 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}List all loans{% endblock %}


{% block navigation %}
<!-- partial:partials/_sidebar.html -->
<nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
  <ul class=\"nav\">
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"/loans/list\">
        <i class=\"typcn typcn-device-desktop menu-icon\"></i>
        <span class=\"menu-title\">Find a loan</span>
      </a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"/loans/create\">
        <i class=\"typcn typcn-mortar-board menu-icon\"></i>
        <span class=\"menu-title\">Request Loan</span>
      </a>
    </li>
  </ul>
</nav>{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div>
    <h1>Hello {{ controller_name }}! ✅</h1>

              <div class=\"row\">
                  <div class=\"card\">
                    <div class=\"table-responsive pt-3\">
                      <table class=\"table table-striped project-orders-table\">
                        <thead>
                          <tr>
                            <th class=\"ml-5\">ID</th>
                            <th>Borrower</th>
                            <th>Amount</th>
                            <th>Interest</th>
                            <th>term</th>
                            <th>Status</th>
                            <th>Purpose</th>
                            <th>Description</th>
                          </tr>
                        </thead>
                        <tbody>
                          {% for loan in loans %}
                          <tr>
                            <td>{{ loan.id }}</td>
                            <td>{{ loan.borrower.firstName }} {{ loan.borrower.lastName }}</td>
                            <td>{{ loan.amount }} TND</td>
                            <td>{{ loan.interest }} %</td>
                            <td>{{ loan.term }} months</td>
                            <td>
                            {{ include( 'list_loans/_loan-status.html.twig', {'status':  loan.status.value } ) }}
                            </td>
                            <td>{{ loan.purpose }}</td>
                            <td>{{ (loan.description == null) ? \"--\" : loan.description }}</td>
                            <td>
                              <div class=\"d-flex align-items-center\">
                                <button type=\"button\" class=\"btn btn-success btn-sm btn-icon-text mr-3\">
                                  Bid
                                  <i class=\"typcn mdi mdi-cash-usd btn-icon-append\"></i>
                                </button>
                              </div>
                            </td>
                          </tr>
                          {% endfor %}

                        </tbody>
                      </table>
                    </div>
                  </div>
              </div>
</div>
{% endblock %}
", "list_loans/index.html.twig", "/var/safe-spot/safe-spot/templates/list_loans/index.html.twig");
    }
}
