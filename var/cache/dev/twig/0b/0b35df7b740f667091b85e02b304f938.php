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

/* dons/index.html.twig */
class __TwigTemplate_c45fcde268d01d336e88bfaf1b5c1ccb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dons/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dons/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dons/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 3
        echo twig_include($this->env, $context, "loans/_loanNavMenu.html.twig");
        echo "
";
        
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
        echo "    <div class=\"card-body\">
        <h5 class=\"card-title\">Investissements</h5>

        <!-- Default Table -->
        <table class=\"table\">
            <thead>
            <tr>

                <th scope=\"col\">fullname</th>
                <th scope=\"col\">investissements</th>
                <th scope=\"col\">Montant</th>
                <th scope=\"col\">Taux</th>
                <th scope=\"col\">Etat</th>

                <th scope=\"col\">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Dons"]) || array_key_exists("Dons", $context) ? $context["Dons"] : (function () { throw new RuntimeError('Variable "Dons" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            echo ">

                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "fullname", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>

                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "investissements", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "montant", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "taux", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                  ";
            // line 31
            if ((twig_get_attribute($this->env, $this->source, $context["a"], "etat", [], "any", false, false, false, 31) == false)) {
                // line 32
                echo "                                        <td><label class=\"badge badge-danger\">";
                echo ((twig_get_attribute($this->env, $this->source, $context["a"], "etat", [], "any", false, false, false, 32)) ? ("Yes") : ("No"));
                echo "</label></td>
                                    ";
            } else {
                // line 34
                echo "                                        <td><label class=\"badge badge-success\">";
                echo ((twig_get_attribute($this->env, $this->source, $context["a"], "etat", [], "any", false, false, false, 34)) ? ("Yes") : ("No"));
                echo "</label></td>
                                    ";
            }
            // line 36
            echo "
                <td> <a class=\"btn cur-p btn-success\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_dons", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\"> update</a> <a class=\"btn cur-p btn-danger\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_dons", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\"> Delete</a> ";
            if ((twig_get_attribute($this->env, $this->source, $context["a"], "etat", [], "any", false, false, false, 37) == false)) {
                echo "<a class=\"btn cur-p btn-success\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("valide_dons", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                echo "\"> Valider</a>";
            } else {
                echo " <a class=\"btn cur-p btn-danger\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("disvalide_dons", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                echo "\"> DisValider</a>";
            }
            echo "</td>

            </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo " >

            </tbody>
        </table>
        <!-- End Default Table Example -->
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
        return "dons/index.html.twig";
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
        return array (  173 => 39,  152 => 37,  149 => 36,  143 => 34,  137 => 32,  135 => 31,  131 => 30,  127 => 29,  123 => 28,  118 => 26,  111 => 24,  91 => 6,  81 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block navigation %}
{{ include('loans/_loanNavMenu.html.twig')}}
{% endblock %}
{% block body  %}
    <div class=\"card-body\">
        <h5 class=\"card-title\">Investissements</h5>

        <!-- Default Table -->
        <table class=\"table\">
            <thead>
            <tr>

                <th scope=\"col\">fullname</th>
                <th scope=\"col\">investissements</th>
                <th scope=\"col\">Montant</th>
                <th scope=\"col\">Taux</th>
                <th scope=\"col\">Etat</th>

                <th scope=\"col\">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr {% for a in Dons %}>

                <td>{{ a.fullname }}</td>

                <td>{{ a.investissements.name }}</td>
                <td>{{ a.montant }}</td>
                <td>{{ a.taux }}</td>
                  {% if a.etat == false %}
                                        <td><label class=\"badge badge-danger\">{{ a.etat ? 'Yes' : 'No' }}</label></td>
                                    {% else %}
                                        <td><label class=\"badge badge-success\">{{ a.etat ? 'Yes' : 'No' }}</label></td>
                                    {% endif %}

                <td> <a class=\"btn cur-p btn-success\" href=\"{{ path('update_dons',{'id':a.id}) }}\"> update</a> <a class=\"btn cur-p btn-danger\" href=\"{{ path('delete_dons',{'id':a.id}) }}\"> Delete</a> {% if a.etat == false %}<a class=\"btn cur-p btn-success\" href=\"{{ path('valide_dons',{'id':a.id}) }}\"> Valider</a>{% else %} <a class=\"btn cur-p btn-danger\" href=\"{{ path('disvalide_dons',{'id':a.id}) }}\"> DisValider</a>{% endif %}</td>

            </tr {% endfor %} >

            </tbody>
        </table>
        <!-- End Default Table Example -->
    </div>
{% endblock %}", "dons/index.html.twig", "/var/safe-spot/templates/dons/index.html.twig");
    }
}
