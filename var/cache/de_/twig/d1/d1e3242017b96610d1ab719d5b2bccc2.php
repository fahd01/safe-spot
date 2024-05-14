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

/* loans/_loanNavMenu.html.twig */
class __TwigTemplate_d2d3b2466f4499bf5b6999f7225bf142 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loans/_loanNavMenu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "loans/_loanNavMenu.html.twig"));

        // line 1
        echo "<nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
    <ul class=\"nav\">
        <li class=\"nav-item ";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "requesturi", [], "any", false, false, false, 3) == "/loans/create")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"/loans/create\">
                <i class=\"typcn typcn-plus menu-icon\"></i>
                <span class=\"menu-title\">Request Loan</span>
                <div class=\"badge badge-danger\">new</div>
            </a>
        </li>
        <li class=\"nav-item ";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "requesturi", [], "any", false, false, false, 10) == "/loans/list")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"/loans/list\" >
                <i class=\"typcn typcn-zoom menu-icon\"></i>
                <span class=\"menu-title\">Find a Loan</span>
            </a>
        </li>
        <li class=\"nav-item ";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "requesturi", [], "any", false, false, false, 16) == "/loans/mine")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"/loans/mine\" >
                <i class=\"typcn typcn-th-list menu-icon\"></i>
                <span class=\"menu-title\">My Loans</span>
            </a>
        </li>
        <li class=\"nav-item ";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "request", [], "any", false, false, false, 22), "requesturi", [], "any", false, false, false, 22) == "/bids/mine")) {
            echo "active";
        }
        echo "\">
            <a class=\"nav-link\" href=\"/bids/mine\" >
                <i class=\"mdi mdi-currency-usd menu-icon\"></i>
                <span class=\"menu-title\">My Bids</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
              <i class=\"typcn typcn-document-text menu-icon\"></i>
              <span class=\"menu-title\">Reclamations</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"ui-basic\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_index");
        echo "\">Reclamations</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rec_response_index");
        echo "\">Response</a></li>
              </ul>
            </div>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actualite_index");
        echo "\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
              <i class=\"typcn typcn-globe-outline menu-icon\"></i>
              <span class=\"menu-title\">Actualite</span>
              
            </a>
            
            
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
              <i class=\"typcn typcn-document-text menu-icon\"></i>
              <span class=\"menu-title\">Dons</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"ui-basic\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_dons");
        echo "\">Dons</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_Dons");
        echo "\">Add Dons</a></li>
              </ul>
            </div>
          </li>
         
          </li>

          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
              <i class=\"typcn typcn-document-text menu-icon\"></i>
              <span class=\"menu-title\">Investissement</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"ui-basic\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher_inv");
        echo "\">Investissement</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_investissement");
        echo "\">Add Investissement</a></li>
                 <li class=\"nav-item\"> <a class=\"nav-link\" href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("statsabonn");
        echo "\">Static Investissement</a></li>
              </ul>
            </div>
          </li>

           <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
        echo "\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
              <i class=\"typcn typcn-globe-outline menu-icon\"></i>
              <span class=\"menu-title\">Account Edit</span>
              
            </a>
            
            
          </li>
          
        <li class=\"nav-item
        ";
        // line 92
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 92, $this->source); })()), "request", [], "any", false, false, false, 92), "requesturi", [], "any", false, false, false, 92) == "/bids/automations/create") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 93
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "request", [], "any", false, false, false, 93), "requesturi", [], "any", false, false, false, 93) == "/bids/automations/mine")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 94
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "request", [], "any", false, false, false, 94), "requesturi", [], "any", false, false, false, 94) == "/bids/automations/stats"))) {
            // line 96
            echo "        active
        ";
        }
        // line 97
        echo "\">
            <a class=\"nav-link\"
               data-toggle=\"collapse\"
               href=\"#bids-automation\"
               aria-expanded=\"false\"
               aria-controls=\"auth\">
                <i class=\"mdi mdi-flash-auto menu-icon\"></i>
                <span class=\"menu-title\">Bids Automation</span>
                <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse
            ";
        // line 108
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 108, $this->source); })()), "request", [], "any", false, false, false, 108), "requesturi", [], "any", false, false, false, 108) == "/bids/automations/create") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 109
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 109, $this->source); })()), "request", [], "any", false, false, false, 109), "requesturi", [], "any", false, false, false, 109) == "/bids/automations/mine")) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 110
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "request", [], "any", false, false, false, 110), "requesturi", [], "any", false, false, false, 110) == "/bids/automations/stats"))) {
            // line 112
            echo "            show
            ";
        }
        // line 113
        echo "\"
                 id=\"bids-automation\">
                <ul class=\"nav flex-column sub-menu\">
                    <li class=\"nav-item\"> <a class=\"nav-link\" href=\"/bids/automations/create\"> Create Automation </a></li>
                    <li class=\"nav-item\"> <a class=\"nav-link\" href=\"/bids/automations/mine\"> My Automations </a></li>
                    <li class=\"nav-item\"> <a class=\"nav-link\" href=\"/bids/automations/stats\"> Overview </a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "loans/_loanNavMenu.html.twig";
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
        return array (  212 => 113,  208 => 112,  206 => 110,  205 => 109,  204 => 108,  191 => 97,  187 => 96,  185 => 94,  184 => 93,  183 => 92,  170 => 82,  161 => 76,  157 => 75,  153 => 74,  135 => 59,  131 => 58,  112 => 42,  104 => 37,  100 => 36,  81 => 22,  70 => 16,  59 => 10,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
    <ul class=\"nav\">
        <li class=\"nav-item {% if app.request.requesturi == '/loans/create' %}active{% endif %}\">
            <a class=\"nav-link\" href=\"/loans/create\">
                <i class=\"typcn typcn-plus menu-icon\"></i>
                <span class=\"menu-title\">Request Loan</span>
                <div class=\"badge badge-danger\">new</div>
            </a>
        </li>
        <li class=\"nav-item {% if app.request.requesturi == '/loans/list' %}active{% endif %}\">
            <a class=\"nav-link\" href=\"/loans/list\" >
                <i class=\"typcn typcn-zoom menu-icon\"></i>
                <span class=\"menu-title\">Find a Loan</span>
            </a>
        </li>
        <li class=\"nav-item {% if app.request.requesturi == '/loans/mine' %}active{% endif %}\">
            <a class=\"nav-link\" href=\"/loans/mine\" >
                <i class=\"typcn typcn-th-list menu-icon\"></i>
                <span class=\"menu-title\">My Loans</span>
            </a>
        </li>
        <li class=\"nav-item {% if app.request.requesturi == '/bids/mine' %}active{% endif %}\">
            <a class=\"nav-link\" href=\"/bids/mine\" >
                <i class=\"mdi mdi-currency-usd menu-icon\"></i>
                <span class=\"menu-title\">My Bids</span>
            </a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
              <i class=\"typcn typcn-document-text menu-icon\"></i>
              <span class=\"menu-title\">Reclamations</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"ui-basic\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{path('app_reclamation_index')}}\">Reclamations</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{path('app_rec_response_index')}}\">Response</a></li>
              </ul>
            </div>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{path('app_actualite_index')}}\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
              <i class=\"typcn typcn-globe-outline menu-icon\"></i>
              <span class=\"menu-title\">Actualite</span>
              
            </a>
            
            
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
              <i class=\"typcn typcn-document-text menu-icon\"></i>
              <span class=\"menu-title\">Dons</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"ui-basic\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{path('afficher_dons')}}\">Dons</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{path('add_Dons')}}\">Add Dons</a></li>
              </ul>
            </div>
          </li>
         
          </li>

          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
              <i class=\"typcn typcn-document-text menu-icon\"></i>
              <span class=\"menu-title\">Investissement</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"ui-basic\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{path('afficher_inv')}}\">Investissement</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{path('add_investissement')}}\">Add Investissement</a></li>
                 <li class=\"nav-item\"> <a class=\"nav-link\" href=\"{{path('statsabonn')}}\">Static Investissement</a></li>
              </ul>
            </div>
          </li>

           <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{path('account')}}\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
              <i class=\"typcn typcn-globe-outline menu-icon\"></i>
              <span class=\"menu-title\">Account Edit</span>
              
            </a>
            
            
          </li>
          
        <li class=\"nav-item
        {% if (app.request.requesturi == '/bids/automations/create') or
              (app.request.requesturi == '/bids/automations/mine') or
              (app.request.requesturi == '/bids/automations/stats')
        %}
        active
        {% endif %}\">
            <a class=\"nav-link\"
               data-toggle=\"collapse\"
               href=\"#bids-automation\"
               aria-expanded=\"false\"
               aria-controls=\"auth\">
                <i class=\"mdi mdi-flash-auto menu-icon\"></i>
                <span class=\"menu-title\">Bids Automation</span>
                <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse
            {% if (app.request.requesturi == '/bids/automations/create') or
                  (app.request.requesturi == '/bids/automations/mine') or
                  (app.request.requesturi == '/bids/automations/stats')
            %}
            show
            {% endif %}\"
                 id=\"bids-automation\">
                <ul class=\"nav flex-column sub-menu\">
                    <li class=\"nav-item\"> <a class=\"nav-link\" href=\"/bids/automations/create\"> Create Automation </a></li>
                    <li class=\"nav-item\"> <a class=\"nav-link\" href=\"/bids/automations/mine\"> My Automations </a></li>
                    <li class=\"nav-item\"> <a class=\"nav-link\" href=\"/bids/automations/stats\"> Overview </a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>", "loans/_loanNavMenu.html.twig", "/var/safe-spot/templates/loans/_loanNavMenu.html.twig");
    }
}
