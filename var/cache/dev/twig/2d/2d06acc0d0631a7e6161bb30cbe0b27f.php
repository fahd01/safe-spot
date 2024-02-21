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

/* loans_list/index.html.twig */
class __TwigTemplate_67f6de262cd98a3e2661e44609046586 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loans_list/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loans_list/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "loans_list/index.html.twig", 2);
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
        echo twig_include($this->env, $context, "loans_list/_loanNavMenu.html.twig");
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
           role=\"button\" class=\"btn btn-info btn-sm btn-icon-text mr-3 float-right\"  title=\" create new loan\">
          +loan
        </a>
        <div class=\"table-responsive pt-3\">
          <table class=\"table table-striped\">
            <thead>
            <tr>
              <th>
                ID
              </th>
              <th>
                Amount
              </th>
              <th>
                Interest
              </th>
              <th>
                Term
              </th>
              <th>
                Purpose
              </th>
              <th>
                Status
              </th>

              <th>
                Borrower
              </th>
              <th>

              </th>

            </tr>
            </thead>
            <tbody>
            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["loanskey"]) || array_key_exists("loanskey", $context) ? $context["loanskey"] : (function () { throw new RuntimeError('Variable "loanskey" does not exist.', 64, $this->source); })()));
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
            // line 65
            echo "              <tr>

                <td> ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 67), "html", null, true);
            echo "    </td>
                <td> ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "amount", [], "any", false, false, false, 68), "html", null, true);
            echo " TND </td>
                <td> ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "interest", [], "any", false, false, false, 69), "html", null, true);
            echo " % </td>
                <td> ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "term", [], "any", false, false, false, 70), "html", null, true);
            echo " mois</td>
                <td> ";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "purpose", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
                <td> ";
            // line 72
            echo twig_include($this->env, $context, "loans_list/_loanStatus.html.twig", ["status" => twig_get_attribute($this->env, $this->source, $context["item"], "status", [], "any", false, false, false, 72)]);
            echo "  </td>

                <td> ";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "borrower", [], "any", false, false, false, 74), "firstName", [], "any", false, false, false, 74), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "borrower", [], "any", false, false, false, 74), "lastName", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
                <td>
                  <button type=\"button\" class=\"btn btn-success btn-sm btn-icon-text mr-3\" title=\"a bid is a participation in a loan where the owner of the bid lends the borrower a fraction of the loan\">
                    Bid
                  </button>
                  <a href=\"/loans/";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 79), "html", null, true);
            echo "/delete\"
                          role=\"button\" class=\"btn btn-danger btn-sm btn-icon-text mr-3\" title=\"delete this loan\">
                    Delete
                  </a>

                  <a href=\"/loans/create?id=";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 84), "html", null, true);
            echo "\"
                     role=\"button\" class=\"btn btn-warning btn-sm btn-icon-text mr-3\" title=\"edit this loan\">
                    Edit
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
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
        return "loans_list/index.html.twig";
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
        return array (  253 => 93,  230 => 84,  222 => 79,  212 => 74,  207 => 72,  203 => 71,  199 => 70,  195 => 69,  191 => 68,  187 => 67,  183 => 65,  166 => 64,  111 => 11,  101 => 10,  89 => 7,  79 => 6,  60 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}List of all loans{% endblock %}

{% block navigation %}
{{ include('loans_list/_loanNavMenu.html.twig')}}
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
           role=\"button\" class=\"btn btn-info btn-sm btn-icon-text mr-3 float-right\"  title=\" create new loan\">
          +loan
        </a>
        <div class=\"table-responsive pt-3\">
          <table class=\"table table-striped\">
            <thead>
            <tr>
              <th>
                ID
              </th>
              <th>
                Amount
              </th>
              <th>
                Interest
              </th>
              <th>
                Term
              </th>
              <th>
                Purpose
              </th>
              <th>
                Status
              </th>

              <th>
                Borrower
              </th>
              <th>

              </th>

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
                <td> {{ include ('loans_list/_loanStatus.html.twig',{'status':item.status}) }}  </td>

                <td> {{ item.borrower.firstName }} {{ item.borrower.lastName }}</td>
                <td>
                  <button type=\"button\" class=\"btn btn-success btn-sm btn-icon-text mr-3\" title=\"a bid is a participation in a loan where the owner of the bid lends the borrower a fraction of the loan\">
                    Bid
                  </button>
                  <a href=\"/loans/{{ item.id }}/delete\"
                          role=\"button\" class=\"btn btn-danger btn-sm btn-icon-text mr-3\" title=\"delete this loan\">
                    Delete
                  </a>

                  <a href=\"/loans/create?id={{ item.id }}\"
                     role=\"button\" class=\"btn btn-warning btn-sm btn-icon-text mr-3\" title=\"edit this loan\">
                    Edit
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
{% endblock %}
", "loans_list/index.html.twig", "C:\\Users\\elgay\\IdeaProjects\\safe-spot1\\templates\\loans_list\\index.html.twig");
    }
}
