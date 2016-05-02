<?php

/* vehicle/viewall.html.twig */
class __TwigTemplate_ebc31a55ef2d8ffb2529cea95427497d4d1f334bdf2d33149955c0f312fdac6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "vehicle/viewall.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'links' => array($this, 'block_links'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59acf5c23dbf1fe6bd8ff77f9710b0438bf235f0fdcb576d77a29c81683aad34 = $this->env->getExtension("native_profiler");
        $__internal_59acf5c23dbf1fe6bd8ff77f9710b0438bf235f0fdcb576d77a29c81683aad34->enter($__internal_59acf5c23dbf1fe6bd8ff77f9710b0438bf235f0fdcb576d77a29c81683aad34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vehicle/viewall.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59acf5c23dbf1fe6bd8ff77f9710b0438bf235f0fdcb576d77a29c81683aad34->leave($__internal_59acf5c23dbf1fe6bd8ff77f9710b0438bf235f0fdcb576d77a29c81683aad34_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2a490dc957c9972ba0be09a773c2b7d6d3fb783619c976e9d9ce82458528661 = $this->env->getExtension("native_profiler");
        $__internal_f2a490dc957c9972ba0be09a773c2b7d6d3fb783619c976e9d9ce82458528661->enter($__internal_f2a490dc957c9972ba0be09a773c2b7d6d3fb783619c976e9d9ce82458528661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "All Vehicles
";
        
        $__internal_f2a490dc957c9972ba0be09a773c2b7d6d3fb783619c976e9d9ce82458528661->leave($__internal_f2a490dc957c9972ba0be09a773c2b7d6d3fb783619c976e9d9ce82458528661_prof);

    }

    // line 8
    public function block_links($context, array $blocks = array())
    {
        $__internal_8800974791a4248f27959911f3dfb9af03f03b50332074f3e9d1ccd427bf9d03 = $this->env->getExtension("native_profiler");
        $__internal_8800974791a4248f27959911f3dfb9af03f03b50332074f3e9d1ccd427bf9d03->enter($__internal_8800974791a4248f27959911f3dfb9af03f03b50332074f3e9d1ccd427bf9d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "links"));

        // line 9
        echo "    <div class=\"btn-group\" >
       <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getUrl("vehicle_create");
        echo "\"> <button type=\"button\" class=\"btn btn-xs btn-success\">Create Vehicle</button></a>
    </div>
";
        
        $__internal_8800974791a4248f27959911f3dfb9af03f03b50332074f3e9d1ccd427bf9d03->leave($__internal_8800974791a4248f27959911f3dfb9af03f03b50332074f3e9d1ccd427bf9d03_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_12278ae7661d70cdc71bb736c329190f27436a383279d314c07dd837a02ee74b = $this->env->getExtension("native_profiler");
        $__internal_12278ae7661d70cdc71bb736c329190f27436a383279d314c07dd837a02ee74b->enter($__internal_12278ae7661d70cdc71bb736c329190f27436a383279d314c07dd837a02ee74b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "<table width=\"100%\">
\t<tr>
\t\t<th>Name</th>
        <th>Type</th>
        <th>Plate</th>
\t\t<th>Fuel</th>
\t\t<th>Transmission</th>
\t\t<th>Description</th>
\t\t<th>Status</th>
\t</tr>

    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["vehicles"]) ? $context["vehicles"] : $this->getContext($context, "vehicles")));
        foreach ($context['_seq'] as $context["_key"] => $context["vehi"]) {
            // line 28
            echo "        <tr>
        <td>
        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("vehicle_viewAll", array("id" => $this->getAttribute($context["vehi"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["vehi"], "name", array()));
            echo "</a>
        </td>

        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["vehi"], "type", array()));
            echo "
        </td>

\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["vehi"], "plate", array()));
            echo "
        </td>


        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["vehi"], "fuel", array()));
            echo "
        </td>

        <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["vehi"], "transmission", array()));
            echo "
        </td>

        <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["vehi"], "description", array()));
            echo "
        </td>


       \t<td>";
            // line 50
            if (($this->getAttribute($context["vehi"], "status", array()) == 1)) {
                echo " Available ";
            }
            // line 51
            echo "            ";
            if (($this->getAttribute($context["vehi"], "status", array()) == 0)) {
                echo " Unavailable ";
            }
            // line 52
            echo "
        </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "</ul>

";
        
        $__internal_12278ae7661d70cdc71bb736c329190f27436a383279d314c07dd837a02ee74b->leave($__internal_12278ae7661d70cdc71bb736c329190f27436a383279d314c07dd837a02ee74b_prof);

    }

    public function getTemplateName()
    {
        return "vehicle/viewall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 56,  145 => 52,  140 => 51,  136 => 50,  129 => 46,  123 => 43,  117 => 40,  110 => 36,  104 => 33,  96 => 30,  92 => 28,  88 => 27,  75 => 16,  69 => 15,  59 => 10,  56 => 9,  50 => 8,  42 => 5,  36 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/default/new.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}*/
/* All Vehicles*/
/* {% endblock %}*/
/* */
/* {% block links %}*/
/*     <div class="btn-group" >*/
/*        <a href="{{url('vehicle_create')}}"> <button type="button" class="btn btn-xs btn-success">Create Vehicle</button></a>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* <table width="100%">*/
/* 	<tr>*/
/* 		<th>Name</th>*/
/*         <th>Type</th>*/
/*         <th>Plate</th>*/
/* 		<th>Fuel</th>*/
/* 		<th>Transmission</th>*/
/* 		<th>Description</th>*/
/* 		<th>Status</th>*/
/* 	</tr>*/
/* */
/*     {% for vehi in vehicles %}*/
/*         <tr>*/
/*         <td>*/
/*         <a href="{{url('vehicle_viewAll',{'id':vehi.id})}}">{{ vehi.name|e }}</a>*/
/*         </td>*/
/* */
/*         <td>{{ vehi.type|e}}*/
/*         </td>*/
/* */
/* 		<td>{{ vehi.plate|e }}*/
/*         </td>*/
/* */
/* */
/*         <td>{{ vehi.fuel|e }}*/
/*         </td>*/
/* */
/*         <td>{{ vehi.transmission|e }}*/
/*         </td>*/
/* */
/*         <td>{{ vehi.description|e }}*/
/*         </td>*/
/* */
/* */
/*        	<td>{%if vehi.status==1 %} Available {% endif %}*/
/*             {%if vehi.status==0 %} Unavailable {% endif %}*/
/* */
/*         </td>*/
/*         </tr>*/
/*     {% endfor %}*/
/* </ul>*/
/* */
/* {% endblock %}*/
