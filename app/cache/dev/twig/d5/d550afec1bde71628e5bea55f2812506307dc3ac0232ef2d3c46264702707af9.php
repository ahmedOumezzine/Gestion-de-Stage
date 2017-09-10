<?php

/* StudentUsersBundle:Document:index.html.twig */
class __TwigTemplate_9d4d80f44965604dc1b92337523a2cbbad54a3a446ef22b606a4506661775b98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("StudentUsersBundle::layout.html.twig", "StudentUsersBundle:Document:index.html.twig", 1);
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
        return "StudentUsersBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6248678caf00f151fdc1adbbbb5aa691542c810784e1a6c65c589efb5172a2a = $this->env->getExtension("native_profiler");
        $__internal_f6248678caf00f151fdc1adbbbb5aa691542c810784e1a6c65c589efb5172a2a->enter($__internal_f6248678caf00f151fdc1adbbbb5aa691542c810784e1a6c65c589efb5172a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudentUsersBundle:Document:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6248678caf00f151fdc1adbbbb5aa691542c810784e1a6c65c589efb5172a2a->leave($__internal_f6248678caf00f151fdc1adbbbb5aa691542c810784e1a6c65c589efb5172a2a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6dcd7cb731211db5669cbe1fcde97878084c40e32a61ec044dd3622aa1578496 = $this->env->getExtension("native_profiler");
        $__internal_6dcd7cb731211db5669cbe1fcde97878084c40e32a61ec044dd3622aa1578496->enter($__internal_6dcd7cb731211db5669cbe1fcde97878084c40e32a61ec044dd3622aa1578496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "   Gestion Documents   ";
        
        $__internal_6dcd7cb731211db5669cbe1fcde97878084c40e32a61ec044dd3622aa1578496->leave($__internal_6dcd7cb731211db5669cbe1fcde97878084c40e32a61ec044dd3622aa1578496_prof);

    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        $__internal_3eb451f4c9f9cf4cf0a4870305b988aa08413e4d959dc0dd52dae979639a2536 = $this->env->getExtension("native_profiler");
        $__internal_3eb451f4c9f9cf4cf0a4870305b988aa08413e4d959dc0dd52dae979639a2536->enter($__internal_3eb451f4c9f9cf4cf0a4870305b988aa08413e4d959dc0dd52dae979639a2536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 6
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/vendor/select2/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/vendor/DataTables/css/DT_bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
";
        
        $__internal_3eb451f4c9f9cf4cf0a4870305b988aa08413e4d959dc0dd52dae979639a2536->leave($__internal_3eb451f4c9f9cf4cf0a4870305b988aa08413e4d959dc0dd52dae979639a2536_prof);

    }

    // line 10
    public function block_Menu($context, array $blocks = array())
    {
        $__internal_f2b3687400098ee9ecc062d1aab232088227be6b12e6f0a157f1d2c220dad8b6 = $this->env->getExtension("native_profiler");
        $__internal_f2b3687400098ee9ecc062d1aab232088227be6b12e6f0a157f1d2c220dad8b6->enter($__internal_f2b3687400098ee9ecc062d1aab232088227be6b12e6f0a157f1d2c220dad8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Menu"));

        // line 11
        echo "     <ul class=\"main-navigation-menu\">
         <li>
             <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("student_users_homepage");
        echo "\">
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
        echo $this->env->getExtension('routing')->getPath("student_users_Profile");
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
        echo $this->env->getExtension('routing')->getPath("student_users_Messages");
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
         <li>
             <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("student_users_Agenda");
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
         <li>
             <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("StageStudent");
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
        echo $this->env->getExtension('routing')->getPath("SoutananceStudent");
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
          <li  class=\"active open\">
             <a href=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("DocumentStudent");
        echo "\">
                 <div class=\"item-content\">
                     <div class=\"item-media\">
                         <i class=\"ti-settings\"></i>
                     </div>
                     <div class=\"item-inner\">
                         <span class=\"title\">Gestion Documents </span>
                     </div>
                 </div>
             </a>
         </li>


     </ul>

 ";
        
        $__internal_f2b3687400098ee9ecc062d1aab232088227be6b12e6f0a157f1d2c220dad8b6->leave($__internal_f2b3687400098ee9ecc062d1aab232088227be6b12e6f0a157f1d2c220dad8b6_prof);

    }

    // line 102
    public function block_pagetitle($context, array $blocks = array())
    {
        $__internal_7ff50af6b26eac936320e0112a6f7c55ae743e23e50ae832103a7a21ff3e291f = $this->env->getExtension("native_profiler");
        $__internal_7ff50af6b26eac936320e0112a6f7c55ae743e23e50ae832103a7a21ff3e291f->enter($__internal_7ff50af6b26eac936320e0112a6f7c55ae743e23e50ae832103a7a21ff3e291f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagetitle"));

        // line 103
        echo "    <section id=\"page-title\" class=\"padding-top-15 padding-bottom-15\">
        <div class=\"row\">
            <div class=\"col-sm-7\">
                <h1 class=\"mainTitle\">Gestion Document</h1>
            </div>
        </div>
    </section>
";
        
        $__internal_7ff50af6b26eac936320e0112a6f7c55ae743e23e50ae832103a7a21ff3e291f->leave($__internal_7ff50af6b26eac936320e0112a6f7c55ae743e23e50ae832103a7a21ff3e291f_prof);

    }

    // line 112
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c65c57661db80e95c45523f6cd2df0963c2874a1c24e919aed0fc269adbb127 = $this->env->getExtension("native_profiler");
        $__internal_6c65c57661db80e95c45523f6cd2df0963c2874a1c24e919aed0fc269adbb127->enter($__internal_6c65c57661db80e95c45523f6cd2df0963c2874a1c24e919aed0fc269adbb127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 113
        echo "    <div class=\"container-fluid container-fullw bg-white\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div id=\"sample_1_wrapper\" class=\"dataTables_wrapper no-footer\">
                <div id=\"sample_1_filter\" class=\"dataTables_filter\"></div>
                          <table class=\"table table-striped table-bordered table-hover table-full-width dataTable no-footer\" id=\"sample_1\" role=\"grid\" aria-describedby=\"sample_1_info\">
                        <thead>
                        <tr role=\"row\">
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\" aria-label=\"Id_Stage\" style=\"width: 211px;\">nomDocument</th>
                        <th class=\"hidden-xs sorting_asc\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\" aria-sort=\"ascending\" aria-label=\"dateDebut\" style=\"width: 247px;\">date </th>
                        <th class=\"sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\" aria-label=\"dateFin\" style=\"width: 109px;\">show file</th>
                        <th class=\"hidden-xs sorting\" tabindex=\"0\" aria-controls=\"sample_1\" rowspan=\"1\" colspan=\"1\" aria-label=\" affect\" style=\"width: 182px;\">Typedocument</th>
                        </thead>
                        <tbody>
";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 128
            echo "            <tr role=\"row\" class=\"even\">
                <td>";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomDocument", array()), "html", null, true);
            echo "</td>
                <td class=\"hidden-xs sorting_1\">";
            // line 130
            if ($this->getAttribute($context["entity"], "dateDocument", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateDocument", array()), "Y-m-d"), "html", null, true);
            }
            echo "</td>
                <td><a href=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["entity"], "cheminDocument", array())), "html", null, true);
            echo "\">show file </a></td>
                <td class=\"hidden-xs\">";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idTypedocument", array()), "html", null, true);
            echo "</td>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "                        </tbody>
                    </table>
            </div>
        </div>
    </div>
    ";
        
        $__internal_6c65c57661db80e95c45523f6cd2df0963c2874a1c24e919aed0fc269adbb127->leave($__internal_6c65c57661db80e95c45523f6cd2df0963c2874a1c24e919aed0fc269adbb127_prof);

    }

    // line 144
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_6da3c99d6f0b4f4db2787cd959af92b6b211070d93126f3ba39d74fe54e76ca2 = $this->env->getExtension("native_profiler");
        $__internal_6da3c99d6f0b4f4db2787cd959af92b6b211070d93126f3ba39d74fe54e76ca2->enter($__internal_6da3c99d6f0b4f4db2787cd959af92b6b211070d93126f3ba39d74fe54e76ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 145
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/vendor/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/vendor/DataTables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/assets/js/table-data.js"), "html", null, true);
        echo "\"></script>
    <script>
        jQuery(document).ready(function() {
            TableData.init();
        });
    </script>
";
        
        $__internal_6da3c99d6f0b4f4db2787cd959af92b6b211070d93126f3ba39d74fe54e76ca2->leave($__internal_6da3c99d6f0b4f4db2787cd959af92b6b211070d93126f3ba39d74fe54e76ca2_prof);

    }

    public function getTemplateName()
    {
        return "StudentUsersBundle:Document:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 147,  290 => 146,  285 => 145,  279 => 144,  267 => 136,  257 => 132,  253 => 131,  247 => 130,  243 => 129,  240 => 128,  236 => 127,  220 => 113,  214 => 112,  200 => 103,  194 => 102,  171 => 85,  156 => 73,  141 => 61,  126 => 49,  111 => 37,  96 => 25,  81 => 13,  77 => 11,  71 => 10,  62 => 7,  57 => 6,  51 => 5,  39 => 3,  11 => 1,);
    }
}
/* {% extends 'StudentUsersBundle::layout.html.twig' %}*/
/* */
/* {% block title %}   Gestion Documents   {% endblock %}*/
/* */
/* {% block css %}*/
/*     <link href="{{ asset('Backoffice/vendor/select2/select2.min.css') }}" rel="stylesheet" media="screen">*/
/*     <link href="{{ asset('Backoffice/vendor/DataTables/css/DT_bootstrap.css') }}" rel="stylesheet" media="screen">*/
/* {% endblock %}*/
/* */
/*  {% block Menu %}*/
/*      <ul class="main-navigation-menu">*/
/*          <li>*/
/*              <a href="{{ path('student_users_homepage') }}">*/
/*                  <div class="item-content">*/
/*                      <div class="item-media">*/
/*                          <i class="ti-home"></i>*/
/*                      </div>*/
/*                      <div class="item-inner">*/
/*                          <span class="title"> Dashboard </span>*/
/*                      </div>*/
/*                  </div>*/
/*              </a>*/
/*          </li>*/
/*          <li>*/
/*              <a href="{{ path('student_users_Profile') }}">*/
/*                  <div class="item-content">*/
/*                      <div class="item-media">*/
/*                          <i class="ti-settings"></i>*/
/*                      </div>*/
/*                      <div class="item-inner">*/
/*                          <span class="title"> Profile </span>*/
/*                      </div>*/
/*                  </div>*/
/*              </a>*/
/*          </li>*/
/*          <li>*/
/*              <a href="{{ path('student_users_Messages') }}">*/
/*                  <div class="item-content">*/
/*                      <div class="item-media">*/
/*                          <i class="ti-settings"></i>*/
/*                      </div>*/
/*                      <div class="item-inner">*/
/*                          <span class="title"> Messages </span>*/
/*                      </div>*/
/*                  </div>*/
/*              </a>*/
/*          </li>*/
/*          <li>*/
/*              <a href="{{ path('student_users_Agenda') }}">*/
/*                  <div class="item-content">*/
/*                      <div class="item-media">*/
/*                          <i class="ti-settings"></i>*/
/*                      </div>*/
/*                      <div class="item-inner">*/
/*                          <span class="title"> Agenda </span>*/
/*                      </div>*/
/*                  </div>*/
/*              </a>*/
/*          </li>*/
/*          <li>*/
/*              <a href="{{ path('StageStudent') }}">*/
/*                  <div class="item-content">*/
/*                      <div class="item-media">*/
/*                          <i class="ti-settings"></i>*/
/*                      </div>*/
/*                      <div class="item-inner">*/
/*                          <span class="title">Gestion Stages </span>*/
/*                      </div>*/
/*                  </div>*/
/*              </a>*/
/*          </li>*/
/*          <li>*/
/*              <a href="{{ path('SoutananceStudent') }}">*/
/*                  <div class="item-content">*/
/*                      <div class="item-media">*/
/*                          <i class="ti-settings"></i>*/
/*                      </div>*/
/*                      <div class="item-inner">*/
/*                          <span class="title">Gestion soutenances </span>*/
/*                      </div>*/
/*                  </div>*/
/*              </a>*/
/*          </li>*/
/*           <li  class="active open">*/
/*              <a href="{{ path('DocumentStudent') }}">*/
/*                  <div class="item-content">*/
/*                      <div class="item-media">*/
/*                          <i class="ti-settings"></i>*/
/*                      </div>*/
/*                      <div class="item-inner">*/
/*                          <span class="title">Gestion Documents </span>*/
/*                      </div>*/
/*                  </div>*/
/*              </a>*/
/*          </li>*/
/* */
/* */
/*      </ul>*/
/* */
/*  {% endblock %}*/
/* */
/* {% block pagetitle %}*/
/*     <section id="page-title" class="padding-top-15 padding-bottom-15">*/
/*         <div class="row">*/
/*             <div class="col-sm-7">*/
/*                 <h1 class="mainTitle">Gestion Document</h1>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="container-fluid container-fullw bg-white">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div id="sample_1_wrapper" class="dataTables_wrapper no-footer">*/
/*                 <div id="sample_1_filter" class="dataTables_filter"></div>*/
/*                           <table class="table table-striped table-bordered table-hover table-full-width dataTable no-footer" id="sample_1" role="grid" aria-describedby="sample_1_info">*/
/*                         <thead>*/
/*                         <tr role="row">*/
/*                         <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Id_Stage" style="width: 211px;">nomDocument</th>*/
/*                         <th class="hidden-xs sorting_asc" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="dateDebut" style="width: 247px;">date </th>*/
/*                         <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="dateFin" style="width: 109px;">show file</th>*/
/*                         <th class="hidden-xs sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label=" affect" style="width: 182px;">Typedocument</th>*/
/*                         </thead>*/
/*                         <tbody>*/
/* {% for entity in entities %}*/
/*             <tr role="row" class="even">*/
/*                 <td>{{ entity.nomDocument }}</td>*/
/*                 <td class="hidden-xs sorting_1">{% if entity.dateDocument %}{{ entity.dateDocument|date('Y-m-d') }}{% endif %}</td>*/
/*                 <td><a href="{{ asset(entity.cheminDocument) }}">show file </a></td>*/
/*                 <td class="hidden-xs">{{ entity.idTypedocument }}</td>*/
/* */
/*             </tr>*/
/*         {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {% endblock %}*/
/* */
/* */
/* {% block javascript %}*/
/*     <script src="{{ asset('Backoffice/vendor/select2/select2.min.js') }}"></script>*/
/*     <script src="{{ asset('Backoffice/vendor/DataTables/jquery.dataTables.min.js') }}"></script>*/
/*     <script src="{{ asset('Backoffice/assets/js/table-data.js') }}"></script>*/
/*     <script>*/
/*         jQuery(document).ready(function() {*/
/*             TableData.init();*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
