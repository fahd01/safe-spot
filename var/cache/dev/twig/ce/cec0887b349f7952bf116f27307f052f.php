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

/* base.html.twig */
class __TwigTemplate_99b461a093e10a12fb90a5c1703eb069 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'importmap' => [$this, 'block_importmap'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <!-- Required meta tags -->
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <!-- base:css -->
  <link rel=\"stylesheet\" href=\"/dashboard-template/vendors/typicons/typicons.css\">
  <link rel=\"stylesheet\" href=\"/dashboard-template/vendors/css/vendor.bundle.base.css\">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel=\"stylesheet\" href=\"/dashboard-template/css/vertical-layout-light/style.css\">
  <!-- endinject -->
  <link rel=\"shortcut icon\" href=\"/dashboard-template/images/favicon.png\" />

  <title>";
        // line 19
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "
  ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "
</head>
<body>
  <div class=\"container-scroller\">
    <!-- partial:partials/_navbar.html -->
    <nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
      <div class=\"navbar-brand-wrapper d-flex justify-content-center\">
        <div class=\"navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100\">
          <a class=\"navbar-brand brand-logo\" href=\"index.html\">
            <img src=\"/dashboard-template/images/logo.svg\" alt=\"logo\"/>
          </a>
          <a class=\"navbar-brand brand-logo-mini\" href=\"index.html\"><img src=\"/dashboard-template/images/logo-mini.svg\" alt=\"logo\"/></a>
          <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
            <span class=\"typcn typcn-th-menu\"></span>
          </button>
        </div>
      </div>
      <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
        <ul class=\"navbar-nav mr-lg-2\">
          <li class=\"nav-item nav-profile dropdown\">
            <a class=\"nav-link\" href=\"#\" data-toggle=\"dropdown\" id=\"profileDropdown\">
              <img src=\"/dashboard-template/images/faces/face5.jpg\" alt=\"profile\"/>
              <span class=\"nav-profile-name\">Eugenia Mullins</span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
              <a class=\"dropdown-item\">
                <i class=\"typcn typcn-cog-outline text-primary\"></i>
                Settings
              </a>
              <a class=\"dropdown-item\">
                <i class=\"typcn typcn-eject text-primary\"></i>
                Logout
              </a>
            </div>
          </li>
          <li class=\"nav-item nav-user-status dropdown\">
              <p class=\"mb-0\">Last login was 23 hours ago.</p>
          </li>
        </ul>
        <ul class=\"navbar-nav navbar-nav-right\">
          <li class=\"nav-item nav-date dropdown\">
            <a class=\"nav-link d-flex justify-content-center align-items-center\" href=\"javascript:;\">
              <h6 class=\"date mb-0\">Today : Mar 23</h6>
              <i class=\"typcn typcn-calendar\"></i>
            </a>
          </li>
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center\" id=\"messageDropdown\" href=\"#\" data-toggle=\"dropdown\">
              <i class=\"typcn typcn-cog-outline mx-0\"></i>
              <span class=\"count\"></span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"messageDropdown\">
              <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Messages</p>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                    <img src=\"/dashboard-template/images/faces/face4.jpg\" alt=\"image\" class=\"profile-pic\">
                </div>
                <div class=\"preview-item-content flex-grow\">
                  <h6 class=\"preview-subject ellipsis font-weight-normal\">David Grey
                  </h6>
                  <p class=\"font-weight-light small-text text-muted mb-0\">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                    <img src=\"/dashboard-template/images/faces/face2.jpg\" alt=\"image\" class=\"profile-pic\">
                </div>
                <div class=\"preview-item-content flex-grow\">
                  <h6 class=\"preview-subject ellipsis font-weight-normal\">Tim Cook
                  </h6>
                  <p class=\"font-weight-light small-text text-muted mb-0\">
                    New product launch
                  </p>
                </div>
              </a>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                    <img src=\"/dashboard-template/images/faces/face3.jpg\" alt=\"image\" class=\"profile-pic\">
                </div>
                <div class=\"preview-item-content flex-grow\">
                  <h6 class=\"preview-subject ellipsis font-weight-normal\"> Johnson
                  </h6>
                  <p class=\"font-weight-light small-text text-muted mb-0\">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class=\"nav-item dropdown mr-0\">
            <a class=\"nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center\" id=\"notificationDropdown\" href=\"#\" data-toggle=\"dropdown\">
              <i class=\"typcn typcn-bell mx-0\"></i>
              <span class=\"count\"></span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
              <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Notifications</p>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon bg-success\">
                    <i class=\"typcn typcn-info mx-0\"></i>
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <h6 class=\"preview-subject font-weight-normal\">Application Error</h6>
                  <p class=\"font-weight-light small-text mb-0 text-muted\">
                    Just now
                  </p>
                </div>
              </a>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon bg-warning\">
                    <i class=\"typcn typcn-cog-outline mx-0\"></i>
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <h6 class=\"preview-subject font-weight-normal\">Settings</h6>
                  <p class=\"font-weight-light small-text mb-0 text-muted\">
                    Private message
                  </p>
                </div>
              </a>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon bg-info\">
                    <i class=\"typcn typcn-user mx-0\"></i> 
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <h6 class=\"preview-subject font-weight-normal\">New user registration</h6>
                  <p class=\"font-weight-light small-text mb-0 text-muted\">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
        </ul>
        <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
          <span class=\"typcn typcn-th-menu\"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <nav class=\"navbar-breadcrumb col-xl-12 col-12 d-flex flex-row p-0\">
      <div class=\"navbar-links-wrapper d-flex align-items-stretch\">
        <div class=\"nav-link\">
          <a href=\"javascript:;\"><i class=\"typcn typcn-calendar-outline\"></i></a>
        </div>
        <div class=\"nav-link\">
          <a href=\"javascript:;\"><i class=\"typcn typcn-mail\"></i></a>
        </div>
        <div class=\"nav-link\">
          <a href=\"javascript:;\"><i class=\"typcn typcn-folder\"></i></a>
        </div>
        <div class=\"nav-link\">
          <a href=\"javascript:;\"><i class=\"typcn typcn-document-text\"></i></a>
        </div>
      </div>
      <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
        <ul class=\"navbar-nav mr-lg-2\">
          <li class=\"nav-item ml-0\">
            <h4 class=\"mb-0\">Dashboard</h4>
          </li>
          <li class=\"nav-item\">
            <div class=\"d-flex align-items-baseline\">
              <p class=\"mb-0\">Home</p>
              <i class=\"typcn typcn-chevron-right\"></i>
              <p class=\"mb-0\">Main Dahboard</p>
            </div>
          </li>
        </ul>
        <ul class=\"navbar-nav navbar-nav-right\">
          <li class=\"nav-item nav-search d-none d-md-block mr-0\">
            <div class=\"input-group\">
              <input type=\"text\" class=\"form-control\" placeholder=\"Search...\" aria-label=\"search\" aria-describedby=\"search\">
              <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"search\">
                  <i class=\"typcn typcn-zoom\"></i>
                </span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <div class=\"container-fluid page-body-wrapper\">
      <!-- partial:partials/_settings-panel.html -->
      <div class=\"theme-setting-wrapper\">
        <div id=\"settings-trigger\"><i class=\"typcn typcn-cog-outline\"></i></div>
        <div id=\"theme-settings\" class=\"settings-panel\">
          <i class=\"settings-close typcn typcn-times\"></i>
          <p class=\"settings-heading\">SIDEBAR SKINS</p>
          <div class=\"sidebar-bg-options selected\" id=\"sidebar-light-theme\"><div class=\"img-ss rounded-circle bg-light border mr-3\"></div>Light</div>
          <div class=\"sidebar-bg-options\" id=\"sidebar-dark-theme\"><div class=\"img-ss rounded-circle bg-dark border mr-3\"></div>Dark</div>
          <p class=\"settings-heading mt-2\">HEADER SKINS</p>
          <div class=\"color-tiles mx-0 px-4\">
            <div class=\"tiles success\"></div>
            <div class=\"tiles warning\"></div>
            <div class=\"tiles danger\"></div>
            <div class=\"tiles info\"></div>
            <div class=\"tiles dark\"></div>
            <div class=\"tiles default\"></div>
          </div>
        </div>
      </div>
      <div id=\"right-sidebar\" class=\"settings-panel\">
        <i class=\"settings-close typcn typcn-times\"></i>
        <ul class=\"nav nav-tabs\" id=\"setting-panel\" role=\"tablist\">
          <li class=\"nav-item\">
            <a class=\"nav-link active\" id=\"todo-tab\" data-toggle=\"tab\" href=\"#todo-section\" role=\"tab\" aria-controls=\"todo-section\" aria-expanded=\"true\">TO DO LIST</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" id=\"chats-tab\" data-toggle=\"tab\" href=\"#chats-section\" role=\"tab\" aria-controls=\"chats-section\">CHATS</a>
          </li>
        </ul>
        <div class=\"tab-content\" id=\"setting-content\">
          <div class=\"tab-pane fade show active scroll-wrapper\" id=\"todo-section\" role=\"tabpanel\" aria-labelledby=\"todo-section\">
            <div class=\"add-items d-flex px-3 mb-0\">
              <form class=\"form w-100\">
                <div class=\"form-group d-flex\">
                  <input type=\"text\" class=\"form-control todo-list-input\" placeholder=\"Add To-do\">
                  <button type=\"submit\" class=\"add btn btn-primary todo-list-add-btn\" id=\"add-task\">Add</button>
                </div>
              </form>
            </div>
            <div class=\"list-wrapper px-3\">
              <ul class=\"d-flex flex-column-reverse todo-list\">
                <li>
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class=\"remove typcn typcn-delete-outline\"></i>
                </li>
                <li>
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class=\"remove typcn typcn-delete-outline\"></i>
                </li>
                <li>
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class=\"remove typcn typcn-delete-outline\"></i>
                </li>
                <li class=\"completed\">
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class=\"remove typcn typcn-delete-outline\"></i>
                </li>
                <li class=\"completed\">
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\" checked>
                      Project review
                    </label>
                  </div>
                  <i class=\"remove typcn typcn-delete-outline\"></i>
                </li>
              </ul>
            </div>
            <div class=\"events py-4 border-bottom px-3\">
              <div class=\"wrapper d-flex mb-2\">
                <i class=\"typcn typcn-media-record-outline text-primary mr-2\"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class=\"mb-0 font-weight-thin text-gray\">Creating component page</p>
              <p class=\"text-gray mb-0\">build a js based app</p>
            </div>
            <div class=\"events pt-4 px-3\">
              <div class=\"wrapper d-flex mb-2\">
                <i class=\"typcn typcn-media-record-outline text-primary mr-2\"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class=\"mb-0 font-weight-thin text-gray\">Meeting with Alisa</p>
              <p class=\"text-gray mb-0 \">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class=\"tab-pane fade\" id=\"chats-section\" role=\"tabpanel\" aria-labelledby=\"chats-section\">
            <div class=\"d-flex align-items-center justify-content-between border-bottom\">
              <p class=\"settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0\">Friends</p>
              <small class=\"settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal\">See All</small>
            </div>
            <ul class=\"chat-list\">
              <li class=\"list active\">
                <div class=\"profile\"><img src=\"/dashboard-template/images/faces/face1.jpg\" alt=\"image\"><span class=\"online\"></span></div>
                <div class=\"info\">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class=\"text-muted my-auto\">19 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"/dashboard-template/images/faces/face2.jpg\" alt=\"image\"><span class=\"offline\"></span></div>
                <div class=\"info\">
                  <div class=\"wrapper d-flex\">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class=\"badge badge-success badge-pill my-auto mx-2\">4</div>
                <small class=\"text-muted my-auto\">23 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"/dashboard-template/images/faces/face3.jpg\" alt=\"image\"><span class=\"online\"></span></div>
                <div class=\"info\">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class=\"text-muted my-auto\">14 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"/dashboard-template/images/faces/face4.jpg\" alt=\"image\"><span class=\"offline\"></span></div>
                <div class=\"info\">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class=\"text-muted my-auto\">2 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"/dashboard-template/images/faces/face5.jpg\" alt=\"image\"><span class=\"online\"></span></div>
                <div class=\"info\">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class=\"text-muted my-auto\">5 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"/dashboard-template/images/faces/face6.jpg\" alt=\"image\"><span class=\"online\"></span></div>
                <div class=\"info\">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class=\"text-muted my-auto\">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <ul class=\"nav\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"index.html\">
              <i class=\"typcn typcn-device-desktop menu-icon\"></i>
              <span class=\"menu-title\">Dashboard</span>
              <div class=\"badge badge-danger\">new</div>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
              <i class=\"typcn typcn-document-text menu-icon\"></i>
              <span class=\"menu-title\">UI Elements</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"ui-basic\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/ui-features/buttons.html\">Buttons</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/ui-features/dropdowns.html\">Dropdowns</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/ui-features/typography.html\">Typography</a></li>
              </ul>
            </div>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#form-elements\" aria-expanded=\"false\" aria-controls=\"form-elements\">
              <i class=\"typcn typcn-film menu-icon\"></i>
              <span class=\"menu-title\">Form elements</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"form-elements\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/forms/basic_elements.html\">Basic Elements</a></li>
              </ul>
            </div>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#charts\" aria-expanded=\"false\" aria-controls=\"charts\">
              <i class=\"typcn typcn-chart-pie-outline menu-icon\"></i>
              <span class=\"menu-title\">Charts</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"charts\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/charts/chartjs.html\">ChartJs</a></li>
              </ul>
            </div>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#tables\" aria-expanded=\"false\" aria-controls=\"tables\">
              <i class=\"typcn typcn-th-small-outline menu-icon\"></i>
              <span class=\"menu-title\">Tables</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"tables\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/tables/basic-table.html\">Basic table</a></li>
              </ul>
            </div>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#icons\" aria-expanded=\"false\" aria-controls=\"icons\">
              <i class=\"typcn typcn-compass menu-icon\"></i>
              <span class=\"menu-title\">Icons</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"icons\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/icons/mdi.html\">Mdi icons</a></li>
              </ul>
            </div>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#auth\" aria-expanded=\"false\" aria-controls=\"auth\">
              <i class=\"typcn typcn-user-add-outline menu-icon\"></i>
              <span class=\"menu-title\">User Pages</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"auth\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/samples/login.html\"> Login </a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/samples/register.html\"> Register </a></li>
              </ul>
            </div>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#error\" aria-expanded=\"false\" aria-controls=\"error\">
              <i class=\"typcn typcn-globe-outline menu-icon\"></i>
              <span class=\"menu-title\">Error pages</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"error\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/samples/error-404.html\"> 404 </a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/samples/error-500.html\"> 500 </a></li>
              </ul>
            </div>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"https://bootstrapdash.com/demo/polluxui-free/docs/documentation.html\">
              <i class=\"typcn typcn-mortar-board menu-icon\"></i>
              <span class=\"menu-title\">Documentation</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class=\"main-panel\">
        <div class=\"content-wrapper\">
          <!-- twig page bodies will be inserted here -->
           ";
        // line 495
        $this->displayBlock('body', $context, $blocks);
        // line 496
        echo "        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class=\"footer\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                        <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">Copyright © 2024 <a href=\"#\" class=\"text-muted\" target=\"_blank\">Safe Spot</a>. All rights reserved.</span>
                        <span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-muted\"> <a href=\"#\" class=\"text-muted\" target=\"_blank\">Insert social media icons</a></span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src=\"/dashboard-template/vendors/js/vendor.bundle.base.js\"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src=\"/dashboard-template/vendors/chart.js/Chart.min.js\"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src=\"/dashboard-template/js/off-canvas.js\"></script>
  <script src=\"/dashboard-template/js/hoverable-collapse.js\"></script>
  <script src=\"/dashboard-template/js/template.js\"></script>
  <script src=\"/dashboard-template/js/settings.js\"></script>
  <script src=\"/dashboard-template/js/todolist.js\"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src=\"/dashboard-template/js/dashboard.js\"></script>
  <!-- End custom js for this page-->
</body>

</html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 19
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 22
        echo "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "  ";
        $this->displayBlock('importmap', $context, $blocks);
        // line 26
        echo "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 25
    public function block_importmap($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap("app");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 495
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  684 => 495,  665 => 25,  655 => 26,  652 => 25,  642 => 24,  632 => 22,  622 => 21,  603 => 19,  552 => 496,  550 => 495,  80 => 27,  78 => 24,  75 => 23,  73 => 21,  68 => 19,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <!-- Required meta tags -->
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <!-- base:css -->
  <link rel=\"stylesheet\" href=\"/dashboard-template/vendors/typicons/typicons.css\">
  <link rel=\"stylesheet\" href=\"/dashboard-template/vendors/css/vendor.bundle.base.css\">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel=\"stylesheet\" href=\"/dashboard-template/css/vertical-layout-light/style.css\">
  <!-- endinject -->
  <link rel=\"shortcut icon\" href=\"/dashboard-template/images/favicon.png\" />

  <title>{% block title %}Welcome!{% endblock %}</title>

  {% block stylesheets %}
  {% endblock %}

  {% block javascripts %}
  {% block importmap %}{{ importmap('app') }}{% endblock %}
  {% endblock %}

</head>
<body>
  <div class=\"container-scroller\">
    <!-- partial:partials/_navbar.html -->
    <nav class=\"navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row\">
      <div class=\"navbar-brand-wrapper d-flex justify-content-center\">
        <div class=\"navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100\">
          <a class=\"navbar-brand brand-logo\" href=\"index.html\">
            <img src=\"/dashboard-template/images/logo.svg\" alt=\"logo\"/>
          </a>
          <a class=\"navbar-brand brand-logo-mini\" href=\"index.html\"><img src=\"/dashboard-template/images/logo-mini.svg\" alt=\"logo\"/></a>
          <button class=\"navbar-toggler navbar-toggler align-self-center\" type=\"button\" data-toggle=\"minimize\">
            <span class=\"typcn typcn-th-menu\"></span>
          </button>
        </div>
      </div>
      <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
        <ul class=\"navbar-nav mr-lg-2\">
          <li class=\"nav-item nav-profile dropdown\">
            <a class=\"nav-link\" href=\"#\" data-toggle=\"dropdown\" id=\"profileDropdown\">
              <img src=\"/dashboard-template/images/faces/face5.jpg\" alt=\"profile\"/>
              <span class=\"nav-profile-name\">Eugenia Mullins</span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown\" aria-labelledby=\"profileDropdown\">
              <a class=\"dropdown-item\">
                <i class=\"typcn typcn-cog-outline text-primary\"></i>
                Settings
              </a>
              <a class=\"dropdown-item\">
                <i class=\"typcn typcn-eject text-primary\"></i>
                Logout
              </a>
            </div>
          </li>
          <li class=\"nav-item nav-user-status dropdown\">
              <p class=\"mb-0\">Last login was 23 hours ago.</p>
          </li>
        </ul>
        <ul class=\"navbar-nav navbar-nav-right\">
          <li class=\"nav-item nav-date dropdown\">
            <a class=\"nav-link d-flex justify-content-center align-items-center\" href=\"javascript:;\">
              <h6 class=\"date mb-0\">Today : Mar 23</h6>
              <i class=\"typcn typcn-calendar\"></i>
            </a>
          </li>
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center\" id=\"messageDropdown\" href=\"#\" data-toggle=\"dropdown\">
              <i class=\"typcn typcn-cog-outline mx-0\"></i>
              <span class=\"count\"></span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"messageDropdown\">
              <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Messages</p>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                    <img src=\"/dashboard-template/images/faces/face4.jpg\" alt=\"image\" class=\"profile-pic\">
                </div>
                <div class=\"preview-item-content flex-grow\">
                  <h6 class=\"preview-subject ellipsis font-weight-normal\">David Grey
                  </h6>
                  <p class=\"font-weight-light small-text text-muted mb-0\">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                    <img src=\"/dashboard-template/images/faces/face2.jpg\" alt=\"image\" class=\"profile-pic\">
                </div>
                <div class=\"preview-item-content flex-grow\">
                  <h6 class=\"preview-subject ellipsis font-weight-normal\">Tim Cook
                  </h6>
                  <p class=\"font-weight-light small-text text-muted mb-0\">
                    New product launch
                  </p>
                </div>
              </a>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                    <img src=\"/dashboard-template/images/faces/face3.jpg\" alt=\"image\" class=\"profile-pic\">
                </div>
                <div class=\"preview-item-content flex-grow\">
                  <h6 class=\"preview-subject ellipsis font-weight-normal\"> Johnson
                  </h6>
                  <p class=\"font-weight-light small-text text-muted mb-0\">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class=\"nav-item dropdown mr-0\">
            <a class=\"nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center\" id=\"notificationDropdown\" href=\"#\" data-toggle=\"dropdown\">
              <i class=\"typcn typcn-bell mx-0\"></i>
              <span class=\"count\"></span>
            </a>
            <div class=\"dropdown-menu dropdown-menu-right navbar-dropdown preview-list\" aria-labelledby=\"notificationDropdown\">
              <p class=\"mb-0 font-weight-normal float-left dropdown-header\">Notifications</p>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon bg-success\">
                    <i class=\"typcn typcn-info mx-0\"></i>
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <h6 class=\"preview-subject font-weight-normal\">Application Error</h6>
                  <p class=\"font-weight-light small-text mb-0 text-muted\">
                    Just now
                  </p>
                </div>
              </a>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon bg-warning\">
                    <i class=\"typcn typcn-cog-outline mx-0\"></i>
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <h6 class=\"preview-subject font-weight-normal\">Settings</h6>
                  <p class=\"font-weight-light small-text mb-0 text-muted\">
                    Private message
                  </p>
                </div>
              </a>
              <a class=\"dropdown-item preview-item\">
                <div class=\"preview-thumbnail\">
                  <div class=\"preview-icon bg-info\">
                    <i class=\"typcn typcn-user mx-0\"></i> 
                  </div>
                </div>
                <div class=\"preview-item-content\">
                  <h6 class=\"preview-subject font-weight-normal\">New user registration</h6>
                  <p class=\"font-weight-light small-text mb-0 text-muted\">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
        </ul>
        <button class=\"navbar-toggler navbar-toggler-right d-lg-none align-self-center\" type=\"button\" data-toggle=\"offcanvas\">
          <span class=\"typcn typcn-th-menu\"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <nav class=\"navbar-breadcrumb col-xl-12 col-12 d-flex flex-row p-0\">
      <div class=\"navbar-links-wrapper d-flex align-items-stretch\">
        <div class=\"nav-link\">
          <a href=\"javascript:;\"><i class=\"typcn typcn-calendar-outline\"></i></a>
        </div>
        <div class=\"nav-link\">
          <a href=\"javascript:;\"><i class=\"typcn typcn-mail\"></i></a>
        </div>
        <div class=\"nav-link\">
          <a href=\"javascript:;\"><i class=\"typcn typcn-folder\"></i></a>
        </div>
        <div class=\"nav-link\">
          <a href=\"javascript:;\"><i class=\"typcn typcn-document-text\"></i></a>
        </div>
      </div>
      <div class=\"navbar-menu-wrapper d-flex align-items-center justify-content-end\">
        <ul class=\"navbar-nav mr-lg-2\">
          <li class=\"nav-item ml-0\">
            <h4 class=\"mb-0\">Dashboard</h4>
          </li>
          <li class=\"nav-item\">
            <div class=\"d-flex align-items-baseline\">
              <p class=\"mb-0\">Home</p>
              <i class=\"typcn typcn-chevron-right\"></i>
              <p class=\"mb-0\">Main Dahboard</p>
            </div>
          </li>
        </ul>
        <ul class=\"navbar-nav navbar-nav-right\">
          <li class=\"nav-item nav-search d-none d-md-block mr-0\">
            <div class=\"input-group\">
              <input type=\"text\" class=\"form-control\" placeholder=\"Search...\" aria-label=\"search\" aria-describedby=\"search\">
              <div class=\"input-group-prepend\">
                <span class=\"input-group-text\" id=\"search\">
                  <i class=\"typcn typcn-zoom\"></i>
                </span>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <div class=\"container-fluid page-body-wrapper\">
      <!-- partial:partials/_settings-panel.html -->
      <div class=\"theme-setting-wrapper\">
        <div id=\"settings-trigger\"><i class=\"typcn typcn-cog-outline\"></i></div>
        <div id=\"theme-settings\" class=\"settings-panel\">
          <i class=\"settings-close typcn typcn-times\"></i>
          <p class=\"settings-heading\">SIDEBAR SKINS</p>
          <div class=\"sidebar-bg-options selected\" id=\"sidebar-light-theme\"><div class=\"img-ss rounded-circle bg-light border mr-3\"></div>Light</div>
          <div class=\"sidebar-bg-options\" id=\"sidebar-dark-theme\"><div class=\"img-ss rounded-circle bg-dark border mr-3\"></div>Dark</div>
          <p class=\"settings-heading mt-2\">HEADER SKINS</p>
          <div class=\"color-tiles mx-0 px-4\">
            <div class=\"tiles success\"></div>
            <div class=\"tiles warning\"></div>
            <div class=\"tiles danger\"></div>
            <div class=\"tiles info\"></div>
            <div class=\"tiles dark\"></div>
            <div class=\"tiles default\"></div>
          </div>
        </div>
      </div>
      <div id=\"right-sidebar\" class=\"settings-panel\">
        <i class=\"settings-close typcn typcn-times\"></i>
        <ul class=\"nav nav-tabs\" id=\"setting-panel\" role=\"tablist\">
          <li class=\"nav-item\">
            <a class=\"nav-link active\" id=\"todo-tab\" data-toggle=\"tab\" href=\"#todo-section\" role=\"tab\" aria-controls=\"todo-section\" aria-expanded=\"true\">TO DO LIST</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" id=\"chats-tab\" data-toggle=\"tab\" href=\"#chats-section\" role=\"tab\" aria-controls=\"chats-section\">CHATS</a>
          </li>
        </ul>
        <div class=\"tab-content\" id=\"setting-content\">
          <div class=\"tab-pane fade show active scroll-wrapper\" id=\"todo-section\" role=\"tabpanel\" aria-labelledby=\"todo-section\">
            <div class=\"add-items d-flex px-3 mb-0\">
              <form class=\"form w-100\">
                <div class=\"form-group d-flex\">
                  <input type=\"text\" class=\"form-control todo-list-input\" placeholder=\"Add To-do\">
                  <button type=\"submit\" class=\"add btn btn-primary todo-list-add-btn\" id=\"add-task\">Add</button>
                </div>
              </form>
            </div>
            <div class=\"list-wrapper px-3\">
              <ul class=\"d-flex flex-column-reverse todo-list\">
                <li>
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class=\"remove typcn typcn-delete-outline\"></i>
                </li>
                <li>
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class=\"remove typcn typcn-delete-outline\"></i>
                </li>
                <li>
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class=\"remove typcn typcn-delete-outline\"></i>
                </li>
                <li class=\"completed\">
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class=\"remove typcn typcn-delete-outline\"></i>
                </li>
                <li class=\"completed\">
                  <div class=\"form-check\">
                    <label class=\"form-check-label\">
                      <input class=\"checkbox\" type=\"checkbox\" checked>
                      Project review
                    </label>
                  </div>
                  <i class=\"remove typcn typcn-delete-outline\"></i>
                </li>
              </ul>
            </div>
            <div class=\"events py-4 border-bottom px-3\">
              <div class=\"wrapper d-flex mb-2\">
                <i class=\"typcn typcn-media-record-outline text-primary mr-2\"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class=\"mb-0 font-weight-thin text-gray\">Creating component page</p>
              <p class=\"text-gray mb-0\">build a js based app</p>
            </div>
            <div class=\"events pt-4 px-3\">
              <div class=\"wrapper d-flex mb-2\">
                <i class=\"typcn typcn-media-record-outline text-primary mr-2\"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class=\"mb-0 font-weight-thin text-gray\">Meeting with Alisa</p>
              <p class=\"text-gray mb-0 \">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class=\"tab-pane fade\" id=\"chats-section\" role=\"tabpanel\" aria-labelledby=\"chats-section\">
            <div class=\"d-flex align-items-center justify-content-between border-bottom\">
              <p class=\"settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0\">Friends</p>
              <small class=\"settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal\">See All</small>
            </div>
            <ul class=\"chat-list\">
              <li class=\"list active\">
                <div class=\"profile\"><img src=\"/dashboard-template/images/faces/face1.jpg\" alt=\"image\"><span class=\"online\"></span></div>
                <div class=\"info\">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class=\"text-muted my-auto\">19 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"/dashboard-template/images/faces/face2.jpg\" alt=\"image\"><span class=\"offline\"></span></div>
                <div class=\"info\">
                  <div class=\"wrapper d-flex\">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class=\"badge badge-success badge-pill my-auto mx-2\">4</div>
                <small class=\"text-muted my-auto\">23 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"/dashboard-template/images/faces/face3.jpg\" alt=\"image\"><span class=\"online\"></span></div>
                <div class=\"info\">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class=\"text-muted my-auto\">14 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"/dashboard-template/images/faces/face4.jpg\" alt=\"image\"><span class=\"offline\"></span></div>
                <div class=\"info\">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class=\"text-muted my-auto\">2 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"/dashboard-template/images/faces/face5.jpg\" alt=\"image\"><span class=\"online\"></span></div>
                <div class=\"info\">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class=\"text-muted my-auto\">5 min</small>
              </li>
              <li class=\"list\">
                <div class=\"profile\"><img src=\"/dashboard-template/images/faces/face6.jpg\" alt=\"image\"><span class=\"online\"></span></div>
                <div class=\"info\">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class=\"text-muted my-auto\">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class=\"sidebar sidebar-offcanvas\" id=\"sidebar\">
        <ul class=\"nav\">
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"index.html\">
              <i class=\"typcn typcn-device-desktop menu-icon\"></i>
              <span class=\"menu-title\">Dashboard</span>
              <div class=\"badge badge-danger\">new</div>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#ui-basic\" aria-expanded=\"false\" aria-controls=\"ui-basic\">
              <i class=\"typcn typcn-document-text menu-icon\"></i>
              <span class=\"menu-title\">UI Elements</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"ui-basic\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/ui-features/buttons.html\">Buttons</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/ui-features/dropdowns.html\">Dropdowns</a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/ui-features/typography.html\">Typography</a></li>
              </ul>
            </div>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#form-elements\" aria-expanded=\"false\" aria-controls=\"form-elements\">
              <i class=\"typcn typcn-film menu-icon\"></i>
              <span class=\"menu-title\">Form elements</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"form-elements\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"pages/forms/basic_elements.html\">Basic Elements</a></li>
              </ul>
            </div>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#charts\" aria-expanded=\"false\" aria-controls=\"charts\">
              <i class=\"typcn typcn-chart-pie-outline menu-icon\"></i>
              <span class=\"menu-title\">Charts</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"charts\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/charts/chartjs.html\">ChartJs</a></li>
              </ul>
            </div>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#tables\" aria-expanded=\"false\" aria-controls=\"tables\">
              <i class=\"typcn typcn-th-small-outline menu-icon\"></i>
              <span class=\"menu-title\">Tables</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"tables\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/tables/basic-table.html\">Basic table</a></li>
              </ul>
            </div>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#icons\" aria-expanded=\"false\" aria-controls=\"icons\">
              <i class=\"typcn typcn-compass menu-icon\"></i>
              <span class=\"menu-title\">Icons</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"icons\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/icons/mdi.html\">Mdi icons</a></li>
              </ul>
            </div>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#auth\" aria-expanded=\"false\" aria-controls=\"auth\">
              <i class=\"typcn typcn-user-add-outline menu-icon\"></i>
              <span class=\"menu-title\">User Pages</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"auth\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/samples/login.html\"> Login </a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/samples/register.html\"> Register </a></li>
              </ul>
            </div>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" data-toggle=\"collapse\" href=\"#error\" aria-expanded=\"false\" aria-controls=\"error\">
              <i class=\"typcn typcn-globe-outline menu-icon\"></i>
              <span class=\"menu-title\">Error pages</span>
              <i class=\"menu-arrow\"></i>
            </a>
            <div class=\"collapse\" id=\"error\">
              <ul class=\"nav flex-column sub-menu\">
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/samples/error-404.html\"> 404 </a></li>
                <li class=\"nav-item\"> <a class=\"nav-link\" href=\"pages/samples/error-500.html\"> 500 </a></li>
              </ul>
            </div>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"https://bootstrapdash.com/demo/polluxui-free/docs/documentation.html\">
              <i class=\"typcn typcn-mortar-board menu-icon\"></i>
              <span class=\"menu-title\">Documentation</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class=\"main-panel\">
        <div class=\"content-wrapper\">
          <!-- twig page bodies will be inserted here -->
           {% block body %}{% endblock %}
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class=\"footer\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <div class=\"d-sm-flex justify-content-center justify-content-sm-between\">
                        <span class=\"text-muted text-center text-sm-left d-block d-sm-inline-block\">Copyright © 2024 <a href=\"#\" class=\"text-muted\" target=\"_blank\">Safe Spot</a>. All rights reserved.</span>
                        <span class=\"float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-muted\"> <a href=\"#\" class=\"text-muted\" target=\"_blank\">Insert social media icons</a></span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  <script src=\"/dashboard-template/vendors/js/vendor.bundle.base.js\"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src=\"/dashboard-template/vendors/chart.js/Chart.min.js\"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src=\"/dashboard-template/js/off-canvas.js\"></script>
  <script src=\"/dashboard-template/js/hoverable-collapse.js\"></script>
  <script src=\"/dashboard-template/js/template.js\"></script>
  <script src=\"/dashboard-template/js/settings.js\"></script>
  <script src=\"/dashboard-template/js/todolist.js\"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src=\"/dashboard-template/js/dashboard.js\"></script>
  <!-- End custom js for this page-->
</body>

</html>

", "base.html.twig", "C:\\Users\\elgay\\IdeaProjects\\safe-spot1\\templates\\base.html.twig");
    }
}
