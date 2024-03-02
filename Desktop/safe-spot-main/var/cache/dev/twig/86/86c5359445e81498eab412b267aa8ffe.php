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

/* actualite/show.html.twig */
class __TwigTemplate_a3077b471fad03314e55e1881dd93c69 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actualite/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "actualite/show.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "actualite/show.html.twig", 1);
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

        echo "Actualite";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "  
    <div class=\"site-blocks-cover overlay\" style=\"background-image: url('";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("images/" . twig_get_attribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 7, $this->source); })()), "img", [], "any", false, false, false, 7))), "html", null, true);
        echo "');\" data-aos=\"fade\">
      <div class=\"container\">
        <div class=\"row align-items-center justify-content-center\">
    
    
          <div class=\"col-md-12 mt-lg-5 text-center\">
            <h1>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>
            <p class=\"post-meta\">";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 14, $this->source); })()), "dt", [], "any", false, false, false, 14), "Y-m-d"), "html", null, true);
        echo " &bull; Posted by ADMIN 
            </p>
    
          </div>
    
        </div>
      </div>
    </div>
    
    
    
    <section class=\"site-section\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-8 blog-content\">
            <p class=\"lead\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["actualite"]) || array_key_exists("actualite", $context) ? $context["actualite"] : (function () { throw new RuntimeError('Variable "actualite" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29), "html", null, true);
        echo "</p>

            <div class=\"pt-5\">
              
              <p>
                Tags: <a href=\"#\">#Innovation</a>, <a href=\"#\">#trends</a>
              </p>
            </div>
    
    
            <div class=\"pt-5\">
              <h3 class=\"mb-5\">1 Comments</h3>
              <ul class=\"comment-list\">
                <li class=\"comment\">
                  <div class=\"vcard bio\">
                    <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/person_1.jpg"), "html", null, true);
        echo "\" alt=\"Image\">
                  </div>
                  <div class=\"comment-body\">
                    <h3>Jean Doe</h3>
                    <div class=\"meta\">January 9, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus,
                      ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum
                      impedit necessitatibus, nihil?</p>
                    <p><a href=\"#\" class=\"reply\">Reply</a></p>
                  </div>
                </li>
    
               
              </ul>
              <!-- END comment-list -->
    
              <div class=\"comment-form-wrap pt-5\">
                <h3 class=\"mb-5\">Leave a comment</h3>
                <form action=\"#\" class=\"p-5 bg-light\">
                  <div class=\"form-group\">
                    <label for=\"name\">Name *</label>
                    <input type=\"text\" class=\"form-control\" id=\"name\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"email\">Email *</label>
                    <input type=\"email\" class=\"form-control\" id=\"email\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"website\">Website</label>
                    <input type=\"url\" class=\"form-control\" id=\"website\">
                  </div>
    
                  <div class=\"form-group\">
                    <label for=\"message\">Message</label>
                    <textarea name=\"\" id=\"message\" cols=\"30\" rows=\"10\" class=\"form-control\"></textarea>
                  </div>
                  <div class=\"form-group\">
                    <input type=\"submit\" value=\"Post Comment\" class=\"btn btn-primary\">
                  </div>
    
                </form>
              </div>
            </div>
    
          </div>
          <div class=\"col-md-4 sidebar\">
            <div class=\"sidebar-box\">
              <form action=\"#\" class=\"search-form\">
                <div class=\"form-group\">
                  <span class=\"icon fa fa-search\"></span>
                  <input type=\"text\" class=\"form-control\" placeholder=\"Type a keyword and hit enter\">
                </div>
              </form>
            </div>
            
            <div class=\"sidebar-box\">
              <img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/person_1.jpg"), "html", null, true);
        echo "\" alt=\"Image placeholder\" class=\"img-fluid mb-4\">
              <h3>About The Author</h3>
              <p>ADMIN</p>
            </div>

          </div>
        </div>
      </div>
    </section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "actualite/show.html.twig";
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
        return array (  199 => 100,  140 => 44,  122 => 29,  104 => 14,  100 => 13,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}

{% block title %}Actualite{% endblock %}

{% block body %}
  
    <div class=\"site-blocks-cover overlay\" style=\"background-image: url('{{ asset('images/' ~ actualite.img) }}');\" data-aos=\"fade\">
      <div class=\"container\">
        <div class=\"row align-items-center justify-content-center\">
    
    
          <div class=\"col-md-12 mt-lg-5 text-center\">
            <h1>{{actualite.title}}</h1>
            <p class=\"post-meta\">{{actualite.dt|date('Y-m-d')}} &bull; Posted by ADMIN 
            </p>
    
          </div>
    
        </div>
      </div>
    </div>
    
    
    
    <section class=\"site-section\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-8 blog-content\">
            <p class=\"lead\">{{actualite.description}}</p>

            <div class=\"pt-5\">
              
              <p>
                Tags: <a href=\"#\">#Innovation</a>, <a href=\"#\">#trends</a>
              </p>
            </div>
    
    
            <div class=\"pt-5\">
              <h3 class=\"mb-5\">1 Comments</h3>
              <ul class=\"comment-list\">
                <li class=\"comment\">
                  <div class=\"vcard bio\">
                    <img src=\"{{asset('images/person_1.jpg')}}\" alt=\"Image\">
                  </div>
                  <div class=\"comment-body\">
                    <h3>Jean Doe</h3>
                    <div class=\"meta\">January 9, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus,
                      ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum
                      impedit necessitatibus, nihil?</p>
                    <p><a href=\"#\" class=\"reply\">Reply</a></p>
                  </div>
                </li>
    
               
              </ul>
              <!-- END comment-list -->
    
              <div class=\"comment-form-wrap pt-5\">
                <h3 class=\"mb-5\">Leave a comment</h3>
                <form action=\"#\" class=\"p-5 bg-light\">
                  <div class=\"form-group\">
                    <label for=\"name\">Name *</label>
                    <input type=\"text\" class=\"form-control\" id=\"name\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"email\">Email *</label>
                    <input type=\"email\" class=\"form-control\" id=\"email\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"website\">Website</label>
                    <input type=\"url\" class=\"form-control\" id=\"website\">
                  </div>
    
                  <div class=\"form-group\">
                    <label for=\"message\">Message</label>
                    <textarea name=\"\" id=\"message\" cols=\"30\" rows=\"10\" class=\"form-control\"></textarea>
                  </div>
                  <div class=\"form-group\">
                    <input type=\"submit\" value=\"Post Comment\" class=\"btn btn-primary\">
                  </div>
    
                </form>
              </div>
            </div>
    
          </div>
          <div class=\"col-md-4 sidebar\">
            <div class=\"sidebar-box\">
              <form action=\"#\" class=\"search-form\">
                <div class=\"form-group\">
                  <span class=\"icon fa fa-search\"></span>
                  <input type=\"text\" class=\"form-control\" placeholder=\"Type a keyword and hit enter\">
                </div>
              </form>
            </div>
            
            <div class=\"sidebar-box\">
              <img src=\"{{asset('images/person_1.jpg')}}\" alt=\"Image placeholder\" class=\"img-fluid mb-4\">
              <h3>About The Author</h3>
              <p>ADMIN</p>
            </div>

          </div>
        </div>
      </div>
    </section>
{% endblock %}
", "actualite/show.html.twig", "C:\\Users\\Y055r1\\Desktop\\safe-spot-main\\templates\\actualite\\show.html.twig");
    }
}
