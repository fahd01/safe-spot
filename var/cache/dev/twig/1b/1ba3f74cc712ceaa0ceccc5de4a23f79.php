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

/* bids/createAutomation.html.twig */
class __TwigTemplate_12241e375dd61667329d01fc0034867a extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bids/createAutomation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bids/createAutomation.html.twig"));

        // line 1
        $macros["formMacros"] = $this->macros["formMacros"] = $this;
        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", "bids/createAutomation.html.twig", 3);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Create Bid Automation";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 8
        echo twig_include($this->env, $context, "loans/_loanNavMenu.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
<div>
    <div class=\"card\">
        <div class=\"card-body\">
            <h4 class=\"card-title\">Create Bid Automation</h4>
            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start');
        echo "

                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19), 'row');
        echo "
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "bidAmount", [], "any", false, false, false, 20), 'row');
        echo "
                <fieldset class=\"form-group\">
                    <legend class=\"col-form-label required\">Rules</legend>
                    <div id=\"automation_rules\"
                         class=\"rules\"
                         data-index=\"";
        // line 25
        echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "rules", [], "any", false, false, false, 25)) > 0)) ? (1) : (0));
        echo "\"
                         data-prototype=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_call_macro($macros["formMacros"], "macro_printAutomationRuleRow", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "rules", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "prototype", [], "any", false, false, false, 26)], 26, $context, $this->getSourceContext()), "html_attr");
        echo "\"
                        >
                        <div>
                            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "rules", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
            // line 30
            echo "                                ";
            echo twig_call_macro($macros["formMacros"], "macro_printAutomationRuleRow", [$context["rule"]], 30, $context, $this->getSourceContext());
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                        </div>
                    </div>
                </fieldset>

                <div class=\"text-center\">
                    <button
                            type=\"button\"
                            class=\"add_rule_link btn btn-inverse-info btn-rounded btn-icon\"
                            data-collection-holder-class=\"rules\"
                            data-bs-toggle='tooltip'
                            data-bs-placement='bottom'
                            title='Add Automation Rule'
                    >
                        <i class=\"mdi mdi-plus btn-icon-prepend\"></i>
                    </button>
                </div>
            ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
</div>

";
        // line 66
        echo "


<script>
document
  .querySelectorAll('.add_rule_link')
  .forEach(btn => {
      btn.addEventListener(\"click\", addFormToCollection)
  });

document
    .querySelectorAll('div.rules div.row')
    .forEach((rule) => {
        addFormRemoveLink(rule)
    })

function addFormToCollection(e) {
  const collectionHolder = document.querySelector('.' + e.currentTarget.dataset.collectionHolderClass);
  const item = document.createElement('div');
  item.innerHTML = collectionHolder
    .dataset
    .prototype
    .replace(
      /__name__/g,
      collectionHolder.dataset.index
    );

  collectionHolder.appendChild(item);
  collectionHolder.dataset.index++;

  addFormRemoveLink(item.firstElementChild);
};


function addFormRemoveLink(item) {
    const removeFormButton = document.createElement('button');
    removeFormButton.setAttribute('type', 'button');
    removeFormButton.setAttribute('data-bs-toggle', 'tooltip');
    removeFormButton.setAttribute('data-bs-placement', 'bottom');
    removeFormButton.setAttribute('title', 'Remove Rule');
    removeFormButton.classList.add('btn', 'btn-danger', 'btn-icon');
    const icon = document.createElement('i');
    icon.classList.add('mdi', 'mdi-delete-forever', 'btn-icon-prepend');
    removeFormButton.appendChild(icon);

    item.append(removeFormButton);

    removeFormButton.addEventListener('click', (e) => {
        e.preventDefault();
        item.remove();
    });
}

</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 53
    public function macro_printAutomationRuleRow($__ruleForm__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "ruleForm" => $__ruleForm__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "printAutomationRuleRow"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "printAutomationRuleRow"));

            // line 54
            echo "<div class=\"row align-items-center\">
    <div class=\"col\">
        ";
            // line 56
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ruleForm"]) || array_key_exists("ruleForm", $context) ? $context["ruleForm"] : (function () { throw new RuntimeError('Variable "ruleForm" does not exist.', 56, $this->source); })()), "attribute", [], "any", false, false, false, 56), 'row');
            echo "
    </div>
    <div class=\"col\">
        ";
            // line 59
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ruleForm"]) || array_key_exists("ruleForm", $context) ? $context["ruleForm"] : (function () { throw new RuntimeError('Variable "ruleForm" does not exist.', 59, $this->source); })()), "operator", [], "any", false, false, false, 59), 'row');
            echo "
    </div>
    <div class=\"col\">
        ";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ruleForm"]) || array_key_exists("ruleForm", $context) ? $context["ruleForm"] : (function () { throw new RuntimeError('Variable "ruleForm" does not exist.', 62, $this->source); })()), "value", [], "any", false, false, false, 62), 'row');
            echo "
    </div>
