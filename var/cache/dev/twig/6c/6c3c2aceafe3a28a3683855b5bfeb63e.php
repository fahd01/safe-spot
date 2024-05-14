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

/* reclamation/index.html.twig */
class __TwigTemplate_65ab3a747a96f6adcfb4e3a6c614d451 extends Template
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
            'search' => [$this, 'block_search'],
            'js' => [$this, 'block_js'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reclamation/index.html.twig", 1);
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

        echo "Reclamation index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 5
        echo twig_include($this->env, $context, "loans/_loanNavMenu.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"card\">
            <div class=\"table-responsive pt-3\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                               ";
        // line 17
        $this->displayBlock('search', $context, $blocks);
        // line 26
        echo "                            </div>
                        </div>
                    </div>
                </div>
                <table id=\"reclamationTable\" class=\"table table-striped project-orders-table\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Sujet</th>
                            <th>Description</th>
                            <th>Dt</th>
                            <th>Verified</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                                    <tbody >
                            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 42, $this->source); })()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
            // line 43
            echo "                                <tr>
                                    <td>#D";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                                    <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "Sujet", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "Description", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                                    <td>";
            // line 47
            ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "dt", [], "any", false, false, false, 47)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "dt", [], "any", false, false, false, 47), "Y-m-d H:i:s T"), "html", null, true))) : (print ("")));
            echo "</td>
                                    ";
            // line 48
            if ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "verified", [], "any", false, false, false, 48) == false)) {
                // line 49
                echo "                                        <td><label class=\"badge badge-danger\">";
                echo ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "verified", [], "any", false, false, false, 49)) ? ("Yes") : ("No"));
                echo "</label></td>
                                    ";
            } else {
                // line 51
                echo "                                        <td><label class=\"badge badge-success\">";
                echo ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "verified", [], "any", false, false, false, 51)) ? ("Yes") : ("No"));
                echo "</label></td>
                                    ";
            }
            // line 53
            echo "                                    <td>
                                        <div class=\"d-flex align-items-center\">
                                            ";
            // line 55
            if ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "verified", [], "any", false, false, false, 55) == false)) {
                // line 56
                echo "                                                <button type=\"button\" class=\"btn btn-success btn-sm btn-icon-text mr-3\">
                                                    <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                echo "\">
                                                        Edit
                                                    </a>
                                                    <i class=\"typcn typcn-edit btn-icon-append\"></i>
                                                </button>

                                                <button type=\"button\" class=\"btn btn-success btn-sm btn-icon-text mr-3\">
                                                    <a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rec_response_new", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 64)]), "html", null, true);
                echo "\">
                                                        Reponse To
                                                    </a>
                                                    <i class=\"typcn typcn-edit btn-icon-append\"></i>
                                                </button>
                                            ";
            }
            // line 70
            echo "                                            <td>
            <div class=\"d-flex align-items-center\">
                <!-- your existing buttons -->
                <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("qr", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 73)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Show QR</a>
                 ";
            // line 74
            echo twig_include($this->env, $context, "reclamation/_delete_form.html.twig");
            echo "

                                           
                                        </div>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 81
            echo "                                <tr>
                                    <td colspan=\"6\">no records found</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class=\"d-flex justify-content-center mt-4\">
    ";
        // line 93
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 93, $this->source); })()));
        echo "
</div>

