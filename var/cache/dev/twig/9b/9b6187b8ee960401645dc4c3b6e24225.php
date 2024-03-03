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

/* index.html.twig */
class __TwigTemplate_2c46eb044259d50afe5fea7d9f38c112 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
  <head>
    <title>Safe Spot &mdash; Banking Re-invented</title>
    <link rel=\"icon\" type=\"image/png\" href=\"/dashboard-template/images/favicon.png\"/>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"fonts/icomoon/style.css\">
    <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"css/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"css/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"css/owl.theme.default.min.css\">
    <link rel=\"stylesheet\" href=\"css/owl.theme.default.min.css\">
    <link rel=\"stylesheet\" href=\"css/jquery.fancybox.min.css\">
    <link rel=\"stylesheet\" href=\"css/bootstrap-datepicker.css\">
    <link rel=\"stylesheet\" href=\"fonts/flaticon/font/flaticon.css\">
    <link rel=\"stylesheet\" href=\"css/aos.css\">
    <link rel=\"stylesheet\" href=\"css/style.css\">
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
            <h1 class=\"mb-0 site-logo\"><a href=\"/\" class=\"h2 mb-0\">Safe Spot<span class=\"text-primary\">.</span> </a></h1>
          </div>

          <div class=\"col-12 col-md-10 d-none d-xl-block\">
            <nav class=\"site-navigation position-relative text-right\" role=\"navigation\">

              <ul class=\"site-menu main-menu js-clone-nav mr-auto d-none d-lg-block\">
                <li><a href=\"#home-section\" class=\"nav-link\">Home</a></li>
                <li class=\"has-children\">
                  <a href=\"#about-section\" class=\"nav-link\">About Us</a>
                  <ul class=\"dropdown\">
                    <li><a href=\"#team-section\" class=\"nav-link\">Team</a></li>
                    <li><a href=\"#services-section\" class=\"nav-link\">Services</a></li>
                    <li><a href=\"#testimonials-section\" class=\"nav-link\">Testimonials</a></li>
                  </ul>
                </li>
                <li><a href=\"#blog-section\" class=\"nav-link\">Blog</a></li>
                <li><a href=\"#contact-section\" class=\"nav-link\">Contact</a></li>
                ";
        // line 67
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 68
            echo "                  <li><a href=\"/loans/list\" class=\"nav-link\">To Services</a></li>
                  <li><a href=\"/logout\" class=\"nav-link\">Logout</a></li>
                ";
        } else {
            // line 71
            echo "                  <li><a href=\"/login\" class=\"nav-link\">Log in</a></li>
                ";
        }
        // line 73
        echo "                <li class=\"social\"><a href=\"#contact-section\" class=\"nav-link\"><span class=\"icon-facebook\"></span></a></li>
                <li class=\"social\"><a href=\"#contact-section\" class=\"nav-link\"><span class=\"icon-twitter\"></span></a></li>
                <li class=\"social\"><a href=\"#contact-section\" class=\"nav-link\"><span class=\"icon-linkedin\"></span></a></li>
              </ul>
            </nav>
          </div>
          <div class=\"col-6 d-inline-block d-xl-none ml-md-0 py-3\" style=\"position: relative; top: 3px;\"><a href=\"#\" class=\"site-menu-toggle js-menu-toggle float-right\"><span class=\"icon-menu h3\"></span></a></div>
        </div>
      </div>
    </header>

    <div class=\"site-blocks-cover overlay\" style=\"background-image: url(images/hero_2.jpg);\" data-aos=\"fade\" id=\"home-section\">
      <div class=\"container\">
        <div class=\"row align-items-center justify-content-center\">
          <div class=\"col-md-10 mt-lg-5 text-center\">
            <div class=\"single-text owl-carousel\">
              <div class=\"slide\">
                <h1 class=\"text-uppercase\" data-aos=\"fade-up\">Banking Solutions</h1>
                <p class=\"mb-5 desc\"  data-aos=\"fade-up\" data-aos-delay=\"100\">
                  Banking simply re-invented
                </p>
                <div data-aos=\"fade-up\" data-aos-delay=\"100\">
                  <a href=\"#\" target=\"_blank\" class=\"btn  btn-primary mr-2 mb-2\">Get In Touch</a>
                </div>
              </div>

              <div class=\"slide\">
                <h1 class=\"text-uppercase\" data-aos=\"fade-up\">Financing Solutions</h1>
                <p class=\"mb-5 desc\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                  Join us today and unlock the potential of your money.
                  Your financial journey begins here – let us help you make it extraordinary.
                </p>
                <div data-aos=\"fade-up\" data-aos-delay=\"100\">
                  <a href=\"#\" target=\"_blank\" class=\"btn  btn-primary mr-2 mb-2\">Get In Touch</a>
                </div>
              </div>

              <div class=\"slide\">
                <h1 class=\"text-uppercase\" data-aos=\"fade-up\">Savings Accounts</h1>
                <p class=\"mb-5 desc\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                  Achieving your dreams and securing your future with us.
                  Our personalized insights and recommendations helps you make the most of your savings journey.
                </p>
                <div data-aos=\"fade-up\" data-aos-delay=\"100\">
                  <a href=\"#\" target=\"_blank\" class=\"btn  btn-primary mr-2 mb-2\">Get In Touch</a>
                </div>
              </div>

              <div class=\"slide\">
                <h1 class=\"text-uppercase\" data-aos=\"fade-up\">P2P Loans</h1>
                <p class=\"mb-5 desc\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                  Where investors connect directly with borrowers, cutting out the middleman.
                  Our peer-to-peer lending feature fosters a community of trust, transparency, and mutual benefit.
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
            <p class=\"lead\" data-aos=\"fade-up\" data-aos-delay=\"100\">Discover the behind the scene talented individuals driving innovation and excellence within our team.</p>
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

    <section class=\"site-section border-bottom bg-light\" id=\"services-section\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col-12 text-center\" data-aos=\"fade\">
            <h2 class=\"section-title mb-3\">Our Services</h2>
          </div>
        </div>
        <div class=\"row align-items-stretch\">
          <div class=\"col-md-6 col-lg-4 mb-4 mb-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"unit-4\">
              <div class=\"unit-4-icon\">
                <img src=\"./images/flaticon-png/png/loan.png\" alt=\"Loan Management\" class=\"img-fluid w-25 mb-4\">
              </div>
              <div>
                <h3>P2P Lending Platform</h3>
                <p>
                  Where borrowing becomes a conversation, and investors connect directly with borrowers, cutting out the middleman.
                  Join our community of trust, transparency, and mutual benefit.
                </p>
                <p>
                  <a href=\"#collapseExample\">Learn more</a>
                </p>
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
                  We leverage cutting-edge technology and rigorous risk management protocols to safeguard your investments and maximize returns.
                  Your financial journey begins here – let us help you make it extraordinary.
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
                  With our app's personalized insights and recommendations, make the most of your savings journey.
                  Your financial goals are within reach – let us help you get there.
                </p>
                <p>
                  <a href=\"#\">Learn more</a>
                </p>
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
                  Our credit cards also come with a range of perks and rewards, from cashback offers and travel benefits to exclusive discounts and access to VIP events.
                </p>
                <p><a href=\"#\">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-4 mb-4 mb-lg-4\" data-aos=\"fade-up\">
            <div class=\"unit-4\">
              <div class=\"unit-4-icon\">
                <img src=\"images/flaticon-svg/svg/001-wallet.svg\" alt=\"TODO inset alt\" class=\"img-fluid w-25 mb-4\">
              </div>
              <div>
                <h3>Business Consulting</h3>
                <p>
                  Our business consulting feature offers tailored expertise to guide your company towards its strategic objectives.
                </p>
                <p><a href=\"#\">Learn More</a></p>
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
                <p>
                  From policy selection to claims assistance, our experienced consultants provide expert advice and support tailored to your specific needs.
                </p>
                <p><a href=\"#\">Learn More</a></p>
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
            <h2 class=\"section-title mb-3\">Our Blog</h2>
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-6 col-lg-4 mb-4 mb-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"\">
            <div class=\"h-entry\">
              <a href=\"article-1.html\">
                <img src=\"images/img_1.jpg\" alt=\"Image\" class=\"img-fluid\">
              </a>
              <h2 class=\"font-size-regular\"><a href=\"./article-1.html\">How Our Bank is Revolutionizing Financial Services</a></h2>
              <div class=\"meta mb-4\">Ham Brook <span class=\"mx-2\">&bullet;</span> Mar 07, 2024<span class=\"mx-2\">&bullet;</span> <a href=\"#\">News</a></div>
              <p>In an age defined by rapid technological advancements and changing consumer expectations, traditional banking is undergoing a profound transformation. At the forefront ...</p>
              <p><a href=\"./article-1.html\">Continue Reading...</a></p>
            </div> 
          </div>
          <div class=\"col-md-6 col-lg-4 mb-4 mb-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"h-entry\">
              <a href=\"article-2.html\">
                <img src=\"images/img_4.jpg\" alt=\"Image\" class=\"img-fluid\">
              </a>
              <h2 class=\"font-size-regular\"><a href=\"./article-2.html\">The Rise of Peer-to-Peer Lending in Distributed Finance</a></h2>
              <div class=\"meta mb-4\">James Phelps <span class=\"mx-2\">&bullet;</span> Mar 08, 2024<span class=\"mx-2\">&bullet;</span> <a href=\"#\">News</a></div>
              <p>Peer-to-peer (P2P) lending has emerged as a transformative force in the world of finance, offering individuals unprecedented access to capital and investment opportunities...</p>
              <p><a href=\"./article-2.html\">Continue Reading...</a></p>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-4 mb-4 mb-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"h-entry\">
              <a href=\"article-3.html\">
                <img src=\"images/img_3.jpg\" alt=\"Image\" class=\"img-fluid\">
              </a>
              <h2 class=\"font-size-regular\"><a href=\"./article-3.html\">The Fintech Revolution: Transforming the Future of Finance</a></h2>
              <div class=\"meta mb-4\">James Phelps <span class=\"mx-2\">&bullet;</span> Mar 09, 2024<span class=\"mx-2\">&bullet;</span> <a href=\"#\">News</a></div>
              <p>In recent years, the financial technology (fintech) sector has emerged as a dynamic force reshaping the landscape of finance and revolutionizing the way we interact with money...</p>
              <p><a href=\"./article-3.html\">Continue Reading...</a></p>
            </div> 
          </div>
          
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
              <span>
                1, 2 rue André Ampère - 2083 - Pôle Technologique - El Ghazala, Tunis.
              </span>
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
              <a href=\"#\">notifications.safe.spot@gmail.com</a>
            </p>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-12 mb-5\">

            

            <form action=\"#\" class=\"p-5 bg-white\">
              
              <h2 class=\"h4 text-black mb-5\">Contact Form</h2> 

              <div class=\"row form-group\">
                <div class=\"col-md-6 mb-3 mb-md-0\">
                  <label class=\"text-black\" for=\"fname\">First Name</label>
                  <input type=\"text\" id=\"fname\" class=\"form-control\">
                </div>
                <div class=\"col-md-6\">
                  <label class=\"text-black\" for=\"lname\">Last Name</label>
                  <input type=\"text\" id=\"lname\" class=\"form-control\">
                </div>
              </div>

              <div class=\"row form-group\">
                
                <div class=\"col-md-12\">
                  <label class=\"text-black\" for=\"email\">Email</label> 
                  <input type=\"email\" id=\"email\" class=\"form-control\">
                </div>
              </div>

              <div class=\"row form-group\">
                
                <div class=\"col-md-12\">
                  <label class=\"text-black\" for=\"subject\">Subject</label> 
                  <input type=\"subject\" id=\"subject\" class=\"form-control\">
                </div>
              </div>

              <div class=\"row form-group\">
                <div class=\"col-md-12\">
                  <label class=\"text-black\" for=\"message\">Message</label> 
                  <textarea name=\"message\" id=\"message\" cols=\"30\" rows=\"7\" class=\"form-control\" placeholder=\"Write your notes or questions here...\"></textarea>
                </div>
              </div>

              <div class=\"row form-group\">
                <div class=\"col-md-12\">
                  <input type=\"submit\" value=\"Send Message\" class=\"btn btn-primary btn-md text-white\">
                </div>
              </div>
            </form>
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
                  <li><a href=\"#about-section\" class=\"smoothscroll\">About Us</a></li>
                  <li><a href=\"#blog-section\" class=\"smoothscroll\">Blog</a></li>
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
              <p>Copyright &copy;
                <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
                with <i class=\"icon-heart-o\" aria-hidden=\"true\"></i> by <a href=\"#\">Safe Spot</a>
              </p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src=\"js/jquery-3.3.1.min.js\"></script>
  <script src=\"js/jquery-ui.js\"></script>
  <script src=\"js/popper.min.js\"></script>
  <script src=\"js/bootstrap.min.js\"></script>
  <script src=\"js/owl.carousel.min.js\"></script>
  <script src=\"js/jquery.countdown.min.js\"></script>
  <script src=\"js/jquery.easing.1.3.js\"></script>
  <script src=\"js/aos.js\"></script>
  <script src=\"js/jquery.fancybox.min.js\"></script>
  <script src=\"js/jquery.sticky.js\"></script>
  <script src=\"js/isotope.pkgd.min.js\"></script>

  <script src=\"js/main.js\"></script>

  </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "index.html.twig";
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
        return array (  122 => 73,  118 => 71,  113 => 68,  111 => 67,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
  <head>
    <title>Safe Spot &mdash; Banking Re-invented</title>
    <link rel=\"icon\" type=\"image/png\" href=\"/dashboard-template/images/favicon.png\"/>

    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"fonts/icomoon/style.css\">
    <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"css/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"css/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"css/owl.theme.default.min.css\">
    <link rel=\"stylesheet\" href=\"css/owl.theme.default.min.css\">
    <link rel=\"stylesheet\" href=\"css/jquery.fancybox.min.css\">
    <link rel=\"stylesheet\" href=\"css/bootstrap-datepicker.css\">
    <link rel=\"stylesheet\" href=\"fonts/flaticon/font/flaticon.css\">
    <link rel=\"stylesheet\" href=\"css/aos.css\">
    <link rel=\"stylesheet\" href=\"css/style.css\">
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
            <h1 class=\"mb-0 site-logo\"><a href=\"/\" class=\"h2 mb-0\">Safe Spot<span class=\"text-primary\">.</span> </a></h1>
          </div>

          <div class=\"col-12 col-md-10 d-none d-xl-block\">
            <nav class=\"site-navigation position-relative text-right\" role=\"navigation\">

              <ul class=\"site-menu main-menu js-clone-nav mr-auto d-none d-lg-block\">
                <li><a href=\"#home-section\" class=\"nav-link\">Home</a></li>
                <li class=\"has-children\">
                  <a href=\"#about-section\" class=\"nav-link\">About Us</a>
                  <ul class=\"dropdown\">
                    <li><a href=\"#team-section\" class=\"nav-link\">Team</a></li>
                    <li><a href=\"#services-section\" class=\"nav-link\">Services</a></li>
                    <li><a href=\"#testimonials-section\" class=\"nav-link\">Testimonials</a></li>
                  </ul>
                </li>
                <li><a href=\"#blog-section\" class=\"nav-link\">Blog</a></li>
                <li><a href=\"#contact-section\" class=\"nav-link\">Contact</a></li>
                {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                  <li><a href=\"/loans/list\" class=\"nav-link\">To Services</a></li>
                  <li><a href=\"/logout\" class=\"nav-link\">Logout</a></li>
                {% else %}
                  <li><a href=\"/login\" class=\"nav-link\">Log in</a></li>
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

    <div class=\"site-blocks-cover overlay\" style=\"background-image: url(images/hero_2.jpg);\" data-aos=\"fade\" id=\"home-section\">
      <div class=\"container\">
        <div class=\"row align-items-center justify-content-center\">
          <div class=\"col-md-10 mt-lg-5 text-center\">
            <div class=\"single-text owl-carousel\">
              <div class=\"slide\">
                <h1 class=\"text-uppercase\" data-aos=\"fade-up\">Banking Solutions</h1>
                <p class=\"mb-5 desc\"  data-aos=\"fade-up\" data-aos-delay=\"100\">
                  Banking simply re-invented
                </p>
                <div data-aos=\"fade-up\" data-aos-delay=\"100\">
                  <a href=\"#\" target=\"_blank\" class=\"btn  btn-primary mr-2 mb-2\">Get In Touch</a>
                </div>
              </div>

              <div class=\"slide\">
                <h1 class=\"text-uppercase\" data-aos=\"fade-up\">Financing Solutions</h1>
                <p class=\"mb-5 desc\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                  Join us today and unlock the potential of your money.
                  Your financial journey begins here – let us help you make it extraordinary.
                </p>
                <div data-aos=\"fade-up\" data-aos-delay=\"100\">
                  <a href=\"#\" target=\"_blank\" class=\"btn  btn-primary mr-2 mb-2\">Get In Touch</a>
                </div>
              </div>

              <div class=\"slide\">
                <h1 class=\"text-uppercase\" data-aos=\"fade-up\">Savings Accounts</h1>
                <p class=\"mb-5 desc\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                  Achieving your dreams and securing your future with us.
                  Our personalized insights and recommendations helps you make the most of your savings journey.
                </p>
                <div data-aos=\"fade-up\" data-aos-delay=\"100\">
                  <a href=\"#\" target=\"_blank\" class=\"btn  btn-primary mr-2 mb-2\">Get In Touch</a>
                </div>
              </div>

              <div class=\"slide\">
                <h1 class=\"text-uppercase\" data-aos=\"fade-up\">P2P Loans</h1>
                <p class=\"mb-5 desc\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                  Where investors connect directly with borrowers, cutting out the middleman.
                  Our peer-to-peer lending feature fosters a community of trust, transparency, and mutual benefit.
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
            <p class=\"lead\" data-aos=\"fade-up\" data-aos-delay=\"100\">Discover the behind the scene talented individuals driving innovation and excellence within our team.</p>
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

    <section class=\"site-section border-bottom bg-light\" id=\"services-section\">
      <div class=\"container\">
        <div class=\"row mb-5\">
          <div class=\"col-12 text-center\" data-aos=\"fade\">
            <h2 class=\"section-title mb-3\">Our Services</h2>
          </div>
        </div>
        <div class=\"row align-items-stretch\">
          <div class=\"col-md-6 col-lg-4 mb-4 mb-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"unit-4\">
              <div class=\"unit-4-icon\">
                <img src=\"./images/flaticon-png/png/loan.png\" alt=\"Loan Management\" class=\"img-fluid w-25 mb-4\">
              </div>
              <div>
                <h3>P2P Lending Platform</h3>
                <p>
                  Where borrowing becomes a conversation, and investors connect directly with borrowers, cutting out the middleman.
                  Join our community of trust, transparency, and mutual benefit.
                </p>
                <p>
                  <a href=\"#collapseExample\">Learn more</a>
                </p>
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
                  We leverage cutting-edge technology and rigorous risk management protocols to safeguard your investments and maximize returns.
                  Your financial journey begins here – let us help you make it extraordinary.
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
                  With our app's personalized insights and recommendations, make the most of your savings journey.
                  Your financial goals are within reach – let us help you get there.
                </p>
                <p>
                  <a href=\"#\">Learn more</a>
                </p>
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
                  Our credit cards also come with a range of perks and rewards, from cashback offers and travel benefits to exclusive discounts and access to VIP events.
                </p>
                <p><a href=\"#\">Learn More</a></p>
              </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-4 mb-4 mb-lg-4\" data-aos=\"fade-up\">
            <div class=\"unit-4\">
              <div class=\"unit-4-icon\">
                <img src=\"images/flaticon-svg/svg/001-wallet.svg\" alt=\"TODO inset alt\" class=\"img-fluid w-25 mb-4\">
              </div>
              <div>
                <h3>Business Consulting</h3>
                <p>
                  Our business consulting feature offers tailored expertise to guide your company towards its strategic objectives.
                </p>
                <p><a href=\"#\">Learn More</a></p>
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
                <p>
                  From policy selection to claims assistance, our experienced consultants provide expert advice and support tailored to your specific needs.
                </p>
                <p><a href=\"#\">Learn More</a></p>
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
            <h2 class=\"section-title mb-3\">Our Blog</h2>
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-6 col-lg-4 mb-4 mb-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"\">
            <div class=\"h-entry\">
              <a href=\"article-1.html\">
                <img src=\"images/img_1.jpg\" alt=\"Image\" class=\"img-fluid\">
              </a>
              <h2 class=\"font-size-regular\"><a href=\"./article-1.html\">How Our Bank is Revolutionizing Financial Services</a></h2>
              <div class=\"meta mb-4\">Ham Brook <span class=\"mx-2\">&bullet;</span> Mar 07, 2024<span class=\"mx-2\">&bullet;</span> <a href=\"#\">News</a></div>
              <p>In an age defined by rapid technological advancements and changing consumer expectations, traditional banking is undergoing a profound transformation. At the forefront ...</p>
              <p><a href=\"./article-1.html\">Continue Reading...</a></p>
            </div> 
          </div>
          <div class=\"col-md-6 col-lg-4 mb-4 mb-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"h-entry\">
              <a href=\"article-2.html\">
                <img src=\"images/img_4.jpg\" alt=\"Image\" class=\"img-fluid\">
              </a>
              <h2 class=\"font-size-regular\"><a href=\"./article-2.html\">The Rise of Peer-to-Peer Lending in Distributed Finance</a></h2>
              <div class=\"meta mb-4\">James Phelps <span class=\"mx-2\">&bullet;</span> Mar 08, 2024<span class=\"mx-2\">&bullet;</span> <a href=\"#\">News</a></div>
              <p>Peer-to-peer (P2P) lending has emerged as a transformative force in the world of finance, offering individuals unprecedented access to capital and investment opportunities...</p>
              <p><a href=\"./article-2.html\">Continue Reading...</a></p>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-4 mb-4 mb-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"h-entry\">
              <a href=\"article-3.html\">
                <img src=\"images/img_3.jpg\" alt=\"Image\" class=\"img-fluid\">
              </a>
              <h2 class=\"font-size-regular\"><a href=\"./article-3.html\">The Fintech Revolution: Transforming the Future of Finance</a></h2>
              <div class=\"meta mb-4\">James Phelps <span class=\"mx-2\">&bullet;</span> Mar 09, 2024<span class=\"mx-2\">&bullet;</span> <a href=\"#\">News</a></div>
              <p>In recent years, the financial technology (fintech) sector has emerged as a dynamic force reshaping the landscape of finance and revolutionizing the way we interact with money...</p>
              <p><a href=\"./article-3.html\">Continue Reading...</a></p>
            </div> 
          </div>
          
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
              <span>
                1, 2 rue André Ampère - 2083 - Pôle Technologique - El Ghazala, Tunis.
              </span>
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
              <a href=\"#\">notifications.safe.spot@gmail.com</a>
            </p>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-12 mb-5\">

            

            <form action=\"#\" class=\"p-5 bg-white\">
              
              <h2 class=\"h4 text-black mb-5\">Contact Form</h2> 

              <div class=\"row form-group\">
                <div class=\"col-md-6 mb-3 mb-md-0\">
                  <label class=\"text-black\" for=\"fname\">First Name</label>
                  <input type=\"text\" id=\"fname\" class=\"form-control\">
                </div>
                <div class=\"col-md-6\">
                  <label class=\"text-black\" for=\"lname\">Last Name</label>
                  <input type=\"text\" id=\"lname\" class=\"form-control\">
                </div>
              </div>

              <div class=\"row form-group\">
                
                <div class=\"col-md-12\">
                  <label class=\"text-black\" for=\"email\">Email</label> 
                  <input type=\"email\" id=\"email\" class=\"form-control\">
                </div>
              </div>

              <div class=\"row form-group\">
                
                <div class=\"col-md-12\">
                  <label class=\"text-black\" for=\"subject\">Subject</label> 
                  <input type=\"subject\" id=\"subject\" class=\"form-control\">
                </div>
              </div>

              <div class=\"row form-group\">
                <div class=\"col-md-12\">
                  <label class=\"text-black\" for=\"message\">Message</label> 
                  <textarea name=\"message\" id=\"message\" cols=\"30\" rows=\"7\" class=\"form-control\" placeholder=\"Write your notes or questions here...\"></textarea>
                </div>
              </div>

              <div class=\"row form-group\">
                <div class=\"col-md-12\">
                  <input type=\"submit\" value=\"Send Message\" class=\"btn btn-primary btn-md text-white\">
                </div>
              </div>
            </form>
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
                  <li><a href=\"#about-section\" class=\"smoothscroll\">About Us</a></li>
                  <li><a href=\"#blog-section\" class=\"smoothscroll\">Blog</a></li>
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
              <p>Copyright &copy;
                <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made
                with <i class=\"icon-heart-o\" aria-hidden=\"true\"></i> by <a href=\"#\">Safe Spot</a>
              </p>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src=\"js/jquery-3.3.1.min.js\"></script>
  <script src=\"js/jquery-ui.js\"></script>
  <script src=\"js/popper.min.js\"></script>
  <script src=\"js/bootstrap.min.js\"></script>
  <script src=\"js/owl.carousel.min.js\"></script>
  <script src=\"js/jquery.countdown.min.js\"></script>
  <script src=\"js/jquery.easing.1.3.js\"></script>
  <script src=\"js/aos.js\"></script>
  <script src=\"js/jquery.fancybox.min.js\"></script>
  <script src=\"js/jquery.sticky.js\"></script>
  <script src=\"js/isotope.pkgd.min.js\"></script>

  <script src=\"js/main.js\"></script>

  </body>
</html>", "index.html.twig", "/var/safe-spot/safe-spot/templates/index.html.twig");
    }
}
