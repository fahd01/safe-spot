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
class __TwigTemplate_145a5332d5144d4006e8a54256712ec5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 36
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

        // line 37
        echo "
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins',sans-serif;
        }
        body{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            background-image: url('";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/Client/img/content/history2.jpg"), "html", null, true);
        echo "');
            background-repeat:no-repeat;
            background-size:cover;
        }
        .container{
            max-width: 700px;
            width: 100%;
            background-color: #fff;
            padding: 25px 30px;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0,0,0,0.15);
        }
        .container .title{
            font-size: 25px;
            font-weight: 500;
            position: relative;
        }
        .container .title::before{
            content: \"\";
            position: absolute;
            left: 0;
            bottom: 0;
            height: 3px;
            width: 30px;
            border-radius: 5px;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }
        .content form .user-details{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px 0 12px 0;
        }
        form .user-details .input-box{
            margin-bottom: 15px;
            width: calc(100% / 2 - 20px);
        }
        form .input-box span.details{
            display: block;
            font-weight: 500;
            margin-bottom: 5px;
        }
        .user-details .input-box input{
            height: 45px;
            width: 100%;
            outline: none;
            font-size: 16px;
            border-radius: 5px;
            padding-left: 15px;
            border: 1px solid #ccc;
            border-bottom-width: 2px;
            transition: all 0.3s ease;
        }
        .user-details .input-box input:focus,
        .user-details .input-box input:valid{
            border-color: #9b59b6;
        }
        form .gender-details .gender-title{
            font-size: 20px;
            font-weight: 500;
        }
        form .category{
            display: flex;
            width: 80%;
            margin: 14px 0 ;
            justify-content: space-between;
        }
        form .category label{
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        form .category label .dot{
            height: 18px;
            width: 18px;
            border-radius: 50%;
            margin-right: 10px;
            background: #d9d9d9;
            border: 5px solid transparent;
            transition: all 0.3s ease;
        }
        #dot-1:checked ~ .category label .one,
        #dot-2:checked ~ .category label .two,
        #dot-3:checked ~ .category label .three{
            background: #9b59b6;
            border-color: #d9d9d9;
        }
        form input[type=\"radio\"]{
            display: none;
        }
        form .button{
            height: 45px;
            margin: 35px 0
        }
        form .button input{
            height: 100%;
            width: 100%;
            border-radius: 5px;
            border: none;
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }
        form .button input:hover{
            /* transform: scale(0.99); */
            background: linear-gradient(-135deg, #71b7e6, #9b59b6);
        }
        a{
            height: 100%;
            width: 100%;
            border-radius: 512px;
            border: none;
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: linear-gradient(135deg, #443C68, #9b59b6);

        }
        @media(max-width: 584px){
            .container{
                max-width: 100%;
            }
            form .user-details .input-box{
                margin-bottom: 15px;
                width: 100%;
            }
            form .category{
                width: 100%;
            }
            .content form .user-details{
                max-height: 300px;
                overflow-y: scroll;
            }
            .user-details::-webkit-scrollbar{
                width: 5px;
            }
        }
        @media(max-width: 459px){
            .container .content .category{
                flex-direction: column;
            }
        }


        div[class*=box] {
            height: 8.33%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .box-2 { background: linear-gradient(135deg, #71b7e6, #9b59b6); }

        .btn {
            line-height: 50px;
            height: 50px;
            text-align: center;
            width: 250px;
            cursor: pointer;
        }
        .btn-two {
            color: #FFF;
            transition: all 0.5s;
            position: relative;
        }
        .btn-two span {
            z-index: 2;
            display: block;
            position: absolute;
            width: 100%;
            height: 100%;
        }
        .btn-two::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            transition: all 0.5s;
            border: 1px solid rgba(255,255,255,0.2);
            background-color: #7E8A97;
        }
        .btn-two::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            transition: all 0.5s;
            border: 1px solid rgba(255,255,255,0.2);
            background-color: rgba(255,255,255,0.1);
        }
        .btn-two:hover::before {
            transform: rotate(-45deg);
            background-color: rgba(255,255,255,0);
        }
        .btn-two:hover::after {
            transform: rotate(45deg);
            background-color: rgba(255,255,255,0);
        }
    </style>

    ";
        // line 270
        echo " <div class=\"container\">
        <div class=\"title\">Registration</div>
        <div class=\"content\">
            <div >
                <div class=\"message-flash\">
                    ";
        // line 275
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 275, $this->source); })()), "flashes", ["verify_email_error"], "method", false, false, false, 275));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 276
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flash_error"], "html", null, true);
            echo "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 278
        echo "                </div>
                ";
        // line 279
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 279, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

                <div class=\"user-details\">
                    <div class=\"input-box\">
                        <span class=\"details\">Votre Nom</span>
                        ";
        // line 284
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 284, $this->source); })()), "nom", [], "any", false, false, false, 284), 'label', ["label" => " "]);
        echo "
                        ";
        // line 285
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 285, $this->source); })()), "nom", [], "any", false, false, false, 285), 'widget');
        echo "
                        ";
        // line 286
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 286, $this->source); })()), "nom", [], "any", false, false, false, 286), 'errors');
        echo "

                    </div>
                    <div class=\"input-box\">
                        <span class=\"details\">Votre Prenom</span>
                        ";
        // line 291
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 291, $this->source); })()), "prenom", [], "any", false, false, false, 291), 'label', ["label" => " "]);
        echo "
                        ";
        // line 292
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 292, $this->source); })()), "prenom", [], "any", false, false, false, 292), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 293
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 293, $this->source); })()), "prenom", [], "any", false, false, false, 293), 'errors');
        echo "
                    </div>
                    <div class=\"input-box\">
                        <span class=\"details\">Votre Numero du telephone</span>
                        ";
        // line 297
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 297, $this->source); })()), "num_tlph", [], "any", false, false, false, 297), 'label', ["label" => " "]);
        echo "
                        ";
        // line 298
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 298, $this->source); })()), "num_tlph", [], "any", false, false, false, 298), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 299
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 299, $this->source); })()), "num_tlph", [], "any", false, false, false, 299), 'errors');
        echo "
                    </div>
                    <div class=\"input-box\">
                        <span class=\"details\">Votre adresse</span>
                        ";
        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 303, $this->source); })()), "adresse", [], "any", false, false, false, 303), 'label', ["label" => " "]);
        echo "
                        ";
        // line 304
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 304, $this->source); })()), "adresse", [], "any", false, false, false, 304), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 305
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 305, $this->source); })()), "adresse", [], "any", false, false, false, 305), 'errors');
        echo "
                    </div>   
                    <div class=\"input-box\">
                        <span class=\"details\">Votre Date De Naissance</span>
                        ";
        // line 309
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 309, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 309), 'label', ["label" => " "]);
        echo "
                        ";
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 310, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 310), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 311
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 311, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 311), 'errors');
        echo "
                    </div>
                    <div class=\"input-box\">
                        <span class=\"\">Votre password</span>
                        ";
        // line 315
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 315, $this->source); })()), "plainPassword", [], "any", false, false, false, 315), 'label', ["label" => " "]);
        echo "
                        ";
        // line 316
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 316, $this->source); })()), "plainPassword", [], "any", false, false, false, 316), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 317
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 317, $this->source); })()), "plainPassword", [], "any", false, false, false, 317), 'errors');
        echo "
                    </div>
                    <div class=\"input-box\">
                        <span class=\"details\">Votre email</span>
                        ";
        // line 321
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 321, $this->source); })()), "email", [], "any", false, false, false, 321), 'label', ["label" => " "]);
        echo "
                        ";
        // line 322
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 322, $this->source); })()), "email", [], "any", false, false, false, 322), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 323
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 323, $this->source); })()), "email", [], "any", false, false, false, 323), 'errors');
        echo "
                    </div>
                    <div class=\"input-box\">
                        <span class=\"details\">Agree Terms</span>
                        ";
        // line 327
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 327, $this->source); })()), "agreeTerms", [], "any", false, false, false, 327), 'label', ["label" => " "]);
        echo "
                        ";
        // line 328
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 328, $this->source); })()), "agreeTerms", [], "any", false, false, false, 328), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 329
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 329, $this->source); })()), "agreeTerms", [], "any", false, false, false, 329), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"button\">
                    <input type=\"submit\" value=\"Register\">
                </div>

                ";
        // line 336
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 336, $this->source); })()), 'form_end');
        echo "

                <div class=\"box-2\">

                    <div class=\"btn btn-two\">
                        <span>  <a href=\"login\">Login</a></span>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <script type=\"text/javascript\">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/63e6844b474251287912a483/1gou79i31';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
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
        return "registration/register.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  451 => 336,  441 => 329,  437 => 328,  433 => 327,  426 => 323,  422 => 322,  418 => 321,  411 => 317,  407 => 316,  403 => 315,  396 => 311,  392 => 310,  388 => 309,  381 => 305,  377 => 304,  373 => 303,  366 => 299,  362 => 298,  358 => 297,  351 => 293,  347 => 292,  343 => 291,  335 => 286,  331 => 285,  327 => 284,  319 => 279,  316 => 278,  307 => 276,  303 => 275,  296 => 270,  80 => 52,  63 => 37,  44 => 36,);
    }

    public function getSourceContext()
    {
        return new Source("{#
{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
    {% for flash_error in app.flashes('verify_email_error') %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
    {% endfor %}

    <h1>Register</h1>
{{ form_start(registrationForm,{'attr':{'novalidate':'novalidate'  }}) }}
    <div class=\"form-row\">
        <div class=\"col-md-6\">  {{ form_row(registrationForm.nom) }}</div>
        <div class=\"col-md-6\"> {{ form_row(registrationForm.prenom) }}</div>
        <div class=\"col-md-6\">  {{ form_row(registrationForm.num_tlph) }}</div>
        <div class=\"col-md-6\">  {{ form_row(registrationForm.adresse) }}</div>
        <div class=\"col-md-6\">  {{ form_row(registrationForm.date_de_naissance) }}</div>
        </div>
<div class=\"form-row\">
        <div class=\"col-md-6\">    {{ form_row(registrationForm.email) }}</div>
        <div class=\"col-md-6\">    {{ form_row(registrationForm.plainPassword, {
                label: 'Password'
            }) }}</div>

    </div>
    <div class=\"form-group\">
        <button type=\"submit\" class=\"btn btn-primary\" name=\"register\">Register
        </button>
    </div>

    {{ form_end(registrationForm) }}
   
