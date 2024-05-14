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

/* @Twig/Exception/error404.html.twig */
class __TwigTemplate_4a7fdc7c79c5f8767e30ce30928ed2dc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/error404.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/Exception/error404.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <!-- Required meta tags -->
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <title>404 error</title>
  <!-- base:css -->
  <link rel=\"stylesheet\" href=\"/dashboard-template/vendors/typicons/typicons.css\">
  <link rel=\"stylesheet\" href=\"/dashboard-template/vendors/css/vendor.bundle.base.css\">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel=\"stylesheet\" href=\"/dashboard-template/css/vertical-layout-light/style.css\">
  <!-- endinject -->
  <link rel=\"shortcut icon\" href=\"/dashboard-template/images/favicon.png\" />
</head>

<body>
  <div class=\"container-scroller\">
    <div class=\"container-fluid page-body-wrapper full-page-wrapper\">
      <div class=\"content-wrapper d-flex align-items-center text-center error-page bg-primary\">
        <div class=\"row flex-grow\">
          <div class=\"col-lg-7 mx-auto text-white\">
            <div class=\"row align-items-center d-flex flex-row\">
              <div class=\"col-lg-6 text-lg-right pr-lg-4\">
                <h1 class=\"display-1 mb-0\">404</h1>
              </div>
              <div class=\"col-lg-6 error-page-divider text-lg-left pl-lg-4\">
                <h2>SORRY!</h2>
                <h3 class=\"font-weight-light\">The page you’re looking for was not found.</h3>
              </div>
            </div>
            <div class=\"row mt-5\">
              <div class=\"col-12 text-center mt-xl-2\">
                <a class=\"text-white font-weight-medium\" href=\"/\">Back to home</a>
              </div>
            </div>
            <div class=\"row mt-5\">
              <div class=\"col-12 mt-xl-2\">
                <p class=\"text-white font-weight-medium text-center\">Copyright &copy; 2018  All rights reserved.</p>
              </div>
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
  <script src=\"/dashboard-template/vendors/js/vendor.bundle.base.js\"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src=\"/dashboard-template/js/off-canvas.js\"></script>
  <script src=\"/dashboard-template/js/hoverable-collapse.js\"></script>
  <script src=\"/dashboard-template/js/template.js\"></script>
  <script src=\"/dashboard-template/js/settings.js\"></script>
  <script src=\"/dashboard-template/js/todolist.js\"></script>
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
        return "@Twig/Exception/error404.html.twig";
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
  <title>404 error</title>
  <!-- base:css -->
  <link rel=\"stylesheet\" href=\"/dashboard-template/vendors/typicons/typicons.css\">
  <link rel=\"stylesheet\" href=\"/dashboard-template/vendors/css/vendor.bundle.base.css\">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel=\"stylesheet\" href=\"/dashboard-template/css/vertical-layout-light/style.css\">
  <!-- endinject -->
  <link rel=\"shortcut icon\" href=\"/dashboard-template/images/favicon.png\" />
</head>

<body>
  <div class=\"container-scroller\">
    <div class=\"container-fluid page-body-wrapper full-page-wrapper\">
      <div class=\"content-wrapper d-flex align-items-center text-center error-page bg-primary\">
        <div class=\"row flex-grow\">
          <div class=\"col-lg-7 mx-auto text-white\">
            <div class=\"row align-items-center d-flex flex-row\">
              <div class=\"col-lg-6 text-lg-right pr-lg-4\">
                <h1 class=\"display-1 mb-0\">404</h1>
              </div>
              <div class=\"col-lg-6 error-page-divider text-lg-left pl-lg-4\">
                <h2>SORRY!</h2>
                <h3 class=\"font-weight-light\">The page you’re looking for was not found.</h3>
              </div>
            </div>
            <div class=\"row mt-5\">
              <div class=\"col-12 text-center mt-xl-2\">
                <a class=\"text-white font-weight-medium\" href=\"/\">Back to home</a>
              </div>
            </div>
            <div class=\"row mt-5\">
              <div class=\"col-12 mt-xl-2\">
                <p class=\"text-white font-weight-medium text-center\">Copyright &copy; 2018  All rights reserved.</p>
              </div>
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
  <script src=\"/dashboard-template/vendors/js/vendor.bundle.base.js\"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src=\"/dashboard-template/js/off-canvas.js\"></script>
  <script src=\"/dashboard-template/js/hoverable-collapse.js\"></script>
  <script src=\"/dashboard-template/js/template.js\"></script>
  <script src=\"/dashboard-template/js/settings.js\"></script>
  <script src=\"/dashboard-template/js/todolist.js\"></script>
  <!-- endinject -->
</body>

</html>
", "@Twig/Exception/error404.html.twig", "/var/safe-spot/templates/bundles/TwigBundle/Exception/error404.html.twig");
    }
}
