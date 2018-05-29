<?php

/* AdminUsersBundle:Default:Agenda.html.twig */
class __TwigTemplate_ff420dfddadac2d8884eb071413893411edac021e5b35bfdbbd11e7b6b9af0c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminUsersBundle::layout.html.twig", "AdminUsersBundle:Default:Agenda.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUsersBundle:Default:Agenda.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "   Agenda    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 6
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/vendor/fullcalendar/fullcalendar.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css"), "html", null, true);
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
         <li   class=\"active open\">
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
         <li>
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
                <h1 class=\"mainTitle\">Agenda</h1>
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
            <div class=\"col-sm-12 space20\">
                <a href=\"#newFullEvent\" class=\"btn btn-primary btn-o add-event\"><i class=\"fa fa-plus\"></i> Add New Event</a>
            </div>
            <div class=\"col-sm-9\">
                <div id=\"full-calendar\" class=\"fc fc-ltr fc-unthemed\"><div class=\"fc-toolbar\"><div class=\"fc-left\"><div class=\"fc-button-group\"><button type=\"button\" class=\"fc-prev-button fc-button fc-state-default fc-corner-left\"><span class=\"fc-icon fc-icon-fa fa-chevron-left\"></span></button><button type=\"button\" class=\"fc-next-button fc-button fc-state-default fc-corner-right\"><span class=\"fc-icon fc-icon-fa fa-chevron-right\"></span></button></div><button type=\"button\" class=\"fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled\" disabled=\"disabled\">today</button></div><div class=\"fc-right\"><div class=\"fc-button-group\"><button type=\"button\" class=\"fc-month-button fc-button fc-state-default fc-corner-left fc-state-active\">month</button><button type=\"button\" class=\"fc-agendaWeek-button fc-button fc-state-default\">week</button><button type=\"button\" class=\"fc-agendaDay-button fc-button fc-state-default fc-corner-right\">day</button></div></div><div class=\"fc-center\"><h2>December 2015</h2></div><div class=\"fc-clear\"></div></div><div class=\"fc-view-container\" style=\"\"><div class=\"fc-view fc-month-view fc-basic-view\" style=\"\"><table><thead class=\"fc-head\"><tr><td class=\"fc-widget-header\"><div class=\"fc-row fc-widget-header\"><table><thead><tr><th class=\"fc-day-header fc-widget-header fc-sun\">Sun</th><th class=\"fc-day-header fc-widget-header fc-mon\">Mon</th><th class=\"fc-day-header fc-widget-header fc-tue\">Tue</th><th class=\"fc-day-header fc-widget-header fc-wed\">Wed</th><th class=\"fc-day-header fc-widget-header fc-thu\">Thu</th><th class=\"fc-day-header fc-widget-header fc-fri\">Fri</th><th class=\"fc-day-header fc-widget-header fc-sat\">Sat</th></tr></thead></table></div></td></tr></thead><tbody class=\"fc-body\"><tr><td class=\"fc-widget-content\"><div class=\"fc-day-grid-container\" style=\"\"><div class=\"fc-day-grid\"><div class=\"fc-row fc-week fc-widget-content fc-rigid\" style=\"height: 90px;\"><div class=\"fc-bg\"><table><tbody><tr><td class=\"fc-day fc-widget-content fc-sun fc-other-month fc-past\" data-date=\"2015-11-29\"></td><td class=\"fc-day fc-widget-content fc-mon fc-other-month fc-past\" data-date=\"2015-11-30\"></td><td class=\"fc-day fc-widget-content fc-tue fc-past\" data-date=\"2015-12-01\"></td><td class=\"fc-day fc-widget-content fc-wed fc-past\" data-date=\"2015-12-02\"></td><td class=\"fc-day fc-widget-content fc-thu fc-past\" data-date=\"2015-12-03\"></td><td class=\"fc-day fc-widget-content fc-fri fc-past\" data-date=\"2015-12-04\"></td><td class=\"fc-day fc-widget-content fc-sat fc-past\" data-date=\"2015-12-05\"></td></tr></tbody></table></div><div class=\"fc-content-skeleton\"><table><thead><tr><td class=\"fc-day-number fc-sun fc-other-month fc-past\" data-date=\"2015-11-29\">29</td><td class=\"fc-day-number fc-mon fc-other-month fc-past\" data-date=\"2015-11-30\">30</td><td class=\"fc-day-number fc-tue fc-past\" data-date=\"2015-12-01\">1</td><td class=\"fc-day-number fc-wed fc-past\" data-date=\"2015-12-02\">2</td><td class=\"fc-day-number fc-thu fc-past\" data-date=\"2015-12-03\">3</td><td class=\"fc-day-number fc-fri fc-past\" data-date=\"2015-12-04\">4</td><td class=\"fc-day-number fc-sat fc-past\" data-date=\"2015-12-05\">5</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class=\"fc-row fc-week fc-widget-content fc-rigid\" style=\"height: 90px;\"><div class=\"fc-bg\"><table><tbody><tr><td class=\"fc-day fc-widget-content fc-sun fc-past\" data-date=\"2015-12-06\"></td><td class=\"fc-day fc-widget-content fc-mon fc-past\" data-date=\"2015-12-07\"></td><td class=\"fc-day fc-widget-content fc-tue fc-past\" data-date=\"2015-12-08\"></td><td class=\"fc-day fc-widget-content fc-wed fc-past\" data-date=\"2015-12-09\"></td><td class=\"fc-day fc-widget-content fc-thu fc-past\" data-date=\"2015-12-10\"></td><td class=\"fc-day fc-widget-content fc-fri fc-past\" data-date=\"2015-12-11\"></td><td class=\"fc-day fc-widget-content fc-sat fc-past\" data-date=\"2015-12-12\"></td></tr></tbody></table></div><div class=\"fc-content-skeleton\"><table><thead><tr><td class=\"fc-day-number fc-sun fc-past\" data-date=\"2015-12-06\">6</td><td class=\"fc-day-number fc-mon fc-past\" data-date=\"2015-12-07\">7</td><td class=\"fc-day-number fc-tue fc-past\" data-date=\"2015-12-08\">8</td><td class=\"fc-day-number fc-wed fc-past\" data-date=\"2015-12-09\">9</td><td class=\"fc-day-number fc-thu fc-past\" data-date=\"2015-12-10\">10</td><td class=\"fc-day-number fc-fri fc-past\" data-date=\"2015-12-11\">11</td><td class=\"fc-day-number fc-sat fc-past\" data-date=\"2015-12-12\">12</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td class=\"fc-event-container\" colspan=\"2\"><a class=\"fc-day-grid-event fc-h-event fc-event fc-start fc-not-end event-off-site-work fc-draggable\"><div class=\"fc-content\"> <span class=\"fc-title\">Bootstrap Seminar</span></div></a></td></tr></tbody></table></div></div><div class=\"fc-row fc-week fc-widget-content fc-rigid\" style=\"height: 90px;\"><div class=\"fc-bg\"><table><tbody><tr><td class=\"fc-day fc-widget-content fc-sun fc-past\" data-date=\"2015-12-13\"></td><td class=\"fc-day fc-widget-content fc-mon fc-past\" data-date=\"2015-12-14\"></td><td class=\"fc-day fc-widget-content fc-tue fc-past\" data-date=\"2015-12-15\"></td><td class=\"fc-day fc-widget-content fc-wed fc-today fc-state-highlight\" data-date=\"2015-12-16\"></td><td class=\"fc-day fc-widget-content fc-thu fc-future\" data-date=\"2015-12-17\"></td><td class=\"fc-day fc-widget-content fc-fri fc-future\" data-date=\"2015-12-18\"></td><td class=\"fc-day fc-widget-content fc-sat fc-future\" data-date=\"2015-12-19\"></td></tr></tbody></table></div><div class=\"fc-content-skeleton\"><table><thead><tr><td class=\"fc-day-number fc-sun fc-past\" data-date=\"2015-12-13\">13</td><td class=\"fc-day-number fc-mon fc-past\" data-date=\"2015-12-14\">14</td><td class=\"fc-day-number fc-tue fc-past\" data-date=\"2015-12-15\">15</td><td class=\"fc-day-number fc-wed fc-today fc-state-highlight\" data-date=\"2015-12-16\">16</td><td class=\"fc-day-number fc-thu fc-future\" data-date=\"2015-12-17\">17</td><td class=\"fc-day-number fc-fri fc-future\" data-date=\"2015-12-18\">18</td><td class=\"fc-day-number fc-sat fc-future\" data-date=\"2015-12-19\">19</td></tr></thead><tbody><tr><td class=\"fc-event-container\"><a class=\"fc-day-grid-event fc-h-event fc-event fc-not-start fc-end event-off-site-work fc-draggable fc-resizable\"><div class=\"fc-content\"> <span class=\"fc-title\">Bootstrap Seminar</span></div><div class=\"fc-resizer fc-end-resizer\"></div></a></td><td rowspan=\"2\"></td><td rowspan=\"2\"></td><td class=\"fc-event-container\" rowspan=\"2\"><a class=\"fc-day-grid-event fc-h-event fc-event fc-start fc-end event-job fc-draggable\"><div class=\"fc-content\"><span class=\"fc-time\">8p</span> <span class=\"fc-title\">Networking</span></div></a></td><td rowspan=\"2\"></td><td rowspan=\"2\"></td><td rowspan=\"2\"></td></tr><tr><td class=\"fc-event-container\"><a class=\"fc-day-grid-event fc-h-event fc-event fc-start fc-end event-generic fc-draggable\"><div class=\"fc-content\"><span class=\"fc-time\">12p</span> <span class=\"fc-title\">Lunch with Nicole</span></div></a></td></tr></tbody></table></div></div><div class=\"fc-row fc-week fc-widget-content fc-rigid\" style=\"height: 90px;\"><div class=\"fc-bg\"><table><tbody><tr><td class=\"fc-day fc-widget-content fc-sun fc-future\" data-date=\"2015-12-20\"></td><td class=\"fc-day fc-widget-content fc-mon fc-future\" data-date=\"2015-12-21\"></td><td class=\"fc-day fc-widget-content fc-tue fc-future\" data-date=\"2015-12-22\"></td><td class=\"fc-day fc-widget-content fc-wed fc-future\" data-date=\"2015-12-23\"></td><td class=\"fc-day fc-widget-content fc-thu fc-future\" data-date=\"2015-12-24\"></td><td class=\"fc-day fc-widget-content fc-fri fc-future\" data-date=\"2015-12-25\"></td><td class=\"fc-day fc-widget-content fc-sat fc-future\" data-date=\"2015-12-26\"></td></tr></tbody></table></div><div class=\"fc-content-skeleton\"><table><thead><tr><td class=\"fc-day-number fc-sun fc-future\" data-date=\"2015-12-20\">20</td><td class=\"fc-day-number fc-mon fc-future\" data-date=\"2015-12-21\">21</td><td class=\"fc-day-number fc-tue fc-future\" data-date=\"2015-12-22\">22</td><td class=\"fc-day-number fc-wed fc-future\" data-date=\"2015-12-23\">23</td><td class=\"fc-day-number fc-thu fc-future\" data-date=\"2015-12-24\">24</td><td class=\"fc-day-number fc-fri fc-future\" data-date=\"2015-12-25\">25</td><td class=\"fc-day-number fc-sat fc-future\" data-date=\"2015-12-26\">26</td></tr></thead><tbody><tr><td></td><td class=\"fc-event-container\" colspan=\"5\"><a class=\"fc-day-grid-event fc-h-event fc-event fc-start fc-end event-to-do fc-draggable fc-resizable\"><div class=\"fc-content\"> <span class=\"fc-title\">Corporate Website Redesign</span></div><div class=\"fc-resizer fc-end-resizer\"></div></a></td><td></td></tr></tbody></table></div></div><div class=\"fc-row fc-week fc-widget-content fc-rigid\" style=\"height: 90px;\"><div class=\"fc-bg\"><table><tbody><tr><td class=\"fc-day fc-widget-content fc-sun fc-future\" data-date=\"2015-12-27\"></td><td class=\"fc-day fc-widget-content fc-mon fc-future\" data-date=\"2015-12-28\"></td><td class=\"fc-day fc-widget-content fc-tue fc-future\" data-date=\"2015-12-29\"></td><td class=\"fc-day fc-widget-content fc-wed fc-future\" data-date=\"2015-12-30\"></td><td class=\"fc-day fc-widget-content fc-thu fc-future\" data-date=\"2015-12-31\"></td><td class=\"fc-day fc-widget-content fc-fri fc-other-month fc-future\" data-date=\"2016-01-01\"></td><td class=\"fc-day fc-widget-content fc-sat fc-other-month fc-future\" data-date=\"2016-01-02\"></td></tr></tbody></table></div><div class=\"fc-content-skeleton\"><table><thead><tr><td class=\"fc-day-number fc-sun fc-future\" data-date=\"2015-12-27\">27</td><td class=\"fc-day-number fc-mon fc-future\" data-date=\"2015-12-28\">28</td><td class=\"fc-day-number fc-tue fc-future\" data-date=\"2015-12-29\">29</td><td class=\"fc-day-number fc-wed fc-future\" data-date=\"2015-12-30\">30</td><td class=\"fc-day-number fc-thu fc-future\" data-date=\"2015-12-31\">31</td><td class=\"fc-day-number fc-fri fc-other-month fc-future\" data-date=\"2016-01-01\">1</td><td class=\"fc-day-number fc-sat fc-other-month fc-future\" data-date=\"2016-01-02\">2</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class=\"fc-row fc-week fc-widget-content fc-rigid\" style=\"height: 95px;\"><div class=\"fc-bg\"><table><tbody><tr><td class=\"fc-day fc-widget-content fc-sun fc-other-month fc-future\" data-date=\"2016-01-03\"></td><td class=\"fc-day fc-widget-content fc-mon fc-other-month fc-future\" data-date=\"2016-01-04\"></td><td class=\"fc-day fc-widget-content fc-tue fc-other-month fc-future\" data-date=\"2016-01-05\"></td><td class=\"fc-day fc-widget-content fc-wed fc-other-month fc-future\" data-date=\"2016-01-06\"></td><td class=\"fc-day fc-widget-content fc-thu fc-other-month fc-future\" data-date=\"2016-01-07\"></td><td class=\"fc-day fc-widget-content fc-fri fc-other-month fc-future\" data-date=\"2016-01-08\"></td><td class=\"fc-day fc-widget-content fc-sat fc-other-month fc-future\" data-date=\"2016-01-09\"></td></tr></tbody></table></div><div class=\"fc-content-skeleton\"><table><thead><tr><td class=\"fc-day-number fc-sun fc-other-month fc-future\" data-date=\"2016-01-03\">3</td><td class=\"fc-day-number fc-mon fc-other-month fc-future\" data-date=\"2016-01-04\">4</td><td class=\"fc-day-number fc-tue fc-other-month fc-future\" data-date=\"2016-01-05\">5</td><td class=\"fc-day-number fc-wed fc-other-month fc-future\" data-date=\"2016-01-06\">6</td><td class=\"fc-day-number fc-thu fc-other-month fc-future\" data-date=\"2016-01-07\">7</td><td class=\"fc-day-number fc-fri fc-other-month fc-future\" data-date=\"2016-01-08\">8</td><td class=\"fc-day-number fc-sat fc-other-month fc-future\" data-date=\"2016-01-09\">9</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
            </div>
            <div class=\"col-sm-3\">
                <h4 class=\"space20\">Draggable categories</h4>
                <div id=\"event-categories\">
                    <div class=\"event-category event-generic ui-draggable\" data-class=\"generic\" style=\"position: relative;\">
                        Generic
                    </div>
                    <div class=\"event-category event-home ui-draggable\" data-class=\"home\" style=\"position: relative;\">
                        Home
                    </div>
                    <div class=\"event-category event-job ui-draggable\" data-class=\"job\" style=\"position: relative;\">
                        Job
                    </div>
                    <div class=\"event-category event-off-site-work ui-draggable\" data-class=\"off-site-work\" style=\"position: relative;\">
                        Off-site work
                    </div>
                    <div class=\"event-category event-to-do ui-draggable\" data-class=\"to-do\" style=\"position: relative;\">
                        To Do
                    </div>
                    <div class=\"event-category event-cancelled ui-draggable\" data-class=\"cancelled\" style=\"position: relative;\">
                        Cancelled
                    </div>
                    <div class=\"checkbox\">
                        <label>
                            <input type=\"checkbox\" class=\"grey\" id=\"drop-remove\">
                            Remove after drop
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 177
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 178
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/vendor/jquery-ui/jquery-ui-1.10.2.custom.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/vendor/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/vendor/jquery-validation/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/vendor/fullcalendar/fullcalendar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Backoffice/assets/js/pages-calendar.js"), "html", null, true);
        echo "\"></script>
    <script>
        jQuery(document).ready(function() {
            Calendar.init();
        });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminUsersBundle:Default:Agenda.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 183,  315 => 182,  311 => 181,  307 => 180,  303 => 179,  298 => 178,  292 => 177,  246 => 135,  240 => 134,  225 => 124,  219 => 123,  198 => 109,  183 => 97,  168 => 85,  153 => 73,  138 => 61,  123 => 49,  108 => 37,  93 => 25,  77 => 11,  71 => 10,  62 => 7,  57 => 6,  51 => 5,  39 => 3,  11 => 1,);
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

