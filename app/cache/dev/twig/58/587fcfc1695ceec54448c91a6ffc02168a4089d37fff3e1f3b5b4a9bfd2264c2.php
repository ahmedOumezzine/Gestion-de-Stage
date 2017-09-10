<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_9ba6d2e1fe77600712cb6fa5809ee678ad5f44d6f9b17f217be59ab8237125e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_889c5dcde24a41f360482d5ed500ad5da0152448e83f609da0594c85beee097e = $this->env->getExtension("native_profiler");
        $__internal_889c5dcde24a41f360482d5ed500ad5da0152448e83f609da0594c85beee097e->enter($__internal_889c5dcde24a41f360482d5ed500ad5da0152448e83f609da0594c85beee097e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<!-- Template Name: Clip-Two - Responsive Admin Template build with Twitter Bootstrap 3.x | Author: ClipTheme -->
<!--[if IE 8]><html class=\"ie8\" lang=\"en\"><![endif]-->
<!--[if IE 9]><html class=\"ie9\" lang=\"en\"><![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
<!--<![endif]-->
<!-- start: HEAD -->
<!-- start: HEAD -->
<head>
    <title>Login </title>
    <!-- start: META -->
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content=\"IE=edge,IE=9,IE=8,chrome=1\" /><![endif]-->
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\">
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
    <meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">
    <meta content=\"\" name=\"description\" />
    <meta content=\"\" name=\"author\" />
    <!-- end: META -->
    <!-- start: GOOGLE FONTS -->
    <link href=\"http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- end: GOOGLE FONTS -->
    <!-- start: MAIN CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/vendor/fontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/vendor/themify-icons/themify-icons.min.css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/vendor/animate.css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/vendor/perfect-scrollbar/perfect-scrollbar.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/vendor/switchery/switchery.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <!-- end: MAIN CSS -->
    <!-- start: CLIP-TWO CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/assets/css/styles.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/assets/css/plugins.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/assets/css/themes/theme-1.css"), "html", null, true);
        echo "\" id=\"skin_color\" />
    <!-- end: CLIP-TWO CSS -->
    <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
    <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
</head>
<!-- end: HEAD -->
<!-- start: BODY -->
<body class=\"login\">
<!-- start: LOGIN -->
<div class=\"row\">
    <div class=\"main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4\">
        <div class=\"logo margin-top-30\">
            <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"Clip-Two\"/>
        </div>
        <!-- start: LOGIN BOX -->
        <div class=\"box-login\">
            ";
        // line 53
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 54
            echo "                <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
            ";
        }
        // line 56
        echo "            <form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                <fieldset>
                    <legend>
                        Sign in to your account
                    </legend>
                    <p>
                        Please enter your name and password to log in.
                    </p>
                    <div class=\"form-group\">
\t\t\t\t\t\t\t\t<span class=\"input-icon\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user\"></i> </span>
                    </div>
                    <div class=\"form-group form-actions\">
\t\t\t\t\t\t\t\t<span class=\"input-icon\">
\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"fa fa-lock\"></i>
\t\t\t\t\t\t\t\t\t<a class=\"forgot\" href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">
                                        I forgot my password
                                    </a> </span>
                    </div>
                    <div class=\"form-actions\">
                        <div class=\"checkbox clip-check check-primary\">
                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\">
                            <label for=\"remember\">
                                ";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                            </label>
                        </div>
                        <button type=\"submit\" id=\"_submit\" name=\"_submit\"class=\"btn btn-primary pull-right\">
                            ";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo " <i class=\"fa fa-arrow-circle-right\"></i>
                        </button>
                    </div>
                </fieldset>
            </form>
            <!-- start: COPYRIGHT -->
            <div class=\"copyright\">
                &copy; <span class=\"current-year\"></span><span class=\"text-bold text-uppercase\"> ClipTheme</span>. <span>All rights reserved</span>
            </div>
            <!-- end: COPYRIGHT -->
        </div>
        <!-- end: LOGIN BOX -->
    </div>
</div>
<!-- end: LOGIN -->
<!-- start: MAIN JAVASCRIPTS -->
<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/vendor/modernizr/modernizr.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/vendor/jquery-cookie/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/vendor/perfect-scrollbar/perfect-scrollbar.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/vendor/switchery/switchery.min.js"), "html", null, true);
        echo "\"></script>
