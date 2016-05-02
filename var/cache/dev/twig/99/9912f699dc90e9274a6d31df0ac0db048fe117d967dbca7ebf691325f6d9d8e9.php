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
        $__internal_3182ba96bad0b46871e62423f6f18afdf5ee0ea34058413d5d584f1ea0b62c18 = $this->env->getExtension("native_profiler");
        $__internal_3182ba96bad0b46871e62423f6f18afdf5ee0ea34058413d5d584f1ea0b62c18->enter($__internal_3182ba96bad0b46871e62423f6f18afdf5ee0ea34058413d5d584f1ea0b62c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vehicle/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3182ba96bad0b46871e62423f6f18afdf5ee0ea34058413d5d584f1ea0b62c18->leave($__internal_3182ba96bad0b46871e62423f6f18afdf5ee0ea34058413d5d584f1ea0b62c18_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d7a8314adf4aeb93d51e3730d06771c4f39477fdd42382d18a75f1ab70fe699 = $this->env->getExtension("native_profiler");
        $__internal_0d7a8314adf4aeb93d51e3730d06771c4f39477fdd42382d18a75f1ab70fe699->enter($__internal_0d7a8314adf4aeb93d51e3730d06771c4f39477fdd42382d18a75f1ab70fe699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "Vehicle
";
        
        $__internal_0d7a8314adf4aeb93d51e3730d06771c4f39477fdd42382d18a75f1ab70fe699->leave($__internal_0d7a8314adf4aeb93d51e3730d06771c4f39477fdd42382d18a75f1ab70fe699_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a79775bdc3303aa8619f194fd97c661e2ac80e3b2bc3c2cb6750407f7cfe04a = $this->env->getExtension("native_profiler");
        $__internal_6a79775bdc3303aa8619f194fd97c661e2ac80e3b2bc3c2cb6750407f7cfe04a->enter($__internal_6a79775bdc3303aa8619f194fd97c661e2ac80e3b2bc3c2cb6750407f7cfe04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    <td><b>State:</td>
    <td>";
        // line 50
        if (($this->getAttribute((isset($context["vehicle"]) ? $context["vehicle"] : $this->getContext($context, "vehicle")), "status", array()) == 1)) {
            echo " Available ";
        }
        // line 51
        echo "        ";
        if (($this->getAttribute((isset($context["vehicle"]) ? $context["vehicle"] : $this->getContext($context, "vehicle")), "status", array()) == 0)) {
            echo " Unavailable ";
        }
        // line 52
        echo "
    </td>
  </tr>


</table>
";
        
        $__internal_6a79775bdc3303aa8619f194fd97c661e2ac80e3b2bc3c2cb6750407f7cfe04a->leave($__internal_6a79775bdc3303aa8619f194fd97c661e2ac80e3b2bc3c2cb6750407f7cfe04a_prof);

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
        return array (  125 => 52,  120 => 51,  116 => 50,  108 => 45,  100 => 40,  92 => 35,  84 => 30,  76 => 25,  68 => 20,  55 => 9,  49 => 8,  41 => 5,  35 => 4,  11 => 2,);
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
/*     <td><b>State:</td>*/
/*     <td>{%if vehicle.status==1 %} Available {% endif %}*/
/*         {%if vehicle.status==0 %} Unavailable {% endif %}*/
/* */
/*     </td>*/
/*   </tr>*/
/* */
/* */
/* </table>*/
/* {% endblock %}*/
