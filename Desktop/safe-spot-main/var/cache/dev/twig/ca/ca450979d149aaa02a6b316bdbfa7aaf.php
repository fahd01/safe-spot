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

/* front.html.twig */
class __TwigTemplate_20c73fb863c09832e08544417a07b906 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
  <head>
    <title>Safe Spot &mdash; Banking Re-invented</title>
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/safe-spot-192x192.png"), "html", null, true);
        echo "\"/>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    ";
        // line 9
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 29
        echo "  </head>
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
   
    
    <header class=\"site-navbar js-sticky-header site-navbar-target\" role=\"banner\">

      <div class=\"container\">
        <div class=\"row align-items-center\">
          
          <div class=\"col-6 col-xl-2\">
            <h1 class=\"mb-0 site-logo\"><a href=\"index.html\" class=\"h2 mb-0\">Safe Spot<span class=\"text-primary\">.</span> </a></h1>
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
                <li><a href=\"/login\" class=\"nav-link\">Log in</a></li>
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

  ";
        // line 107
        $this->displayBlock('body', $context, $blocks);
        // line 900
        echo "
    
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
        // line 965
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 966
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-ui.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 967
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 968
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 969
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 970
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.countdown.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 971
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 972
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/aos.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 973
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.fancybox.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 974
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 975
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>

  
  <script src=\"";
        // line 978
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>

  
  </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 10
        echo "    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"fonts/icomoon/style.css\">

    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery-ui.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.theme.default.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.theme.default.min.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jquery.fancybox.min.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-datepicker.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts/flaticon/font/flaticon.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/aos.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 107
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 108
        echo "     
    <div class=\"site-blocks-cover overlay\" style=\"background-image: url(images/hero_2.jpg);\" data-aos=\"fade\" id=\"home-section\">

      <div class=\"container\">
        <div class=\"row align-items-center justify-content-center\">

          
          <div class=\"col-md-10 mt-lg-5 text-center\">
            <div class=\"single-text owl-carousel\">
              <div class=\"slide\">
                <h1 class=\"text-uppercase\" data-aos=\"fade-up\">Banking Solutions</h1>
                <p class=\"mb-5 desc\"  data-aos=\"fade-up\" data-aos-delay=\"100\">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Repudiandae minima delectus accusamus accusantium deleniti libero excepturi porro illo.
                </p>
                <div data-aos=\"fade-up\" data-aos-delay=\"100\">
                  <a href=\"#\" target=\"_blank\" class=\"btn  btn-primary mr-2 mb-2\">Get In Touch</a>
                </div>
              </div>

              <div class=\"slide\">
                <h1 class=\"text-uppercase\" data-aos=\"fade-up\">Financing Solutions</h1>
                <p class=\"mb-5 desc\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Repudiandae minima delectus accusamus accusantium deleniti libero excepturi porro illo.
                </p>
                <div data-aos=\"fade-up\" data-aos-delay=\"100\">
                  <a href=\"#\" target=\"_blank\" class=\"btn  btn-primary mr-2 mb-2\">Get In Touch</a>
                </div>
              </div>

              <div class=\"slide\">
                <h1 class=\"text-uppercase\" data-aos=\"fade-up\">Savings Accounts</h1>
                <p class=\"mb-5 desc\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Repudiandae minima delectus accusamus accusantium deleniti libero excepturi porro illo.
                </p>
                <div data-aos=\"fade-up\" data-aos-delay=\"100\">
                  <a href=\"#\" target=\"_blank\" class=\"btn  btn-primary mr-2 mb-2\">Get In Touch</a>
                </div>
              </div>

              <div class=\"slide\">
                <h1 class=\"text-uppercase\" data-aos=\"fade-up\">P2P Loans</h1>
                <p class=\"mb-5 desc\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Repudiandae minima delectus accusamus accusantium deleniti libero excepturi porro illo.
                </p>
                <div data-aos=\"fade-up\" data-aos-delay=\"100\">
                  <a href=\"#\" target=\"_blank\" class=\"btn  btn-primary mr-2 mb-2\">Get In Touch</a>
                </div>
              </div>

            </div>
          </div>
            
        </div>
      </div>

      <a href=\"#next\" class=\"mouse smoothscroll\">
        <span class=\"mouse-icon\">
          <span class=\"mouse-wheel\"></span>
        </span>
      </a>
    </div>  


    <div class=\"site-section cta-big-image\" id=\"about-section\">
      <div class=\"container\">
        <div class=\"row mb-5 justify-content-center\">
          <div class=\"col-md-8 text-center\">
            <h2 class=\"section-title mb-3\" data-aos=\"fade-up\" data-aos-delay=\"\">About Us</h2>
            <p class=\"lead\" data-aos=\"fade-up\" data-aos-delay=\"100\">
              At our core, we are dedicated to empowering individuals through innovative financial solutions tailored to your needs.
            </p>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-6 mb-5\" data-aos=\"fade-up\" data-aos-delay=\"\">
            <figure class=\"circle-bg\">
            <img src=\"images/img_2.jpg\" alt=\"TODO inset alt\" class=\"img-fluid\">
            </figure>
          </div>
          <div class=\"col-lg-5 ml-auto\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            
            <h3 class=\"text-black mb-4\">We Solve Your Financial Problem</h3>
            <p>From innovative peer-to-peer lending options, to seamless credit card features, our platform empowers you to take control of your finances with confidence.</p>
            <p>With user-friendly interfaces and robust security measures, we ensure that managing your money is both convenient and secure. Whether you're saving for the future, investing in your goals, or simply managing day-to-day expenses.</p>
            <p>Welcome to a banking experience where your financial well-being is our top priority.</p>
          </div>
        </div>    
        
      </div>  
    </div>

    <div class=\"site-section\" id=\"next\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col-md-4 text-center\" data-aos=\"fade-up\" data-aos-delay=\"\">
            <img src=\"images/flaticon-svg/svg/001-wallet.svg\" alt=\"TODO inset alt\" class=\"img-fluid w-25 mb-4\">
            <h3 class=\"card-title\">Money Savings</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
          <div class=\"col-md-4 text-center\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <img src=\"images/flaticon-svg/svg/004-cart.svg\" alt=\"TODO inset alt\" class=\"img-fluid w-25 mb-4\">
            <h3 class=\"card-title\">Online Shoppings</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
          <div class=\"col-md-4 text-center\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <img src=\"images/flaticon-svg/svg/006-credit-card.svg\" alt=\"TODO inset alt\" class=\"img-fluid w-25 mb-4\">
            <h3 class=\"card-title\">Credit / Debit Cards</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>

        </div>

        <div class=\"row\">
          <div class=\"col-lg-6 mb-5\" data-aos=\"fade-up\" data-aos-delay=\"\">
            <figure class=\"circle-bg\">
            <img src=\"images/about_2.jpg\" alt=\"TODO inset alt\" class=\"img-fluid\">
            </figure>
          </div>
          <div class=\"col-lg-5 ml-auto\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"mb-4\">
              <h3 class=\"h3 mb-4 text-black\">Banking Solutions Is Our Priority</h3>
              <p>
                A comprehensive, all encompassing solution, you won't need any external resource or tool.
                We offer:
              </p>
              
            </div>
              
            <div class=\"mb-4\">
              <ul class=\"list-unstyled ul-check success\">
                <li>Debit, Credit and Savings Accounts</li>
                <li>Credit Cards</li>
                <li>Peer-to-Peer Loans</li>
                <li>Investment Management</li>
              </ul>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    

    
    <section class=\"site-section border-bottom\" id=\"team-section\">
      <div class=\"container\">
        <div class=\"row mb-5 justify-content-center\">
          <div class=\"col-md-8 text-center\">
            <h2 class=\"section-title mb-3\" data-aos=\"fade-up\" data-aos-delay=\"\">Meet Team</h2>
            <p class=\"lead\" data-aos=\"fade-up\" data-aos-delay=\"100\">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-6 col-lg-4 mb-4\" data-aos=\"fade-up\" data-aos-delay=\"\">
            <div class=\"team-member\">
              <figure>
                <ul class=\"social\">
                  <li><a href=\"#\"><span class=\"icon-facebook\"></span></a></li>
                  <li><a href=\"#\"><span class=\"icon-twitter\"></span></a></li>
                  <li><a href=\"#\"><span class=\"icon-linkedin\"></span></a></li>
                  <li><a href=\"#\"><span class=\"icon-instagram\"></span></a></li>
                </ul>
                <img src=\"images/person_1.jpg\" alt=\"Image\" class=\"img-fluid\">
              </figure>
              <div class=\"p-3\">
                <h3>Kaiara Spencer</h3>
                <span class=\"position\">Accountant</span>
              </div>
            </div>
          </div>

          <div class=\"col-md-6 col-lg-4 mb-4\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"team-member\">
              <figure>
                <ul class=\"social\">
                  <li><a href=\"#\"><span class=\"icon-facebook\"></span></a></li>
                  <li><a href=\"#\"><span class=\"icon-twitter\"></span></a></li>
                  <li><a href=\"#\"><span class=\"icon-linkedin\"></span></a></li>
                  <li><a href=\"#\"><span class=\"icon-instagram\"></span></a></li>
                </ul>
                <img src=\"images/person_2.jpg\" alt=\"Image\" class=\"img-fluid\">
              </figure>
              <div class=\"p-3\">
                <h3>Dave Simpson</h3>
                <span class=\"position\">Bank Teller</span>
              </div>
            </div>
          </div>

          <div class=\"col-md-6 col-lg-4 mb-4\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"team-member\">
              <figure>
                <ul class=\"social\">
                  <li><a href=\"#\"><span class=\"icon-facebook\"></span></a></li>
                  <li><a href=\"#\"><span class=\"icon-twitter\"></span></a></li>
                  <li><a href=\"#\"><span class=\"icon-linkedin\"></span></a></li>
                  <li><a href=\"#\"><span class=\"icon-instagram\"></span></a></li>
                </ul>
                <img src=\"images/person_3.jpg\" alt=\"Image\" class=\"img-fluid\">
              </figure>
              <div class=\"p-3\">
                <h3>Ben Thompson</h3>
                <span class=\"position\">Bank Teller</span>
              </div>
            </div>
          </div>

          
          
        </div>
      </div>
    </section>

    <!--
    <section class=\"site-section\" id=\"gallery-section\" data-aos=\"fade\">
      <div class=\"container\">
        <div class=\"row mb-3\">
          <div class=\"col-12 text-center\">
            <h2 class=\"section-title mb-3\">Gallery</h2>
          </div>
        </div>
        <div id=\"posts\" class=\"row no-gutter\">
          <div class=\"item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4\">
            <a href=\"images/img_1.jpg\" class=\"item-wrap fancybox\">
              <span class=\"icon-search2\"></span>
              <img class=\"img-fluid\" src=\"images/img_1.jpg\">
            </a>
          </div>
          <div class=\"item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4\">
            <a href=\"images/img_2.jpg\" class=\"item-wrap fancybox\" data-fancybox=\"gallery2\">
              <span class=\"icon-search2\"></span>
              <img class=\"img-fluid\" src=\"images/img_2.jpg\">
            </a>
          </div>
          <div class=\"item brand col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4\">
            <a href=\"images/img_3.jpg\" class=\"item-wrap fancybox\" data-fancybox=\"gallery2\">
              <span class=\"icon-search2\"></span>
              <img class=\"img-fluid\" src=\"images/img_3.jpg\">
            </a>
          </div>
          <div class=\"item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4\">
            <a href=\"images/img_4.jpg\" class=\"item-wrap fancybox\" data-fancybox=\"gallery2\">
              <span class=\"icon-search2\"></span>
              <img class=\"img-fluid\" src=\"images/img_4.jpg\">
            </a>
          </div>
          <div class=\"item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4\">
            <a href=\"images/img_5.jpg\" class=\"item-wrap fancybox\" data-fancybox=\"gallery2\">
              <span class=\"icon-search2\"></span>
              <img class=\"img-fluid\" src=\"images/img_5.jpg\">
            </a>
          </div>
          <div class=\"item brand col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4\">
            <a href=\"images/img_1.jpg\" class=\"item-wrap fancybox\" data-fancybox=\"gallery2\">
              <span class=\"icon-search2\"></span>
              <img class=\"img-fluid\" src=\"images/img_1.jpg\">
            </a>
          </div>
          <div class=\"item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4\">
            <a href=\"images/img_2.jpg\" class=\"item-wrap fancybox\" data-fancybox=\"gallery2\">
              <span class=\"icon-search2\"></span>
              <img class=\"img-fluid\" src=\"images/img_2.jpg\">
            </a>
          </div>
          <div class=\"item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4\">
            <a href=\"images/img_3.jpg\" class=\"item-wrap fancybox\" data-fancybox=\"gallery2\">
              <span class=\"icon-search2\"></span>
              <img class=\"img-fluid\" src=\"images/img_3.jpg\">
            </a>
          </div>
          <div class=\"item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4\">
            <a href=\"images/img_4.jpg\" class=\"item-wrap fancybox\" data-fancybox=\"gallery2\">
              <span class=\"icon-search2\"></span>
              <img class=\"img-fluid\" src=\"images/img_4.jpg\">
            </a>
          </div>
          <div class=\"item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4\">
            <a href=\"images/img_5.jpg\" class=\"item-wrap fancybox\" data-fancybox=\"gallery2\">
              <span class=\"icon-search2\"></span>
              <img class=\"img-fluid\" src=\"images/img_5.jpg\">
            </a>
          </div>
          <div class=\"item brand col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4\">
            <a href=\"images/img_1.jpg\" class=\"item-wrap fancybox\" data-fancybox=\"gallery2\">
              <span class=\"icon-search2\"></span>
              <img class=\"img-fluid\" src=\"images/img_1.jpg\">
            </a>
          </div>
          <div class=\"item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4\">
            <a href=\"images/img_2.jpg\" class=\"item-wrap fancybox\" data-fancybox=\"gallery2\">
              <span class=\"icon-search2\"></span>
              <img class=\"img-fluid\" src=\"images/img_2.jpg\">
            </a>
          </div>
        </div>
      </div>
    </section>
    -->

    <section class=\"site-section\">
      <div class=\"container\">

        <div class=\"row mb-5 justify-content-center\">
          <div class=\"col-md-7 text-center\">
            <h2 class=\"section-title mb-3\" data-aos=\"fade-up\" data-aos-delay=\"\">How It Works</h2>
            <p class=\"lead\" data-aos=\"fade-up\" data-aos-delay=\"100\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas fugiat molestiae eligendi repudiandae error?</p>
          </div>
        </div>
        
        <div class=\"row align-items-lg-center\" >
          <div class=\"col-lg-6 mb-5\" data-aos=\"fade-up\" data-aos-delay=\"\">

            <div class=\"owl-carousel slide-one-item-alt\">
              <img src=\"images/img_1.jpg\" alt=\"Image\" class=\"img-fluid\">
              <img src=\"images/img_2.jpg\" alt=\"Image\" class=\"img-fluid\">
              <img src=\"images/img_3.jpg\" alt=\"Image\" class=\"img-fluid\">
            </div>
            <div class=\"custom-direction\">
              <a href=\"#\" class=\"custom-prev\"><span><span class=\"icon-keyboard_backspace\"></span></span></a><a href=\"#\" class=\"custom-next\"><span><span class=\"icon-keyboard_backspace\"></span></span></a>
            </div>

          </div>
          <div class=\"col-lg-5 ml-auto\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            
            <div class=\"owl-carousel slide-one-item-alt-text\">
              <div>
                <h2 class=\"section-title mb-3\">01. Online Applications</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque nisi, deserunt necessitatibus odio magnam nihil illum
                  neque voluptas?</p>

                <p><a href=\"#\" class=\"btn btn-primary mr-2 mb-2\">Learn More</a></p>
              </div>
              <div>
                <h2 class=\"section-title mb-3\">02. Get an approval</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque nisi, deserunt necessitatibus odio magnam nihil illum neque voluptas?</p>
                <p><a href=\"#\" class=\"btn btn-primary mr-2 mb-2\">Learn More</a></p>
              </div>
              <div>
                <h2 class=\"section-title mb-3\">03. Card delivery</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore sapiente labore eius ullam? Iusto?</p>

                <p><a href=\"#\" class=\"btn btn-primary mr-2 mb-2\">Learn More</a></p>
              </div>
              
            </div>
            
          </div>
        </div>
      </div>
    </section>

    
    

    <section class=\"site-section border-bottom bg-light\" id=\"services-section\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col-12 text-center\" data-aos=\"fade\">
            <h2 class=\"section-title mb-3\">Our Services</h2>
          </div>
        </div>
        <div class=\"row align-items-stretch\">
          <div class=\"col-md-6 col-lg-4 mb-4 mb-lg-4\" data-aos=\"fade-up\">
            <div class=\"unit-4\">
              <div class=\"unit-4-icon\">
                <img src=\"images/flaticon-svg/svg/001-wallet.svg\" alt=\"TODO inset alt\" class=\"img-fluid w-25 mb-4\">
              </div>
              <div>
                <h3>Business Consulting</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione animi tempora sint hic quod!</p>
                <p><a href=\"#\">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-4 mb-4 mb-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"unit-4\">
              <div class=\"unit-4-icon\">
                <img src=\"images/flaticon-svg/svg/006-credit-card.svg\" alt=\"TODO inset alt\" class=\"img-fluid w-25 mb-4\">
              </div>
              <div>
                <h3>Credit Card</h3>
                <p>
                  Our credit cards also come with a range of perks and rewards, from cashback offers and travel benefits to exclusive discounts and access to VIP events. With every purchase, you're one step closer to unlocking exciting rewards and maximizing the value of your spending.
                  Whether you're looking to build credit, manage expenses, or take advantage of exclusive benefits, our credit cards are the perfect companion for your financial journey. Join us today and experience the freedom and flexibility of our credit card feature. Your financial possibilities are limitless – let us help you reach them.
                </p>
                <p><a href=\"#\">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-4 mb-4 mb-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"unit-4\">
              <div class=\"unit-4-icon\">
                <img src=\"images/flaticon-png/png/savings-jar.png\" alt=\"TODO inset alt\" class=\"img-fluid w-25 mb-4\">
              </div>

              <div>
                  <h3>Savings</h3>
                  <p>
                    We understand that saving is not just about setting money aside – it's about achieving your dreams and securing your future. That's why our app provides personalized insights and recommendations to help you make the most of your savings journey.
                    Join us today and experience the power of smart savings with our banking app. Your financial goals are within reach – let us help you get there.
                  </p>
                  <p>
                    <a href=\"#\">Learn more</a>
                  </p>
              </div>
            </div>
          </div>


          <div class=\"col-md-6 col-lg-4 mb-4 mb-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"\">
            <div class=\"unit-4\">
              <div class=\"unit-4-icon\">
                <img src=\"images/flaticon-svg/svg/003-notes.svg\" alt=\"TODO inset alt\" class=\"img-fluid w-25 mb-4\">
              </div>
              <div>
                <h3>Insurance Consulting</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia labore suscipit distinctio inventore doloribus deserunt!</p>
                <p><a href=\"#\">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-4 mb-4 mb-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"unit-4\">
              <div class=\"unit-4-icon\">
                <img src=\"images/flaticon-svg/svg/004-cart.svg\" alt=\"TODO inset alt\" class=\"img-fluid w-25 mb-4\">
              </div>
              <div>
                <h3>Financial Investment</h3>
                <p>
                  At the heart of our platform is a commitment to transparency, security, and performance. We leverage cutting-edge technology and rigorous risk management protocols to safeguard your investments and maximize returns.
                  Join us today and unlock the potential of your money with our investment feature. Your financial journey begins here – let us help you make it extraordinary.
                </p>
                <p><a href=\"#\">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-4 mb-4 mb-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"unit-4\">
              <div class=\"unit-4-icon\">
                <img src=\"./images/flaticon-png/png/loan.png\" alt=\"Loan Management\" class=\"img-fluid w-25 mb-4\">
              </div>
              <div>
                  <h3>P2P Loan Management</h3>
                  <p>
                    With our peer-to-peer lending feature, borrowing becomes a conversation, where investors connect directly with borrowers, cutting out the middleman. Our peer-to-peer lending feature fosters a community of trust, transparency, and mutual benefit. Whether you're a borrower seeking flexible terms or an investor looking for rewarding opportunities.
                  </p>
                  <p>
                    <a href=\"#collapseExample\">Learn more</a>
                  </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class=\"site-section testimonial-wrap\" id=\"testimonials-section\" data-aos=\"fade\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col-12 text-center\">
            <h2 class=\"section-title mb-3\">Happy Customers</h2>
          </div>
        </div>
      </div>
      <div class=\"slide-one-item home-slider owl-carousel\">
          <div>
            <div class=\"testimonial\">
              
              <blockquote class=\"mb-5\">
                <p>
                  &ldquo;
                  I've been using the banking app for a while now, and I'm truly impressed with its user-friendly interface and seamless functionality. Managing my finances has never been easier!
                  &rdquo;
                </p>
              </blockquote>

              <figure class=\"mb-4 d-flex align-items-center justify-content-center\">
                <div><img src=\"images/person_1.jpg\" alt=\"Image\" class=\"w-50 img-fluid mb-3\"></div>
                <p>John Smith</p>
              </figure>
            </div>
          </div>
          <div>
            <div class=\"testimonial\">

              <blockquote class=\"mb-5\">
                <p>
                  &ldquo;
                  The peer-to-peer lending feature is a game-changer! It allowed me to borrow money at competitive rates while connecting me directly with investors. It's a win-win for everyone involved.
                  &rdquo;
                </p>
              </blockquote>
              <figure class=\"mb-4 d-flex align-items-center justify-content-center\">
                <div><img src=\"images/person_2.jpg\" alt=\"Image\" class=\"w-50 img-fluid mb-3\"></div>
                <p>Christine Aguilar</p>
              </figure>
              
            </div>
          </div>

          <div>
            <div class=\"testimonial\">

              <blockquote class=\"mb-5\">
                <p>
                  &ldquo;
                  I appreciate the transparency and security measures implemented in the investment feature. I feel confident making investment decisions knowing that my financial data is protected and that I have access to expert insights every step of the way.
                  &rdquo;
                </p>
              </blockquote>
              <figure class=\"mb-4 d-flex align-items-center justify-content-center\">
                <div><img src=\"images/person_3.jpg\" alt=\"Image\" class=\"w-50 img-fluid mb-3\"></div>
                <p>Robert Spears</p>
              </figure>

              
            </div>
          </div>

          <div>
            <div class=\"testimonial\">

              <blockquote class=\"mb-5\">
                <p>
                  &ldquo;
                  Using the credit card feature has simplified my transactions and provided me with valuable rewards. The peace of mind knowing that my purchases are secure and that I can easily track my expenses is invaluable. Thank you for making banking convenient and rewarding!
                  &rdquo;
                </p>
              </blockquote>
              <figure class=\"mb-4 d-flex align-items-center justify-content-center\">
                <div><img src=\"images/person_1.jpg\" alt=\"Image\" class=\"w-50 img-fluid mb-3\"></div>
                <p>Bruce Rogers</p>
              </figure>

            </div>
          </div>

        </div>
    </section>

    <section class=\"site-section bg-light\" id=\"pricing-section\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col-12 text-center\" data-aos=\"fade-up\">
            <h2 class=\"section-title mb-3\">Pricing</h2>
          </div>
        </div>
        <div class=\"row mb-5\">
          <div class=\"col-md-6 mb-4 mb-lg-0 col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"\">
            <div class=\"pricing\">
              <h3 class=\"text-center text-black\">Basic</h3>
              <div class=\"price text-center mb-4 \">
                <span><span>\$47</span> / year</span>
              </div>
              <ul class=\"list-unstyled ul-check success mb-5\">
                
                <li>Officia quaerat eaque neque</li>
                <li>Possimus aut consequuntur incidunt</li>
                <li class=\"remove\">Lorem ipsum dolor sit amet</li>
                <li class=\"remove\">Consectetur adipisicing elit</li>
                <li class=\"remove\">Dolorum esse odio quas architecto sint</li>
              </ul>
              <p class=\"text-center\">
                <a href=\"#\" class=\"btn btn-secondary\">Buy Now</a>
              </p>
            </div>
          </div>

          <div class=\"col-md-6 mb-4 mb-lg-0 col-lg-4 pricing-popular\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"pricing\">
              <h3 class=\"text-center text-black\">Premium</h3>
              <div class=\"price text-center mb-4 \">
                <span><span>\$200</span> / year</span>
              </div>
              <ul class=\"list-unstyled ul-check success mb-5\">
                
                <li>Officia quaerat eaque neque</li>
                <li>Possimus aut consequuntur incidunt</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipisicing elit</li>
                <li class=\"remove\">Dolorum esse odio quas architecto sint</li>
              </ul>
              <p class=\"text-center\">
                <a href=\"#\" class=\"btn btn-primary\">Buy Now</a>
              </p>
            </div>
          </div>

          <div class=\"col-md-6 mb-4 mb-lg-0 col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"pricing\">
              <h3 class=\"text-center text-black\">Professional</h3>
              <div class=\"price text-center mb-4 \">
                <span><span>\$750</span> / year</span>
              </div>
              <ul class=\"list-unstyled ul-check success mb-5\">
                
                <li>Officia quaerat eaque neque</li>
                <li>Possimus aut consequuntur incidunt</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipisicing elit</li>
                <li>Dolorum esse odio quas architecto sint</li>
              </ul>
              <p class=\"text-center\">
                <a href=\"#\" class=\"btn btn-secondary\">Buy Now</a>
              </p>
            </div>
          </div>
        </div>
        
        <div class=\"row site-section\" id=\"faq-section\">
          <div class=\"col-12 text-center\" data-aos=\"fade\">
            <h2 class=\"section-title\">Frequently Ask Questions</h2>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-6\">
            
            <div class=\"mb-5\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <h3 class=\"text-black h4 mb-4\">Can I accept both Paypal and Stripe?</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
            
            <div class=\"mb-5\" data-aos=\"fade-up\" data-aos-delay=\"100\">
              <h3 class=\"text-black h4 mb-4\">What available is refund period?</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>

            <div class=\"mb-5\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <h3 class=\"text-black h4 mb-4\">Can I accept both Paypal and Stripe?</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
            
            <div class=\"mb-5\" data-aos=\"fade-up\" data-aos-delay=\"100\">
              <h3 class=\"text-black h4 mb-4\">What available is refund period?</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
          </div>
          <div class=\"col-lg-6\">

            <div class=\"mb-5\" data-aos=\"fade-up\" data-aos-delay=\"100\">
              <h3 class=\"text-black h4 mb-4\">Where are you from?</h3>
              <p>Voluptatum nobis obcaecati perferendis dolor totam unde dolores quod maxime corporis officia et. Distinctio assumenda minima maiores.</p>
            </div>
            
            <div class=\"mb-5\" data-aos=\"fade-up\" data-aos-delay=\"100\">
              <h3 class=\"text-black h4 mb-4\">What is your opening time?</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>

            <div class=\"mb-5\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <h3 class=\"text-black h4 mb-4\">Can I accept both Paypal and Stripe?</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
            
            <div class=\"mb-5\" data-aos=\"fade-up\" data-aos-delay=\"100\">
              <h3 class=\"text-black h4 mb-4\">What available is refund period?</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class=\"site-section\" id=\"about-section\">
      <div class=\"container\">

        <div class=\"row\">
          <div class=\"col-lg-6 mb-5\" data-aos=\"fade-up\" data-aos-delay=\"\">
            <figure class=\"circle-bg\">
            <img src=\"images/img_4.jpg\" alt=\"TODO inset alt\" class=\"img-fluid\">
            </figure>
          </div>
          <div class=\"col-lg-5 ml-auto\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            

            <div class=\"row\">

              
              
              <div class=\"col-12 mb-4\" data-aos=\"fade-up\" data-aos-delay=\"\">
                <div class=\"unit-4 d-flex\">
                  <div class=\"unit-4-icon mr-4 mb-3\"><span class=\"text-primary flaticon-head\"></span></div>
                  <div>
                    <h3>Bank Loan</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class=\"mb-0\"><a href=\"#\">Learn More</a></p>
                  </div>
                </div>
              </div>
              <div class=\"col-12 mb-4\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                <div class=\"unit-4 d-flex\">
                  <div class=\"unit-4-icon mr-4 mb-3\"><span class=\"text-primary flaticon-smartphone\"></span></div>
                  <div>
                    <h3>Banking Consulation </h3>
                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    <p class=\"mb-0\"><a href=\"#\">Learn More</a></p>
                  </div>
                </div>
              </div>
            </div>


            
          </div>
        </div>

        
      </div>
    </section>
  
    
    

    <section class=\"site-section\" id=\"blog-section\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col-12 text-center\" data-aos=\"fade\">
            <h2 class=\"section-title mb-3\">Our Actualite</h2>
          </div>
        </div>

        <div class=\"row\">
        ";
        // line 836
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["actualites"]) || array_key_exists("actualites", $context) ? $context["actualites"] : (function () { throw new RuntimeError('Variable "actualites" does not exist.', 836, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["actualite"]) {
            // line 837
            echo "          <div class=\"col-md-6 col-lg-4 mb-4 mb-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"\">
            <div class=\"h-entry\">
              <a href=\"article-1.html\">
                <img src=\"images/img_1.jpg\" alt=\"Image\" class=\"img-fluid\">
              </a>
              <h2 class=\"font-size-regular\"><a href=\"./article-1.html\">";
            // line 842
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "title", [], "any", false, false, false, 842), "html", null, true);
            echo "</a></h2>
              <div class=\"meta mb-4\">ADMIN <span class=\"mx-2\">&bullet;</span> ";
            // line 843
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "dt", [], "any", false, false, false, 843), "Y-m-d"), "html", null, true);
            echo "<span class=\"mx-2\">&bullet;</span> <a href=\"#\">News</a></div>
              <p>";
            // line 844
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actualite"], "Description", [], "any", false, false, false, 844), "html", null, true);
            echo "</p>
              <p><a href=\"";
            // line 845
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_actualite_show", ["id" => twig_get_attribute($this->env, $this->source, $context["actualite"], "id", [], "any", false, false, false, 845)]), "html", null, true);
            echo "\">Continue Reading...</a></p>
            </div> 
          </div>
          
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actualite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 850
        echo "        </div>

      </div>
    </section>

 


    <section class=\"site-section bg-light\" id=\"contact-section\" data-aos=\"fade\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col-12 text-center\">
            <h2 class=\"section-title mb-3\">Contact Us</h2>
          </div>
        </div>
        <div class=\"row mb-5\">
          


          <div class=\"col-md-4 text-center\">
            <p class=\"mb-4\">
              <span class=\"icon-room d-block h2 text-primary\"></span>
              <span>203 Fake St. Mountain View, San Francisco, California, USA</span>
            </p>
          </div>
          <div class=\"col-md-4 text-center\">
            <p class=\"mb-4\">
              <span class=\"icon-phone d-block h2 text-primary\"></span>
              <a href=\"#\">+1 232 3235 324</a>
            </p>
          </div>
          <div class=\"col-md-4 text-center\">
            <p class=\"mb-0\">
              <span class=\"icon-mail_outline d-block h2 text-primary\"></span>
              <a href=\"#\">info@safe-spot.com</a>
            </p>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-12 mb-5\">

            

             ";
        // line 893
        echo twig_include($this->env, $context, "reclamation/_form.html.twig");
        echo "
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
        return "front.html.twig";
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
        return array (  1157 => 893,  1112 => 850,  1101 => 845,  1097 => 844,  1093 => 843,  1089 => 842,  1082 => 837,  1078 => 836,  348 => 108,  338 => 107,  326 => 27,  321 => 25,  316 => 23,  311 => 21,  306 => 19,  301 => 17,  297 => 16,  293 => 15,  289 => 14,  285 => 13,  280 => 10,  270 => 9,  255 => 978,  249 => 975,  245 => 974,  241 => 973,  237 => 972,  233 => 971,  229 => 970,  225 => 969,  221 => 968,  217 => 967,  213 => 966,  209 => 965,  142 => 900,  140 => 107,  60 => 29,  58 => 9,  51 => 5,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
  <head>
    <title>Safe Spot &mdash; Banking Re-invented</title>
    <link rel=\"icon\" type=\"image/png\" href=\"{{asset('images/safe-spot-192x192.png')}}\"/>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    {% block stylesheet %}
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"fonts/icomoon/style.css\">

    <link rel=\"stylesheet\" href=\"{{asset('css/bootstrap.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/jquery-ui.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/owl.carousel.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/owl.theme.default.min.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset('css/owl.theme.default.min.css')}}\">

    <link rel=\"stylesheet\" href=\"{{asset('css/jquery.fancybox.min.css')}}\">

    <link rel=\"stylesheet\" href=\"{{asset('css/bootstrap-datepicker.css')}}\">

    <link rel=\"stylesheet\" href=\"{{asset('fonts/flaticon/font/flaticon.css')}}\">

    <link rel=\"stylesheet\" href=\"{{asset('css/aos.css')}}\">

    <link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\">
    {% endblock %}
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
   
    
    <header class=\"site-navbar js-sticky-header site-navbar-target\" role=\"banner\">

      <div class=\"container\">
        <div class=\"row align-items-center\">
          
          <div class=\"col-6 col-xl-2\">
            <h1 class=\"mb-0 site-logo\"><a href=\"index.html\" class=\"h2 mb-0\">Safe Spot<span class=\"text-primary\">.</span> </a></h1>
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
                <li><a href=\"/login\" class=\"nav-link\">Log in</a></li>
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

  {% block body %}
     
    <div class=\"site-blocks-cover overlay\" style=\"background-image: url(images/hero_2.jpg);\" data-aos=\"fade\" id=\"home-section\">

      <div class=\"container\">
        <div class=\"row align-items-center justify-content-center\">

          
          <div class=\"col-md-10 mt-lg-5 text-center\">
            <div class=\"single-text owl-carousel\">
              <div class=\"slide\">
                <h1 class=\"text-uppercase\" data-aos=\"fade-up\">Banking Solutions</h1>
                <p class=\"mb-5 desc\"  data-aos=\"fade-up\" data-aos-delay=\"100\">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Repudiandae minima delectus accusamus accusantium deleniti libero excepturi porro illo.
                </p>
                <div data-aos=\"fade-up\" data-aos-delay=\"100\">
                  <a href=\"#\" target=\"_blank\" class=\"btn  btn-primary mr-2 mb-2\">Get In Touch</a>
                </div>
              </div>

              <div class=\"slide\">
                <h1 class=\"text-uppercase\" data-aos=\"fade-up\">Financing Solutions</h1>
                <p class=\"mb-5 desc\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Repudiandae minima delectus accusamus accusantium deleniti libero excepturi porro illo.
                </p>
                <div data-aos=\"fade-up\" data-aos-delay=\"100\">
                  <a href=\"#\" target=\"_blank\" class=\"btn  btn-primary mr-2 mb-2\">Get In Touch</a>
                </div>
              </div>

              <div class=\"slide\">
                <h1 class=\"text-uppercase\" data-aos=\"fade-up\">Savings Accounts</h1>
                <p class=\"mb-5 desc\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Repudiandae minima delectus accusamus accusantium deleniti libero excepturi porro illo.
                </p>
                <div data-aos=\"fade-up\" data-aos-delay=\"100\">
                  <a href=\"#\" target=\"_blank\" class=\"btn  btn-primary mr-2 mb-2\">Get In Touch</a>
                </div>
              </div>

              <div class=\"slide\">
                <h1 class=\"text-uppercase\" data-aos=\"fade-up\">P2P Loans</h1>
                <p class=\"mb-5 desc\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Repudiandae minima delectus accusamus accusantium deleniti libero excepturi porro illo.
                </p>
                <div data-aos=\"fade-up\" data-aos-delay=\"100\">
                  <a href=\"#\" target=\"_blank\" class=\"btn  btn-primary mr-2 mb-2\">Get In Touch</a>
                </div>
              </div>

            </div>
          </div>
            
        </div>
      </div>

      <a href=\"#next\" class=\"mouse smoothscroll\">
        <span class=\"mouse-icon\">
          <span class=\"mouse-wheel\"></span>
        </span>
      </a>
    </div>  


    <div class=\"site-section cta-big-image\" id=\"about-section\">
      <div class=\"container\">
        <div class=\"row mb-5 justify-content-center\">
          <div class=\"col-md-8 text-center\">
            <h2 class=\"section-title mb-3\" data-aos=\"fade-up\" data-aos-delay=\"\">About Us</h2>
            <p class=\"lead\" data-aos=\"fade-up\" data-aos-delay=\"100\">
              At our core, we are dedicated to empowering individuals through innovative financial solutions tailored to your needs.
            </p>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-6 mb-5\" data-aos=\"fade-up\" data-aos-delay=\"\">
            <figure class=\"circle-bg\">
            <img src=\"images/img_2.jpg\" alt=\"TODO inset alt\" class=\"img-fluid\">
            </figure>
          </div>
          <div class=\"col-lg-5 ml-auto\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            
            <h3 class=\"text-black mb-4\">We Solve Your Financial Problem</h3>
            <p>From innovative peer-to-peer lending options, to seamless credit card features, our platform empowers you to take control of your finances with confidence.</p>
            <p>With user-friendly interfaces and robust security measures, we ensure that managing your money is both convenient and secure. Whether you're saving for the future, investing in your goals, or simply managing day-to-day expenses.</p>
            <p>Welcome to a banking experience where your financial well-being is our top priority.</p>
          </div>
        </div>    
        
      </div>  
    </div>

    <div class=\"site-section\" id=\"next\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col-md-4 text-center\" data-aos=\"fade-up\" data-aos-delay=\"\">
            <img src=\"images/flaticon-svg/svg/001-wallet.svg\" alt=\"TODO inset alt\" class=\"img-fluid w-25 mb-4\">
            <h3 class=\"card-title\">Money Savings</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
          <div class=\"col-md-4 text-center\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <img src=\"images/flaticon-svg/svg/004-cart.svg\" alt=\"TODO inset alt\" class=\"img-fluid w-25 mb-4\">
            <h3 class=\"card-title\">Online Shoppings</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
          <div class=\"col-md-4 text-center\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <img src=\"images/flaticon-svg/svg/006-credit-card.svg\" alt=\"TODO inset alt\" class=\"img-fluid w-25 mb-4\">
            <h3 class=\"card-title\">Credit / Debit Cards</h3>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>

        </div>

        <div class=\"row\">
          <div class=\"col-lg-6 mb-5\" data-aos=\"fade-up\" data-aos-delay=\"\">
            <figure class=\"circle-bg\">
            <img src=\"images/about_2.jpg\" alt=\"TODO inset alt\" class=\"img-fluid\">
            </figure>
          </div>
          <div class=\"col-lg-5 ml-auto\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"mb-4\">
              <h3 class=\"h3 mb-4 text-black\">Banking Solutions Is Our Priority</h3>
              <p>
                A comprehensive, all encompassing solution, you won't need any external resource or tool.
                We offer:
              </p>
              
            </div>
              
            <div class=\"mb-4\">
              <ul class=\"list-unstyled ul-check success\">
                <li>Debit, Credit and Savings Accounts</li>
                <li>Credit Cards</li>
                <li>Peer-to-Peer Loans</li>
                <li>Investment Management</li>
              </ul>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    

    
    <section class=\"site-section border-bottom\" id=\"team-section\">
      <div class=\"container\">
        <div class=\"row mb-5 justify-content-center\">
          <div class=\"col-md-8 text-center\">
            <h2 class=\"section-title mb-3\" data-aos=\"fade-up\" data-aos-delay=\"\">Meet Team</h2>
            <p class=\"lead\" data-aos=\"fade-up\" data-aos-delay=\"100\">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-6 col-lg-4 mb-4\" data-aos=\"fade-up\" data-aos-delay=\"\">
            <div class=\"team-member\">
              <figure>
                <ul class=\"social\">
                  <li><a href=\"#\"><span class=\"icon-facebook\"></span></a></li>
                  <li><a href=\"#\"><span class=\"icon-twitter\"></span></a></li>
                  <li><a href=\"#\"><span class=\"icon-linkedin\"></span></a></li>
                  <li><a href=\"#\"><span class=\"icon-instagram\"></span></a></li>
                </ul>
                <img src=\"images/person_1.jpg\" alt=\"Image\" class=\"img-fluid\">
              </figure>
              <div class=\"p-3\">
                <h3>Kaiara Spencer</h3>
                <span class=\"position\">Accountant</span>
              </div>
            </div>
          </div>

          <div class=\"col-md-6 col-lg-4 mb-4\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"team-member\">
              <figure>
                <ul class=\"social\">
                  <li><a href=\"#\"><span class=\"icon-facebook\"></span></a></li>
                  <li><a href=\"#\"><span class=\"icon-twitter\"></span></a></li>
                  <li><a href=\"#\"><span class=\"icon-linkedin\"></span></a></li>
                  <li><a href=\"#\"><span class=\"icon-instagram\"></span></a></li>
                </ul>
                <img src=\"images/person_2.jpg\" alt=\"Image\" class=\"img-fluid\">
              </figure>
              <div class=\"p-3\">
                <h3>Dave Simpson</h3>
                <span class=\"position\">Bank Teller</span>
              </div>
            </div>
          </div>

          <div class=\"col-md-6 col-lg-4 mb-4\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"team-member\">
              <figure>
                <ul class=\"social\">
                  <li><a href=\"#\"><span class=\"icon-facebook\"></span></a></li>
                  <li><a href=\"#\"><span class=\"icon-twitter\"></span></a></li>
                  <li><a href=\"#\"><span class=\"icon-linkedin\"></span></a></li>
                  <li><a href=\"#\"><span class=\"icon-instagram\"></span></a></li>
                </ul>
                <img src=\"images/person_3.jpg\" alt=\"Image\" class=\"img-fluid\">
              </figure>
              <div class=\"p-3\">
                <h3>Ben Thompson</h3>
                <span class=\"position\">Bank Teller</span>
              </div>
            </div>
          </div>

          
          
        </div>
      </div>
    </section>

    <!--
    <section class=\"site-section\" id=\"gallery-section\" data-aos=\"fade\">
      <div class=\"container\">
        <div class=\"row mb-3\">
          <div class=\"col-12 text-center\">
            <h2 class=\"section-title mb-3\">Gallery</h2>
          </div>
        </div>
        <div id=\"posts\" class=\"row no-gutter\">
          <div class=\"item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4\">
            <a href=\"images/img_1.jpg\" class=\"item-wrap fancybox\">
              <span class=\"icon-search2\"></span>
              <img class=\"img-fluid\" src=\"images/img_1.jpg\">
            </a>
          </div>
          <div class=\"item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4\">
            <a href=\"images/img_2.jpg\" class=\"item-wrap fancybox\" data-fancybox=\"gallery2\">
              <span class=\"icon-search2\"></span>
              <img class=\"img-fluid\" src=\"images/img_2.jpg\">
            </a>
          </div>
          <div class=\"item brand col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4\">
            <a href=\"images/img_3.jpg\" class=\"item-wrap fancybox\" data-fancybox=\"gallery2\">
              <span class=\"icon-search2\"></span>
              <img class=\"img-fluid\" src=\"images/img_3.jpg\">
            </a>
          </div>
          <div class=\"item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4\">
            <a href=\"images/img_4.jpg\" class=\"item-wrap fancybox\" data-fancybox=\"gallery2\">
              <span class=\"icon-search2\"></span>
              <img class=\"img-fluid\" src=\"images/img_4.jpg\">
            </a>
          </div>
          <div class=\"item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4\">
            <a href=\"images/img_5.jpg\" class=\"item-wrap fancybox\" data-fancybox=\"gallery2\">
              <span class=\"icon-search2\"></span>
              <img class=\"img-fluid\" src=\"images/img_5.jpg\">
            </a>
          </div>
          <div class=\"item brand col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4\">
            <a href=\"images/img_1.jpg\" class=\"item-wrap fancybox\" data-fancybox=\"gallery2\">
              <span class=\"icon-search2\"></span>
              <img class=\"img-fluid\" src=\"images/img_1.jpg\">
            </a>
          </div>
          <div class=\"item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4\">
            <a href=\"images/img_2.jpg\" class=\"item-wrap fancybox\" data-fancybox=\"gallery2\">
              <span class=\"icon-search2\"></span>
              <img class=\"img-fluid\" src=\"images/img_2.jpg\">
            </a>
          </div>
          <div class=\"item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4\">
            <a href=\"images/img_3.jpg\" class=\"item-wrap fancybox\" data-fancybox=\"gallery2\">
              <span class=\"icon-search2\"></span>
              <img class=\"img-fluid\" src=\"images/img_3.jpg\">
            </a>
          </div>
          <div class=\"item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4\">
            <a href=\"images/img_4.jpg\" class=\"item-wrap fancybox\" data-fancybox=\"gallery2\">
              <span class=\"icon-search2\"></span>
              <img class=\"img-fluid\" src=\"images/img_4.jpg\">
            </a>
          </div>
          <div class=\"item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4\">
            <a href=\"images/img_5.jpg\" class=\"item-wrap fancybox\" data-fancybox=\"gallery2\">
              <span class=\"icon-search2\"></span>
              <img class=\"img-fluid\" src=\"images/img_5.jpg\">
            </a>
          </div>
          <div class=\"item brand col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4\">
            <a href=\"images/img_1.jpg\" class=\"item-wrap fancybox\" data-fancybox=\"gallery2\">
              <span class=\"icon-search2\"></span>
              <img class=\"img-fluid\" src=\"images/img_1.jpg\">
            </a>
          </div>
          <div class=\"item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4\">
            <a href=\"images/img_2.jpg\" class=\"item-wrap fancybox\" data-fancybox=\"gallery2\">
              <span class=\"icon-search2\"></span>
              <img class=\"img-fluid\" src=\"images/img_2.jpg\">
            </a>
          </div>
        </div>
      </div>
    </section>
    -->

    <section class=\"site-section\">
      <div class=\"container\">

        <div class=\"row mb-5 justify-content-center\">
          <div class=\"col-md-7 text-center\">
            <h2 class=\"section-title mb-3\" data-aos=\"fade-up\" data-aos-delay=\"\">How It Works</h2>
            <p class=\"lead\" data-aos=\"fade-up\" data-aos-delay=\"100\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas fugiat molestiae eligendi repudiandae error?</p>
          </div>
        </div>
        
        <div class=\"row align-items-lg-center\" >
          <div class=\"col-lg-6 mb-5\" data-aos=\"fade-up\" data-aos-delay=\"\">

            <div class=\"owl-carousel slide-one-item-alt\">
              <img src=\"images/img_1.jpg\" alt=\"Image\" class=\"img-fluid\">
              <img src=\"images/img_2.jpg\" alt=\"Image\" class=\"img-fluid\">
              <img src=\"images/img_3.jpg\" alt=\"Image\" class=\"img-fluid\">
            </div>
            <div class=\"custom-direction\">
              <a href=\"#\" class=\"custom-prev\"><span><span class=\"icon-keyboard_backspace\"></span></span></a><a href=\"#\" class=\"custom-next\"><span><span class=\"icon-keyboard_backspace\"></span></span></a>
            </div>

          </div>
          <div class=\"col-lg-5 ml-auto\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            
            <div class=\"owl-carousel slide-one-item-alt-text\">
              <div>
                <h2 class=\"section-title mb-3\">01. Online Applications</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque nisi, deserunt necessitatibus odio magnam nihil illum
                  neque voluptas?</p>

                <p><a href=\"#\" class=\"btn btn-primary mr-2 mb-2\">Learn More</a></p>
              </div>
              <div>
                <h2 class=\"section-title mb-3\">02. Get an approval</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque nisi, deserunt necessitatibus odio magnam nihil illum neque voluptas?</p>
                <p><a href=\"#\" class=\"btn btn-primary mr-2 mb-2\">Learn More</a></p>
              </div>
              <div>
                <h2 class=\"section-title mb-3\">03. Card delivery</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore sapiente labore eius ullam? Iusto?</p>

                <p><a href=\"#\" class=\"btn btn-primary mr-2 mb-2\">Learn More</a></p>
              </div>
              
            </div>
            
          </div>
        </div>
      </div>
    </section>

    
    

    <section class=\"site-section border-bottom bg-light\" id=\"services-section\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col-12 text-center\" data-aos=\"fade\">
            <h2 class=\"section-title mb-3\">Our Services</h2>
          </div>
        </div>
        <div class=\"row align-items-stretch\">
          <div class=\"col-md-6 col-lg-4 mb-4 mb-lg-4\" data-aos=\"fade-up\">
            <div class=\"unit-4\">
              <div class=\"unit-4-icon\">
                <img src=\"images/flaticon-svg/svg/001-wallet.svg\" alt=\"TODO inset alt\" class=\"img-fluid w-25 mb-4\">
              </div>
              <div>
                <h3>Business Consulting</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione animi tempora sint hic quod!</p>
                <p><a href=\"#\">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-4 mb-4 mb-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"unit-4\">
              <div class=\"unit-4-icon\">
                <img src=\"images/flaticon-svg/svg/006-credit-card.svg\" alt=\"TODO inset alt\" class=\"img-fluid w-25 mb-4\">
              </div>
              <div>
                <h3>Credit Card</h3>
                <p>
                  Our credit cards also come with a range of perks and rewards, from cashback offers and travel benefits to exclusive discounts and access to VIP events. With every purchase, you're one step closer to unlocking exciting rewards and maximizing the value of your spending.
                  Whether you're looking to build credit, manage expenses, or take advantage of exclusive benefits, our credit cards are the perfect companion for your financial journey. Join us today and experience the freedom and flexibility of our credit card feature. Your financial possibilities are limitless – let us help you reach them.
                </p>
                <p><a href=\"#\">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-4 mb-4 mb-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"unit-4\">
              <div class=\"unit-4-icon\">
                <img src=\"images/flaticon-png/png/savings-jar.png\" alt=\"TODO inset alt\" class=\"img-fluid w-25 mb-4\">
              </div>

              <div>
                  <h3>Savings</h3>
                  <p>
                    We understand that saving is not just about setting money aside – it's about achieving your dreams and securing your future. That's why our app provides personalized insights and recommendations to help you make the most of your savings journey.
                    Join us today and experience the power of smart savings with our banking app. Your financial goals are within reach – let us help you get there.
                  </p>
                  <p>
                    <a href=\"#\">Learn more</a>
                  </p>
              </div>
            </div>
          </div>


          <div class=\"col-md-6 col-lg-4 mb-4 mb-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"\">
            <div class=\"unit-4\">
              <div class=\"unit-4-icon\">
                <img src=\"images/flaticon-svg/svg/003-notes.svg\" alt=\"TODO inset alt\" class=\"img-fluid w-25 mb-4\">
              </div>
              <div>
                <h3>Insurance Consulting</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia labore suscipit distinctio inventore doloribus deserunt!</p>
                <p><a href=\"#\">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-4 mb-4 mb-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"unit-4\">
              <div class=\"unit-4-icon\">
                <img src=\"images/flaticon-svg/svg/004-cart.svg\" alt=\"TODO inset alt\" class=\"img-fluid w-25 mb-4\">
              </div>
              <div>
                <h3>Financial Investment</h3>
                <p>
                  At the heart of our platform is a commitment to transparency, security, and performance. We leverage cutting-edge technology and rigorous risk management protocols to safeguard your investments and maximize returns.
                  Join us today and unlock the potential of your money with our investment feature. Your financial journey begins here – let us help you make it extraordinary.
                </p>
                <p><a href=\"#\">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-4 mb-4 mb-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"unit-4\">
              <div class=\"unit-4-icon\">
                <img src=\"./images/flaticon-png/png/loan.png\" alt=\"Loan Management\" class=\"img-fluid w-25 mb-4\">
              </div>
              <div>
                  <h3>P2P Loan Management</h3>
                  <p>
                    With our peer-to-peer lending feature, borrowing becomes a conversation, where investors connect directly with borrowers, cutting out the middleman. Our peer-to-peer lending feature fosters a community of trust, transparency, and mutual benefit. Whether you're a borrower seeking flexible terms or an investor looking for rewarding opportunities.
                  </p>
                  <p>
                    <a href=\"#collapseExample\">Learn more</a>
                  </p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class=\"site-section testimonial-wrap\" id=\"testimonials-section\" data-aos=\"fade\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col-12 text-center\">
            <h2 class=\"section-title mb-3\">Happy Customers</h2>
          </div>
        </div>
      </div>
      <div class=\"slide-one-item home-slider owl-carousel\">
          <div>
            <div class=\"testimonial\">
              
              <blockquote class=\"mb-5\">
                <p>
                  &ldquo;
                  I've been using the banking app for a while now, and I'm truly impressed with its user-friendly interface and seamless functionality. Managing my finances has never been easier!
                  &rdquo;
                </p>
              </blockquote>

              <figure class=\"mb-4 d-flex align-items-center justify-content-center\">
                <div><img src=\"images/person_1.jpg\" alt=\"Image\" class=\"w-50 img-fluid mb-3\"></div>
                <p>John Smith</p>
              </figure>
            </div>
          </div>
          <div>
            <div class=\"testimonial\">

              <blockquote class=\"mb-5\">
                <p>
                  &ldquo;
                  The peer-to-peer lending feature is a game-changer! It allowed me to borrow money at competitive rates while connecting me directly with investors. It's a win-win for everyone involved.
                  &rdquo;
                </p>
              </blockquote>
              <figure class=\"mb-4 d-flex align-items-center justify-content-center\">
                <div><img src=\"images/person_2.jpg\" alt=\"Image\" class=\"w-50 img-fluid mb-3\"></div>
                <p>Christine Aguilar</p>
              </figure>
              
            </div>
          </div>

          <div>
            <div class=\"testimonial\">

              <blockquote class=\"mb-5\">
                <p>
                  &ldquo;
                  I appreciate the transparency and security measures implemented in the investment feature. I feel confident making investment decisions knowing that my financial data is protected and that I have access to expert insights every step of the way.
                  &rdquo;
                </p>
              </blockquote>
              <figure class=\"mb-4 d-flex align-items-center justify-content-center\">
                <div><img src=\"images/person_3.jpg\" alt=\"Image\" class=\"w-50 img-fluid mb-3\"></div>
                <p>Robert Spears</p>
              </figure>

              
            </div>
          </div>

          <div>
            <div class=\"testimonial\">

              <blockquote class=\"mb-5\">
                <p>
                  &ldquo;
                  Using the credit card feature has simplified my transactions and provided me with valuable rewards. The peace of mind knowing that my purchases are secure and that I can easily track my expenses is invaluable. Thank you for making banking convenient and rewarding!
                  &rdquo;
                </p>
              </blockquote>
              <figure class=\"mb-4 d-flex align-items-center justify-content-center\">
                <div><img src=\"images/person_1.jpg\" alt=\"Image\" class=\"w-50 img-fluid mb-3\"></div>
                <p>Bruce Rogers</p>
              </figure>

            </div>
          </div>

        </div>
    </section>

    <section class=\"site-section bg-light\" id=\"pricing-section\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col-12 text-center\" data-aos=\"fade-up\">
            <h2 class=\"section-title mb-3\">Pricing</h2>
          </div>
        </div>
        <div class=\"row mb-5\">
          <div class=\"col-md-6 mb-4 mb-lg-0 col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"\">
            <div class=\"pricing\">
              <h3 class=\"text-center text-black\">Basic</h3>
              <div class=\"price text-center mb-4 \">
                <span><span>\$47</span> / year</span>
              </div>
              <ul class=\"list-unstyled ul-check success mb-5\">
                
                <li>Officia quaerat eaque neque</li>
                <li>Possimus aut consequuntur incidunt</li>
                <li class=\"remove\">Lorem ipsum dolor sit amet</li>
                <li class=\"remove\">Consectetur adipisicing elit</li>
                <li class=\"remove\">Dolorum esse odio quas architecto sint</li>
              </ul>
              <p class=\"text-center\">
                <a href=\"#\" class=\"btn btn-secondary\">Buy Now</a>
              </p>
            </div>
          </div>

          <div class=\"col-md-6 mb-4 mb-lg-0 col-lg-4 pricing-popular\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"pricing\">
              <h3 class=\"text-center text-black\">Premium</h3>
              <div class=\"price text-center mb-4 \">
                <span><span>\$200</span> / year</span>
              </div>
              <ul class=\"list-unstyled ul-check success mb-5\">
                
                <li>Officia quaerat eaque neque</li>
                <li>Possimus aut consequuntur incidunt</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipisicing elit</li>
                <li class=\"remove\">Dolorum esse odio quas architecto sint</li>
              </ul>
              <p class=\"text-center\">
                <a href=\"#\" class=\"btn btn-primary\">Buy Now</a>
              </p>
            </div>
          </div>

          <div class=\"col-md-6 mb-4 mb-lg-0 col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"pricing\">
              <h3 class=\"text-center text-black\">Professional</h3>
              <div class=\"price text-center mb-4 \">
                <span><span>\$750</span> / year</span>
              </div>
              <ul class=\"list-unstyled ul-check success mb-5\">
                
                <li>Officia quaerat eaque neque</li>
                <li>Possimus aut consequuntur incidunt</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipisicing elit</li>
                <li>Dolorum esse odio quas architecto sint</li>
              </ul>
              <p class=\"text-center\">
                <a href=\"#\" class=\"btn btn-secondary\">Buy Now</a>
              </p>
            </div>
          </div>
        </div>
        
        <div class=\"row site-section\" id=\"faq-section\">
          <div class=\"col-12 text-center\" data-aos=\"fade\">
            <h2 class=\"section-title\">Frequently Ask Questions</h2>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-lg-6\">
            
            <div class=\"mb-5\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <h3 class=\"text-black h4 mb-4\">Can I accept both Paypal and Stripe?</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
            
            <div class=\"mb-5\" data-aos=\"fade-up\" data-aos-delay=\"100\">
              <h3 class=\"text-black h4 mb-4\">What available is refund period?</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>

            <div class=\"mb-5\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <h3 class=\"text-black h4 mb-4\">Can I accept both Paypal and Stripe?</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
            
            <div class=\"mb-5\" data-aos=\"fade-up\" data-aos-delay=\"100\">
              <h3 class=\"text-black h4 mb-4\">What available is refund period?</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
          </div>
          <div class=\"col-lg-6\">

            <div class=\"mb-5\" data-aos=\"fade-up\" data-aos-delay=\"100\">
              <h3 class=\"text-black h4 mb-4\">Where are you from?</h3>
              <p>Voluptatum nobis obcaecati perferendis dolor totam unde dolores quod maxime corporis officia et. Distinctio assumenda minima maiores.</p>
            </div>
            
            <div class=\"mb-5\" data-aos=\"fade-up\" data-aos-delay=\"100\">
              <h3 class=\"text-black h4 mb-4\">What is your opening time?</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>

            <div class=\"mb-5\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <h3 class=\"text-black h4 mb-4\">Can I accept both Paypal and Stripe?</h3>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
            
            <div class=\"mb-5\" data-aos=\"fade-up\" data-aos-delay=\"100\">
              <h3 class=\"text-black h4 mb-4\">What available is refund period?</h3>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class=\"site-section\" id=\"about-section\">
      <div class=\"container\">

        <div class=\"row\">
          <div class=\"col-lg-6 mb-5\" data-aos=\"fade-up\" data-aos-delay=\"\">
            <figure class=\"circle-bg\">
            <img src=\"images/img_4.jpg\" alt=\"TODO inset alt\" class=\"img-fluid\">
            </figure>
          </div>
          <div class=\"col-lg-5 ml-auto\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            

            <div class=\"row\">

              
              
              <div class=\"col-12 mb-4\" data-aos=\"fade-up\" data-aos-delay=\"\">
                <div class=\"unit-4 d-flex\">
                  <div class=\"unit-4-icon mr-4 mb-3\"><span class=\"text-primary flaticon-head\"></span></div>
                  <div>
                    <h3>Bank Loan</h3>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class=\"mb-0\"><a href=\"#\">Learn More</a></p>
                  </div>
                </div>
              </div>
              <div class=\"col-12 mb-4\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                <div class=\"unit-4 d-flex\">
                  <div class=\"unit-4-icon mr-4 mb-3\"><span class=\"text-primary flaticon-smartphone\"></span></div>
                  <div>
                    <h3>Banking Consulation </h3>
                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    <p class=\"mb-0\"><a href=\"#\">Learn More</a></p>
                  </div>
                </div>
              </div>
            </div>


            
          </div>
        </div>

        
      </div>
    </section>
  
    
    

    <section class=\"site-section\" id=\"blog-section\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col-12 text-center\" data-aos=\"fade\">
            <h2 class=\"section-title mb-3\">Our Actualite</h2>
          </div>
        </div>

        <div class=\"row\">
        {% for actualite in actualites %}
          <div class=\"col-md-6 col-lg-4 mb-4 mb-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"\">
            <div class=\"h-entry\">
              <a href=\"article-1.html\">
                <img src=\"images/img_1.jpg\" alt=\"Image\" class=\"img-fluid\">
              </a>
              <h2 class=\"font-size-regular\"><a href=\"./article-1.html\">{{actualite.title}}</a></h2>
              <div class=\"meta mb-4\">ADMIN <span class=\"mx-2\">&bullet;</span> {{actualite.dt|date('Y-m-d')}}<span class=\"mx-2\">&bullet;</span> <a href=\"#\">News</a></div>
              <p>{{actualite.Description}}</p>
              <p><a href=\"{{ path('app_actualite_show', {'id': actualite.id}) }}\">Continue Reading...</a></p>
            </div> 
          </div>
          
          {% endfor %}
        </div>

      </div>
    </section>

 


    <section class=\"site-section bg-light\" id=\"contact-section\" data-aos=\"fade\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col-12 text-center\">
            <h2 class=\"section-title mb-3\">Contact Us</h2>
          </div>
        </div>
        <div class=\"row mb-5\">
          


          <div class=\"col-md-4 text-center\">
            <p class=\"mb-4\">
              <span class=\"icon-room d-block h2 text-primary\"></span>
              <span>203 Fake St. Mountain View, San Francisco, California, USA</span>
            </p>
          </div>
          <div class=\"col-md-4 text-center\">
            <p class=\"mb-4\">
              <span class=\"icon-phone d-block h2 text-primary\"></span>
              <a href=\"#\">+1 232 3235 324</a>
            </p>
          </div>
          <div class=\"col-md-4 text-center\">
            <p class=\"mb-0\">
              <span class=\"icon-mail_outline d-block h2 text-primary\"></span>
              <a href=\"#\">info@safe-spot.com</a>
            </p>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-12 mb-5\">

            

             {{ include('reclamation/_form.html.twig') }}
          </div>
          
        </div>
      </div>
    </section>
      {% endblock %}

    
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

  <script src=\"{{asset('js/jquery-3.3.1.min.js')}}\"></script>
  <script src=\"{{asset('js/jquery-ui.js')}}\"></script>
  <script src=\"{{asset('js/popper.min.js')}}\"></script>
  <script src=\"{{asset('js/bootstrap.min.js')}}\"></script>
  <script src=\"{{asset('js/owl.carousel.min.js')}}\"></script>
  <script src=\"{{asset('js/jquery.countdown.min.js')}}\"></script>
  <script src=\"{{asset('js/jquery.easing.1.3.js')}}\"></script>
  <script src=\"{{asset('js/aos.js')}}\"></script>
  <script src=\"{{asset('js/jquery.fancybox.min.js')}}\"></script>
  <script src=\"{{asset('js/jquery.sticky.js')}}\"></script>
  <script src=\"{{asset('js/isotope.pkgd.min.js')}}\"></script>

  
  <script src=\"{{asset('js/main.js')}}\"></script>

  
  </body>
</html>", "front.html.twig", "C:\\Users\\yassin\\Desktop\\safe-spot-main\\templates\\front.html.twig");
    }
}