</div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "bids/createAutomation.html.twig";
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
        return array (  286 => 62,  280 => 59,  274 => 56,  270 => 54,  251 => 53,  187 => 66,  179 => 48,  161 => 32,  152 => 30,  148 => 29,  142 => 26,  138 => 25,  130 => 20,  126 => 19,  121 => 17,  114 => 12,  104 => 11,  92 => 8,  82 => 7,  63 => 5,  52 => 3,  50 => 1,  37 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{% import _self as formMacros %}

{% extends 'base.html.twig' %}

{% block title %}Create Bid Automation{% endblock %}

{% block navigation %}
{{ include('loans/_loanNavMenu.html.twig')}}
{% endblock %}

{% block body %}

<div>
    <div class=\"card\">
        <div class=\"card-body\">
            <h4 class=\"card-title\">Create Bid Automation</h4>
            {{ form_start(form) }}

                {{ form_row(form.name) }}
                {{ form_row(form.bidAmount) }}
                <fieldset class=\"form-group\">
                    <legend class=\"col-form-label required\">Rules</legend>
                    <div id=\"automation_rules\"
                         class=\"rules\"
                         data-index=\"{{ form.rules|length > 0 ? 1 : 0 }}\"
                         data-prototype=\"{{ formMacros.printAutomationRuleRow(form.rules.vars.prototype) |e('html_attr') }}\"
                        >
                        <div>
                            {% for rule in form.rules %}
                                {{ formMacros.printAutomationRuleRow(rule) }}
                            {% endfor %}
                        </div>
                    </div>
                </fieldset>

                <div class=\"text-center\">
                    <button
                            type=\"button\"
                            class=\"add_rule_link btn btn-inverse-info btn-rounded btn-icon\"
                            data-collection-holder-class=\"rules\"
                            data-bs-toggle='tooltip'
                            data-bs-placement='bottom'
                            title='Add Automation Rule'
                    >
                        <i class=\"mdi mdi-plus btn-icon-prepend\"></i>
                    </button>
                </div>
            {{ form_end(form) }}
        </div>
    </div>
</div>

{% macro printAutomationRuleRow(ruleForm) %}
<div class=\"row align-items-center\">
    <div class=\"col\">
        {{ form_row(ruleForm.attribute) }}
    </div>
    <div class=\"col\">
        {{ form_row(ruleForm.operator) }}
    </div>
    <div class=\"col\">
        {{ form_row(ruleForm.value) }}
    </div>
</div>
{% endmacro %}



<script>
document
  .querySelectorAll('.add_rule_link')
  .forEach(btn => {
      btn.addEventListener(\"click\", addFormToCollection)
  });

document
    .querySelectorAll('div.rules div.row')
    .forEach((rule) => {
        addFormRemoveLink(rule)
    })

function addFormToCollection(e) {
  const collectionHolder = document.querySelector('.' + e.currentTarget.dataset.collectionHolderClass);
  const item = document.createElement('div');
  item.innerHTML = collectionHolder
    .dataset
    .prototype
    .replace(
      /__name__/g,
      collectionHolder.dataset.index
    );

  collectionHolder.appendChild(item);
  collectionHolder.dataset.index++;

  addFormRemoveLink(item.firstElementChild);
};


function addFormRemoveLink(item) {
    const removeFormButton = document.createElement('button');
    removeFormButton.setAttribute('type', 'button');
    removeFormButton.setAttribute('data-bs-toggle', 'tooltip');
    removeFormButton.setAttribute('data-bs-placement', 'bottom');
    removeFormButton.setAttribute('title', 'Remove Rule');
    removeFormButton.classList.add('btn', 'btn-danger', 'btn-icon');
    const icon = document.createElement('i');
    icon.classList.add('mdi', 'mdi-delete-forever', 'btn-icon-prepend');
    removeFormButton.appendChild(icon);

    item.append(removeFormButton);

    removeFormButton.addEventListener('click', (e) => {
        e.preventDefault();
        item.remove();
    });
}

</script>
{% endblock %}
", "bids/createAutomation.html.twig", "/var/safe-spot/safe-spot/templates/bids/createAutomation.html.twig");
    }
}
