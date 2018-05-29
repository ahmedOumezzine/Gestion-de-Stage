<?php

/* AdminUsersBundle:Default:GestionUsers.html.twig */
class __TwigTemplate_ee12aef50dc796860b553ebe49d0a538f7572f3dc35a55c4b5b69adac9bf6273 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminUsersBundle::layout.html.twig", "AdminUsersBundle:Default:GestionUsers.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'Menu' => array($this, 'block_Menu'),
            'pagetitle' => array($this, 'block_pagetitle'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminUsersBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUsersBundle:Default:GestionUsers.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "   GestionUsers    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 6
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/vendor/select2/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/vendor/DataTables/css/DT_bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_Menu($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Menu"));

        // line 11
        echo "     <ul class=\"main-navigation-menu\">
         <li>
             <a href=\"index.html\">
                 <div class=\"item-content\">
                     <div class=\"item-media\">
                         <i class=\"ti-home\"></i>
                     </div>
                     <div class=\"item-inner\">
                         <span class=\"title\"> Dashboard </span>
                     </div>
                 </div>
             </a>
         </li>
         <li>
             <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users_Profile");
        echo "\">
                 <div class=\"item-content\">
                     <div class=\"item-media\">
                         <i class=\"ti-settings\"></i>
                     </div>
                     <div class=\"item-inner\">
                         <span class=\"title\"> Profile </span>
                     </div>
                 </div>
             </a>
         </li>
         <li>
             <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users_Messages");
        echo "\">
                 <div class=\"item-content\">
                     <div class=\"item-media\">
                         <i class=\"ti-settings\"></i>
                     </div>
                     <div class=\"item-inner\">
                         <span class=\"title\"> Messages </span>
                     </div>
                 </div>
             </a>
         </li>
         <li >
             <a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users_Agenda");
        echo "\">
                 <div class=\"item-content\">
                     <div class=\"item-media\">
                         <i class=\"ti-settings\"></i>
                     </div>
                     <div class=\"item-inner\">
                         <span class=\"title\"> Agenda </span>
                     </div>
                 </div>
             </a>
         </li>
         <li >
             <a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users_GestionStages");
        echo "\">
                 <div class=\"item-content\">
                     <div class=\"item-media\">
                         <i class=\"ti-settings\"></i>
                     </div>
                     <div class=\"item-inner\">
                         <span class=\"title\">Gestion Stages </span>
                     </div>
                 </div>
             </a>
         </li>
         <li>
             <a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users_Gestionsoutenances");
        echo "\">
                 <div class=\"item-content\">
                     <div class=\"item-media\">
                         <i class=\"ti-settings\"></i>
                     </div>
                     <div class=\"item-inner\">
                         <span class=\"title\">Gestion soutenances </span>
                     </div>
                 </div>
             </a>
         </li>
         <li   class=\"active open\">
             <a href=\"";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users_GestionUsers");
        echo "\">
                 <div class=\"item-content\">
                     <div class=\"item-media\">
                         <i class=\"ti-settings\"></i>
                     </div>
                     <div class=\"item-inner\">
                         <span class=\"title\"> Gestions Users </span>
                     </div>
                 </div>
             </a>
         </li>
         <li>
             <a href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users_GestionDocs");
        echo "\">
                 <div class=\"item-content\">
                     <div class=\"item-media\">
                         <i class=\"ti-settings\"></i>
                     </div>
                     <div class=\"item-inner\">
                         <span class=\"title\"> Gestion Documents </span>
                     </div>
                 </div>
             </a>
         </li>
         <li>
             <a href=\"";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users_GestionRessources");
        echo "\">
                 <div class=\"item-content\">
                     <div class=\"item-media\">
                         <i class=\"ti-settings\"></i>
                     </div>
                     <div class=\"item-inner\">
                         <span class=\"title\">Gestion Ressources </span>
                     </div>
                 </div>
             </a>
         </li>
     </ul>

 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 123
    public function block_pagetitle($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagetitle"));

        // line 124
        echo "    <section id=\"page-title\" class=\"padding-top-15 padding-bottom-15\">
        <div class=\"row\">
            <div class=\"col-sm-7\">
                <h1 class=\"mainTitle\">GestionUsers</h1>
                <span class=\"mainDescription\">overview &amp; stats </span>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 134
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 135
        echo "
    <div class=\"container-fluid container-fullw bg-white\">
\t\t\t\t\t\t\t\t\t<div class=\"panel panel-white no-radius\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading border-light\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">Users</h4>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body no-padding\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix padding-5 space5\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 text-center no-padding\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"border-right border-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-dark\" id=\"addadmin\" >
                                                            <i class=\"fa fa-bookmark-o text-green\"></i>Add Admin
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 text-center no-padding\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"border-right border-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-dark\" data-toggle=\"modal\" data-target=\".bs-example-modal-smprof\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bookmark-o text-green\"></i> Add Teacher
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 text-center no-padding\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-dark\" data-toggle=\"modal\" data-target=\".bs-example-modal-smstudent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bookmark-o text-green\"></i> Add Student</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tabbable no-margin no-padding\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"myTab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"padding-top-5 padding-left-5 active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"tab\" href=\"#users_admin\" aria-expanded=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tadmin
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"padding-top-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"tab\" href=\"#users_prof\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTeacher
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"padding-top-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"tab\" href=\"#users_student\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tStudent
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"users_admin\" class=\"tab-pane padding-bottom-5 active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-scroll height-200 ps-container ps-active-y\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table no-margin\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\"><img alt=\"image\" class=\"img-circle\" src=\"assets/images/avatar-1-small.jpg\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-small block text-light\">UI Designer</span><span>Peter Clark</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cl-effect-13\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tview more
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\"><img alt=\"image\" class=\"img-circle\" src=\"assets/images/avatar-2-small.jpg\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-small block text-light\">Content Designer</span><span>Nicole Bell</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cl-effect-13\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tview more
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\"><img alt=\"image\" class=\"img-circle\" src=\"assets/images/avatar-3-small.jpg\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-small block text-light\">Visual Designer</span><span>Steven Thompson</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cl-effect-13\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tview more
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\"><img alt=\"image\" class=\"img-circle\" src=\"assets/images/avatar-5-small.jpg\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-small block text-light\">Senior Designer</span><span>Kenneth Ross</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cl-effect-13\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tview more
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\"><img alt=\"image\" class=\"img-circle\" src=\"assets/images/avatar-4-small.jpg\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-small block text-light\">Web Editor</span><span>Ella Patterson</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cl-effect-13\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tview more
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-scrollbar-x-rail\" style=\"left: 0px; bottom: 3px;\"><div class=\"ps-scrollbar-x\" style=\"left: 0px; width: 0px;\"></div></div><div class=\"ps-scrollbar-y-rail\" style=\"top: 0px; height: 200px; right: 3px;\"><div class=\"ps-scrollbar-y\" style=\"top: 0px; height: 153px;\"></div></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"users_prof\" class=\"tab-pane padding-bottom-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-scroll height-200 ps-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table no-margin\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\"><img alt=\"image\" class=\"img-circle\" src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/assets/images/avatar-4-small.jpg"), "html", null, true);
        echo "\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-small block text-light\">Visual Designer</span><span>Steven Thompson</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cl-effect-13\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tview more
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\"><img alt=\"image\" class=\"img-circle\" src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/assets/images/avatar-4-small.jpg"), "html", null, true);
        echo "\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-small block text-light\">Senior Designer</span><span>Kenneth Ross</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cl-effect-13\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tview more
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\"><img alt=\"image\" class=\"img-circle\" src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/assets/images/avatar-4-small.jpg"), "html", null, true);
        echo "\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-small block text-light\">Web Editor</span><span>Ella Patterson</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cl-effect-13\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tview more
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-scrollbar-x-rail\" style=\"left: 0px; bottom: 3px;\"><div class=\"ps-scrollbar-x\" style=\"left: 0px; width: 0px;\"></div></div><div class=\"ps-scrollbar-y-rail\" style=\"top: 0px; right: 3px;\"><div class=\"ps-scrollbar-y\" style=\"top: 0px; height: 0px;\"></div></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t     \t<div id=\"users_student\" class=\"tab-pane padding-bottom-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-scroll height-200 ps-container\">
                                <div id=\"sample_1_wrapper\" class=\"dataTables_wrapper no-footer\">
                                                <div id=\"sample_1_filter\" class=\"dataTables_filter\"></div>
                                                    <table class=\"table table-striped table-bordered table-hover table-full-width dataTable no-footer\" id=\"sample_1\" role=\"grid\" aria-describedby=\"sample_1_info\">
                                                        <thead>
                                                        <tr role=\"row\">
                                                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\" aria-label=\"Browser: activate to sort column ascending\" style=\"width: 211px;\">Departement</th>
                                                        <th class=\"hidden-xs sorting_asc\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Creator: activate to sort column descending\" style=\"width: 247px;\">Action</th>
                                                        <th class=\"hidden-xs sorting_asc\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Creator: activate to sort column descending\" style=\"width: 247px;\">Action</th>
                                                        </thead>
                                                        <tbody>
                                                        <tr role=\"row\" class=\"odd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\"><img alt=\"image\" class=\"img-circle\" src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/assets/images/avatar-4-small.jpg"), "html", null, true);
        echo "\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-small block text-light\">Web Editor</span><span>Ella Patterson</span></td>
                                                            <td class=\"hidden-xs sorting_1\">
                                                            <div class=\"cl-effect-13\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tview more
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

   </div>
   </div>
   </div>

