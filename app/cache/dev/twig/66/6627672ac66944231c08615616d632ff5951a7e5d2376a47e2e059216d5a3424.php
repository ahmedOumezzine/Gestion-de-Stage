<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e8e9f71b41718258ab024da8bc93f6f4e19ed1ef5be4b503faeabf13a80befd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44ff7dc4afb4e44dd6d198b4845270a020948ad0fb879259abc957cac9eb12fb = $this->env->getExtension("native_profiler");
        $__internal_44ff7dc4afb4e44dd6d198b4845270a020948ad0fb879259abc957cac9eb12fb->enter($__internal_44ff7dc4afb4e44dd6d198b4845270a020948ad0fb879259abc957cac9eb12fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44ff7dc4afb4e44dd6d198b4845270a020948ad0fb879259abc957cac9eb12fb->leave($__internal_44ff7dc4afb4e44dd6d198b4845270a020948ad0fb879259abc957cac9eb12fb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c26d466508ca4e28c11b8b395e99eefb01728f0cf0300877ae4f40d82f4b45c9 = $this->env->getExtension("native_profiler");
        $__internal_c26d466508ca4e28c11b8b395e99eefb01728f0cf0300877ae4f40d82f4b45c9->enter($__internal_c26d466508ca4e28c11b8b395e99eefb01728f0cf0300877ae4f40d82f4b45c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c26d466508ca4e28c11b8b395e99eefb01728f0cf0300877ae4f40d82f4b45c9->leave($__internal_c26d466508ca4e28c11b8b395e99eefb01728f0cf0300877ae4f40d82f4b45c9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4309bf899e513b50891593199fe9486d7726128a5bfb1882fb9f5ce815664e0f = $this->env->getExtension("native_profiler");
        $__internal_4309bf899e513b50891593199fe9486d7726128a5bfb1882fb9f5ce815664e0f->enter($__internal_4309bf899e513b50891593199fe9486d7726128a5bfb1882fb9f5ce815664e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4309bf899e513b50891593199fe9486d7726128a5bfb1882fb9f5ce815664e0f->leave($__internal_4309bf899e513b50891593199fe9486d7726128a5bfb1882fb9f5ce815664e0f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf42b1b5c19622b310e79e0ff88e3275e7bd56f2b2377673748eb04433b7308b = $this->env->getExtension("native_profiler");
        $__internal_cf42b1b5c19622b310e79e0ff88e3275e7bd56f2b2377673748eb04433b7308b->enter($__internal_cf42b1b5c19622b310e79e0ff88e3275e7bd56f2b2377673748eb04433b7308b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_cf42b1b5c19622b310e79e0ff88e3275e7bd56f2b2377673748eb04433b7308b->leave($__internal_cf42b1b5c19622b310e79e0ff88e3275e7bd56f2b2377673748eb04433b7308b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