<!-- end: MAIN JAVASCRIPTS -->
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/vendor/jquery-validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<!-- start: CLIP-TWO JAVASCRIPTS -->
<script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/assets/js/main.js"), "html", null, true);
        echo "\"></script>
<!-- start: JavaScript Event Handlers for this page -->
<script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/assets/js/login.js"), "html", null, true);
        echo "\"></script>
<script>
    jQuery(document).ready(function() {
        Main.init();
        Login.init();
    });
</script>
<!-- end: JavaScript Event Handlers for this page -->
<!-- end: CLIP-TWO JAVASCRIPTS -->
</body>
<!-- end: BODY -->
</html>";
        
        $__internal_889c5dcde24a41f360482d5ed500ad5da0152448e83f609da0594c85beee097e->leave($__internal_889c5dcde24a41f360482d5ed500ad5da0152448e83f609da0594c85beee097e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 115,  215 => 113,  209 => 110,  203 => 107,  199 => 106,  195 => 105,  191 => 104,  187 => 103,  183 => 102,  164 => 86,  157 => 82,  146 => 74,  141 => 72,  131 => 67,  118 => 57,  113 => 56,  107 => 54,  105 => 53,  98 => 49,  83 => 37,  79 => 36,  75 => 35,  69 => 32,  65 => 31,  61 => 30,  57 => 29,  53 => 28,  49 => 27,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <!DOCTYPE html>*/
/* <!-- Template Name: Clip-Two - Responsive Admin Template build with Twitter Bootstrap 3.x | Author: ClipTheme -->*/
/* <!--[if IE 8]><html class="ie8" lang="en"><![endif]-->*/
/* <!--[if IE 9]><html class="ie9" lang="en"><![endif]-->*/
/* <!--[if !IE]><!-->*/
/* <html lang="en">*/
/* <!--<![endif]-->*/
/* <!-- start: HEAD -->*/
/* <!-- start: HEAD -->*/
/* <head>*/
/*     <title>Login </title>*/
/*     <!-- start: META -->*/
/*     <!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->*/
/*     <meta charset="utf-8" />*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">*/
/*     <meta name="apple-mobile-web-app-capable" content="yes">*/
/*     <meta name="apple-mobile-web-app-status-bar-style" content="black">*/
/*     <meta content="" name="description" />*/
/*     <meta content="" name="author" />*/
/*     <!-- end: META -->*/
/*     <!-- start: GOOGLE FONTS -->*/
/*     <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />*/
/*     <!-- end: GOOGLE FONTS -->*/
/*     <!-- start: MAIN CSS -->*/
/*     <link rel="stylesheet" href="{{ asset('Backoffice/vendor/bootstrap/css/bootstrap.min.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('Backoffice/vendor/fontawesome/css/font-awesome.min.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('Backoffice/vendor/themify-icons/themify-icons.min.css') }}">*/
/*     <link href="{{ asset('Backoffice/vendor/animate.css/animate.min.css') }}" rel="stylesheet" media="screen">*/
/*     <link href="{{ asset('Backoffice/vendor/perfect-scrollbar/perfect-scrollbar.min.css') }}" rel="stylesheet" media="screen">*/
/*     <link href="{{ asset('Backoffice/vendor/switchery/switchery.min.css') }}" rel="stylesheet" media="screen">*/
/*     <!-- end: MAIN CSS -->*/
/*     <!-- start: CLIP-TWO CSS -->*/
/*     <link rel="stylesheet" href="{{ asset('Backoffice/assets/css/styles.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('Backoffice/assets/css/plugins.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('Backoffice/assets/css/themes/theme-1.css') }}" id="skin_color" />*/
/*     <!-- end: CLIP-TWO CSS -->*/
/*     <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->*/
/*     <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->*/
/* </head>*/
/* <!-- end: HEAD -->*/
/* <!-- start: BODY -->*/
/* <body class="login">*/
/* <!-- start: LOGIN -->*/
/* <div class="row">*/
/*     <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">*/
/*         <div class="logo margin-top-30">*/
/*             <img src="{{ asset('Backoffice/assets/images/logo.png') }}" alt="Clip-Two"/>*/
/*         </div>*/
/*         <!-- start: LOGIN BOX -->*/
/*         <div class="box-login">*/
/*             {% if error %}*/
/*                 <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*             {% endif %}*/
/*             <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*                 <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                 <fieldset>*/
/*                     <legend>*/
/*                         Sign in to your account*/
/*                     </legend>*/
/*                     <p>*/
/*                         Please enter your name and password to log in.*/
/*                     </p>*/
/*                     <div class="form-group">*/
/* 								<span class="input-icon">*/
/* 									<input type="text" class="form-control" id="username" name="_username" value="{{ last_username }}" required="required" placeholder="{{ 'security.login.username'|trans }}">*/
/* 									<i class="fa fa-user"></i> </span>*/
/*                     </div>*/
/*                     <div class="form-group form-actions">*/
/* 								<span class="input-icon">*/
/* 									<input type="password" class="form-control password" id="password" name="_password" required="required" placeholder="{{ 'security.login.password'|trans }}">*/
/* 									<i class="fa fa-lock"></i>*/
/* 									<a class="forgot" href="{{ path('fos_user_resetting_request') }}">*/
/*                                         I forgot my password*/
/*                                     </a> </span>*/
/*                     </div>*/
/*                     <div class="form-actions">*/
/*                         <div class="checkbox clip-check check-primary">*/
/*                             <input type="checkbox" id="remember_me" name="_remember_me" value="on">*/
/*                             <label for="remember">*/
/*                                 {{ 'security.login.remember_me'|trans }}*/
/*                             </label>*/
/*                         </div>*/
/*                         <button type="submit" id="_submit" name="_submit"class="btn btn-primary pull-right">*/
/*                             {{ 'security.login.submit'|trans }} <i class="fa fa-arrow-circle-right"></i>*/
/*                         </button>*/
/*                     </div>*/
/*                 </fieldset>*/
/*             </form>*/
/*             <!-- start: COPYRIGHT -->*/
/*             <div class="copyright">*/
/*                 &copy; <span class="current-year"></span><span class="text-bold text-uppercase"> ClipTheme</span>. <span>All rights reserved</span>*/
/*             </div>*/
/*             <!-- end: COPYRIGHT -->*/
/*         </div>*/
/*         <!-- end: LOGIN BOX -->*/
/*     </div>*/
/* </div>*/
/* <!-- end: LOGIN -->*/
/* <!-- start: MAIN JAVASCRIPTS -->*/
/* <script src="{{ asset('Backoffice/vendor/jquery/jquery.min.js') }}"></script>*/
/* <script src="{{ asset('Backoffice/vendor/bootstrap/js/bootstrap.min.js') }}"></script>*/
/* <script src="{{ asset('Backoffice/vendor/modernizr/modernizr.js') }}"></script>*/
/* <script src="{{ asset('Backoffice/vendor/jquery-cookie/jquery.cookie.js') }}"></script>*/
/* <script src="{{ asset('Backoffice/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>*/
/* <script src="{{ asset('Backoffice/vendor/switchery/switchery.min.js') }}"></script>*/
/* <!-- end: MAIN JAVASCRIPTS -->*/
/* <!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->*/
/* <script src="{{ asset('Backoffice/vendor/jquery-validation/jquery.validate.min.js') }}"></script>*/
/* <!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->*/
/* <!-- start: CLIP-TWO JAVASCRIPTS -->*/
/* <script src="{{ asset('Backoffice/assets/js/main.js') }}"></script>*/
/* <!-- start: JavaScript Event Handlers for this page -->*/
/* <script src="{{ asset('Backoffice/assets/js/login.js') }}"></script>*/
/* <script>*/
/*     jQuery(document).ready(function() {*/
/*         Main.init();*/
/*         Login.init();*/
/*     });*/
/* </script>*/
/* <!-- end: JavaScript Event Handlers for this page -->*/
/* <!-- end: CLIP-TWO JAVASCRIPTS -->*/
/* </body>*/
/* <!-- end: BODY -->*/
/* </html>*/