\t<div id=\"orderModal\" class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t</button>
\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">Add Administration</h4>
\t\t\t\t</div>
\t\t\t\t<div  id=\"orderModalcontent\" class=\"modal-body\">
\t\t\t\t\t<div  class=\"tab-pane fade in active\" id=\"tab1\">

\t\t\t\t\t\t<div class=\"form_error\"></div>
\t\t\t\t\t\t<form method=\"POST\" id=\"idForm\" action=\"";
        // line 326
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Administration_createAdminProf");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formR"]) ? $context["formR"] : $this->getContext($context, "formR")), 'enctype');
        echo ">
\t\t\t\t\t\t\t<div id=\"form_body2\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">";
        // line 329
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formR"]) ? $context["formR"] : $this->getContext($context, "formR")), 'errors');
        echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"bg-danger\">";
        // line 330
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formR"]) ? $context["formR"] : $this->getContext($context, "formR")), "username", array()), 'errors');
        echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group input-group\">
\t\t\t\t\t\t\t\t\t\t";
        // line 332
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formR"]) ? $context["formR"] : $this->getContext($context, "formR")), "username", array()), 'widget', array("attr" => array("placeholder" => "username", "title" => "username", "class" => "form-control")));
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-danger\">";
        // line 337
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formR"]) ? $context["formR"] : $this->getContext($context, "formR")), "email", array()), 'errors');
        echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t";
        // line 339
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formR"]) ? $context["formR"] : $this->getContext($context, "formR")), "email", array()), 'widget', array("attr" => array("placeholder" => "email", "title" => "email", "class" => "form-control")));
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-danger\">";
        // line 344
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formR"]) ? $context["formR"] : $this->getContext($context, "formR")), "plainPassword", array()), 'errors');
        echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t";
        // line 346
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formR"]) ? $context["formR"] : $this->getContext($context, "formR")), "plainPassword", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t\t\t\t\t\t\t";
        // line 352
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formR"]) ? $context["formR"] : $this->getContext($context, "formR")), 'rest');
        echo "
