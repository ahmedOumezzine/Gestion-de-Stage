<?php

/* AdminUsersBundle:Default:GestionRessources.html.twig */
class __TwigTemplate_ee9b7111d62e04dd6640fa852b9ee7a2e27ac5849d96b2d9eb55c56162ba54c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminUsersBundle::layout.html.twig", "AdminUsersBundle:Default:GestionRessources.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUsersBundle:Default:GestionRessources.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "   Gestion Ressources    ";
        
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
         <li>
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
         <li   class=\"active open\">
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
                <h1 class=\"mainTitle\">Gestion Ressources</h1>
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
        echo "    <div class=\"container-fluid container-fullw bg-white\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h5 class=\"over-title margin-bottom-15\">Basic <span class=\"text-bold\">Data Table</span></h5>
                <div class=\"tabbable\">
\t\t\t\t\t\t\t\t\t\t<ul id=\"myTab1\" class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#myTab1_example1\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\tDepartement
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#myTab1_example2\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\tSpecialite
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade in active\" id=\"myTab1_example1\">
                                               <div class=\"col-sm-12 space20\">
                                                    <a href=\"";
        // line 155
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Departement_new");
        echo "\" class=\"btn btn-primary btn-o add-event\"><i class=\"fa fa-plus\"></i> Add New Departement</a>
                                                </div>

                                <div id=\"sample_1_wrapper\" class=\"dataTables_wrapper no-footer\">
                                                <div id=\"sample_1_filter\" class=\"dataTables_filter\"></div>
                                                    <table class=\"table table-striped table-bordered table-hover table-full-width dataTable no-footer\" id=\"sample_1\" role=\"grid\" aria-describedby=\"sample_1_info\">
                                                        <thead>
                                                        <tr role=\"row\">
                                                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\" aria-label=\"Browser: activate to sort column ascending\" style=\"width: 211px;\">Departement</th>
                                                        <th class=\"hidden-xs sorting_asc\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Creator: activate to sort column descending\" style=\"width: 247px;\">Action</th>
                                                        </thead>
                                                        <tbody>
                                                        ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 168
            echo "            <tr>
                <td>";
            // line 169
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "departement", array()), "html", null, true);
            echo "</td>
                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 173
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Departement_show", array("id" => $this->getAttribute($context["entity"], "idDepartement", array()))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 176
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Departement_edit", array("id" => $this->getAttribute($context["entity"], "idDepartement", array()))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "
                                                        </tbody>
                                                    </table>
                                </div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"myTab1_example2\">
\t\t\t\t\t\t\t\t\t\t\t    <div class=\"col-sm-12 space20\">
                    <a href=\"";
        // line 190
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Specialite_new");
        echo "\" class=\"btn btn-primary btn-o add-event\"><i class=\"fa fa-plus\"></i> Add New Specialite</a>
                </div>

                                               <div id=\"sample_2_wrapper\" class=\"dataTables_wrapper no-footer\">
                                                <div id=\"sample_2_filter\" class=\"dataTables_filter\"></div>
                                                    <table class=\"table table-striped table-bordered table-hover table-full-width dataTable no-footer\" id=\"sample_2\" role=\"grid\" aria-describedby=\"sample_1_info\">
                                                        <thead>
                                                        <tr role=\"row\">
                                                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_2\" rowspan=\"1\" colspan=\"1\" aria-label=\"Browser: activate to sort column ascending\" style=\"width: 211px;\">Specialite</th>
                                                        <th class=\"hidden-xs sorting_asc\" tabindex=\"0\" aria-controls=\"sample_2\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Creator: activate to sort column descending\" style=\"width: 247px;\">Diplome</th>
                                                        <th class=\"hidden-xs sorting\" tabindex=\"0\" aria-controls=\"sample_2\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Creator: activate to sort column descending\" style=\"width: 247px;\">Departement</th>
                                                        <th class=\"hidden-xs sorting\" tabindex=\"0\" aria-controls=\"sample_2\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Creator: activate to sort column descending\" style=\"width: 247px;\">Action</th>
                                                        </thead>
                                                        <tbody>
                                                        ";
        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities2"]) ? $context["entities2"] : $this->getContext($context, "entities2")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 205
            echo "                                                        <tr>
                                                            <td>";
            // line 206
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "specialite", array()), "html", null, true);
            echo "</td>
                                                            <td>";
            // line 207
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "diplome", array()), "html", null, true);
            echo "</td>
                                                            <td>";
            // line 208
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idDepartement", array()), "html", null, true);
            echo "</td>
                                                            <td>
                                                            <ul>
                                                                <li>
                                                                    <a href=\"";
            // line 212
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Specialite_edit", array("id" => $this->getAttribute($context["entity"], "idSpecialite", array()))), "html", null, true);
            echo "\">edit</a>
                                                                </li>
                                                            </ul>
                                                            </td>
                                                        </tr>
                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        echo "
                                                        </tbody>
                                                    </table>
                                </div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

        </div>
    </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 231
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 232
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/vendor/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/vendor/DataTables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 234
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
        return "AdminUsersBundle:Default:GestionRessources.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 234,  404 => 233,  399 => 232,  393 => 231,  376 => 218,  364 => 212,  357 => 208,  353 => 207,  349 => 206,  346 => 205,  342 => 204,  325 => 190,  315 => 182,  303 => 176,  297 => 173,  290 => 169,  287 => 168,  283 => 167,  268 => 155,  246 => 135,  240 => 134,  225 => 124,  219 => 123,  198 => 109,  183 => 97,  168 => 85,  153 => 73,  138 => 61,  123 => 49,  108 => 37,  93 => 25,  77 => 11,  71 => 10,  62 => 7,  57 => 6,  51 => 5,  39 => 3,  11 => 1,);
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

