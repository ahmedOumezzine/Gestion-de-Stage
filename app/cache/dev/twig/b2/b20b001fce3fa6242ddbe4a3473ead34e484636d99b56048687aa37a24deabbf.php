<?php

/* AdminUsersBundle:Default:Messages.html.twig */
class __TwigTemplate_d579ec261ba5a26d095636c39673e8b330fa752332cf1da50de18f65869c3ab8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminUsersBundle::layout.html.twig", "AdminUsersBundle:Default:Messages.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUsersBundle:Default:Messages.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "   Messages    ";
        
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
         <li  class=\"active open\">
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
         <li>
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
         <li>
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
                <h1 class=\"mainTitle\">Messages</h1>
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
        echo "<div class=\"wrap-content container\" id=\"container\">
        <div class=\"wrap-messages\" style=\"height: auto;\">
            <div id=\"inbox\" class=\"inbox\">
                <!-- start: EMAIL OPTIONS -->
                <div class=\"col email-options perfect-scrollbar ps-container\">
                    <div class=\"padding-15\">
                        <button class=\"btn btn-primary btn-block margin-bottom-30\">
                            Compose
                        </button>
                        <p class=\"email-options-title no-margin\">
                            BROWSE
                        </p>
                        <ul class=\"main-options padding-15\">
                            <li>
                                <a href=\"#\">
                                    <span class=\"title\"><i class=\"ti-import\"></i> Inbox</span>
                                    <span class=\"badge pull-right\">10</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <span class=\"title\"><i class=\"ti-upload\"></i> Sent</span>
                                </a>
                            </li>


                        </ul>
                    </div>
                    <div class=\"ps-scrollbar-x-rail\" style=\"left: 0px; bottom: 3px;\"><div class=\"ps-scrollbar-x\" style=\"left: 0px; width: 0px;\"></div></div><div class=\"ps-scrollbar-y-rail\" style=\"top: 0px; right: 3px;\"><div class=\"ps-scrollbar-y\" style=\"top: 0px; height: 0px;\"></div></div></div>
                <!-- end: EMAIL OPTIONS -->
                <!-- start: EMAIL LIST -->
                <div class=\"col email-list\">
                    <div class=\"wrap-list\">
                        <div class=\"wrap-options\">
                            <div class=\"messages-options padding-15\">
                                <div class=\"btn-group\">
                                    <button class=\"btn btn-primary btn-wide\" type=\"button\">
                                        Compose
                                    </button>
                                    <button class=\"btn btn-primary dropdown-toggle\" type=\"button\">
                                        <span class=\"caret\"></span>
                                    </button>
                                    <ul role=\"menu\" class=\"dropdown-menu dropdown-light\">
                                        <li>
                                            <a href=\"#\">
                                                <span class=\"title\"><i class=\"ti-import\"></i> Inbox</span>
                                                <span class=\"badge\">10</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <span class=\"title\"><i class=\"ti-upload\"></i> Sent</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <span class=\"title\"><i class=\"ti-na\"></i> Spam</span>
                                                <span class=\"badge\">1</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <span class=\"title\"><i class=\"ti-star\"></i> Starred</span>
                                                <span class=\"badge\">2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <button class=\"btn btn-transparent pull-right open-message-search\">
                                    <i class=\"ti-search\"></i>
                                </button>
                                <button class=\"btn btn-transparent pull-right close-message-search\">
                                    <i class=\"ti-close\"></i>
                                </button>
                            </div>
                            <div class=\"messages-search\">
                                <form>
                                    <input type=\"text\" placeholder=\"Search messages...\" class=\"form-control underline\">
                                </form>
                            </div>
                        </div>
                        <ul class=\"messages-list perfect-scrollbar ps-container\">







                            <li class=\"messages-item\">
                                <a href=\"#\">
                                    <span class=\"messages-item-star\" title=\"Mark as starred\"><i class=\"fa fa-star\"></i></span>
                                    <img class=\"messages-item-avatar bordered border-primary\" alt=\"Google Geoff\" src=\"assets/images/default-user.png\">
                                    <span class=\"messages-item-from\">Google Geoff</span>
                                    <div class=\"messages-item-time\">
                                        <span class=\"text\">05/24/2014 at 8:37PM</span>
                                    </div>
                                    <span class=\"messages-item-subject\"> <em class=\"spam\">[SPAM]</em> JobSearch information letter</span>
                                    <span class=\"messages-item-content\">Dear recipient,Avangar Technologies announces the beginning of a new unprecendented global employment campaign. reviser yeller…</span>
                                </a>
                            </li>


                            <div class=\"ps-scrollbar-x-rail\" style=\"left: 0px; bottom: 3px;\"><div class=\"ps-scrollbar-x\" style=\"left: 0px; width: 0px;\"></div></div><div class=\"ps-scrollbar-y-rail\" style=\"top: 0px; height: 223px; right: 3px;\"><div class=\"ps-scrollbar-y\" style=\"top: 0px; height: 0px;\"></div></div></ul>
                    </div>
                </div>
                <!-- end: EMAIL LIST -->
                <!-- start: EMAIL READER -->
                <div class=\"email-reader perfect-scrollbar ps-container ps-active-y\">
                    <div>
                        <div class=\"message-actions\">
                            <ul class=\"actions no-margin no-padding block\">
                                <li class=\"email-list-toggle\">
                                    <a href=\"#\"><i class=\"fa fa-angle-left\"></i> All Inboxes </a>
                                </li>
                                <li class=\"actions-dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" href=\"\">
                                                            <i class=\"caret\"></i>
                                                        </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-light\">
                                                            <li>
                                                                <a href=\"#\">
                                                                    Reply
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    Reply all
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    Forward
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    Delete
                                                                </a>
                                                            </li>
                                                        </ul> </span>
                                </li>
                                <li class=\"no-padding\">
                                    <a href=\"#\" class=\"text-info\">
                                        Reply
                                    </a>
                                </li>


                                <li class=\"no-padding\">
                                    <a href=\"#\">
                                        Delete
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"message-header\">
                            <img class=\"message-item-avatar\" alt=\"John Stark\" src=\"assets/images/avatar-6.jpg\">
                            <div class=\"message-time\">
                                05/24/2014 at 8:37PM
                            </div>

                            <div class=\"message-from\">
                                John Stark &lt;stark@example.com&gt;
                            </div>
                            <div class=\"message-to\">
                                To: Peter Clark
                            </div>
                        </div>
                        <div class=\"message-subject\">
                            Reference Request - Nicole Bell
                        </div>
                        <div class=\"message-content\">
                            <p>
                                Hi Peter,
                                <br>
                                Thanks for the e-mail. It is always nice to hear from people, especially from you, Scott.
                            </p>
                            <p>
                                I have not got any reply, a positive or negative one, from Seibido yet.
                                <br>
                                Let's wait and hope that it will make a BOOK.
                            </p>
                            <p>
                                Have you finished your paperwork for Kaken and writing academic articles?
                                <br>
                                If you have some free time in the near future, I want to meet you and explain to you our next project.
                            </p>
                            <p>
                                Why not drink out in Hiroshima if we are accepted?
                                <br>
                                We need to celebrate ourselves, don't we?
                                <br>
                                Let's have a small end-of-the-year party!
                            </p>
                            <p>
                                Sincerely, K. Nakagawa
                            </p>
                        </div>
                    </div>
                    <div class=\"ps-scrollbar-x-rail\" style=\"left: 0px; bottom: 3px;\"><div class=\"ps-scrollbar-x\" style=\"left: 0px; width: 0px;\"></div></div><div class=\"ps-scrollbar-y-rail\" style=\"top: 0px; height: 288px; right: 3px;\"><div class=\"ps-scrollbar-y\" style=\"top: 0px; height: 171px;\"></div></div></div>
                <!-- end: EMAIL READER -->
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 341
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminUsersBundle:Default:Messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  450 => 341,  237 => 132,  231 => 131,  216 => 121,  210 => 120,  189 => 106,  174 => 94,  159 => 82,  144 => 70,  129 => 58,  114 => 46,  99 => 34,  84 => 22,  68 => 8,  62 => 7,  51 => 5,  39 => 3,  11 => 1,);
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

