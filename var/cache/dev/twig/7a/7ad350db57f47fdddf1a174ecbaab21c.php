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
class __TwigTemplate_93ecd51acb5d9c68e391aeae8af22018 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loans_list/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loans_list/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "loans_list/index.html.twig", 1);
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

        echo "List of all loans";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  <style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
  </style>

  <div>


    <div class=\"card\">
      <div class=\"card-body\">
        <h4 class=\"card-title\">List of all loans</h4>

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
                Borrower
              </th>
              <th>

              </th>

            </tr>
            </thead>
            <tbody>
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["loanskey"]) || array_key_exists("loanskey", $context) ? $context["loanskey"] : (function () { throw new RuntimeError('Variable "loanskey" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 48
            echo "              <tr>

                <td> ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 50), "html", null, true);
            echo "    </td>
                <td> ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "amount", [], "any", false, false, false, 51), "html", null, true);
            echo " TND </td>
                <td> ";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "interest", [], "any", false, false, false, 52), "html", null, true);
            echo " % </td>
                <td> ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "term", [], "any", false, false, false, 53), "html", null, true);
            echo " mois</td>
                <td> ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "purpose", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                <td> ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "borrower", [], "any", false, false, false, 55), "firstName", [], "any", false, false, false, 55), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "borrower", [], "any", false, false, false, 55), "lastName", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                <td>
                  <button type=\"button\" class=\"btn btn-success btn-sm btn-icon-text mr-3\" title=\"a bid is a participation in a loan where the owner of the bid lends the borrower a fraction of the loan\">
                    Bid
                  </button>
                </td>

              </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
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
        return array (  177 => 65,  159 => 55,  155 => 54,  151 => 53,  147 => 52,  143 => 51,  139 => 50,  135 => 48,  131 => 47,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}List of all loans{% endblock %}

{% block body %}
  <style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
  </style>

  <div>


    <div class=\"card\">
      <div class=\"card-body\">
        <h4 class=\"card-title\">List of all loans</h4>

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
                <td> {{ item.borrower.firstName }} {{ item.borrower.lastName }}</td>
                <td>
                  <button type=\"button\" class=\"btn btn-success btn-sm btn-icon-text mr-3\" title=\"a bid is a participation in a loan where the owner of the bid lends the borrower a fraction of the loan\">
                    Bid
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
{% endblock %}
", "loans_list/index.html.twig", "C:\\Users\\user\\Desktop\\safe-spot-main\\templates\\loans_list\\index.html.twig");
    }
}
