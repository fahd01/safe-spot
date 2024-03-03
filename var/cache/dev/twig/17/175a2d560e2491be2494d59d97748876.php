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

/* admin/sendMail.html.twig */
class __TwigTemplate_a97633772a46de54084ddd00e57dac47 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/sendMail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/sendMail.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "

    <!-- Font Awesome -->
    <link
            href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\"
            rel=\"stylesheet\"
    />
    <!-- Google Fonts -->
    <link
            href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap\"
            rel=\"stylesheet\"
    />
    <!-- MDB -->
    <link
            href=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css\"
            rel=\"stylesheet\"
    />

    <!-- MDB -->
    <script
            type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js\"
    ></script>


    <section class=\"vh-100\" style=\"background-color: #2779e2;\">
        <div class=\"container h-100\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col-xl-9\">

                    <h1 class=\"text-white mb-4\">sending email </h1>

                    ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_start');
        echo "
                    <div class=\"card\" style=\"border-radius: 15px;\">
                        <div class=\"card-body\">

                            <div class=\"row align-items-center pt-4 pb-3\">
                                <div class=\"col-md-3 ps-5\">

                                    <h6 class=\"mb-0\"> user email adresse</h6>

                                </div>
                                <div class=\"col-md-9 pe-5\">

                                    <input required=\"\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["user_email"]) || array_key_exists("user_email", $context) ? $context["user_email"] : (function () { throw new RuntimeError('Variable "user_email" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control form-control-lg\"
                                           name=\"email\" readonly>
                                </div>
                            </div>

                            <hr class=\"mx-n3\">

                            <div class=\"row align-items-center py-3\">
                                <div class=\"col-md-3 ps-5\">

                                    <h6 class=\"mb-0\">subject</h6>

                                </div>
                                <div class=\"col-md-9 pe-5\">

                                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "subject", [], "any", false, false, false, 61), 'row');
        echo "



                                </div>
                            </div>

                            <hr class=\"mx-n3\">

                            <div class=\"row align-items-center py-3\">
                                <div class=\"col-md-3 ps-5\">

                                    <h6 class=\"mb-0\"> text</h6>

                                </div>
                                <div class=\"col-md-9 pe-5\">


                                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "message", [], "any", false, false, false, 79), 'row', ["id" => "textarea"]);
        echo "



                                </div>
                            </div>

                            <hr class=\"mx-n3\">


                            <hr class=\"mx-n3\">

                            <div class=\"px-5 py-4\">
                                <button type=\"submit\" class=\"btn btn-primary btn-lg\">Send mail</button>
                                <button  class=\"btn btn-warning btn-lg\"><a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dasboard");
        echo "\">return</a></button>
                            </div>
                            ";
        // line 95
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), 'form_end');
        echo "
                            <button id=\"start\" class=\"btn btn-primary btn-block\">
                                Start Recording
                            </button>

                            <button id=\"clear\" class=\"btn btn-danger btn-block\">Clear Text</button>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>







<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

