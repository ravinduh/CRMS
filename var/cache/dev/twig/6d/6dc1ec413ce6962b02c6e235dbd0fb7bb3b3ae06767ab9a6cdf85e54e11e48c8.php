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
        $__internal_a64614c4a9cfae263a7d3ba62591144c50efa0549ccc45a267309e026534bf0a = $this->env->getExtension("native_profiler");
        $__internal_a64614c4a9cfae263a7d3ba62591144c50efa0549ccc45a267309e026534bf0a->enter($__internal_a64614c4a9cfae263a7d3ba62591144c50efa0549ccc45a267309e026534bf0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a64614c4a9cfae263a7d3ba62591144c50efa0549ccc45a267309e026534bf0a->leave($__internal_a64614c4a9cfae263a7d3ba62591144c50efa0549ccc45a267309e026534bf0a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e7d939751825e417ce1d2388a4efabf19c696fd4d2642b20e57f4c2d175f621 = $this->env->getExtension("native_profiler");
        $__internal_9e7d939751825e417ce1d2388a4efabf19c696fd4d2642b20e57f4c2d175f621->enter($__internal_9e7d939751825e417ce1d2388a4efabf19c696fd4d2642b20e57f4c2d175f621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "Welcome to the Car Renting Management System
";
        
        $__internal_9e7d939751825e417ce1d2388a4efabf19c696fd4d2642b20e57f4c2d175f621->leave($__internal_9e7d939751825e417ce1d2388a4efabf19c696fd4d2642b20e57f4c2d175f621_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd70897ba3ee0553ca782aae14d78f23b62e514a71acc99c02dc879fa4c73b17 = $this->env->getExtension("native_profiler");
        $__internal_dd70897ba3ee0553ca782aae14d78f23b62e514a71acc99c02dc879fa4c73b17->enter($__internal_dd70897ba3ee0553ca782aae14d78f23b62e514a71acc99c02dc879fa4c73b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"head\">
      <div class=\"container\">
        <h1>Car Renting Management System</h1>
        <p>
       
        </p>
";
        // line 14
        $this->displayBlock('links', $context, $blocks);
        // line 17
        echo "

";
        
        $__internal_dd70897ba3ee0553ca782aae14d78f23b62e514a71acc99c02dc879fa4c73b17->leave($__internal_dd70897ba3ee0553ca782aae14d78f23b62e514a71acc99c02dc879fa4c73b17_prof);

    }

    // line 14
    public function block_links($context, array $blocks = array())
    {
        $__internal_28d2d727edd1fd7147097806d3a4fbf85b9fb71bb21efac2cc8844d64a246da3 = $this->env->getExtension("native_profiler");
        $__internal_28d2d727edd1fd7147097806d3a4fbf85b9fb71bb21efac2cc8844d64a246da3->enter($__internal_28d2d727edd1fd7147097806d3a4fbf85b9fb71bb21efac2cc8844d64a246da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "links"));

        // line 15
        echo "
";
        
        $__internal_28d2d727edd1fd7147097806d3a4fbf85b9fb71bb21efac2cc8844d64a246da3->leave($__internal_28d2d727edd1fd7147097806d3a4fbf85b9fb71bb21efac2cc8844d64a246da3_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_07608202b4e5391a1932ba91f5b1557d38bc29ffc9602cf7b40b96e63f13e574 = $this->env->getExtension("native_profiler");
        $__internal_07608202b4e5391a1932ba91f5b1557d38bc29ffc9602cf7b40b96e63f13e574->enter($__internal_07608202b4e5391a1932ba91f5b1557d38bc29ffc9602cf7b40b96e63f13e574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 22
        echo "
";
        
        $__internal_07608202b4e5391a1932ba91f5b1557d38bc29ffc9602cf7b40b96e63f13e574->leave($__internal_07608202b4e5391a1932ba91f5b1557d38bc29ffc9602cf7b40b96e63f13e574_prof);

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
        return array (  96 => 22,  90 => 21,  82 => 15,  76 => 14,  67 => 17,  65 => 14,  57 => 8,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
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
/* */
/* {% endblock %}*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/* {% endblock %}*/
/* */
