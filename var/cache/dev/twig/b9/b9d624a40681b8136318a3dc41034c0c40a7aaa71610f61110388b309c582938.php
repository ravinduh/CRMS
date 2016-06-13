<?php

/* reservation/create.html.twig */
class __TwigTemplate_e40bb737ace0eb5d05c11cf41aa79acd81a078c298d30c0417e10772f64fc927 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "reservation/create.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_412684044d67e379da127965f69c5a437d34d4ae55511ad40a71a86c894233ec = $this->env->getExtension("native_profiler");
        $__internal_412684044d67e379da127965f69c5a437d34d4ae55511ad40a71a86c894233ec->enter($__internal_412684044d67e379da127965f69c5a437d34d4ae55511ad40a71a86c894233ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "reservation/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_412684044d67e379da127965f69c5a437d34d4ae55511ad40a71a86c894233ec->leave($__internal_412684044d67e379da127965f69c5a437d34d4ae55511ad40a71a86c894233ec_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9329f5514988efe32ab8c1cd0264baca8583d6469836d7aa916cb78bce9a38a = $this->env->getExtension("native_profiler");
        $__internal_c9329f5514988efe32ab8c1cd0264baca8583d6469836d7aa916cb78bce9a38a->enter($__internal_c9329f5514988efe32ab8c1cd0264baca8583d6469836d7aa916cb78bce9a38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Make Reservation
";
        
        $__internal_c9329f5514988efe32ab8c1cd0264baca8583d6469836d7aa916cb78bce9a38a->leave($__internal_c9329f5514988efe32ab8c1cd0264baca8583d6469836d7aa916cb78bce9a38a_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad1184403e43eb34e304e07290abddae6b53647e69a812ca5fb2f045032be97c = $this->env->getExtension("native_profiler");
        $__internal_ad1184403e43eb34e304e07290abddae6b53647e69a812ca5fb2f045032be97c->enter($__internal_ad1184403e43eb34e304e07290abddae6b53647e69a812ca5fb2f045032be97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "    
";
        
        $__internal_ad1184403e43eb34e304e07290abddae6b53647e69a812ca5fb2f045032be97c->leave($__internal_ad1184403e43eb34e304e07290abddae6b53647e69a812ca5fb2f045032be97c_prof);

    }

    public function getTemplateName()
    {
        return "reservation/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  59 => 10,  55 => 9,  49 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/default/new.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}*/
/* Make Reservation*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* {{ form_start(form) }}*/
/* {{ form_widget(form) }}*/
/* {{ form_end(form) }}    */
/* {% endblock %}*/