\t\t\t\t\t\t</form>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-o\" data-dismiss=\"modal\">
\t\t\t\t\t\tClose
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


\t<div id=\"orderModalProf\" class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t</button>
\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">Add Administration</h4>
\t\t\t\t</div>
\t\t\t\t<div  id=\"orderModalcontent\" class=\"modal-body\">
\t\t\t\t\t<div  class=\"tab-pane fade in active\" id=\"tab1\">

\t\t\t\t\t\t<div class=\"form_error\"></div>
\t\t\t\t\t\t<form method=\"POST\" id=\"idForm\" action=\"";
        // line 380
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Administration_createAdminenc");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formR"]) ? $context["formR"] : $this->getContext($context, "formR")), 'enctype');
        echo ">
\t\t\t\t\t\t\t<div id=\"form_body2\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">";
        // line 383
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formR"]) ? $context["formR"] : $this->getContext($context, "formR")), 'errors');
        echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"bg-danger\">";
        // line 384
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formR"]) ? $context["formR"] : $this->getContext($context, "formR")), "username", array()), 'errors');
        echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group input-group\">
\t\t\t\t\t\t\t\t\t\t";
        // line 386
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formR"]) ? $context["formR"] : $this->getContext($context, "formR")), "username", array()), 'widget', array("attr" => array("placeholder" => "username", "title" => "username", "class" => "form-control")));
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-danger\">";
        // line 391
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formR"]) ? $context["formR"] : $this->getContext($context, "formR")), "email", array()), 'errors');
        echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t";
        // line 393
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formR"]) ? $context["formR"] : $this->getContext($context, "formR")), "email", array()), 'widget', array("attr" => array("placeholder" => "email", "title" => "email", "class" => "form-control")));
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-danger\">";
        // line 398
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formR"]) ? $context["formR"] : $this->getContext($context, "formR")), "plainPassword", array()), 'errors');
        echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t";
        // line 400
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formR"]) ? $context["formR"] : $this->getContext($context, "formR")), "plainPassword", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t\t\t\t\t\t\t";
        // line 406
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formR"]) ? $context["formR"] : $this->getContext($context, "formR")), 'rest');
        echo "
