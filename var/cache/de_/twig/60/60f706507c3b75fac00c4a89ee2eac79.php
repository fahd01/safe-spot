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

/* login/login.html.twig */
class __TwigTemplate_c96298ca293334dca6278de401b2f999 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <!-- Required meta tags -->
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <title>Login to Safe Spot</title>
  <!-- base:css -->
  <link rel=\"stylesheet\" href=\"dashboard-template/vendors/typicons/typicons.css\">
  <link rel=\"stylesheet\" href=\"dashboard-template/vendors/css/vendor.bundle.base.css\">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel=\"stylesheet\" href=\"dashboard-template/css/vertical-layout-light/style.css\">
  <!-- endinject -->
  <link rel=\"shortcut icon\" href=\"/dashboard-template/images/favicon.png\" />
</head>

<body>
  <div class=\"container-scroller\">
    <div class=\"container-fluid page-body-wrapper full-page-wrapper\">
      <div class=\"content-wrapper d-flex align-items-center auth px-0\">
        <div class=\"row w-100 mx-0\">
          <div class=\"col-lg-4 mx-auto\">
            <div class=\"auth-form-light text-left py-5 px-4 px-sm-5\">
              <div class=\"brand-logo\">
                <h1 class=\"mb-0 site-logo\"><a href=\"index.html\" class=\"h2 mb-0\">Safe Spot<span class=\"text-primary\">.</span> </a></h1>
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class=\"font-weight-light\">Sign in to continue.</h6>
              <form class=\"pt-3\" action=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" method=\"post\">
                ";
        // line 34
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 34, $this->source); })())) {
            // line 35
            echo "                <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                  <strong>Error!</strong> ";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 36, $this->source); })()), "messageKey", [], "any", false, false, false, 36), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 36, $this->source); })()), "messageData", [], "any", false, false, false, 36), "security"), "html", null, true);
            echo "
                  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                  </button>
                </div>
                ";
        }
        // line 42
        echo "                <div class=\"form-group has-validation\">
                  <input
                          type=\"email\"
                          required
                          class=\"form-control form-control-lg\"
                          placeholder=\"Username\"
                          id=\"username\"
                          name=\"_username\"
                          value=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "\"
                  >
                </div>
                <div class=\"form-group\">
                  <input
                          type=\"password\"
                          required
                          class=\"form-control form-control-lg\"
                          placeholder=\"Password\"
                          id=\"password\"
                          name=\"_password\"
                  >
                </div>
                <div class=\"mt-3\">
                  ";
        // line 65
        echo "                  <input type=\"hidden\" name=\"_target_path\" value=\"/loans/list\">
                  <button type=\"submit\" class=\"btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn\">SIGN IN</button>
                </div>
                <div class=\"my-2 d-flex justify-content-between align-items-center\">
                  <div class=\"form-check\">
                    <label class=\"form-check-label text-muted\">
                      <input type=\"checkbox\" class=\"form-check-input\">
                      Keep me signed in
                    </label>
                  </div>
                  <a href=\"#\" class=\"auth-link text-black\">Forgot password?</a>
                </div>
                <!--
                <div class=\"mb-2\">
                  <button type=\"button\" class=\"btn btn-block btn-facebook auth-form-btn\">
                    <i class=\"typcn typcn-social-facebook mr-2\"></i>Connect using facebook
                  </button>
                </div>
                -->
                <div class=\"text-center mt-4 font-weight-light\">
                  Don't have an account? <a href=\"register\" class=\"text-primary\">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src=\"dashboard-template/vendors/js/vendor.bundle.base.js\"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src=\"dashboard-template/js/off-canvas.js\"></script>
  <script src=\"dashboard-template/js/hoverable-collapse.js\"></script>
  <script src=\"dashboard-template/js/template.js\"></script>
  <script src=\"dashboard-template/js/settings.js\"></script>
  <script src=\"dashboard-template/js/todolist.js\"></script>
  <!-- endinject -->
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
        return "login/login.html.twig";
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
        return array (  122 => 65,  105 => 50,  95 => 42,  86 => 36,  83 => 35,  81 => 34,  77 => 33,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <!-- Required meta tags -->
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <title>Login to Safe Spot</title>
  <!-- base:css -->
  <link rel=\"stylesheet\" href=\"dashboard-template/vendors/typicons/typicons.css\">
  <link rel=\"stylesheet\" href=\"dashboard-template/vendors/css/vendor.bundle.base.css\">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel=\"stylesheet\" href=\"dashboard-template/css/vertical-layout-light/style.css\">
  <!-- endinject -->
  <link rel=\"shortcut icon\" href=\"/dashboard-template/images/favicon.png\" />
</head>

<body>
  <div class=\"container-scroller\">
    <div class=\"container-fluid page-body-wrapper full-page-wrapper\">
      <div class=\"content-wrapper d-flex align-items-center auth px-0\">
        <div class=\"row w-100 mx-0\">
          <div class=\"col-lg-4 mx-auto\">
            <div class=\"auth-form-light text-left py-5 px-4 px-sm-5\">
              <div class=\"brand-logo\">
                <h1 class=\"mb-0 site-logo\"><a href=\"index.html\" class=\"h2 mb-0\">Safe Spot<span class=\"text-primary\">.</span> </a></h1>
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class=\"font-weight-light\">Sign in to continue.</h6>
              <form class=\"pt-3\" action=\"{{ path('app_login') }}\" method=\"post\">
                {% if error %}
                <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                  <strong>Error!</strong> {{ error.messageKey|trans(error.messageData, 'security') }}
                  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                  </button>
                </div>
                {% endif %}
                <div class=\"form-group has-validation\">
                  <input
                          type=\"email\"
                          required
                          class=\"form-control form-control-lg\"
                          placeholder=\"Username\"
                          id=\"username\"
                          name=\"_username\"
                          value=\"{{ last_username }}\"
                  >
                </div>
                <div class=\"form-group\">
                  <input
                          type=\"password\"
                          required
                          class=\"form-control form-control-lg\"
                          placeholder=\"Password\"
                          id=\"password\"
                          name=\"_password\"
                  >
                </div>
                <div class=\"mt-3\">
                  {# If you want to control the URL the user is redirected to on success #}
                  <input type=\"hidden\" name=\"_target_path\" value=\"/loans/list\">
                  <button type=\"submit\" class=\"btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn\">SIGN IN</button>
                </div>
                <div class=\"my-2 d-flex justify-content-between align-items-center\">
                  <div class=\"form-check\">
                    <label class=\"form-check-label text-muted\">
                      <input type=\"checkbox\" class=\"form-check-input\">
                      Keep me signed in
                    </label>
                  </div>
                  <a href=\"#\" class=\"auth-link text-black\">Forgot password?</a>
                </div>
                <!--
                <div class=\"mb-2\">
                  <button type=\"button\" class=\"btn btn-block btn-facebook auth-form-btn\">
                    <i class=\"typcn typcn-social-facebook mr-2\"></i>Connect using facebook
                  </button>
                </div>
                -->
                <div class=\"text-center mt-4 font-weight-light\">
                  Don't have an account? <a href=\"register\" class=\"text-primary\">Create</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src=\"dashboard-template/vendors/js/vendor.bundle.base.js\"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src=\"dashboard-template/js/off-canvas.js\"></script>
  <script src=\"dashboard-template/js/hoverable-collapse.js\"></script>
  <script src=\"dashboard-template/js/template.js\"></script>
  <script src=\"dashboard-template/js/settings.js\"></script>
  <script src=\"dashboard-template/js/todolist.js\"></script>
  <!-- endinject -->
</body>

</html>

", "login/login.html.twig", "/var/safe-spot/templates/login/login.html.twig");
    }
}
