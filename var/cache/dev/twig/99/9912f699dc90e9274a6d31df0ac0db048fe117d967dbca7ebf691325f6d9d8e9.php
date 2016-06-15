<?php

/* vehicle/view.html.twig */
class __TwigTemplate_8fff062c6def10b5c6004d2c200d0a6aa0db8bfcd8e9d823bcddd6307320de12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "vehicle/view.html.twig", 2);
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
        $__internal_79901c02b3eb686bd77985aba7e031ef5acd1e0132208eed1986da237a5c3676 = $this->env->getExtension("native_profiler");
        $__internal_79901c02b3eb686bd77985aba7e031ef5acd1e0132208eed1986da237a5c3676->enter($__internal_79901c02b3eb686bd77985aba7e031ef5acd1e0132208eed1986da237a5c3676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vehicle/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79901c02b3eb686bd77985aba7e031ef5acd1e0132208eed1986da237a5c3676->leave($__internal_79901c02b3eb686bd77985aba7e031ef5acd1e0132208eed1986da237a5c3676_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5cc34aa0426987dd39983e0f5a23d5d186a70e4fbb0179db83aa4b907a98a9a = $this->env->getExtension("native_profiler");
        $__internal_f5cc34aa0426987dd39983e0f5a23d5d186a70e4fbb0179db83aa4b907a98a9a->enter($__internal_f5cc34aa0426987dd39983e0f5a23d5d186a70e4fbb0179db83aa4b907a98a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Vehicle
";
        
        $__internal_f5cc34aa0426987dd39983e0f5a23d5d186a70e4fbb0179db83aa4b907a98a9a->leave($__internal_f5cc34aa0426987dd39983e0f5a23d5d186a70e4fbb0179db83aa4b907a98a9a_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_98617845ea1e1f5a370b3878ec08cc54a5270853a79f8c67e91f82d30f33dd52 = $this->env->getExtension("native_profiler");
        $__internal_98617845ea1e1f5a370b3878ec08cc54a5270853a79f8c67e91f82d30f33dd52->enter($__internal_98617845ea1e1f5a370b3878ec08cc54a5270853a79f8c67e91f82d30f33dd52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vehicle"]) ? $context["vehicle"] : $this->getContext($context, "vehicle")), "name", array()));
        echo "</td>
  </tr>

  <tr>
    <td><b>Type:</td>
    <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vehicle"]) ? $context["vehicle"] : $this->getContext($context, "vehicle")), "type", array()));
        echo "</td>
  </tr>

  <tr>
    <td><b>Plate:</td>
    <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vehicle"]) ? $context["vehicle"] : $this->getContext($context, "vehicle")), "plate", array()));
        echo "</td>
  </tr>

    <tr>
    <td><b>Fuel Type:</td>
    <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vehicle"]) ? $context["vehicle"] : $this->getContext($context, "vehicle")), "fuel", array()));
        echo "</td>
  </tr>

    <tr>
    <td><b>Transmission:</td>
    <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vehicle"]) ? $context["vehicle"] : $this->getContext($context, "vehicle")), "transmission", array()));
        echo "</td>
  </tr>

    <tr>
    <td><b>Description:</td>
    <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vehicle"]) ? $context["vehicle"] : $this->getContext($context, "vehicle")), "type", array()));
        echo "</td>
  </tr>

    <tr>
    <td><b>State: </td>
    <td>";
        // line 50
        if (($this->getAttribute((isset($context["vehicle"]) ? $context["vehicle"] : $this->getContext($context, "vehicle")), "status", array()) == "available")) {
            echo " Available ";
        }
        // line 51
        echo "        ";
        if (($this->getAttribute((isset($context["vehicle"]) ? $context["vehicle"] : $this->getContext($context, "vehicle")), "status", array()) == "rented")) {
            echo " Unavailable ";
        }
        // line 52
        echo "        ";
        if (($this->getAttribute((isset($context["vehicle"]) ? $context["vehicle"] : $this->getContext($context, "vehicle")), "status", array()) == "reserved")) {
            echo " Reserved ";
        }
        // line 53
        echo "
    </td>
  </tr>


</table>
";
        
        $__internal_98617845ea1e1f5a370b3878ec08cc54a5270853a79f8c67e91f82d30f33dd52->leave($__internal_98617845ea1e1f5a370b3878ec08cc54a5270853a79f8c67e91f82d30f33dd52_prof);

    }

    public function getTemplateName()
    {
        return "vehicle/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 53,  125 => 52,  120 => 51,  116 => 50,  108 => 45,  100 => 40,  92 => 35,  84 => 30,  76 => 25,  68 => 20,  55 => 9,  49 => 8,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/achievement/view.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}*/
/* Vehicle*/
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
/*     <td>{{vehicle.name|e}}</td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <td><b>Type:</td>*/
/*     <td>{{vehicle.type|e}}</td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <td><b>Plate:</td>*/
/*     <td>{{vehicle.plate|e}}</td>*/
/*   </tr>*/
/* */
/*     <tr>*/
/*     <td><b>Fuel Type:</td>*/
/*     <td>{{vehicle.fuel|e}}</td>*/
/*   </tr>*/
/* */
/*     <tr>*/
/*     <td><b>Transmission:</td>*/
/*     <td>{{vehicle.transmission|e}}</td>*/
/*   </tr>*/
/* */
/*     <tr>*/
/*     <td><b>Description:</td>*/
/*     <td>{{vehicle.type|e}}</td>*/
/*   </tr>*/
/* */
/*     <tr>*/
/*     <td><b>State: </td>*/
/*     <td>{%if vehicle.status=='available' %} Available {% endif %}*/
/*         {%if vehicle.status=='rented' %} Unavailable {% endif %}*/
/*         {%if vehicle.status=='reserved' %} Reserved {% endif %}*/
/* */
/*     </td>*/
/*   </tr>*/
/* */
/* */
/* </table>*/
/* {% endblock %}*/
