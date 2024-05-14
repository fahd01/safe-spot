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

/* login/index.html.twig */
class __TwigTemplate_f6cb42d41dfb2cf269f6bcf7419b28b1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

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
  <link rel=\"shortcut icon\" href=\"dashboard-template/images/favicon.png\" />
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
              <form class=\"pt-3\">
                <div class=\"form-group\">
                  <input type=\"email\" class=\"form-control form-control-lg\" id=\"exampleInputEmail1\" placeholder=\"Username\">
                </div>
                <div class=\"form-group\">
                  <input type=\"password\" class=\"form-control form-control-lg\" id=\"exampleInputPassword1\" placeholder=\"Password\">
                </div>
                <div class=\"mt-3\">
                  <a class=\"btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn\" href=\"../../index.html\">SIGN IN</a>
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
                <div class=\"mb-2\">
                  <button type=\"button\" class=\"btn btn-block btn-facebook auth-form-btn\">
                    <i class=\"typcn typcn-social-facebook mr-2\"></i>Connect using facebook
                  </button>
                </div>
                <div class=\"text-center mt-4 font-weight-light\">
                  Don't have an account? <a href=\"register.html\" class=\"text-primary\">Create</a>
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
        return "login/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
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
  <link rel=\"shortcut icon\" href=\"dashboard-template/images/favicon.png\" />
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
              <form class=\"pt-3\">
                <div class=\"form-group\">
                  <input type=\"email\" class=\"form-control form-control-lg\" id=\"exampleInputEmail1\" placeholder=\"Username\">
                </div>
                <div class=\"form-group\">
                  <input type=\"password\" class=\"form-control form-control-lg\" id=\"exampleInputPassword1\" placeholder=\"Password\">
                </div>
                <div class=\"mt-3\">
                  <a class=\"btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn\" href=\"../../index.html\">SIGN IN</a>
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
                <div class=\"mb-2\">
                  <button type=\"button\" class=\"btn btn-block btn-facebook auth-form-btn\">
                    <i class=\"typcn typcn-social-facebook mr-2\"></i>Connect using facebook
                  </button>
                </div>
                <div class=\"text-center mt-4 font-weight-light\">
                  Don't have an account? <a href=\"register.html\" class=\"text-primary\">Create</a>
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

", "login/index.html.twig", "/var/safe-spot/safe-spot/templates/login/index.html.twig");
    }
}