{% block title %}   Agenda    {% endblock %}

{% block css %}
    <link href=\"{{ asset('Backoffice/vendor/fullcalendar/fullcalendar.min.css') }}\" rel=\"stylesheet\" media=\"screen\">
    <link href=\"{{ asset('Backoffice/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css') }}\" rel=\"stylesheet\" media=\"screen\">
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
         <li   class=\"active open\">
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
         <li>
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
                <h1 class=\"mainTitle\">Agenda</h1>
                <span class=\"mainDescription\">overview &amp; stats </span>
            </div>
        </div>
    </section>
{% endblock %}

{% block body %}
    <div class=\"container-fluid container-fullw bg-white\">
        <div class=\"row\">
            <div class=\"col-sm-12 space20\">
                <a href=\"#newFullEvent\" class=\"btn btn-primary btn-o add-event\"><i class=\"fa fa-plus\"></i> Add New Event</a>
            </div>
            <div class=\"col-sm-9\">
                <div id=\"full-calendar\" class=\"fc fc-ltr fc-unthemed\"><div class=\"fc-toolbar\"><div class=\"fc-left\"><div class=\"fc-button-group\"><button type=\"button\" class=\"fc-prev-button fc-button fc-state-default fc-corner-left\"><span class=\"fc-icon fc-icon-fa fa-chevron-left\"></span></button><button type=\"button\" class=\"fc-next-button fc-button fc-state-default fc-corner-right\"><span class=\"fc-icon fc-icon-fa fa-chevron-right\"></span></button></div><button type=\"button\" class=\"fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled\" disabled=\"disabled\">today</button></div><div class=\"fc-right\"><div class=\"fc-button-group\"><button type=\"button\" class=\"fc-month-button fc-button fc-state-default fc-corner-left fc-state-active\">month</button><button type=\"button\" class=\"fc-agendaWeek-button fc-button fc-state-default\">week</button><button type=\"button\" class=\"fc-agendaDay-button fc-button fc-state-default fc-corner-right\">day</button></div></div><div class=\"fc-center\"><h2>December 2015</h2></div><div class=\"fc-clear\"></div></div><div class=\"fc-view-container\" style=\"\"><div class=\"fc-view fc-month-view fc-basic-view\" style=\"\"><table><thead class=\"fc-head\"><tr><td class=\"fc-widget-header\"><div class=\"fc-row fc-widget-header\"><table><thead><tr><th class=\"fc-day-header fc-widget-header fc-sun\">Sun</th><th class=\"fc-day-header fc-widget-header fc-mon\">Mon</th><th class=\"fc-day-header fc-widget-header fc-tue\">Tue</th><th class=\"fc-day-header fc-widget-header fc-wed\">Wed</th><th class=\"fc-day-header fc-widget-header fc-thu\">Thu</th><th class=\"fc-day-header fc-widget-header fc-fri\">Fri</th><th class=\"fc-day-header fc-widget-header fc-sat\">Sat</th></tr></thead></table></div></td></tr></thead><tbody class=\"fc-body\"><tr><td class=\"fc-widget-content\"><div class=\"fc-day-grid-container\" style=\"\"><div class=\"fc-day-grid\"><div class=\"fc-row fc-week fc-widget-content fc-rigid\" style=\"height: 90px;\"><div class=\"fc-bg\"><table><tbody><tr><td class=\"fc-day fc-widget-content fc-sun fc-other-month fc-past\" data-date=\"2015-11-29\"></td><td class=\"fc-day fc-widget-content fc-mon fc-other-month fc-past\" data-date=\"2015-11-30\"></td><td class=\"fc-day fc-widget-content fc-tue fc-past\" data-date=\"2015-12-01\"></td><td class=\"fc-day fc-widget-content fc-wed fc-past\" data-date=\"2015-12-02\"></td><td class=\"fc-day fc-widget-content fc-thu fc-past\" data-date=\"2015-12-03\"></td><td class=\"fc-day fc-widget-content fc-fri fc-past\" data-date=\"2015-12-04\"></td><td class=\"fc-day fc-widget-content fc-sat fc-past\" data-date=\"2015-12-05\"></td></tr></tbody></table></div><div class=\"fc-content-skeleton\"><table><thead><tr><td class=\"fc-day-number fc-sun fc-other-month fc-past\" data-date=\"2015-11-29\">29</td><td class=\"fc-day-number fc-mon fc-other-month fc-past\" data-date=\"2015-11-30\">30</td><td class=\"fc-day-number fc-tue fc-past\" data-date=\"2015-12-01\">1</td><td class=\"fc-day-number fc-wed fc-past\" data-date=\"2015-12-02\">2</td><td class=\"fc-day-number fc-thu fc-past\" data-date=\"2015-12-03\">3</td><td class=\"fc-day-number fc-fri fc-past\" data-date=\"2015-12-04\">4</td><td class=\"fc-day-number fc-sat fc-past\" data-date=\"2015-12-05\">5</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class=\"fc-row fc-week fc-widget-content fc-rigid\" style=\"height: 90px;\"><div class=\"fc-bg\"><table><tbody><tr><td class=\"fc-day fc-widget-content fc-sun fc-past\" data-date=\"2015-12-06\"></td><td class=\"fc-day fc-widget-content fc-mon fc-past\" data-date=\"2015-12-07\"></td><td class=\"fc-day fc-widget-content fc-tue fc-past\" data-date=\"2015-12-08\"></td><td class=\"fc-day fc-widget-content fc-wed fc-past\" data-date=\"2015-12-09\"></td><td class=\"fc-day fc-widget-content fc-thu fc-past\" data-date=\"2015-12-10\"></td><td class=\"fc-day fc-widget-content fc-fri fc-past\" data-date=\"2015-12-11\"></td><td class=\"fc-day fc-widget-content fc-sat fc-past\" data-date=\"2015-12-12\"></td></tr></tbody></table></div><div class=\"fc-content-skeleton\"><table><thead><tr><td class=\"fc-day-number fc-sun fc-past\" data-date=\"2015-12-06\">6</td><td class=\"fc-day-number fc-mon fc-past\" data-date=\"2015-12-07\">7</td><td class=\"fc-day-number fc-tue fc-past\" data-date=\"2015-12-08\">8</td><td class=\"fc-day-number fc-wed fc-past\" data-date=\"2015-12-09\">9</td><td class=\"fc-day-number fc-thu fc-past\" data-date=\"2015-12-10\">10</td><td class=\"fc-day-number fc-fri fc-past\" data-date=\"2015-12-11\">11</td><td class=\"fc-day-number fc-sat fc-past\" data-date=\"2015-12-12\">12</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td class=\"fc-event-container\" colspan=\"2\"><a class=\"fc-day-grid-event fc-h-event fc-event fc-start fc-not-end event-off-site-work fc-draggable\"><div class=\"fc-content\"> <span class=\"fc-title\">Bootstrap Seminar</span></div></a></td></tr></tbody></table></div></div><div class=\"fc-row fc-week fc-widget-content fc-rigid\" style=\"height: 90px;\"><div class=\"fc-bg\"><table><tbody><tr><td class=\"fc-day fc-widget-content fc-sun fc-past\" data-date=\"2015-12-13\"></td><td class=\"fc-day fc-widget-content fc-mon fc-past\" data-date=\"2015-12-14\"></td><td class=\"fc-day fc-widget-content fc-tue fc-past\" data-date=\"2015-12-15\"></td><td class=\"fc-day fc-widget-content fc-wed fc-today fc-state-highlight\" data-date=\"2015-12-16\"></td><td class=\"fc-day fc-widget-content fc-thu fc-future\" data-date=\"2015-12-17\"></td><td class=\"fc-day fc-widget-content fc-fri fc-future\" data-date=\"2015-12-18\"></td><td class=\"fc-day fc-widget-content fc-sat fc-future\" data-date=\"2015-12-19\"></td></tr></tbody></table></div><div class=\"fc-content-skeleton\"><table><thead><tr><td class=\"fc-day-number fc-sun fc-past\" data-date=\"2015-12-13\">13</td><td class=\"fc-day-number fc-mon fc-past\" data-date=\"2015-12-14\">14</td><td class=\"fc-day-number fc-tue fc-past\" data-date=\"2015-12-15\">15</td><td class=\"fc-day-number fc-wed fc-today fc-state-highlight\" data-date=\"2015-12-16\">16</td><td class=\"fc-day-number fc-thu fc-future\" data-date=\"2015-12-17\">17</td><td class=\"fc-day-number fc-fri fc-future\" data-date=\"2015-12-18\">18</td><td class=\"fc-day-number fc-sat fc-future\" data-date=\"2015-12-19\">19</td></tr></thead><tbody><tr><td class=\"fc-event-container\"><a class=\"fc-day-grid-event fc-h-event fc-event fc-not-start fc-end event-off-site-work fc-draggable fc-resizable\"><div class=\"fc-content\"> <span class=\"fc-title\">Bootstrap Seminar</span></div><div class=\"fc-resizer fc-end-resizer\"></div></a></td><td rowspan=\"2\"></td><td rowspan=\"2\"></td><td class=\"fc-event-container\" rowspan=\"2\"><a class=\"fc-day-grid-event fc-h-event fc-event fc-start fc-end event-job fc-draggable\"><div class=\"fc-content\"><span class=\"fc-time\">8p</span> <span class=\"fc-title\">Networking</span></div></a></td><td rowspan=\"2\"></td><td rowspan=\"2\"></td><td rowspan=\"2\"></td></tr><tr><td class=\"fc-event-container\"><a class=\"fc-day-grid-event fc-h-event fc-event fc-start fc-end event-generic fc-draggable\"><div class=\"fc-content\"><span class=\"fc-time\">12p</span> <span class=\"fc-title\">Lunch with Nicole</span></div></a></td></tr></tbody></table></div></div><div class=\"fc-row fc-week fc-widget-content fc-rigid\" style=\"height: 90px;\"><div class=\"fc-bg\"><table><tbody><tr><td class=\"fc-day fc-widget-content fc-sun fc-future\" data-date=\"2015-12-20\"></td><td class=\"fc-day fc-widget-content fc-mon fc-future\" data-date=\"2015-12-21\"></td><td class=\"fc-day fc-widget-content fc-tue fc-future\" data-date=\"2015-12-22\"></td><td class=\"fc-day fc-widget-content fc-wed fc-future\" data-date=\"2015-12-23\"></td><td class=\"fc-day fc-widget-content fc-thu fc-future\" data-date=\"2015-12-24\"></td><td class=\"fc-day fc-widget-content fc-fri fc-future\" data-date=\"2015-12-25\"></td><td class=\"fc-day fc-widget-content fc-sat fc-future\" data-date=\"2015-12-26\"></td></tr></tbody></table></div><div class=\"fc-content-skeleton\"><table><thead><tr><td class=\"fc-day-number fc-sun fc-future\" data-date=\"2015-12-20\">20</td><td class=\"fc-day-number fc-mon fc-future\" data-date=\"2015-12-21\">21</td><td class=\"fc-day-number fc-tue fc-future\" data-date=\"2015-12-22\">22</td><td class=\"fc-day-number fc-wed fc-future\" data-date=\"2015-12-23\">23</td><td class=\"fc-day-number fc-thu fc-future\" data-date=\"2015-12-24\">24</td><td class=\"fc-day-number fc-fri fc-future\" data-date=\"2015-12-25\">25</td><td class=\"fc-day-number fc-sat fc-future\" data-date=\"2015-12-26\">26</td></tr></thead><tbody><tr><td></td><td class=\"fc-event-container\" colspan=\"5\"><a class=\"fc-day-grid-event fc-h-event fc-event fc-start fc-end event-to-do fc-draggable fc-resizable\"><div class=\"fc-content\"> <span class=\"fc-title\">Corporate Website Redesign</span></div><div class=\"fc-resizer fc-end-resizer\"></div></a></td><td></td></tr></tbody></table></div></div><div class=\"fc-row fc-week fc-widget-content fc-rigid\" style=\"height: 90px;\"><div class=\"fc-bg\"><table><tbody><tr><td class=\"fc-day fc-widget-content fc-sun fc-future\" data-date=\"2015-12-27\"></td><td class=\"fc-day fc-widget-content fc-mon fc-future\" data-date=\"2015-12-28\"></td><td class=\"fc-day fc-widget-content fc-tue fc-future\" data-date=\"2015-12-29\"></td><td class=\"fc-day fc-widget-content fc-wed fc-future\" data-date=\"2015-12-30\"></td><td class=\"fc-day fc-widget-content fc-thu fc-future\" data-date=\"2015-12-31\"></td><td class=\"fc-day fc-widget-content fc-fri fc-other-month fc-future\" data-date=\"2016-01-01\"></td><td class=\"fc-day fc-widget-content fc-sat fc-other-month fc-future\" data-date=\"2016-01-02\"></td></tr></tbody></table></div><div class=\"fc-content-skeleton\"><table><thead><tr><td class=\"fc-day-number fc-sun fc-future\" data-date=\"2015-12-27\">27</td><td class=\"fc-day-number fc-mon fc-future\" data-date=\"2015-12-28\">28</td><td class=\"fc-day-number fc-tue fc-future\" data-date=\"2015-12-29\">29</td><td class=\"fc-day-number fc-wed fc-future\" data-date=\"2015-12-30\">30</td><td class=\"fc-day-number fc-thu fc-future\" data-date=\"2015-12-31\">31</td><td class=\"fc-day-number fc-fri fc-other-month fc-future\" data-date=\"2016-01-01\">1</td><td class=\"fc-day-number fc-sat fc-other-month fc-future\" data-date=\"2016-01-02\">2</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class=\"fc-row fc-week fc-widget-content fc-rigid\" style=\"height: 95px;\"><div class=\"fc-bg\"><table><tbody><tr><td class=\"fc-day fc-widget-content fc-sun fc-other-month fc-future\" data-date=\"2016-01-03\"></td><td class=\"fc-day fc-widget-content fc-mon fc-other-month fc-future\" data-date=\"2016-01-04\"></td><td class=\"fc-day fc-widget-content fc-tue fc-other-month fc-future\" data-date=\"2016-01-05\"></td><td class=\"fc-day fc-widget-content fc-wed fc-other-month fc-future\" data-date=\"2016-01-06\"></td><td class=\"fc-day fc-widget-content fc-thu fc-other-month fc-future\" data-date=\"2016-01-07\"></td><td class=\"fc-day fc-widget-content fc-fri fc-other-month fc-future\" data-date=\"2016-01-08\"></td><td class=\"fc-day fc-widget-content fc-sat fc-other-month fc-future\" data-date=\"2016-01-09\"></td></tr></tbody></table></div><div class=\"fc-content-skeleton\"><table><thead><tr><td class=\"fc-day-number fc-sun fc-other-month fc-future\" data-date=\"2016-01-03\">3</td><td class=\"fc-day-number fc-mon fc-other-month fc-future\" data-date=\"2016-01-04\">4</td><td class=\"fc-day-number fc-tue fc-other-month fc-future\" data-date=\"2016-01-05\">5</td><td class=\"fc-day-number fc-wed fc-other-month fc-future\" data-date=\"2016-01-06\">6</td><td class=\"fc-day-number fc-thu fc-other-month fc-future\" data-date=\"2016-01-07\">7</td><td class=\"fc-day-number fc-fri fc-other-month fc-future\" data-date=\"2016-01-08\">8</td><td class=\"fc-day-number fc-sat fc-other-month fc-future\" data-date=\"2016-01-09\">9</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
            </div>
            <div class=\"col-sm-3\">
                <h4 class=\"space20\">Draggable categories</h4>
                <div id=\"event-categories\">
                    <div class=\"event-category event-generic ui-draggable\" data-class=\"generic\" style=\"position: relative;\">
                        Generic
                    </div>
                    <div class=\"event-category event-home ui-draggable\" data-class=\"home\" style=\"position: relative;\">
                        Home
                    </div>
                    <div class=\"event-category event-job ui-draggable\" data-class=\"job\" style=\"position: relative;\">
                        Job
                    </div>
                    <div class=\"event-category event-off-site-work ui-draggable\" data-class=\"off-site-work\" style=\"position: relative;\">
                        Off-site work
                    </div>
                    <div class=\"event-category event-to-do ui-draggable\" data-class=\"to-do\" style=\"position: relative;\">
                        To Do
                    </div>
                    <div class=\"event-category event-cancelled ui-draggable\" data-class=\"cancelled\" style=\"position: relative;\">
                        Cancelled
                    </div>
                    <div class=\"checkbox\">
                        <label>
                            <input type=\"checkbox\" class=\"grey\" id=\"drop-remove\">
                            Remove after drop
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}


{% block javascript %}
    <script src=\"{{ asset('Backoffice/vendor/jquery-ui/jquery-ui-1.10.2.custom.min.js') }}\"></script>
    <script src=\"{{ asset('Backoffice/vendor/moment/moment.min.js') }}\"></script>
    <script src=\"{{ asset('Backoffice/vendor/jquery-validation/jquery.validate.min.js') }}\"></script>
    <script src=\"{{ asset('Backoffice/vendor/fullcalendar/fullcalendar.min.js') }}\"></script>
    <script src=\"{{ asset('Backoffice/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js') }}\"></script>
    <script src=\"{{ asset('Backoffice/assets/js/pages-calendar.js') }}\"></script>
    <script>
        jQuery(document).ready(function() {
            Calendar.init();
        });
    </script>

{% endblock %}", "AdminUsersBundle:Default:Agenda.html.twig", "C:\\wamp\\www\\github\\Gestion-de-Stage\\src\\Admin\\UsersBundle/Resources/views/Default/Agenda.html.twig");
    }
}