\t\t\t\t\t\t</form>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-o\" data-dismiss=\"modal\">
\t\t\t\t\t\tClose
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div id=\"orderModaletudient\" class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t</button>
\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">Add Administration</h4>
\t\t\t\t</div>
\t\t\t\t<div  id=\"orderModalcontent\" class=\"modal-body\">
\t\t\t\t\t<div  class=\"tab-pane fade in active\" id=\"tab1\">

\t\t\t\t\t\t<div class=\"form_error\"></div>
\t\t\t\t\t\t<form method=\"POST\" id=\"idForm\" action=\"";
        // line 433
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Administration_createAdminProf");
        echo "\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formR"]) ? $context["formR"] : $this->getContext($context, "formR")), 'enctype');
        echo ">
\t\t\t\t\t\t\t<div id=\"form_body2\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">";
        // line 436
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formR"]) ? $context["formR"] : $this->getContext($context, "formR")), 'errors');
        echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"bg-danger\">";
        // line 437
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formR"]) ? $context["formR"] : $this->getContext($context, "formR")), "username", array()), 'errors');
        echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group input-group\">
\t\t\t\t\t\t\t\t\t\t";
        // line 439
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formR"]) ? $context["formR"] : $this->getContext($context, "formR")), "username", array()), 'widget', array("attr" => array("placeholder" => "username", "title" => "username", "class" => "form-control")));
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-danger\">";
        // line 444
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formR"]) ? $context["formR"] : $this->getContext($context, "formR")), "email", array()), 'errors');
        echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t";
        // line 446
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formR"]) ? $context["formR"] : $this->getContext($context, "formR")), "email", array()), 'widget', array("attr" => array("placeholder" => "email", "title" => "email", "class" => "form-control")));
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-danger\">";
        // line 451
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formR"]) ? $context["formR"] : $this->getContext($context, "formR")), "plainPassword", array()), 'errors');
        echo "</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t";
        // line 453
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formR"]) ? $context["formR"] : $this->getContext($context, "formR")), "plainPassword", array()), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t\t\t\t\t\t\t";
        // line 459
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formR"]) ? $context["formR"] : $this->getContext($context, "formR")), 'rest');
        echo "
\t\t\t\t\t\t</form>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-o\" data-dismiss=\"modal\">
\t\t\t\t\t\tClose
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 476
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 477
        echo "\t<script>
