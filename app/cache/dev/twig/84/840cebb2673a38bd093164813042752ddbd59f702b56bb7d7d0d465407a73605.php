<?php

/* AdminUsersBundle::layout.html.twig */
class __TwigTemplate_685165578cdf2ff9851872270254eb3e076c7605b7ee84aa1c244e6333830c0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'Menu' => array($this, 'block_Menu'),
            'pagetitle' => array($this, 'block_pagetitle'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUsersBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]><html class=\"ie8\" lang=\"en\"><![endif]-->
<!--[if IE 9]><html class=\"ie9\" lang=\"en\"><![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
<!--<![endif]-->
<!-- start: HEAD -->
<!-- start: HEAD -->
<head>
    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo " </title>
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
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/vendor/fontawesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/vendor/themify-icons/themify-icons.min.css"), "html", null, true);
        echo "\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/vendor/animate.css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/vendor/perfect-scrollbar/perfect-scrollbar.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/vendor/switchery/switchery.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <!-- end: MAIN CSS -->
    <!-- start: CLIP-TWO CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/assets/css/styles.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/assets/css/plugins.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/assets/css/themes/theme-1.css"), "html", null, true);
        echo "\" id=\"skin_color\" />
    <!-- end: CLIP-TWO CSS -->
    <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
    ";
        // line 37
        $this->displayBlock('css', $context, $blocks);
        // line 39
        echo "    <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
</head>
<div id=\"app\" class=\"app-navbar-fixed app-sidebar-fixed\">
    <!-- sidebar -->
    <div class=\"sidebar app-aside\" id=\"sidebar\">
        <div class=\"sidebar-container perfect-scrollbar ps-container ps-active-y\">
            <nav>
                <!-- start: MAIN NAVIGATION MENU -->
                ";
        // line 47
        $this->displayBlock('Menu', $context, $blocks);
        // line 50
        echo "            </nav>
            <div class=\"ps-scrollbar-x-rail\" style=\"left: 0px; bottom: 3px;\"><div class=\"ps-scrollbar-x\" style=\"left: 0px; width: 0px;\"></div>
            </div><div class=\"ps-scrollbar-y-rail\" style=\"top: 0px; height: 234px; right: 3px;\"><div class=\"ps-scrollbar-y\" style=\"top: 0px; height: 74px;\"></div>
            </div>
        </div>
    </div>
    <!-- / sidebar -->
    <div class=\"app-content\">
        <!-- start: TOP NAVBAR -->
        <header class=\"navbar navbar-default navbar-static-top\">
            <!-- start: NAVBAR HEADER -->
            <div class=\"navbar-header\">
                <a href=\"#\" class=\"sidebar-mobile-toggler pull-left hidden-md hidden-lg\" data-toggle-class=\"app-slide-off\" data-toggle-target=\"#app\" data-toggle-click-outside=\"#sidebar\">
                    <i class=\"ti-align-justify\"></i>
                </a>
                <a class=\"navbar-brand\" href=\"#\">
                    <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("backoffice/assets/images/logo.png"), "html", null, true);
        echo "\" alt=\"Clip-Two\" height=\"60px\">
                </a>
                <a href=\"#\" class=\"sidebar-toggler pull-right visible-md visible-lg\" data-toggle-class=\"app-sidebar-closed\" data-toggle-target=\"#app\">
                    <i class=\"ti-align-justify\"></i>
                </a>
                <a class=\"pull-right menu-toggler visible-xs-block\" id=\"menu-toggler\" data-toggle=\"collapse\" href=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <i class=\"ti-view-grid\"></i>
                </a>
            </div>
            <!-- end: NAVBAR HEADER -->
            <!-- start: NAVBAR COLLAPSE -->
            <div class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-right\" style=\"height: auto;\">
                    <!-- start: MESSAGES DROPDOWN -->
                    <li class=\"dropdown\">
                        <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <span class=\"dot-badge partition-red\"></span> <i class=\"ti-comment\"></i> <span>MESSAGES</span>
                        </a>
                        <ul class=\"dropdown-menu dropdown-light dropdown-messages dropdown-large\">
                            <li>
                                <span class=\"dropdown-header\"> Unread messages</span>
                            </li>
                            <li>
                                <div class=\"drop-down-wrapper ps-container\">
                                    <ul>
                                        <li class=\"unread\">
                                            <a href=\"javascript:;\" class=\"unread\">
                                                <div class=\"clearfix\">
                                                    <div class=\"thread-image\">
                                                        <img src=\"./assets/images/avatar-2.jpg\" alt=\"\">
                                                    </div>
                                                    <div class=\"thread-content\">
                                                        <span class=\"author\">Nicole Bell</span>
                                                        <span class=\"preview\">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
                                                        <span class=\"time\"> Just Now</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\" class=\"unread\">
                                                <div class=\"clearfix\">
                                                    <div class=\"thread-image\">
                                                        <img src=\"./assets/images/avatar-3.jpg\" alt=\"\">
                                                    </div>
                                                    <div class=\"thread-content\">
                                                        <span class=\"author\">Steven Thompson</span>
                                                        <span class=\"preview\">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
                                                        <span class=\"time\">8 hrs</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                <div class=\"clearfix\">
                                                    <div class=\"thread-image\">
                                                        <img src=\"./assets/images/avatar-5.jpg\" alt=\"\">
                                                    </div>
                                                    <div class=\"thread-content\">
                                                        <span class=\"author\">Kenneth Ross</span>
                                                        <span class=\"preview\">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
                                                        <span class=\"time\">14 hrs</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class=\"view-all\">
                                <a href=\"#\">
                                    See All
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- end: MESSAGES DROPDOWN -->
                    <li class=\"dropdown current-user\">
                        <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <img src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/assets/images/avatar-1.jpg"), "html", null, true);
        echo "\" alt=\"Peter\"> <span class=\"username\">Peter <i class=\"ti-angle-down\"></i></span>
                        </a>
                        <ul class=\"dropdown-menu dropdown-dark\">
                            <li>
                                <a href=\"";
        // line 151
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users_Profile");
        echo "\">
                                    My Profile
                                </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 156
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users_Agenda");
        echo "\">
                                    My Calendar
                                </a>
                            </li>
                            <li>
                                <a  href=\"";
        // line 161
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users_Messages");
        echo "\">
                                    My Messages (3)
                                </a>
                            </li>
                            <li>
                                <a href=\"";
        // line 166
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">
                                    Log Out
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- end: USER OPTIONS DROPDOWN -->
                </ul>
            </div>
            <!-- end: NAVBAR COLLAPSE -->
        </header>
        <!-- end: TOP NAVBAR -->
        <div class=\"main-content\">
            <div class=\"wrap-content container\" id=\"container\">
                <!-- start: DASHBOARD TITLE -->
                ";
        // line 181
        $this->displayBlock('pagetitle', $context, $blocks);
        // line 183
        echo "

                ";
        // line 185
        $this->displayBlock('body', $context, $blocks);
        // line 188
        echo "            </div>
        </div>
    </div>
    <!-- start: FOOTER -->
    <footer>
        <div class=\"footer-inner\">
            <div class=\"pull-left\">
                © <span class=\"current-year\">2015</span><span class=\"text-bold text-uppercase\">ClipTheme</span>. <span>All rights reserved</span>
            </div>
            <div class=\"pull-right\">
                <span class=\"go-top\"><i class=\"ti-angle-up\"></i></span>
            </div>
        </div>
    </footer>
    <!-- end: FOOTER -->
