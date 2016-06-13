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
        $__internal_5eba8cc18e2061d93981875849f1d66cd710db82c097c8a81a9070cf93539c4b = $this->env->getExtension("native_profiler");
        $__internal_5eba8cc18e2061d93981875849f1d66cd710db82c097c8a81a9070cf93539c4b->enter($__internal_5eba8cc18e2061d93981875849f1d66cd710db82c097c8a81a9070cf93539c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5eba8cc18e2061d93981875849f1d66cd710db82c097c8a81a9070cf93539c4b->leave($__internal_5eba8cc18e2061d93981875849f1d66cd710db82c097c8a81a9070cf93539c4b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e8d1590780ccc3372f7a3beb938dddba398746be4040aff4be445600ab0bc7b = $this->env->getExtension("native_profiler");
        $__internal_8e8d1590780ccc3372f7a3beb938dddba398746be4040aff4be445600ab0bc7b->enter($__internal_8e8d1590780ccc3372f7a3beb938dddba398746be4040aff4be445600ab0bc7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "Welcome to the Car Renting Management System
";
        
        $__internal_8e8d1590780ccc3372f7a3beb938dddba398746be4040aff4be445600ab0bc7b->leave($__internal_8e8d1590780ccc3372f7a3beb938dddba398746be4040aff4be445600ab0bc7b_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_08abc407ffb71bf652b8ed427da079ed4e5deab27939ef1e3b6c4eac6d1ee4bb = $this->env->getExtension("native_profiler");
        $__internal_08abc407ffb71bf652b8ed427da079ed4e5deab27939ef1e3b6c4eac6d1ee4bb->enter($__internal_08abc407ffb71bf652b8ed427da079ed4e5deab27939ef1e3b6c4eac6d1ee4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_08abc407ffb71bf652b8ed427da079ed4e5deab27939ef1e3b6c4eac6d1ee4bb->leave($__internal_08abc407ffb71bf652b8ed427da079ed4e5deab27939ef1e3b6c4eac6d1ee4bb_prof);

    }

    // line 14
    public function block_links($context, array $blocks = array())
    {
        $__internal_0e38ff32011cff0ccb82cc7937f1404b1197e12aa0cf12ce269160807d3a74f7 = $this->env->getExtension("native_profiler");
        $__internal_0e38ff32011cff0ccb82cc7937f1404b1197e12aa0cf12ce269160807d3a74f7->enter($__internal_0e38ff32011cff0ccb82cc7937f1404b1197e12aa0cf12ce269160807d3a74f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "links"));

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
        
        $__internal_0e38ff32011cff0ccb82cc7937f1404b1197e12aa0cf12ce269160807d3a74f7->leave($__internal_0e38ff32011cff0ccb82cc7937f1404b1197e12aa0cf12ce269160807d3a74f7_prof);

    }

    // line 28
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4a0500e33be3bc8645c3a8bd207edb3e31f2be0f14ae96d783de8f4159d651fa = $this->env->getExtension("native_profiler");
        $__internal_4a0500e33be3bc8645c3a8bd207edb3e31f2be0f14ae96d783de8f4159d651fa->enter($__internal_4a0500e33be3bc8645c3a8bd207edb3e31f2be0f14ae96d783de8f4159d651fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 29
        echo "
";
        
        $__internal_4a0500e33be3bc8645c3a8bd207edb3e31f2be0f14ae96d783de8f4159d651fa->leave($__internal_4a0500e33be3bc8645c3a8bd207edb3e31f2be0f14ae96d783de8f4159d651fa_prof);

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