\t\t\$('#addadmin').click(function() {
\t\t\t\$('#orderModal').modal();
\t\t});
\t</script>
\t<script src=\"http://code.jquery.com/jquery-1.9.1.js\"></script>
\t<script>
\t\t\$(document).ready(function() {
\t\t\t\$('#idForm').on('submit', function(e) {
\t\t\t\te.preventDefault();
\t\t\t\t\$.ajax({
\t\t\t\t\turl:\$(this).attr('action'),
\t\t\t\t\ttype:\$(this).attr('method'),
\t\t\t\t\tdata: \$(this).serialize(),
\t\t\t\t\tbeforeSend: function(){
\t\t\t\t\t\talert(\"beffour send\");
\t\t\t\t\t}, success: function() {
\t\t\t\t\t\talert(\"succes\");
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\turl: Routing.generate(\"Administration_new\"),
\t\t\t\t\t\t\tsuccess: function (data) {
\t\t\t\t\t\t\t\t\$('#orderModalcontent').html(data);
\t\t\t\t\t\t\t},
\t\t\t\t\t\t});
\t\t\t\t\t},error: function(jqXHR, textStatus, errorThrown){
\t\t\t\t\t\tif (typeof jqXHR.responseJSON !== 'undefined') {
\t\t\t\t\t\t\tif (jqXHR.responseJSON.hasOwnProperty('form')) {
\t\t\t\t\t\t\t\t\$('#form_body').html(jqXHR.responseJSON.form);
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\$('.form_error').html(jqXHR.responseJSON.message);

\t\t\t\t\t\t} else {
\t\t\t\t\t\t\talert(errorThrown);
\t\t\t\t\t\t}                    },
\t\t\t\t\tcomplete: function(){
\t\t\t\t\t\t\$('#orderModalcontent').html(\"waiting ...\");
\t\t\t\t\t}
\t\t\t\t});

\t\t\t});

\t\t});

\t</script>

\t<script src=\"";
        // line 523
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 524
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <script src=\"";
        // line 525
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/vendor/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 526
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/vendor/DataTables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 527
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/assets/js/table-data.js"), "html", null, true);
        echo "\"></script>
    <script>
        jQuery(document).ready(function() {
            TableData.init();
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminUsersBundle:Default:GestionUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  760 => 527,  756 => 526,  752 => 525,  748 => 524,  744 => 523,  696 => 477,  690 => 476,  668 => 459,  659 => 453,  654 => 451,  646 => 446,  641 => 444,  633 => 439,  628 => 437,  624 => 436,  616 => 433,  586 => 406,  577 => 400,  572 => 398,  564 => 393,  559 => 391,  551 => 386,  546 => 384,  542 => 383,  534 => 380,  503 => 352,  494 => 346,  489 => 344,  481 => 339,  476 => 337,  468 => 332,  463 => 330,  459 => 329,  451 => 326,  413 => 291,  384 => 265,  371 => 255,  358 => 245,  246 => 135,  240 => 134,  225 => 124,  219 => 123,  198 => 109,  183 => 97,  168 => 85,  153 => 73,  138 => 61,  123 => 49,  108 => 37,  93 => 25,  77 => 11,  71 => 10,  62 => 7,  57 => 6,  51 => 5,  39 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AdminUsersBundle::layout.html.twig' %}

{% block title %}   GestionUsers    {% endblock %}

{% block css %}
    <link href=\"{{ asset('Backoffice/vendor/select2/select2.min.css') }}\" rel=\"stylesheet\" media=\"screen\">
    <link href=\"{{ asset('Backoffice/vendor/DataTables/css/DT_bootstrap.css') }}\" rel=\"stylesheet\" media=\"screen\">
{% endblock %}

 {% block Menu %}
     <ul class=\"main-navigation-menu\">
         <li>
             <a href=\"index.html\">
                 <div class=\"item-content\">
                     <div class=\"item-media\">
                         <i class=\"ti-home\"></i>
                     </div>
                     <div class=\"item-inner\">
                         <span class=\"title\"> Dashboard </span>
                     </div>
                 </div>
             </a>
         </li>
         <li>
             <a href=\"{{ path('admin_users_Profile') }}\">
                 <div class=\"item-content\">
                     <div class=\"item-media\">
                         <i class=\"ti-settings\"></i>
                     </div>
                     <div class=\"item-inner\">
                         <span class=\"title\"> Profile </span>
                     </div>
                 </div>
             </a>
         </li>
         <li>
             <a href=\"{{ path('admin_users_Messages') }}\">
                 <div class=\"item-content\">
                     <div class=\"item-media\">
                         <i class=\"ti-settings\"></i>
                     </div>
                     <div class=\"item-inner\">
                         <span class=\"title\"> Messages </span>
                     </div>
                 </div>
             </a>
         </li>
         <li >
             <a href=\"{{ path('admin_users_Agenda') }}\">
                 <div class=\"item-content\">
                     <div class=\"item-media\">
                         <i class=\"ti-settings\"></i>
                     </div>
                     <div class=\"item-inner\">
                         <span class=\"title\"> Agenda </span>
                     </div>
                 </div>
             </a>
         </li>
         <li >
             <a href=\"{{ path('admin_users_GestionStages') }}\">
                 <div class=\"item-content\">
                     <div class=\"item-media\">
                         <i class=\"ti-settings\"></i>
                     </div>
                     <div class=\"item-inner\">
                         <span class=\"title\">Gestion Stages </span>
                     </div>
                 </div>
             </a>
         </li>
         <li>
             <a href=\"{{ path('admin_users_Gestionsoutenances') }}\">
                 <div class=\"item-content\">
                     <div class=\"item-media\">
                         <i class=\"ti-settings\"></i>
                     </div>
                     <div class=\"item-inner\">
                         <span class=\"title\">Gestion soutenances </span>
                     </div>
                 </div>
             </a>
         </li>
         <li   class=\"active open\">
             <a href=\"{{ path('admin_users_GestionUsers') }}\">
                 <div class=\"item-content\">
                     <div class=\"item-media\">
                         <i class=\"ti-settings\"></i>
                     </div>
                     <div class=\"item-inner\">
                         <span class=\"title\"> Gestions Users </span>
                     </div>
                 </div>
             </a>
         </li>
         <li>
             <a href=\"{{ path('admin_users_GestionDocs') }}\">
                 <div class=\"item-content\">
                     <div class=\"item-media\">
                         <i class=\"ti-settings\"></i>
                     </div>
                     <div class=\"item-inner\">
                         <span class=\"title\"> Gestion Documents </span>
                     </div>
                 </div>
             </a>
         </li>
         <li>
             <a href=\"{{ path('admin_users_GestionRessources') }}\">
                 <div class=\"item-content\">
                     <div class=\"item-media\">
                         <i class=\"ti-settings\"></i>
                     </div>
                     <div class=\"item-inner\">
                         <span class=\"title\">Gestion Ressources </span>
                     </div>
                 </div>
             </a>
         </li>
     </ul>

 {% endblock %}
{% block pagetitle %}
    <section id=\"page-title\" class=\"padding-top-15 padding-bottom-15\">
        <div class=\"row\">
            <div class=\"col-sm-7\">
                <h1 class=\"mainTitle\">GestionUsers</h1>
                <span class=\"mainDescription\">overview &amp; stats </span>
            </div>
        </div>
    </section>
{% endblock %}

{% block body %}

    <div class=\"container-fluid container-fullw bg-white\">
\t\t\t\t\t\t\t\t\t<div class=\"panel panel-white no-radius\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading border-light\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"panel-title\">Users</h4>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body no-padding\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix padding-5 space5\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 text-center no-padding\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"border-right border-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-dark\" id=\"addadmin\" >
                                                            <i class=\"fa fa-bookmark-o text-green\"></i>Add Admin
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 text-center no-padding\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"border-right border-dark\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-dark\" data-toggle=\"modal\" data-target=\".bs-example-modal-smprof\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bookmark-o text-green\"></i> Add Teacher
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4 text-center no-padding\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"text-dark\" data-toggle=\"modal\" data-target=\".bs-example-modal-smstudent\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-bookmark-o text-green\"></i> Add Student</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tabbable no-margin no-padding\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"myTab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"padding-top-5 padding-left-5 active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"tab\" href=\"#users_admin\" aria-expanded=\"true\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tadmin
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"padding-top-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"tab\" href=\"#users_prof\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tTeacher
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"padding-top-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"tab\" href=\"#users_student\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tStudent
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"users_admin\" class=\"tab-pane padding-bottom-5 active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-scroll height-200 ps-container ps-active-y\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table no-margin\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\"><img alt=\"image\" class=\"img-circle\" src=\"assets/images/avatar-1-small.jpg\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-small block text-light\">UI Designer</span><span>Peter Clark</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cl-effect-13\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tview more
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\"><img alt=\"image\" class=\"img-circle\" src=\"assets/images/avatar-2-small.jpg\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-small block text-light\">Content Designer</span><span>Nicole Bell</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cl-effect-13\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tview more
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\"><img alt=\"image\" class=\"img-circle\" src=\"assets/images/avatar-3-small.jpg\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-small block text-light\">Visual Designer</span><span>Steven Thompson</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cl-effect-13\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tview more
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\"><img alt=\"image\" class=\"img-circle\" src=\"assets/images/avatar-5-small.jpg\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-small block text-light\">Senior Designer</span><span>Kenneth Ross</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cl-effect-13\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tview more
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\"><img alt=\"image\" class=\"img-circle\" src=\"assets/images/avatar-4-small.jpg\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-small block text-light\">Web Editor</span><span>Ella Patterson</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cl-effect-13\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tview more
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-scrollbar-x-rail\" style=\"left: 0px; bottom: 3px;\"><div class=\"ps-scrollbar-x\" style=\"left: 0px; width: 0px;\"></div></div><div class=\"ps-scrollbar-y-rail\" style=\"top: 0px; height: 200px; right: 3px;\"><div class=\"ps-scrollbar-y\" style=\"top: 0px; height: 153px;\"></div></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"users_prof\" class=\"tab-pane padding-bottom-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-scroll height-200 ps-container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table no-margin\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\"><img alt=\"image\" class=\"img-circle\" src=\"{{ asset('Backoffice/assets/images/avatar-4-small.jpg') }}\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-small block text-light\">Visual Designer</span><span>Steven Thompson</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cl-effect-13\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tview more
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\"><img alt=\"image\" class=\"img-circle\" src=\"{{ asset('Backoffice/assets/images/avatar-4-small.jpg') }}\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-small block text-light\">Senior Designer</span><span>Kenneth Ross</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cl-effect-13\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tview more
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\"><img alt=\"image\" class=\"img-circle\" src=\"{{ asset('Backoffice/assets/images/avatar-4-small.jpg') }}\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-small block text-light\">Web Editor</span><span>Ella Patterson</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cl-effect-13\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tview more
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ps-scrollbar-x-rail\" style=\"left: 0px; bottom: 3px;\"><div class=\"ps-scrollbar-x\" style=\"left: 0px; width: 0px;\"></div></div><div class=\"ps-scrollbar-y-rail\" style=\"top: 0px; right: 3px;\"><div class=\"ps-scrollbar-y\" style=\"top: 0px; height: 0px;\"></div></div></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t     \t<div id=\"users_student\" class=\"tab-pane padding-bottom-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"panel-scroll height-200 ps-container\">
                                <div id=\"sample_1_wrapper\" class=\"dataTables_wrapper no-footer\">
                                                <div id=\"sample_1_filter\" class=\"dataTables_filter\"></div>
                                                    <table class=\"table table-striped table-bordered table-hover table-full-width dataTable no-footer\" id=\"sample_1\" role=\"grid\" aria-describedby=\"sample_1_info\">
                                                        <thead>
                                                        <tr role=\"row\">
                                                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\" aria-label=\"Browser: activate to sort column ascending\" style=\"width: 211px;\">Departement</th>
                                                        <th class=\"hidden-xs sorting_asc\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Creator: activate to sort column descending\" style=\"width: 247px;\">Action</th>
                                                        <th class=\"hidden-xs sorting_asc\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Creator: activate to sort column descending\" style=\"width: 247px;\">Action</th>
                                                        </thead>
                                                        <tbody>
                                                        <tr role=\"row\" class=\"odd\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"center\"><img alt=\"image\" class=\"img-circle\" src=\"{{ asset('Backoffice/assets/images/avatar-4-small.jpg') }}\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-small block text-light\">Web Editor</span><span>Ella Patterson</span></td>
                                                            <td class=\"hidden-xs sorting_1\">
                                                            <div class=\"cl-effect-13\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tview more
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                </div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

   </div>
   </div>
   </div>

\t<div id=\"orderModal\" class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t</button>
\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">Add Administration</h4>
\t\t\t\t</div>
\t\t\t\t<div  id=\"orderModalcontent\" class=\"modal-body\">
\t\t\t\t\t<div  class=\"tab-pane fade in active\" id=\"tab1\">

\t\t\t\t\t\t<div class=\"form_error\"></div>
\t\t\t\t\t\t<form method=\"POST\" id=\"idForm\" action=\"{{path('Administration_createAdminProf')}}\" {{ form_enctype(formR) }}>
\t\t\t\t\t\t\t<div id=\"form_body2\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">{{ form_errors(formR) }}</div>
\t\t\t\t\t\t\t\t\t<div class=\"bg-danger\">{{ form_errors(formR.username) }}</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group input-group\">
\t\t\t\t\t\t\t\t\t\t{{ form_widget(formR.username,  {'attr': {'placeholder':'username', 'title':'username', 'class':'form-control'}}) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-danger\">{{ form_errors(formR.email) }}</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t{{ form_widget(formR.email,  {'attr': {'placeholder':'email','title':'email', 'class':'form-control'}}) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-danger\">{{ form_errors(formR.plainPassword) }}</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t{{ form_widget(formR.plainPassword) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t\t\t\t\t\t\t{{form_rest(formR)}}
\t\t\t\t\t\t</form>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-o\" data-dismiss=\"modal\">
\t\t\t\t\t\tClose
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


\t<div id=\"orderModalProf\" class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t</button>
\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">Add Administration</h4>
\t\t\t\t</div>
\t\t\t\t<div  id=\"orderModalcontent\" class=\"modal-body\">
\t\t\t\t\t<div  class=\"tab-pane fade in active\" id=\"tab1\">

\t\t\t\t\t\t<div class=\"form_error\"></div>
\t\t\t\t\t\t<form method=\"POST\" id=\"idForm\" action=\"{{path('Administration_createAdminenc')}}\" {{ form_enctype(formR) }}>
\t\t\t\t\t\t\t<div id=\"form_body2\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">{{ form_errors(formR) }}</div>
\t\t\t\t\t\t\t\t\t<div class=\"bg-danger\">{{ form_errors(formR.username) }}</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group input-group\">
\t\t\t\t\t\t\t\t\t\t{{ form_widget(formR.username,  {'attr': {'placeholder':'username', 'title':'username', 'class':'form-control'}}) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-danger\">{{ form_errors(formR.email) }}</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t{{ form_widget(formR.email,  {'attr': {'placeholder':'email','title':'email', 'class':'form-control'}}) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-danger\">{{ form_errors(formR.plainPassword) }}</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t{{ form_widget(formR.plainPassword) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t\t\t\t\t\t\t{{form_rest(formR)}}
\t\t\t\t\t\t</form>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-o\" data-dismiss=\"modal\">
\t\t\t\t\t\tClose
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div id=\"orderModaletudient\" class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<span aria-hidden=\"true\">&times;</span>
\t\t\t\t\t</button>
\t\t\t\t\t<h4 class=\"modal-title\" id=\"myModalLabel\">Add Administration</h4>
\t\t\t\t</div>
\t\t\t\t<div  id=\"orderModalcontent\" class=\"modal-body\">
\t\t\t\t\t<div  class=\"tab-pane fade in active\" id=\"tab1\">

\t\t\t\t\t\t<div class=\"form_error\"></div>
\t\t\t\t\t\t<form method=\"POST\" id=\"idForm\" action=\"{{path('Administration_createAdminProf')}}\" {{ form_enctype(formR) }}>
\t\t\t\t\t\t\t<div id=\"form_body2\">
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">{{ form_errors(formR) }}</div>
\t\t\t\t\t\t\t\t\t<div class=\"bg-danger\">{{ form_errors(formR.username) }}</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group input-group\">
\t\t\t\t\t\t\t\t\t\t{{ form_widget(formR.username,  {'attr': {'placeholder':'username', 'title':'username', 'class':'form-control'}}) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-danger\">{{ form_errors(formR.email) }}</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t{{ form_widget(formR.email,  {'attr': {'placeholder':'email','title':'email', 'class':'form-control'}}) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t<div class=\"bg-danger\">{{ form_errors(formR.plainPassword) }}</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t{{ form_widget(formR.plainPassword) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t\t\t\t\t\t\t{{form_rest(formR)}}
\t\t\t\t\t\t</form>

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-o\" data-dismiss=\"modal\">
\t\t\t\t\t\tClose
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

{% endblock %}


{% block javascript %}
\t<script>
\t\t\$('#addadmin').click(function() {
\t\t\t\$('#orderModal').modal();
\t\t});
\t</script>
\t<script src=\"http://code.jquery.com/jquery-1.9.1.js\"></script>
\t<script>
\t\t\$(document).ready(function() {
\t\t\t\$('#idForm').on('submit', function(e) {
\t\t\t\te.preventDefault();
\t\t\t\t\$.ajax({
\t\t\t\t\turl:\$(this).attr('action'),
\t\t\t\t\ttype:\$(this).attr('method'),
\t\t\t\t\tdata: \$(this).serialize(),
\t\t\t\t\tbeforeSend: function(){
\t\t\t\t\t\talert(\"beffour send\");
\t\t\t\t\t}, success: function() {
\t\t\t\t\t\talert(\"succes\");
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\turl: Routing.generate(\"Administration_new\"),
\t\t\t\t\t\t\tsuccess: function (data) {
\t\t\t\t\t\t\t\t\$('#orderModalcontent').html(data);
\t\t\t\t\t\t\t},
\t\t\t\t\t\t});
\t\t\t\t\t},error: function(jqXHR, textStatus, errorThrown){
\t\t\t\t\t\tif (typeof jqXHR.responseJSON !== 'undefined') {
\t\t\t\t\t\t\tif (jqXHR.responseJSON.hasOwnProperty('form')) {
\t\t\t\t\t\t\t\t\$('#form_body').html(jqXHR.responseJSON.form);
\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\$('.form_error').html(jqXHR.responseJSON.message);

\t\t\t\t\t\t} else {
\t\t\t\t\t\t\talert(errorThrown);
\t\t\t\t\t\t}                    },
\t\t\t\t\tcomplete: function(){
\t\t\t\t\t\t\$('#orderModalcontent').html(\"waiting ...\");
\t\t\t\t\t}
\t\t\t\t});

\t\t\t});

\t\t});

\t</script>

\t<script src=\"{{ asset('bundles/fosjsrouting/js/router.js') }}\"></script>
\t<script src=\"{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}\"></script>
    <script src=\"{{ asset('Backoffice/vendor/select2/select2.min.js') }}\"></script>
    <script src=\"{{ asset('Backoffice/vendor/DataTables/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('Backoffice/assets/js/table-data.js') }}\"></script>
    <script>
        jQuery(document).ready(function() {
            TableData.init();
        });
    </script>
{% endblock %}", "AdminUsersBundle:Default:GestionUsers.html.twig", "C:\\wamp\\www\\github\\Gestion-de-Stage\\src\\Admin\\UsersBundle/Resources/views/Default/GestionUsers.html.twig");
    }
}
