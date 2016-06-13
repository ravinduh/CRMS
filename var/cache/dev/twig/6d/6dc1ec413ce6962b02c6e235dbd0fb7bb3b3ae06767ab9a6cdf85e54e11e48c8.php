<?php

/* default/index.html.twig */
class __TwigTemplate_e442752c2a713eb0e8cda3572adc845e5faebeb6cd27e4c726a199b7f8bdc5d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'links' => array($this, 'block_links'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef365a46259f6d05b53ac53f84b9867c0185294f0df028bc7bcf007dda0d3e75 = $this->env->getExtension("native_profiler");
        $__internal_ef365a46259f6d05b53ac53f84b9867c0185294f0df028bc7bcf007dda0d3e75->enter($__internal_ef365a46259f6d05b53ac53f84b9867c0185294f0df028bc7bcf007dda0d3e75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef365a46259f6d05b53ac53f84b9867c0185294f0df028bc7bcf007dda0d3e75->leave($__internal_ef365a46259f6d05b53ac53f84b9867c0185294f0df028bc7bcf007dda0d3e75_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6edcb1ae7c6b5f5c2c0bb6b7058575d031643468b2dab69e90e2719cc3128f08 = $this->env->getExtension("native_profiler");
        $__internal_6edcb1ae7c6b5f5c2c0bb6b7058575d031643468b2dab69e90e2719cc3128f08->enter($__internal_6edcb1ae7c6b5f5c2c0bb6b7058575d031643468b2dab69e90e2719cc3128f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "Welcome to the Car Renting Management System
";
        
        $__internal_6edcb1ae7c6b5f5c2c0bb6b7058575d031643468b2dab69e90e2719cc3128f08->leave($__internal_6edcb1ae7c6b5f5c2c0bb6b7058575d031643468b2dab69e90e2719cc3128f08_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bf0361f02b0d97f435ef60b44289d9513e0dddf9786daf1e77fb5c865b3d142 = $this->env->getExtension("native_profiler");
        $__internal_0bf0361f02b0d97f435ef60b44289d9513e0dddf9786daf1e77fb5c865b3d142->enter($__internal_0bf0361f02b0d97f435ef60b44289d9513e0dddf9786daf1e77fb5c865b3d142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"head\">
      <div class=\"container\">
        <h1>Car Renting Management System</h1>
        <p>
       
        </p>
";
        // line 14
        $this->displayBlock('links', $context, $blocks);
        // line 24
        echo "

";
        
        $__internal_0bf0361f02b0d97f435ef60b44289d9513e0dddf9786daf1e77fb5c865b3d142->leave($__internal_0bf0361f02b0d97f435ef60b44289d9513e0dddf9786daf1e77fb5c865b3d142_prof);

    }

    // line 14
    public function block_links($context, array $blocks = array())
    {
        $__internal_613c6774e3f4c45e61defc4fcc29e663c00fbb7a6e1f4e9fe3d803e299996459 = $this->env->getExtension("native_profiler");
        $__internal_613c6774e3f4c45e61defc4fcc29e663c00fbb7a6e1f4e9fe3d803e299996459->enter($__internal_613c6774e3f4c45e61defc4fcc29e663c00fbb7a6e1f4e9fe3d803e299996459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "links"));

        // line 15
        echo "    <div class=\"btn-group\" >
       <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getUrl("vehicle_home");
        echo "\"> <button type=\"button\" class=\"btn btn-xs btn-success\">Vehicles</button></a>
    </div>


    <div class=\"btn-group\" >
       <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getUrl("customer_home");
        echo "\"> <button type=\"button\" class=\"btn btn-xs btn-success\">Customers</button></a>
    </div>
";
        
        $__internal_613c6774e3f4c45e61defc4fcc29e663c00fbb7a6e1f4e9fe3d803e299996459->leave($__internal_613c6774e3f4c45e61defc4fcc29e663c00fbb7a6e1f4e9fe3d803e299996459_prof);

    }

    // line 28
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5f782a491275701eb2223aae1b3fa34231913bb6b2eb58cfce4fed71fffa5d8b = $this->env->getExtension("native_profiler");
        $__internal_5f782a491275701eb2223aae1b3fa34231913bb6b2eb58cfce4fed71fffa5d8b->enter($__internal_5f782a491275701eb2223aae1b3fa34231913bb6b2eb58cfce4fed71fffa5d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 29
        echo "
";
        
        $__internal_5f782a491275701eb2223aae1b3fa34231913bb6b2eb58cfce4fed71fffa5d8b->leave($__internal_5f782a491275701eb2223aae1b3fa34231913bb6b2eb58cfce4fed71fffa5d8b_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 29,  103 => 28,  93 => 21,  85 => 16,  82 => 15,  76 => 14,  67 => 24,  65 => 14,  57 => 8,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}*/
/* Welcome to the Car Renting Management System*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="head">*/
/*       <div class="container">*/
/*         <h1>Car Renting Management System</h1>*/
/*         <p>*/
/*        */
/*         </p>*/
/* {% block links %}*/
/*     <div class="btn-group" >*/
/*        <a href="{{url('vehicle_home')}}"> <button type="button" class="btn btn-xs btn-success">Vehicles</button></a>*/
/*     </div>*/
/* */
/* */
/*     <div class="btn-group" >*/
/*        <a href="{{url('customer_home')}}"> <button type="button" class="btn btn-xs btn-success">Customers</button></a>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/* {% endblock %}*/
/* */