{% endblock %}
#}
{% block body %}

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins',sans-serif;
        }
        body{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
            background-image: url('{{asset('assets/Client/img/content/history2.jpg')}}');
            background-repeat:no-repeat;
            background-size:cover;
        }
        .container{
            max-width: 700px;
            width: 100%;
            background-color: #fff;
            padding: 25px 30px;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0,0,0,0.15);
        }
        .container .title{
            font-size: 25px;
            font-weight: 500;
            position: relative;
        }
        .container .title::before{
            content: \"\";
            position: absolute;
            left: 0;
            bottom: 0;
            height: 3px;
            width: 30px;
            border-radius: 5px;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }
        .content form .user-details{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px 0 12px 0;
        }
        form .user-details .input-box{
            margin-bottom: 15px;
            width: calc(100% / 2 - 20px);
        }
        form .input-box span.details{
            display: block;
            font-weight: 500;
            margin-bottom: 5px;
        }
        .user-details .input-box input{
            height: 45px;
            width: 100%;
            outline: none;
            font-size: 16px;
            border-radius: 5px;
            padding-left: 15px;
            border: 1px solid #ccc;
            border-bottom-width: 2px;
            transition: all 0.3s ease;
        }
        .user-details .input-box input:focus,
        .user-details .input-box input:valid{
            border-color: #9b59b6;
        }
        form .gender-details .gender-title{
            font-size: 20px;
            font-weight: 500;
        }
        form .category{
            display: flex;
            width: 80%;
            margin: 14px 0 ;
            justify-content: space-between;
        }
        form .category label{
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        form .category label .dot{
            height: 18px;
            width: 18px;
            border-radius: 50%;
            margin-right: 10px;
            background: #d9d9d9;
            border: 5px solid transparent;
            transition: all 0.3s ease;
        }
        #dot-1:checked ~ .category label .one,
        #dot-2:checked ~ .category label .two,
        #dot-3:checked ~ .category label .three{
            background: #9b59b6;
            border-color: #d9d9d9;
        }
        form input[type=\"radio\"]{
            display: none;
        }
        form .button{
            height: 45px;
            margin: 35px 0
        }
        form .button input{
            height: 100%;
            width: 100%;
            border-radius: 5px;
            border: none;
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: linear-gradient(135deg, #71b7e6, #9b59b6);
        }
        form .button input:hover{
            /* transform: scale(0.99); */
            background: linear-gradient(-135deg, #71b7e6, #9b59b6);
        }
        a{
            height: 100%;
            width: 100%;
            border-radius: 512px;
            border: none;
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            letter-spacing: 1px;
            cursor: pointer;
            transition: all 0.3s ease;
            background: linear-gradient(135deg, #443C68, #9b59b6);

        }
        @media(max-width: 584px){
            .container{
                max-width: 100%;
            }
            form .user-details .input-box{
                margin-bottom: 15px;
                width: 100%;
            }
            form .category{
                width: 100%;
            }
            .content form .user-details{
                max-height: 300px;
                overflow-y: scroll;
            }
            .user-details::-webkit-scrollbar{
                width: 5px;
            }
        }
        @media(max-width: 459px){
            .container .content .category{
                flex-direction: column;
            }
        }


        div[class*=box] {
            height: 8.33%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .box-2 { background: linear-gradient(135deg, #71b7e6, #9b59b6); }

        .btn {
            line-height: 50px;
            height: 50px;
            text-align: center;
            width: 250px;
            cursor: pointer;
        }
        .btn-two {
            color: #FFF;
            transition: all 0.5s;
            position: relative;
        }
        .btn-two span {
            z-index: 2;
            display: block;
            position: absolute;
            width: 100%;
            height: 100%;
        }
        .btn-two::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            transition: all 0.5s;
            border: 1px solid rgba(255,255,255,0.2);
            background-color: #7E8A97;
        }
        .btn-two::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            transition: all 0.5s;
            border: 1px solid rgba(255,255,255,0.2);
            background-color: rgba(255,255,255,0.1);
        }
        .btn-two:hover::before {
            transform: rotate(-45deg);
            background-color: rgba(255,255,255,0);
        }
        .btn-two:hover::after {
            transform: rotate(45deg);
            background-color: rgba(255,255,255,0);
        }
    </style>

    {#
    {% for flash_error in app.flashes('verify_email_error') %}
       <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
   {% endfor %}
    #}
 <div class=\"container\">
        <div class=\"title\">Registration</div>
        <div class=\"content\">
            <div >
                <div class=\"message-flash\">
                    {% for flash_error in app.flashes('verify_email_error') %}
                        <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
                    {% endfor %}
                </div>
                {{ form_start(registrationForm,{'attr':{'novalidate':'novalidate'  }}) }}

                <div class=\"user-details\">
                    <div class=\"input-box\">
                        <span class=\"details\">Votre Nom</span>
                        {{  form_label(registrationForm.nom,' ')}}
                        {{ form_widget(registrationForm.nom) }}
                        {{  form_errors(registrationForm.nom)}}

                    </div>
                    <div class=\"input-box\">
                        <span class=\"details\">Votre Prenom</span>
                        {{  form_label(registrationForm.prenom,' ')}}
                        {{ form_widget(registrationForm.prenom,{'attr':{'class':'form-control'}}) }}
                        {{  form_errors(registrationForm.prenom)}}
                    </div>
                    <div class=\"input-box\">
                        <span class=\"details\">Votre Numero du telephone</span>
                        {{  form_label(registrationForm.num_tlph,' ')}}
                        {{ form_widget(registrationForm.num_tlph,{'attr':{'class':'form-control'}}) }}
                        {{  form_errors(registrationForm.num_tlph)}}
                    </div>
                    <div class=\"input-box\">
                        <span class=\"details\">Votre adresse</span>
                        {{  form_label(registrationForm.adresse,' ')}}
                        {{ form_widget(registrationForm.adresse,{'attr':{'class':'form-control'}}) }}
                        {{  form_errors(registrationForm.adresse)}}
                    </div>   
                    <div class=\"input-box\">
                        <span class=\"details\">Votre Date De Naissance</span>
                        {{  form_label(registrationForm.date_de_naissance,' ')}}
                        {{ form_widget(registrationForm.date_de_naissance,{'attr':{'class':'form-control'}}) }}
                        {{  form_errors(registrationForm.date_de_naissance)}}
                    </div>
                    <div class=\"input-box\">
                        <span class=\"\">Votre password</span>
                        {{  form_label(registrationForm.plainPassword,' ')}}
                        {{ form_widget(registrationForm.plainPassword,{'attr':{'class':'form-control'}}) }}
                        {{  form_errors(registrationForm.plainPassword)}}
                    </div>
                    <div class=\"input-box\">
                        <span class=\"details\">Votre email</span>
                        {{  form_label(registrationForm.email,' ')}}
                        {{ form_widget(registrationForm.email,{'attr':{'class':'form-control'}}) }}
                        {{  form_errors(registrationForm.email)}}
                    </div>
                    <div class=\"input-box\">
                        <span class=\"details\">Agree Terms</span>
                        {{  form_label(registrationForm.agreeTerms,' ')}}
                        {{ form_widget(registrationForm.agreeTerms,{'attr':{'class':'form-control'}}) }}
                        {{  form_errors(registrationForm.agreeTerms)}}
                    </div>
                </div>
                <div class=\"button\">
                    <input type=\"submit\" value=\"Register\">
                </div>

                {{ form_end(registrationForm) }}

                <div class=\"box-2\">

                    <div class=\"btn btn-two\">
                        <span>  <a href=\"login\">Login</a></span>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <script type=\"text/javascript\">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/63e6844b474251287912a483/1gou79i31';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
{% endblock %}
", "registration/register.html.twig", "C:\\Users\\user\\Desktop\\safe-spot-main\\templates\\registration\\register.html.twig");
    }
}