</div>
<!-- start: MAIN JAVASCRIPTS -->
<script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/vendor/modernizr/modernizr.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/vendor/jquery-cookie/jquery.cookie.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/vendor/perfect-scrollbar/perfect-scrollbar.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/vendor/switchery/switchery.min.js"), "html", null, true);
        echo "\"></script>
<!-- end: MAIN JAVASCRIPTS -->
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
";
        // line 213
        $this->displayBlock('javascript', $context, $blocks);
        // line 216
        echo "<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<!-- start: CLIP-TWO JAVASCRIPTS -->
<script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/assets/js/main.js"), "html", null, true);
        echo "\"></script>
<!-- start: JavaScript Event Handlers for this page -->
<script>
    jQuery(document).ready(function() {
        Main.init();
    });
</script>
<!-- end: JavaScript Event Handlers for this page -->
<!-- end: CLIP-TWO JAVASCRIPTS -->
</body>
<!-- end: BODY -->
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 37
    public function block_css($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 38
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 47
    public function block_Menu($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Menu"));

        // line 48
        echo "
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 181
    public function block_pagetitle($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagetitle"));

        // line 182
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 185
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 186
        echo "                    Hello Admi
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 213
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 214
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminUsersBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  412 => 214,  406 => 213,  398 => 186,  392 => 185,  385 => 182,  379 => 181,  371 => 48,  365 => 47,  358 => 38,  352 => 37,  340 => 10,  320 => 218,  316 => 216,  314 => 213,  308 => 210,  304 => 209,  300 => 208,  296 => 207,  292 => 206,  288 => 205,  269 => 188,  267 => 185,  263 => 183,  261 => 181,  243 => 166,  235 => 161,  227 => 156,  219 => 151,  212 => 147,  128 => 66,  110 => 50,  108 => 47,  98 => 39,  96 => 37,  90 => 34,  86 => 33,  82 => 32,  76 => 29,  72 => 28,  68 => 27,  64 => 26,  60 => 25,  56 => 24,  39 => 10,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!--[if IE 8]><html class=\"ie8\" lang=\"en\"><![endif]-->
<!--[if IE 9]><html class=\"ie9\" lang=\"en\"><![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\">
<!--<![endif]-->
<!-- start: HEAD -->
<!-- start: HEAD -->
<head>
    <title>{% block title %}        {% endblock %} </title>
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
    <link rel=\"stylesheet\" href=\"{{ asset('Backoffice/vendor/bootstrap/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Backoffice/vendor/fontawesome/css/font-awesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Backoffice/vendor/themify-icons/themify-icons.min.css') }}\">
    <link href=\"{{ asset('Backoffice/vendor/animate.css/animate.min.css') }}\" rel=\"stylesheet\" media=\"screen\">
    <link href=\"{{ asset('Backoffice/vendor/perfect-scrollbar/perfect-scrollbar.min.css') }}\" rel=\"stylesheet\" media=\"screen\">
    <link href=\"{{ asset('Backoffice/vendor/switchery/switchery.min.css') }}\" rel=\"stylesheet\" media=\"screen\">
    <!-- end: MAIN CSS -->
    <!-- start: CLIP-TWO CSS -->
    <link rel=\"stylesheet\" href=\"{{ asset('Backoffice/assets/css/styles.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Backoffice/assets/css/plugins.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('Backoffice/assets/css/themes/theme-1.css') }}\" id=\"skin_color\" />
    <!-- end: CLIP-TWO CSS -->
    <!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
    {% block css %}
    {% endblock %}
    <!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
</head>
<div id=\"app\" class=\"app-navbar-fixed app-sidebar-fixed\">
    <!-- sidebar -->
    <div class=\"sidebar app-aside\" id=\"sidebar\">
        <div class=\"sidebar-container perfect-scrollbar ps-container ps-active-y\">
            <nav>
                <!-- start: MAIN NAVIGATION MENU -->
                {% block Menu %}

                {% endblock %}
            </nav>
            <div class=\"ps-scrollbar-x-rail\" style=\"left: 0px; bottom: 3px;\"><div class=\"ps-scrollbar-x\" style=\"left: 0px; width: 0px;\"></div>
            </div><div class=\"ps-scrollbar-y-rail\" style=\"top: 0px; height: 234px; right: 3px;\"><div class=\"ps-scrollbar-y\" style=\"top: 0px; height: 74px;\"></div>
            </div>
        </div>
    </div>
    <!-- / sidebar -->
    <div class=\"app-content\">
        <!-- start: TOP NAVBAR -->
        <header class=\"navbar navbar-default navbar-static-top\">
            <!-- start: NAVBAR HEADER -->
            <div class=\"navbar-header\">
                <a href=\"#\" class=\"sidebar-mobile-toggler pull-left hidden-md hidden-lg\" data-toggle-class=\"app-slide-off\" data-toggle-target=\"#app\" data-toggle-click-outside=\"#sidebar\">
                    <i class=\"ti-align-justify\"></i>
                </a>
                <a class=\"navbar-brand\" href=\"#\">
                    <img src=\"{{ asset('backoffice/assets/images/logo.png') }}\" alt=\"Clip-Two\" height=\"60px\">
                </a>
                <a href=\"#\" class=\"sidebar-toggler pull-right visible-md visible-lg\" data-toggle-class=\"app-sidebar-closed\" data-toggle-target=\"#app\">
                    <i class=\"ti-align-justify\"></i>
                </a>
                <a class=\"pull-right menu-toggler visible-xs-block\" id=\"menu-toggler\" data-toggle=\"collapse\" href=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <i class=\"ti-view-grid\"></i>
                </a>
            </div>
            <!-- end: NAVBAR HEADER -->
            <!-- start: NAVBAR COLLAPSE -->
            <div class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-right\" style=\"height: auto;\">
                    <!-- start: MESSAGES DROPDOWN -->
                    <li class=\"dropdown\">
                        <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <span class=\"dot-badge partition-red\"></span> <i class=\"ti-comment\"></i> <span>MESSAGES</span>
                        </a>
                        <ul class=\"dropdown-menu dropdown-light dropdown-messages dropdown-large\">
                            <li>
                                <span class=\"dropdown-header\"> Unread messages</span>
                            </li>
                            <li>
                                <div class=\"drop-down-wrapper ps-container\">
                                    <ul>
                                        <li class=\"unread\">
                                            <a href=\"javascript:;\" class=\"unread\">
                                                <div class=\"clearfix\">
                                                    <div class=\"thread-image\">
                                                        <img src=\"./assets/images/avatar-2.jpg\" alt=\"\">
                                                    </div>
                                                    <div class=\"thread-content\">
                                                        <span class=\"author\">Nicole Bell</span>
                                                        <span class=\"preview\">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
                                                        <span class=\"time\"> Just Now</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\" class=\"unread\">
                                                <div class=\"clearfix\">
                                                    <div class=\"thread-image\">
                                                        <img src=\"./assets/images/avatar-3.jpg\" alt=\"\">
                                                    </div>
                                                    <div class=\"thread-content\">
                                                        <span class=\"author\">Steven Thompson</span>
                                                        <span class=\"preview\">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
                                                        <span class=\"time\">8 hrs</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"javascript:;\">
                                                <div class=\"clearfix\">
                                                    <div class=\"thread-image\">
                                                        <img src=\"./assets/images/avatar-5.jpg\" alt=\"\">
                                                    </div>
                                                    <div class=\"thread-content\">
                                                        <span class=\"author\">Kenneth Ross</span>
                                                        <span class=\"preview\">Duis mollis, est non commodo luctus, nisi erat porttitor ligula...</span>
                                                        <span class=\"time\">14 hrs</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class=\"view-all\">
                                <a href=\"#\">
                                    See All
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- end: MESSAGES DROPDOWN -->
                    <li class=\"dropdown current-user\">
                        <a href=\"\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <img src=\"{{ asset('Backoffice/assets/images/avatar-1.jpg') }}\" alt=\"Peter\"> <span class=\"username\">Peter <i class=\"ti-angle-down\"></i></span>
                        </a>
                        <ul class=\"dropdown-menu dropdown-dark\">
                            <li>
                                <a href=\"{{ path('admin_users_Profile') }}\">
                                    My Profile
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('admin_users_Agenda') }}\">
                                    My Calendar
                                </a>
                            </li>
                            <li>
                                <a  href=\"{{ path('admin_users_Messages') }}\">
                                    My Messages (3)
                                </a>
                            </li>
                            <li>
                                <a href=\"{{ path('fos_user_security_logout') }}\">
                                    Log Out
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- end: USER OPTIONS DROPDOWN -->
                </ul>
            </div>
            <!-- end: NAVBAR COLLAPSE -->
        </header>
        <!-- end: TOP NAVBAR -->
        <div class=\"main-content\">
            <div class=\"wrap-content container\" id=\"container\">
                <!-- start: DASHBOARD TITLE -->
                {% block pagetitle %}
                {% endblock %}


                {% block body %}
                    Hello Admi
                {% endblock %}
            </div>
        </div>
    </div>
    <!-- start: FOOTER -->
    <footer>
        <div class=\"footer-inner\">
            <div class=\"pull-left\">
                © <span class=\"current-year\">2015</span><span class=\"text-bold text-uppercase\">ClipTheme</span>. <span>All rights reserved</span>
            </div>
            <div class=\"pull-right\">
                <span class=\"go-top\"><i class=\"ti-angle-up\"></i></span>
            </div>
        </div>
    </footer>
    <!-- end: FOOTER -->
</div>
<!-- start: MAIN JAVASCRIPTS -->
<script src=\"{{ asset('Backoffice/vendor/jquery/jquery.min.js') }}\"></script>
<script src=\"{{ asset('Backoffice/vendor/bootstrap/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('Backoffice/vendor/modernizr/modernizr.js') }}\"></script>
<script src=\"{{ asset('Backoffice/vendor/jquery-cookie/jquery.cookie.js') }}\"></script>
<script src=\"{{ asset('Backoffice/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}\"></script>
<script src=\"{{ asset('Backoffice/vendor/switchery/switchery.min.js') }}\"></script>
<!-- end: MAIN JAVASCRIPTS -->
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
{% block javascript %}

{% endblock %}
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<!-- start: CLIP-TWO JAVASCRIPTS -->
<script src=\"{{ asset('Backoffice/assets/js/main.js') }}\"></script>
<!-- start: JavaScript Event Handlers for this page -->
<script>
    jQuery(document).ready(function() {
        Main.init();
    });
</script>
<!-- end: JavaScript Event Handlers for this page -->
<!-- end: CLIP-TWO JAVASCRIPTS -->
</body>
<!-- end: BODY -->
</html>
", "AdminUsersBundle::layout.html.twig", "C:\\wamp\\www\\github\\Gestion-de-Stage\\src\\Admin\\UsersBundle/Resources/views/layout.html.twig");
    }
}
