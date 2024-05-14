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

/* admin/affiche_tous_utilisateurs.html.twig */
class __TwigTemplate_6f0e6795f15adbc083fec80f0ee8bf99 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/affiche_tous_utilisateurs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/affiche_tous_utilisateurs.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/affiche_tous_utilisateurs.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " User list ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 3
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "breadcrumbs"));

        echo " User list ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var searchInput = document.getElementById('search-input');
            var tableBody = document.getElementById('table-body');
            searchInput.addEventListener('input', function (event) {
                var formData = new FormData();
                formData.append('query', searchInput.value);
                fetch('/admin/search', {
                    method: 'POST',
                    body: formData
                })
                    .then(response => response.json())
                    .then(data => {
                        tableBody.innerHTML = '';
                        data.forEach(function (user) {
                            var newRow = document.createElement('tr');
                            newRow.innerHTML = `
                    <td>\${user.nom}</td>
                    <td>\${user.prenom}</td>
                    <td>\${user.numTlph}</td>
                    <td>\${user.adresse}</td>
                    <td>\${user.dateDeNaissance}</td>
                    <td>
                        \${user.etat === \"activer\" ?
                                '<span class=\"badge badge-success\">Activer</span>' :
                                '<span class=\"badge badge-danger\">Désactiver</span>'}
                    </td>
                    <td>
                        <a href=\"\${user.etat === \"activer\" ?
                                '/desactiver/' + user.id :
                                '/activer/' + user.id}\" class=\"btn btn-\${user.etat === \"activer\" ? 'danger' : 'success'}\">
                            \${user.etat === \"activer\" ? 'Désactiver' : 'Activer'}
                        </a>
                    </td>
                    <td>\${user.email}</td>
                    <td>
                        <a href=\"/send-mail/\${user.id}\" class=\"text-secondary font-weight-bold text-xs\" data-toggle=\"tooltip\" data-original-title=\"Envoyer un e-mail\">
                            SendMail
                        </a>
                    </td>
                `;
                            tableBody.appendChild(newRow);
                        });
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 56
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 57
        echo "
    <main class=\"main-content position-relative max-height-vh-100 h-100 border-radius-lg \">

        <div class=\"container-fluid\">
            <div class=\"row\">
                <div>
                    <div class=\"card my-4\">
                        <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
                            <div class=\"bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3\">
                                <h6 class=\"text-white text-capitalize ps-3\">Liste des Utilisateurs </h6>
                                <div class=\"input-group\">
                                    <input type=\"text\" id=\"search-input\" class=\"form-control\" placeholder=\"Search...\"
                                           aria-label=\"search\"
                                           aria-describedby=\"search\">
                                    <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"search\">
                  <i class=\"typcn typcn-zoom\"></i>
                </span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"ml-auto p-2\">
                                <a class=\"btn btn-outline-danger \" href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_pdf");
        echo "\">DownLoad PDF</a>
                                <a class=\"btn btn-outline-danger \" href=\"javascript:window.print()\">Imprimer</a>
                                <div class=\"count\">
                                    Total: ";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 82, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 82), "html", null, true);
        echo " users
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body px-0 pb-2\">
                            <div class=\"table-responsive p-0\">
                                <div class=\"message-flash\">
                                    ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "flashes", ["success"], "method", false, false, false, 89));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 90
            echo "                                        <div class=\"alert alert-success\">
                                            ";
            // line 91
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "                                </div>
                                <table class=\"table align-items-center mb-0\">
                                    <thead>
                                    <tr>
                                        <th";
        // line 98
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 98, $this->source); })()), "isSorted", ["u.nom"], "method", false, false, false, 98)) {
            echo " class=\"sorted\"";
        }
        echo ">
                                            ";
        // line 99
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 99, $this->source); })()), "Nom", "u.nom");
        echo "
                                        </th>
                                        <th";
        // line 101
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 101, $this->source); })()), "isSorted", ["u.prenom"], "method", false, false, false, 101)) {
            echo " class=\"sorted\"";
        }
        echo ">
                                            ";
        // line 102
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 102, $this->source); })()), "Prenom", "u.prenom");
        echo "
                                        </th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">
                                            numero du telphone
                                        </th>
                                        <th";
        // line 107
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 107, $this->source); })()), "isSorted", ["u.adresse"], "method", false, false, false, 107)) {
            echo " class=\"sorted\"";
        }
        echo ">
                                            ";
        // line 108
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 108, $this->source); })()), "Adresse", "u.adresse");
        echo "
                                        </th>
                                        <th";
        // line 110
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 110, $this->source); })()), "isSorted", ["u.date_de_naissance"], "method", false, false, false, 110)) {
            echo " class=\"sorted\"";
        }
        echo ">
                                            ";
        // line 111
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 111, $this->source); })()), "Date de naissance", "u.date_de_naissance");
        echo "
                                        </th>
                                        <th";
        // line 113
        if (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 113, $this->source); })()), "isSorted", ["u.etat"], "method", false, false, false, 113)) {
            echo " class=\"sorted\"";
        }
        echo ">
                                            ";
        // line 114
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 114, $this->source); })()), "Etat", "u.etat");
        echo "
                                        </th>
                                        <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">
                                            Action
                                        </th>
                                        <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">
                                            email
                                        </th>
                                        <th class=\"text-secondary opacity-7\">Action</th>

                                    </tr>
                                    </thead>
                                    <tbody id=\"table-body\">
                                    ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 127, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
            // line 128
            echo "                                        <tr>
                                            <td>
                                                <div class=\"d-flex px-2 py-1\">

                                                    <div class=\"d-flex flex-column justify-content-center\">
                                                        <h6 class=\"mb-0 text-sm\">";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "nom", [], "any", false, false, false, 133), "html", null, true);
            echo "</h6>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <p class=\"text-xs font-weight-bold mb-0\">";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "prenom", [], "any", false, false, false, 139), "html", null, true);
            echo "</p>
                                            </td>
                                            <td>
                                                <p class=\"text-xs font-weight-bold mb-0\">";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "numTlph", [], "any", false, false, false, 142), "html", null, true);
            echo "</p>
                                            </td>
                                            <td>
                                                <p class=\"text-xs font-weight-bold mb-0\">";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "adresse", [], "any", false, false, false, 145), "html", null, true);
            echo "</p>
                                            </td>
                                            <td>
                                                <p class=\"text-xs font-weight-bold mb-0\">";
            // line 148
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "dateDeNaissance", [], "any", false, false, false, 148), "Y-m-d"), "html", null, true);
            echo "</p>
                                            </td>
                                            <td class=\"align-middle text-center text-sm\">
                                                ";
            // line 151
            if ((twig_get_attribute($this->env, $this->source, $context["users"], "etat", [], "any", false, false, false, 151) == "activer")) {
                // line 152
                echo "                                                    <span class=\"badge badge-sm bg-gradient-success\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "etat", [], "any", false, false, false, 152), "html", null, true);
                echo " </span>
                                                ";
            } else {
                // line 154
                echo "                                                    <span class=\"badge badge-sm bg-gradient-danger\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "etat", [], "any", false, false, false, 154), "html", null, true);
                echo " </span>
                                                ";
            }
            // line 156
            echo "                                            </td>
                                            <td class=\"align-middle\">
                                                ";
            // line 158
            if ((twig_get_attribute($this->env, $this->source, $context["users"], "etat", [], "any", false, false, false, 158) == "activer")) {
                // line 159
                echo "                                                    <button class=\"btn btn-danger\" name=\"desactiverUser\"><a
                                                                href=\"";
                // line 160
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("desactiverUser", ["id" => twig_get_attribute($this->env, $this->source, $context["users"], "id", [], "any", false, false, false, 160)]), "html", null, true);
                echo "\">
                                                            <span class=\"badge badge-danger\">desactiver</span></a>

                                                    </button>
                                                ";
            } else {
                // line 165
                echo "                                                    <button class=\"btn btn-success\">
                                                        <a href=\"";
                // line 166
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("activerUser", ["id" => twig_get_attribute($this->env, $this->source, $context["users"], "id", [], "any", false, false, false, 166)]), "html", null, true);
                echo "\">
                                                            <span class=\"badge badge-success\">activer</span></a>

                                                    </button>
                                                ";
            }
            // line 171
            echo "
                                            </td>
                                            <td class=\"align-middle text-center\">
                                                <span class=\"text-secondary text-xs font-weight-bold\">";
            // line 174
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["users"], "email", [], "any", false, false, false, 174), "html", null, true);
            echo "</span>
                                            </td>

                                            <td class=\"align-middle\">
                                                <a href=\"";
            // line 178
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sendMailToUser", ["email_use" => twig_get_attribute($this->env, $this->source, $context["users"], "email", [], "any", false, false, false, 178)]), "html", null, true);
            echo "\"
                                                   class=\"text-secondary font-weight-bold text-xs\" data-toggle=\"tooltip\"
                                                   data-original-title=\"Edit user\">
                                                    SendMail
                                                </a>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "                                    </tbody>
                                </table>
                                <div class=\"navigation\">
                                    ";
        // line 189
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 189, $this->source); })()));
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/affiche_tous_utilisateurs.html.twig";
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
        return array (  427 => 189,  422 => 186,  408 => 178,  401 => 174,  396 => 171,  388 => 166,  385 => 165,  377 => 160,  374 => 159,  372 => 158,  368 => 156,  362 => 154,  356 => 152,  354 => 151,  348 => 148,  342 => 145,  336 => 142,  330 => 139,  321 => 133,  314 => 128,  310 => 127,  294 => 114,  288 => 113,  283 => 111,  277 => 110,  272 => 108,  266 => 107,  258 => 102,  252 => 101,  247 => 99,  241 => 98,  235 => 94,  226 => 91,  223 => 90,  219 => 89,  209 => 82,  203 => 79,  179 => 57,  169 => 56,  109 => 5,  99 => 4,  80 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %} User list {% endblock %}
{% block breadcrumbs %} User list {% endblock %}
{% block javascripts %}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var searchInput = document.getElementById('search-input');
            var tableBody = document.getElementById('table-body');
            searchInput.addEventListener('input', function (event) {
                var formData = new FormData();
                formData.append('query', searchInput.value);
                fetch('/admin/search', {
                    method: 'POST',
                    body: formData
                })
                    .then(response => response.json())
                    .then(data => {
                        tableBody.innerHTML = '';
                        data.forEach(function (user) {
                            var newRow = document.createElement('tr');
                            newRow.innerHTML = `
                    <td>\${user.nom}</td>
                    <td>\${user.prenom}</td>
                    <td>\${user.numTlph}</td>
                    <td>\${user.adresse}</td>
                    <td>\${user.dateDeNaissance}</td>
                    <td>
                        \${user.etat === \"activer\" ?
                                '<span class=\"badge badge-success\">Activer</span>' :
                                '<span class=\"badge badge-danger\">Désactiver</span>'}
                    </td>
                    <td>
                        <a href=\"\${user.etat === \"activer\" ?
                                '/desactiver/' + user.id :
                                '/activer/' + user.id}\" class=\"btn btn-\${user.etat === \"activer\" ? 'danger' : 'success'}\">
                            \${user.etat === \"activer\" ? 'Désactiver' : 'Activer'}
                        </a>
                    </td>
                    <td>\${user.email}</td>
                    <td>
                        <a href=\"/send-mail/\${user.id}\" class=\"text-secondary font-weight-bold text-xs\" data-toggle=\"tooltip\" data-original-title=\"Envoyer un e-mail\">
                            SendMail
                        </a>
                    </td>
                `;
                            tableBody.appendChild(newRow);
                        });
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            });
        });
    </script>
{% endblock %}
{% block body %}

    <main class=\"main-content position-relative max-height-vh-100 h-100 border-radius-lg \">

        <div class=\"container-fluid\">
            <div class=\"row\">
                <div>
                    <div class=\"card my-4\">
                        <div class=\"card-header p-0 position-relative mt-n4 mx-3 z-index-2\">
                            <div class=\"bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3\">
                                <h6 class=\"text-white text-capitalize ps-3\">Liste des Utilisateurs </h6>
                                <div class=\"input-group\">
                                    <input type=\"text\" id=\"search-input\" class=\"form-control\" placeholder=\"Search...\"
                                           aria-label=\"search\"
                                           aria-describedby=\"search\">
                                    <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"search\">
                  <i class=\"typcn typcn-zoom\"></i>
                </span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"ml-auto p-2\">
                                <a class=\"btn btn-outline-danger \" href=\"{{ path('user_pdf') }}\">DownLoad PDF</a>
                                <a class=\"btn btn-outline-danger \" href=\"javascript:window.print()\">Imprimer</a>
                                <div class=\"count\">
                                    Total: {{ pagination.getTotalItemCount }} users
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body px-0 pb-2\">
                            <div class=\"table-responsive p-0\">
                                <div class=\"message-flash\">
                                    {% for message in app.flashes('success') %}
                                        <div class=\"alert alert-success\">
                                            {{ message }}
                                        </div>
                                    {% endfor %}
                                </div>
                                <table class=\"table align-items-center mb-0\">
                                    <thead>
                                    <tr>
                                        <th{% if pagination.isSorted('u.nom') %} class=\"sorted\"{% endif %}>
                                            {{ knp_pagination_sortable(pagination, 'Nom', 'u.nom') }}
                                        </th>
                                        <th{% if pagination.isSorted('u.prenom') %} class=\"sorted\"{% endif %}>
                                            {{ knp_pagination_sortable(pagination, 'Prenom', 'u.prenom') }}
                                        </th>
                                        <th class=\"text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2\">
                                            numero du telphone
                                        </th>
                                        <th{% if pagination.isSorted('u.adresse') %} class=\"sorted\"{% endif %}>
                                            {{ knp_pagination_sortable(pagination, 'Adresse', 'u.adresse') }}
                                        </th>
                                        <th{% if pagination.isSorted('u.date_de_naissance') %} class=\"sorted\"{% endif %}>
                                            {{ knp_pagination_sortable(pagination, 'Date de naissance', 'u.date_de_naissance') }}
                                        </th>
                                        <th{% if pagination.isSorted('u.etat') %} class=\"sorted\"{% endif %}>
                                            {{ knp_pagination_sortable(pagination, 'Etat', 'u.etat') }}
                                        </th>
                                        <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">
                                            Action
                                        </th>
                                        <th class=\"text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7\">
                                            email
                                        </th>
                                        <th class=\"text-secondary opacity-7\">Action</th>

                                    </tr>
                                    </thead>
                                    <tbody id=\"table-body\">
                                    {% for users in pagination %}
                                        <tr>
                                            <td>
                                                <div class=\"d-flex px-2 py-1\">

                                                    <div class=\"d-flex flex-column justify-content-center\">
                                                        <h6 class=\"mb-0 text-sm\">{{ users.nom }}</h6>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>
                                                <p class=\"text-xs font-weight-bold mb-0\">{{ users.prenom }}</p>
                                            </td>
                                            <td>
                                                <p class=\"text-xs font-weight-bold mb-0\">{{ users.numTlph }}</p>
                                            </td>
                                            <td>
                                                <p class=\"text-xs font-weight-bold mb-0\">{{ users.adresse }}</p>
                                            </td>
                                            <td>
                                                <p class=\"text-xs font-weight-bold mb-0\">{{ users.dateDeNaissance|date(\"Y-m-d\") }}</p>
                                            </td>
                                            <td class=\"align-middle text-center text-sm\">
                                                {% if users.etat == \"activer\" %}
                                                    <span class=\"badge badge-sm bg-gradient-success\"> {{ users.etat }} </span>
                                                {% else %}
                                                    <span class=\"badge badge-sm bg-gradient-danger\"> {{ users.etat }} </span>
                                                {% endif %}
                                            </td>
                                            <td class=\"align-middle\">
                                                {% if users.etat == \"activer\" %}
                                                    <button class=\"btn btn-danger\" name=\"desactiverUser\"><a
                                                                href=\"{{ path('desactiverUser',{'id':users.id}) }}\">
                                                            <span class=\"badge badge-danger\">desactiver</span></a>

                                                    </button>
                                                {% else %}
                                                    <button class=\"btn btn-success\">
                                                        <a href=\"{{ path('activerUser',{'id':users.id}) }}\">
                                                            <span class=\"badge badge-success\">activer</span></a>

                                                    </button>
                                                {% endif %}

                                            </td>
                                            <td class=\"align-middle text-center\">
                                                <span class=\"text-secondary text-xs font-weight-bold\">{{ users.email }}</span>
                                            </td>

                                            <td class=\"align-middle\">
                                                <a href=\"{{ path('sendMailToUser',{'email_use':users.email}) }}\"
                                                   class=\"text-secondary font-weight-bold text-xs\" data-toggle=\"tooltip\"
                                                   data-original-title=\"Edit user\">
                                                    SendMail
                                                </a>
                                            </td>
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>
                                <div class=\"navigation\">
                                    {{ knp_pagination_render(pagination) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

{% endblock %}", "admin/affiche_tous_utilisateurs.html.twig", "/var/safe-spot/templates/admin/affiche_tous_utilisateurs.html.twig");
    }
}
