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

/* investissement/pdf.html.twig */
class __TwigTemplate_b600b11710637fdde0e20321256d2594 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "investissement/pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "investissement/pdf.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Investissement Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            font-size: 12px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Investissement Report</h1>
    <table>
        <thead>
            <tr>
               <th scope=\"col\">nom</th>
                <th scope=\"col\">date</th>
                <th scope=\"col\">duree</th>
                <th scope=\"col\">prix</th>
                <th scope=\"col\">Description</th>
                 <th scope=\"col\">email</th>
                
            </tr>
        </thead>
        <tbody>
           <tr ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Investissement"]) || array_key_exists("Investissement", $context) ? $context["Investissement"] : (function () { throw new RuntimeError('Variable "Investissement" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            echo ">

                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "name", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "date", [], "any", false, false, false, 45), "d-m-Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "duree", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                 <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "prixA", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                 <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "Description", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                 <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "email", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                 
                 

            </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo " >
        </tbody>
    </table>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "investissement/pdf.html.twig";
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
        return array (  124 => 53,  113 => 49,  109 => 48,  105 => 47,  101 => 46,  97 => 45,  93 => 44,  86 => 42,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>Investissement Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            font-size: 12px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Investissement Report</h1>
    <table>
        <thead>
            <tr>
               <th scope=\"col\">nom</th>
                <th scope=\"col\">date</th>
                <th scope=\"col\">duree</th>
                <th scope=\"col\">prix</th>
                <th scope=\"col\">Description</th>
                 <th scope=\"col\">email</th>
                
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
                 
                 

            </tr {% endfor %} >
        </tbody>
    </table>
</body>
</html>
", "investissement/pdf.html.twig", "/var/safe-spot/templates/investissement/pdf.html.twig");
    }
}
