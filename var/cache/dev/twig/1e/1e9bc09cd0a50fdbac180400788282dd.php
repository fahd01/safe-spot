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

/* registration/registerEmployee.html.twig */
class __TwigTemplate_fb46e435078042fa53dfa70a29eedc6c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/registerEmployee.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/registerEmployee.html.twig"));

        // line 38
        echo "



";
        // line 42
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

        // line 43
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
        // line 58
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
        // line 276
        echo "    <div class=\"container\">
        <div class=\"title\">Registration Employee</div>
        <div class=\"content\">
            <div >
                <div class=\"message-flash\">
                    ";
        // line 281
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 281, $this->source); })()), "flashes", ["verify_email_error"], "method", false, false, false, 281));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 282
            echo "                        <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flash_error"], "html", null, true);
            echo "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 284
        echo "                </div>
                ";
        // line 285
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 285, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

                <div class=\"user-details\">
                    <div class=\"input-box\">
                        <span class=\"details\">Votre Nom</span>
                        ";
        // line 290
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 290, $this->source); })()), "nom", [], "any", false, false, false, 290), 'label', ["label" => " "]);
        echo "
                        ";
        // line 291
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 291, $this->source); })()), "nom", [], "any", false, false, false, 291), 'widget');
        echo "
                        ";
        // line 292
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 292, $this->source); })()), "nom", [], "any", false, false, false, 292), 'errors');
        echo "

                    </div>
                    <div class=\"input-box\">
                        <span class=\"details\">Votre Prenom</span>
                        ";
        // line 297
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 297, $this->source); })()), "prenom", [], "any", false, false, false, 297), 'label', ["label" => " "]);
        echo "
                        ";
        // line 298
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 298, $this->source); })()), "prenom", [], "any", false, false, false, 298), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 299
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 299, $this->source); })()), "prenom", [], "any", false, false, false, 299), 'errors');
        echo "
                    </div>
                    <div class=\"input-box\">
                        <span class=\"details\">Votre Numer du telephone</span>
                        ";
        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 303, $this->source); })()), "num_tlph", [], "any", false, false, false, 303), 'label', ["label" => " "]);
        echo "
                        ";
        // line 304
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 304, $this->source); })()), "num_tlph", [], "any", false, false, false, 304), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 305
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 305, $this->source); })()), "num_tlph", [], "any", false, false, false, 305), 'errors');
        echo "
                    </div>
                    <div class=\"input-box\">
                        <span class=\"details\">Votre adresse</span>
                        ";
        // line 309
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 309, $this->source); })()), "adresse", [], "any", false, false, false, 309), 'label', ["label" => " "]);
        echo "
                        ";
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 310, $this->source); })()), "adresse", [], "any", false, false, false, 310), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 311
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 311, $this->source); })()), "adresse", [], "any", false, false, false, 311), 'errors');
        echo "
                    </div>
                    <div class=\"input-box\">
                        <span class=\"details\">Votre Date De Naissance</span>
                        ";
        // line 315
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 315, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 315), 'label', ["label" => " "]);
        echo "
                        ";
        // line 316
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 316, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 316), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 317
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 317, $this->source); })()), "date_de_naissance", [], "any", false, false, false, 317), 'errors');
        echo "
                    </div>

                    <div class=\"input-box\">
                        <span class=\"\">Votre password</span>
                        ";
        // line 322
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 322, $this->source); })()), "plainPassword", [], "any", false, false, false, 322), 'label', ["label" => " "]);
        echo "
                        ";
        // line 323
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 323, $this->source); })()), "plainPassword", [], "any", false, false, false, 323), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 324
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 324, $this->source); })()), "plainPassword", [], "any", false, false, false, 324), 'errors');
        echo "
                    </div>
                    <div class=\"input-box\">
                        <span class=\"details\">Votre email</span>
                        ";
        // line 328
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 328, $this->source); })()), "email", [], "any", false, false, false, 328), 'label', ["label" => " "]);
        echo "
                        ";
        // line 329
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 329, $this->source); })()), "email", [], "any", false, false, false, 329), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 330
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 330, $this->source); })()), "email", [], "any", false, false, false, 330), 'errors');
        echo "
                    </div>
                    <div class=\"input-box\">
                        <span class=\"details\">Agree Terms</span>
                        ";
        // line 334
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 334, $this->source); })()), "agreeTerms", [], "any", false, false, false, 334), 'label', ["label" => " "]);
        echo "
                        ";
        // line 335
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 335, $this->source); })()), "agreeTerms", [], "any", false, false, false, 335), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        ";
        // line 336
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 336, $this->source); })()), "agreeTerms", [], "any", false, false, false, 336), 'errors');
        echo "
                    </div>
                </div>
                <div class=\"button\">
                    <input type=\"submit\" value=\"Register\">
                </div>

                ";
        // line 343
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 343, $this->source); })()), 'form_end');
        echo "

                <div class=\"box-2\">

                    <div class=\"btn btn-two\">
                        <span>  <a href=\"login\">Login</a></span>

                    </div>
                </div>

            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "registration/registerEmployee.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  458 => 343,  448 => 336,  444 => 335,  440 => 334,  433 => 330,  429 => 329,  425 => 328,  418 => 324,  414 => 323,  410 => 322,  402 => 317,  398 => 316,  394 => 315,  387 => 311,  383 => 310,  379 => 309,  372 => 305,  368 => 304,  364 => 303,  357 => 299,  353 => 298,  349 => 297,  341 => 292,  337 => 291,  333 => 290,  325 => 285,  322 => 284,  313 => 282,  309 => 281,  302 => 276,  86 => 58,  69 => 43,  50 => 42,  44 => 38,);
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
        <div class=\"title\">Registration Employee</div>
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
                        <span class=\"details\">Votre Numer du telephone</span>
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
{% endblock %}", "registration/registerEmployee.html.twig", "C:\\Users\\user\\Desktop\\safe-spot-main\\templates\\registration\\registerEmployee.html.twig");
    }
}