<script>
    var SpeechRecognition = window.webkitSpeechRecognition;

    var recognition = new SpeechRecognition();
    let saveHandle;

    var Textbox = \$(\"#textarea\");
    var instructions = \$(\"#instructions\");

    var Content = \"\";

    recognition.continuous = true;

    recognition.onresult = function (event) {
        var current = event.resultIndex;

        var transcript = event.results[current][0].transcript;

        Content += transcript;
        Textbox.val(Content);
    };

    \$(\"#start\").on(\"click\", function (e) {
        if (\$(this).text() == \"Stop Recording\") {
            \$(this).html(\"Start Recording\");
            \$(\"#instructions\").html(\"\");
            recognition.stop();
        } else {
            \$(this).html(\"Stop Recording\");
            \$(\"#instructions\").html(\"voice in  yallaaa!! \");
            if (Content.length) {
                Content += \" \";
            }
            recognition.start();
        }
    });

    \$(\"#load\").click(function () {
        if (\$(this).html() == \"Modify Changes\") {
            saveFile(saveHandle, Content);
        } else {
            \$(this).html(\"Modify Changes\");
            loadFile();
        }
    });

    async function getNewFileHandle() {
        const handle = await window.chooseFileSystemEntries();
        return handle;
    }


    async function verifyPermission(fileHandle, withWrite) {
        const opts = {};
        if (withWrite) {
            opts.writable = true;
        }
        // Check if we already have permission, if so, return true.
        if ((await fileHandle.queryPermission(opts)) === \"granted\") {
            return true;
        }
        // Request permission to the file, if the user grants permission, return true.
        if ((await fileHandle.requestPermission(opts)) === \"granted\") {
            return true;
        }
        // The user did nt grant permission, return false.
        return false;
    }

    \$(\"#clear\").click(function () {
        Textbox.val(\"\");
        \$(\"#load\").html(\"Load File\");
        Content = \"\";
        \$(\"#start\").html(\"Start Recording\");
    });

    Textbox.on(\"input\", function () {
        Content = \$(this).val();
    });
</script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/sendMail.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  173 => 95,  168 => 93,  151 => 79,  130 => 61,  112 => 46,  97 => 34,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}


    <!-- Font Awesome -->
    <link
            href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css\"
            rel=\"stylesheet\"
    />
    <!-- Google Fonts -->
    <link
            href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap\"
            rel=\"stylesheet\"
    />
    <!-- MDB -->
    <link
            href=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css\"
            rel=\"stylesheet\"
    />

    <!-- MDB -->
    <script
            type=\"text/javascript\"
            src=\"https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js\"
    ></script>


    <section class=\"vh-100\" style=\"background-color: #2779e2;\">
        <div class=\"container h-100\">
            <div class=\"row d-flex justify-content-center align-items-center h-100\">
                <div class=\"col-xl-9\">

                    <h1 class=\"text-white mb-4\">sending email </h1>

                    {{ form_start(form) }}
                    <div class=\"card\" style=\"border-radius: 15px;\">
                        <div class=\"card-body\">

                            <div class=\"row align-items-center pt-4 pb-3\">
                                <div class=\"col-md-3 ps-5\">

                                    <h6 class=\"mb-0\"> user email adresse</h6>

                                </div>
                                <div class=\"col-md-9 pe-5\">

                                    <input required=\"\" value=\"{{ user_email }}\" class=\"form-control form-control-lg\"
                                           name=\"email\" readonly>
                                </div>
                            </div>

                            <hr class=\"mx-n3\">

                            <div class=\"row align-items-center py-3\">
                                <div class=\"col-md-3 ps-5\">

                                    <h6 class=\"mb-0\">subject</h6>

                                </div>
                                <div class=\"col-md-9 pe-5\">

                                    {{ form_row(form.subject) }}



                                </div>
                            </div>

                            <hr class=\"mx-n3\">

                            <div class=\"row align-items-center py-3\">
                                <div class=\"col-md-3 ps-5\">

                                    <h6 class=\"mb-0\"> text</h6>

                                </div>
                                <div class=\"col-md-9 pe-5\">


                                    {{ form_row(form.message , { 'id': 'textarea' }) }}



                                </div>
                            </div>

                            <hr class=\"mx-n3\">


                            <hr class=\"mx-n3\">

                            <div class=\"px-5 py-4\">
                                <button type=\"submit\" class=\"btn btn-primary btn-lg\">Send mail</button>
                                <button  class=\"btn btn-warning btn-lg\"><a href=\"{{ path('admin_dasboard') }}\">return</a></button>
                            </div>
                            {{ form_end(form) }}
                            <button id=\"start\" class=\"btn btn-primary btn-block\">
                                Start Recording
                            </button>

                            <button id=\"clear\" class=\"btn btn-danger btn-block\">Clear Text</button>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>







<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js\"></script>

<script>
    var SpeechRecognition = window.webkitSpeechRecognition;

    var recognition = new SpeechRecognition();
    let saveHandle;

    var Textbox = \$(\"#textarea\");
    var instructions = \$(\"#instructions\");

    var Content = \"\";

    recognition.continuous = true;

    recognition.onresult = function (event) {
        var current = event.resultIndex;

        var transcript = event.results[current][0].transcript;

        Content += transcript;
        Textbox.val(Content);
    };

    \$(\"#start\").on(\"click\", function (e) {
        if (\$(this).text() == \"Stop Recording\") {
            \$(this).html(\"Start Recording\");
            \$(\"#instructions\").html(\"\");
            recognition.stop();
        } else {
            \$(this).html(\"Stop Recording\");
            \$(\"#instructions\").html(\"voice in  yallaaa!! \");
            if (Content.length) {
                Content += \" \";
            }
            recognition.start();
        }
    });

    \$(\"#load\").click(function () {
        if (\$(this).html() == \"Modify Changes\") {
            saveFile(saveHandle, Content);
        } else {
            \$(this).html(\"Modify Changes\");
            loadFile();
        }
    });

    async function getNewFileHandle() {
        const handle = await window.chooseFileSystemEntries();
        return handle;
    }


    async function verifyPermission(fileHandle, withWrite) {
        const opts = {};
        if (withWrite) {
            opts.writable = true;
        }
        // Check if we already have permission, if so, return true.
        if ((await fileHandle.queryPermission(opts)) === \"granted\") {
            return true;
        }
        // Request permission to the file, if the user grants permission, return true.
        if ((await fileHandle.requestPermission(opts)) === \"granted\") {
            return true;
        }
        // The user did nt grant permission, return false.
        return false;
    }

    \$(\"#clear\").click(function () {
        Textbox.val(\"\");
        \$(\"#load\").html(\"Load File\");
        Content = \"\";
        \$(\"#start\").html(\"Start Recording\");
    });

    Textbox.on(\"input\", function () {
        Content = \$(this).val();
    });
</script>

{% endblock %}", "admin/sendMail.html.twig", "C:\\Users\\user\\Desktop\\safe-spot-main\\templates\\admin\\sendMail.html.twig");
    }
}
