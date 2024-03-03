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

/* account/index.html.twig */
class __TwigTemplate_bd1e398ebad8d3d382761738da9bd388 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/index.html.twig"));

        // line 1
        echo "
<!doctype html>
<html lang=\"en\">
<head>
    <title>Safe Spot &mdash; Banking Re-invented</title>
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/images/safe-spot-192x192.png"), "html", null, true);
        echo "\"/>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.theme.default.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.theme.default.min.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.fancybox.min.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-datepicker.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/flaticon/font/flaticon.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/aos.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
</head>
<body data-spy=\"scroll\" data-target=\".site-navbar-target\" data-offset=\"300\">


<div id=\"overlayer\"></div>
<div class=\"loader\">
    <div class=\"spinner-border text-primary\" role=\"status\">
        <span class=\"sr-only\">Loading...</span>
    </div>
</div>


<div class=\"site-wrap\">

    <div class=\"site-mobile-menu site-navbar-target\">
        <div class=\"site-mobile-menu-header\">
            <div class=\"site-mobile-menu-close mt-3\">
                <span class=\"icon-close2 js-menu-toggle\"></span>
            </div>
        </div>
        <div class=\"site-mobile-menu-body\"></div>
    </div>

    <header class=\"site-navbar js-sticky-header bg-dark-subtle site-navbar-target\" role=\"banner\">

        <div class=\"container bg-dark\">
            <div class=\"row align-items-center\">

                <div class=\"col-6 col-xl-2\">
                    <h1 class=\"mb-0 site-logo\"><a href=\"#\" class=\"h2 mb-0\">Safe Spot<span class=\"text-primary\">.</span> </a></h1>
                </div>

                <div class=\"col-12 col-md-10 d-none d-xl-block\">
                    <nav class=\"site-navigation position-relative text-right\" role=\"navigation\">

                        <ul class=\"site-menu main-menu js-clone-nav mr-auto d-none d-lg-block\">
                            <li><a href=\"#home-section\" class=\"nav-link\">Home</a></li>
                            <li class=\"has-children\">
                                <a href=\"#about-section\" class=\"nav-link\">About Us</a>
                                <ul class=\"dropdown\">
                                    <li><a href=\"#team-section\" class=\"nav-link\">Team</a></li>
                                    <li><a href=\"#pricing-section\" class=\"nav-link\">Pricing</a></li>
                                    <li><a href=\"#faq-section\" class=\"nav-link\">FAQ</a></li>
                                    <li><a href=\"#services-section\" class=\"nav-link\">Services</a></li>
                                    <li><a href=\"#testimonials-section\" class=\"nav-link\">Testimonials</a></li>
                                    <!--
                                    <li class=\"has-children\">
                                      <a href=\"#blog-section\">Blog</a>
                                      <ul class=\"dropdown\">
                                        <li><a href=\"./article-1.html\">Article 1</a></li>
                                        <li><a href=\"./article-2.html\">Article 2</a></li>
                                        <li><a href=\"./article-3.html\">Article 3</a></li>
                                      </ul>
                                    </li>
                                    -->
                                </ul>
                            </li>


                            <li><a href=\"#blog-section\" class=\"nav-link\">Blog</a></li>
                            <li><a href=\"#contact-section\" class=\"nav-link\">Contact</a></li>
                            ";
        // line 88
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88)) {
            // line 89
            echo "                                <li><a href=\"#\" class=\"nav-link\">";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "user", [], "any", false, false, false, 89), "nom", [], "any", false, false, false, 89) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "user", [], "any", false, false, false, 89), "prenom", [], "any", false, false, false, 89)), "html", null, true);
            echo "</a></li>
                            ";
        } else {
            // line 91
            echo "                                <li><a href=\"/login\" class=\"nav-link\">Login</a></li>
                            ";
        }
        // line 93
        echo "                            <li class=\"social\"><a href=\"#contact-section\" class=\"nav-link\"><span class=\"icon-facebook\"></span></a></li>
                            <li class=\"social\"><a href=\"#contact-section\" class=\"nav-link\"><span class=\"icon-twitter\"></span></a></li>
                            <li class=\"social\"><a href=\"#contact-section\" class=\"nav-link\"><span class=\"icon-linkedin\"></span></a></li>
                        </ul>
                    </nav>
                </div>


                <div class=\"col-6 d-inline-block d-xl-none ml-md-0 py-3\" style=\"position: relative; top: 3px;\"><a href=\"#\" class=\"site-menu-toggle js-menu-toggle float-right\"><span class=\"icon-menu h3\"></span></a></div>

            </div>
        </div>

    </header>

    <section class=\"site-section bg-light\" id=\"#\" data-aos=\"fade\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"card\">

                        ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "flashes", ["success"], "method", false, false, false, 114));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 115
            echo "
                            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                                ";
            // line 120
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 123, $this->source); })()), "flashes", ["notice"], "method", false, false, false, 123));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 124
            echo "                            <div class=\"flash-notice\">
                                ";
            // line 125
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "
                        <div class=\"card-body\">
                            <div class=\"d-flex flex-column align-items-center text-center\">
                                ";
        // line 131
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 131, $this->source); })()), "user", [], "any", false, false, false, 131), "imageName", [], "any", false, false, false, 131)) {
            // line 132
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "user", [], "any", false, false, false, 132), "imageName", [], "any", false, false, false, 132))), "html", null, true);
            echo "\" alt=\"Admin\" class=\"rounded-circle p-1 bg-primary\" width=\"110\">
                                ";
        } else {
            // line 134
            echo "                                <img src=\"https://bootdey.com/img/Content/avatar/avatar6.png\" alt=\"Admin\" class=\"rounded-circle p-1 bg-primary\" width=\"110\">
                                ";
        }
        // line 136
        echo "                                <div class=\"mt-3\">
                                    <h4>";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 137, $this->source); })()), "user", [], "any", false, false, false, 137), "nom", [], "any", false, false, false, 137), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 137, $this->source); })()), "user", [], "any", false, false, false, 137), "prenom", [], "any", false, false, false, 137), "html", null, true);
        echo "</h4>
                                    <p class=\"text-muted font-size-sm\">";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 138, $this->source); })()), "user", [], "any", false, false, false, 138), "email", [], "any", false, false, false, 138), "html", null, true);
        echo "</p>
                                    <button class=\"btn btn-outline-primary\"><a href=\"";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"> Logout</a></button>
                                </div>
                            </div>
                            <hr class=\"my-4\">
                            <ul class=\"list-group list-group-flush\">

                                <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                                    <h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather fa-feather-alt me-2 icon-inline\"><path d=\"M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22\"></path></svg>adresse</h6>
                                    <span class=\"text-secondary\">";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "user", [], "any", false, false, false, 147), "adresse", [], "any", false, false, false, 147), "html", null, true);
        echo "</span>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-8\">
                    ";
        // line 156
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Full Name</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">

                                    ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "nom", [], "any", false, false, false, 165), 'label', ["label" => " "]);
        echo "
                                    ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "nom", [], "any", false, false, false, 166), 'widget');
        echo "
                                    ";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "nom", [], "any", false, false, false, 167), 'errors');
        echo "

                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Prenom</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    ";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "prenom", [], "any", false, false, false, 176), 'label', ["label" => " "]);
        echo "
                                    ";
        // line 177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), "prenom", [], "any", false, false, false, 177), 'widget');
        echo "
                                    ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "prenom", [], "any", false, false, false, 178), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">adresse</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">

                                    ";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "adresse", [], "any", false, false, false, 187), 'label', ["label" => " "]);
        echo "
                                    ";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "adresse", [], "any", false, false, false, 188), 'widget');
        echo "
                                    ";
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 189, $this->source); })()), "adresse", [], "any", false, false, false, 189), 'errors');
        echo "

                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">phone</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    ";
        // line 198
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "num_tlph", [], "any", false, false, false, 198), 'label', ["label" => " "]);
        echo "
                                    ";
        // line 199
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), "num_tlph", [], "any", false, false, false, 199), 'widget');
        echo "
                                    ";
        // line 200
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "num_tlph", [], "any", false, false, false, 200), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Avatar</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    ";
        // line 208
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 208, $this->source); })()), "imageFile", [], "any", false, false, false, 208), 'label');
        echo "
                                    ";
        // line 209
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 209, $this->source); })()), "imageFile", [], "any", false, false, false, 209), 'widget');
        echo "
                                    ";
        // line 210
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 210, $this->source); })()), "imageFile", [], "any", false, false, false, 210), 'errors');
        echo "
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-sm-3\"></div>
                                <div class=\"col-sm-9 text-secondary\">
                                    <input type=\"submit\" class=\"btn btn-primary px-4\" value=\"Save Changes\">
                                </div>
                            </div>
                        </div>
                        ";
        // line 221
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 221, $this->source); })()), 'form_end');
        echo "
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <h5 class=\"d-flex align-items-center mb-3\">love Status</h5>
                                    <p>love for dogs</p>
                                    <div class=\"progress mb-3\" style=\"height: 5px\">
                                        <div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 80%\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <p>love for cats</p>
                                    <div class=\"progress mb-3\" style=\"height: 5px\">
                                        <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 72%\" aria-valuenow=\"72\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <p>love for birds</p>
                                    <div class=\"progress mb-3\" style=\"height: 5px\">
                                        <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 89%\" aria-valuenow=\"89\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class=\"site-footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-9\">
                    <div class=\"row\">
                        <div class=\"col-md-5\">
                            <h2 class=\"footer-heading mb-4\">About Us</h2>
                            <p>
                                At our core, we are dedicated to empowering individuals through innovative financial solutions tailored to your needs. A seamless experience at your hands.
                            </p>
                        </div>
                        <div class=\"col-md-3 ml-auto\">
                            <h2 class=\"footer-heading mb-4\">Quick Links</h2>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"#about-section\" class=\"smoothscroll\">Terms</a></li>
                                <li><a href=\"#about-section\" class=\"smoothscroll\">Policy</a></li>
                                <li><a href=\"#about-section\" class=\"smoothscroll\">About Us</a></li>
                                <li><a href=\"#services-section\" class=\"smoothscroll\">Services</a></li>
                                <li><a href=\"#testimonials-section\" class=\"smoothscroll\">Testimonials</a></li>
                                <li><a href=\"#contact-section\" class=\"smoothscroll\">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class=\"col-md-3 footer-social\">
                            <h2 class=\"footer-heading mb-4\">Follow Us</h2>
                            <a href=\"#\" class=\"pl-0 pr-3\"><span class=\"icon-facebook\"></span></a>
                            <a href=\"#\" class=\"pl-3 pr-3\"><span class=\"icon-twitter\"></span></a>
                            <a href=\"#\" class=\"pl-3 pr-3\"><span class=\"icon-instagram\"></span></a>
                            <a href=\"#\" class=\"pl-3 pr-3\"><span class=\"icon-linkedin\"></span></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <h2 class=\"footer-heading mb-4\">Subscribe Newsletter</h2>
                    <form action=\"#\" method=\"post\" class=\"footer-subscribe\">
                        <div class=\"input-group mb-3\">
                            <input type=\"text\" class=\"form-control border-secondary text-white bg-transparent\" placeholder=\"Enter Email\" aria-label=\"Enter Email\" aria-describedby=\"button-addon2\">
                            <div class=\"input-group-append\">
                                <button class=\"btn btn-primary text-black\" type=\"button\" id=\"button-addon2\">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"row pt-5 mt-5 text-center\">
                <div class=\"col-md-12\">
                    <div class=\"border-top pt-5\">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p>Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
                            with <i class=\"icon-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                    </div>
                </div>

            </div>
        </div>
    </footer>

