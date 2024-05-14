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

/* investissement/index.html.twig */
class __TwigTemplate_e4c12fc4fff73824d6d3c4de6f2d5101 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "investissement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "investissement/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "investissement/index.html.twig", 1);
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

                <th scope=\"col\">nom</th>
                <th scope=\"col\">date</th>
                <th scope=\"col\">duree</th>
                <th scope=\"col\">prix</th>
                <th scope=\"col\">Description</th>
                 <th scope=\"col\">email</th>
                <th scope=\"col\">image</th>
                <th scope=\"col\">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Investissement"]) || array_key_exists("Investissement", $context) ? $context["Investissement"] : (function () { throw new RuntimeError('Variable "Investissement" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            echo ">

                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "name", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "date", [], "any", false, false, false, 28), "d-m-Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "duree", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                 <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "prixA", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                 <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "Description", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                 <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "email", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                 <td> <img src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["a"], "image", [], "any", false, false, false, 33))), "html", null, true);
            echo "\"  style=\"width:80px ; height:80px\" /></td>
                <td> <a class=\"btn cur-p btn-danger\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_inv", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\"> Delete</a> <a class=\"btn cur-p btn-success\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_inv", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\"> update</a> </td>

            </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo " >
            

            </tbody>
        </table>
        
        
        <div class=\"pagination\">
            ";
        // line 44
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["Investissement"]) || array_key_exists("Investissement", $context) ? $context["Investissement"] : (function () { throw new RuntimeError('Variable "Investissement" does not exist.', 44, $this->source); })()));
        echo "
        </div>
        <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_inv_pdf");
        echo "\">Télécharger en PDF</a>

        
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
        return "investissement/index.html.twig";
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
        return array (  173 => 46,  168 => 44,  158 => 36,  147 => 34,  143 => 33,  139 => 32,  135 => 31,  131 => 30,  127 => 29,  123 => 28,  119 => 27,  112 => 25,  91 => 6,  81 => 5,  69 => 3,  59 => 2,  36 => 1,);
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

                <th scope=\"col\">nom</th>
                <th scope=\"col\">date</th>
                <th scope=\"col\">duree</th>
                <th scope=\"col\">prix</th>
                <th scope=\"col\">Description</th>
                 <th scope=\"col\">email</th>
                <th scope=\"col\">image</th>
                <th scope=\"col\">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr {% for a in Investissement %}>

                <td>{{ a.name }}</td>
                <td>{{ a.date|date('d-m-Y') }}</td>
                <td>{{ a.duree }}</td>
                 <td>{{ a.prixA }}</td>
                 <td>{{ a.Description }}</td>
                 <td>{{ a.email }}</td>
                 <td> <img src=\"{{ asset ('uploads/' ~ a.image) }}\"  style=\"width:80px ; height:80px\" /></td>
                <td> <a class=\"btn cur-p btn-danger\" href=\"{{ path('delete_inv',{'id':a.id}) }}\"> Delete</a> <a class=\"btn cur-p btn-success\" href=\"{{ path('update_inv',{'id':a.id}) }}\"> update</a> </td>

            </tr {% endfor %} >
            

            </tbody>
        </table>
        
        
        <div class=\"pagination\">
            {{ knp_pagination_render(Investissement) }}
        </div>
        <a href=\"{{path('app_inv_pdf')}}\">Télécharger en PDF</a>

        
        <!-- End Default Table Example -->
    </div>
{% endblock %}", "investissement/index.html.twig", "/var/safe-spot/templates/investissement/index.html.twig");
    }
}
