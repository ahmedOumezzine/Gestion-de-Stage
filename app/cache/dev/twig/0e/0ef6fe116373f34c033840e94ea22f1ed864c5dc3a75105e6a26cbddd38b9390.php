<?php

/* StudentUsersBundle:Soutanance:show.html.twig */
class __TwigTemplate_b1940917ae1d3cb34688f5391fb794aaf7de2691aae98474382906dab70593fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("StudentUsersBundle::layout.html.twig", "StudentUsersBundle:Soutanance:show.html.twig", 1);
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
        $__internal_62b3ce083545c3f9251a0042149d884ff43cef7877a16ee54106007b13b139d4 = $this->env->getExtension("native_profiler");
        $__internal_62b3ce083545c3f9251a0042149d884ff43cef7877a16ee54106007b13b139d4->enter($__internal_62b3ce083545c3f9251a0042149d884ff43cef7877a16ee54106007b13b139d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StudentUsersBundle:Soutanance:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62b3ce083545c3f9251a0042149d884ff43cef7877a16ee54106007b13b139d4->leave($__internal_62b3ce083545c3f9251a0042149d884ff43cef7877a16ee54106007b13b139d4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b5a5070bb91d953041bf09bae04bfc5a9500b237cfc925f49de44db787b6c06 = $this->env->getExtension("native_profiler");
        $__internal_7b5a5070bb91d953041bf09bae04bfc5a9500b237cfc925f49de44db787b6c06->enter($__internal_7b5a5070bb91d953041bf09bae04bfc5a9500b237cfc925f49de44db787b6c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "   GestionStages    ";
        
        $__internal_7b5a5070bb91d953041bf09bae04bfc5a9500b237cfc925f49de44db787b6c06->leave($__internal_7b5a5070bb91d953041bf09bae04bfc5a9500b237cfc925f49de44db787b6c06_prof);

    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        $__internal_e4e6b378d4d37fd64525291029abc0de932a0e20cbba1cc855ad2aa7d30f3025 = $this->env->getExtension("native_profiler");
        $__internal_e4e6b378d4d37fd64525291029abc0de932a0e20cbba1cc855ad2aa7d30f3025->enter($__internal_e4e6b378d4d37fd64525291029abc0de932a0e20cbba1cc855ad2aa7d30f3025_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_e4e6b378d4d37fd64525291029abc0de932a0e20cbba1cc855ad2aa7d30f3025->leave($__internal_e4e6b378d4d37fd64525291029abc0de932a0e20cbba1cc855ad2aa7d30f3025_prof);

    }

    // line 8
    public function block_Menu($context, array $blocks = array())
    {
        $__internal_258e5791f7d5c9e6f3fcd45748afdfd9a010f8430366eb6a305f56cb80129a7c = $this->env->getExtension("native_profiler");
        $__internal_258e5791f7d5c9e6f3fcd45748afdfd9a010f8430366eb6a305f56cb80129a7c->enter($__internal_258e5791f7d5c9e6f3fcd45748afdfd9a010f8430366eb6a305f56cb80129a7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Menu"));

        // line 9
        echo "     <ul class=\"main-navigation-menu\">
         <li>
             <a href=\"";
        // line 11
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
        // line 23
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
        // line 35
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
        // line 47
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
        // line 59
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
        // line 71
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
        // line 83
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
        
        $__internal_258e5791f7d5c9e6f3fcd45748afdfd9a010f8430366eb6a305f56cb80129a7c->leave($__internal_258e5791f7d5c9e6f3fcd45748afdfd9a010f8430366eb6a305f56cb80129a7c_prof);

    }

    // line 99
    public function block_pagetitle($context, array $blocks = array())
    {
        $__internal_5b7ad0191b9255a4dcb53ee2feb7a6793eac4faf20685c627fb45b97345c83d1 = $this->env->getExtension("native_profiler");
        $__internal_5b7ad0191b9255a4dcb53ee2feb7a6793eac4faf20685c627fb45b97345c83d1->enter($__internal_5b7ad0191b9255a4dcb53ee2feb7a6793eac4faf20685c627fb45b97345c83d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagetitle"));

        // line 100
        echo "    <section id=\"page-title\" class=\"padding-top-15 padding-bottom-15\">
        <div class=\"row\">
            <div class=\"col-sm-7\">
                <h1 class=\"mainTitle\">GestionStages</h1>
                <span class=\"mainDescription\">overview &amp; stats </span>
            </div>
        </div>
    </section>
";
        
        $__internal_5b7ad0191b9255a4dcb53ee2feb7a6793eac4faf20685c627fb45b97345c83d1->leave($__internal_5b7ad0191b9255a4dcb53ee2feb7a6793eac4faf20685c627fb45b97345c83d1_prof);

    }

    // line 110
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f81c4062838dc75a5e91e551a3a46a60b33e180189baffa8079217ceeb25b41 = $this->env->getExtension("native_profiler");
        $__internal_8f81c4062838dc75a5e91e551a3a46a60b33e180189baffa8079217ceeb25b41->enter($__internal_8f81c4062838dc75a5e91e551a3a46a60b33e180189baffa8079217ceeb25b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 111
        echo "<h1>Soutanance</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Idsoutenance</th>
                <td>";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "idSoutenance", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datesoutenance</th>
                <td>";
        // line 121
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateSoutenance", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sallesoutenance</th>
                <td>";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "salleSoutenance", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 132
        echo $this->env->getExtension('routing')->getPath("SoutananceStudent");
        echo "\">
            Back to the list
        </a>
    </li>

</ul>
";
        
        $__internal_8f81c4062838dc75a5e91e551a3a46a60b33e180189baffa8079217ceeb25b41->leave($__internal_8f81c4062838dc75a5e91e551a3a46a60b33e180189baffa8079217ceeb25b41_prof);

    }

    // line 141
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_f437f71f1725d456bed3127cf289163e4fcba1ef6549cff1a900c8d4a043a001 = $this->env->getExtension("native_profiler");
        $__internal_f437f71f1725d456bed3127cf289163e4fcba1ef6549cff1a900c8d4a043a001->enter($__internal_f437f71f1725d456bed3127cf289163e4fcba1ef6549cff1a900c8d4a043a001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_f437f71f1725d456bed3127cf289163e4fcba1ef6549cff1a900c8d4a043a001->leave($__internal_f437f71f1725d456bed3127cf289163e4fcba1ef6549cff1a900c8d4a043a001_prof);

    }

    public function getTemplateName()
    {
        return "StudentUsersBundle:Soutanance:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 141,  244 => 132,  234 => 125,  227 => 121,  220 => 117,  212 => 111,  206 => 110,  191 => 100,  185 => 99,  162 => 83,  147 => 71,  132 => 59,  117 => 47,  102 => 35,  87 => 23,  72 => 11,  68 => 9,  62 => 8,  51 => 5,  39 => 3,  11 => 1,);
    }
}
/* {% extends 'StudentUsersBundle::layout.html.twig' %}*/
/* */
/* {% block title %}   GestionStages    {% endblock %}*/
/* */
/* {% block css %}*/
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
/* {% block pagetitle %}*/
/*     <section id="page-title" class="padding-top-15 padding-bottom-15">*/
/*         <div class="row">*/
/*             <div class="col-sm-7">*/
/*                 <h1 class="mainTitle">GestionStages</h1>*/
/*                 <span class="mainDescription">overview &amp; stats </span>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
/* */
/* {% block body -%}*/
/*     <h1>Soutanance</h1>*/
/* */
/*     <table class="record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Idsoutenance</th>*/
/*                 <td>{{ entity.idSoutenance }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Datesoutenance</th>*/
/*                 <td>{{ entity.dateSoutenance|date('Y-m-d H:i:s') }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Sallesoutenance</th>*/
/*                 <td>{{ entity.salleSoutenance }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*         <ul class="record_actions">*/
/*     <li>*/
/*         <a href="{{ path('SoutananceStudent') }}">*/
/*             Back to the list*/
/*         </a>*/
/*     </li>*/
/* */
/* </ul>*/
/* {% endblock %}*/
/* */
/* */
/* {% block javascript %}*/
/* {% endblock %}*/
