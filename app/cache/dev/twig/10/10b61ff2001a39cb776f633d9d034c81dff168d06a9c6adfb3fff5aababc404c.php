<?php

/* AdminUsersBundle:Stage:show.html.twig */
class __TwigTemplate_56842c52fd02a92254b60aa6911eb222d7b0f9f72da8122f2874bf236229e7e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminUsersBundle::layout.html.twig", "AdminUsersBundle:Stage:show.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUsersBundle:Stage:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "   GestionStages    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_Menu($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Menu"));

        // line 8
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
        // line 22
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
        // line 34
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
        // line 46
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
         <li   class=\"active open\">
             <a href=\"";
        // line 58
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
        // line 70
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
        // line 82
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
        // line 94
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
        // line 106
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

    // line 120
    public function block_pagetitle($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagetitle"));

        // line 121
        echo "    <section id=\"page-title\" class=\"padding-top-15 padding-bottom-15\">
        <div class=\"row\">
            <div class=\"col-sm-7\">
                <h1 class=\"mainTitle\">GestionStages</h1>
                <span class=\"mainDescription\">overview &amp; stats </span>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 131
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 132
        echo "    <h1>Stage  N`";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idStage", array()), "html", null, true);
        echo "</h1>
    <div class=\"tabbable tabs-left\">
        <ul id=\"myTab4\" class=\"nav nav-tabs\">
            <li class=\"active\">
                <a href=\"#myTab4_example1\" data-toggle=\"tab\" aria-expanded=\"true\">
                   General Info
                </a>
            </li>
            <li class=\"\">
                <a href=\"#myTab4_example2\" data-toggle=\"tab\" aria-expanded=\"false\">
                    Suject
                </a>
            </li>
            <li class=\"\">
                <a href=\"#myTab4_example3\" data-toggle=\"tab\" aria-expanded=\"false\">
                    Action
                </a>
            </li>
        </ul>
        <div class=\"tab-content\">
            <div class=\"tab-pane fade active in\" id=\"myTab4_example1\">
                <table class=\"table table-hover\">
                    <tbody>
                    <tr>
                        <th>Datedebut</th>
                        <td>";
        // line 157
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDebut", array()), "Y-m-d"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Datefin</th>
                        <td>";
        // line 161
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateFin", array()), "Y-m-d"), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Affect</th>
                        <td>";
        // line 165
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "affect", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Technologie</th>
                        <td>";
        // line 169
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idTechnologie", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Departement</th>
                        <td>";
        // line 173
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idDepartement", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Type stage</th>
                        <td>";
        // line 177
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idTypestage", array()), "html", null, true);
        echo "</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class=\"tab-pane fade\" id=\"myTab4_example2\">
                <p>
                    ";
        // line 184
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sujetStage", array()), "html", null, true);
        echo "
                </p>
                <br><br><br><br><br><br><br><br><br>

            </div>
            <div class=\"tab-pane fade\" id=\"myTab4_example3\">
                <ul>
                    <li>
                        <a href=\"";
        // line 192
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_users_GestionStages");
        echo "\">
                            Back to the list
                        </a>
                    </li>
                    <li>
                        <a href=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("Stage_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idStage", array()))), "html", null, true);
        echo "\">
                            Edit
                        </a>
                    </li>
                    <li>";
        // line 201
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
                </ul>
                <br><br>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 210
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminUsersBundle:Stage:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 210,  336 => 201,  329 => 197,  321 => 192,  310 => 184,  300 => 177,  293 => 173,  286 => 169,  279 => 165,  272 => 161,  265 => 157,  236 => 132,  230 => 131,  215 => 121,  209 => 120,  189 => 106,  174 => 94,  159 => 82,  144 => 70,  129 => 58,  114 => 46,  99 => 34,  84 => 22,  68 => 8,  62 => 7,  51 => 5,  39 => 3,  11 => 1,);
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

{% block title %}   GestionStages    {% endblock %}

{% block css %}
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
         <li   class=\"active open\">
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
                <h1 class=\"mainTitle\">GestionStages</h1>
                <span class=\"mainDescription\">overview &amp; stats </span>
            </div>
        </div>
    </section>
{% endblock %}

{% block body %}
    <h1>Stage  N`{{ entity.idStage }}</h1>
    <div class=\"tabbable tabs-left\">
        <ul id=\"myTab4\" class=\"nav nav-tabs\">
            <li class=\"active\">
                <a href=\"#myTab4_example1\" data-toggle=\"tab\" aria-expanded=\"true\">
                   General Info
                </a>
            </li>
            <li class=\"\">
                <a href=\"#myTab4_example2\" data-toggle=\"tab\" aria-expanded=\"false\">
                    Suject
                </a>
            </li>
            <li class=\"\">
                <a href=\"#myTab4_example3\" data-toggle=\"tab\" aria-expanded=\"false\">
                    Action
                </a>
            </li>
        </ul>
        <div class=\"tab-content\">
            <div class=\"tab-pane fade active in\" id=\"myTab4_example1\">
                <table class=\"table table-hover\">
                    <tbody>
                    <tr>
                        <th>Datedebut</th>
                        <td>{{ entity.dateDebut|date('Y-m-d') }}</td>
                    </tr>
                    <tr>
                        <th>Datefin</th>
                        <td>{{ entity.dateFin|date('Y-m-d') }}</td>
                    </tr>
                    <tr>
                        <th>Affect</th>
                        <td>{{ entity.affect }}</td>
                    </tr>
                    <tr>
                        <th>Technologie</th>
                        <td>{{ entity.idTechnologie }}</td>
                    </tr>
                    <tr>
                        <th>Departement</th>
                        <td>{{ entity.idDepartement }}</td>
                    </tr>
                    <tr>
                        <th>Type stage</th>
                        <td>{{ entity.idTypestage }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class=\"tab-pane fade\" id=\"myTab4_example2\">
                <p>
                    {{ entity.sujetStage }}
                </p>
                <br><br><br><br><br><br><br><br><br>

            </div>
            <div class=\"tab-pane fade\" id=\"myTab4_example3\">
                <ul>
                    <li>
                        <a href=\"{{ path('admin_users_GestionStages') }}\">
                            Back to the list
                        </a>
                    </li>
                    <li>
                        <a href=\"{{ path('Stage_edit', { 'id': entity.idStage }) }}\">
                            Edit
                        </a>
                    </li>
                    <li>{{ form(delete_form) }}</li>
                </ul>
                <br><br>
            </div>
        </div>
    </div>
{% endblock %}


{% block javascript %}
{% endblock %}", "AdminUsersBundle:Stage:show.html.twig", "C:\\wamp\\www\\github\\Gestion-de-Stage\\src\\Admin\\UsersBundle/Resources/views/Stage/show.html.twig");
    }
}
