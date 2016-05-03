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
        $__internal_17e8cf85d436510243cd9b0548a613f24a771781ce195d1ea6a8753f5df34510 = $this->env->getExtension("native_profiler");
        $__internal_17e8cf85d436510243cd9b0548a613f24a771781ce195d1ea6a8753f5df34510->enter($__internal_17e8cf85d436510243cd9b0548a613f24a771781ce195d1ea6a8753f5df34510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17e8cf85d436510243cd9b0548a613f24a771781ce195d1ea6a8753f5df34510->leave($__internal_17e8cf85d436510243cd9b0548a613f24a771781ce195d1ea6a8753f5df34510_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c17c181d16f5e671ab7615a9993a3da25729ce6cc5db49a0596f2c9f8abcd95 = $this->env->getExtension("native_profiler");
        $__internal_5c17c181d16f5e671ab7615a9993a3da25729ce6cc5db49a0596f2c9f8abcd95->enter($__internal_5c17c181d16f5e671ab7615a9993a3da25729ce6cc5db49a0596f2c9f8abcd95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "Welcome to the Car Renting Management System
";
        
        $__internal_5c17c181d16f5e671ab7615a9993a3da25729ce6cc5db49a0596f2c9f8abcd95->leave($__internal_5c17c181d16f5e671ab7615a9993a3da25729ce6cc5db49a0596f2c9f8abcd95_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_76090f59d836d3e7bb093e7579b52d864c5fb4a87d46324d0338ff0f1958f8dc = $this->env->getExtension("native_profiler");
        $__internal_76090f59d836d3e7bb093e7579b52d864c5fb4a87d46324d0338ff0f1958f8dc->enter($__internal_76090f59d836d3e7bb093e7579b52d864c5fb4a87d46324d0338ff0f1958f8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_76090f59d836d3e7bb093e7579b52d864c5fb4a87d46324d0338ff0f1958f8dc->leave($__internal_76090f59d836d3e7bb093e7579b52d864c5fb4a87d46324d0338ff0f1958f8dc_prof);

    }

    // line 14
    public function block_links($context, array $blocks = array())
    {
        $__internal_52d98b943cc9d1463006d8d949f26e012f4cfc0a7c9f4d5db82107fe5564fbb7 = $this->env->getExtension("native_profiler");
        $__internal_52d98b943cc9d1463006d8d949f26e012f4cfc0a7c9f4d5db82107fe5564fbb7->enter($__internal_52d98b943cc9d1463006d8d949f26e012f4cfc0a7c9f4d5db82107fe5564fbb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "links"));

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
        
        $__internal_52d98b943cc9d1463006d8d949f26e012f4cfc0a7c9f4d5db82107fe5564fbb7->leave($__internal_52d98b943cc9d1463006d8d949f26e012f4cfc0a7c9f4d5db82107fe5564fbb7_prof);

    }

    // line 28
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d1eb148afb792eb6237e52f42d7c3ab7b2b9884d4f0f918ad665a6ce68b071c8 = $this->env->getExtension("native_profiler");
        $__internal_d1eb148afb792eb6237e52f42d7c3ab7b2b9884d4f0f918ad665a6ce68b071c8->enter($__internal_d1eb148afb792eb6237e52f42d7c3ab7b2b9884d4f0f918ad665a6ce68b071c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 29
        echo "
";
        
        $__internal_d1eb148afb792eb6237e52f42d7c3ab7b2b9884d4f0f918ad665a6ce68b071c8->leave($__internal_d1eb148afb792eb6237e52f42d7c3ab7b2b9884d4f0f918ad665a6ce68b071c8_prof);

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