{% block title %}   Gestion Ressources    {% endblock %}

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
         <li>
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
         <li   class=\"active open\">
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
                <h1 class=\"mainTitle\">Gestion Ressources</h1>
                <span class=\"mainDescription\">overview &amp; stats </span>
            </div>
        </div>
    </section>
{% endblock %}

{% block body %}
    <div class=\"container-fluid container-fullw bg-white\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h5 class=\"over-title margin-bottom-15\">Basic <span class=\"text-bold\">Data Table</span></h5>
                <div class=\"tabbable\">
\t\t\t\t\t\t\t\t\t\t<ul id=\"myTab1\" class=\"nav nav-tabs\">
\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#myTab1_example1\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\tDepartement
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#myTab1_example2\" data-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\tSpecialite
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade in active\" id=\"myTab1_example1\">
                                               <div class=\"col-sm-12 space20\">
                                                    <a href=\"{{ path('Departement_new') }}\" class=\"btn btn-primary btn-o add-event\"><i class=\"fa fa-plus\"></i> Add New Departement</a>
                                                </div>

                                <div id=\"sample_1_wrapper\" class=\"dataTables_wrapper no-footer\">
                                                <div id=\"sample_1_filter\" class=\"dataTables_filter\"></div>
                                                    <table class=\"table table-striped table-bordered table-hover table-full-width dataTable no-footer\" id=\"sample_1\" role=\"grid\" aria-describedby=\"sample_1_info\">
                                                        <thead>
                                                        <tr role=\"row\">
                                                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\" aria-label=\"Browser: activate to sort column ascending\" style=\"width: 211px;\">Departement</th>
                                                        <th class=\"hidden-xs sorting_asc\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Creator: activate to sort column descending\" style=\"width: 247px;\">Action</th>
                                                        </thead>
                                                        <tbody>
                                                        {% for entity in entities %}
            <tr>
                <td>{{ entity.departement }}</td>
                <td>
                <ul>
                    <li>
                        <a href=\"{{ path('Departement_show', { 'id': entity.idDepartement }) }}\">show</a>
                    </li>
                    <li>
                        <a href=\"{{ path('Departement_edit', { 'id': entity.idDepartement }) }}\">edit</a>
                    </li>
                </ul>
                </td>
            </tr>
        {% endfor %}

                                                        </tbody>
                                                    </table>
                                </div>

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"myTab1_example2\">
\t\t\t\t\t\t\t\t\t\t\t    <div class=\"col-sm-12 space20\">
                    <a href=\"{{ path('Specialite_new') }}\" class=\"btn btn-primary btn-o add-event\"><i class=\"fa fa-plus\"></i> Add New Specialite</a>
                </div>

                                               <div id=\"sample_2_wrapper\" class=\"dataTables_wrapper no-footer\">
                                                <div id=\"sample_2_filter\" class=\"dataTables_filter\"></div>
                                                    <table class=\"table table-striped table-bordered table-hover table-full-width dataTable no-footer\" id=\"sample_2\" role=\"grid\" aria-describedby=\"sample_1_info\">
                                                        <thead>
                                                        <tr role=\"row\">
                                                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_2\" rowspan=\"1\" colspan=\"1\" aria-label=\"Browser: activate to sort column ascending\" style=\"width: 211px;\">Specialite</th>
                                                        <th class=\"hidden-xs sorting_asc\" tabindex=\"0\" aria-controls=\"sample_2\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Creator: activate to sort column descending\" style=\"width: 247px;\">Diplome</th>
                                                        <th class=\"hidden-xs sorting\" tabindex=\"0\" aria-controls=\"sample_2\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Creator: activate to sort column descending\" style=\"width: 247px;\">Departement</th>
                                                        <th class=\"hidden-xs sorting\" tabindex=\"0\" aria-controls=\"sample_2\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"Creator: activate to sort column descending\" style=\"width: 247px;\">Action</th>
                                                        </thead>
                                                        <tbody>
                                                        {% for entity in entities2 %}
                                                        <tr>
                                                            <td>{{ entity.specialite }}</td>
                                                            <td>{{ entity.diplome }}</td>
                                                            <td>{{ entity.idDepartement }}</td>
                                                            <td>
                                                            <ul>
                                                                <li>
                                                                    <a href=\"{{ path('Specialite_edit', { 'id': entity.idSpecialite }) }}\">edit</a>
                                                                </li>
                                                            </ul>
                                                            </td>
                                                        </tr>
                                                    {% endfor %}

                                                        </tbody>
                                                    </table>
                                </div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

        </div>
    </div>
    {% endblock %}


{% block javascript %}
    <script src=\"{{ asset('Backoffice/vendor/select2/select2.min.js') }}\"></script>
    <script src=\"{{ asset('Backoffice/vendor/DataTables/jquery.dataTables.min.js') }}\"></script>
    <script src=\"{{ asset('Backoffice/assets/js/table-data.js') }}\"></script>
    <script>
        jQuery(document).ready(function() {
            TableData.init();
        });
    </script>
{% endblock %}", "AdminUsersBundle:Default:GestionRessources.html.twig", "C:\\wamp\\www\\github\\Gestion-de-Stage\\src\\Admin\\UsersBundle/Resources/views/Default/GestionRessources.html.twig");
    }
}
