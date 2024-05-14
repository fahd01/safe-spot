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

/* bids/automationStats.html.twig */
class __TwigTemplate_9ed991f62c0d3a8dcc766cc6e82cf0b7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bids/automationStats.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "bids/automationStats.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "bids/automationStats.html.twig", 1);
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

        echo "Automations Performance Overview";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 6
        echo twig_include($this->env, $context, "loans/_loanNavMenu.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"row\">

    <div class=\"col-lg-6 grid-margin stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h4 class=\"card-title\">Placed / Approved Bids per Automation</h4>
                <canvas id=\"stackedBarChart\"></canvas>
            </div>
        </div>
    </div>

    <div class=\"col-lg-6 grid-margin stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h4 class=\"card-title\">Automations Performance</h4>
                <canvas id=\"radarChart\"></canvas>
            </div>
        </div>
    </div>

    <div class=\"col-lg-6 grid-margin stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h4 class=\"card-title\">Conversion Rate</h4>
                <canvas id=\"barLineChart\"></canvas>
            </div>
        </div>
    </div>

</div>

<script src=\"/dashboard-template/vendors/js/vendor.bundle.base.js\"></script>
<script src=\"/dashboard-template/vendors/chart.js/Chart.min.js\"></script>
<script src=\"/dashboard-template/js/chart.js\"></script>

<script>

\$(function() {
  'use strict';

const labels = [";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["automations"]) || array_key_exists("automations", $context) ? $context["automations"] : (function () { throw new RuntimeError('Variable "automations" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["automation"]) {
            echo "'";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["automation"], "name", [], "any", false, false, false, 50), "html", null, true);
            echo "', ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['automation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "];
const data = {
  labels: labels,
  datasets: [
    {
      label: 'Placed Bids',
      data: [";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["automations"]) || array_key_exists("automations", $context) ? $context["automations"] : (function () { throw new RuntimeError('Variable "automations" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["automation"]) {
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtensions']->getPlacedBids($context["automation"]), "html", null, true);
            echo ", ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['automation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
      backgroundColor: 'rgba(54, 162, 235, 0.2)',
      borderColor: 'rgba(54, 162, 235, 1)',
      borderWidth: 1,
      fill: false
    },
    {
      label: 'Approved Bids',
      data: [";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["automations"]) || array_key_exists("automations", $context) ? $context["automations"] : (function () { throw new RuntimeError('Variable "automations" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["automation"]) {
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtensions']->getApprovedBids($context["automation"]), "html", null, true);
            echo ", ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['automation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
      backgroundColor: 'rgba(75, 192, 192, 0.2)',
      borderColor: 'rgba(75, 192, 192, 1)',
      borderWidth: 1,
      fill: false
    },
  ]
};


const config = {
  type: 'bar',
  data: data,
  options: {
    plugins: {
      title: {
        display: true,
        text: 'Chart.js Bar Chart - Stacked'
      },
    },
    responsive: true,
    scales: {
      x: {
        stacked: true,
      },
      y: {
        stacked: true
      }
    }
  }
};

  if (\$(\"#stackedBarChart\").length) {
    var stackedBarChartCanvas = \$(\"#stackedBarChart\").get(0).getContext(\"2d\");
    var stackedBarChart = new Chart(stackedBarChartCanvas, config);
  }

/* ------------ Radar chart ---------- */

const radarChartData = {
  labels: ['placed', 'approved', 'rejected'],
  datasets: [
    {
      label: 'automation 1',
      data: [90, 50, 20],
      borderColor: 'rgba(54, 162, 235, 0.2)',
      backgroundColor: 'rgba(54, 162, 235, 0.2)',
    },
        {
      label: 'automation 2',
      data: [81, 18, 60],
      borderColor: 'rgba(75, 192, 192, 0.2)',
      backgroundColor: 'rgba(75, 192, 192, 0.2)',
    },
        {
      label: 'automation 3',
      data: [10, 2, 0],
      borderColor: 'rgba(255, 99, 132, 0.2)',
      backgroundColor: 'rgba(255, 99, 132, 0.2)',
    },
  ]
};

const radarChartConfig = {
  type: 'radar',
  data: radarChartData,
  options: {
    responsive: true,
    plugins: {
      title: {
        display: true,
        text: 'Chart.js Radar Chart'
      }
    }
  },
};

  if (\$(\"#radarChart\").length) {
    var radarChartCanvas = \$(\"#radarChart\").get(0).getContext(\"2d\");
    var radarChart = new Chart(radarChartCanvas, radarChartConfig);
  }

/* ------------ barLineChart ---------- */

const barLineChartData = {
  labels: [";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["automations"]) || array_key_exists("automations", $context) ? $context["automations"] : (function () { throw new RuntimeError('Variable "automations" does not exist.', 149, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["automation"]) {
            echo "'";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["automation"], "name", [], "any", false, false, false, 149), "html", null, true);
            echo "', ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['automation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
  datasets: [
    {
      label: 'Placed Bids',
      data: [";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["automations"]) || array_key_exists("automations", $context) ? $context["automations"] : (function () { throw new RuntimeError('Variable "automations" does not exist.', 153, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["automation"]) {
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtensions']->getPlacedBids($context["automation"]), "html", null, true);
            echo ", ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['automation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
      borderColor: 'rgba(255, 99, 132, 0.2)',
      backgroundColor: 'rgba(255, 99, 132, 0.2)',
      stack: 'combined',
      type: 'bar'
    },
    {
      label: 'Conversion Rate',
      data: [";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["automations"]) || array_key_exists("automations", $context) ? $context["automations"] : (function () { throw new RuntimeError('Variable "automations" does not exist.', 161, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["automation"]) {
            ((($this->extensions['App\Twig\TwigExtensions']->getPlacedBids($context["automation"]) == 0)) ? (print (0)) : (print (twig_escape_filter($this->env, (($this->extensions['App\Twig\TwigExtensions']->getPlacedBids($context["automation"]) / $this->extensions['App\Twig\TwigExtensions']->getPlacedBids($context["automation"])) * 100), "html", null, true))));
            echo ", ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['automation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "],
      borderColor: 'rgba(54, 162, 235, 0.2)',
      backgroundColor: 'rgba(54, 162, 235, 0.2)',
      stack: 'combined'
    }
  ]
};

const barLineChartConfig = {
  type: 'line',
  data: barLineChartData,
  options: {
    plugins: {
      title: {
        display: true,
        text: 'Chart.js Stacked Line/Bar Chart'
      }
    },
    scales: {
      y: {
        stacked: true
      }
    }
  },
};

  if (\$(\"#barLineChart\").length) {
    var barLineChartCanvas = \$(\"#barLineChart\").get(0).getContext(\"2d\");
    var barLineChart = new Chart(barLineChartCanvas, barLineChartConfig);
  }

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
        return "bids/automationStats.html.twig";
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
        return array (  321 => 161,  302 => 153,  286 => 149,  190 => 64,  171 => 56,  153 => 50,  111 => 10,  101 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Automations Performance Overview{% endblock %}

{% block navigation %}
{{ include('loans/_loanNavMenu.html.twig')}}
{% endblock %}

{% block body %}
<div class=\"row\">

    <div class=\"col-lg-6 grid-margin stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h4 class=\"card-title\">Placed / Approved Bids per Automation</h4>
                <canvas id=\"stackedBarChart\"></canvas>
            </div>
        </div>
    </div>

    <div class=\"col-lg-6 grid-margin stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h4 class=\"card-title\">Automations Performance</h4>
                <canvas id=\"radarChart\"></canvas>
            </div>
        </div>
    </div>

    <div class=\"col-lg-6 grid-margin stretch-card\">
        <div class=\"card\">
            <div class=\"card-body\">
                <h4 class=\"card-title\">Conversion Rate</h4>
                <canvas id=\"barLineChart\"></canvas>
            </div>
        </div>
    </div>

</div>

<script src=\"/dashboard-template/vendors/js/vendor.bundle.base.js\"></script>
<script src=\"/dashboard-template/vendors/chart.js/Chart.min.js\"></script>
<script src=\"/dashboard-template/js/chart.js\"></script>

<script>

\$(function() {
  'use strict';

const labels = [{% for automation in automations %}'{{ automation.name }}', {% endfor %}];
const data = {
  labels: labels,
  datasets: [
    {
      label: 'Placed Bids',
      data: [{% for automation in automations %}{{ getPlacedBids(automation) }}, {% endfor %}],
      backgroundColor: 'rgba(54, 162, 235, 0.2)',
      borderColor: 'rgba(54, 162, 235, 1)',
      borderWidth: 1,
      fill: false
    },
    {
      label: 'Approved Bids',
      data: [{% for automation in automations %}{{ getApprovedBids(automation) }}, {% endfor %}],
      backgroundColor: 'rgba(75, 192, 192, 0.2)',
      borderColor: 'rgba(75, 192, 192, 1)',
      borderWidth: 1,
      fill: false
    },
  ]
};


const config = {
  type: 'bar',
  data: data,
  options: {
    plugins: {
      title: {
        display: true,
        text: 'Chart.js Bar Chart - Stacked'
      },
    },
    responsive: true,
    scales: {
      x: {
        stacked: true,
      },
      y: {
        stacked: true
      }
    }
  }
};

  if (\$(\"#stackedBarChart\").length) {
    var stackedBarChartCanvas = \$(\"#stackedBarChart\").get(0).getContext(\"2d\");
    var stackedBarChart = new Chart(stackedBarChartCanvas, config);
  }

/* ------------ Radar chart ---------- */

const radarChartData = {
  labels: ['placed', 'approved', 'rejected'],
  datasets: [
    {
      label: 'automation 1',
      data: [90, 50, 20],
      borderColor: 'rgba(54, 162, 235, 0.2)',
      backgroundColor: 'rgba(54, 162, 235, 0.2)',
    },
        {
      label: 'automation 2',
      data: [81, 18, 60],
      borderColor: 'rgba(75, 192, 192, 0.2)',
      backgroundColor: 'rgba(75, 192, 192, 0.2)',
    },
        {
      label: 'automation 3',
      data: [10, 2, 0],
      borderColor: 'rgba(255, 99, 132, 0.2)',
      backgroundColor: 'rgba(255, 99, 132, 0.2)',
    },
  ]
};

const radarChartConfig = {
  type: 'radar',
  data: radarChartData,
  options: {
    responsive: true,
    plugins: {
      title: {
        display: true,
        text: 'Chart.js Radar Chart'
      }
    }
  },
};

  if (\$(\"#radarChart\").length) {
    var radarChartCanvas = \$(\"#radarChart\").get(0).getContext(\"2d\");
    var radarChart = new Chart(radarChartCanvas, radarChartConfig);
  }

/* ------------ barLineChart ---------- */

const barLineChartData = {
  labels: [{% for automation in automations %}'{{ automation.name }}', {% endfor %}],
  datasets: [
    {
      label: 'Placed Bids',
      data: [{% for automation in automations %}{{ getPlacedBids(automation) }}, {% endfor %}],
      borderColor: 'rgba(255, 99, 132, 0.2)',
      backgroundColor: 'rgba(255, 99, 132, 0.2)',
      stack: 'combined',
      type: 'bar'
    },
    {
      label: 'Conversion Rate',
      data: [{% for automation in automations %}{{ getPlacedBids(automation) == 0 ? 0 : (getPlacedBids(automation) / getPlacedBids(automation)) * 100 }}, {% endfor %}],
      borderColor: 'rgba(54, 162, 235, 0.2)',
      backgroundColor: 'rgba(54, 162, 235, 0.2)',
      stack: 'combined'
    }
  ]
};

const barLineChartConfig = {
  type: 'line',
  data: barLineChartData,
  options: {
    plugins: {
      title: {
        display: true,
        text: 'Chart.js Stacked Line/Bar Chart'
      }
    },
    scales: {
      y: {
        stacked: true
      }
    }
  },
};

  if (\$(\"#barLineChart\").length) {
    var barLineChartCanvas = \$(\"#barLineChart\").get(0).getContext(\"2d\");
    var barLineChart = new Chart(barLineChartCanvas, barLineChartConfig);
  }

});

</script>

{% endblock %}
", "bids/automationStats.html.twig", "/var/safe-spot/templates/bids/automationStats.html.twig");
    }
}
