<?php

/* customer/create.html.twig */
class __TwigTemplate_0f1931d9b61fc359cf19e8f0af486f58082616a0ab33d377fa61915623a1f02d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "customer/create.html.twig", 2);
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
        $__internal_8720357774de370c1297db43fa10ea9e81b760f6f9b6d4ce1a49280a8919c94a = $this->env->getExtension("native_profiler");
        $__internal_8720357774de370c1297db43fa10ea9e81b760f6f9b6d4ce1a49280a8919c94a->enter($__internal_8720357774de370c1297db43fa10ea9e81b760f6f9b6d4ce1a49280a8919c94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "customer/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8720357774de370c1297db43fa10ea9e81b760f6f9b6d4ce1a49280a8919c94a->leave($__internal_8720357774de370c1297db43fa10ea9e81b760f6f9b6d4ce1a49280a8919c94a_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_499caf216a8eb41cbcc32066106dba919884eb3b12513e700714accac0ea9e9a = $this->env->getExtension("native_profiler");
        $__internal_499caf216a8eb41cbcc32066106dba919884eb3b12513e700714accac0ea9e9a->enter($__internal_499caf216a8eb41cbcc32066106dba919884eb3b12513e700714accac0ea9e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Create Customer
";
        
        $__internal_499caf216a8eb41cbcc32066106dba919884eb3b12513e700714accac0ea9e9a->leave($__internal_499caf216a8eb41cbcc32066106dba919884eb3b12513e700714accac0ea9e9a_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee992a8c921c9f7df15978d271c70a412dd43a2fa3975fc4fae421aad636bc12 = $this->env->getExtension("native_profiler");
        $__internal_ee992a8c921c9f7df15978d271c70a412dd43a2fa3975fc4fae421aad636bc12->enter($__internal_ee992a8c921c9f7df15978d271c70a412dd43a2fa3975fc4fae421aad636bc12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ee992a8c921c9f7df15978d271c70a412dd43a2fa3975fc4fae421aad636bc12->leave($__internal_ee992a8c921c9f7df15978d271c70a412dd43a2fa3975fc4fae421aad636bc12_prof);

    }

    public function getTemplateName()
    {
        return "customer/create.html.twig";
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
/* Create Customer*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* {{ form_start(form) }}*/
/* {{ form_widget(form) }}*/
/* {{ form_end(form) }}    */
/* {% endblock %}*/
