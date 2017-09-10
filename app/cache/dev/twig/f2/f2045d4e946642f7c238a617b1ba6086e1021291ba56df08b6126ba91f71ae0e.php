<?php

/* AdminUsersBundle:Default:index.html.twig */
class __TwigTemplate_78bdb443360c5767450b405f4b217d25e4576b6dd15a35752c17c73082941a91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminUsersBundle::layout.html.twig", "AdminUsersBundle:Default:index.html.twig", 1);
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
        $__internal_ccc787db356252b9cf1223991faa0a915e5f69d466b1959fe9d053e7b12225d3 = $this->env->getExtension("native_profiler");
        $__internal_ccc787db356252b9cf1223991faa0a915e5f69d466b1959fe9d053e7b12225d3->enter($__internal_ccc787db356252b9cf1223991faa0a915e5f69d466b1959fe9d053e7b12225d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUsersBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccc787db356252b9cf1223991faa0a915e5f69d466b1959fe9d053e7b12225d3->leave($__internal_ccc787db356252b9cf1223991faa0a915e5f69d466b1959fe9d053e7b12225d3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9768887941d055a13d358c28f21fcafeadaffc9bb3237639dc004d41eecd538f = $this->env->getExtension("native_profiler");
        $__internal_9768887941d055a13d358c28f21fcafeadaffc9bb3237639dc004d41eecd538f->enter($__internal_9768887941d055a13d358c28f21fcafeadaffc9bb3237639dc004d41eecd538f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "   Dashboard Administration     ";
        
        $__internal_9768887941d055a13d358c28f21fcafeadaffc9bb3237639dc004d41eecd538f->leave($__internal_9768887941d055a13d358c28f21fcafeadaffc9bb3237639dc004d41eecd538f_prof);

    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        $__internal_e5dbc5a399027e4296e01b1c1f08fea305753eb0211840eab7ddc58cae689d68 = $this->env->getExtension("native_profiler");
        $__internal_e5dbc5a399027e4296e01b1c1f08fea305753eb0211840eab7ddc58cae689d68->enter($__internal_e5dbc5a399027e4296e01b1c1f08fea305753eb0211840eab7ddc58cae689d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        
        $__internal_e5dbc5a399027e4296e01b1c1f08fea305753eb0211840eab7ddc58cae689d68->leave($__internal_e5dbc5a399027e4296e01b1c1f08fea305753eb0211840eab7ddc58cae689d68_prof);

    }

    // line 7
    public function block_Menu($context, array $blocks = array())
    {
        $__internal_cd2cf394d0661daec6e12a2bbb071598ccc68fa3bae15e3cb94292d8979b4502 = $this->env->getExtension("native_profiler");
        $__internal_cd2cf394d0661daec6e12a2bbb071598ccc68fa3bae15e3cb94292d8979b4502->enter($__internal_cd2cf394d0661daec6e12a2bbb071598ccc68fa3bae15e3cb94292d8979b4502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Menu"));

        // line 8
        echo "     <ul class=\"main-navigation-menu\">
         <li class=\"active open\">
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
        echo $this->env->getExtension('routing')->getPath("admin_users_Profile");
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
        echo $this->env->getExtension('routing')->getPath("admin_users_Messages");
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
        echo $this->env->getExtension('routing')->getPath("admin_users_Agenda");
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
        echo $this->env->getExtension('routing')->getPath("admin_users_GestionStages");
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
        echo $this->env->getExtension('routing')->getPath("admin_users_Gestionsoutenances");
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
        echo $this->env->getExtension('routing')->getPath("admin_users_GestionUsers");
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
        echo $this->env->getExtension('routing')->getPath("admin_users_GestionDocs");
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
        echo $this->env->getExtension('routing')->getPath("admin_users_GestionRessources");
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
        
        $__internal_cd2cf394d0661daec6e12a2bbb071598ccc68fa3bae15e3cb94292d8979b4502->leave($__internal_cd2cf394d0661daec6e12a2bbb071598ccc68fa3bae15e3cb94292d8979b4502_prof);

    }

    // line 121
    public function block_pagetitle($context, array $blocks = array())
    {
        $__internal_5ca2a818bc1fb645e9bfa2cc29b80be595bf8858252d630e37a6ff1ca4407a7f = $this->env->getExtension("native_profiler");
        $__internal_5ca2a818bc1fb645e9bfa2cc29b80be595bf8858252d630e37a6ff1ca4407a7f->enter($__internal_5ca2a818bc1fb645e9bfa2cc29b80be595bf8858252d630e37a6ff1ca4407a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagetitle"));

        // line 122
        echo "     <section id=\"page-title\" class=\"padding-top-15 padding-bottom-15\">
         <div class=\"row\">
             <div class=\"col-sm-7\">
                 <h1 class=\"mainTitle\">Dashboard</h1>
                 <span class=\"mainDescription\">overview &amp; stats </span>
             </div>
         </div>
     </section>
";
        
        $__internal_5ca2a818bc1fb645e9bfa2cc29b80be595bf8858252d630e37a6ff1ca4407a7f->leave($__internal_5ca2a818bc1fb645e9bfa2cc29b80be595bf8858252d630e37a6ff1ca4407a7f_prof);

    }

    // line 132
    public function block_body($context, array $blocks = array())
    {
        $__internal_eed49ff95dac59ba2a513804710014ec809900415bb0eb2833327c9b83e6b8d8 = $this->env->getExtension("native_profiler");
        $__internal_eed49ff95dac59ba2a513804710014ec809900415bb0eb2833327c9b83e6b8d8->enter($__internal_eed49ff95dac59ba2a513804710014ec809900415bb0eb2833327c9b83e6b8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 133
        echo "    <div class=\"container-fluid container-fullw bg-white\">
        <div class=\"row\">
            <div class=\"col-sm-4\">
                <div class=\"panel panel-white no-radius text-center\">
                    <div class=\"panel-body\">
                        <span class=\"fa-stack fa-2x\"> <i class=\"fa fa-square fa-stack-2x text-primary\"></i> <i class=\"fa fa-smile-o fa-stack-1x fa-inverse\"></i> </span>
                        <h2 class=\"StepTitle\">Gerer les Utilisateurs</h2>
                        <p class=\"text-small\">
                            To add users, you need to be signed in as the super user.
                        </p>
                        <p class=\"links cl-effect-1\">
                            <a href=\"";
        // line 144
        echo $this->env->getExtension('routing')->getPath("admin_users_GestionUsers");
        echo "\">
                                view more
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"panel panel-white no-radius text-center\">
                    <div class=\"panel-body\">
                        <span class=\"fa-stack fa-2x\"> <i class=\"fa fa-square fa-stack-2x text-primary\"></i> <i class=\"fa fa-paperclip fa-stack-1x fa-inverse\"></i> </span>
                        <h2 class=\"StepTitle\">Gerer les Documents</h2>
                        <p class=\"text-small\">
                            The Manage Orders tool provides a view of all your orders.
                        </p>
                        <p class=\"cl-effect-1\">
                            <a href=\"";
        // line 160
        echo $this->env->getExtension('routing')->getPath("admin_users_GestionDocs");
        echo "\">
                                view more
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"panel panel-white no-radius text-center\">
                    <div class=\"panel-body\">
                        <span class=\"fa-stack fa-2x\"> <i class=\"fa fa-square fa-stack-2x text-primary\"></i> <i class=\"fa fa-terminal fa-stack-1x fa-inverse\"></i> </span>
                        <h2 class=\"StepTitle\">Gerer les Ressources</h2>
                        <p class=\"text-small\">
                            Store, modify, and extract information from your database.
                        </p>
                        <p class=\"links cl-effect-1\">
                            <a href=\"\">
                                view more
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class=\"container-fluid container-fullw padding-bottom-10\">
        <div class=\"row\">
            <div class=\"col-sm-8\">
                <div class=\"panel panel-white no-radius\">
                    <div class=\"panel-body\">
                        <div class=\"partition-light-grey padding-15 text-center margin-bottom-20\">
                            <h4 class=\"no-margin\">Soutenance Statistics</h4>
                            <span class=\"text-light\">based on the major browsers</span>
                        </div>
                        <div id=\"accordion\" class=\"panel-group accordion accordion-white no-margin\">
                            <div class=\"panel no-radius\">
                                <div class=\"panel-heading\">
                                    <h4 class=\"panel-title\">
                                        <a href=\"#collapseOne\" data-parent=\"#accordion\" data-toggle=\"collapse\" class=\"accordion-toggle padding-15 collapsed\" aria-expanded=\"false\">
                                            <i class=\"icon-arrow\"></i>
                                            This Month <span class=\"label label-danger pull-right\">";
        // line 202
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["ThisMonth"]) ? $context["ThisMonth"] : $this->getContext($context, "ThisMonth"))), "html", null, true);
        echo "</span>
                                        </a></h4>
                                </div>
                                <div class=\"panel-collapse collapse\" id=\"collapseOne\" aria-expanded=\"false\" style=\"height: 0px;\">
                                    <div class=\"panel-body no-padding partition-light-grey\">
                                        <table class=\"table\">
                                            <tbody>
                                            ";
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ThisMonth"]) ? $context["ThisMonth"] : $this->getContext($context, "ThisMonth")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 210
            echo "                                                <tr>
                                                    <td class=\"center\">";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "Id_TypeSoutenance", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 212
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "Salle_Soutenance", array()), "html", null, true);
            echo "</td>
                                                    <td class=\"center\">";
            // line 213
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "Date_Soutenance", array()), "html", null, true);
            echo "</td>
                                                    <td>";
            // line 214
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "Id_Stage", array()), "html", null, true);
            echo "</td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        echo "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class=\"panel no-radius\">
                                <div class=\"panel-heading\">
                                    <h4 class=\"panel-title\">
                                        <a href=\"#collapseTwo\" data-parent=\"#accordion\" data-toggle=\"collapse\" class=\"accordion-toggle padding-15 collapsed\" aria-expanded=\"false\">
                                            <i class=\"icon-arrow\"></i>
                                            Last Month <span class=\"label label-danger pull-right\">";
        // line 227
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["LastMonth"]) ? $context["LastMonth"] : $this->getContext($context, "LastMonth"))), "html", null, true);
        echo "</span>
                                        </a></h4>
                                </div>
                                <div class=\"panel-collapse collapse\" id=\"collapseTwo\" aria-expanded=\"false\" style=\"\">
                                    <div class=\"panel-body no-padding partition-light-grey\">
                                        <table class=\"table\">
                                            ";
        // line 233
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["LastMonth"]) ? $context["LastMonth"] : $this->getContext($context, "LastMonth")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 234
            echo "                                            <tr>
                                                <td class=\"center\">";
            // line 235
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "Id_TypeSoutenance", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 236
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "Salle_Soutenance", array()), "html", null, true);
            echo "</td>
                                                <td class=\"center\">";
            // line 237
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "Date_Soutenance", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 238
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "Id_Stage", array()), "html", null, true);
            echo "</td>
                                            </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 241
        echo "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"panel panel-white no-radius\">
                    <div class=\"panel-heading border-bottom\">
                        <h4 class=\"panel-title\">Users</h4>
                    </div>
                    <div class=\"panel-body\">
                        <div class=\"text-center\">
                            <span class=\"mini-pie\"> <canvas id=\"chart3\" class=\"full-width\" width=\"100\" height=\"150\" style=\"width: 100px; height: 150px;\"></canvas> <span>";
        // line 257
        echo twig_escape_filter($this->env, ((twig_length_filter($this->env, (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin"))) + twig_length_filter($this->env, (isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof")))) + twig_length_filter($this->env, (isset($context["stud"]) ? $context["stud"] : $this->getContext($context, "stud")))), "html", null, true);
        echo "</span> </span>
                            <span class=\"inline text-large no-wrap\">Acquisition</span>
                        </div>
                        <div class=\"margin-top-20 text-center legend-xs inline\">
                            <div id=\"chart3Legend\" class=\"chart-legend\"><ul class=\"tc-chart-js-legend\">
                                </ul></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container-fluid container-fullw bg-white\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"row\">
                        <div class=\"panel panel-white no-radius\" id=\"visits\">
                            <div class=\"panel-heading border-light\">
                                <h4 class=\"panel-title\"> Stage </h4>
                                <ul class=\"panel-heading-tabs border-light\">
                                    <li class=\"panel-tools\">
                                        <a data-original-title=\"Refresh\" data-toggle=\"tooltip\" data-placement=\"top\" class=\"btn btn-transparent btn-sm panel-refresh\" href=\"#\"><i class=\"ti-reload\"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div collapse=\"visits\" class=\"panel-wrapper\">
                                <div class=\"panel-body\">
                                    <div class=\"height-350\">
                                        <canvas id=\"chart1\" class=\"full-width\" width=\"644\" height=\"350\" style=\"width: 644px; height: 350px;\"></canvas>
                                        <div class=\"margin-top-20\">
                                            <div class=\"inline pull-left\">
                                                <div id=\"chart1Legend\" class=\"chart-legend\"><ul class=\"tc-chart-js-legend\">
                                                    </ul></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_eed49ff95dac59ba2a513804710014ec809900415bb0eb2833327c9b83e6b8d8->leave($__internal_eed49ff95dac59ba2a513804710014ec809900415bb0eb2833327c9b83e6b8d8_prof);

    }

    // line 304
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_77ae2693ecf421a374863615152c761702afc6b47a73af6cf37579298ec371c1 = $this->env->getExtension("native_profiler");
        $__internal_77ae2693ecf421a374863615152c761702afc6b47a73af6cf37579298ec371c1->enter($__internal_77ae2693ecf421a374863615152c761702afc6b47a73af6cf37579298ec371c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 305
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/vendor/Chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/vendor/jquery.sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        var Index = function() {
            var chart1Handler = function() {
                var data = {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    datasets: [{
                        label: 'stage not effect',
                        fillColor: 'rgba(220,220,220,0.2)',
                        strokeColor: 'rgba(220,220,220,1)',
                        pointColor: 'rgba(220,220,220,1)',
                        pointStrokeColor: '#fff',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(220,220,220,1)',
                        data: [";
        // line 320
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stage0"]) ? $context["stage0"] : $this->getContext($context, "stage0")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            if (($this->getAttribute($context["article"], "month", array()) == 1)) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "nbr", array()), "html", null, true);
            } else {
                echo "0";
            }
            echo ",";
            if (($this->getAttribute($context["article"], "month", array()) == 2)) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "nbr", array()), "html", null, true);
            } else {
                echo "0";
            }
            echo ",";
            if (($this->getAttribute($context["article"], "month", array()) == 3)) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "nbr", array()), "html", null, true);
            } else {
                echo "0";
            }
            echo ",";
            if (($this->getAttribute($context["article"], "month", array()) == 4)) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "nbr", array()), "html", null, true);
            } else {
                echo "0";
            }
            echo ",";
            if (($this->getAttribute($context["article"], "month", array()) == 5)) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "nbr", array()), "html", null, true);
            } else {
                echo "0";
            }
            echo ",";
            if (($this->getAttribute($context["article"], "month", array()) == 6)) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "nbr", array()), "html", null, true);
            } else {
                echo "0";
            }
            echo ",";
            if (($this->getAttribute($context["article"], "month", array()) == 7)) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "nbr", array()), "html", null, true);
            } else {
                echo "0";
            }
            echo ",";
            if (($this->getAttribute($context["article"], "month", array()) == 8)) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "nbr", array()), "html", null, true);
            } else {
                echo "0";
            }
            echo ",";
            if (($this->getAttribute($context["article"], "month", array()) == 9)) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "nbr", array()), "html", null, true);
            } else {
                echo "0";
            }
            echo ",";
            if (($this->getAttribute($context["article"], "month", array()) == 10)) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "nbr", array()), "html", null, true);
            } else {
                echo "0";
            }
            echo ",";
            if (($this->getAttribute($context["article"], "month", array()) == 11)) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "nbr", array()), "html", null, true);
            } else {
                echo "0";
            }
            echo ",";
            if (($this->getAttribute($context["article"], "month", array()) == 12)) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "nbr", array()), "html", null, true);
            } else {
                echo "0";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "]
                    }, {
                        label: 'stage effect',
                        fillColor: 'rgba(151,187,205,0.2)',
                        strokeColor: 'rgba(151,187,205,1)',
                        pointColor: 'rgba(151,187,205,1)',
                        pointStrokeColor: '#fff',
                        pointHighlightFill: '#fff',
                        pointHighlightStroke: 'rgba(151,187,205,1)',
                        data: [";
        // line 329
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stage1"]) ? $context["stage1"] : $this->getContext($context, "stage1")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            if (($this->getAttribute($context["article"], "month", array()) == 1)) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "nbr", array()), "html", null, true);
            } else {
                echo "0";
            }
            echo ",";
            if (($this->getAttribute($context["article"], "month", array()) == 2)) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "nbr", array()), "html", null, true);
            } else {
                echo "0";
            }
            echo ",";
            if (($this->getAttribute($context["article"], "month", array()) == 3)) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "nbr", array()), "html", null, true);
            } else {
                echo "0";
            }
            echo ",";
            if (($this->getAttribute($context["article"], "month", array()) == 4)) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "nbr", array()), "html", null, true);
            } else {
                echo "0";
            }
            echo ",";
            if (($this->getAttribute($context["article"], "month", array()) == 5)) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "nbr", array()), "html", null, true);
            } else {
                echo "0";
            }
            echo ",";
            if (($this->getAttribute($context["article"], "month", array()) == 6)) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "nbr", array()), "html", null, true);
            } else {
                echo "0";
            }
            echo ",";
            if (($this->getAttribute($context["article"], "month", array()) == 7)) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "nbr", array()), "html", null, true);
            } else {
                echo "0";
            }
            echo ",";
            if (($this->getAttribute($context["article"], "month", array()) == 8)) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "nbr", array()), "html", null, true);
            } else {
                echo "0";
            }
            echo ",";
            if (($this->getAttribute($context["article"], "month", array()) == 9)) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "nbr", array()), "html", null, true);
            } else {
                echo "0";
            }
            echo ",";
            if (($this->getAttribute($context["article"], "month", array()) == 10)) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "nbr", array()), "html", null, true);
            } else {
                echo "0";
            }
            echo ",";
            if (($this->getAttribute($context["article"], "month", array()) == 11)) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "nbr", array()), "html", null, true);
            } else {
                echo "0";
            }
            echo ",";
            if (($this->getAttribute($context["article"], "month", array()) == 12)) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "nbr", array()), "html", null, true);
            } else {
                echo "0";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "]
                    }]
                };

                var options = {

                    maintainAspectRatio: false,

                    // Sets the chart to be responsive
                    responsive: true,

                    ///Boolean - Whether grid lines are shown across the chart
                    scaleShowGridLines: true,

                    //String - Colour of the grid lines
                    scaleGridLineColor: 'rgba(0,0,0,.05)',

                    //Number - Width of the grid lines
                    scaleGridLineWidth: 1,

                    //Boolean - Whether the line is curved between points
                    bezierCurve: false,

                    //Number - Tension of the bezier curve between points
                    bezierCurveTension: 0.4,

                    //Boolean - Whether to show a dot for each point
                    pointDot: true,

                    //Number - Radius of each point dot in pixels
                    pointDotRadius: 4,

                    //Number - Pixel width of point dot stroke
                    pointDotStrokeWidth: 1,

                    //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
                    pointHitDetectionRadius: 20,

                    //Boolean - Whether to show a stroke for datasets
                    datasetStroke: true,

                    //Number - Pixel width of dataset stroke
                    datasetStrokeWidth: 2,

                    //Boolean - Whether to fill the dataset with a colour
                    datasetFill: true,

                    // Function - on animation progress
                    onAnimationProgress: function() {
                    },

                    // Function - on animation complete
                    onAnimationComplete: function() {
                    },

                    //String - A legend template
                    legendTemplate: '<ul class=\"tc-chart-js-legend\"><% for (var i=0; i<datasets.length; i++){\\%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){\\%><%=datasets[i].label%><%}%></li><%}%></ul>'
                };
                // Get context with jQuery - using jQuery's .get() method.
                var ctx = \$(\"#chart1\").get(0).getContext(\"2d\");
                // This will get the first returned node in the jQuery collection.
                var chart1 = new Chart(ctx).Line(data, options);
                //generate the legend
                var legend = chart1.generateLegend();
                //and append it to your page somewhere
                \$('#chart1Legend').append(legend);
            };
            var chart3Handler = function() {
                // Chart.js Data
                var data = [{
                    value: ";
        // line 399
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin"))), "html", null, true);
        echo ",
                    color: '#F7464A',
                    highlight: '#FF5A5E',
                    label: 'admin'
                }, {
                    value: ";
        // line 404
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["prof"]) ? $context["prof"] : $this->getContext($context, "prof"))), "html", null, true);
        echo ",
                    color: '#46BFBD',
                    highlight: '#5AD3D1',
                    label: 'prof'
                }, {
                    value: ";
        // line 409
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["stud"]) ? $context["stud"] : $this->getContext($context, "stud"))), "html", null, true);
        echo ",
                    color: '#FDB45C',
                    highlight: '#FFC870',
                    label: 'student'
                }];

                // Chart.js Options
                var options = {

                    // Sets the chart to be responsive
                    responsive: false,

                    //Boolean - Whether we should show a stroke on each segment
                    segmentShowStroke: true,

                    //String - The colour of each segment stroke
                    segmentStrokeColor: '#fff',

                    //Number - The width of each segment stroke
                    segmentStrokeWidth: 2,

                    //Number - The percentage of the chart that we cut out of the middle
                    percentageInnerCutout: 50, // This is 0 for Pie charts

                    //Number - Amount of animation steps
                    animationSteps: 100,

                    //String - Animation easing effect
                    animationEasing: 'easeOutBounce',

                    //Boolean - Whether we animate the rotation of the Doughnut
                    animateRotate: true,

                    //Boolean - Whether we animate scaling the Doughnut from the centre
                    animateScale: false,

                    //String - A legend template
                    legendTemplate: '<ul class=\"tc-chart-js-legend\"><% for (var i=0; i<segments.length; i++){\\%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){\\%><%=segments[i].label%><%}%></li><%}%></ul>'

                };
                // Get context with jQuery - using jQuery's .get() method.
                var ctx = \$(\"#chart3\").get(0).getContext(\"2d\");
                // This will get the first returned node in the jQuery collection.
                var chart3 = new Chart(ctx).Doughnut(data, options);
                //generate the legend
                var legend = chart3.generateLegend();
                //and append it to your page somewhere
                \$('#chart3Legend').append(legend);
            };
            return {
                init: function() {
                    chart1Handler();
                    chart3Handler();
                    sparklineHandler();
                }
            };
        }();

    </script>
    <script>
        jQuery(document).ready(function() {
            Index.init();
        });
    </script>
