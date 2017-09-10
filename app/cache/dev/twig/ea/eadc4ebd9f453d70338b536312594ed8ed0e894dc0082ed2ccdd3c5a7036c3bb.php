<?php

/* StudentUsersBundle:Soutanance:index.html.twig */
class __TwigTemplate_e4ee3dd9347ceb88d26cc8520ed2251f7fe8de0266cc732fe0edae153f35cce1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("StudentUsersBundle::layout.html.twig", "StudentUsersBundle:Soutanance:index.html.twig", 1);
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
        $__internal_56cf64da5ffa04f47acc91748eb2f3bbc63d9b34caca376ad9d47742526e9036 = $this->env->getExtension("native_profiler");
        $__internal_56cf64da5ffa04f47acc91748eb2f3bbc63d9b34caca376ad9d47742526e9036->enter($__internal_56cf64da5ffa04f47acc91748eb2f3bbc63d9b34caca376ad9d47742526e9036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudentUsersBundle:Soutanance:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56cf64da5ffa04f47acc91748eb2f3bbc63d9b34caca376ad9d47742526e9036->leave($__internal_56cf64da5ffa04f47acc91748eb2f3bbc63d9b34caca376ad9d47742526e9036_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2a2ead7bfe06a982e78e0a8ee1b4fa65f2863ccf0821e16d75ddac20786f7a09 = $this->env->getExtension("native_profiler");
        $__internal_2a2ead7bfe06a982e78e0a8ee1b4fa65f2863ccf0821e16d75ddac20786f7a09->enter($__internal_2a2ead7bfe06a982e78e0a8ee1b4fa65f2863ccf0821e16d75ddac20786f7a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "   Gestion soutenances    ";
        
        $__internal_2a2ead7bfe06a982e78e0a8ee1b4fa65f2863ccf0821e16d75ddac20786f7a09->leave($__internal_2a2ead7bfe06a982e78e0a8ee1b4fa65f2863ccf0821e16d75ddac20786f7a09_prof);

    }

    // line 4
    public function block_css($context, array $blocks = array())
    {
        $__internal_dd725bf48053b3d0b21c1af317ee155fdc606844c9fdc4675b943fc06e8189e1 = $this->env->getExtension("native_profiler");
        $__internal_dd725bf48053b3d0b21c1af317ee155fdc606844c9fdc4675b943fc06e8189e1->enter($__internal_dd725bf48053b3d0b21c1af317ee155fdc606844c9fdc4675b943fc06e8189e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 5
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/vendor/select2/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/vendor/DataTables/css/DT_bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
";
        
        $__internal_dd725bf48053b3d0b21c1af317ee155fdc606844c9fdc4675b943fc06e8189e1->leave($__internal_dd725bf48053b3d0b21c1af317ee155fdc606844c9fdc4675b943fc06e8189e1_prof);

    }

    // line 10
    public function block_Menu($context, array $blocks = array())
    {
        $__internal_074ab5b262bb20d517944ff50cab14eaa015de49fcae3e64c42c5a24363cdda9 = $this->env->getExtension("native_profiler");
        $__internal_074ab5b262bb20d517944ff50cab14eaa015de49fcae3e64c42c5a24363cdda9->enter($__internal_074ab5b262bb20d517944ff50cab14eaa015de49fcae3e64c42c5a24363cdda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Menu"));

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
         <li  class=\"active open\">
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
         <li >
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
        
        $__internal_074ab5b262bb20d517944ff50cab14eaa015de49fcae3e64c42c5a24363cdda9->leave($__internal_074ab5b262bb20d517944ff50cab14eaa015de49fcae3e64c42c5a24363cdda9_prof);

    }

    // line 102
    public function block_pagetitle($context, array $blocks = array())
    {
        $__internal_e2485c1b5161ab729a4e38253ddd4e6b2915f0382ad316f538f3181ad94e1b7b = $this->env->getExtension("native_profiler");
        $__internal_e2485c1b5161ab729a4e38253ddd4e6b2915f0382ad316f538f3181ad94e1b7b->enter($__internal_e2485c1b5161ab729a4e38253ddd4e6b2915f0382ad316f538f3181ad94e1b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagetitle"));

        // line 103
        echo "    <section id=\"page-title\" class=\"padding-top-15 padding-bottom-15\">
        <div class=\"row\">
            <div class=\"col-sm-7\">
                <h1 class=\"mainTitle\">Gestion Soutennace</h1>
            </div>
        </div>
    </section>
";
        
        $__internal_e2485c1b5161ab729a4e38253ddd4e6b2915f0382ad316f538f3181ad94e1b7b->leave($__internal_e2485c1b5161ab729a4e38253ddd4e6b2915f0382ad316f538f3181ad94e1b7b_prof);

    }

    // line 112
    public function block_body($context, array $blocks = array())
    {
        $__internal_a16b9dc08cb08415fdbff69dac73afc9348f1ac91d1b4c0a4d2cd51e14dee76c = $this->env->getExtension("native_profiler");
        $__internal_a16b9dc08cb08415fdbff69dac73afc9348f1ac91d1b4c0a4d2cd51e14dee76c->enter($__internal_a16b9dc08cb08415fdbff69dac73afc9348f1ac91d1b4c0a4d2cd51e14dee76c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 113
        echo "    <div class=\"container-fluid container-fullw bg-white\">
        <div class=\"row\">
            <div class=\"col-md-12\">

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
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 131
            echo "                            <tr role=\"row\" class=\"even\">
                                <td>";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idSoutenance", array()), "html", null, true);
            echo "</td>
                                <td class=\"hidden-xs sorting_1\">";
            // line 133
            if ($this->getAttribute($context["entity"], "dateSoutenance", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateSoutenance", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                                <td>";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "salleSoutenance", array()), "html", null, true);
            echo "</td>
                                <td class=\"hidden-xs\">";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idTypesoutenance", array()), "html", null, true);
            echo "</td>
                                <td>
                                    <ul>
                                        <li>
                                            <a href=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Soutanance_showStudent", array("id" => $this->getAttribute($context["entity"], "idSoutenance", array()))), "html", null, true);
            echo "\">Show</a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_a16b9dc08cb08415fdbff69dac73afc9348f1ac91d1b4c0a4d2cd51e14dee76c->leave($__internal_a16b9dc08cb08415fdbff69dac73afc9348f1ac91d1b4c0a4d2cd51e14dee76c_prof);

    }

    // line 155
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_94aadbb3948b3cbf61aa2708cb78868d442bda5e44c540192bf606d389708840 = $this->env->getExtension("native_profiler");
        $__internal_94aadbb3948b3cbf61aa2708cb78868d442bda5e44c540192bf606d389708840->enter($__internal_94aadbb3948b3cbf61aa2708cb78868d442bda5e44c540192bf606d389708840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 156
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/vendor/select2/select2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/vendor/DataTables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/assets/js/table-data.js"), "html", null, true);
        echo "\"></script>
    <script>
        jQuery(document).ready(function() {
            TableData.init();
        });
    </script>
";
        
        $__internal_94aadbb3948b3cbf61aa2708cb78868d442bda5e44c540192bf606d389708840->leave($__internal_94aadbb3948b3cbf61aa2708cb78868d442bda5e44c540192bf606d389708840_prof);

    }

    public function getTemplateName()
    {
        return "StudentUsersBundle:Soutanance:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 158,  304 => 157,  299 => 156,  293 => 155,  279 => 145,  267 => 139,  260 => 135,  256 => 134,  250 => 133,  246 => 132,  243 => 131,  239 => 130,  220 => 113,  214 => 112,  200 => 103,  194 => 102,  171 => 85,  156 => 73,  141 => 61,  126 => 49,  111 => 37,  96 => 25,  81 => 13,  77 => 11,  71 => 10,  62 => 6,  57 => 5,  51 => 4,  39 => 3,  11 => 1,);
    }
}
/* {% extends 'StudentUsersBundle::layout.html.twig' %}*/
/* */
/* {% block title %}   Gestion soutenances    {% endblock %}*/
/* {% block css %}*/
/*     <link href="{{ asset('Backoffice/vendor/select2/select2.min.css') }}" rel="stylesheet" media="screen">*/
/*     <link href="{{ asset('Backoffice/vendor/DataTables/css/DT_bootstrap.css') }}" rel="stylesheet" media="screen">*/
/* {% endblock %}*/
/* */
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
/*          <li  class="active open">*/
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
/*          <li >*/
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
/*                 <h1 class="mainTitle">Gestion Soutennace</h1>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="container-fluid container-fullw bg-white">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/* */
/*                 <div id="sample_1_wrapper" class="dataTables_wrapper no-footer">*/
/*                     <div id="sample_1_filter" class="dataTables_filter"></div>*/
/*                     <table class="table table-striped table-bordered table-hover table-full-width dataTable no-footer" id="sample_1" role="grid" aria-describedby="sample_1_info">*/
/*                         <thead>*/
/*                         <tr role="row">*/
/*                             <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Id_Stage" style="width: 211px;">Id_Soutenance</th>*/
/*                             <th class="hidden-xs sorting_asc" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="dateDebut" style="width: 247px;">Date_Soutenance</th>*/
/*                             <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="dateFin" style="width: 109px;">Salle_Soutenance</th>*/
/*                             <th class="hidden-xs sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label=" affect" style="width: 182px;">Id_TypeSoutenance</th>*/
/*                             <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="Current	layout engine: activate to sort column ascending" style="width: 134px;">Edit</th>*/
/*                         </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                         {% for entity in entities %}*/
/*                             <tr role="row" class="even">*/
/*                                 <td>{{ entity.idSoutenance }}</td>*/
/*                                 <td class="hidden-xs sorting_1">{% if entity.dateSoutenance %}{{ entity.dateSoutenance|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                                 <td>{{ entity.salleSoutenance }}</td>*/
/*                                 <td class="hidden-xs">{{ entity.idTypesoutenance }}</td>*/
/*                                 <td>*/
/*                                     <ul>*/
/*                                         <li>*/
/*                                             <a href="{{ path('Soutanance_showStudent', { 'id': entity.idSoutenance }) }}">Show</a>*/
/*                                         </li>*/
/*                                     </ul>*/
/*                                 </td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
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