</div> <!-- .site-wrap -->

<script src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 316
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.countdown.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/aos.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.fancybox.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>



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
        return "account/index.html.twig";
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
        return array (  541 => 323,  536 => 321,  532 => 320,  528 => 319,  524 => 318,  520 => 317,  516 => 316,  512 => 315,  508 => 314,  504 => 313,  500 => 312,  496 => 311,  403 => 221,  389 => 210,  385 => 209,  381 => 208,  370 => 200,  366 => 199,  362 => 198,  350 => 189,  346 => 188,  342 => 187,  330 => 178,  326 => 177,  322 => 176,  310 => 167,  306 => 166,  302 => 165,  290 => 156,  278 => 147,  267 => 139,  263 => 138,  257 => 137,  254 => 136,  250 => 134,  244 => 132,  242 => 131,  237 => 128,  228 => 125,  225 => 124,  220 => 123,  211 => 120,  204 => 115,  200 => 114,  177 => 93,  173 => 91,  167 => 89,  165 => 88,  100 => 26,  95 => 24,  90 => 22,  85 => 20,  80 => 18,  75 => 16,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!doctype html>
<html lang=\"en\">
<head>
    <title>Safe Spot &mdash; Banking Re-invented</title>
    <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('/images/safe-spot-192x192.png') }}\"/>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/jquery-ui.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/owl.carousel.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/owl.theme.default.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/owl.theme.default.min.css') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('css/jquery.fancybox.min.css') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datepicker.css') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('fonts/flaticon/font/flaticon.css') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('css/aos.css') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
