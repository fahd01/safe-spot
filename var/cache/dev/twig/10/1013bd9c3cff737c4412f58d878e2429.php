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

/* loans/admin/stats.html.twig */
class __TwigTemplate_6feeef31ce56571af7364c3cd93d1650 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loans/admin/stats.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loans/admin/stats.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "loans/admin/stats.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

    // line 6
    public function block_navigation($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation"));

        // line 7
        echo twig_include($this->env, $context, "loans/admin/_navMenu.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
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
        <h4 class=\"card-title\">Loans Distribution</h4>
        <canvas id=\"radarChart\"></canvas>
      </div>
    </div>
  </div>

  <div class=\"col-lg-6 grid-margin stretch-card\">
    <div class=\"card\">
      <div class=\"card-body\">
        <h4 class=\"card-title\">Loan Statuses</h4>
        <canvas id=\"doughnutChart1\"></canvas>
      </div>
    </div>
  </div>

  <div class=\"col-lg-6 grid-margin stretch-card\">
    <div class=\"card\">
      <div class=\"card-body\">
        <h4 class=\"card-title\">Bid Statuses</h4>
        <canvas id=\"polarAreaChart\"></canvas>
      </div>
    </div>
  </div>


  <div class=\"col-lg-6 grid-margin stretch-card\">
    <div class=\"card\">
      <div class=\"card-body\">
        <h4 class=\"card-title\">Line chart</h4>
        <canvas id=\"lineChart\"></canvas>
      </div>
    </div>
  </div>
  <div class=\"col-lg-6 grid-margin stretch-card\">
    <div class=\"card\">
      <div class=\"card-body\">
        <h4 class=\"card-title\">Bar chart</h4>
        <canvas id=\"barChart\"></canvas>
      </div>
    </div>
  </div>
</div>
  <div class=\"col-lg-6 grid-margin stretch-card\">
    <div class=\"card\">
      <div class=\"card-body\">
        <h4 class=\"card-title\">Area chart</h4>
        <canvas id=\"areaChart\"></canvas>
      </div>
    </div>
  </div>
  <div class=\"col-lg-6 grid-margin grid-margin-lg-0 stretch-card\">
    <div class=\"card\">
      <div class=\"card-body\">
        <h4 class=\"card-title\">Pie chart</h4>
        <canvas id=\"pieChart\"></canvas>
      </div>
    </div>
  </div>
  <div class=\"col-lg-6 grid-margin grid-margin-lg-0 stretch-card\">
    <div class=\"card\">
      <div class=\"card-body\">
        <h4 class=\"card-title\">Scatter chart</h4>
        <canvas id=\"scatterChart\"></canvas>
      </div>
    </div>
  </div>


<script src=\"/dashboard-template/vendors/js/vendor.bundle.base.js\"></script>
<script src=\"/dashboard-template/vendors/chart.js/Chart.min.js\"></script>
<script src=\"/dashboard-template/js/chart.js\"></script>

<script>

\$(function() {
  'use strict';

const labels = [ 'automation_1', 'automation_2', 'automation_3' ];
const data = {
  labels: labels,
  datasets: [
    {
      label: 'Approved Bids',
      data: [60, 80, 70],
      backgroundColor: 'rgba(54, 162, 235, 0.2)',
    },
    {
      label: 'Placed Bids',
      data: [30, 20, 10],
      backgroundColor: 'rgba(153, 102, 255, 0.2)',
    }
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
  labels: ['amount', 'interest', 'term'],
  datasets: [
    {
      label: 'Loans',
      data: [300000, 18, 120],
      borderColor: 'red',
      backgroundColor: 'red',
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

/* ------------ Doughnut Chart ---------- */

const doughnutChartData = {
  labels: ['In Bidding', 'Active', 'Paid'],
  datasets: [
    {
      label: 'Loans Statuses',
      data: [100, 200, 200],
      backgroundColor: ['rgba(54, 162, 235, 0.2)', 'rgba(255, 159, 64, 0.2)', 'rgba(75, 192, 192, 0.2)'],
    }
  ]
};
const doughnutChartConfig = {
  type: 'doughnut',
  data: doughnutChartData,
  options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'top',
      },
      title: {
        display: true,
        text: 'Chart.js Doughnut Chart'
      }
    }
  },
};
  if (\$(\"#doughnutChart1\").length) {
    var doughnutCharCanvas1 = \$(\"#doughnutChart1\").get(0).getContext(\"2d\");
    var doughnutChart1 = new Chart(doughnutCharCanvas1, doughnutChartConfig);
  }

/* ------------ polarAreaChart ---------- */

const polarAreaChartData = {
  labels:  ['Pending', 'Approved', 'Rejected', 'Active', 'Completed'],
  datasets: [
    {
      label: 'Bids Statuses',
      data: [1000, 400, 700, 400, 1000],
      backgroundColor: [
        'rgba(54, 162, 235, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(201, 203, 207, 0.2)'
      ]
    }
  ]
};

const polarAreaChartConfig = {
  type: 'polarArea',
  data: polarAreaChartData,
  options: {
    responsive: true,
    scales: {
      r: {
        pointLabels: {
          display: true,
          centerPointLabels: true,
          font: {
            size: 18
          }
        }
      }
    },
    plugins: {
      legend: {
        position: 'top',
      },
      title: {
        display: true,
        text: 'Chart.js Polar Area Chart With Centered Point Labels'
      }
    }
  },
};

  if (\$(\"#polarAreaChart\").length) {
    var polarAreaChartCanvas = \$(\"#polarAreaChart\").get(0).getContext(\"2d\");
    var polarAreaChart = new Chart(polarAreaChartCanvas, polarAreaChartConfig);
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
        return "loans/admin/stats.html.twig";
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
        return array (  111 => 11,  101 => 10,  89 => 7,  79 => 6,  60 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}List of all loans{% endblock %}

{% block navigation %}
{{ include('loans/admin/_navMenu.html.twig')}}
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
        <h4 class=\"card-title\">Loans Distribution</h4>
        <canvas id=\"radarChart\"></canvas>
      </div>
    </div>
  </div>

  <div class=\"col-lg-6 grid-margin stretch-card\">
    <div class=\"card\">
      <div class=\"card-body\">
        <h4 class=\"card-title\">Loan Statuses</h4>
        <canvas id=\"doughnutChart1\"></canvas>
      </div>
    </div>
  </div>

  <div class=\"col-lg-6 grid-margin stretch-card\">
    <div class=\"card\">
      <div class=\"card-body\">
        <h4 class=\"card-title\">Bid Statuses</h4>
        <canvas id=\"polarAreaChart\"></canvas>
      </div>
    </div>
  </div>


  <div class=\"col-lg-6 grid-margin stretch-card\">
    <div class=\"card\">
      <div class=\"card-body\">
        <h4 class=\"card-title\">Line chart</h4>
        <canvas id=\"lineChart\"></canvas>
      </div>
    </div>
  </div>
  <div class=\"col-lg-6 grid-margin stretch-card\">
    <div class=\"card\">
      <div class=\"card-body\">
        <h4 class=\"card-title\">Bar chart</h4>
        <canvas id=\"barChart\"></canvas>
      </div>
    </div>
  </div>
</div>
  <div class=\"col-lg-6 grid-margin stretch-card\">
    <div class=\"card\">
      <div class=\"card-body\">
        <h4 class=\"card-title\">Area chart</h4>
        <canvas id=\"areaChart\"></canvas>
      </div>
    </div>
  </div>
  <div class=\"col-lg-6 grid-margin grid-margin-lg-0 stretch-card\">
    <div class=\"card\">
      <div class=\"card-body\">
        <h4 class=\"card-title\">Pie chart</h4>
        <canvas id=\"pieChart\"></canvas>
      </div>
    </div>
  </div>
  <div class=\"col-lg-6 grid-margin grid-margin-lg-0 stretch-card\">
    <div class=\"card\">
      <div class=\"card-body\">
        <h4 class=\"card-title\">Scatter chart</h4>
        <canvas id=\"scatterChart\"></canvas>
      </div>
    </div>
  </div>


<script src=\"/dashboard-template/vendors/js/vendor.bundle.base.js\"></script>
<script src=\"/dashboard-template/vendors/chart.js/Chart.min.js\"></script>
<script src=\"/dashboard-template/js/chart.js\"></script>

<script>

\$(function() {
  'use strict';

const labels = [ 'automation_1', 'automation_2', 'automation_3' ];
const data = {
  labels: labels,
  datasets: [
    {
      label: 'Approved Bids',
      data: [60, 80, 70],
      backgroundColor: 'rgba(54, 162, 235, 0.2)',
    },
    {
      label: 'Placed Bids',
      data: [30, 20, 10],
      backgroundColor: 'rgba(153, 102, 255, 0.2)',
    }
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
  labels: ['amount', 'interest', 'term'],
  datasets: [
    {
      label: 'Loans',
      data: [300000, 18, 120],
      borderColor: 'red',
      backgroundColor: 'red',
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

/* ------------ Doughnut Chart ---------- */

const doughnutChartData = {
  labels: ['In Bidding', 'Active', 'Paid'],
  datasets: [
    {
      label: 'Loans Statuses',
      data: [100, 200, 200],
      backgroundColor: ['rgba(54, 162, 235, 0.2)', 'rgba(255, 159, 64, 0.2)', 'rgba(75, 192, 192, 0.2)'],
    }
  ]
};
const doughnutChartConfig = {
  type: 'doughnut',
  data: doughnutChartData,
  options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'top',
      },
      title: {
        display: true,
        text: 'Chart.js Doughnut Chart'
      }
    }
  },
};
  if (\$(\"#doughnutChart1\").length) {
    var doughnutCharCanvas1 = \$(\"#doughnutChart1\").get(0).getContext(\"2d\");
    var doughnutChart1 = new Chart(doughnutCharCanvas1, doughnutChartConfig);
  }

/* ------------ polarAreaChart ---------- */

const polarAreaChartData = {
  labels:  ['Pending', 'Approved', 'Rejected', 'Active', 'Completed'],
  datasets: [
    {
      label: 'Bids Statuses',
      data: [1000, 400, 700, 400, 1000],
      backgroundColor: [
        'rgba(54, 162, 235, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(201, 203, 207, 0.2)'
      ]
    }
  ]
};

const polarAreaChartConfig = {
  type: 'polarArea',
  data: polarAreaChartData,
  options: {
    responsive: true,
    scales: {
      r: {
        pointLabels: {
          display: true,
          centerPointLabels: true,
          font: {
            size: 18
          }
        }
      }
    },
    plugins: {
      legend: {
        position: 'top',
      },
      title: {
        display: true,
        text: 'Chart.js Polar Area Chart With Centered Point Labels'
      }
    }
  },
};

  if (\$(\"#polarAreaChart\").length) {
    var polarAreaChartCanvas = \$(\"#polarAreaChart\").get(0).getContext(\"2d\");
    var polarAreaChart = new Chart(polarAreaChartCanvas, polarAreaChartConfig);
  }

});

</script>

{% endblock %}
", "loans/admin/stats.html.twig", "/var/safe-spot/safe-spot/templates/loans/admin/stats.html.twig");
    }
}