";
        
        $__internal_77ae2693ecf421a374863615152c761702afc6b47a73af6cf37579298ec371c1->leave($__internal_77ae2693ecf421a374863615152c761702afc6b47a73af6cf37579298ec371c1_prof);

    }

    public function getTemplateName()
    {
        return "AdminUsersBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  755 => 409,  747 => 404,  739 => 399,  589 => 329,  500 => 320,  483 => 306,  478 => 305,  472 => 304,  420 => 257,  402 => 241,  393 => 238,  389 => 237,  385 => 236,  381 => 235,  378 => 234,  374 => 233,  365 => 227,  353 => 217,  344 => 214,  340 => 213,  336 => 212,  332 => 211,  329 => 210,  325 => 209,  315 => 202,  270 => 160,  251 => 144,  238 => 133,  232 => 132,  217 => 122,  211 => 121,  189 => 106,  174 => 94,  159 => 82,  144 => 70,  129 => 58,  114 => 46,  99 => 34,  84 => 22,  68 => 8,  62 => 7,  51 => 5,  39 => 3,  11 => 1,);
    }
}
/* {% extends 'AdminUsersBundle::layout.html.twig' %}*/
/* */
/* {% block title %}   Dashboard Administration     {% endblock %}*/
/* */
/* {% block css %}*/
/* {% endblock %}*/
/*  {% block Menu %}*/
/*      <ul class="main-navigation-menu">*/
/*          <li class="active open">*/
/*              <a href="index.html">*/
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
/*              <a href="{{ path('admin_users_Profile') }}">*/
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
/*              <a href="{{ path('admin_users_Messages') }}">*/
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
/*              <a href="{{ path('admin_users_Agenda') }}">*/
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
/*              <a href="{{ path('admin_users_GestionStages') }}">*/
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
/*              <a href="{{ path('admin_users_Gestionsoutenances') }}">*/
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
/*          <li>*/
/*              <a href="{{ path('admin_users_GestionUsers') }}">*/
/*                  <div class="item-content">*/
/*                      <div class="item-media">*/
/*                          <i class="ti-settings"></i>*/
/*                      </div>*/
/*                      <div class="item-inner">*/
/*                          <span class="title"> Gestions Users </span>*/
/*                      </div>*/
/*                  </div>*/
/*              </a>*/
/*          </li>*/
/*          <li>*/
/*              <a href="{{ path('admin_users_GestionDocs') }}">*/
/*                  <div class="item-content">*/
/*                      <div class="item-media">*/
/*                          <i class="ti-settings"></i>*/
/*                      </div>*/
/*                      <div class="item-inner">*/
/*                          <span class="title"> Gestion Documents </span>*/
/*                      </div>*/
/*                  </div>*/
/*              </a>*/
/*          </li>*/
/*          <li>*/
/*              <a href="{{ path('admin_users_GestionRessources') }}">*/
/*                  <div class="item-content">*/
/*                      <div class="item-media">*/
/*                          <i class="ti-settings"></i>*/
/*                      </div>*/
/*                      <div class="item-inner">*/
/*                          <span class="title">Gestion Ressources </span>*/
/*                      </div>*/
/*                  </div>*/
/*              </a>*/
/*          </li>*/
/* */
/*      </ul>*/
/* */
/*  {% endblock %}*/
/* {% block pagetitle %}*/
/*      <section id="page-title" class="padding-top-15 padding-bottom-15">*/
/*          <div class="row">*/
/*              <div class="col-sm-7">*/
/*                  <h1 class="mainTitle">Dashboard</h1>*/
/*                  <span class="mainDescription">overview &amp; stats </span>*/
/*              </div>*/
/*          </div>*/
/*      </section>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="container-fluid container-fullw bg-white">*/
/*         <div class="row">*/
/*             <div class="col-sm-4">*/
/*                 <div class="panel panel-white no-radius text-center">*/
/*                     <div class="panel-body">*/
/*                         <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-smile-o fa-stack-1x fa-inverse"></i> </span>*/
/*                         <h2 class="StepTitle">Gerer les Utilisateurs</h2>*/
/*                         <p class="text-small">*/
/*                             To add users, you need to be signed in as the super user.*/
/*                         </p>*/
/*                         <p class="links cl-effect-1">*/
/*                             <a href="{{ path('admin_users_GestionUsers') }}">*/
/*                                 view more*/
/*                             </a>*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-sm-4">*/
/*                 <div class="panel panel-white no-radius text-center">*/
/*                     <div class="panel-body">*/
/*                         <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-paperclip fa-stack-1x fa-inverse"></i> </span>*/
/*                         <h2 class="StepTitle">Gerer les Documents</h2>*/
/*                         <p class="text-small">*/
/*                             The Manage Orders tool provides a view of all your orders.*/
/*                         </p>*/
/*                         <p class="cl-effect-1">*/
/*                             <a href="{{ path('admin_users_GestionDocs') }}">*/
/*                                 view more*/
/*                             </a>*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-sm-4">*/
/*                 <div class="panel panel-white no-radius text-center">*/
/*                     <div class="panel-body">*/
/*                         <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span>*/
/*                         <h2 class="StepTitle">Gerer les Ressources</h2>*/
/*                         <p class="text-small">*/
/*                             Store, modify, and extract information from your database.*/
/*                         </p>*/
/*                         <p class="links cl-effect-1">*/
/*                             <a href="">*/
/*                                 view more*/
/*                             </a>*/
/*                         </p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/*     <div class="container-fluid container-fullw padding-bottom-10">*/
/*         <div class="row">*/
/*             <div class="col-sm-8">*/
/*                 <div class="panel panel-white no-radius">*/
/*                     <div class="panel-body">*/
/*                         <div class="partition-light-grey padding-15 text-center margin-bottom-20">*/
/*                             <h4 class="no-margin">Soutenance Statistics</h4>*/
/*                             <span class="text-light">based on the major browsers</span>*/
/*                         </div>*/
/*                         <div id="accordion" class="panel-group accordion accordion-white no-margin">*/
/*                             <div class="panel no-radius">*/
/*                                 <div class="panel-heading">*/
/*                                     <h4 class="panel-title">*/
/*                                         <a href="#collapseOne" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle padding-15 collapsed" aria-expanded="false">*/
/*                                             <i class="icon-arrow"></i>*/
/*                                             This Month <span class="label label-danger pull-right">{{ ThisMonth|length }}</span>*/
/*                                         </a></h4>*/
/*                                 </div>*/
/*                                 <div class="panel-collapse collapse" id="collapseOne" aria-expanded="false" style="height: 0px;">*/
/*                                     <div class="panel-body no-padding partition-light-grey">*/
/*                                         <table class="table">*/
/*                                             <tbody>*/
/*                                             {% for article in ThisMonth %}*/
/*                                                 <tr>*/
/*                                                     <td class="center">{{ article.Id_TypeSoutenance}}</td>*/
/*                                                     <td>{{ article.Salle_Soutenance}}</td>*/
/*                                                     <td class="center">{{ article.Date_Soutenance}}</td>*/
/*                                                     <td>{{ article.Id_Stage}}</td>*/
/*                                                 </tr>*/
/*                                             {% endfor %}*/
/*                                             </tbody>*/
/*                                         </table>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="panel no-radius">*/
/*                                 <div class="panel-heading">*/
/*                                     <h4 class="panel-title">*/
/*                                         <a href="#collapseTwo" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle padding-15 collapsed" aria-expanded="false">*/
/*                                             <i class="icon-arrow"></i>*/
/*                                             Last Month <span class="label label-danger pull-right">{{ LastMonth|length }}</span>*/
/*                                         </a></h4>*/
/*                                 </div>*/
/*                                 <div class="panel-collapse collapse" id="collapseTwo" aria-expanded="false" style="">*/
/*                                     <div class="panel-body no-padding partition-light-grey">*/
/*                                         <table class="table">*/
/*                                             {% for article in LastMonth %}*/
/*                                             <tr>*/
/*                                                 <td class="center">{{ article.Id_TypeSoutenance}}</td>*/
/*                                                 <td>{{ article.Salle_Soutenance}}</td>*/
/*                                                 <td class="center">{{ article.Date_Soutenance}}</td>*/
/*                                                 <td>{{ article.Id_Stage}}</td>*/
/*                                             </tr>*/
/*                                             {% endfor %}*/
/*                                             </tbody>*/
/*                                         </table>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-sm-4">*/
/*                 <div class="panel panel-white no-radius">*/
/*                     <div class="panel-heading border-bottom">*/
/*                         <h4 class="panel-title">Users</h4>*/
/*                     </div>*/
/*                     <div class="panel-body">*/
/*                         <div class="text-center">*/
/*                             <span class="mini-pie"> <canvas id="chart3" class="full-width" width="100" height="150" style="width: 100px; height: 150px;"></canvas> <span>{{ admin|length +prof|length + stud|length  }}</span> </span>*/
/*                             <span class="inline text-large no-wrap">Acquisition</span>*/
/*                         </div>*/
/*                         <div class="margin-top-20 text-center legend-xs inline">*/
/*                             <div id="chart3Legend" class="chart-legend"><ul class="tc-chart-js-legend">*/
/*                                 </ul></div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="container-fluid container-fullw bg-white">*/
/*         <div class="row">*/
/*             <div class="col-sm-12">*/
/*                 <div class="row">*/
/*                         <div class="panel panel-white no-radius" id="visits">*/
/*                             <div class="panel-heading border-light">*/
/*                                 <h4 class="panel-title"> Stage </h4>*/
/*                                 <ul class="panel-heading-tabs border-light">*/
/*                                     <li class="panel-tools">*/
/*                                         <a data-original-title="Refresh" data-toggle="tooltip" data-placement="top" class="btn btn-transparent btn-sm panel-refresh" href="#"><i class="ti-reload"></i></a>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                             <div collapse="visits" class="panel-wrapper">*/
/*                                 <div class="panel-body">*/
/*                                     <div class="height-350">*/
/*                                         <canvas id="chart1" class="full-width" width="644" height="350" style="width: 644px; height: 350px;"></canvas>*/
/*                                         <div class="margin-top-20">*/
/*                                             <div class="inline pull-left">*/
/*                                                 <div id="chart1Legend" class="chart-legend"><ul class="tc-chart-js-legend">*/
/*                                                     </ul></div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
/* {% block javascript %}*/
/*     <script src="{{ asset('Backoffice/vendor/Chart.js/Chart.min.js') }}"></script>*/
/*     <script src="{{ asset('Backoffice/vendor/jquery.sparkline/jquery.sparkline.min.js') }}"></script>*/
/*     <script>*/
/*         var Index = function() {*/
/*             var chart1Handler = function() {*/
/*                 var data = {*/
/*                     labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],*/
/*                     datasets: [{*/
/*                         label: 'stage not effect',*/
/*                         fillColor: 'rgba(220,220,220,0.2)',*/
/*                         strokeColor: 'rgba(220,220,220,1)',*/
/*                         pointColor: 'rgba(220,220,220,1)',*/
/*                         pointStrokeColor: '#fff',*/
/*                         pointHighlightFill: '#fff',*/
/*                         pointHighlightStroke: 'rgba(220,220,220,1)',*/
/*                         data: [{% for article in stage0 %}{% if article.month  == 1 %}{{ article.nbr  }}{% else %}0{% endif %},{% if article.month  == 2 %}{{ article.nbr  }}{% else %}0{% endif %},{% if article.month  == 3 %}{{ article.nbr  }}{% else %}0{% endif %},{% if article.month  == 4 %}{{ article.nbr  }}{% else %}0{% endif %},{% if article.month  == 5 %}{{ article.nbr  }}{% else %}0{% endif %},{% if article.month  == 6 %}{{ article.nbr  }}{% else %}0{% endif %},{% if article.month  == 7 %}{{ article.nbr  }}{% else %}0{% endif %},{% if article.month  == 8 %}{{ article.nbr  }}{% else %}0{% endif %},{% if article.month  == 9 %}{{ article.nbr  }}{% else %}0{% endif %},{% if article.month  == 10 %}{{ article.nbr  }}{% else %}0{% endif %},{% if article.month  == 11 %}{{ article.nbr  }}{% else %}0{% endif %},{% if article.month  == 12 %}{{ article.nbr  }}{% else %}0{% endif %}{% endfor %}]*/
/*                     }, {*/
/*                         label: 'stage effect',*/
/*                         fillColor: 'rgba(151,187,205,0.2)',*/
/*                         strokeColor: 'rgba(151,187,205,1)',*/
/*                         pointColor: 'rgba(151,187,205,1)',*/
/*                         pointStrokeColor: '#fff',*/
/*                         pointHighlightFill: '#fff',*/
/*                         pointHighlightStroke: 'rgba(151,187,205,1)',*/
/*                         data: [{% for article in stage1 %}{% if article.month  == 1 %}{{ article.nbr  }}{% else %}0{% endif %},{% if article.month  == 2 %}{{ article.nbr  }}{% else %}0{% endif %},{% if article.month  == 3 %}{{ article.nbr  }}{% else %}0{% endif %},{% if article.month  == 4 %}{{ article.nbr  }}{% else %}0{% endif %},{% if article.month  == 5 %}{{ article.nbr  }}{% else %}0{% endif %},{% if article.month  == 6 %}{{ article.nbr  }}{% else %}0{% endif %},{% if article.month  == 7 %}{{ article.nbr  }}{% else %}0{% endif %},{% if article.month  == 8 %}{{ article.nbr  }}{% else %}0{% endif %},{% if article.month  == 9 %}{{ article.nbr  }}{% else %}0{% endif %},{% if article.month  == 10 %}{{ article.nbr  }}{% else %}0{% endif %},{% if article.month  == 11 %}{{ article.nbr  }}{% else %}0{% endif %},{% if article.month  == 12 %}{{ article.nbr  }}{% else %}0{% endif %}{% endfor %}]*/
/*                     }]*/
/*                 };*/
/* */
/*                 var options = {*/
/* */
/*                     maintainAspectRatio: false,*/
/* */
/*                     // Sets the chart to be responsive*/
/*                     responsive: true,*/
/* */
/*                     ///Boolean - Whether grid lines are shown across the chart*/
/*                     scaleShowGridLines: true,*/
/* */
/*                     //String - Colour of the grid lines*/
/*                     scaleGridLineColor: 'rgba(0,0,0,.05)',*/
/* */
/*                     //Number - Width of the grid lines*/
/*                     scaleGridLineWidth: 1,*/
/* */
/*                     //Boolean - Whether the line is curved between points*/
/*                     bezierCurve: false,*/
/* */
/*                     //Number - Tension of the bezier curve between points*/
/*                     bezierCurveTension: 0.4,*/
/* */
/*                     //Boolean - Whether to show a dot for each point*/
/*                     pointDot: true,*/
/* */
/*                     //Number - Radius of each point dot in pixels*/
/*                     pointDotRadius: 4,*/
/* */
/*                     //Number - Pixel width of point dot stroke*/
/*                     pointDotStrokeWidth: 1,*/
/* */
/*                     //Number - amount extra to add to the radius to cater for hit detection outside the drawn point*/
/*                     pointHitDetectionRadius: 20,*/
/* */
/*                     //Boolean - Whether to show a stroke for datasets*/
/*                     datasetStroke: true,*/
/* */
/*                     //Number - Pixel width of dataset stroke*/
/*                     datasetStrokeWidth: 2,*/
/* */
/*                     //Boolean - Whether to fill the dataset with a colour*/
/*                     datasetFill: true,*/
/* */
/*                     // Function - on animation progress*/
/*                     onAnimationProgress: function() {*/
/*                     },*/
/* */
/*                     // Function - on animation complete*/
/*                     onAnimationComplete: function() {*/
/*                     },*/
/* */
/*                     //String - A legend template*/
/*                     legendTemplate: '<ul class="tc-chart-js-legend"><% for (var i=0; i<datasets.length; i++){\%><li><span style="background-color:<%=datasets[i].strokeColor%>"></span><%if(datasets[i].label){\%><%=datasets[i].label%><%}%></li><%}%></ul>'*/
/*                 };*/
/*                 // Get context with jQuery - using jQuery's .get() method.*/
/*                 var ctx = $("#chart1").get(0).getContext("2d");*/
/*                 // This will get the first returned node in the jQuery collection.*/
/*                 var chart1 = new Chart(ctx).Line(data, options);*/
/*                 //generate the legend*/
/*                 var legend = chart1.generateLegend();*/
/*                 //and append it to your page somewhere*/
/*                 $('#chart1Legend').append(legend);*/
/*             };*/
/*             var chart3Handler = function() {*/
/*                 // Chart.js Data*/
/*                 var data = [{*/
/*                     value: {{ admin|length }},*/
/*                     color: '#F7464A',*/
/*                     highlight: '#FF5A5E',*/
/*                     label: 'admin'*/
/*                 }, {*/
/*                     value: {{ prof|length }},*/
/*                     color: '#46BFBD',*/
/*                     highlight: '#5AD3D1',*/
/*                     label: 'prof'*/
/*                 }, {*/
/*                     value: {{ stud|length }},*/
/*                     color: '#FDB45C',*/
/*                     highlight: '#FFC870',*/
/*                     label: 'student'*/
/*                 }];*/
/* */
/*                 // Chart.js Options*/
/*                 var options = {*/
/* */
/*                     // Sets the chart to be responsive*/
/*                     responsive: false,*/
/* */
/*                     //Boolean - Whether we should show a stroke on each segment*/
/*                     segmentShowStroke: true,*/
/* */
/*                     //String - The colour of each segment stroke*/
/*                     segmentStrokeColor: '#fff',*/
/* */
/*                     //Number - The width of each segment stroke*/
/*                     segmentStrokeWidth: 2,*/
/* */
/*                     //Number - The percentage of the chart that we cut out of the middle*/
/*                     percentageInnerCutout: 50, // This is 0 for Pie charts*/
/* */
/*                     //Number - Amount of animation steps*/
/*                     animationSteps: 100,*/
/* */
/*                     //String - Animation easing effect*/
/*                     animationEasing: 'easeOutBounce',*/
/* */
/*                     //Boolean - Whether we animate the rotation of the Doughnut*/
/*                     animateRotate: true,*/
/* */
/*                     //Boolean - Whether we animate scaling the Doughnut from the centre*/
/*                     animateScale: false,*/
/* */
/*                     //String - A legend template*/
/*                     legendTemplate: '<ul class="tc-chart-js-legend"><% for (var i=0; i<segments.length; i++){\%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){\%><%=segments[i].label%><%}%></li><%}%></ul>'*/
/* */
/*                 };*/
/*                 // Get context with jQuery - using jQuery's .get() method.*/
/*                 var ctx = $("#chart3").get(0).getContext("2d");*/
/*                 // This will get the first returned node in the jQuery collection.*/
/*                 var chart3 = new Chart(ctx).Doughnut(data, options);*/
/*                 //generate the legend*/
/*                 var legend = chart3.generateLegend();*/
/*                 //and append it to your page somewhere*/
/*                 $('#chart3Legend').append(legend);*/
/*             };*/
/*             return {*/
/*                 init: function() {*/
/*                     chart1Handler();*/
/*                     chart3Handler();*/
/*                     sparklineHandler();*/
/*                 }*/
/*             };*/
/*         }();*/
/* */
/*     </script>*/
/*     <script>*/
/*         jQuery(document).ready(function() {*/
/*             Index.init();*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
