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

/* rec_response/index.html.twig */
class __TwigTemplate_34b8275d8bc237dc6e3daa256d31d85c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rec_response/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rec_response/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "rec_response/index.html.twig", 1);
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

        echo "RecResponse index";
        
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

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"card\">
                <div class=\"table-responsive pt-3\">
                  <table class=\"table table-striped project-orders-table\">
                    <thead>
            <tr>
                <th>Id</th>
                <th>Reclamation Sujet</th>
                <th>Reponse</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rec_responses"]) || array_key_exists("rec_responses", $context) ? $context["rec_responses"] : (function () { throw new RuntimeError('Variable "rec_responses" does not exist.', 23, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["rec_response"]) {
            // line 24
            echo "            <tr>
                
                <td>#D";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rec_response"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rec_response"], "reclamation", [], "any", false, false, false, 27), "sujet", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rec_response"], "reponse", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>
                    
                     <div class=\"d-flex align-items-center\">
                            <button type=\"button\" class=\"btn btn-success btn-sm btn-icon-text mr-3\"><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rec_response_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["rec_response"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">
                              Edit</a>
                              <i class=\"typcn typcn-edit btn-icon-append\"></i>                          
                            </button>
                            ";
            // line 36
            echo twig_include($this->env, $context, "rec_response/_delete_form.html.twig");
            echo "
                            ";
            // line 38
            echo "              <td>
            <div class=\"d-flex align-items-center\">
    ";
            // line 40
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 40, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["rec_response"], "id", [], "any", false, false, false, 40), [], "array", false, false, false, 40), 'form_start');
            echo "
    <div class=\"rate\">
        ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 42, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["rec_response"], "id", [], "any", false, false, false, 42), [], "array", false, false, false, 42), "nbstar", [], "any", false, false, false, 42));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 43
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => ["class" => "star-input"]]);
                echo "
            ";
                // line 44
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["label_attr" => ["class" => "star"], "label" => "★"]);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "    </div>
    <button type=\"submit\" class=\"btn btn-primary\">Rate</button>
    ";
            // line 48
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 48, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["rec_response"], "id", [], "any", false, false, false, 48), [], "array", false, false, false, 48), 'form_end');
            echo "
</div>
        </td>

                          
                  
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
            // line 57
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rec_response'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

 <div class=\"d-flex justify-content-center mt-4\">
        ";
        // line 70
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["rec_responses"]) || array_key_exists("rec_responses", $context) ? $context["rec_responses"] : (function () { throw new RuntimeError('Variable "rec_responses" does not exist.', 70, $this->source); })()));
        echo "
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
        return "rec_response/index.html.twig";
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
        return array (  247 => 70,  236 => 61,  227 => 57,  205 => 48,  201 => 46,  193 => 44,  188 => 43,  184 => 42,  179 => 40,  175 => 38,  171 => 36,  164 => 32,  157 => 28,  153 => 27,  149 => 26,  145 => 24,  127 => 23,  111 => 9,  101 => 8,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}RecResponse index{% endblock %}
{% block navigation %}
{{ include('loans/_loanNavMenu.html.twig')}}
{% endblock %}

{% block body %}
    <div class=\"row\">
            <div class=\"col-md-12\">
              <div class=\"card\">
                <div class=\"table-responsive pt-3\">
                  <table class=\"table table-striped project-orders-table\">
                    <thead>
            <tr>
                <th>Id</th>
                <th>Reclamation Sujet</th>
                <th>Reponse</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for rec_response in rec_responses %}
            <tr>
                
                <td>#D{{ rec_response.id }}</td>
                <td>{{ rec_response.reclamation.sujet }}</td>
                <td>{{ rec_response.reponse }}</td>
                <td>
                    
                     <div class=\"d-flex align-items-center\">
                            <button type=\"button\" class=\"btn btn-success btn-sm btn-icon-text mr-3\"><a href=\"{{ path('app_rec_response_edit', {'id': rec_response.id}) }}\">
                              Edit</a>
                              <i class=\"typcn typcn-edit btn-icon-append\"></i>                          
                            </button>
                            {{ include('rec_response/_delete_form.html.twig') }}
                            {# Star rating form for each RecResponse #}
              <td>
            <div class=\"d-flex align-items-center\">
    {{ form_start(forms[rec_response.id]) }}
    <div class=\"rate\">
        {% for child in forms[rec_response.id].nbstar %}
            {{ form_widget(child, {'attr': {'class': 'star-input'}}) }}
            {{ form_label(child, null, {'label_attr': {'class': 'star'}, 'label': '★'}) }}
        {% endfor %}
    </div>
    <button type=\"submit\" class=\"btn btn-primary\">Rate</button>
    {{ form_end(forms[rec_response.id]) }}
</div>
        </td>

                          
                  
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
        {{ knp_pagination_render(rec_responses) }}
    </div>
{% endblock %}
", "rec_response/index.html.twig", "/var/safe-spot/templates/rec_response/index.html.twig");
    }
}
