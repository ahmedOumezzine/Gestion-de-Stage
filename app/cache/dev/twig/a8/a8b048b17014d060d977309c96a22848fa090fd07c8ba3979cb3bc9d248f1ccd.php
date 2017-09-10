<?php

/* AdminUsersBundle:Default:Profile.html.twig */
class __TwigTemplate_f233dda61b46602692fa12ed1b169edb71f2aaca96818dda265774ae5d1eef97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminUsersBundle::layout.html.twig", "AdminUsersBundle:Default:Profile.html.twig", 1);
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
        $__internal_34958fb7dd7435f4d4d70f9e2c3e999c429e7d8c987dbddcbccd2651000cb0ad = $this->env->getExtension("native_profiler");
        $__internal_34958fb7dd7435f4d4d70f9e2c3e999c429e7d8c987dbddcbccd2651000cb0ad->enter($__internal_34958fb7dd7435f4d4d70f9e2c3e999c429e7d8c987dbddcbccd2651000cb0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminUsersBundle:Default:Profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34958fb7dd7435f4d4d70f9e2c3e999c429e7d8c987dbddcbccd2651000cb0ad->leave($__internal_34958fb7dd7435f4d4d70f9e2c3e999c429e7d8c987dbddcbccd2651000cb0ad_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d611faeaf9bc88a8d65bbcbc4c624faedcc1725790a0cf38e39f912a9849e40e = $this->env->getExtension("native_profiler");
        $__internal_d611faeaf9bc88a8d65bbcbc4c624faedcc1725790a0cf38e39f912a9849e40e->enter($__internal_d611faeaf9bc88a8d65bbcbc4c624faedcc1725790a0cf38e39f912a9849e40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "   Profile    ";
        
        $__internal_d611faeaf9bc88a8d65bbcbc4c624faedcc1725790a0cf38e39f912a9849e40e->leave($__internal_d611faeaf9bc88a8d65bbcbc4c624faedcc1725790a0cf38e39f912a9849e40e_prof);

    }

    // line 5
    public function block_css($context, array $blocks = array())
    {
        $__internal_a0d1a331117f3d30ed71652f5f102144f983ef7247c0687d32f3fea63f740228 = $this->env->getExtension("native_profiler");
        $__internal_a0d1a331117f3d30ed71652f5f102144f983ef7247c0687d32f3fea63f740228->enter($__internal_a0d1a331117f3d30ed71652f5f102144f983ef7247c0687d32f3fea63f740228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 6
        echo "
    <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/vendor/sweetalert/sweet-alert.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/vendor/sweetalert/ie9.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/vendor/toastr/toastr.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/vendor/bootstrap-fileinput/jasny-bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
";
        
        $__internal_a0d1a331117f3d30ed71652f5f102144f983ef7247c0687d32f3fea63f740228->leave($__internal_a0d1a331117f3d30ed71652f5f102144f983ef7247c0687d32f3fea63f740228_prof);

    }

    // line 12
    public function block_Menu($context, array $blocks = array())
    {
        $__internal_f94976aad9eb58088e8e197b84cf2608aa80ae164ff4ec1ebbd40409f76a94b4 = $this->env->getExtension("native_profiler");
        $__internal_f94976aad9eb58088e8e197b84cf2608aa80ae164ff4ec1ebbd40409f76a94b4->enter($__internal_f94976aad9eb58088e8e197b84cf2608aa80ae164ff4ec1ebbd40409f76a94b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Menu"));

        // line 13
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
         <li class=\"active open\">
             <a href=\"";
        // line 27
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
        // line 39
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
        // line 51
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
        // line 63
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
        // line 75
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
        // line 87
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
        // line 99
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
        // line 111
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
        
        $__internal_f94976aad9eb58088e8e197b84cf2608aa80ae164ff4ec1ebbd40409f76a94b4->leave($__internal_f94976aad9eb58088e8e197b84cf2608aa80ae164ff4ec1ebbd40409f76a94b4_prof);

    }

    // line 125
    public function block_pagetitle($context, array $blocks = array())
    {
        $__internal_7a3e8b52e727e12928bf08f0e71e81c50e6f95dcc8e67c51c3dad76db1aaf0aa = $this->env->getExtension("native_profiler");
        $__internal_7a3e8b52e727e12928bf08f0e71e81c50e6f95dcc8e67c51c3dad76db1aaf0aa->enter($__internal_7a3e8b52e727e12928bf08f0e71e81c50e6f95dcc8e67c51c3dad76db1aaf0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagetitle"));

        // line 126
        echo "    <section id=\"page-title\" class=\"padding-top-15 padding-bottom-15\">
        <div class=\"row\">
            <div class=\"col-sm-7\">
                <h1 class=\"mainTitle\">Profile</h1>
                <span class=\"mainDescription\">overview &amp; stats </span>
            </div>
        </div>
    </section>
";
        
        $__internal_7a3e8b52e727e12928bf08f0e71e81c50e6f95dcc8e67c51c3dad76db1aaf0aa->leave($__internal_7a3e8b52e727e12928bf08f0e71e81c50e6f95dcc8e67c51c3dad76db1aaf0aa_prof);

    }

    // line 136
    public function block_body($context, array $blocks = array())
    {
        $__internal_c24b1eb4fc02229d3df9d74bbf1e342b3269950d48f2dff69be85ed933f237fd = $this->env->getExtension("native_profiler");
        $__internal_c24b1eb4fc02229d3df9d74bbf1e342b3269950d48f2dff69be85ed933f237fd->enter($__internal_c24b1eb4fc02229d3df9d74bbf1e342b3269950d48f2dff69be85ed933f237fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 137
        echo "    <div class=\"container-fluid container-fullw bg-white\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"tabbable\">
                    <ul class=\"nav nav-tabs tab-padding tab-space-3 tab-blue\" id=\"myTab4\">
                        <li class=\"active\">
                            <a data-toggle=\"tab\" href=\"#panel_overview\">
                                Overview
                            </a>
                        </li>
                        <li>
                            <a data-toggle=\"tab\" href=\"#panel_edit_account\">
                                Edit Account
                            </a>
                        </li>

                    </ul>
                    <div class=\"tab-content\">
                        <div id=\"panel_overview\" class=\"tab-pane fade in active\">
                            <div class=\"row\">
                                <div class=\"col-sm-5 col-md-4\">
                                    <div class=\"user-left\">
                                        <div class=\"center\">
                                            <h4>";
        // line 160
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), 0, array(), "array"), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), 0, array(), "array"), "lastname", array()), "html", null, true);
        echo "</h4>
                                            <div class=\"fileinput fileinput-new\" data-provides=\"fileinput\">
                                                <div class=\"user-image\">
                                                    <div class=\"fileinput-new thumbnail\"><img src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), 0, array(), "array"), "imgSrc", array())), "html", null, true);
        echo "\" alt=\"\">
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    </div>
                                </div>
                                <div class=\"col-sm-7 col-md-8\">
                                    <div class=\"panel panel-white\" id=\"activities\">
                                        <div class=\"panel-heading border-light\">
                                            <h4><span class=\"text-bold\">General information</span></h4>
                                            <paneltool class=\"panel-tools\" tool-collapse=\"tool-collapse\" tool-refresh=\"load1\" tool-dismiss=\"tool-dismiss\"></paneltool>
                                        </div>
                                        <div collapse=\"activities\" ng-init=\"activities=false\" class=\"panel-wrapper\">
                                            <div class=\"panel-body\">
                                                <table class=\"table\">
                                                    <tbody>
                                                    <tr>
                                                        <td><a href=\"#\">Birth</a></td>
                                                        <td>";
        // line 182
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), 0, array(), "array"), "birth", array()), "d"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), 0, array(), "array"), "birth", array()), "F"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), 0, array(), "array"), "birth", array()), "Y"), "html", null, true);
        echo "
                                                        </td>
                                                        <td><a href=\"#panel_edit_account\" class=\"show-tab\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href=\"#\">Email Address</a></td>
                                                        <td>";
        // line 188
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), 0, array(), "array"), "emailaddress", array()), "html", null, true);
        echo "</td>
                                                        <td><a href=\"#panel_edit_account\" class=\"show-tab\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href=\"#\">Phone</a></td>
                                                        <td>";
        // line 193
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), 0, array(), "array"), "phone", array()), "html", null, true);
        echo "</td>
                                                        <td><a href=\"#panel_edit_account\" class=\"show-tab\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href=\"#\">City</a></td>
                                                        <td>";
        // line 198
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), 0, array(), "array"), "city", array()), "html", null, true);
        echo "</td>
                                                        <td><a href=\"#panel_edit_account\" class=\"show-tab\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td> <a href=\"#\">Zip Code</a></td>
                                                        <td> ";
        // line 203
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), 0, array(), "array"), "zipcode", array()), "html", null, true);
        echo "     </td>
                                                        <td><a href=\"#panel_edit_account\" class=\"show-tab\"><i class=\"fa fa-pencil edit-user-info\"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href=\"#\">Status</a></td>
                                                        <td><span class=\"label label-sm label-info\">Administrator</span></td>
                                                        <td></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"panel_edit_account\" class=\"tab-pane fade\">
                            <fieldset>
                                    <legend>
                                        Account Info
                                    </legend>
                                    <input type=\"hidden\" id=\"id\" value=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), 0, array(), "array"), "idadmin", array()), "html", null, true);
        echo "\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"control-label\">
                                                    First Name
                                                </label>
                                                <input type=\"text\" value=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), 0, array(), "array"), "firstname", array()), "html", null, true);
        echo "\" class=\"form-control\" id=\"firstname\" name=\"firstname\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"control-label\">
                                                    Last Name
                                                </label>
                                                <input type=\"text\" value=\" ";
        // line 237
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), 0, array(), "array"), "lastname", array()), "html", null, true);
        echo "\" class=\"form-control\" id=\"lastname\" name=\"lastname\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"control-label\">
                                                    Email Address
                                                </label>
                                                <input type=\"email\" value=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), 0, array(), "array"), "emailaddress", array()), "html", null, true);
        echo "\" class=\"form-control\" id=\"email\" name=\"email\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"control-label\">
                                                    Phone
                                                </label>
                                                <input type=\"text\" value=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), 0, array(), "array"), "phone", array()), "html", null, true);
        echo "\" class=\"form-control\" id=\"phone\" name=\"phone\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"control-label\">
                                                    Password
                                                </label>
                                                <input type=\"password\" placeholder=\"password\" class=\"form-control\" name=\"password\" id=\"password\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"control-label\">
                                                    Confirm Password
                                                </label>
                                                <input type=\"password\" placeholder=\"password\" class=\"form-control\" id=\"password_again\" name=\"password_again\">
                                            </div>
                                        </div>
                                        <div class=\"col-md-6\">
                                            <div class=\"form-group\">
                                                <label class=\"control-label\">
                                                    birth
                                                </label>
                                                <input type=\"date\" value=\"";
        // line 269
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), 0, array(), "array"), "birth", array()), "Y-m-d"), "html", null, true);
        echo "\" class=\"form-control\" id=\"birth\" name=\"birth\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label class=\"control-label\">
                                                    Gender
                                                </label>
                                                <div class=\"clip-radio radio-primary\">
                                                    <input type=\"radio\" value=\"female\" name=\"gender\" id=\"us-female\" ";
        // line 276
        if (($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), 0, array(), "array"), "gender", array()) == "female")) {
            echo " checked=\"\"  ";
        }
        echo ">
                                                    <label for=\"us-female\">
                                                        Female
                                                    </label>
                                                    <input type=\"radio\" value=\"male\" name=\"gender\" id=\"us-male\" ";
        // line 280
        if (($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), 0, array(), "array"), "gender", array()) == "male")) {
            echo " checked=\"\"  ";
        }
        echo ">
                                                    <label for=\"us-male\">
                                                        Male
                                                    </label>
                                                </div>
                                            </div>
                                            <div class=\"row\">
                                                <div class=\"col-md-4\">
                                                    <div class=\"form-group\">
                                                        <label class=\"control-label\">
                                                            Zip Code
                                                        </label>
                                                        <input class=\"form-control\" value=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), 0, array(), "array"), "zipcode", array()), "html", null, true);
        echo "\" type=\"text\" name=\"zipcode\" id=\"zipcode\">
                                                    </div>
                                                </div>
                                                <div class=\"col-md-8\">
                                                    <div class=\"form-group\">
                                                        <label class=\"control-label\">
                                                            City
                                                        </label>
                                                        <input class=\"form-control tooltips\" value=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), 0, array(), "array"), "city", array()), "html", null, true);
        echo "\" type=\"text\" data-original-title=\"We'll display it when you write reviews\" data-rel=\"tooltip\" title=\"\" data-placement=\"top\" name=\"city\" id=\"city\">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"form-group\">
                                                <label>
                                                    Image Upload
                                                </label>
                                                <div class=\"fileinput fileinput-new\" data-provides=\"fileinput\">
                                                    <div class=\"fileinput-new thumbnail\"><img src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), 0, array(), "array"), "imgSrc", array())), "html", null, true);
        echo "\" alt=\"\">
                                                    </div>
                                                    <div class=\"fileinput-preview fileinput-exists thumbnail\"></div>
                                                    <div class=\"user-edit-image-buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-azure btn-file\"><span class=\"fileinput-new\"><i class=\"fa fa-picture\"></i> Select image</span><span class=\"fileinput-exists\"><i class=\"fa fa-picture\"></i> Change</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"file\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                                                        <a href=\"#\" class=\"btn fileinput-exists btn-red\" data-dismiss=\"fileinput\">
                                                            <i class=\"fa fa-times\"></i> Remove
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div>
                                            Required Fields
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-md-8\">
                                        <p>
                                            By clicking UPDATE, you are agreeing to the Policy and Terms &amp; Conditions.
                                        </p>
                                    </div>
                                    <div class=\"col-md-4\">
                                        <button class=\"btn btn-primary pull-right\" id=\"update\" type=\"submit\">
                                            Update <i class=\"fa fa-arrow-circle-right\"></i>
                                        </button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_c24b1eb4fc02229d3df9d74bbf1e342b3269950d48f2dff69be85ed933f237fd->leave($__internal_c24b1eb4fc02229d3df9d74bbf1e342b3269950d48f2dff69be85ed933f237fd_prof);

    }

    // line 354
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_b426dfcf8726094d94361c129552c9235726375382dbcd6f2f7eefd1e5523835 = $this->env->getExtension("native_profiler");
        $__internal_b426dfcf8726094d94361c129552c9235726375382dbcd6f2f7eefd1e5523835->enter($__internal_b426dfcf8726094d94361c129552c9235726375382dbcd6f2f7eefd1e5523835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 355
        echo "    <script >
        \$('#update').click(function(){
            var firstname= document.getElementById('firstname').value;
            var lastname= document.getElementById('lastname').value;
            var emailaddress= document.getElementById('email').value;
            var password= document.getElementById('password').value;
            var password_again= document.getElementById('password_again').value;
            var gender = \$(\"input[name='gender']:checked\").val();
            var zipcode= document.getElementById('zipcode').value;
            var city= document.getElementById('city').value;
            var phone= document.getElementById('phone').value;
            var birth= document.getElementById('birth').value;
            var id= document.getElementById('id').value;
            \$.ajax({
                type: \"POST\",
                url: Routing.generate('admin_users_Profile_edit', {id:id,firstname:firstname,lastname:lastname,birth:birth,emailaddress:emailaddress,phone:phone,gender:gender,zipcode:zipcode,city:city,password:password}),
                beforeSend: function() {
                    // setting a timeout
                    swal(\"loading ...\")
                },
                success: function(data){
                    swal(\"Good job!\", \"Recherche page  pour voir changement!\", \"success\");
                    location.reload();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    sweetAlert(\"Oops...\", \"Status:=\"+textStatus + \" Error:=\"+errorThrown, \"error\");
                }
            })

        });
    </script>
    <script src=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/vendor/sweetalert/sweet-alert.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/vendor/toastr/toastr.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 389
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <script src=\"";
        // line 390
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("Backoffice/vendor/bootstrap-fileinput/jasny-bootstrap.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_b426dfcf8726094d94361c129552c9235726375382dbcd6f2f7eefd1e5523835->leave($__internal_b426dfcf8726094d94361c129552c9235726375382dbcd6f2f7eefd1e5523835_prof);

    }

    public function getTemplateName()
    {
        return "AdminUsersBundle:Default:Profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  596 => 390,  592 => 389,  588 => 388,  584 => 387,  580 => 386,  547 => 355,  541 => 354,  491 => 309,  479 => 300,  468 => 292,  451 => 280,  442 => 276,  432 => 269,  409 => 249,  400 => 243,  391 => 237,  382 => 231,  372 => 224,  348 => 203,  340 => 198,  332 => 193,  324 => 188,  311 => 182,  289 => 163,  281 => 160,  256 => 137,  250 => 136,  235 => 126,  229 => 125,  208 => 111,  193 => 99,  178 => 87,  163 => 75,  148 => 63,  133 => 51,  118 => 39,  103 => 27,  87 => 13,  81 => 12,  72 => 10,  68 => 9,  64 => 8,  60 => 7,  57 => 6,  51 => 5,  39 => 3,  11 => 1,);
    }
}
/* {% extends 'AdminUsersBundle::layout.html.twig' %}*/
/* */
/* {% block title %}   Profile    {% endblock %}*/
/* */
/* {% block css %}*/
/* */
/*     <link href="{{ asset('Backoffice/vendor/sweetalert/sweet-alert.css') }}" rel="stylesheet" media="screen">*/
/*     <link href="{{ asset('Backoffice/vendor/sweetalert/ie9.css') }}" rel="stylesheet" media="screen">*/
/*     <link href="{{ asset('Backoffice/vendor/toastr/toastr.min.css') }}" rel="stylesheet" media="screen">*/
/*     <link href="{{ asset('Backoffice/vendor/bootstrap-fileinput/jasny-bootstrap.min.css') }}" rel="stylesheet" media="screen">*/
/* {% endblock %}*/
/*  {% block Menu %}*/
/*      <ul class="main-navigation-menu">*/
/*          <li>*/
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
/*          <li class="active open">*/
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
/*      </ul>*/
/* */
/*  {% endblock %}*/
/* {% block pagetitle %}*/
/*     <section id="page-title" class="padding-top-15 padding-bottom-15">*/
/*         <div class="row">*/
/*             <div class="col-sm-7">*/
/*                 <h1 class="mainTitle">Profile</h1>*/
/*                 <span class="mainDescription">overview &amp; stats </span>*/
/*             </div>*/
/*         </div>*/
/*     </section>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="container-fluid container-fullw bg-white">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="tabbable">*/
/*                     <ul class="nav nav-tabs tab-padding tab-space-3 tab-blue" id="myTab4">*/
/*                         <li class="active">*/
/*                             <a data-toggle="tab" href="#panel_overview">*/
/*                                 Overview*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a data-toggle="tab" href="#panel_edit_account">*/
/*                                 Edit Account*/
/*                             </a>*/
/*                         </li>*/
/* */
/*                     </ul>*/
/*                     <div class="tab-content">*/
/*                         <div id="panel_overview" class="tab-pane fade in active">*/
/*                             <div class="row">*/
/*                                 <div class="col-sm-5 col-md-4">*/
/*                                     <div class="user-left">*/
/*                                         <div class="center">*/
/*                                             <h4>{{ profile[0].firstname }} {{ profile[0].lastname}}</h4>*/
/*                                             <div class="fileinput fileinput-new" data-provides="fileinput">*/
/*                                                 <div class="user-image">*/
/*                                                     <div class="fileinput-new thumbnail"><img src="{{ asset(profile[0].imgSrc) }}" alt="">*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                     </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-sm-7 col-md-8">*/
/*                                     <div class="panel panel-white" id="activities">*/
/*                                         <div class="panel-heading border-light">*/
/*                                             <h4><span class="text-bold">General information</span></h4>*/
/*                                             <paneltool class="panel-tools" tool-collapse="tool-collapse" tool-refresh="load1" tool-dismiss="tool-dismiss"></paneltool>*/
/*                                         </div>*/
/*                                         <div collapse="activities" ng-init="activities=false" class="panel-wrapper">*/
/*                                             <div class="panel-body">*/
/*                                                 <table class="table">*/
/*                                                     <tbody>*/
/*                                                     <tr>*/
/*                                                         <td><a href="#">Birth</a></td>*/
/*                                                         <td>{{ profile[0].birth|date("d")}} - {{ profile[0].birth|date("F")}} - {{ profile[0].birth|date("Y")}}*/
/*                                                         </td>*/
/*                                                         <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>*/
/*                                                     </tr>*/
/*                                                     <tr>*/
/*                                                         <td><a href="#">Email Address</a></td>*/
/*                                                         <td>{{ profile[0].emailaddress}}</td>*/
/*                                                         <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>*/
/*                                                     </tr>*/
/*                                                     <tr>*/
/*                                                         <td><a href="#">Phone</a></td>*/
/*                                                         <td>{{ profile[0].phone }}</td>*/
/*                                                         <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>*/
/*                                                     </tr>*/
/*                                                     <tr>*/
/*                                                         <td><a href="#">City</a></td>*/
/*                                                         <td>{{ profile[0].city }}</td>*/
/*                                                         <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>*/
/*                                                     </tr>*/
/*                                                     <tr>*/
/*                                                         <td> <a href="#">Zip Code</a></td>*/
/*                                                         <td> {{ profile[0].zipcode }}     </td>*/
/*                                                         <td><a href="#panel_edit_account" class="show-tab"><i class="fa fa-pencil edit-user-info"></i></a></td>*/
/*                                                     </tr>*/
/*                                                     <tr>*/
/*                                                         <td><a href="#">Status</a></td>*/
/*                                                         <td><span class="label label-sm label-info">Administrator</span></td>*/
/*                                                         <td></td>*/
/*                                                     </tr>*/
/*                                                     </tbody>*/
/*                                                 </table>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div id="panel_edit_account" class="tab-pane fade">*/
/*                             <fieldset>*/
/*                                     <legend>*/
/*                                         Account Info*/
/*                                     </legend>*/
/*                                     <input type="hidden" id="id" value="{{ profile[0].idadmin}}">*/
/*                                     <div class="row">*/
/*                                         <div class="col-md-6">*/
/*                                             <div class="form-group">*/
/*                                                 <label class="control-label">*/
/*                                                     First Name*/
/*                                                 </label>*/
/*                                                 <input type="text" value="{{ profile[0].firstname }}" class="form-control" id="firstname" name="firstname">*/
/*                                             </div>*/
/*                                             <div class="form-group">*/
/*                                                 <label class="control-label">*/
/*                                                     Last Name*/
/*                                                 </label>*/
/*                                                 <input type="text" value=" {{ profile[0].lastname}}" class="form-control" id="lastname" name="lastname">*/
/*                                             </div>*/
/*                                             <div class="form-group">*/
/*                                                 <label class="control-label">*/
/*                                                     Email Address*/
/*                                                 </label>*/
/*                                                 <input type="email" value="{{ profile[0].emailaddress}}" class="form-control" id="email" name="email">*/
/*                                             </div>*/
/*                                             <div class="form-group">*/
/*                                                 <label class="control-label">*/
/*                                                     Phone*/
/*                                                 </label>*/
/*                                                 <input type="text" value="{{ profile[0].phone }}" class="form-control" id="phone" name="phone">*/
/*                                             </div>*/
/*                                             <div class="form-group">*/
/*                                                 <label class="control-label">*/
/*                                                     Password*/
/*                                                 </label>*/
/*                                                 <input type="password" placeholder="password" class="form-control" name="password" id="password">*/
/*                                             </div>*/
/*                                             <div class="form-group">*/
/*                                                 <label class="control-label">*/
/*                                                     Confirm Password*/
/*                                                 </label>*/
/*                                                 <input type="password" placeholder="password" class="form-control" id="password_again" name="password_again">*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="col-md-6">*/
/*                                             <div class="form-group">*/
/*                                                 <label class="control-label">*/
/*                                                     birth*/
/*                                                 </label>*/
/*                                                 <input type="date" value="{{profile[0].birth|date('Y-m-d')}}" class="form-control" id="birth" name="birth">*/
/*                                             </div>*/
/*                                             <div class="form-group">*/
/*                                                 <label class="control-label">*/
/*                                                     Gender*/
/*                                                 </label>*/
/*                                                 <div class="clip-radio radio-primary">*/
/*                                                     <input type="radio" value="female" name="gender" id="us-female" {% if profile[0].gender == 'female' %} checked=""  {% endif %}>*/
/*                                                     <label for="us-female">*/
/*                                                         Female*/
/*                                                     </label>*/
/*                                                     <input type="radio" value="male" name="gender" id="us-male" {% if profile[0].gender == 'male' %} checked=""  {% endif %}>*/
/*                                                     <label for="us-male">*/
/*                                                         Male*/
/*                                                     </label>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="row">*/
/*                                                 <div class="col-md-4">*/
/*                                                     <div class="form-group">*/
/*                                                         <label class="control-label">*/
/*                                                             Zip Code*/
/*                                                         </label>*/
/*                                                         <input class="form-control" value="{{ profile[0].zipcode }}" type="text" name="zipcode" id="zipcode">*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                                 <div class="col-md-8">*/
/*                                                     <div class="form-group">*/
/*                                                         <label class="control-label">*/
/*                                                             City*/
/*                                                         </label>*/
/*                                                         <input class="form-control tooltips" value="{{ profile[0].city }}" type="text" data-original-title="We'll display it when you write reviews" data-rel="tooltip" title="" data-placement="top" name="city" id="city">*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="form-group">*/
/*                                                 <label>*/
/*                                                     Image Upload*/
/*                                                 </label>*/
/*                                                 <div class="fileinput fileinput-new" data-provides="fileinput">*/
/*                                                     <div class="fileinput-new thumbnail"><img src="{{ asset(profile[0].imgSrc) }}" alt="">*/
/*                                                     </div>*/
/*                                                     <div class="fileinput-preview fileinput-exists thumbnail"></div>*/
/*                                                     <div class="user-edit-image-buttons">*/
/* 																			<span class="btn btn-azure btn-file"><span class="fileinput-new"><i class="fa fa-picture"></i> Select image</span><span class="fileinput-exists"><i class="fa fa-picture"></i> Change</span>*/
/* 																				<input type="file">*/
/* 																			</span>*/
/*                                                         <a href="#" class="btn fileinput-exists btn-red" data-dismiss="fileinput">*/
/*                                                             <i class="fa fa-times"></i> Remove*/
/*                                                         </a>*/
/*                                                     </div>*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </fieldset>*/
/*                                 <div class="row">*/
/*                                     <div class="col-md-12">*/
/*                                         <div>*/
/*                                             Required Fields*/
/*                                             <hr>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="row">*/
/*                                     <div class="col-md-8">*/
/*                                         <p>*/
/*                                             By clicking UPDATE, you are agreeing to the Policy and Terms &amp; Conditions.*/
/*                                         </p>*/
/*                                     </div>*/
/*                                     <div class="col-md-4">*/
/*                                         <button class="btn btn-primary pull-right" id="update" type="submit">*/
/*                                             Update <i class="fa fa-arrow-circle-right"></i>*/
/*                                         </button>*/
/*                                     </div>*/
/*                                 </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
/* {% block javascript %}*/
/*     <script >*/
/*         $('#update').click(function(){*/
/*             var firstname= document.getElementById('firstname').value;*/
/*             var lastname= document.getElementById('lastname').value;*/
/*             var emailaddress= document.getElementById('email').value;*/
/*             var password= document.getElementById('password').value;*/
/*             var password_again= document.getElementById('password_again').value;*/
/*             var gender = $("input[name='gender']:checked").val();*/
/*             var zipcode= document.getElementById('zipcode').value;*/
/*             var city= document.getElementById('city').value;*/
/*             var phone= document.getElementById('phone').value;*/
/*             var birth= document.getElementById('birth').value;*/
/*             var id= document.getElementById('id').value;*/
/*             $.ajax({*/
/*                 type: "POST",*/
/*                 url: Routing.generate('admin_users_Profile_edit', {id:id,firstname:firstname,lastname:lastname,birth:birth,emailaddress:emailaddress,phone:phone,gender:gender,zipcode:zipcode,city:city,password:password}),*/
/*                 beforeSend: function() {*/
/*                     // setting a timeout*/
/*                     swal("loading ...")*/
/*                 },*/
/*                 success: function(data){*/
/*                     swal("Good job!", "Recherche page  pour voir changement!", "success");*/
/*                     location.reload();*/
/*                 },*/
/*                 error: function(jqXHR, textStatus, errorThrown) {*/
/*                     sweetAlert("Oops...", "Status:="+textStatus + " Error:="+errorThrown, "error");*/
/*                 }*/
/*             })*/
/* */
/*         });*/
/*     </script>*/
/*     <script src="{{asset('Backoffice/vendor/sweetalert/sweet-alert.min.js')}}"></script>*/
/*     <script src="{{asset('Backoffice/vendor/toastr/toastr.min.js')}}"></script>*/
/*     <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*     <script src="{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}"></script>*/
/*     <script src="{{ asset('Backoffice/vendor/bootstrap-fileinput/jasny-bootstrap.js') }}"></script>*/
/* {% endblock %}*/
