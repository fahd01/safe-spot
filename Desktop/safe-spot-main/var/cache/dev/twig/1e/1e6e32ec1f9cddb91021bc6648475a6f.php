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
class __TwigTemplate_c66a36d1182ae80100378cba4cb304ef extends Template
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

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"card\">
                <div class=\"table-responsive pt-3\">
                  <table class=\"table table-striped project-orders-table\">
                    <thead>
                      <tr>
                        <th class=\"ml-5\">ID</th>
                        <th>Sujet</th>
                        <th>Description</th>
                        <th>Dt</th>
                        <th>Verified</th>
                        <th>actions</th>
                      </tr>
                    </thead>
                    <tbody>
                     ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 23, $this->source); })()));
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
            // line 24
            echo "                      <tr>
                        <td>#D";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "Sujet", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "Description", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "dt", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reclamation"], "dt", [], "any", false, false, false, 28), "Y-m-d H:i:s T"), "html", null, true))) : (print ("")));
            echo "</td>
                        ";
            // line 29
            if ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "verified", [], "any", false, false, false, 29) == false)) {
                // line 30
                echo "                        <td><label class=\"badge badge-danger\">";
                echo ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "verified", [], "any", false, false, false, 30)) ? ("Yes") : ("No"));
                echo "</label></td>
                        ";
            } else {
                // line 32
                echo "                        <td><label class=\"badge badge-success\">";
                echo ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "verified", [], "any", false, false, false, 32)) ? ("Yes") : ("No"));
                echo "</label></td>
                        ";
            }
            // line 34
            echo "                        <td>
                          <div class=\"d-flex align-items-center\">
                          ";
            // line 36
            if ((twig_get_attribute($this->env, $this->source, $context["reclamation"], "verified", [], "any", false, false, false, 36) == false)) {
                // line 37
                echo "                            <button type=\"button\" class=\"btn btn-success btn-sm btn-icon-text mr-3\"><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                echo "\">
                              Edit</a>
                              <i class=\"typcn typcn-edit btn-icon-append\"></i>                          
                            </button>

                             <button type=\"button\" class=\"btn btn-success btn-sm btn-icon-text mr-3\"><a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rec_response_new", ["id" => twig_get_attribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 42)]), "html", null, true);
                echo "\">
                              Reponse To</a>
                              <i class=\"typcn typcn-edit btn-icon-append\"></i>                          
                            </button>
                            ";
            }
            // line 47
            echo "                            
                            ";
            // line 48
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
            // line 55
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div> 

    <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        echo "\">Create new</a>
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
        return array (  223 => 67,  213 => 59,  204 => 55,  184 => 48,  181 => 47,  173 => 42,  164 => 37,  162 => 36,  158 => 34,  152 => 32,  146 => 30,  144 => 29,  140 => 28,  136 => 27,  132 => 26,  128 => 25,  125 => 24,  107 => 23,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Reclamation index{% endblock %}

{% block body %}

    <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"card\">
                <div class=\"table-responsive pt-3\">
                  <table class=\"table table-striped project-orders-table\">
                    <thead>
                      <tr>
                        <th class=\"ml-5\">ID</th>
                        <th>Sujet</th>
                        <th>Description</th>
                        <th>Dt</th>
                        <th>Verified</th>
                        <th>actions</th>
                      </tr>
                    </thead>
                    <tbody>
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
                            <button type=\"button\" class=\"btn btn-success btn-sm btn-icon-text mr-3\"><a href=\"{{ path('app_reclamation_edit', {'id': reclamation.id}) }}\">
                              Edit</a>
                              <i class=\"typcn typcn-edit btn-icon-append\"></i>                          
                            </button>

                             <button type=\"button\" class=\"btn btn-success btn-sm btn-icon-text mr-3\"><a href=\"{{ path('app_rec_response_new', {'id': reclamation.id}) }}\">
                              Reponse To</a>
                              <i class=\"typcn typcn-edit btn-icon-append\"></i>                          
                            </button>
                            {% endif %}
                            
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

    <a href=\"{{ path('app_reclamation_new') }}\">Create new</a>
{% endblock %}
", "reclamation/index.html.twig", "C:\\Users\\Y055r1\\Desktop\\safe-spot-main\\templates\\reclamation\\index.html.twig");
    }
}
