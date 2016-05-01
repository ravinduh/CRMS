<?php

/* vehicle/create.html.twig */
class __TwigTemplate_f13083e0a7574cfc079a512e6a8070dd2b549020cc3fb6e583dc7fe1c6e20570 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "vehicle/create.html.twig", 2);
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
        $__internal_01764b1bc593c6051237fe8040966730d7ee7a4b7a91333701744da70efa578e = $this->env->getExtension("native_profiler");
        $__internal_01764b1bc593c6051237fe8040966730d7ee7a4b7a91333701744da70efa578e->enter($__internal_01764b1bc593c6051237fe8040966730d7ee7a4b7a91333701744da70efa578e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vehicle/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01764b1bc593c6051237fe8040966730d7ee7a4b7a91333701744da70efa578e->leave($__internal_01764b1bc593c6051237fe8040966730d7ee7a4b7a91333701744da70efa578e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_55c3a2b86f6f0cffa24f1512d4f0f25ed9502bfe66936d90864efafd2113a6e5 = $this->env->getExtension("native_profiler");
        $__internal_55c3a2b86f6f0cffa24f1512d4f0f25ed9502bfe66936d90864efafd2113a6e5->enter($__internal_55c3a2b86f6f0cffa24f1512d4f0f25ed9502bfe66936d90864efafd2113a6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Create Vehicle
";
        
        $__internal_55c3a2b86f6f0cffa24f1512d4f0f25ed9502bfe66936d90864efafd2113a6e5->leave($__internal_55c3a2b86f6f0cffa24f1512d4f0f25ed9502bfe66936d90864efafd2113a6e5_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_b11b7116aa84aa3e0f38ab35a2d458a51f45d054cf756405e3367f42ffd86028 = $this->env->getExtension("native_profiler");
        $__internal_b11b7116aa84aa3e0f38ab35a2d458a51f45d054cf756405e3367f42ffd86028->enter($__internal_b11b7116aa84aa3e0f38ab35a2d458a51f45d054cf756405e3367f42ffd86028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b11b7116aa84aa3e0f38ab35a2d458a51f45d054cf756405e3367f42ffd86028->leave($__internal_b11b7116aa84aa3e0f38ab35a2d458a51f45d054cf756405e3367f42ffd86028_prof);

    }

    public function getTemplateName()
    {
        return "vehicle/create.html.twig";
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
/* Create Vehicle*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* {{ form_start(form) }}*/
/* {{ form_widget(form) }}*/
/* {{ form_end(form) }}    */
/* {% endblock %}*/
