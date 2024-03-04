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

/* registration/register.html.twig */
class __TwigTemplate_e848f31dd4c4b359076ac30a31ab8fae extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Register</title>
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
                        <h4>New here?</h4>
                        <h6 class=\"font-weight-light\">Signing up is easy. It only takes a few steps</h6>

                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "flashes", ["verify_email_error"], "method", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 35
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flash_error"], "html", null, true);
            echo "</div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), 'errors');
        echo "

                        ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), 'form_start', ["attr" => ["class" => "pt-3"]]);
        echo "
                            <div class=\"form-group\">
                                ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "firstName", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "First Name"]]);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "lastName", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Last Name"]]);
        echo "
                            </div>

                            <div class=\"form-group\">
                                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "email", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Email"]]);
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 52, $this->source); })()), "plainPassword", [], "any", false, false, false, 52), 'widget', ["label" => "Password", "attr" => ["class" => "form-control form-control-lg", "placeholder" => "Password"]]);
        echo "
                            </div>
                            <div class=\"mb-4\">
                                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), "agreeTerms", [], "any", false, false, false, 55), 'widget');
        echo "
                                <div class=\"form-check\">
                                    <label class=\"form-check-label required\" for=\"registration_form_agreeTerms\">
                                        <input type=\"checkbox\" id=\"registration_form_agreeTerms\" name=\"registration_form[agreeTerms]\" required=\"required\" class=\"form-check-input\" value=\"1\">
                                        I agree to all Terms &amp; Conditions
                                        <i class=\"input-helper\"></i>
                                    </label>
                                </div>
                            </div>
                            <div class=\"mt-3\">
                                <button type=\"submit\" class=\"btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn\">SIGN UP</button>
                            </div>
                        ";
        // line 67
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 67, $this->source); })()), 'form_end');
        echo "
                            <div class=\"text-center mt-4 font-weight-light\">
                                Already have an account? <a href=\"login\" class=\"text-primary\">Login</a>
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
<script src=\"dashboard-template/vendors/js/vendor.bundle.base.js\"></script>
<!-- endinject -->
<!-- inject:js -->
<script src=\"dashboard-template/js/off-canvas.js\"></script>
<script src=\"dashboard-template/js/hoverable-collapse.js\"></script>
<script src=\"dashboard-template/js/template.js\"></script>
<script src=\"dashboard-template/js/settings.js\"></script>
<script src=\"dashboard-template/js/todolist.js\"></script>
<!-- endinject -->

<script>
document
  .querySelectorAll('body > div.container-scroller > div > div > div > div > div > form > div.mb-4 > div:nth-child(1)')
  .forEach(item => {
      item.remove();
  });


</script>


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
        return "registration/register.html.twig";
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
        return array (  144 => 67,  129 => 55,  123 => 52,  117 => 49,  110 => 45,  104 => 42,  99 => 40,  94 => 38,  91 => 37,  82 => 35,  78 => 34,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Register</title>
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
                        <h4>New here?</h4>
                        <h6 class=\"font-weight-light\">Signing up is easy. It only takes a few steps</h6>

                        {% for flash_error in app.flashes('verify_email_error') %}
                        <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
                        {% endfor %}

                        {{ form_errors(registrationForm) }}

                        {{ form_start(registrationForm, {'attr': {'class': 'pt-3'}}) }}
                            <div class=\"form-group\">
                                {{ form_widget(registrationForm.firstName, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'First Name'}}) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_widget(registrationForm.lastName, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Last Name'}}) }}
                            </div>

                            <div class=\"form-group\">
                                {{ form_widget(registrationForm.email, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Email'}}) }}
                            </div>
                            <div class=\"form-group\">
                                {{ form_widget(registrationForm.plainPassword, { 'label': 'Password', 'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Password'} } ) }}
                            </div>
                            <div class=\"mb-4\">
                                        {{ form_widget(registrationForm.agreeTerms) }}
                                <div class=\"form-check\">
                                    <label class=\"form-check-label required\" for=\"registration_form_agreeTerms\">
                                        <input type=\"checkbox\" id=\"registration_form_agreeTerms\" name=\"registration_form[agreeTerms]\" required=\"required\" class=\"form-check-input\" value=\"1\">
                                        I agree to all Terms &amp; Conditions
                                        <i class=\"input-helper\"></i>
                                    </label>
                                </div>
                            </div>
                            <div class=\"mt-3\">
                                <button type=\"submit\" class=\"btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn\">SIGN UP</button>
                            </div>
                        {{ form_end(registrationForm) }}
                            <div class=\"text-center mt-4 font-weight-light\">
                                Already have an account? <a href=\"login\" class=\"text-primary\">Login</a>
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
<script src=\"dashboard-template/vendors/js/vendor.bundle.base.js\"></script>
<!-- endinject -->
<!-- inject:js -->
<script src=\"dashboard-template/js/off-canvas.js\"></script>
<script src=\"dashboard-template/js/hoverable-collapse.js\"></script>
<script src=\"dashboard-template/js/template.js\"></script>
<script src=\"dashboard-template/js/settings.js\"></script>
<script src=\"dashboard-template/js/todolist.js\"></script>
<!-- endinject -->

<script>
document
  .querySelectorAll('body > div.container-scroller > div > div > div > div > div > form > div.mb-4 > div:nth-child(1)')
  .forEach(item => {
      item.remove();
  });


</script>


</body>

</html>

", "registration/register.html.twig", "/var/safe-spot/safe-spot/templates/registration/register.html.twig");
    }
}
