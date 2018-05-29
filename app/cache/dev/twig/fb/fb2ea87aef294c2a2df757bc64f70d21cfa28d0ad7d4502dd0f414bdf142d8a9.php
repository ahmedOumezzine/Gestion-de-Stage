<?php

/* AdminUsersBundle:Default:Gestionsoutenances.html.twig */
class __TwigTemplate_73ddf221b2f536c67a35fe73de98832f98a8be72e3cfe0ab1377d3fa063afbb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminUsersBundle::layout.html.twig", "AdminUsersBundle:Default:Gestionsoutenances.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUsersBundle:Default:Gestionsoutenances.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "   Gestion soutenances    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_css($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/vendor/select2/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/vendor/DataTables/css/DT_bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_Menu($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Menu"));

        // line 10
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
        // line 24
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
        // line 36
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
        // line 48
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
        // line 60
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
         <li   class=\"active open\">
             <a href=\"";
        // line 72
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
        // line 84
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
        // line 96
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
        // line 108
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

    // line 122
    public function block_pagetitle($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagetitle"));

        // line 123
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

    // line 133
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 134
        echo "    <div class=\"container-fluid container-fullw bg-white\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"col-sm-12 space20\">
                    <a href=\"";
        // line 138
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Soutenance_new");
        echo "\" class=\"btn btn-primary btn-o add-event\"><i class=\"fa fa-plus\"></i> Add New Soutenance</a>
                </div>

                <div id=\"sample_1_wrapper\" class=\"dataTables_wrapper no-footer\">
                    <div id=\"sample_1_filter\" class=\"dataTables_filter\"></div>
                    <table class=\"table table-striped table-bordered table-hover table-full-width dataTable no-footer\" id=\"sample_1\" role=\"grid\" aria-describedby=\"sample_1_info\">
                        <thead>
                        <tr role=\"row\">
                            <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\" aria-label=\"Id_Stage\" style=\"width: 211px;\">Id_Soutenance</th>
                            <th class=\"hidden-xs sorting_asc\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"dateDebut\" style=\"width: 247px;\">Date_Soutenance</th>
                            <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\" aria-label=\"dateFin\" style=\"width: 109px;\">Salle_Soutenance</th>
                            <th class=\"hidden-xs sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\" aria-label=\" affect\" style=\"width: 182px;\">Id_TypeSoutenance</th>
                            <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\" aria-label=\"Current\tlayout engine: activate to sort column ascending\" style=\"width: 134px;\">Edit</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 155
            echo "                            <tr role=\"row\" class=\"even\">
                                <td>";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idSoutenance", array()), "html", null, true);
            echo "</td>
                                <td class=\"hidden-xs sorting_1\">";
            // line 157
            if ($this->getAttribute($context["entity"], "dateSoutenance", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateSoutenance", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                                <td>";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "salleSoutenance", array()), "html", null, true);
            echo "</td>
                                <td class=\"hidden-xs\">";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idTypesoutenance", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <ul>
                                        <li>
                                            <a href=\"";
            // line 163
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Soutenance_edit", array("id" => $this->getAttribute($context["entity"], "idSoutenance", array()))), "html", null, true);
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
        // line 169
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 179
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 180
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/vendor/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/vendor/DataTables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 182
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
        return "AdminUsersBundle:Default:Gestionsoutenances.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  340 => 182,  336 => 181,  331 => 180,  325 => 179,  311 => 169,  299 => 163,  292 => 159,  288 => 158,  282 => 157,  278 => 156,  275 => 155,  271 => 154,  252 => 138,  246 => 134,  240 => 133,  225 => 123,  219 => 122,  198 => 108,  183 => 96,  168 => 84,  153 => 72,  138 => 60,  123 => 48,  108 => 36,  93 => 24,  77 => 10,  71 => 9,  62 => 6,  57 => 5,  51 => 4,  39 => 3,  11 => 1,);
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

{% block title %}   Gestion soutenances    {% endblock %}
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
         <li   class=\"active open\">
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
                <div class=\"col-sm-12 space20\">
                    <a href=\"{{ path('Soutenance_new') }}\" class=\"btn btn-primary btn-o add-event\"><i class=\"fa fa-plus\"></i> Add New Soutenance</a>
                </div>

                <div id=\"sample_1_wrapper\" class=\"dataTables_wrapper no-footer\">
                    <div id=\"sample_1_filter\" class=\"dataTables_filter\"></div>
                    <table class=\"table table-striped table-bordered table-hover table-full-width dataTable no-footer\" id=\"sample_1\" role=\"grid\" aria-describedby=\"sample_1_info\">
                        <thead>
                        <tr role=\"row\">
                            <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\" aria-label=\"Id_Stage\" style=\"width: 211px;\">Id_Soutenance</th>
                            <th class=\"hidden-xs sorting_asc\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"dateDebut\" style=\"width: 247px;\">Date_Soutenance</th>
                            <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\" aria-label=\"dateFin\" style=\"width: 109px;\">Salle_Soutenance</th>
                            <th class=\"hidden-xs sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\" aria-label=\" affect\" style=\"width: 182px;\">Id_TypeSoutenance</th>
                            <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\" aria-label=\"Current\tlayout engine: activate to sort column ascending\" style=\"width: 134px;\">Edit</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for entity in entities %}
                            <tr role=\"row\" class=\"even\">
                                <td>{{ entity.idSoutenance }}</td>
                                <td class=\"hidden-xs sorting_1\">{% if entity.dateSoutenance %}{{ entity.dateSoutenance|date('Y-m-d H:i:s') }}{% endif %}</td>
                                <td>{{ entity.salleSoutenance }}</td>
                                <td class=\"hidden-xs\">{{ entity.idTypesoutenance }}</td>
                                <td>
                                    <ul>
                                        <li>
                                            <a href=\"{{ path('Soutenance_edit', { 'id': entity.idSoutenance }) }}\">edit</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
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
{% endblock %}", "AdminUsersBundle:Default:Gestionsoutenances.html.twig", "C:\\wamp\\www\\github\\Gestion-de-Stage\\src\\Admin\\UsersBundle/Resources/views/Default/Gestionsoutenances.html.twig");
    }
}
