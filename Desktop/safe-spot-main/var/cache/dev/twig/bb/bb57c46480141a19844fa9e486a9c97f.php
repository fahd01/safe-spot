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

/* reclamation/_form.html.twig */
class __TwigTemplate_13330742d2d9fbe3861f2a6a4cff89cf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/_form.html.twig"));

        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["class" => "p-5 bg-white"]]);
        echo "

<h2 class=\"h4 text-black mb-5\">Contact Form</h2>

";
        // line 7
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "errors", [], "any", false, false, false, 7)) > 0)) {
            // line 8
            echo "<div class=\"alert alert-danger\">
    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "vars", [], "any", false, false, false, 9), "errors", [], "any", false, false, false, 9));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 10
                echo "        <p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 10), "html", null, true);
                echo "</p>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "</div>
";
        }
        // line 14
        echo "
";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "Sujet", [], "any", false, false, false, 15), 'row', ["label_attr" => ["class" => "text-black"], "attr" => ["class" => "form-control"]]);
        echo "
";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "Description", [], "any", false, false, false, 16), 'row', ["label_attr" => ["class" => "text-black"], "attr" => ["class" => "form-control", "placeholder" => "Write your notes or questions here..."]]);
        echo "

<div class=\"row form-group\">
    <div class=\"col-md-12\">
        <button type=\"submit\" class=\"btn btn-primary btn-md text-white\">Send Message</button>
    </div>
</div>

";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "reclamation/_form.html.twig";
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
        return array (  90 => 24,  79 => 16,  75 => 15,  72 => 14,  68 => 12,  59 => 10,  55 => 9,  52 => 8,  50 => 7,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/reclamation/new.html.twig #}
{{ form_start(form, {'attr': {'class': 'p-5 bg-white'}}) }}

<h2 class=\"h4 text-black mb-5\">Contact Form</h2>

{# Display form errors #}
{% if form.vars.errors|length > 0 %}
<div class=\"alert alert-danger\">
    {% for error in form.vars.errors %}
        <p>{{ error.message }}</p>
    {% endfor %}
</div>
{% endif %}

{{ form_row(form.Sujet, {'label_attr': {'class': 'text-black'}, 'attr': {'class': 'form-control'}}) }}
{{ form_row(form.Description, {'label_attr': {'class': 'text-black'}, 'attr': {'class': 'form-control', 'placeholder': 'Write your notes or questions here...'}}) }}

<div class=\"row form-group\">
    <div class=\"col-md-12\">
        <button type=\"submit\" class=\"btn btn-primary btn-md text-white\">Send Message</button>
    </div>
</div>

{{ form_end(form) }}
", "reclamation/_form.html.twig", "C:\\Users\\yassin\\Desktop\\safe-spot-main\\templates\\reclamation\\_form.html.twig");
    }
}
