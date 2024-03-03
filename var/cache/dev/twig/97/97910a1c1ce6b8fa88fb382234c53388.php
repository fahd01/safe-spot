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

/* partials/header_client.html.twig */
class __TwigTemplate_deb6124a015ff403dfe3d86d43350c6f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header_client.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header_client.html.twig"));

        // line 1
        echo "<!-- HEADER
       ================================================== -->
<header class=\"header-style2\">

    <div id=\"top-bar\">
        <div class=\"container-fluid px-lg-1-6 px-xl-2-5 px-xxl-2-9\">
            <div class=\"row\">
                <div class=\"col-md-9 col-xs-12\">
                    <div class=\"top-bar-info\">
                        <ul class=\"ps-0\">
                            <li><i class=\"ti-mobile\"></i>(+216) 55 88 96 65</li>
                            <li class=\"d-none d-sm-inline-block\"><i class=\"ti-email\"></i>InterstellarDeveloppers@esprit.tn</li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-xs-12 col-md-3 d-none d-md-block\">
                    <ul class=\"top-social-icon ps-0\">
                        <li><a href=\"#!\"><i class=\"fab fa-facebook-f\"></i></a></li>
                        <li><a href=\"#!\"><i class=\"fab fa-twitter\"></i></a></li>
                        <li><a href=\"#!\"><i class=\"fab fa-instagram\"></i></a></li>
                        <li><a href=\"#!\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class=\"navbar-default border-bottom border-color-light-white\">

        <!-- start top search -->
        <div class=\"top-search bg-dark\">
            <div class=\"container-fluid px-lg-1-6 px-xl-2-5 px-xxl-2-9\">
                <form class=\"search-form\" action=\"https://insurshtml.websitelayout.net/search.html\" method=\"GET\" accept-charset=\"utf-8\">
                    <div class=\"input-group\">
                                <span class=\"input-group-addon cursor-pointer\">
                                    <button class=\"search-form_submit fas fa-search text-white\" type=\"submit\"></button>
                                </span>
                        <input type=\"text\" class=\"search-form_input form-control\" name=\"s\" autocomplete=\"off\" placeholder=\"Type & hit enter...\">
                        <span class=\"input-group-addon close-search mt-1\"><i class=\"fas fa-times\"></i></span>
                    </div>
                </form>
            </div>
        </div>
        <!-- end top search -->

        <div class=\"container-fluid px-lg-1-6 px-xl-2-5 px-xxl-2-9\">
            <div class=\"row align-items-center\">
                <div class=\"col-12 col-lg-12\">
                    <div class=\"menu_area alt-font\">
                        <nav class=\"navbar navbar-expand-lg navbar-light p-0\">
                            <div class=\"navbar-header navbar-header-custom\">
                                <!-- start logo -->
                                <a ";
        // line 53
        echo " class=\"navbar-brand logodefault\"><img id=\"logo\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/client/img/logos/Vet_Assur__2_-removebg-preview.png"), "html", null, true);
        echo "\" alt=\"logo\" /></a>
                                <!-- end logo -->
                            </div>

                            <div class=\"navbar-toggler bg-secondary\"></div>

                            <!-- start menu area -->
                            <ul class=\"navbar-nav ms-auto\" id=\"nav\" style=\"display: none;\">
                                <li><a ";
        // line 61
        echo ">Home</a></li>
                                <li><a ";
        // line 62
        echo ">About Us</a></li>
                                <li><a ";
        // line 63
        echo ">Contact</a></li>
                                <li><a ";
        // line 64
        echo ">404 Page</a></li>
                                <li><a ";
        // line 65
        echo ">Espace client</a></li>
                                <li><a ";
        // line 66
        echo ">Espace Employee</a></li>
                                <li><a ";
        // line 67
        echo ">Actualités</a></li>
                                ";
        // line 68
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68)) {
            // line 69
            echo "                                <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            echo "\" >account</a></li>
                                    <li><a href=\"";
            // line 70
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" >Logout</a></li>
                                ";
        } else {
            // line 72
            echo "
                                <li><a href=\"";
            // line 73
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" >Register</a></li>
                                <li><a href=\"";
            // line 74
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register_emp");
            echo "\" >Register Employee</a></li>
                                    <li><a  href=\"";
            // line 75
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" >login</a></li>
                                ";
        }
        // line 77
        echo "
                            </ul>
                            <!-- end menu area -->

                            <!-- start attribute navigation -->
                            <div class=\"attr-nav align-items-xl-center ms-xl-auto main-font\"></div>
                            <!-- end attribute navigation -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "partials/header_client.html.twig";
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
        return array (  158 => 77,  153 => 75,  149 => 74,  145 => 73,  142 => 72,  137 => 70,  132 => 69,  130 => 68,  127 => 67,  124 => 66,  121 => 65,  118 => 64,  115 => 63,  112 => 62,  109 => 61,  97 => 53,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- HEADER
       ================================================== -->
<header class=\"header-style2\">

    <div id=\"top-bar\">
        <div class=\"container-fluid px-lg-1-6 px-xl-2-5 px-xxl-2-9\">
            <div class=\"row\">
                <div class=\"col-md-9 col-xs-12\">
                    <div class=\"top-bar-info\">
                        <ul class=\"ps-0\">
                            <li><i class=\"ti-mobile\"></i>(+216) 55 88 96 65</li>
                            <li class=\"d-none d-sm-inline-block\"><i class=\"ti-email\"></i>InterstellarDeveloppers@esprit.tn</li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-xs-12 col-md-3 d-none d-md-block\">
                    <ul class=\"top-social-icon ps-0\">
                        <li><a href=\"#!\"><i class=\"fab fa-facebook-f\"></i></a></li>
                        <li><a href=\"#!\"><i class=\"fab fa-twitter\"></i></a></li>
                        <li><a href=\"#!\"><i class=\"fab fa-instagram\"></i></a></li>
                        <li><a href=\"#!\"><i class=\"fab fa-linkedin-in\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class=\"navbar-default border-bottom border-color-light-white\">

        <!-- start top search -->
        <div class=\"top-search bg-dark\">
            <div class=\"container-fluid px-lg-1-6 px-xl-2-5 px-xxl-2-9\">
                <form class=\"search-form\" action=\"https://insurshtml.websitelayout.net/search.html\" method=\"GET\" accept-charset=\"utf-8\">
                    <div class=\"input-group\">
                                <span class=\"input-group-addon cursor-pointer\">
                                    <button class=\"search-form_submit fas fa-search text-white\" type=\"submit\"></button>
                                </span>
                        <input type=\"text\" class=\"search-form_input form-control\" name=\"s\" autocomplete=\"off\" placeholder=\"Type & hit enter...\">
                        <span class=\"input-group-addon close-search mt-1\"><i class=\"fas fa-times\"></i></span>
                    </div>
                </form>
            </div>
        </div>
        <!-- end top search -->

        <div class=\"container-fluid px-lg-1-6 px-xl-2-5 px-xxl-2-9\">
            <div class=\"row align-items-center\">
                <div class=\"col-12 col-lg-12\">
                    <div class=\"menu_area alt-font\">
                        <nav class=\"navbar navbar-expand-lg navbar-light p-0\">
                            <div class=\"navbar-header navbar-header-custom\">
                                <!-- start logo -->
                                <a {# href=\"{{path('app_home')}}\"#} class=\"navbar-brand logodefault\"><img id=\"logo\" src=\"{{asset('assets/client/img/logos/Vet_Assur__2_-removebg-preview.png')}}\" alt=\"logo\" /></a>
                                <!-- end logo -->
                            </div>

                            <div class=\"navbar-toggler bg-secondary\"></div>

                            <!-- start menu area -->
                            <ul class=\"navbar-nav ms-auto\" id=\"nav\" style=\"display: none;\">
                                <li><a {# href=\"{{path('app_home')}}\" #}>Home</a></li>
                                <li><a {# href=\"{{path('app_Aboutus')}}\" #}>About Us</a></li>
                                <li><a {# href=\"{{path('app_Contactus')}}\" #}>Contact</a></li>
                                <li><a {# href=\"{{path('app_E404')}}\" #}>404 Page</a></li>
                                <li><a {# href=\"{{path('app_EspaceClient')}}\" #}>Espace client</a></li>
                                <li><a {# href=\"{{path('app_EspaceEmp')}}\" #}>Espace Employee</a></li>
                                <li><a {# href=\"{{path('app_Actualites')}}\" #}>Actualités</a></li>
                                {% if app.user %}
                                <li><a href=\"{{path('account')}}\" >account</a></li>
                                    <li><a href=\"{{path('app_logout')}}\" >Logout</a></li>
                                {% else %}

                                <li><a href=\"{{path('app_register')}}\" >Register</a></li>
                                <li><a href=\"{{path('register_emp')}}\" >Register Employee</a></li>
                                    <li><a  href=\"{{path('app_login')}}\" >login</a></li>
                                {% endif %}

                            </ul>
                            <!-- end menu area -->

                            <!-- start attribute navigation -->
                            <div class=\"attr-nav align-items-xl-center ms-xl-auto main-font\"></div>
                            <!-- end attribute navigation -->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>", "partials/header_client.html.twig", "C:\\Users\\user\\Desktop\\safe-spot-main\\templates\\partials\\header_client.html.twig");
    }
}