<a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        echo "\">Create new</a>
<a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_pdf");
        echo "\" class=\"btn btn-primary\">Export to PDF</a>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 17
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        // line 18
        echo "                                   <form>
                                       <div class=\"input-group input-group-dynamic mb-8\">
                                           <span class=\"input-group-text\"><i class=\"fas fa-search\" aria-hidden=\"true\"></i></span>
                                          <input class=\"form-control\" id=\"search\" placeholder=\"Search\" type=\"text\">

                                       </div>
                                   </form>
                               ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 100
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        echo " 
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
<script>
\$(document).ready(function () {
    var debounceTimeout;

    // Event handler for keyup on #search input
    \$(\"#search\").keyup(function () {
        var value = \$(this).val().toLowerCase();

        // Clear the existing timeout on each keyup to ensure debounce effect
        clearTimeout(debounceTimeout);
        
        // Setting the debounce timeout
        debounceTimeout = setTimeout(function () {
            // AJAX request to the server
            \$.ajax({
                url: \"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("searchT");
        echo "\", // Ensure this path is correctly mapped in your Symfony routes
                type: 'POST',
                dataType: 'json',
                data: {
                    searchValue: value // Send the current value of the search input to the server
                },
                success: function (data) {
                    // Success callback: update the table with the response data
                    var tableBody = \$('#reclamationTable tbody');
                    tableBody.empty(); // Clear existing table rows

                    // Check if data is empty
                    if (data.length === 0) {
                        tableBody.append('<tr><td colspan=\"6\">No records found</td></tr>');
                    } else {
                        // Iterate over the response data to create new table rows
                        \$.each(data, function (i, item) {
                            var verifiedLabel = item.verified ? 'Yes' : 'No';
                            var verifiedClass = item.verified ? 'badge-success' : 'badge-danger';
                            var editUrl = `/reclamation/\${item.id}/edit`; // Construct the edit URL
                            var row = `<tr>
                                <td>#D\${item.id}</td>
                                <td>\${item.sujet}</td>
                                <td>\${item.Description}</td>
                                <td>\${item.dt}</td>
                                <td><label class=\"badge \${verifiedClass}\">\${verifiedLabel}</label></td>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        <button type=\"button\" class=\"btn btn-success btn-sm btn-icon-text mr-3\">
                                            <a href=\"\${editUrl}\">
                                                Edit
                                            </a>
                                            <i class=\"typcn typcn-edit btn-icon-append\"></i>
                                        </button>
                                        <!-- Additional buttons can be added here -->
                                    </div>
                                </td>
                            </tr>`;
                            tableBody.append(row); // Append the new row to the table body
                        });
                    }
                },
                error: function (xhr, status, error) {
                    // Error callback: log the error to console for debugging
                    console.error(\"Error: \", error);
                }
            });
        }, 500); // Set debounce time to 500 ms
    });
});
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
        return "reclamation/index.html.twig";
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
        return array (  349 => 117,  321 => 100,  304 => 18,  294 => 17,  281 => 97,  277 => 96,  271 => 93,  261 => 85,  252 => 81,  232 => 74,  228 => 73,  223 => 70,  214 => 64,  204 => 57,  201 => 56,  199 => 55,  195 => 53,  189 => 51,  183 => 49,  181 => 48,  177 => 47,  173 => 46,  169 => 45,  165 => 44,  162 => 43,  144 => 42,  126 => 26,  124 => 17,  113 => 8,  103 => 7,  91 => 5,  81 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Reclamation index{% endblock %}
{% block navigation %}
{{ include('loans/_loanNavMenu.html.twig')}}
{% endblock %}
{% block body %}

<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"card\">
            <div class=\"table-responsive pt-3\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                               {% block search %}
                                   <form>
                                       <div class=\"input-group input-group-dynamic mb-8\">
                                           <span class=\"input-group-text\"><i class=\"fas fa-search\" aria-hidden=\"true\"></i></span>
                                          <input class=\"form-control\" id=\"search\" placeholder=\"Search\" type=\"text\">

                                       </div>
                                   </form>
                               {% endblock %}
                            </div>
                        </div>
                    </div>
                </div>
                <table id=\"reclamationTable\" class=\"table table-striped project-orders-table\">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Sujet</th>
                            <th>Description</th>
                            <th>Dt</th>
                            <th>Verified</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                                    <tbody >
                            {% for reclamation in reclamations %}
                                <tr>
                                    <td>#D{{ reclamation.id }}</td>
                                    <td>{{ reclamation.Sujet }}</td>
                                    <td>{{ reclamation.Description }}</td>
                                    <td>{{ reclamation.dt ? reclamation.dt|date('Y-m-d H:i:s T') : '' }}</td>
                                    {% if reclamation.verified == false %}
                                        <td><label class=\"badge badge-danger\">{{ reclamation.verified ? 'Yes' : 'No' }}</label></td>
                                    {% else %}
                                        <td><label class=\"badge badge-success\">{{ reclamation.verified ? 'Yes' : 'No' }}</label></td>
                                    {% endif %}
                                    <td>
                                        <div class=\"d-flex align-items-center\">
                                            {% if reclamation.verified == false %}
                                                <button type=\"button\" class=\"btn btn-success btn-sm btn-icon-text mr-3\">
                                                    <a href=\"{{ path('app_reclamation_edit', {'id': reclamation.id}) }}\">
                                                        Edit
                                                    </a>
                                                    <i class=\"typcn typcn-edit btn-icon-append\"></i>
                                                </button>

                                                <button type=\"button\" class=\"btn btn-success btn-sm btn-icon-text mr-3\">
                                                    <a href=\"{{ path('app_rec_response_new', {'id': reclamation.id}) }}\">
                                                        Reponse To
                                                    </a>
                                                    <i class=\"typcn typcn-edit btn-icon-append\"></i>
                                                </button>
                                            {% endif %}
                                            <td>
            <div class=\"d-flex align-items-center\">
                <!-- your existing buttons -->
                <a href=\"{{ path('qr', {'id': reclamation.id}) }}\" class=\"btn btn-primary\">Show QR</a>
                 {{ include('reclamation/_delete_form.html.twig') }}

                                           
                                        </div>
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"6\">no records found</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class=\"d-flex justify-content-center mt-4\">
    {{ knp_pagination_render(reclamations) }}
</div>

<a href=\"{{ path('app_reclamation_new') }}\">Create new</a>
<a href=\"{{ path('app_reclamation_pdf') }}\" class=\"btn btn-primary\">Export to PDF</a>

{% endblock %}
{% block js %} 
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
<script>
\$(document).ready(function () {
    var debounceTimeout;

    // Event handler for keyup on #search input
    \$(\"#search\").keyup(function () {
        var value = \$(this).val().toLowerCase();

        // Clear the existing timeout on each keyup to ensure debounce effect
        clearTimeout(debounceTimeout);
        
        // Setting the debounce timeout
        debounceTimeout = setTimeout(function () {
            // AJAX request to the server
            \$.ajax({
                url: \"{{ path('searchT') }}\", // Ensure this path is correctly mapped in your Symfony routes
                type: 'POST',
                dataType: 'json',
                data: {
                    searchValue: value // Send the current value of the search input to the server
                },
                success: function (data) {
                    // Success callback: update the table with the response data
                    var tableBody = \$('#reclamationTable tbody');
                    tableBody.empty(); // Clear existing table rows

                    // Check if data is empty
                    if (data.length === 0) {
                        tableBody.append('<tr><td colspan=\"6\">No records found</td></tr>');
                    } else {
                        // Iterate over the response data to create new table rows
                        \$.each(data, function (i, item) {
                            var verifiedLabel = item.verified ? 'Yes' : 'No';
                            var verifiedClass = item.verified ? 'badge-success' : 'badge-danger';
                            var editUrl = `/reclamation/\${item.id}/edit`; // Construct the edit URL
                            var row = `<tr>
                                <td>#D\${item.id}</td>
                                <td>\${item.sujet}</td>
                                <td>\${item.Description}</td>
                                <td>\${item.dt}</td>
                                <td><label class=\"badge \${verifiedClass}\">\${verifiedLabel}</label></td>
                                <td>
                                    <div class=\"d-flex align-items-center\">
                                        <button type=\"button\" class=\"btn btn-success btn-sm btn-icon-text mr-3\">
                                            <a href=\"\${editUrl}\">
                                                Edit
                                            </a>
                                            <i class=\"typcn typcn-edit btn-icon-append\"></i>
                                        </button>
                                        <!-- Additional buttons can be added here -->
                                    </div>
                                </td>
                            </tr>`;
                            tableBody.append(row); // Append the new row to the table body
                        });
                    }
                },
                error: function (xhr, status, error) {
                    // Error callback: log the error to console for debugging
                    console.error(\"Error: \", error);
                }
            });
        }, 500); // Set debounce time to 500 ms
    });
});
</script>
{% endblock %}

", "reclamation/index.html.twig", "/var/safe-spot/templates/reclamation/index.html.twig");
    }
}
