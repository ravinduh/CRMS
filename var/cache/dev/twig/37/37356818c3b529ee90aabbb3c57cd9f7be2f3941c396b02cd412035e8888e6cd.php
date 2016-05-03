<?php

/* customer/view.html.twig */
class __TwigTemplate_34bfb77152c9a10a13f78ad38618f5206f4cb015fae4bd49d53b372dfcde2905 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "customer/view.html.twig", 2);
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
        $__internal_be2f418ab436f131e78f0266f3c77e9b52c56659bffa4edbfda3d5ddadd26c3e = $this->env->getExtension("native_profiler");
        $__internal_be2f418ab436f131e78f0266f3c77e9b52c56659bffa4edbfda3d5ddadd26c3e->enter($__internal_be2f418ab436f131e78f0266f3c77e9b52c56659bffa4edbfda3d5ddadd26c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "customer/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be2f418ab436f131e78f0266f3c77e9b52c56659bffa4edbfda3d5ddadd26c3e->leave($__internal_be2f418ab436f131e78f0266f3c77e9b52c56659bffa4edbfda3d5ddadd26c3e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a3690360b7936ecae37baf083ea759438fcb9456d8f4329a138fef954a8dee9 = $this->env->getExtension("native_profiler");
        $__internal_5a3690360b7936ecae37baf083ea759438fcb9456d8f4329a138fef954a8dee9->enter($__internal_5a3690360b7936ecae37baf083ea759438fcb9456d8f4329a138fef954a8dee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Customer
";
        
        $__internal_5a3690360b7936ecae37baf083ea759438fcb9456d8f4329a138fef954a8dee9->leave($__internal_5a3690360b7936ecae37baf083ea759438fcb9456d8f4329a138fef954a8dee9_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_17c1bfeedde55d4dac2534601bbffe2ef722a37dbf538daa417c68a207c19b22 = $this->env->getExtension("native_profiler");
        $__internal_17c1bfeedde55d4dac2534601bbffe2ef722a37dbf538daa417c68a207c19b22->enter($__internal_17c1bfeedde55d4dac2534601bbffe2ef722a37dbf538daa417c68a207c19b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "

<table style=\"width:100%\">

  <tr>
    <th></th>
    <th></th>
  </tr>

  <tr>
    <td><b>Name:</td>
    <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "name", array()));
        echo "</td>
  </tr>

  <tr>
    <td><b>NIC:</td>
    <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "nic", array()));
        echo "</td>
  </tr>

  <tr>
    <td><b>Contact Number:</td>
    <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "contactNumber", array()));
        echo "</td>
  </tr>

    <tr>
    <td><b>Address:</td>
    <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customer"]) ? $context["customer"] : $this->getContext($context, "customer")), "email", array()));
        echo "</td>
  </tr>

  


</table>
";
        
        $__internal_17c1bfeedde55d4dac2534601bbffe2ef722a37dbf538daa417c68a207c19b22->leave($__internal_17c1bfeedde55d4dac2534601bbffe2ef722a37dbf538daa417c68a207c19b22_prof);

    }

    public function getTemplateName()
    {
        return "customer/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 35,  84 => 30,  76 => 25,  68 => 20,  55 => 9,  49 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/achievement/view.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}*/
/* Customer*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* */
/* <table style="width:100%">*/
/* */
/*   <tr>*/
/*     <th></th>*/
/*     <th></th>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <td><b>Name:</td>*/
/*     <td>{{customer.name|e}}</td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <td><b>NIC:</td>*/
/*     <td>{{customer.nic|e}}</td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <td><b>Contact Number:</td>*/
/*     <td>{{customer.contactNumber|e}}</td>*/
/*   </tr>*/
/* */
/*     <tr>*/
/*     <td><b>Address:</td>*/
/*     <td>{{customer.email|e}}</td>*/
/*   </tr>*/
/* */
/*   */
/* */
/* */
/* </table>*/
/* {% endblock %}*/