{% block title %}   Messages    {% endblock %}

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
         <li  class=\"active open\">
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
         <li>
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
                <h1 class=\"mainTitle\">Messages</h1>
                <span class=\"mainDescription\">overview &amp; stats </span>
            </div>
        </div>
    </section>
{% endblock %}

{% block body %}
<div class=\"wrap-content container\" id=\"container\">
        <div class=\"wrap-messages\" style=\"height: auto;\">
            <div id=\"inbox\" class=\"inbox\">
                <!-- start: EMAIL OPTIONS -->
                <div class=\"col email-options perfect-scrollbar ps-container\">
                    <div class=\"padding-15\">
                        <button class=\"btn btn-primary btn-block margin-bottom-30\">
                            Compose
                        </button>
                        <p class=\"email-options-title no-margin\">
                            BROWSE
                        </p>
                        <ul class=\"main-options padding-15\">
                            <li>
                                <a href=\"#\">
                                    <span class=\"title\"><i class=\"ti-import\"></i> Inbox</span>
                                    <span class=\"badge pull-right\">10</span>
                                </a>
                            </li>
                            <li>
                                <a href=\"#\">
                                    <span class=\"title\"><i class=\"ti-upload\"></i> Sent</span>
                                </a>
                            </li>


                        </ul>
                    </div>
                    <div class=\"ps-scrollbar-x-rail\" style=\"left: 0px; bottom: 3px;\"><div class=\"ps-scrollbar-x\" style=\"left: 0px; width: 0px;\"></div></div><div class=\"ps-scrollbar-y-rail\" style=\"top: 0px; right: 3px;\"><div class=\"ps-scrollbar-y\" style=\"top: 0px; height: 0px;\"></div></div></div>
                <!-- end: EMAIL OPTIONS -->
                <!-- start: EMAIL LIST -->
                <div class=\"col email-list\">
                    <div class=\"wrap-list\">
                        <div class=\"wrap-options\">
                            <div class=\"messages-options padding-15\">
                                <div class=\"btn-group\">
                                    <button class=\"btn btn-primary btn-wide\" type=\"button\">
                                        Compose
                                    </button>
                                    <button class=\"btn btn-primary dropdown-toggle\" type=\"button\">
                                        <span class=\"caret\"></span>
                                    </button>
                                    <ul role=\"menu\" class=\"dropdown-menu dropdown-light\">
                                        <li>
                                            <a href=\"#\">
                                                <span class=\"title\"><i class=\"ti-import\"></i> Inbox</span>
                                                <span class=\"badge\">10</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <span class=\"title\"><i class=\"ti-upload\"></i> Sent</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <span class=\"title\"><i class=\"ti-na\"></i> Spam</span>
                                                <span class=\"badge\">1</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href=\"#\">
                                                <span class=\"title\"><i class=\"ti-star\"></i> Starred</span>
                                                <span class=\"badge\">2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <button class=\"btn btn-transparent pull-right open-message-search\">
                                    <i class=\"ti-search\"></i>
                                </button>
                                <button class=\"btn btn-transparent pull-right close-message-search\">
                                    <i class=\"ti-close\"></i>
                                </button>
                            </div>
                            <div class=\"messages-search\">
                                <form>
                                    <input type=\"text\" placeholder=\"Search messages...\" class=\"form-control underline\">
                                </form>
                            </div>
                        </div>
                        <ul class=\"messages-list perfect-scrollbar ps-container\">







                            <li class=\"messages-item\">
                                <a href=\"#\">
                                    <span class=\"messages-item-star\" title=\"Mark as starred\"><i class=\"fa fa-star\"></i></span>
                                    <img class=\"messages-item-avatar bordered border-primary\" alt=\"Google Geoff\" src=\"assets/images/default-user.png\">
                                    <span class=\"messages-item-from\">Google Geoff</span>
                                    <div class=\"messages-item-time\">
                                        <span class=\"text\">05/24/2014 at 8:37PM</span>
                                    </div>
                                    <span class=\"messages-item-subject\"> <em class=\"spam\">[SPAM]</em> JobSearch information letter</span>
                                    <span class=\"messages-item-content\">Dear recipient,Avangar Technologies announces the beginning of a new unprecendented global employment campaign. reviser yeller…</span>
                                </a>
                            </li>


                            <div class=\"ps-scrollbar-x-rail\" style=\"left: 0px; bottom: 3px;\"><div class=\"ps-scrollbar-x\" style=\"left: 0px; width: 0px;\"></div></div><div class=\"ps-scrollbar-y-rail\" style=\"top: 0px; height: 223px; right: 3px;\"><div class=\"ps-scrollbar-y\" style=\"top: 0px; height: 0px;\"></div></div></ul>
                    </div>
                </div>
                <!-- end: EMAIL LIST -->
                <!-- start: EMAIL READER -->
                <div class=\"email-reader perfect-scrollbar ps-container ps-active-y\">
                    <div>
                        <div class=\"message-actions\">
                            <ul class=\"actions no-margin no-padding block\">
                                <li class=\"email-list-toggle\">
                                    <a href=\"#\"><i class=\"fa fa-angle-left\"></i> All Inboxes </a>
                                </li>
                                <li class=\"actions-dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" href=\"\">
                                                            <i class=\"caret\"></i>
                                                        </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-light\">
                                                            <li>
                                                                <a href=\"#\">
                                                                    Reply
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    Reply all
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    Forward
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href=\"#\">
                                                                    Delete
                                                                </a>
                                                            </li>
                                                        </ul> </span>
                                </li>
                                <li class=\"no-padding\">
                                    <a href=\"#\" class=\"text-info\">
                                        Reply
                                    </a>
                                </li>


                                <li class=\"no-padding\">
                                    <a href=\"#\">
                                        Delete
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"message-header\">
                            <img class=\"message-item-avatar\" alt=\"John Stark\" src=\"assets/images/avatar-6.jpg\">
                            <div class=\"message-time\">
                                05/24/2014 at 8:37PM
                            </div>

                            <div class=\"message-from\">
                                John Stark &lt;stark@example.com&gt;
                            </div>
                            <div class=\"message-to\">
                                To: Peter Clark
                            </div>
                        </div>
                        <div class=\"message-subject\">
                            Reference Request - Nicole Bell
                        </div>
                        <div class=\"message-content\">
                            <p>
                                Hi Peter,
                                <br>
                                Thanks for the e-mail. It is always nice to hear from people, especially from you, Scott.
                            </p>
                            <p>
                                I have not got any reply, a positive or negative one, from Seibido yet.
                                <br>
                                Let's wait and hope that it will make a BOOK.
                            </p>
                            <p>
                                Have you finished your paperwork for Kaken and writing academic articles?
                                <br>
                                If you have some free time in the near future, I want to meet you and explain to you our next project.
                            </p>
                            <p>
                                Why not drink out in Hiroshima if we are accepted?
                                <br>
                                We need to celebrate ourselves, don't we?
                                <br>
                                Let's have a small end-of-the-year party!
                            </p>
                            <p>
                                Sincerely, K. Nakagawa
                            </p>
                        </div>
                    </div>
                    <div class=\"ps-scrollbar-x-rail\" style=\"left: 0px; bottom: 3px;\"><div class=\"ps-scrollbar-x\" style=\"left: 0px; width: 0px;\"></div></div><div class=\"ps-scrollbar-y-rail\" style=\"top: 0px; height: 288px; right: 3px;\"><div class=\"ps-scrollbar-y\" style=\"top: 0px; height: 171px;\"></div></div></div>
                <!-- end: EMAIL READER -->
            </div>
        </div>
    </div>
{% endblock %}


{% block javascript %}
{% endblock %}", "AdminUsersBundle:Default:Messages.html.twig", "C:\\wamp\\www\\github\\Gestion-de-Stage\\src\\Admin\\UsersBundle/Resources/views/Default/Messages.html.twig");
    }
}