</head>
<body data-spy=\"scroll\" data-target=\".site-navbar-target\" data-offset=\"300\">


<div id=\"overlayer\"></div>
<div class=\"loader\">
    <div class=\"spinner-border text-primary\" role=\"status\">
        <span class=\"sr-only\">Loading...</span>
    </div>
</div>


<div class=\"site-wrap\">

    <div class=\"site-mobile-menu site-navbar-target\">
        <div class=\"site-mobile-menu-header\">
            <div class=\"site-mobile-menu-close mt-3\">
                <span class=\"icon-close2 js-menu-toggle\"></span>
            </div>
        </div>
        <div class=\"site-mobile-menu-body\"></div>
    </div>

    <header class=\"site-navbar js-sticky-header bg-dark-subtle site-navbar-target\" role=\"banner\">

        <div class=\"container bg-dark\">
            <div class=\"row align-items-center\">

                <div class=\"col-6 col-xl-2\">
                    <h1 class=\"mb-0 site-logo\"><a href=\"#\" class=\"h2 mb-0\">Safe Spot<span class=\"text-primary\">.</span> </a></h1>
                </div>

                <div class=\"col-12 col-md-10 d-none d-xl-block\">
                    <nav class=\"site-navigation position-relative text-right\" role=\"navigation\">

                        <ul class=\"site-menu main-menu js-clone-nav mr-auto d-none d-lg-block\">
                            <li><a href=\"#home-section\" class=\"nav-link\">Home</a></li>
                            <li class=\"has-children\">
                                <a href=\"#about-section\" class=\"nav-link\">About Us</a>
                                <ul class=\"dropdown\">
                                    <li><a href=\"#team-section\" class=\"nav-link\">Team</a></li>
                                    <li><a href=\"#pricing-section\" class=\"nav-link\">Pricing</a></li>
                                    <li><a href=\"#faq-section\" class=\"nav-link\">FAQ</a></li>
                                    <li><a href=\"#services-section\" class=\"nav-link\">Services</a></li>
                                    <li><a href=\"#testimonials-section\" class=\"nav-link\">Testimonials</a></li>
                                    <!--
                                    <li class=\"has-children\">
                                      <a href=\"#blog-section\">Blog</a>
                                      <ul class=\"dropdown\">
                                        <li><a href=\"./article-1.html\">Article 1</a></li>
                                        <li><a href=\"./article-2.html\">Article 2</a></li>
                                        <li><a href=\"./article-3.html\">Article 3</a></li>
                                      </ul>
                                    </li>
                                    -->
                                </ul>
                            </li>


                            <li><a href=\"#blog-section\" class=\"nav-link\">Blog</a></li>
                            <li><a href=\"#contact-section\" class=\"nav-link\">Contact</a></li>
                            {% if app.user %}
                                <li><a href=\"#\" class=\"nav-link\">{{ app.user.nom ~ ' ' ~ app.user.prenom }}</a></li>
                            {% else %}
                                <li><a href=\"/login\" class=\"nav-link\">Login</a></li>
                            {% endif %}
                            <li class=\"social\"><a href=\"#contact-section\" class=\"nav-link\"><span class=\"icon-facebook\"></span></a></li>
                            <li class=\"social\"><a href=\"#contact-section\" class=\"nav-link\"><span class=\"icon-twitter\"></span></a></li>
                            <li class=\"social\"><a href=\"#contact-section\" class=\"nav-link\"><span class=\"icon-linkedin\"></span></a></li>
                        </ul>
                    </nav>
                </div>


                <div class=\"col-6 d-inline-block d-xl-none ml-md-0 py-3\" style=\"position: relative; top: 3px;\"><a href=\"#\" class=\"site-menu-toggle js-menu-toggle float-right\"><span class=\"icon-menu h3\"></span></a></div>

            </div>
        </div>

    </header>

    <section class=\"site-section bg-light\" id=\"#\" data-aos=\"fade\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-4\">
                    <div class=\"card\">

                        {% for message in app.flashes('success') %}

                            <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                                {{ message }}
                            </div>
                        {% endfor %}
                        {% for message in app.flashes('notice') %}
                            <div class=\"flash-notice\">
                                {{ message }}
                            </div>
                        {% endfor %}

                        <div class=\"card-body\">
                            <div class=\"d-flex flex-column align-items-center text-center\">
                                {% if app.user.imageName %}
                                <img src=\"{{ asset('uploads/avatars/' ~ app.user.imageName) }}\" alt=\"Admin\" class=\"rounded-circle p-1 bg-primary\" width=\"110\">
                                {% else %}
                                <img src=\"https://bootdey.com/img/Content/avatar/avatar6.png\" alt=\"Admin\" class=\"rounded-circle p-1 bg-primary\" width=\"110\">
                                {% endif %}
                                <div class=\"mt-3\">
                                    <h4>{{ app.user.nom }} {{ app.user.prenom }}</h4>
                                    <p class=\"text-muted font-size-sm\">{{ app.user.email }}</p>
                                    <button class=\"btn btn-outline-primary\"><a href=\"{{ path('app_logout') }}\"> Logout</a></button>
                                </div>
                            </div>
                            <hr class=\"my-4\">
                            <ul class=\"list-group list-group-flush\">

                                <li class=\"list-group-item d-flex justify-content-between align-items-center flex-wrap\">
                                    <h6 class=\"mb-0\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather fa-feather-alt me-2 icon-inline\"><path d=\"M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22\"></path></svg>adresse</h6>
                                    <span class=\"text-secondary\">{{ app.user.adresse }}</span>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-8\">
                    {{ form_start(form,{'attr':{'novalidate':'novalidate'  }}) }}
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Full Name</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">

                                    {{  form_label(form.nom,' ')}}
                                    {{ form_widget(form.nom) }}
                                    {{  form_errors(form.nom)}}

                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Prenom</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    {{  form_label(form.prenom,' ')}}
                                    {{ form_widget(form.prenom) }}
                                    {{  form_errors(form.prenom)}}
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">adresse</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">

                                    {{  form_label(form.adresse,' ')}}
                                    {{ form_widget(form.adresse) }}
                                    {{  form_errors(form.adresse)}}

                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">phone</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    {{  form_label(form.num_tlph,' ')}}
                                    {{ form_widget(form.num_tlph) }}
                                    {{  form_errors(form.num_tlph)}}
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-sm-3\">
                                    <h6 class=\"mb-0\">Avatar</h6>
                                </div>
                                <div class=\"col-sm-9 text-secondary\">
                                    {{  form_label(form.imageFile)}}
                                    {{ form_widget(form.imageFile) }}
                                    {{  form_errors(form.imageFile)}}
                                </div>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-sm-3\"></div>
                                <div class=\"col-sm-9 text-secondary\">
                                    <input type=\"submit\" class=\"btn btn-primary px-4\" value=\"Save Changes\">
                                </div>
                            </div>
                        </div>
                        {{ form_end(form) }}
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"card\">
                                <div class=\"card-body\">
                                    <h5 class=\"d-flex align-items-center mb-3\">love Status</h5>
                                    <p>love for dogs</p>
                                    <div class=\"progress mb-3\" style=\"height: 5px\">
                                        <div class=\"progress-bar bg-primary\" role=\"progressbar\" style=\"width: 80%\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <p>love for cats</p>
                                    <div class=\"progress mb-3\" style=\"height: 5px\">
                                        <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 72%\" aria-valuenow=\"72\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                    <p>love for birds</p>
                                    <div class=\"progress mb-3\" style=\"height: 5px\">
                                        <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 89%\" aria-valuenow=\"89\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class=\"site-footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-9\">
                    <div class=\"row\">
                        <div class=\"col-md-5\">
                            <h2 class=\"footer-heading mb-4\">About Us</h2>
                            <p>
                                At our core, we are dedicated to empowering individuals through innovative financial solutions tailored to your needs. A seamless experience at your hands.
                            </p>
                        </div>
                        <div class=\"col-md-3 ml-auto\">
                            <h2 class=\"footer-heading mb-4\">Quick Links</h2>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"#about-section\" class=\"smoothscroll\">Terms</a></li>
                                <li><a href=\"#about-section\" class=\"smoothscroll\">Policy</a></li>
                                <li><a href=\"#about-section\" class=\"smoothscroll\">About Us</a></li>
                                <li><a href=\"#services-section\" class=\"smoothscroll\">Services</a></li>
                                <li><a href=\"#testimonials-section\" class=\"smoothscroll\">Testimonials</a></li>
                                <li><a href=\"#contact-section\" class=\"smoothscroll\">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class=\"col-md-3 footer-social\">
                            <h2 class=\"footer-heading mb-4\">Follow Us</h2>
                            <a href=\"#\" class=\"pl-0 pr-3\"><span class=\"icon-facebook\"></span></a>
                            <a href=\"#\" class=\"pl-3 pr-3\"><span class=\"icon-twitter\"></span></a>
                            <a href=\"#\" class=\"pl-3 pr-3\"><span class=\"icon-instagram\"></span></a>
                            <a href=\"#\" class=\"pl-3 pr-3\"><span class=\"icon-linkedin\"></span></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-3\">
                    <h2 class=\"footer-heading mb-4\">Subscribe Newsletter</h2>
                    <form action=\"#\" method=\"post\" class=\"footer-subscribe\">
                        <div class=\"input-group mb-3\">
                            <input type=\"text\" class=\"form-control border-secondary text-white bg-transparent\" placeholder=\"Enter Email\" aria-label=\"Enter Email\" aria-describedby=\"button-addon2\">
                            <div class=\"input-group-append\">
                                <button class=\"btn btn-primary text-black\" type=\"button\" id=\"button-addon2\">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class=\"row pt-5 mt-5 text-center\">
                <div class=\"col-md-12\">
                    <div class=\"border-top pt-5\">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <p>Copyright &copy;
                            <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
                            with <i class=\"icon-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                        </p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                    </div>
                </div>

            </div>
        </div>
    </footer>

</div> <!-- .site-wrap -->

<script src=\"{{ asset('js/jquery-3.3.1.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery-ui.js') }}\"></script>
<script src=\"{{ asset('js/popper.min.js') }}\"></script>
<script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('js/owl.carousel.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.countdown.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.easing.1.3.js') }}\"></script>
<script src=\"{{ asset('js/aos.js') }}\"></script>
<script src=\"{{ asset('js/jquery.fancybox.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.sticky.js') }}\"></script>
<script src=\"{{ asset('js/isotope.pkgd.min.js') }}\"></script>

<script src=\"{{ asset('js/main.js') }}\"></script>



</body>
</html>
", "account/index.html.twig", "C:\\Users\\21692\\Downloads\\safe-spot-main (1)\\safe-spot-main\\templates\\account\\index.html.twig");
    }
}
